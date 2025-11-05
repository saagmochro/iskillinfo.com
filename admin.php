<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
  header("Location: login.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | iSkill Info</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
  <div class="sidebar">
    <h2>Admin Panel</h2>
    <ul>
      <li><a href="#" class="active">Dashboard</a></li>
      <li><a href="#">Users</a></li>
      <li><a href="#">Courses</a></li>
      <li><a href="#">Reports</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>

  <div class="main-content">
    <header>
      <h1>Welcome, Admin</h1>
    </header>

    <section class="cards">
      <div class="card">
        <h3>Total Users</h3>
        <p>--</p>
      </div>
      <div class="card">
        <h3>Total Courses</h3>
        <p>--</p>
      </div>
      <div class="card">
        <h3>Active Sessions</h3>
        <p>--</p>
      </div>
    </section>
  </div>
</body>
</html>
