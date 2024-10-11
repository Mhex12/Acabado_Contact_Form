<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    // Output the data (you can also use conditional statements or loops here if needed)
    echo "<h1>Contact Information</h1>";
    echo "<p>First Name: " . htmlspecialchars($first_name) . "</p>";
    echo "<p>Last Name: " . htmlspecialchars($last_name) . "</p>";
    echo "<p>Age: " . htmlspecialchars($age) . "</p>";
    echo "<p>Contact: " . htmlspecialchars($contact) . "</p>";
    echo "<p>Address: " . htmlspecialchars($address) . "</p>";
}
?>
