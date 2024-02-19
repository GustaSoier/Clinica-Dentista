<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--==============================
      Google Fonts
    ============================== -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!--==============================
        All CSS File
    ============================== -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Login - Academia Viva Bem</title>

</head>
<body>
    <div class="container">
        <div class="login-box">
            <img src="{{ asset ('img/logo-dentalcare.jpg') }}" alt="">
            <h2>Bem-vindo!!!</h2>
            <form action="{{ route ('login') }}" method="POST" class="login-form">
                @csrf
                <div class="textbox">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Senha" value="{{ old ('password') }}">
                    {{ $errors->has('password') ? $errors->first('password') : '' }}
                </div>
                <input type="submit" class="btn" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>
