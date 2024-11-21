<?php
include 'db_connect.php';

// Insert sample users
$sql = "INSERT INTO users (name, email, password, phone, role) VALUES
('Admin User', 'admin@example.com', 'adminpassword', '1234567890', 'admin'),
('Customer User', 'customer@example.com', 'customerpassword', '0987654321', 'customer')";
if ($conn->query($sql) === TRUE) {
echo "Sample users inserted successfully\n";
} else {
echo "Error inserting users: " . $conn->error . "\n";
}

// Insert sample services
$sql = "INSERT INTO services (service_name, description, price) VALUES
('Room Cleaning', 'Daily room cleaning services', 50.00),
('Laundry', 'Wash and fold laundry service', 20.00)";
if ($conn->query($sql) === TRUE) {
echo "Sample services inserted successfully\n";
} else {
echo "Error inserting services: " . $conn->error . "\n";
}

// Insert into Insert Test table
$sql = "INSERT INTO insert_test (test_data) VALUES ('This is a test')";
if ($conn->query($sql) === TRUE) {
echo "Sample data inserted into insert_test successfully\n";
} else {
echo "Error inserting test data: " . $conn->error . "\n";
}

// Insert sample appointments
$sql = "INSERT INTO appointments (user_id, service_id, appointment_date, payment_status, availability, review, promotion_code) VALUES
(1, 1, '2024-12-01 14:00:00', 'completed', 'available', 'Excellent service!', 'PROMO10'),
(2, 2, '2024-12-02 10:00:00', 'pending', 'unavailable', NULL, NULL)";
if ($conn->query($sql) === TRUE) {
echo "Sample appointments inserted successfully\n";
} else {
echo "Error inserting appointments: " . $conn->error . "\n";
}

$conn->close();
?>
