<?php

$activePage = "volunteer";

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

  <main id="donate">

    <div id="donateframe">

      <h2>Volunteer Sign-Up</h2>
      <p>Thank you for your interest in volunteering with R.A.G.E.! Please fill out the form below to get started.</p>

      <form action="" method="post">

        <section>
          <strong>Personal Information</strong>

          <div class="personal_form">
            <div class="halve">
              <label for="first_name">First Name <span>*</span> </label>
              <input type="text" id="first_name" name="firstname" placeholder="First Name">
            </div>
            <div class="halve">
              <label for="last_name">Last Name <span>*</span> </label>
              <input type="text" id="last_name" name="lastname" placeholder="Last Name">
            </div>

            <div class="full">
              <label for="email">Email Address <span>*</span> </label>
              <input type="email" id="email" name="email" placeholder="Email Address">
            </div>

            <div class="full">
              <label for="phone">Phone number <span>*</span> </label>
              <input type="number" id="phone" name="phone" placeholder="Phone Number">
            </div>

          </div>
        </section>

        <section>
          <strong>Volunteer Preference</strong>

          <div class="personal_form">
            <div class="halve">
              <label for="first_name">Preferred Volunteer Role(s): <span>*</span> </label>
              <select name="" id="" required>
                <option value="">Select ...</option>
                <option value="">Tutoring</option>
                <option value="">Organizing and Hospitality</option>
                <option value="">Marketing & Partner</option>
                <option value="">Administrative Support</option>
              </select>
            </div>
            <div class="halve">
              <label for="last_name">Availability <span>*</span> </label>
              <select name="" id="" required>
                <option value="">Select ...</option>
                <option value="">Weekdays</option>
                <option value="">Weekends and Hospitality</option>
                <option value="">Evenings</option>
                <option value="">Remotely</option>
              </select>
            </div>

            <div class="full">
              <label for="email">Skills or Expertise <span>*</span> </label>
              <input type="email" id="email" name="email" placeholder="Teaching Experience, Graphic Design, Social Media Management, etc.">
            </div>
          </div>
        </section>

        <section>
          <strong>Additional Information</strong>

          <div class="personal_form">


            <div class="full">
              <label for="email">Why do you want to volunteer with R.A.G.E.? <span>*</span> </label>
              <input type="email" id="email" name="email" placeholder="Teaching Experience, Graphic Design, Social Media Management, etc.">
            </div>

            <div class="full">
              <label for="email">Do you have any previous volunteer experience? If yes, please describe. </label>
              <textarea name="" id="" rows="2"></textarea>
            </div>
            <div class="full">
              <label for="email">Is there anything else you'd like us to know?</label>
              <textarea name="" id="" rows="2"></textarea>
            </div>









            <div class="full">
              <label for="mconsent" id="consent">
                <input type="checkbox" name="consent" required id="mconsent">
                <span>By submitting this form, I consent to R.A.G.E. using my personal information to contact me regarding volunteer opportunities and related activities.</span>
              </label>
            </div>

          </div>
        </section>

        <button type="submit">Submit Form</button>
      </form>
    </div>


  </main>

  <?php include_once("./includes/footer.inc.php"); ?>
</body>

</html>