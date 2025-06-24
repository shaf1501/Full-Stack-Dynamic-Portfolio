<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Me</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f9f9f9;
    }

    h1 {
      text-align: center;
      color: #DC143C;
    }

    .contact-container {
      max-width: 500px;
      margin: 30px auto;
      background-color: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
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

    footer {
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

  <h1>Contact Me</h1>

  <div class="contact-container">
    <form id="contactForm">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" />

      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" />

      <label for="message">Your Message</label>
      <textarea id="message" name="message" rows="5" placeholder="Write your message here..."></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>

  <footer>
    &copy; 2025 Tanjid Ahammed Shafin.
  </footer>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function(event) {
      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const message = document.getElementById("message").value.trim();

      if (!name || !email || !message) {
        alert("Please fill in all fields before sending message");
        event.preventDefault();
      }
    });
  </script>

</body>
</html>
