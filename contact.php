<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css" />
  </head>
  <body>
    <div class="container">
      <h2>Contact Us</h2>
      <p>Have questions? Reach out to us!</p>

      <div class="contact-form">
        <form id="contactForm" action="contact.php" method="POST">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required />

          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />

          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" required></textarea>

          <button type="submit">Send Message</button>
        </form>
      </div>

      <div class="map">
        <h3>Our Location</h3>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29728.39489439687!2d74.86444161217275!3d21.348548110310023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdf2df9310caa83%3A0x11cf13f51b3b8d25!2sShirpur%2C%20Maharashtra%20425405!5e0!3m2!1sen!2sin!4v1741339748189!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen
        ></iframe>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
  <footer id="footer" style="text-align: right;">
        <a href="index.html" style="font-size: 24px; color: red; padding-right:10%">Go Back</a>
    </footer>
</html>
  