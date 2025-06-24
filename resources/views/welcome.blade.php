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
      margin: 0;
    }
    .header-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }
    .header-bar h1 {
      color: #DC143C;
      font-size: 24px;
    }
    .nav {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .nav a {
      text-decoration: none;
      color: #DC143C;
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
      margin-bottom: 40px;
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
    h1 {
      text-align: center;
    }
    footer {
      background-color: #f1f1f1;
      padding: 15px;
      text-align: center;
      font-size: 14px;
      color: #777;
      border-top: 1px solid #ddd;
    }
    button {
      background-color: #DC143C;
      color: white;
      border: none;
      padding: 10px 15px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #c21236;
    }

    @media (max-width: 600px) {
      .header-bar {
        flex-direction: column;
        align-items: flex-start;
      }
      .nav {
        flex-direction: column;
        width: 100%;
        gap: 5px;
        margin-top: 10px;
      }
      .content {
        flex-direction: column;
        align-items: center;
      }
      .intro {
        width: 100%;
        padding: 0 10px;
      }
    }
  </style>

</head>
<body>

  <div class="header-bar">
    <h1><strong>Tanjid Ahammed Shafin</strong></h1>
    <ul class="nav">
      <li><a class="active" href="#">Home</a></li>
      <li><a href="/education">Education</a></li>
      <li><a href="/skils">Skills</a></li>
      <li><a href="/projects">Projects</a></li>
      <li><a href="/about_me">About Me</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>

  <div class="content">
    <div class="profile">
      <img src="{{asset('assets/image/Formal_pic.png')}}" alt="Picture">
    </div>
    <div class="intro">
      <button>About me</button>
      <div class="intro-card">
        <p>Hello! I'm Tanjid Ahammed Shafin, an amateur web developer learning how to create responsive web pages. I'm practicing full-stack development using modern tools.</p>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 Tanjid Ahammed Shafin.
  </footer>

</body>
</html>
