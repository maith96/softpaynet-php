<?php
// Database connection
$host = 'localhost';
$db = 'softpaynet';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Fetch users from the database
try {
    $stmt = $pdo->query("SELECT id, username, password, ip_address, device_info FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching data: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="  py-8">
    <h1 class="text-2xl font-bold text-center mb-8">Admin Page</h1>
    <div class=" p-4 rounded-md max-w-4xl mx-auto">
        <h2 class="text-xl font-semibold text-indigo-800 mb-4">Registered Users</h2>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">ID</th>
                    <th class="border border-gray-300 p-2">Username</th>
                    <th class="border border-gray-300 p-2">Password (Hashed)</th>
                    <!-- <th class="border border-gray-300 p-2">IP Address</th> -->
                    <!-- <th class="border border-gray-300 p-2">Device Info</th> -->
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center"><?php echo htmlspecialchars($user['id']); ?></td>
                            <td class="border border-gray-300 p-2 text-center"><?php echo htmlspecialchars($user['username']); ?></td>
                            <td class="border border-gray-300 p-2 text-center"><?php echo htmlspecialchars($user['password']); ?></td>
                            <!-- <td class="border border-gray-300 p-2 text-center"><?php echo htmlspecialchars($user['ip_address']); ?></td> -->
                            <!-- <td class="border border-gray-300 p-2 text-center"><?php echo htmlspecialchars($user['device_info']); ?></td> -->
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="border border-gray-300 p-2 text-center">No users found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>