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

/**
  * Function to query information based on
  * a parameter: in this case, location.
  *
  */


if (isset($_POST['submit'])) {
 
  try {
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


    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT *
    FROM reviewer
    WHERE start_location = :location";

    $location = $_POST['locality'];

    $statement = $connection->prepare($sql);
    $statement->bindParam(':location', $location, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
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
   AbolitionCoalition
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
   <style>
      table {
              border-collapse: collapse;
              border-spacing: 0;
            }

            td,
            th {
              padding: 5px;
              border-bottom: 1px solid #aaa;
            }
  </style>
</head>
            <!--   <script>
                function myFunction()
                {
                  
                // var x = document.getelementbyid("numbottles").value;
                var numB = document.getElementById("numbottles").value;      
                var y = 0.05;
                var xy = numB*y;
                document.getElementById("p1").style="bold";               
               document.getElementById("p1").innerHTML = "People were wearing masks. Not much social distancing. Average Rating - ***";
               
              }
              </script> -->
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
              <a href="submit_experience.php" class="dropdown-item">
                <i class="material-icons">account_balance</i> Review Your Experience
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.7126021992844!2d-121.85606838438326!3d37.70294807977248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fe92e42faa8f9%3A0xebc526296c29c632!2sTarget!5e0!3m2!1sen!2sus!4v1592595546227!5m2!1sen!2sus" width="100%" height="450" frameborder="10" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>

  <div class="col-md-8 ml-auto mr-auto text-center">  
    <h2 style="text-align: center; "><b>Review Escape Experiences</b></h2>    
          
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
       {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: ab;
        width: 380px;
      }
      #autocomplete {
        position: relative;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
        font-family: "Roboto";
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f9ff;
        width: 380px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
  

  
    <div id="locationField"  style="margin-left:auto;margin-right:auto;">
      <input id="autocomplete" 
             placeholder="Enter your city name";  style="margin-left:auto;margin-right:auto"
             onFocus="geolocate()"   >
    </div>

      <div class="form">           
         <form method="post">

          <table id="address"; style="margin-left:auto;margin-right:auto;">
            <tr>
              <td class="label">Street address</td>
              <td class="slimField"><input class="field" id="street_number" name="street_number" disabled="true"/></td>
              <td class="wideField" colspan="2"><input class="field" id="route" name="route" disabled="true"/></td>
            </tr>
            <tr>
              <td class="label">City</td>
              <td class="wideField" colspan="3"><input class="field" id="locality" name="locality" disabled="true"/></td>
            </tr>
            <tr>
              <td class="label">State</td>
              <td class="slimField"><input class="field" id="administrative_area_level_1" name="administrative_area_level_1" disabled="true"/></td>
              <td class="label">Zip code</td>
              <td class="wideField"><input class="field" id="postal_code" name="postal_code" disabled="true"/></td>
            </tr>
            <tr>
              <td class="label">Country</td>
              <td class="wideField" colspan="3"><input class="field" id="country" name="country" disabled="true"/></td>
            </tr>
          </table>
          <br>
          <input type="submit" name="submit" value="View Results" class="btn  btn-success btn-round" >
          </form>
          <h3><b>All experiances for your location</b></h3>
      </div>
</div>

<div class="form-group" style="margin: auto;">
   <?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <!-- <h2 style="text-align: center;">Results</h2> -->

    <table style="margin-left:auto;margin-right:auto;">
      <thead>
<tr>
  <!-- <th>#</th> -->
  <!-- <th>Number</th> -->
  <th>Name</th>
  <th>Start Location</th>
  <th>End Location</th>
  <th>Start Date</th>
  <th>End Date</th>
  <th>People in your group</th>
  <th>Terrains encountered</th>
  <th>Items needed</th>
  
  
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>

<td><?php echo escape($row["name"]); ?></td>
<td><?php echo escape($row["start_location"]); ?></td>
<td><?php echo escape($row["end_location"]); ?></td>
<td><?php echo escape($row["start_date"]); ?></td>
<td><?php echo escape($row["end_date"]); ?></td>
<td><?php echo escape($row["number_people"]); ?></td>
<td><?php echo escape($row["type_of_terrain"]); ?></td>
<td><?php echo escape($row["essential_items"]); ?></td>

      </tr>
    <?php } ?>
      </tbody>
  </table>

  <?php } else { ?>
    No results found for this location <?php echo escape($_POST['location']); ?>.
  <?php }
} ?>

</div>

<script>
// This sample uses the Autocomplete widget to help the user select a
// place, then it retrieves the address components associated with that
// place, and then it populates the form fields with those details.
// This sample requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;

var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});

  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAf7Z9aiNKzhYjERV-OwVMoU0ytMnlhwU&libraries=places&callback=initAutocomplete"
        async defer></script>      
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Small Gallery in Product Page -->
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
</body>

</html>