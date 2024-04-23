<?php

$activePage = "contact";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Right & Aid Group for Education</title>

  <link rel="stylesheet" href="./assets/styles/main.css">
  <link rel="stylesheet" href="./assets/libraries/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php include_once("./includes/header.inc.php"); ?>

  <main id="contact">

    <section id="header">
      <div class="">
        <h1>Get In Touch</h1>
        <a href="mailto:helpdesk@rage.ngo" target="_blank">helpdesk@rage.ngo</a>
      </div>
      <p>Like what you see? Curious about what we do? Ask us anything. Tell us what you need. We'll get back to you with 48 hours.</p>
    </section>

    <section>
      <form action="" method="post">
        <label for="name">
          <span> Hi, I'm </span>
          <input type="text" placeholder="Name*" required id="name" name="name">
        </label>
        <label for="company">
          <span> and I work with </span>
          <input type="text" placeholder="Company" id="company" name="company">
        </label>

        <label for="phone">
          <span> You can reach me at </span>
          <input type="text" placeholder="Phone number*" name="phone" id="phone" required>
        </label>
        <label for="email">
          <span> or at </span>
          <input type="email" placeholder="Email*" required id="email" name="email">
        </label>
        <label for="message">
          <textarea name="message" id="message" rows="2" required placeholder="Message*"></textarea>
        </label>

        <button type="submit">Send Message</button>
      </form>
    </section>
  </main>

  <?php include_once("./includes/footer.inc.php"); ?>
</body>

</html>