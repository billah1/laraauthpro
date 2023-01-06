@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto">
                <div class="card p-2">
                    <div class="card-body">
                        <form action="{{ route('login.store') }}" method="POST">
                            @csrf
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
                               <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Remember Me
                                </label>
                              </div>
                               <div class="mb-3">
                                <button type="submit" class="btn btn-success">Login</button>
                               </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
