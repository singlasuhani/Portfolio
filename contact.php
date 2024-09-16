 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Suhani Singla</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
        <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="contact-form">
        <h2>Have a Question?</h2>
        <form action="submit_form.php" method="post">
            <label for="fullname" class="label">Full Name *</label>
            <input type="text" id="fullname" name="fullname" class="contact-input" required>

            <label for="email" class="label">Email *</label>
            <input type="email" id="email" name="email" class="contact-input" required>

            <label for="phone" class="label">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="contact-input">

            <label for="message" class="label">Message *</label>
            <textarea id="message" name="message" class="contact-input" required></textarea>

            <input type="submit" value="Send Message" class="contact-submit">
        </form>
    </div>
    <footer>
        <p>Copyright © 2024 Suhani Singla</p>
    </footer>
</body>
</html>
