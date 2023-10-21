<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="{{asset("css/auth.css")}}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form>
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="txt" placeholder="User name" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Password" required="">
            <button>Sign up</button>
        </form>
    </div>
    <div class="login">

                {{ Session::get('') }}

        <form action = "{{ route('login') }}" method="POST">
            @csrf
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="">
            <input type="password" name="password"  class="form-control" id="password" placeholder="Password" required="">
            <button>Login</button>
        </form>
    </div>
</div>
</body>
</html>
