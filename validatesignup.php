<?php
if(Input::exists()){
		if (Token::check(Input::get('token'))) {

			$validate = new Validate();
			$validation = $validate->check($_POST, array(
					
					'lastname' => array(
						'required' => true,
						'min' => 2,
						'max' => 30
                    ),

                    'firstname' => array(
                    	'required' => true,
						'min' => 2,
						'max' => 30
                    ),

                    'username' => array(
                    	'required' => true,
						'min' => 2,
						'unique' => 'users',
						'max' => 30
                    ),

                    'email' => array(
                    	'email' => true,
                    	'required' => true,
                    	'unique' => 'users',
						'min' => 5,
						'max' => 30
                    ),

                    'gender' => array(
                    	'required' => true,
						'min' => 4
                    ),

                    'address' => array(
                    	'required' => true,
						'min' => 5
                    ),

                    'phone' => array(
                    	'required' => true,
						'min' => 8
                    ),

                    'password' => array(
                    	'required' => true,
						'min' => 5,
						'max' => 30
                    ),

                    'password_again' =>array(
						'required' => true,
						'matches' => 'password'
					)

                    )
			);
			if ($validation->passed()) {
					$user = new User();
					$salt = Hash::salt(32);
                    $photo = "avatar.png";

					try{
						$user->Create(array(
							'username' => Input::get('username'),
							'password' => Hash::make(Input::get('password'), $salt),
							'lastname' => Input::get('lastname'),
							'firstname' => Input::get('firstname'),
							'email' => Input::get('email'),
							'phone' => Input::get('phone'),
     						'photo'       => $photo,
							'address' => Input::get('address'),
							'gender' => Input::get('gender'),
							'salt' => $salt,
							'joined' => date('d F Y, h:i A'),
							'group' => 1

						));

						$lastname = Input::get('lastname');
						$username = Input::get('username');
						$password = Input::get('password');

						Session::flash('home', 'You have been Registered and can now Login');
						
						?>
				
				<div class="alert alert-success alert-dismissible fade show text-center" style="padding-right:12px;" role="alert">
                <strong>Dear <?php echo $lastname; ?>!</strong> Your Login Details Are: <br/>
                <b>Username : </b> <?php echo $username; ?> AND
                <b>Password : </b> <?php echo $password; ?> <br/>
                <span>Proceed to <a href="login.php">Login</a> </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>

                <?php
					}
                    catch(Exception $e){
						die($e->getMessage());
					}
					
				}else{
					
					foreach ($validation->errors() as $error) {
				
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