<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<div class="modal-body modal-body-sub_agile">
				
				<div class="col-md-8 modal_body_left modal_body_left1">
					
					<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
						
					<form action="#" method="post">

						<?php require 'validatesignin.php'; ?>
						
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="username" autocomplete="off" id="username">
							<label>Username</label>
							<span></span>
						</div>
						
						<div class="styled-input">
							<input type="password" name="password" autocomplete="off" id="password"> 
							<label>Password</label>
							<span></span>
						</div>

						<div class="checkbox" style="font-size:14px; margin-top:20px;">
							<label><input type="checkbox" name="remember" id="remember"> Remember Me</label>
							<label class="pull-right">
							    <a href="#">Forgotten Password?</a>
							</label>
						</div>

        				<input type="hidden" name="token" value="<?php echo Token::generate();?>">
						
						<input type="submit" style="margin-top:15px;" value="Sign In">
					
					</form>

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
					
					<div class="clearfix"></div>
					
					<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

				</div>
				
				<div class="col-md-4 modal_body_right modal_body_right1">
					<img src="images/log_pic.jpg" alt=" "/>
				</div>
				
				<div class="clearfix"></div>
				
			</div>
		</div>
<!-- //Modal content-->
	</div>
</div>
<!-- //Modal1 -->
