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
if ( $_POST['terrain1'] == "true") {
  $ter1 = 'valleys ';}
else {
  $ter1 = ' ';}

if ( $_POST['terrain2'] == "true") {
  $ter2 = 'grasslands ';}
else {
  $ter2 = ' '; }

  if ( $_POST['terrain3'] == "true") {
  $ter3 = 'Mountains ';}
else {
  $ter3 = ' '; }

if ( $_POST['terrain4'] == "true") {
  $ter4 = 'Hills ';}
else {
  $ter4 = ' '; }

if ( $_POST['terrain5'] == "true") {
  $ter5 = 'Plateaus ';}
else {
  $ter5 = ' '; }

if ( $_POST['terrain6'] == "true") {
  $ter6 = 'Forests ';}
else {
  $ter6 = ' '; }

if ( $_POST['terrain7'] == "true") {
  $ter7 = 'Swamps';}
else {
  $ter7 = ' '; }


// echo "Terrain is " + $ter1;


    $new_user = array(
      "name" => $_POST['name'],
      "start_location"  => $_POST['starting'],
      "end_location"     => $_POST['ending'],
      "sponsor_name"       => $_POST['conductor'],
      "essential_items"  => $_POST['supplies'],
      "comments" => $_POST['extra_comments'],
      "number_people" => $_POST['num_people'],
      "start_date" => $_POST['start_date'],
      "end_date" => $_POST['end_date'],
      "type_of_terrain" => $ter1 . $ter2 . $ter3 . $ter4 . $ter5 . $ter6 . $ter7
      // "question1" => $q1,
      // "question2" => $q2,
      // "question3" => $q3,
      // "comments" => $_POST['comments']
    );

    $sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"reviewer",
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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    AbolitionCoalition
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="../assets/demo/vertical-nav.css" rel="stylesheet" />
</head>

