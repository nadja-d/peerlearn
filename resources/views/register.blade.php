<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
            <img src="{{ asset('assets/image 6.png') }}" class="img1">

            <img src="image 8.png" class="img2">
        </div>

        <form class="login" method="post" action="{{ route('register') }}">
            @csrf <!-- This is needed for CSRF protection -->

            <h1>Register</h1>
            <p1>Glad to see new faces!</p1>

            <div class="fullname">
                <label for="fullname">Full Name:</label>
                <input type="fullname" id="fullname" name="fullname" required>
            </div>
            <div class="username">
                <label for="username">Username:</label>
                <input type="username" id="username" name="username" required>
            </div>
            <div class="email">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="password">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="major">
                <label for="major">Major:</label>
                <input type="major" id="major" name="major" required>
            </div>
            <div class="year">
                <label for="year">Year Group:</label>
                <input type="year" id="year" name="year" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </main>
</body>