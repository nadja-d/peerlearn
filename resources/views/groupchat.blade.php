<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PEERLEARN</title>
  <link rel="stylesheet" href="groupchat.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
  <title>iOS Messenger</title>
</head>

<body>

  <div class="chat-container">
    <div class="sidebar">
      <input type="text" class="search-bar" placeholder="Search...">
      <div class="group-chat">
        <img src="https://i.pinimg.com/originals/5d/70/18/5d70184dfe1869354afe7bf762416603.jpg" alt="Group Chat 1">
        <div>
          <div class="group-chat-name">Group Chat 1</div>
          <div class="last-message">Sarah: Thank you for today</div>
        </div>
      </div>
      <div class="group-chat">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLoFwcVxZrtHbji2pO9no_9F28Qa8cg3-qKOqv7-LtBkee0eM3XLOFoRbsx_gzqiqbdEE&usqp=CAU"
          alt="Group Chat 2">
        <div>
          <div class="group-chat-name">Group Chat 2</div>
          <div class="last-message">John: See you tomorrow!</div>
        </div>
      </div>
      <div class="group-chat">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAZB3JfasapLqVN_2eisYqHdDhMzBCJHLl6bM2sRgEXQ&s"
          alt="Group Chat 3">
        <div>
          <div class="group-chat-name">Group Chat 3</div>
          <div class="last-message">Emma: Are we meeting today?</div>
        </div>
      </div>
    </div>
    <div class="chat-content">
      <div class="chat-header">iOS Messenger</div>
      <div class="chat-messages">
        <div class="message received">
          <div class="message-text">Hey there! How are you doing?</div>
          <div class="message-time">10:00 AM</div>
        </div>
        <div class="message sent">
          <div class="message-text">Hi! I'm doing great, thanks for asking.</div>
          <div class="message-time">10:05 AM</div>
        </div>
      </div>
      <div class="input-container">
        <input type="text" class="input-field" placeholder="Type your message...">
        <label for="file-upload" class="circle">
          <i class="ri-file-text-line iconwhite"></i>
        </label>
        <input id="file-upload" type="file" style="display:none">
        <i class="ri-send-plane-fill icon"></i>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('file-upload').addEventListener('change', function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          const message = document.createElement('div');
          message.classList.add('message');
          message.classList.add('sent');
          message.innerHTML = `
          <div class="message-text">${file.name}</div>
          <div class="message-time">${new Date().toLocaleTimeString()}</div>
        `;
          document.querySelector('.chat-messages').appendChild(message);
        }
        reader.readAsDataURL(file);
      }
    });
  </script>

</body>

</html>