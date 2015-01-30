<div class="content">
	<div class="content-gear">
		<div class="container">
			<h3>REGISTER</h3>
			<form class="form-horizontal" role="form" action="<?= base_url();?>futsal_crud/insert" method="POST">
			<div class="form-group">
    			<label for="first_name" class="col-lg-3 control-label">First Name</label>
    			<div class="col-lg-7">
      				<input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="last_name" class="col-lg-3 control-label">Last Name</label>
    			<div class="col-lg-7">
      				<input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="id_card" class="col-lg-3 control-label">ID Card</label>
    			<div class="col-lg-7">
      				<input type="text" class="form-control" id="id_card" placeholder="ID Card" name="id_card">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="username" class="col-lg-3 control-label">Email</label>
    			<div class="col-lg-7">
      				<input type="text" class="form-control" id="username" placeholder="Email" name="username">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="password" class="col-lg-3 control-label">Password</label>
    			<div class="col-lg-7">
      				<input type="password" class="form-control" id="password" placeholder="Password" name="password">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="ttl" class="col-lg-3 control-label">Date of Birth</label>
    			<div class="col-lg-7">
      				<input type="text" class="form-control" id="ttl" placeholder="YYYY-MM-DD" name="ttl">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="team_name" class="col-lg-3 control-label">Team Name</label>
    			<div class="col-lg-7">
      				<input type="text" class="form-control" id="team_name" placeholder="Team Name" name="team_name">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="address" class="col-lg-3 control-label">Address</label>
    			<div class="col-lg-7">
      				<input type="text" class="form-control" id="address" placeholder="Address">
    			</div>
  			</div>
  			<div class="form-group">
    			<label for="phone" class="col-lg-3 control-label">Mobile Phone</label>
    			<div class="col-lg-7">
      				<input type="text" class="form-control" id="phone" placeholder="Mobile Phone" name="phone">
    			</div>
  			</div>
  			<div class="form-group">
    			<div class="col-sm-offset-7 col-sm-15">
      			<button type="submit" class="btn btn-default">Submit</button>
    			</div>
  			</div>
			</form>
		</div>
	</div>
</div>