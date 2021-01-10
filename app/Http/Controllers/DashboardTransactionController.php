<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\TransactionDetail;

class DashboardTransactionController extends Controller
{
    public function index()
    {
        $Selltransactions = TransactionDetail::with(['transaction.user','product.galleries'])->whereHas('product', function($product){
            $product->where('users_id', Auth::user()->id);
        })->get();

        $Buytransactions = TransactionDetail::with(['transaction.user','product.galleries'])->whereHas('transaction', function($transaction){
            $transaction->where('users_id', Auth::user()->id);
        })->get();

        return view('pages.dashboard-transactions', [
            'Selltransactions' => $Selltransactions,
            'Buytransactions' => $Buytransactions
        ]);
    }
    public function details(Request $request, $id)
    {
        $transaction = TransactionDetail::with(['transaction.user','product.galleries'])->findOrFail($id);
        return view('pages.dashboard-transactions-details', [
            'transaction' => $transaction
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = TransactionDetail::findOrfail($id);
        $item->update($data);

        return redirect()->route('dashboard-transaction-details', $id);
    }
}
