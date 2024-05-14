<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEERLEARN</title>
    <link rel="stylesheet" href="schedule.css">
    <link rel="shortcut icon" type="image/x-icon" href="PEERLEARN.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

</head>

<body>
    <div class="navbar">
        <img src="PEERLEARN.png" alt="PeerLearn Logo">
        <div class="icons">
            <a href="homepage.html"><i class="ri-home-6-line active" onclick="toggleActive(this)"></i></a>
            <a href="forum-latest.html"><i class="ri-chat-2-line" onclick="toggleActive(this)"></i></a>
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
            <img src="Avatar.png" alt="PeerLearn Logo">
            <div class="profile2">
                <div class="fullname">Westin Budiharjo</div>
                <div class="username">@westinbudiharjo</div>

            </div>
            <i class="ri-notification-fill"></i>
        </div>


        <div class="content">

            <h1>SCHEDULE</h1>
            <a href="createschedule.html">
                <div class="create">Create Schedule +</div>
            </a>

            <div class="sched">
                <div class="today">Today</div>
                <div class="study-session">
                    <div class="background"></div>
                    <div class="title">UI/UX Presentation</div>
                    <div class="info">
                        <i class="ri-timer-2-line"></i>
                        <div class="time">10:00 - 12:00</div>
                        <i class="ri-map-pin-3-line"></i>
                        <div class="venue">J405 (JWC)</div>
                    </div>
                </div>
                <div class="study-session">
                    <div class="background"></div>
                    <div class="title">Knowledge Management Final Project Briefing</div>
                    <div class="info">
                        <i class="ri-timer-2-line"></i>
                        <div class="time">14:00 - 16:00</div>
                        <i class="ri-map-pin-3-line"></i>
                        <div class="venue">FX 602</div>
                    </div>
                </div>
                <div class="study-session">
                    <div class="background"></div>
                    <div class="title">STUDY SESSION DATA 103</div>
                    <div class="info">
                        <i class="ri-timer-2-line"></i>
                        <div class="time">19:00 - 20:00</div>
                        <i class="ri-map-pin-3-line"></i>
                        <div class="venue">Online</div>
                    </div>
                </div>
            </div>
        </div>




    </div>


</body>

</html>