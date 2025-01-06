<?php
include 'db.php';
$conn = new mysqli('localhost', 'username', 'password', 'services');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM services";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Services</title>
  </head>
  <body>
  <div class="container">
    <h2>Services</h2>
    <div class="row">
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <img class="icon" src="' . $row['icon_url'] . '" alt="Icon">
          <h3>' . $row['title'] . '</h3>
          <p>' . $row['description'] . '</p>
        </div>
        ';
      }
    } else {
      echo '<p>No services found.</p>';
    }
    ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
