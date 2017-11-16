<form action="<?php echo "$_SERVER[PHP_SELF]"; ?>" method="post">
	<div class="leftform">
		<h2>Required</h2>
		<p>First Name</p>
		<input name="first" type="text" value="" size="18" maxlength="128" />
		<p>Last Name</p>
		<input name="last" type="text" value="" size="18" maxlength="128" />
		<p>Email</p>
		<input name="email" type="text" value="" size="18" maxlength="128" />
		<p>Password</p>
		<input name="passwd" type="password" id="passwd" value="" size="18" maxlength="128" />
		<p>Confirm Password</p>
		<input name="confirm" type="password" id="confirm" value="" size="18" maxlength="128" />
	</div>
	<div class="rightform">
		<h2>Optional</h2>
		<p>Phone</p>
		<input name="phone" type="text" value="" size="18" maxlength="128" />
		<p>City</p>
		<input name="city" type="text" value="" size="18" maxlength="128" />
		<p>Province</p>
		<input name="province" type="text" value="" size="18" maxlength="128" />
		<p>Country</p>
		<input name="country" type="text" value="" size="18" maxlength="128" />
		<p>Postal Code</p>
		<input name="postal" type="text" value="" size="18" maxlength="128" />
	</div>
	<div class="clearfix center">
		<input name="add" type="submit" id="add" value="Add" />
		<input name="Reset" type="reset" value="Reset" />
	</div>
</form>
