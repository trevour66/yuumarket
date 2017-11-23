<div class="row">
		<div class="col-md-12">
			<?php display_message(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" name="registration_form">
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="<?php  echo $row["first_name"]; ?>" tabindex="1" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="<?php  echo $row["last_name"]; ?>" tabindex="2" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="<?php  echo $row["display_name"]; ?>" tabindex="3" required>
				</div>
				<div class="form-group">
					<input type="text" name="Address" id="Address" class="form-control input-lg" placeholder="Address" tabindex="4" required>
				</div>
				<div class="form-group">
					<input type="text" name="2nd_Address" id="2nd_Address" class="form-control input-lg" placeholder="Address 2" tabindex="4" required>
				</div> 
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="mobile_number" name="mobile_number" id="mobile_number" class="form-control input-lg"  placeholder=" +234 <?php  echo $row["mobile_number"]; ?>" tabindex="5" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-sm-3 col-md-3 checkbox">
						<!-- <span class="button-checkbox">
							<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
							<input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
						</span> -->
						<label>
							<input type="checkbox" required> Check me out
						</label>
					</div>
				</div>

				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-6"></div>
					<div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Update" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
				</div>
			</form>
		</div>
	</div>