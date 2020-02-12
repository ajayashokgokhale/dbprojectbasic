<?php include_once './constants.php';
include_once './dbinfo.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'CSV Import';
$page_menu = 'csvimport'; ?>
<?php include_once './header.php'; ?>

<body>
  <?php include_once './topmenu.php'; ?>

  <div class="container">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" action="csv_post.php" enctype="multipart/form-data" >
        <fieldset>

          <!-- Form Name -->
          <legend>CSV Import</legend>

          

          <!-- Text input-->
          <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="csvfile">Select CSV</label>
  <div class="col-md-4">
    <input id="csvfile" name="csvfile" class="input-file" type="file">
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