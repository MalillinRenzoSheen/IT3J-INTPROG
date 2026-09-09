<?php

$name = "";
$message = "";
$alert = "";
$alertType = "";

$jsonFile = __DIR__ . "/data/messages.json";
$data = @file_get_contents($jsonFile);
$messages = json_decode($data, true);

if (!is_array($messages)) {
    $messages = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $message === "") {
        $alert = "Please fill in all fields.";
        $alertType = "error";
    } else {
        $messages[] = [
            "name" => $name,
            "message" => $message
        ];

        $json = json_encode($messages, JSON_PRETTY_PRINT);
        file_put_contents($jsonFile, $json);

        $alert = "Message sent successfully!";
        $alertType = "success";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Message Us | GROUP-4</title>

    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body>

    <header class="header">

        <div class="header-content">

            <a href="index.php" class="logo">
                Group 5
            </a>

            <nav class="navigation">
                <a href="index.php">Home</a>
                <a href="index.php#team">Our Team</a>
                <a href="messages.php">Message Us</a>
            </nav>

        </div>

    </header>

    <?php if ($alert !== ""): ?>

    <div class="message-alert <?php echo $alertType; ?>">

        <span>
            <?php echo htmlspecialchars($alert); ?>
        </span>

        <button type="button" class="alert-close">
            &times;
        </button>

    </div>

    <?php endif; ?>

    <main>

        <section class="message-section">

            <a href="index.php" class="back-button">← Back to Home</a>

            <div class="message-form-card">

                <h1>Message Us</h1>

                <form action="messages.php" method="POST">

                    <label for="name">
                        Name
                    </label>

                    <input type="text" id="name" name="name" placeholder="Enter your name" required>

                    <label for="message">
                        Message
                    </label>

                    <textarea id="message" name="message" placeholder="Write your message..." required></textarea>

                    <button type="submit">
                        Send Message
                    </button>

                </form>

            </div>


            <?php foreach ($messages as $msg): ?>

            <div class="message-card">
                <div class="message-user">
                    <div class="user-avatar">
                        <?php echo strtoupper(substr($msg["name"], 0, 1)); ?>
                    </div>
                    <div>
                        <h3><?php echo htmlspecialchars($msg["name"]); ?></h3>
                    </div>
                </div>

                <div class="message-content">
                    <p><?php echo nl2br(htmlspecialchars($msg["message"])); ?></p>
                </div>
            </div>

            <?php endforeach; ?>

        </section>

    </main>


    <script src="assets/js/system.js"></script>
</body>



</html>