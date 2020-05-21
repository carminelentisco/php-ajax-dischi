<?php 

include_once __DIR__ . '/../database/database-ajax.php';

header('Content-Type: application/json');
echo json_encode( $albums );
