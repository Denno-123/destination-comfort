CREATE DATABASE hotel_booking;

USE hotel_booking;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hotel_name VARCHAR(255) NOT NULL,
    guest_name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    check_in DATE NOT NULL,
    check_out DATE NOT NULL,
    room_type VARCHAR(50) NOT NULL
);
