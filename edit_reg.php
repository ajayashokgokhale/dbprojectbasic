<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';

/** Need to update query **/

$sql = "SELECT * FROM 
        studentmaster 
        WHERE  
        mobile='" . $_POST['mobile'] . "' ";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

echo '<pre>';
print_r($_POST);
print_r($row);
echo '</pre>';





?>
<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Edit';
$page_menu = 'edit'; ?>
<?php include_once './header.php'; ?>

<body>
    <?php include_once './topmenu.php'; ?>

    <div class="container">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" action="edit_save.php" >
          <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" >
        <fieldset>

          <!-- Form Name -->
          <legend>Edit Registration Form</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fname">First Name</label>
            <div class="col-md-4">
              <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="" value="<?php echo $row['fname']; ?>" >
              <span class="help-block">Enter First Name</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="lname">Last Name</label>
            <div class="col-md-4">
              <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="" value="<?php echo $row['lname']; ?>" >
              <span class="help-block">Enter Last Name</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="mobile">Mobile</label>
            <div class="col-md-4">
              <input id="mobile" name="mobile" maxlength="10" type="text" placeholder="Mobile Number" class="form-control input-md" value="<?php echo $row['mobile']; ?>" disabled >
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
              <input id="email" name="email" type="email" placeholder="Enter Email" class="form-control input-md" value="<?php echo $row['email']; ?>" >
              <span class="help-block">Enter Email</span>
            </div>
          </div>

          <!-- Multiple Radios (inline) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="radios_reg">Registration Type</label>
            <div class="col-md-4">
              <label class="radio-inline" for="radios_reg-0">
                <input type="radio" name="radios_reg" id="radios_reg-0" value="N" <?php echo ( $row['reg_type'] == 'N' ? 'checked="checked"' : '' ); ?> >
                New
              </label>
              <label class="radio-inline" for="radios_reg-1">
                <input type="radio" name="radios_reg" id="radios_reg-1" value="E" <?php echo ( $row['reg_type'] == 'E' ? 'checked="checked"' : '' ); ?> >
                Existing
              </label>
            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="notifications">Notifications</label>
            <div class="col-md-4">
              <select id="notifications" name="notifications" class="form-control">
                <option value="Y" <?php echo ( $row['notifications'] == 'Y' ? 'selected' : '' ); ?>  >Yes - All</option>
                <option value="N" <?php echo ( $row['notifications'] == 'N' ? 'selected' : '' ); ?> >No</option>
                <option value="I" <?php echo ( $row['notifications'] == 'I' ? 'selected' : '' ); ?> >Important Only</option>
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


        <!--/row-->

        <hr>

        <?php include_once 'footer.php'; ?>

    </div>
    <!--/.container-->


    <?php include_once 'footer_scripts.php'; ?>
</body>

</html>