<?php include_once './constants.php';
include_once './dbinfo.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Home';
$page_menu = 'home'; ?>
<?php include_once './header.php'; ?>

<body>
  <?php include_once './topmenu.php'; ?>

  <div class="container">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" action="new_reg.php">
        <fieldset>

          <!-- Form Name -->
          <legend>Registration Form</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fname">First Name</label>
            <div class="col-md-4">
              <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
              <span class="help-block">Enter First Name</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="lname">Last Name</label>
            <div class="col-md-4">
              <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
              <span class="help-block">Enter Last Name</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="mobile">Mobile</label>
            <div class="col-md-4">
              <input id="mobile" name="mobile" maxlength="10" type="text" placeholder="Mobile Number" class="form-control input-md" required="">
              <span class="help-block">Enter Mobile</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
              <input id="email" name="email" type="email" placeholder="Enter Email" class="form-control input-md">
              <span class="help-block">Enter Email</span>
            </div>
          </div>

          <!-- Multiple Radios (inline) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="radios_reg">Registration Type</label>
            <div class="col-md-4">
              <label class="radio-inline" for="radios_reg-0">
                <input type="radio" name="radios_reg" id="radios_reg-0" value="N" checked="checked">
                New
              </label>
              <label class="radio-inline" for="radios_reg-1">
                <input type="radio" name="radios_reg" id="radios_reg-1" value="E">
                Existing
              </label>
            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="notifications">Notifications</label>
            <div class="col-md-4">
              <select id="notifications" name="notifications" class="form-control">
                <option value="Y">Yes - All</option>
                <option value="N">No</option>
                <option value="I">Important Only</option>
              </select>
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
              <button id="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>



        </fieldset>
      </form>


    </div>



    <hr>

    <?php include_once 'footer.php'; ?>

  </div>
  <!--/.container-->


  <?php include_once 'footer_scripts.php'; ?>
</body>

</html>