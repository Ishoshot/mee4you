<?php
    if (Input::exists()) {
        
        if (Token::check(Input::get('token'))) {
        
        $validate = new  Validate();
         $validation = $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true)
         ));

         if ($validation->passed()) {
            $user = new User();
            $remember =(Input::get('remember')==='on') ? true : false;
            $login = $user->login(Input::get('username'),  Input::get('password'), $remember);

            if($login)
            {

            if ($user->hasPermission('admin'))
            {
                Redirect::to('admin.php');
            }
            else
            {
                Redirect::to('welcome.php');
            }

            }
            else
            {
                ?>   
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo '<p style="color:red;"> Oops! Login Faled, Check your Details and Try Again </p>'; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }

        }
     
    else
     
    {
        foreach ($validation->errors() as $error)
        {
           ?>   
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $error, '<br>'; ?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php                
        }
         
    }

    }

}

?>
