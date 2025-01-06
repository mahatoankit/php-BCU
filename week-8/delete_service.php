<?php
$conn = new mysqli('localhost', 'root', '', 'services');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM services WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Service deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

header('Location: services.php');
?>
<div>
<a href="services.php" class="btn btn-secondary mb-3">Back to Services</a>
</div>