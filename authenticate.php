<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM admins WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();

        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_logged_in'] = true;
            header("Location: admin.php"); // Make sure your dashboard file is .php
            exit();
        } else {
            echo "<script>alert('Wrong password');window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('Admin not found');window.location.href='login.html';</script>";
    }
}
?>
