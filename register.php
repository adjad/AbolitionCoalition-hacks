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


$user = $_POST['q1'];


 echo "User is " . $user;
 if ( $_POST['q1'] == "conducter") {
  $wts = '1';}
else {
  $wts = '0';}


    $new_user = array(
      "name" => $_POST['name'],
      "user_type"  => $_POST['q1'],
      "user_email"     => $_POST['email'],
      "willing_to_sponsor"       => '1'    
      
    );

    $sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"user_details",
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

<body class="signup-page sidebar-collapse">
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
              <a href="PrepYourEscape.html" class="dropdown-item">
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
              <a href="review_experience.php" class="dropdown-item">
                <i class="material-icons">account_balance</i> Review Your Experience
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- <form id="myForm" action="/register.php" method="post">    -->
  <form id="myForm" method="post">   
    <div class="page-header header-filter" filter-color="purple" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto">
            <div class="card card-signup">
              <h2 class="card-title text-center">Register</h2>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 ml-auto">
                    <div class="info info-horizontal">
                      <div class="icon icon-rose">
                        <i class="material-icons">timeline</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Stay informed about what to expect on an escape route</h4>
                        <p class="description">
                         We will keep you informed on everything.
                        </p>
                      </div>
                    </div>
                    <div class="info info-horizontal">
                      <div class="icon icon-primary">
                        <i class="material-icons">code</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Fully secured information</h4>
                        <p class="description">
                          We've developed ways to validate if you are a sponsor.
                        </p>
                      </div>
                    </div>
                    <div class="info info-horizontal">
                      <div class="icon icon-info">
                        <i class="material-icons">group</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Connect with other users</h4>
                        <p class="description">
                          Use our application to get connected with sponsors.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 mr-auto">
                    <form class="form" method="" action="">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">face</i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="First Name..." name="name">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">mail</i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Email..." name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <input type="password" placeholder="Password..." class="form-control" name="password">
                        </div>
                      </div>
                        <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <input id="phrase"type="text" placeholder="Type the big dipper's nickname..." name="nickname" class="form-control"/>
                        </div>
                      </div>

                      <script>
                        function validate() {
                            var phrase = document.getElementById("phrase").value;
                            if (phrase == "the drinking gourd" || phrase == "drinking gourd") {
                                document.getElementById("myForm").submit();
                            } else {
                                alert("Wrong phrase!");
                            }
                        }
                      </script>
                      
                      <div class="col-md-5 mr-auto">
                        
                        <label> User Type... </label><br>
                        <input type="radio"  name="q1" value="escapee" id="q1">
                        <label for="escapee">Escapee</label><br>
                        <input type="radio"  name="q1" value="liberated" id="q2">
                        <label for="escapist">Liberated</label><br>
                        <input type="radio"  name="q1" value="conducter" id="q3">
                        <label for="conducter">Conducter</label>
                     
                      </div>
                      <div class="text-center">
                        <!-- <a href="#pablo"  class="btn btn-primary btn-round" onclick="validate()" >Get Started</a> -->
                        <input type="submit" name="submit" value = "submit" class="btn btn-primary btn-round" onclick="validate()">
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </form>

    <footer class="footer">
      
    </footer>
  </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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
</body>

</html>