<?php

require_once 'connect.php';

if ($_FILES['photo']) {
    $targetDirectory = 'uploads/';
    $targetFile = $targetDirectory . basename($_FILES['photo']['name']);

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
        $uploadedPhoto = $targetFile;
        $name = $_POST['name'];
        $description = $_POST['description'];

        $sql = "INSERT INTO photos (file_name, file_path, name, description) VALUES ('$name', '$uploadedPhoto', '$name', '$description')";

        if ($conn->query($sql) === TRUE) {
            header("location: dashboard.php");
            exit();
        } else {
            echo "Error uploading photo: " . $conn->error;
        }
    } else {
        echo "Error uploading photo.";
    }
}

$conn->close();
?>