<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy Permit AI</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
        <div class="hero-content">
            <h2>Fast & Easy Business Permits</h2>
            <p>Let Easy Permit AI handle the complexity while you focus on your business.</p>
            <button class="cta-button" onclick="document.querySelector('.contact-form').scrollIntoView({ behavior: 'smooth' });">Get Started</button>
        </div>
    </div>
    <section class="how-it-works">
        <h3>How It Works</h3>
        <p>Fill out a quick form, receive your permit summary report, and proceed with confidence.</p>
    </section>
    <section class="contact-form">
        <h3>Get Your Permit Summary</h3>
        <form method="POST" action="index.php">
            <label for="business-name">Business Name</label>
            <input type="text" id="business-name" name="business-name" required>
            <label for="business-type">Business Type</label>
            <select id="business-type" name="business-type" required>
                <option value="Retail">Retail</option>
                <option value="Construction">Construction</option>
                <option value="Restaurant">Restaurant</option>
            </select>
            <label for="location">Business Location</label>
            <input type="text" id="location" name="location" required>
            <label for="additional-info">Additional Information</label>
            <textarea id="additional-info" name="additional-info"></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2025 Easy Permit AI. All rights reserved.</p>
    </footer>

    <?php
    // Handle the form submission and send email
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $business_name = $_POST['business-name'];
        $business_type = $_POST['business-type'];
        $location = $_POST['location'];
        $additional_info = $_POST['additional-info'];

        // Email address to receive form submissions
        $to = "hierarchyinvestmentcorp@gmail.com";
        $subject = "New Permit Request from $business_name";
        $message = "
        Business Name: $business_name\n
        Business Type: $business_type\n
        Location: $location\n
        Additional Info: $additional_info\n\n
        A $100 permit summary will be provided.";

        // Send the email
        mail($to, $subject, $message);
    }
    ?>
</body>
</html>