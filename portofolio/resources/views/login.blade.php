<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login | @rift.id</title>
</head>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>|Login|</h2>
            <form action="#">
                <div class="input-box">
                    <input type="text" required>
                    <label for="">Username</label>
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" required>
                    <label for="">Password</label>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="logreg-link">
                    <p>Don't have an account?<a href="#" class="resigter-link">sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>