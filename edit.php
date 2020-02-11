<?php include_once './constants.php';
include_once './dbinfo.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Edit';
$page_menu = 'edit'; ?>
<?php include_once './header.php'; ?>

<body>
  <?php include_once './topmenu.php'; ?>

  <div class="container">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" action="edit_reg.php" >
        <fieldset>

          <!-- Form Name -->
          <legend>Edit Registration</legend>

          

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="mobile">Mobile</label>
            <div class="col-md-4">
              <input id="mobile" name="mobile" maxlength="10" type="text" placeholder="Mobile Number" class="form-control input-md" required="">
              <span class="help-block">Enter Mobile</span>
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