<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="formsched.css">
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
          <div class="event-title">Create New Event</div>
          <div class="important-dates">Schedule ahead your important dates!</div>
        </div>
        <label for="eventTitle">Event Title</label>
        <div class="form-box">
          <input type="text" id="eventTitle" class="input-field" placeholder="Enter event title...">
        </div>

        <label for="eventDate">When is the event?</label>
        <div class="form-box">
          <input type="date" id="eventDate" class="input-field">
        </div>

        <label for="startTime">What is the start time of the event?</label>
        <div class="form-box">
          <select id="startTime" class="input-field">
            <option value="" disabled selected>Select start time</option>
            <option value="08:00">08:00 AM</option>
            <option value="09:00">09:00 AM</option>
            <option value="10:00">10:00 AM</option>
            <option value="11:00">11:00 AM</option>
            <option value="12:00">12:00 PM</option>
            <option value="13:00">01:00 PM</option>
            <option value="14:00">02:00 PM</option>
            <option value="15:00">03:00 PM</option>
            <option value="16:00">04:00 PM</option>
            <option value="17:00">05:00 PM</option>
            <option value="18:00">06:00 PM</option>
            <option value="19:00">07:00 PM</option>
            <option value="20:00">08:00 PM</option>
            <option value="21:00">09:00 PM</option>
          </select>
        </div>

        <label for="endTime">What is the end time of the event?</label>
        <div class="form-box">
          <select id="endTime" class="input-field">
            <option value="" disabled selected>Select end time</option>
            <option value="08:00">08:00 AM</option>
            <option value="09:00">09:00 AM</option>
            <option value="10:00">10:00 AM</option>
            <option value="11:00">11:00 AM</option>
            <option value="12:00">12:00 PM</option>
            <option value="13:00">01:00 PM</option>
            <option value="14:00">02:00 PM</option>
            <option value="15:00">03:00 PM</option>
            <option value="16:00">04:00 PM</option>
            <option value="17:00">05:00 PM</option>
            <option value="18:00">06:00 PM</option>
            <option value="19:00">07:00 PM</option>
            <option value="20:00">08:00 PM</option>
            <option value="21:00">09:00 PM</option>
          </select>
        </div>

        <label for="inviteFriends">Invite friends</label>
        <div class="form-box">
          <input type="text" id="inviteFriends" class="input-field" placeholder="Select friends...">
        </div>

        <button class="btn-submit">Create Event</button>
      </div>
    </div>

</body>

</html>