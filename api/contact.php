<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    response(false, 'Method not allowed', null, 405);
}

$pdo = db_connect();
$data = getPostData();

$name = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$message = trim($data['message'] ?? '');

if (!$name || !$email || !$message) {
    response(false, 'All fields are required', null, 400);
}

$stmt = $pdo->prepare("
    INSERT INTO contacts (name, email, message, created_at)
    VALUES (?, ?, ?, NOW())
");
$stmt->execute([$name, $email, $message]);

response(true, 'Message sent successfully');
