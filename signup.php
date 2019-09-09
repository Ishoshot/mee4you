<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<div class="modal-body modal-body-sub_agile">
				
				<form action="#" method="post">
				
					<h3 class="agileinfo_sign">Sign Up For <span>Free</span></h3>
					
					<div class="col-md-6 modal_body_left modal_body_left1">

						<?php require 'validatesignup.php'; ?>
						
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="lastname" autocomplete="off" id="lastname">
							<label>Lastname</label>
							<span></span>
						</div>
						
						<div class="styled-input agile-styled-input-top" style="margin-top:30px;">
							<input type="text" name="firstname" autocomplete="off" id="firstname"> 
							<label>Firstname</label>
							<span></span>
						</div>

						<div class="styled-input agile-styled-input-top" style="margin-top:30px;">
							<input type="text" name="username" autocomplete="off" id="username">
							<label>Choose Username</label>
							<span></span>
						</div>
						
						<div class="styled-input agile-styled-input-top" style="margin-top:30px;">
							<input type="email" name="email" autocomplete="off" id="email"> 
							<label>Email</label>
							<span></span>
						</div>

						<ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
							<li>
								<a href="#" class="facebook">
									<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								</a>
							</li>

							<li>
								<a href="#" class="twitter"> 
									<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								</a>
							</li>
							
							<li>
								<a href="#" class="instagram">
									<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								</a>
							</li>
							
							<li>
								<a href="#" class="pinterest">
									<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								</a>
							</li>
						</ul>
											
					</div>


					<div class="col-md-6 modal_body_right modal_body_right1">
						
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="phone" autocomplete="off" id="phone">
							<label>Phone Number</label>
							<span></span>
						</div>
						
						<div class="styled-input agile-styled-input-top" style="margin-top:30px;">
							<input type="text" name="address" autocomplete="off" id="address"> 
							<label>Address</label>
							<span></span>
						</div>
						
						<div class="styled-input agile-styled-input-top" style="margin-top:30px;">
							<select name="gender" id="gender" class="form-control">
								<option value="">~ Select Gender ~</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						
						<div class="styled-input agile-styled-input-top" style="margin-top:30px;">
							<input type="password" name="password" autocomplete="off" id="password"> 
							<label>Password</label>
							<span></span>
						</div>

						<div class="styled-input agile-styled-input-top" style="margin-top:30px;">
							<input type="password" name="confirm_password" autocomplete="off" id="confirm_password">
							<label>Confirm Password</label>
							<span></span>
						</div>

						<input type="hidden" name="token" value="<?php echo Token::generate();?>">
						
						<input type="submit" style="margin-top:15px;" value="Sign Up">

						<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>
													
					</div>

				</form>
			
				<div class="clearfix"></div>

			</div>
				
			</div>
		</div>
<!-- //Modal content-->
	</div>