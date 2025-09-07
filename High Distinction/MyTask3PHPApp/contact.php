<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Contact - Travel Booking</title>';
echo '<style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f4f4f4; }
    header { background:#3498db; color:white; padding:20px 0; text-align:center; }
    nav { background:#2980b9; display:flex; justify-content:center; }
    nav a { color:white; padding:14px 20px; text-decoration:none; text-transform:uppercase; }
    nav a:hover { background:#1abc9c; }
    main { padding:40px; max-width:800px; margin:auto; }
    footer { text-align:center; padding:20px; background:#333; color:white; margin-top:40px; }
    form { display:flex; flex-direction:column; }
    input, textarea { margin-bottom:20px; padding:10px; border:1px solid #ccc; border-radius:4px; }
    button { padding:10px 20px; background:#1abc9c; color:white; border:none; border-radius:4px; cursor:pointer; }
    button:hover { background:#16a085; }
</style>';
echo '</head>';
echo '<body>';
echo '<header>';
echo '<h1>Contact Us</h1>';
echo '</header>';

echo '<nav>';
echo '<a href="index.php">Home</a>';
echo '<a href="about.php">About</a>';
echo '<a href="contact.php">Contact</a>';
echo '</nav>';

echo '<main>';
echo '<h2>Get in Touch</h2>';
echo '<form action="" method="post">';
echo '<input type="text" name="name" placeholder="Your Name" required>';
echo '<input type="email" name="email" placeholder="Your Email" required>';
echo '<textarea name="message" placeholder="Your Message" rows="5" required></textarea>';
echo '<button type="submit">Send Message</button>';
echo '</form>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(string: $_POST['name']);
    echo "<p style=\'color:green;\'>Thank you, $name! Your message has been received.</p>";
}

echo '</main>';

echo '<footer>';
echo '&copy; ' . date(format: "Y") . ' Travel Booking. All rights reserved.';
echo '</footer>';
echo '</body>';
echo '</html>';
?>
