<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$ph_num = $_POST['ph_num'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw_repeat'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'mypro_bbms');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO admin (name, gender, email, psw, ph_num, psw_repeat) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $gender, $email, $psw, $ph_num, $psw_repeat);
    $stmt->execute();
    echo "Registration successful...";
    $stmt->close();
    $conn->close();
}
?>
