
<?php
include 'db_connect.php';

$sql = "SELECT a.id, u.name AS user_name, s.service_name, a.appointment_date, a.payment_status, a.availability, a.review, a.promotion_code
FROM appointments a
JOIN users u ON a.user_id = u.id
JOIN services s ON a.service_id = s.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
echo "Appointment ID: " . $row['id'] . "\n";
echo "User: " . $row['user_name'] . "\n";
echo "Service: " . $row['service_name'] . "\n";
echo "Date: " . $row['appointment_date'] . "\n";
echo "Payment Status: " . $row['payment_status'] . "\n";
echo "Availability: " . $row['availability'] . "\n";
echo "Review: " . ($row['review'] ?? 'No review yet') . "\n";
echo "Promotion Code: " . ($row['promotion_code'] ?? 'None') . "\n\n";
}
} else {
echo "No appointments found\n";
}

$conn->close();
?>
