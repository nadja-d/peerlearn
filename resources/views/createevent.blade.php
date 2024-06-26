<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>Create New Event</title>
</head>

<body>
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
</body>

</html>