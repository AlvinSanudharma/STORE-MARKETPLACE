@extends('layouts.dashboard')

@section('title')
    Store Dashboard Products Details
@endsection

@section('content')
    <!-- Page content -->
         <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Shirup Marzan</h2>
                <p class="dashboard-subtitle">Product Details</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Product Name</label>
                                <input
                                  type="text"
                                  name=""
                                  id=""
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Price</label>
                                <input
                                  type="number"
                                  name=""
                                  id=""
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Category</label>
                                <select name="category" class="form-control">
                                  <option value="" disabled>
                                    Select Category
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="editor"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5 btn-block"
                              >
                                Update Product
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src="/images/product-card-1.png"
                                alt=""
                                class="w-100"
                              />
                              <a href="" class="delete-gallery">
                                <img src="/images/remove-ic.svg" alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src="/images/product-card-2.png"
                                alt=""
                                class="w-100"
                              />
                              <a href="" class="delete-gallery">
                                <img src="/images/remove-ic.svg" alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src="/images/product-card-3.png"
                                alt=""
                                class="w-100"
                              />
                              <a href="" class="delete-gallery">
                                <img src="/images/remove-ic.svg" alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-12">
                            <input
                              type="file"
                              id="file"
                              style="display: none"
                              multiple
                            />
                            <button
                              class="btn btn-secondary btn-block mt-3"
                              onclick="thisFileUpload()"
                            >
                              Add Photo
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
      function thisFileUpload() {
        document.getElementById("file").click();
      }
    </script>
    <script>
      CKEDITOR.replace("editor");
    </script>
@endpush