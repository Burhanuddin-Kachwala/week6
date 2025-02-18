<?php
use core\App;
use core\Database;
use core\Validator;
$errors = [];
$db = App::resolve(Database::class);

$data = [  
    'email' => $_POST['email'],
    'password' => $_POST['password']
];

if (!Validator::string($data['email'], 1, 255) || !Validator::email($data['email'])) {
    $errors['email'] = 'Invalid email address.';
}

if (!Validator::string($data['password'])) {
    $errors['password'] = 'Please Provide Password';
}

if (empty($errors)) {  
    
    // Insert data into the user table
    $result=$db->query('select * from users where email = :email', [
        'email' => $data['email']        
    ])->find(pdo::FETCH_ASSOC);
    //dd($result);

    if(! $result){        
        
        $errors['email'] = 'Account not found';
        views(
            'sessions/create.view.php',
            [
                'heading' => 'New User Registration',
                'errors' => $errors
            ]
        );
    }
   
    if(password_verify($data['password'],$result['password'])){
      
        login($data['email']);
        header('Location: /');
    }
   

   
    
    
    

   
} else {
    // Output validation errors
    views(
        'sessions/create.view.php',
        [
            'heading' => 'New User Registration',
            'errors' => $errors
        ]
    );
    return;
    exit();
}
