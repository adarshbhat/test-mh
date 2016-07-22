<?php

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {

  $to = 'matthew@matthewheimark.com';
  $subject = 'Website contact';
  $message = 'First email test';
  $headers = 'From: matthew@matthewheimark.com';

  $success = mail($to, $subject, $message, $headers);
  $redirectUrl = "http://www.matthewheimark.com/contact.php?err=";
  header('Location: ' . $redirectUrl . (success == TRUE) ? '0' : '1');
}
else {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Matthew Heimark Psychotherapy - Services</title>
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Simonetta" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <style>
    label { display: block; }
    .form-control {
      width: 80%;
      border: solid 1px #aaa;
      font-size: 14px;
      margin-bottom: 20px;
      display: block;
    }

    input.form-control {
      height: 20px;
    }

    .btn {
      font-size: 16px;
      padding: 5px 10px;
      background-color: maroon;
      color: white;
      border: solid 1px black;
    }
    </style>
  </head>
  <body>

    <div class="container">

      <!-- Menu -->
      <ul id="menu">
        <li><a href="/">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="about.html">About</a></li>
        <li class="selected"><a href="contact.php">Contact &amp; Fees</a></li>
      </ul>

      <main>

        <h1>Contact &amp; Fees</h1>

        <img src="img/contactme1.jpg" width="300" height="200">
        <img src="img/contactme2.jpg" width="300" height="200">
        <img src="img/contactme3.jpg" width="300" height="200">

         <div style="display: flex; width: 100%; margin-top: 50px; margin-bottom: 50px;">
          <div style="flex-basis: 50%; padding-right: 50px;">
            <h2 style="margin-top: 0;">Practice Details</h2>
            <p>My practice is located at the corner of Market Street
              and Sanchez Street in San Francisco. I provide psychotherapy
              services to individuals, couples and groups.</p>

            <p>If you would like to set up an appointment or have any
              questions, please call, or send a brief email. All enquiries will
              be responded to within 24 hours.</p>

              <p>Like many other qualified mental health clinicians, I have elected not to join any health insurance panels at this time.

              <p>Your health insurance carrier may allow you to choose an out-of-network provider. I am happy to provide you with a super bill on a monthly basis so that you can seek reimbursement. I advise you to check with your carrier to verify coverage for out-of-network providers and rates of reimbursement.

              <p>The fee for a 50-minute session is $120.

            <p><b>Office Location:</b><br/>
              207A Sanchez Street,<br/>
              San Francisco, CA 94114</p>

            <p>(415) 917-3450</p>

            <p>Email: matthew@matthewheimark.com</p>

          </div>
          <div style="flex-basis: 50%; margin-top: 50px;">

            <form method="post" action="contact.php">

              <label for="name">Your Name (required)</label>
              <input id="name" name="name" type="text" class="form-control" required="">

              <label for="email">Your Email (required)</label>
              <input id="email" name="email" type="email" class="form-control" required="">

              <label for="phone">Phone</label>
              <input id="phone" name="phone" type="tel" class="form-control">

              <label for="subject">Subject</label>
              <input id="subject" name="subject" class="form-control">

              <label for="message">Your Message</label>
              <textarea id="message" rows="5" class="form-control"></textarea>

              <input type="submit" name="send" value="SEND" class="btn" style="width: 80%;">
              <?php if ($_GET['err'] == '0') { ?>
                <div class="message success">Message sent successfully. Thank you!</div>
              <?php } else if ($_GET['err'] == '1') { ?>
                <div class="message failure">Failed to send message. Sorry!</div>
              <?php } else {} ?>

            </form>

            <div class="contact-me" style="margin-top: 50px; margin-left: 20%">
              <a href="mailto:matthew@matthewheimark.com"><i class="fa fa-2x fa-envelope-o"></i></a>
              <a href="tel:4159173450"><i class="fa fa-2x fa-phone"></i></a>
              <a href="https://twitter.com/matthewheimark"><i class="fa fa-2x fa-twitter"></i></a>
              <a href="https://www.facebook.com/mhpsychotherapy"><i class="fa fa-2x fa-facebook"></i></a>
              <a href="https://www.instagram.com/matthew.heimark/"><i class="fa fa-2x fa-instagram"></i></a>
            </div>



          </div>
        </div>

        <img src="img/contactme7.jpg" width="300" height="200">
        <img src="img/contactme8.jpg" width="300" height="200">
        <img src="img/contactme9.jpg" width="300" height="200">


      </main>

    </div>

  </body>
</html>


<?php } ?>
