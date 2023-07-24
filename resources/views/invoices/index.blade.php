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
       <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex align-center col-sm-12">
                <h6 class="col-sm-10 m-0 font-weight-bold text-primary">DataTables Example</h6>
                <div class="d-flex col-sm-2 justify-content-between">
                    <div class="col-12">
                        <a class="text-decoration-none" href="{{ route('invoices.create') }}"><button type="submit" class="btn btn-block btn-success">  <i class="fas fa-fw fa-plus"></i></button></a>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <td>ID</td>
                               <td>Vehicle Name</td>
                               <td>Address</td>
                               <td>Phone</td>
                               <td>Vehicle Type</td>
                               <td>Price</td>
                               <td>Created date</td>
                               <td class="text-center">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{$invoice->id}}</td>
                                    <td>{{$invoice->vehicle_name}}</td>
                                    <td>{{$invoice->address}}</td>
                                    <td>{{$invoice->phone}}</td>
                                    <td>{{$invoice->vehicle_type}}</td>
                                    <td>$ {{$invoice->price}}</td>
                                    <td>{{$invoice->create_at}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('invoices.edit', $invoice->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('invoices.destroy', $invoice->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                          </form>
                                    </td>
                                </tr>
                                @endforeach
                                @if(count($invoices) === 0)
                                <tr>
                                    No invoices available
                                </tr>
                                @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
