<?php

session_start();

if (!isset($_SESSION['guess_active'])) {
    $random = rand(1, 100);

    $_SESSION['guess_number'] = $random;
    $_SESSION['guess_active'] = 1;
}

$guess_number = $_SESSION['guess_number'];

$user_guest = $_POST['value'];

$result = ($user_guest == $guess_number);

if($result){
    session_destroy();
}

$result = [
    'result' => $result,
    'hint' => $user_guest > $guess_number ? 'Too big' : 'Too small'
];

echo json_encode($result);

exit;