<body class="contact-page sidebar-collapse">
  <!-- <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit-pro/index.html">
          AbolitionCoalition </a>
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
              <i class="material-icons">apps</i> Components
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../presentation.html" class="dropdown-item">
                <i class="material-icons">line_style</i> Presentation
              </a>
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="http://demos.creative-tim.com/material-kit-pro/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_day</i> Sections
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../sections.html#headers" class="dropdown-item">
                <i class="material-icons">dns</i> Headers
              </a>
              <a href="../sections.html#features" class="dropdown-item">
                <i class="material-icons">build</i> Features
              </a>
              <a href="../sections.html#blogs" class="dropdown-item">
                <i class="material-icons">list</i> Blogs
              </a>
              <a href="../sections.html#teams" class="dropdown-item">
                <i class="material-icons">people</i> Teams
              </a>
              <a href="../sections.html#projects" class="dropdown-item">
                <i class="material-icons">assignment</i> Projects
              </a>
              <a href="../sections.html#pricing" class="dropdown-item">
                <i class="material-icons">monetization_on</i> Pricing
              </a>
              <a href="../sections.html#testimonials" class="dropdown-item">
                <i class="material-icons">chat</i> Testimonials
              </a>
              <a href="../sections.html#contactus" class="dropdown-item">
                <i class="material-icons">call</i> Contacts
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_carousel</i> Examples
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../examples/about-us.html" class="dropdown-item">
                <i class="material-icons">account_balance</i> About Us
              </a>
              <a href="../examples/blog-post.html" class="dropdown-item">
                <i class="material-icons">art_track</i> Blog Post
              </a>
              <a href="../examples/blog-posts.html" class="dropdown-item">
                <i class="material-icons">view_quilt</i> Blog Posts
              </a>
              <a href="../examples/contact-us.html" class="dropdown-item">
                <i class="material-icons">location_on</i> Contact Us
              </a>
              <a href="../examples/landing-page.html" class="dropdown-item">
                <i class="material-icons">view_day</i> Landing Page
              </a>
              <a href="../examples/login-page.html" class="dropdown-item">
                <i class="material-icons">fingerprint</i> Login Page
              </a>
              <a href="../examples/pricing.html" class="dropdown-item">
                <i class="material-icons">attach_money</i> Pricing Page
              </a>
              <a href="../examples/shopping-cart.html" class="dropdown-item">
                <i class="material-icons">shopping_basket</i> Shopping Cart
              </a>
              <a href="../examples/ecommerce.html" class="dropdown-item">
                <i class="material-icons">store</i> Ecommerce Page
              </a>
              <a href="../examples/product-page.html" class="dropdown-item">
                <i class="material-icons">shopping_cart</i> Product Page
              </a>
              <a href="../examples/profile-page.html" class="dropdown-item">
                <i class="material-icons">account_circle</i> Profile Page
              </a>
              <a href="../examples/signup-page.html" class="dropdown-item">
                <i class="material-icons">person_add</i> Signup Page
              </a>
            </div>
          </li>
          <li class="button-container nav-item iframe-extern">
            <a href="https://www.creative-tim.com/product/material-kit-pro?ref=presentation" target="_blank" class="btn  btn-rose   btn-round btn-block">
              <i class="material-icons">shopping_cart</i> Buy Now
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
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
              <a href="ACReviewExp.html" class="dropdown-item">
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
        <h2 class="title">Review your Experience</h2>
        <div class="row">
          <div class="col-md-6">
            <p class="description">If you're an escaped slave who is now in the north and succeeded in attaining freedom please answer this form to help new escapers on their journey<br><br>
            </p>
            <form role="form" id="contact-form" method="post">
              <div class="form-group">
                <label for="name" class="bmd-label-floating">Your name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Starting Location</label>
                <input type="text" class="form-control" id="starting" name="starting">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Ending Location</label>
                <input type="text" class="form-control" id="ending" name="ending">
              </div>
              <div class="form-group">
              <label class="form-control-label bmd-label-floating" for="start_date"> Escape start date (YYYY-MM-DD). </label>
              <input type="text" class="form-control" id="start_date" name="start_date">
              </div>
              <div class="form-group">
              <label class="form-control-label bmd-label-floating" for="end_date" > Escape completion date (YYYY-MM-DD). </label>
              <input type="text" class="form-control" id="end_date" name="end_date">  
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Conductor's Name</label>
                <input type="text" class="form-control" id="conductor" name="conductor">
              </div>
              <div class="form-group">
                <label class="bmd-label-floating">Number of people</label>
                <input type="text" class="form-control" id="num_people" name="num_people"><br>
              </div>
              <b><label>Terrains Encountered:</label><br></b>
              <input type="checkbox" id="terrain1" name="terrain1" value="true">
              <label for="terrain1"> Valleys</label><br>
              <input type="checkbox" id="terrain2" name="terrain2" value="true">
              <label for="terrain2"> Grasslands</label><br>
              <input type="checkbox" id="terrain3" name="terrain3" value="true">
              <label for="terrain3"> Mountains</label><br>
              <input type="checkbox" id="terrain4" name="terrain4" value="true">
              <label for="terrain4"> Hills</label><br>
              <input type="checkbox" id="terrain5" name="terrain5" value="true">
              <label for="terrain5"> Plateaus</label><br>
              <input type="checkbox" id="terrain6" name="terrain6" value="true">
              <label for="terrain6"> Forests</label><br>
              <input type="checkbox" id="terrain7" name="terrain7" value="true">
              <label for="terrain7"> Swamps</label><br>
              <div class="form-group label-floating">
                <label class="form-control-label bmd-label-floating" for="supplies"> Essential Supplies Needed</label>
                <textarea class="form-control" rows="6" id="supplies" name="supplies"></textarea>
              </div>
              <div class="form-group label-floating">
                <label class="form-control-label bmd-label-floating" for="message"> Any other Comments?</label>
                <textarea class="form-control" rows="6" id="extra_comments" name="extra_comments"></textarea>
              </div>
              <div class="submit text-center">
                <input type="submit" name="submit" class="btn btn-primary btn-raised btn-round" value="submit">
              </div>
            </form>
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
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=IzaSyAAf7Z9aiNKzhYjERV-OwVMoU0ytMnlhwU"></script> -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAf7Z9aiNKzhYjERV-OwVMoU0ytMnlhwU&libraries=places&callback=initAutocomplete"
        async defer></script> 
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="../assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="../assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="../assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="../assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
  <script>
    $().ready(function() {
      materialKitDemo.initContactUsMap();
    });
  </script>
</body>

</html>