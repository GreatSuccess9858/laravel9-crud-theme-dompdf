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
                <h6 class="col-sm-8 m-0 font-weight-bold text-primary">DataTables Example</h6>
                <div class="d-flex col-sm-4 justify-content-between">
                    <div class="col-6">
                        <a class="text-decoration-none" href="{{ route('users.create') }}"><button type="submit" class="btn btn-block btn-success">  <i class="fas fa-fw fa-user-plus"></i></button></a>
                    </div>
                    <div class="col-6">
                        <a class="text-decoration-none" href="{{ route('users.generate-pdf') }}"><button type="submit" class="btn btn-block btn-success">  <i class="fas fa-fw fa-print"></i></button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <td>ID</td>
                               <td>Name</td>
                               <td>Last Name</td>
                               <td>Email</td>
                               <td class="text-center">Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                                            <form action="{{ route('users.destroy', $user->id)}}" method="post" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                                              </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if(count($users) === 0)
                                    <tr>
                                        No Users available
                                    </tr>
                                    @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
