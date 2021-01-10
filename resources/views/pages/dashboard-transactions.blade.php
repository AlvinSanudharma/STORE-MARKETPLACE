@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions
@endsection

@section('content')
    <!-- Page content -->
        <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Transactions</h2>
                <p class="dashboard-subtitle">
                  Big result start from the small one
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12 mt-2">
                    <ul
                      class="nav nav-pills mb-3"
                      id="pills-tab"
                      role="tablist"
                    >
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link active"
                          id="pills-home-tab"
                          data-toggle="pill"
                          href="#pills-home"
                          role="tab"
                          aria-controls="pills-home"
                          aria-selected="true"
                          >Sell Product</a
                        >
                      </li>
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link"
                          id="pills-profile-tab"
                          data-toggle="pill"
                          href="#pills-profile"
                          role="tab"
                          aria-controls="pills-profile"
                          aria-selected="false"
                          >Buy Product</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="pills-home"
                        role="tabpanel"
                        aria-labelledby="pills-home-tab"
                      >
                        @foreach ($Selltransactions as $Selltransaction)
                            <a
                          href="{{ route('dashboard-transaction-details', $Selltransaction->id) }}"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="{{ Storage::url($Selltransaction->product->galleries->first()->photo ?? '') }}"
                                  alt=""
                                  class="w-50"
                                />
                              </div>
                              <div class="col-md-4">{{ $Selltransaction->product->name }}</div>
                              <div class="col-md-3">{{ $Selltransaction->product->user->store_name }}y</div>
                              <div class="col-md-3">{{ $Selltransaction->created_at }}</div>
                              <div class="col-md-1 d-done d-md-block">
                                <img
                                  src="/images/dashboard-ic-more.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                        @endforeach
                      </div>
                      <div
                        class="tab-pane fade"
                        id="pills-profile"
                        role="tabpanel"
                        aria-labelledby="pills-profile-tab"
                      >
                         @foreach ($Buytransactions as $Buytransaction)
                            <a
                          href="{{ route('dashboard-transaction-details', $id) }}"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="{{ Storage::url($Buytransaction->product->galleries->first()->photo ?? '') }}"
                                  alt=""
                                  class="w-50"
                                />
                              </div>
                              <div class="col-md-4">{{ $Buytransaction->product->name }}</div>
                              <div class="col-md-3">{{ $Buytransaction->product->user->store_name }}y</div>
                              <div class="col-md-3">{{ $Buytransaction->created_at }}</div>
                              <div class="col-md-1 d-done d-md-block">
                                <img
                                  src="/images/dashboard-ic-more.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection