<?php

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../includes/auth.php';

requireAdmin();

$userCount = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
$serviceCount = $pdo->query("SELECT COUNT(*) FROM services")->fetchColumn();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Blush & Bloom</title>
</head>
<body>

    <h1>Blush & Bloom Admin Dashboard</h1>

    <p>Welcome to the admin dashboard.</p>

    <h2>Dashboard Statistics</h2>

    <p>Total Users: <?php echo $userCount; ?></p>

    <p>Total Services: <?php echo $serviceCount; ?></p>

</body>
</html>
