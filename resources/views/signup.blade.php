@extends('layout')

@section('content')
    <link rel="stylesheet" href="css/signin_style.css">
    <div class="wrapper">
        <form action="/signup" method="POST">
            <div class="container main">
                <div class="input-box">
                    <header>Sign Up</header>
                    <div class="input-field">
                        <input type="text" class="input" id="name" required="" autocomplete="off" name="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field">
                        <input type="email" class="input" id="email" required="" autocomplete="off"
                            name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" id="pass" required="" name="pass">
                        <label for="pass">Password</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input" id="confpass" required="" name="confpass">
                        <label for="confpass">Confirm Password</label>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="p-0 m-0" style="list-style: none">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-field">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                    <div class="signin">
                        <span>Already have an account <a href="/signin">Sign in here</a></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
