<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Me</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #DC143C;
      color: white;
      padding: 10px;
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 30px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-pic {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      margin: 0 auto 20px auto;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    p {
      line-height: 1.6;
      color: #555;
    }

    footer {
      text-align: center;
      padding: 15px;
      margin-top: 40px;
      background-color: #f1f1f1;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

  <header>
    <h1>About Me</h1>
  </header>

  <div class="container">
    <img src="{{asset('assets/image/Formal_pic.png')}}" alt="Profile Picture" class="profile-pic">
    <h2>Tanjid Ahammed Shafin</h2>
    <p>
      Hello! I'm an amateur web developer with a passion for learning and building creative projects on the web. I enjoy working with HTML, CSS, and JavaScript, and I am currently learning about full-stack development.
    </p>
    <p>
      My interests include technology, design, and solving real-world problems through code. I'm always excited to take on new challenges and improve my skills step by step.
    </p>
  </div>

  <footer>
    &copy; 2025 Tanjid Ahammed Shafin
  </footer>

</body>
</html>
