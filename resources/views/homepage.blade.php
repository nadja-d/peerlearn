<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEERLEARN</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="PEERLEARN.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

</head>

<body>
    <div class="navbar">
        <img src="{{ asset('assets/PEERLEARN.png') }}">
        <div class="icons">
            <a href="homepage2.html"><i class="ri-home-6-line active" onclick="toggleActive(this)"></i></a>
            <a href="forum2.html"><i class="ri-chat-2-line" onclick="toggleActive(this)"></i></a>
            <a href="schedule.html"><i class="ri-calendar-schedule-line" onclick="toggleActive(this)"></i></a>
            <a href="folder.html"><i class="ri-folder-3-line" onclick="toggleActive(this)"></i></a>
            <a href="groupchat.html"><i class="ri-group-line" onclick="toggleActive(this)"></i></a>
            <a href="profile.html"><i class="ri-user-line" onclick="toggleActive(this)"></i></a>

        </div>
        <div class="logout-circle">
            <i class="ri-logout-circle-line"></i>
        </div>
    </div>
    <div class="container">
        <div class="profile">
            <img src="{{ asset('assets/AVATAR.png') }}">
            <div class="profile2">
                <div class="fullname">{{ $fullName }}</div>
                <div class="username">{{ $username }}</div>

            </div>
            <i class="ri-notification-fill"></i>
        </div>

        <div class="Content">
            <h1>This Week</h1>
            <div class="study">
                <div class="study-session">
                    <div class="background"></div>
                    <div class="title">STUDY SESSION DATA 103</div>
                    <div class="info">
                        <i class="ri-timer-2-line"></i>
                        <div class="time">10:00 - 12:00</div>
                        <i class="ri-map-pin-3-line"></i>
                        <div class="venue">J405 (JWC)</div>
                    </div>
                </div>

                <div class="study-session">
                    <div class="background"></div>
                    <div class="title">STUDY SESSION DATA 103</div>
                    <div class="info">
                        <i class="ri-timer-2-line"></i>
                        <div class="time">10:00 - 12:00</div>
                        <i class="ri-map-pin-3-line"></i>
                        <div class="venue">J405 (JWC)</div>
                    </div>
                </div>

                <div class="study-session">
                    <div class="background"></div>
                    <div class="title">STUDY SESSION DATA 103</div>
                    <div class="info">
                        <i class="ri-timer-2-line"></i>
                        <div class="time">10:00 - 12:00</div>
                        <i class="ri-map-pin-3-line"></i>
                        <div class="venue">J405 (JWC)</div>
                    </div>
                </div>
            </div>

            <h1>Your Forum</h1>
            <div class="study">
                <div class="forum">
                    <div class="background"></div>
                    <div class="title">Optimizing Database Queries for E-Commerce Website</div>
                    <div class="info">
                        <img src="{{ asset('assets/ava.png') }}">
                        <div class="user">Kelly Chang</div>

                        <div class="course">Business Application Development</div>
                    </div>
                    <div class="text">Seeking advice on improving database query performance to reduce page load times
                        and enhance user experience for an online store with high traffic. Please give me a few solution
                        and also provide sources on how to optimize database queries for E-commerce website, I am having
                        difficulties on making my database neater and prettier.</div>
                    <div class="bottom-info">
                        <div class="time2">Posted 18 minutes ago</div>
                        <i class="ri-thumb-up-line"></i>
                        <div class="like">10</div>
                        <i2 class="ri-chat-2-line"></i2>
                        <div class="comment">14</div>

                    </div>

                </div>

                <script>
                    function toggleActive(icon) {
                        // Remove 'active' class from all icons
                        const icons = document.querySelectorAll('.navbar .icons i');
                        icons.forEach((icon) => {
                            icon.classList.remove('active');
                        });
                        // Add 'active' class to the clicked icon
                        icon.classList.add('active');
                    }
                </script>
            </div>
        </div>
</body>

</html>