<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEERLEARN</title>
    <link rel="stylesheet" href="forum-latest.css">
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

            <h1>FORUM</h1>
            <a href="createforum.html">
                <p1>Create Forum +</p1>
            </a>

            <div class="sort">
                <a href="forum2.html">
                    <div class="sort1 active" onclick="toggleActive(this)">Latest</div>
                </a>
                <a href="forum2p.html">
                    <div class="sort1" onclick="toggleActive(this)">Popular</div>
                </a>
                <a href="forum2c.html">
                    <div class="sort1" onclick="toggleActive(this)">Course</div>
                </a>



            </div>
            <div class="forum-content">
                <div class="study">
                    <a href="forum-det.html" class="forum">
                        <div class="background"></div>
                        <div class="title">Optimizing Database Queries for E-Commerce Website</div>
                        <div class="info">
                            <img src="ava.png" alt="PeerLearn Logo">
                            <div class="user">Kelly Chang</div>
                            <div class="course">Business Application Development</div>
                        </div>
                        <div class="text">Seeking advice on improving database query performance to reduce page load
                            times and enhance user experience for an online store with high traffic. Please give me a
                            few solution and also provide sources on how to optimize database queries for E-commerce
                            website, I am having difficulties on making my database neater and prettier.</div>
                        <div class="bottom-info">
                            <div class="time2">Posted 18 Minutes ago</div>
                            <i class="ri-thumb-up-line"></i>
                            <div class="like">10</div>
                            <i2 class="ri-chat-2-line"></i2>
                            <div class="comment">04</div>
                        </div>
                    </a>
                </div>

                <div class="study">
                    <a href="forum-det.html" class="forum">
                        <div class="background"></div>
                        <div class="title">Preparing for Algebra Exam: Need Study Tips!</div>
                        <div class="info">
                            <img src="ava.png" alt="PeerLearn Logo">
                            <div class="user">Adrian Wyn</div>

                            <div class="course1">Introduction to Algebra</div>
                        </div>
                        <div class="text">I could really use some advice on how to study effectively and prepare for it.
                            Algebra has always been a bit challenging for me, and I need some tips. I've been struggling
                            with some of the concepts, especially when it comes to solving equations and working with
                            functions. I want to make sure I'm fully prepared for the exam, so I'm ready...</div>
                        <div class="bottom-info2">
                            <div class="time2">Posted 3 Hours ago </div>
                            <i class="ri-thumb-up-line"></i>
                            <div class="like">17</div>
                            <i2 class="ri-chat-2-line"></i2>
                            <div class="comment">14</div>
                        </div>
                    </a>
                </div>

                <!-- <div class="study">
        <a href="forum-det.html" class="forum">
            <div class="background"></div>
            <div class="title">Optimizing Database Queries for E-Commerce Website</div>
            <div class="info">
                <img src="ava.png" alt="PeerLearn Logo">
                <div class="user">Kelly Chang</div>
            
                <div class="course">Business Application Development</div>
            </div>
            <div class="text">I could really use some advice on how to study effectively and prepare for it. Algebra has always been a bit challenging for me, and I need some tips. I've been struggling with some of the concepts, especially when it comes to solving equations and working with functions. I want to make sure I'm fully prepared for the exam, so I'm ready...</div>
            <div class="bottom-info">
                <div class="time2">Posted 18 Minutes Ago</div>
                <i class="ri-thumb-up-fill"></i>
                <div class="like">10</div>
                <i2 class="ri-chat-4-line"></i2>
                <div class="comment">14</div>
        
            </div>
        </a>
    </div> -->
            </div>
        </div>
    </div>

</body>

</html>