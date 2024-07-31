<?php
// Sample process_payment.php

// Retrieve and sanitize input data
$package = htmlspecialchars($_POST['package']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$card_number = htmlspecialchars($_POST['card_number']);
$expiry_date = htmlspecialchars($_POST['expiry_date']);
$cvv = htmlspecialchars($_POST['cvv']);

// Here, integrate with a payment gateway API
// Example: Stripe, PayPal, etc.

// For demonstration, we'll just simulate a successful payment
// You would replace this with actual payment gateway logic
if ($package && $name && $email && $card_number && $expiry_date && $cvv) {
    // Simulate successful payment
    echo "Payment Successful for package: $package";
} else {
    // Handle errors
    echo "Payment Failed: Missing or invalid information.";
}
?>
