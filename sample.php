<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Update with your DB username
$password = ""; // Update with your DB password
$dbname = "hotel_booking"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (hotel_name, guest_name, phone, check_in, check_out, room_type) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $hotelName, $guestName, $phone, $checkIn, $checkOut, $roomType);

// Set parameters and execute
$hotelName = $_POST['hotelName'];
$guestName = $_POST['guestName'];
$phone = $_POST['phone'];
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$roomType = $_POST['roomType'];

if ($stmt->execute()) {
    echo "New record created successfully. Redirecting in 3 seconds...";
    sleep(3);
    header('Location: index.html');
    exit(); // Always use exit after header redirection
} else {
    echo "Error: " . $stmt->error;
}


// Close connections
$stmt->close();
$conn->close();
?>
