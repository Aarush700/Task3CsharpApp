<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>About - Travel Booking</title>';
echo '<style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f4f4f4; }
    header { background:#3498db; color:white; padding:20px 0; text-align:center; }
    nav { background:#2980b9; display:flex; justify-content:center; }
    nav a { color:white; padding:14px 20px; text-decoration:none; text-transform:uppercase; }
    nav a:hover { background:#1abc9c; }
    main { padding:40px; max-width:800px; margin:auto; }
    footer { text-align:center; padding:20px; background:#333; color:white; margin-top:40px; }
</style>';
echo '</head>';
echo '<body>';
echo '<header>';
echo '<h1>About Travel Booking</h1>';
echo '</header>';

echo '<nav>';
echo '<a href="index.php">Home</a>';
echo '<a href="about.php">About</a>';
echo '<a href="contact.php">Contact</a>';
echo '</nav>';

echo '<main>';
echo '<h2>Our Mission</h2>';
echo '<p>We aim to make travel planning simple, fast, and accessible for everyone. Whether you are looking for a weekend getaway or a long adventure, we provide the tools and information you need to make your trip unforgettable.</p>';
echo '<h2>Our Vision</h2>';
echo '<p>To be the most trusted travel booking platform by combining user-friendly technology with expert travel knowledge.</p>';
echo '</main>';

echo '<footer>';
echo '&copy; ' . date(format: "Y") . ' Travel Booking. All rights reserved.';
echo '</footer>';
echo '</body>';
echo '</html>';
?>
