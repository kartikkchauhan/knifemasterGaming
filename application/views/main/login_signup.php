
<div class="modal-dialog modal-lg">
   <div class="modal-content modal-popup">

		<div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			 </button>
		</div>

		<div class="modal-body">
			 <div class="container-fluid">
				  <div class="row">

					   <div class="col-md-12 col-sm-12">
							<div class="modal-title">
								 <h2>Underdog eSports</h2>
							</div>

							<!-- NAV TABS -->
							<ul class="nav nav-tabs" role="tablist">
								 <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
								 <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>

							</ul>

							<!-- TAB PANES -->
							<div class="tab-content">
								 <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
									  <form action="<?= BASE_URL ?>home/signUp" method="post">
									  		<input type="text" class="form-control" id="teamName" name="teamName" placeholder="Team Name *if any*">
										   <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
										   <input type="telephone" class="form-control" id="contactNo" name="contact" placeholder="Contact Number" required>
										   <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
										   <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
										   <input type="submit" class="form-control" name="submit" value="Create Account">
									  </form>
								 </div>

								 <div role="tabpanel" class="tab-pane fade in" id="sign_in">
									  <form action="<?= BASE_URL ?>home/loginUser" method="post">
										   <input type="email" class="form-control" name="email" placeholder="Email" required>
										   <input type="password" class="form-control" name="password" placeholder="Password" required>
										   <input type="submit" class="form-control" name="submit" value="Sign In">
										   <a href="#">Forgot your password?</a>
									  </form>
								 </div>
							</div>
					   </div>

				  </div>
			 </div>
		</div>

   </div>
</div>