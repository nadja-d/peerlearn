<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/google.css' rel='stylesheet'>
</head>

<body>
    <main>
        <div class="container">
            <img src="image 7.png" class="img1">
            <img src="image 8.png" class="img2">
        </div>

        <form class="login" method="post">
            <h1>Login</h1>
            <p1>Let's get you locked in!</p1>
            <div class="email">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="password">
                <label class="password2" for="password">Password:</label>
                <label class="forgot-password" for="password">Forgot Password?</label>
                <input type="password" id="password" name="password" required>
            </div>
            <a href="homepage2.html">
                <button type="button">Login</button>
            </a>
            <div class="p1">or sign in with</div>

            <div class="google"> <i class="gg-google"></i>Continue with Google</div>
            <div class="p2"><a href="register.html">Create an account</a></div>

        </form>
    </main>
</body>