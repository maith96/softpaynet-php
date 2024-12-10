<?php
// Set meta information dynamically
$title = "Soft Pay Net";
$description = "Welcome to Softpaynet!";
$services = [
    [
        "title" => "Trusted and Secure",
        "description" => "Our robust encryption ensures that your transactions are safe and protected, every time."
    ],
    [
        "title" => "Global Coverage",
        "description" => "With softpaynet, you can send money across borders quickly, reaching over 100 countries worldwide."
    ],
    [
        "title" => "Mobile Wallet Integration",
        "description" => "Connect your preferred mobile wallet to softpaynet and make transactions effortlessly from your phone."
    ],
    [
        "title" => "Real-time Tracking",
        "description" => "Stay informed with real-time tracking of your transfers, ensuring full transparency from start to finish."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-black text-white">
    <!-- Header -->
    <header class="flex justify-between p-2">
        <h1 class="font-semibold">Softpaynet</h1>
        <div>
            <p>support@softpaynet.com</p>
            <p>+447 36 576 2180</p>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="text-center py-16 px-4 space-y-4">
        <h1 class="text-3xl font-bold">Softpaynet</h1>
        <p class="text-purple-300 text-xl">Seamlessly Move Your Money Around the World</p>
        <p class="text-sm">
            Connect your mobile wallet to softpaynet and experience secure, fast, and global money transfers like never before.
        </p>

        <div class="grid grid-cols-1 max-w-lg mx-auto my-8 gap-4">
            <a href="login.php" class="p-4 text-black font-semibold bg-lime-400 rounded-md">Track Your Transfer</a>
            <a href="login.php" class="p-4 text-black font-semibold bg-lime-400 rounded-md">Accept Payment</a>
            <a href="login.php" class="p-4 text-black font-semibold bg-lime-400 rounded-md">Cancel a Transaction</a>
        </div>
    </div>

    <!-- About Section -->
    <section class="px-4 py-16 space-y-8">
        <h1 class="text-xl text-blue-600 font-bold text-center">About Softpaynet</h1>
        <p class="text-center max-w-xl mx-auto">
            At softpaynet, we offer a trusted platform for peer-to-peer money transfers, giving users the flexibility to send and receive funds globally with the highest level of security and transparency. Our goal is to simplify international money movement, so you can focus on what matters most.
        </p>

        <h1 class="text-xl text-blue-600 font-bold text-center">Our Services</h1>
        <div class="grid grid-cols-1 md:grid-cols-4 max-w-3xl mx-auto my-8 gap-4">
            <?php foreach ($services as $service): ?>
                <div class="rounded-md bg-purple-200 text-center p-8 space-y-4">
                    <h2 class="font-bold text-indigo-800 text-lg"><?php echo $service['title']; ?></h2>
                    <p class="text-black"><?php echo $service['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="p-8 space-y-8 bg-purple-200 text-center">
        <h1 class="text-xl text-blue-600 font-bold">Get Started with softpaynet Today!</h1>
        <p class="text-black">
            Join thousands of users who trust softpaynet for fast, easy, and secure global money transfers.
        </p>
        <div>
            <a href="https://accounts.paxful.com/register"
                class="p-4 w-full text-black font-semibold bg-lime-400 rounded-md">Create An Account</a>
        </div>
    </section>
</body>

</html>