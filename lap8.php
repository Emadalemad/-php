//رفع صورة إلى قاعدة البيانات وعرضها في الموقع

إنشاء قاعدة البيانات وجداول الصور
//
CREATE DATABASE image_upload;
USE image_upload;

CREATE TABLE images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_name VARCHAR(255),
    image_data LONGBLOB
);

كود PHP لرفع الصورة إلى قاعدة البيانات

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_upload";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES['image'])) {
    $imageName = $_FILES['image']['name'];
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $stmt = $conn->prepare("INSERT INTO images (image_name, image_data) VALUES (?, ?)");
    $stmt->bind_param("sb", $imageName, $imageData);
    $stmt->send_long_data(1, $imageData);
    
    if ($stmt->execute()) {
        echo "Image uploaded successfully!";
    } else {
        echo "Failed to upload image.";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit">Upload</button>
</form>

كود PHP لعرض الصور من قاعدة البيانات

<?php
$conn = new mysqli("localhost", "root", "", "image_upload");