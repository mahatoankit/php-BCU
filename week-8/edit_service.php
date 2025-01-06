<?php
$conn = new mysqli('localhost', 'root', '', 'services');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM services WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $service = $result->fetch_assoc();
    } else {
        echo "Service not found!";
        exit();
    }
} else {
    echo "Invalid request!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icon_url = $_POST['icon_url'];
    $update_sql = "UPDATE services SET title='$title', description='$description', icon_url='$icon_url' WHERE id=$id";

    if ($conn->query($update_sql) === TRUE) {
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
    <title>Edit Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Service</h2>
        <a href="services.php" class="btn btn-secondary mb-3">Back to Services</a>
        <form method="post" action="edit_service.php?id=<?php echo $service['id']; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" name="title" id="title" value="<?php echo $service['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description" id="description" required><?php echo $service['description']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="icon_url" class="form-label">Icon Image URL:</label>
                <input type="text" class="form-control" name="icon_url" id="icon_url" value="<?php echo $service['icon_url']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Service</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
