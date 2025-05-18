<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You</title>
    <link rel="stylesheet" href="portfolio css.css" type="text/css" />
</head>
<body>
    <header>
        <h1>Thank You!</h1>
    </header>

    <nav id="navbar">
        <ul>
            <li><a href="index.html">Home Page</a></li>
            <li><a href="bio.html">Bio Page</a></li>
            <li><a href="Portfolio.html">Portfolio Page</a></li>
        </ul>
    </nav>

    <main>
        <section id="feedback-section" style="max-width: 700px; margin: 40px auto; padding: 20px; background-color: #1e1e1e; border-radius: 10px; box-shadow: 0 4px 8px rgba(230, 57, 70, 0.4); color: #fff;">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $feedback = nl2br(htmlspecialchars($_POST["feedback"]));

                echo "<h2>Thanks for your feedback, $name!</h2>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Your Feedback:</strong><br>$feedback</p>";
            } else {
                echo "<p>No feedback submitted.</p>";
            }
            ?>
        </section>
    </main>
</body>
</html>
