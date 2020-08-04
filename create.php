
 






    <?php

/**
  * Use an HTML form to create a new entry in the
  * users table.
  *
  */


if (isset($_POST['submit'])) {

    $host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "hack"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
  
 
  function escape($html) {
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $new_user = array(
      "firstname" => $_POST['firstname2'],
      "lastname"  => $_POST['lastname'],
      "email"     => $_POST['email'],
      "age"       => $_POST['age'],
      "location"  => $_POST['location']
    );

    $sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"users",
implode(", ", array_keys($new_user)),
":" . implode(", :", array_keys($new_user))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
  } catch(PDOException $error) {
    echo "here error";
    echo $sql . "<br>" . $error->getMessage();
  }

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Simple Database App</title>

    <link rel="stylesheet" href="css/style.css" />
    <style>
        label {
              display: block;
              margin: 5px 0;
            }
</style>
  </head>

  <body>
    <h1>Simple Database App</h1>



<?php if (isset($_POST['submit']) && $statement) { ?>
  > <?php echo $_POST['firstname']; ?> successfully added.
<?php } ?>

<h2>Add a user</h2>

<form method="post">
  <label for="firstname">First Name</label>
  <input type="text" name="firstname2" id="firstname">
  <label for="lastname">Last Name</label>
  <input type="text" name="lastname" id="lastname">
  <label for="email">Email Address</label>
  <input type="text" name="email" id="email">
  <label for="age">Age</label>
  <input type="text" name="age" id="age">
  <label for="location">Location</label>
  <input type="text" name="location" id="location">
  <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>
    </body>
</html>

