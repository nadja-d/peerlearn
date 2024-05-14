<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEERLEARN</title>
    <link rel="stylesheet" href="forum-popular.css">
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
                    <div class="sort1" onclick="toggleActive(this)">Latest</div>
                </a>
                <a href="forum2p.html">
                    <div class="sort1 active" onclick="toggleActive(this)">Popular</div>
                </a>
                <a href="forum2c.html">
                    <div class="sort1" onclick="toggleActive(this)">Course</div>
                </a>


            </div>
            <div class="forum-content">
                <div class="study">
                    <a href="forum-det.html" class="forum">
                        <div class="background"></div>
                        <div class="title">Firebase vs SQL comparison. Pros and cons!</div>
                        <div class="info">
                            <img src="ava.png" alt="PeerLearn Logo">
                            <div class="user">Anita Max</div>
                            <div class="course">Business Application Development</div>
                        </div>
                        <div class="text">I need to decide on which database to use for my final project. Can someone
                            help me list the pros and cons of firebase and SQL and your opinion on which to use based on
                            my final project. Which database is better for mobile development and website development?
                            Can both of them be used for receiving data from AI’s prediction?</div>
                        <div class="bottom-info">
                            <div class="time2">Posted on 27/03/2024</div>
                            <i class="ri-thumb-up-line"></i>
                            <div class="like">2K</div>
                            <i2 class="ri-chat-2-line"></i2>
                            <div class="comment">54</div>
                        </div>
                    </a>
                </div>

                <div class="study">
                    <a href="forum-det.html" class="forum">
                        <div class="background"></div>
                        <div class="title">Benefit of Knowledge Management</div>
                        <div class="info">
                            <img src="ava.png" alt="PeerLearn Logo">
                            <div class="user">Cain Paces</div>

                            <div class="course1">Knowledge Management</div>
                        </div>
                        <div class="text">I need some insight on what is the benefit of knowledge management in daily
                            life and also work life. I am trying to get to know knowledge management better. Does people
                            really implement knowledge management in work life? If so what is the example of knowledge
                            management implementation in work life?</div>
                        <div class="bottom-info2">
                            <div class="time2">Posted 14 days ago</div>
                            <i class="ri-thumb-up-line"></i>
                            <div class="like">1K</div>
                            <i2 class="ri-chat-2-line"></i2>
                            <div class="comment">96</div>
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