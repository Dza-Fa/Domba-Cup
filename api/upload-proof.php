<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    response(false, 'Method not allowed', null, 405);
}

$ticketId = isset($_POST['ticket_id']) ? (int)$_POST['ticket_id'] : 0;
$regId = isset($_POST['registration_id']) ? (int)$_POST['registration_id'] : 0;

if ($ticketId <= 0 && $regId <= 0) {
    response(false, 'Ticket ID or Registration ID required', null, 400);
}

if (!isset($_FILES['payment_proof']) || $_FILES['payment_proof']['error'] !== UPLOAD_ERR_OK) {
    response(false, 'File upload failed', null, 400);
}

$uploadDir = __DIR__ . '/../uploads/';
if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

$file = $_FILES['payment_proof'];
$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
$allowed = ['jpg', 'jpeg', 'png', 'pdf'];
if (!in_array($ext, $allowed)) {
    response(false, 'Invalid file type. Use JPG, PNG, or PDF.', null, 400);
}

$filename = 'proof_' . time() . '_' . uniqid() . '.' . $ext;
$target = $uploadDir . $filename;

if (!move_uploaded_file($file['tmp_name'], $target)) {
    response(false, 'Failed to save file', null, 500);
}

$proofPath = '/Domba-Cup/uploads/' . $filename;

$mysqli = db_connect();
if ($ticketId > 0) {
    $stmt = $mysqli->prepare("UPDATE tickets SET payment_proof_path = ? WHERE id = ?");
    $stmt->bind_param('si', $proofPath, $ticketId);
    $stmt->execute();
} else {
    $stmt = $mysqli->prepare("UPDATE registrations SET payment_proof_path = ? WHERE id = ?");
    $stmt->bind_param('si', $proofPath, $regId);
    $stmt->execute();
}

response(true, 'Payment proof uploaded', ['path' => $proofPath]);
