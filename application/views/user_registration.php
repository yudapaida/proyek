<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Registration</span></h3>
<ul>
    <li><a href="index.php">Home</a></li>
</ul>
  <div class="well">
    <form class="form-horizontal" action="<?= base_url().'index.php/futsal_crud/insert';?>" method="POST">
      <h3>Your Personal Information</h3>
      <div class="control-group">
        <label class="control-label" for="firts_name">First name <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="first_name" name="first_name" placeholder="First Name">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="last_name">Last name <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="last_name" name="last_name" placeholder="Last Name">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="id_card">Id Card <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="id_card" name="id_card" placeholder="Id Card">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="username">Email <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="username" name="username" placeholder="Email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="password">Password <sup>*</sup></label>
        <div class="controls">
          <input type="password" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Date of Birth <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="ttl" name="ttl" placeholder="yyyy-mm-dd">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="team_name">Team Name <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="team_name" name="team_name" placeholder="Team Name">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="address">Address<sup>*</sup></label>
        <div class="controls">
          <input type="text" id="address" placeholder="Address" name="address">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="phone">Mobile Phone <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="phone" placeholder="Mobile Phone" name="phone">
        </div>
      </div>

      <div class="control-group">
        <div class="controls">
          <input class="btn btn-large" type="submit" value="Register">
        </div>
      </div>    
      
      <p class="pull-right badge badge-important">[ * ] Required field  </p>
      <br>

    </form> 
  </div>
</div>
</section>