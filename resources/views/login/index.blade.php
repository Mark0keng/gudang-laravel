@extends('layouts.main')

@section('container')
<div class="container">
    <main class="form-signin">

        @if (session('success'))
        <div class="alert alert-success alert-dismissable fade show ms-auto" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss='alert'></button>
        </div>
        @endif

        <form action="/login" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal my-4">Please sign in</h1>
            
            <div class="form-floating mt-5">
                <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" autofocus required id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-floating my-2">
                <input type="password" name="password" class="form-control" autofocus required id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="btn btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
    <p>Not registered yet?</p> <a href="/register">Register Now!</a>
</div>
@endsection