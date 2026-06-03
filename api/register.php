<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    response(false, 'Method not allowed', null, 405);
}

$mysqli = db_connect();
$data = getPostData();

$required = ['team_name', 'category', 'captain_name', 'captain_email', 'captain_phone'];
foreach ($required as $field) {
    if (empty($data[$field])) {
        response(false, "Field '$field' harus diisi.", null, 400);
    }
}

$stmt = $mysqli->prepare("
    INSERT INTO registrations (team_name, category, captain_name, captain_email, captain_phone, players, status)
    VALUES (?, ?, ?, ?, ?, ?, 'pending')
");
$players = json_encode($data['players'] ?? []);
$stmt->bind_param('ssssss', $data['team_name'], $data['category'], $data['captain_name'], $data['captain_email'], $data['captain_phone'], $players);
$stmt->execute();

response(true, 'Pendaftaran berhasil!', ['id' => $mysqli->insert_id]);
