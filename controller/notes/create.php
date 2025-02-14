<?php
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //    require base_path('../notes/Database.php');

    
    if (!isset($_POST['notesbody']) || strlen(trim($_POST['notesbody'])) === 0) {
        $errors['body'] = 'The notes body is required';
    }
    if (strlen($_POST['notesbody']) > 255) {
        $errors['body'] = 'The notes body must be less than 255 characters';
    }
    $currentUserId = 3;
    $db = new Database();
    if (empty($errors)) {
        $db->query('INSERT INTO notes (body,user_id) VALUES (:body,:user_id)', [
            'body' => $_POST['notesbody'],
            'user_id' => $currentUserId
        ]);
        header('Location:/notes');
    }
} 
    views(
        'notes/create.view.php',
        [
            'heading' => 'Create Note',
            'errors' => $errors
        ]
    );

