<?php
$conn = new mysqli('localhost', 'root', '', 'services');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM services";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2>Services</h2>
        <a href="add_service.php" class="btn btn-primary mb-3">Add New Service</a>
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="' . $row['icon_url'] . '" alt="Icon">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['title'] . '</h5>
                                    <p class="card-text">' . $row['description'] . '</p>
                                    <a href="edit_service.php?id=' . $row['id'] . '" class="btn btn-warning">Edit</a>
                                    <a href="delete_service.php?id=' . $row['id'] . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this service?\')">Delete</a>
                                </div>
                            </div>
                        </div>';
                }
            } else {
                echo "No services found.";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
