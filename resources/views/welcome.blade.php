<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    .header-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }
    .header-bar h1 {
      color: blue;
      font-size: 24px;
    }
    .nav {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 10px;
    }
    .nav a {
      text-decoration: none;
      color: black;
      padding: 5px 10px;
    }
    .nav a.active {
      border-bottom: 2px solid black;
    }
    .content {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    .profile {
      text-align: center;
    }
    .profile img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #ccc;
    }
    .intro {
      max-width: 400px;
    }
    .intro button {
      margin-bottom: 10px;
    }
    .intro-card {
      background: #f0f0f0;
      padding: 15px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <div class="header-bar">
    <h1><strong>Tanjid Ahammed Shafin</strong></h1>
    <ul class="nav">
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">Education</a></li>
      <li><a href="#">Skills</a></li>
      <li><a href="#">About Me</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>

  <div class="content">
    <div class="profile">
      <img src="{{asset('assets/image/Formal_pic.png')}}" alt="Picture">
      <p>Picture</p>
    </div>
    <div class="intro">
      <button>About me</button>
      <div class="intro-card">
        <p>Hello! I'm Tanjid Ahammed Shafin, an amateur web developer learning how to create responsive web pages. I'm practicing full-stack development using modern tools.</p>
      </div>
    </div>
  </div>

</body>
</html>
