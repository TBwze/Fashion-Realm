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
                    <form action="/signin" method="POST">
                        <div class="input-box">
                            <header>Sign In</header>
                            <div class="input-field">
                                <input type="email" class="input" id="email" required="" autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="pass" required="">
                                <label for="pass">Password</label>
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
                                <input type="submit" class="submit" value="Sign In">
                            </div>
                            <div class="signin">
                                <span>Don't have an account yet? <a href="/signup">Create here</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
