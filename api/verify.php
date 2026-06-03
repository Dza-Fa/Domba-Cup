<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    response(false, 'Method not allowed', null, 405);
}

$type = $_POST['type'] ?? '';
$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$status = $_POST['status'] ?? '';

if (!in_array($type, ['ticket', 'registration'])) {
    response(false, 'Invalid type', null, 400);
}
if (!in_array($status, ['paid', 'cancelled'])) {
    response(false, 'Invalid status', null, 400);
}
if ($id <= 0) {
    response(false, 'Invalid id', null, 400);
}

$mysqli = db_connect();
$table = $type === 'ticket' ? 'tickets' : 'registrations';

$stmt = $mysqli->prepare("UPDATE $table SET status = ? WHERE id = ?");
$stmt->bind_param('si', $status, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    response(true, "Status updated to $status");
} else {
    response(false, 'Record not found', null, 404);
}
