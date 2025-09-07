<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Travel Booking - Home</title>';
echo '<style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f4f4f4; }
    header { background:#3498db; color:white; padding:20px 0; text-align:center; }
    nav { background:#2980b9; display:flex; justify-content:center; }
    nav a { color:white; padding:14px 20px; text-decoration:none; text-transform:uppercase; }
    nav a:hover { background:#1abc9c; }
    main { padding:40px; max-width:800px; margin:auto; }
    footer { text-align:center; padding:20px; background:#333; color:white; margin-top:40px; }
    .button { display:inline-block; padding:10px 20px; background:#1abc9c; color:white; text-decoration:none; border-radius:4px; margin-top:20px; }
    .button:hover { background:#16a085; }
</style>';
echo '</head>';
echo '<body>';
echo '<header>';
echo '<h1>Travel Booking</h1>';
echo '<p>Plan your perfect trip easily!</p>';
echo '</header>';

echo '<nav>';
echo '<a href="index.php">Home</a>';
echo '<a href="about.php">About</a>';
echo '<a href="contact.php">Contact</a>';
echo '</nav>';

echo '<main>';
echo '<h2>Welcome to Travel Booking</h2>';
echo '<p>Discover exciting destinations and book your next adventure with ease. Our platform allows you to search, compare, and plan your trips from the comfort of your home.</p>';
echo '<a href="contact.php" class="button">Get in Touch</a>';
echo '</main>';

echo '<footer>';
echo '&copy; ' . date(format: "Y") . ' Travel Booking. All rights reserved.';
echo '</footer>';
echo '</body>';
echo '</html>';
?>
