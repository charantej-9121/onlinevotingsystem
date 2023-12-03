<!-- 'register_vote.php' -->
<?php
session_start();

// Retrieve the party from the request body
$data = json_decode(file_get_contents('php://input'), true);
$party = $data['party'];

// Simulate storing votes in session (You should use a database in a real scenario)
if (!isset($_SESSION['votes'][$party])) {
  $_SESSION['votes'][$party] = 1;
} else {
  $_SESSION['votes'][$party]++;
}

// Return a success response
http_response_code(200);
?>
