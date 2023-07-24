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
                <h6 class="col-sm-8 m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="d-flex">
                <div class="col-sm-4 card border-left-primary p-2 mt-2 mb-2 mr-1">
                    <form method="post" action="{{ route('users.store') }}">
                        <div class="log-img text-center">
                            <img src="{{ asset('landing/img/icon/1.png') }}">
                        </div>
                         <input type="hidden" class="form-control" name="id" value="{{ $user->id ?? null }}"/>
                          <div class="form-group">
                              @csrf
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" value="{{ old('name',$user->name ?? '') }}"/>
                          </div>
                          <div class="form-group">
                              <label for="last_name">Last Name</label>
                              <input type="text" class="form-control" name="last_name" value="{{ old('last_name',$user->last_name ?? '') }}"/>
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" value="{{ old('email',$user->email ?? '') }}" @if(isset($user)) readonly @endif/>
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" name="password"/>
                          </div>
                         <div class="form-group">
                              <label for="password_confirmation">Password Confirmation</label>
                              <input type="password" class="form-control" name="password_confirmation"/>
                          </div>
                          <button type="submit" class="btn btn-block btn-danger">{{ isset($user) ? 'Update' : 'Create' }} User</button>
                    </form>
                </div>
                <div class="col-sm-8 card border-left-primary mt-2 mb-2 pr-4">
                    <div class="image-div">
                        <img src="{{ asset('landing/img/banner/about1.png') }}" style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
@endsection
