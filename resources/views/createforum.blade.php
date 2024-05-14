<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
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
          <div class="event-title">Create New Forum</div>
          <div class="important-dates">Ask away your burning questions</div>
        </div>

        <label for="endTime">Course</label>
        <div class="form-box">
          <select id="endTime" class="input-field">
            <option value="" selected>Select any Courses</option>
            <option value="KM">Knowledge Management</option>
            <option value="BAD">Bussiness Application Development</option>
            <option value="ITA">Introduction to Algebra</option>
          </select>
        </div>
        <label for="eventTitle">Forum Title</label>
        <div class="form-box">
          <textarea id="forumTitle" class="input-fieldta" placeholder="What is the title of your forum?"></textarea>
        </div>

        <label for="eventTitle">Forum Question</label>
        <div class="form-box">
          <textarea id="forumQuestion" class="input-fieldta2" placeholder="What do you wanna ask?"></textarea>
        </div>


        <a href="forum2.html"><button class="btn-submit">Create Forum</button></a>

      </div>
    </div>
  </div>

</body>

</html>