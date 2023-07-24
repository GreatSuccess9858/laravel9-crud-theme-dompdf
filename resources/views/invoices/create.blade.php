@extends('layouts.admin')
@section('main-content')
    <!-- Page Heading -->
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div><br />
    @endif
    @if(session()->get('error'))
        <div class="alert alert-danger">
        {{ session()->get('error') }}
        </div><br />
    @endif
       <div class="card shadow mb-4 col-sm-12 p-3">
            <div class="card-header py-3 d-flex align-center col-sm-12">
                <h6 class="col-sm-12 m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="d-flex">
                <div class="card border-left-primary p-2 mt-2 mb-2 mr-1 col-sm-12">
                    <form method="post" action="{{ route('invoices.store') }}">
                        <div class="col-sm-6">
                            <div class="log-img text-center">
                                <img src="{{ asset('landing/img/icon/1.png') }}">
                            </div>
                             <input type="hidden" class="form-control" name="id" value="{{ $invoice->id ?? null }}"/>
                              <div class="form-group">
                                  @csrf
                                  <label for="name">Vehicle Name</label>
                                  <input type="text" class="form-control" name="vehicle_name" value="{{ old('vehicle_name',$invoice->vehicle_name ?? '') }}"/>
                              </div>
                              <div class="form-group">
                                  <label for="last_name">Address</label>
                                  <input type="text" class="form-control" name="address" value="{{ old('address',$invoice->address ?? '') }}"/>
                              </div>
                              <div class="form-group">
                                  <label for="phone">Phone</label>
                                  <input type="text" class="form-control" name="phone" value="{{ old('phone',$invoice->phone ?? '') }}"/>
                              </div>
                              <div class="form-group">
                                  <label for="vehicle_type">Vehicle Type</label>
                                  <input type="text" class="form-control" name="vehicle_type" value="{{ old('vehicle_type',$invoice->vehicle_type ?? '') }}"/>
                              </div>
                              <div class="form-group">
                                  <label for="price">Price</label>
                                  <input type="text" class="form-control" name="price" value="{{ old('price',$invoice->price ?? '') }}"/>
                              </div>
                        </div>
                        <div class="col-sm-6">
                        </div>
                          <button type="submit" class="btn btn-block btn-danger">{{ isset($invoice) ? 'Update' : 'Create' }} Invoice</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
