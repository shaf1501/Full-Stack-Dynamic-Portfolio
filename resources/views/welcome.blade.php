<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Only</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
    }
    .logo {
      font-weight: bold;
      font-size: 20px;
    }
    .nav_link {
      display: flex;
      gap: 15px;
    }
    .nav_item {
      text-decoration: none;
      color: black;
      font-size: 16px;
    }
    .a {
      border: 1px solid black;
      padding: 5px 10px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">Tanjid Ahammed Shafin</div>
    <div class="nav_link">
      <div class="nav_item a">Home</div>
      <div class="nav_item a">About</div>
      <div class="nav_item a">Projects</div>
      <div class="nav_item a">Skills</div>
      <div class="nav_item a">Contact</div>
    </div>
  </div>

</body>
</html>
