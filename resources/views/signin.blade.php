@extends('layout')

@section('content')
    <link rel="stylesheet" href="css/signin_style.css">
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <div class="text">
                        <p>Start shopping with us today!</p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Sign in</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" required="" autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="pass" required="">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Sign In">
                        </div>
                        <div class="signin">
                            <span>Don't have an account yet? <a href="#">Create here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
