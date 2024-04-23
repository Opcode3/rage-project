<?php

$activePage = "donate";

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

      <h2>Make a Donation</h2>
      <p>Donate now! Your contributions enable us to continue providing free education to children in need. Every donation, no matter how small, helps us make a difference. </p>

      <form action="" method="post">
        <label for="amount" id="labelamount">
          <span>$</span>
          <input type="text" name="amount" id="amount">
        </label>

        <ul>
          <li>$10.00</li>
          <li>$25.00</li>
          <li>$50.00</li>
          <li>$100.00</li>
          <li>$250.00</li>
          <li>Custom Amount</li>
        </ul>

        <section>
          <strong>Select Payment Method</strong>

          <label for="stripe" class="payment_method">
            <input type="radio" name="payment_method" id="stripe">
            <span> use Stripe</span>
          </label>

          <label for="offline" class="payment_method">
            <input type="radio" name="payment_method" id="offline">
            <span>use Account Number</span>
          </label>

        </section>

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

          </div>
        </section>

        <section id="details">
          <strong>Account Details</strong>

          <div class="accounts">
            <div class="">
              <p> <b>Bank Name: </b> First Bank of Nigeria </p>
              <p> <b>Account Name: </b> RAGE </p>
              <p> <b>Account Number: </b> 0092092839</p>
            </div>

            <em>OR</em>

            <div class="">
              <p> <b>Bank Name: </b> UBA </p>
              <p> <b>Account Name: </b> RAGE </p>
              <p> <b>Account Number: </b> 0902942839</p>
            </div>
          </div>

        </section>

        <h4>Donation Total: $100.00</h4>


        <button type="submit">Donate Now</button>
      </form>
    </div>


  </main>

  <?php include_once("./includes/footer.inc.php"); ?>
</body>

</html>