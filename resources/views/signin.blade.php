@extends('layout')

@section('contents')
    <div class="container" id="container">
        <div class="form-container. sign-up">
            <form action="/signup" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Sign Up</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></i></a>
                </div>
                <span>or create a new account</span>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirmpassword" placeholder="Confirm Password">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color: red">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container. sign-in">
            <form action="/signin" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></i></a>
                </div>
                <span>or use a pre-existing account</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forgot Your Password?</a>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color: red">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel. toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Start shopping with us today</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel. toggle-right">
                    <h1>Welcome dear customers</h1>
                    <p>Create an account today</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
@endsection
