<!--
 =========================================================
 Material Kit PRO - v2.2.0
 =========================================================

 Product Page: https://www.creative-tim.com/product/material-kit-pro
 Copyright 2019 Creative Tim (https://www.creative-tim.com)

 Coded by Creative Tim

 =========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php

echo "Inside function.............................";

if (isset($_POST['submit'])) {
echo "Inside post.............................";

    $host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "xcape"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
 
  function escape($html) {
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

  try {
    $connection = new PDO($dsn, $username, $password, $options);
echo "Inside escape.............................";


    $new_user = array(
      "Name" => $_POST['name'],
      "num_people"  => $_POST['people'],
      "starting_location"  => $_POST['location'],
      "pref_ending_location"  => $_POST['destination'],
      "planned_start_date"  => $_POST['start_date']
      
    );

    $sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"escapee",
implode(", ", array_keys($new_user)),
":" . implode(", :", array_keys($new_user))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
  } catch(PDOException $error) {
    
    echo $sql . "<br>" . $error->getMessage();
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Prep Your Escape
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link href="assets/demo/vertical-nav.css" rel="stylesheet" />
</head>

<body class="contact-page sidebar-collapse">
 <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="AChomepage.html">
          <b>AbolitionCoalition</b> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i>Sponsors
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="ACpendingsponsorships.html" class="dropdown-item">
                <i class="material-icons">line_style</i> Sponsor An Escape
              </a>
              <a href="ACsponsorhist.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Sponsorship History
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_day</i> Escapees
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="Prep_Your_Escape.php" class="dropdown-item">
                <i class="material-icons">dns</i> Prepare Your Escape
              </a>
              <a href="UpdateYourPlan.html" class="dropdown-item">
                <i class="material-icons">build</i> Update Your Plan
              </a>
              <a href="review_experience.php" class="dropdown-item">
                <i class="material-icons">list</i> Escape Experience
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_carousel</i> Liberated
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="submit_experience.html" class="dropdown-item">
                <i class="material-icons">account_balance</i> Review Your Experience
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>  
  <form method="post">
  <div id="contactUsMap" class="big-map"></div>
  <div class="main main-raised">
    <div class="contact-content">
      <div class="container">
        <h2 class="title">Prepare For Your Escape</h2>
        <div class="row">
          <div class="col-md-6">
            <!-- <form role="form" id="contact-form" method="post"> -->
              <div class="form-group">
                <label for="name" class="bmd-label-floating">Your name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmails" class="bmd-label-floating">Number of people</label>
                <input type="number" class="form-control" id="people" name="people">
              </div>
              <div class="form-group">
                <label for="phone" class="bmd-label-floating">Current Location</label>
                <input type="text" class="form-control" id="location" name="location">
              </div>
              <div class="form-group label-floating">
                <label class="form-control-label bmd-label-floating" for="destination"> Preferred Destination </label>
                <input type="text" class="form-control" id="destination" name="destination">


              </div>
              <div class="form-group label-floating">
                <label class="form-control-label bmd-label-floating" for="start_date"> Planned start date (YYYY-MM-DD). </label>
                <input type="text" class="form-control" id="start_date" name="start_date">
              </div>
              <div class="submit text-center">
                <input type="submit" class="btn btn-primary btn-raised btn-round" value="submit" name="submit">
              </div>
            <!-- </form> -->

          </div>
          <div class="col-md-4 ml-auto">
            <div class="info info-horizontal">
              <div class="icon icon-primary">
                <i class="material-icons">pin_drop</i>
              </div>
              <div class="description">
                <h4 class="info-title">Find us at the office</h4>
                <p> Bld Mihail Kogalniceanu, nr. 8,<br>
                  7652 Bucharest,<br>
                  Romania
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-primary">
                <i class="material-icons">phone</i>
              </div>
              <div class="description">
                <h4 class="info-title">Give us a ring</h4>
                <p> Michael Jordan<br>
                  +40 762 321 762<br>
                  Mon - Fri, 8:00-22:00
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-primary">
                <i class="material-icons">business_center</i>
              </div>
              <div class="description">
                <h4 class="info-title">Legal Information</h4>
                <p> Creative Tim Ltd.<br>
                  VAT &#xB7; EN2341241<br>
                  IBAN &#xB7; EN8732ENGB2300099123<br>
                  Bank &#xB7; Great Britain Bank
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  <footer class="footer">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://creative-tim.com/presentation">
              Update An Escape Plan
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Review Your Experience
            </a>
          </li>

        </ul>
      </nav>
    </div>

  </footer>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAf7Z9aiNKzhYjERV-OwVMoU0ytMnlhwU"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
  <script>
    $().ready(function() {
      materialKitDemo.initContactUsMap();
    });
  </script>
</body>

</html>