<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Academic Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-wrapper">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        <h1>Student Login</h1>
        <p style="color: #64748b; margin-bottom: 25px;">Secure access to your portal</p>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-login">
                <span class="input-icon"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="npm" placeholder="Username / NPM" value="{{ old('npm') }}" required autofocus>
            </div>
            <div class="form-login">
                <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="btn-login">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
