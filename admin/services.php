<?php

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../includes/auth.php';

requireAdmin();

$stmt = $pdo->query("SELECT id, service_name, description, price, duration FROM services ORDER BY id ASC");
$services = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Services - Blush & Bloom</title>
</head>
<body>

    <h1>Manage Services</h1>

    <p>Services available in Blush & Bloom.</p>

    <?php if (count($services) > 0): ?>

        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Duration</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($services as $service): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($service['id']); ?></td>
                        <td><?php echo htmlspecialchars($service['service_name']); ?></td>
                        <td><?php echo htmlspecialchars($service['description']); ?></td>
                        <td>Rs. <?php echo htmlspecialchars($service['price']); ?></td>
                        <td><?php echo htmlspecialchars($service['duration']); ?> minutes</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php else: ?>

        <p>No services found.</p>

    <?php endif; ?>

</body>
</html>
