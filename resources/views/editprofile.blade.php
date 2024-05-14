<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editprofile.css">
    <link rel="shortcut icon" type="image/x-icon" href="PEERLEARN.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <title>Create Event</title>
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

            <div class="form-container">
                <div class="middle-centered-text">
                    <div class="event-title">Edit Profile</div>

                </div>

                <label for="eventTitle">Full Name</label>
                <div class="form-box">
                    <textarea id="forumTitle" class="input-fieldta" placeholder="What's your name?"></textarea>
                </div>

                <label for="eventTitle">Email Address</label>
                <div class="form-box">
                    <textarea id="forumQuestion" class="input-fieldta"
                        placeholder="What's your email address?"></textarea>
                </div>

                <label for="eventTitle">Major</label>
                <div class="form-box">
                    <textarea id="forumQuestion" class="input-fieldta" placeholder="What's your major?"></textarea>
                </div>

                <label for="eventTitle">Year Group</label>
                <div class="form-box">
                    <textarea id="forumQuestion" class="input-fieldta" placeholder="What's your year group?"></textarea>
                </div>


                <a href="profile.html"><button class="btn-submit">Confirm Changes</button></a>

            </div>
        </div>
    </div>

</body>

</html>