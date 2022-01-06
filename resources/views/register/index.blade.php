@extends('layouts.main')

@section('container')
<div class="container">
    <main class="form-signup">
        <form action="/register" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal my-4">Please sign up</h1>
            <div class="form-floating mt-5">
                <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-floating my-2">
                <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-floating my-2">
                <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
    <p>Already have account?</p> <a href="/login">Login Now!</a>
</div>
@endsection