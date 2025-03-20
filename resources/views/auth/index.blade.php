<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('backend/login/assets/css/style.css')}}">
    <title>Login Admin</title>
</head>

<body>
    <div class="wrapper">
        <div class="form-header">
            <div class="titles">
                <div class="title-login">Login</div>
            </div>
        </div>
        <!-- LOGIN FORM -->
        <form action="/login" class="login-form" autocomplete="off">
            <div class="input-box">
                <input type="email" name="email" class="input-field" id="log-email" required>
                <label for="log-email" class="label">Email</label>
                <i class='bx bx-envelope icon'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" id="log-pass" required>
                <label for="log-pass" class="label">Password</label>
                <i class='bx bx-lock-alt icon'></i>
            </div>
            <div class="input-box">
                <button type="submit" class="btn-submit" id="SignInBtn">Sign In <i class='bx bx-log-in'></i></button>
            </div>
        </form>



        <script src="{{asset('backend/login/assets/js/script.js')}}"></script>
</body>

</html>