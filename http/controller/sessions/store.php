<?php
use core\App;
use core\Database;
use core\Authenticator;

use http\Forms\LoginForm;

$db = App::resolve(Database::class);

$data = [  
    'email' => $_POST['email'],
    'password' => $_POST['password']
];

$form = new LoginForm();


if ($form->validate($data['email'], $data['password'])) {

   if((new Authenticator())->attempt($data['email'], $data['password'])){
    
       redirect('/');
       //dd('Logged In');
      
   }
    
   $form->error('password','No Matching Account Found');
    
   
}
 views('sessions/create.view.php', [
    'heading' => 'Login',  
    'errors' => $form->errors()
]);
return;
exit();
