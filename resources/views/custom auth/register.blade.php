@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-8 m-auto">
            <div class="card  rounded">
                <h4 class="card-title p-2">Registration from</h4>
                <div class="card-body">
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                         <label for="name" class="form-label">Name</label>
                         <input class="form-control @error('name')
                          is_invalid
                         @enderror" type="text" name="name" id="">
                         @error('name')
                           <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                        </div>
                        <div class="mb-3">
                         <label for="email" class="form-label">Email</label>
                         <input class="form-control @error('email')
                         is_invalid
                        @enderror" type="text" name="email" id="">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                        </div>
                        <div class="mb-3">
                         <label for="phone" class="form-label">Phone</label>
                         <input class="form-control @error('phone')
                         is_invalid
                        @enderror" type="tel" name="phone" id="">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                        </div>
                        <div class="mb-3">
                         <label for="password" class="form-label">Password</label>
                         <input class="form-control @error('password')
                         is_invalid
                        @enderror" type="password" name="password" id="">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                        </div>
                        <div class="mb-3">
                         <label for="password" class="form-label">Confirm Password</label>
                         <input class="form-control" type="password" name="password_confirmation" id="">
                        </div>
                        <div class="mb-3">
                         <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                     </form>

                </div>


            </div>

        </div>
    </div>
  </div>
@endsection
