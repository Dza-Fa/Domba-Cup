<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    response(false, 'Method not allowed', null, 405);
}

$mysqli = db_connect();
$data = getPostData();

$stmt = $mysqli->prepare("
    INSERT INTO tickets (match_id, match_label, buyer_name, buyer_email, buyer_phone, quantity, unit_price, total_price, payment_method, status)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')
");
$stmt->bind_param(
    'sssssiiis',
    $data['match_id'] ?? 'general',
    $data['match_label'] ?? 'General Ticket',
    $data['buyer_name'],
    $data['buyer_email'],
    $data['buyer_phone'],
    $data['quantity'],
    $data['unit_price'],
    $data['total_price'],
    $data['payment_method'] ?? 'transfer'
);
$stmt->execute();

response(true, 'Pesanan tiket berhasil!', ['ticket_id' => $mysqli->insert_id]);
