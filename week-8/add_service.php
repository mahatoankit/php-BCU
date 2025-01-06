<?php
$conn = new mysqli('localhost', 'root', '', 'services');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icon_url = $_POST['icon_url']; 

    $sql = "INSERT INTO services (title, description, icon_url) VALUES ('$title', '$description', '$icon_url')";

    if ($conn->query($sql) === TRUE) {
        header("Location: services.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Add New Service</h2>

        <a href="services.php" class="btn btn-secondary mb-3">Back to Services</a>

        <form method="post" action="add_service.php">

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description" id="description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="icon_url" class="form-label">Icon Image URL:</label>
                <input type="text" class="form-control" name="icon_url" id="icon_url" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Service</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
