<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';

/** Need to update query **/
$sql = "SELECT * FROM studentmaster ";

$result = mysqli_query($db, $sql);

echo '<pre>';
print_r($result);
print_r($_POST);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Home';
$page_menu = 'home'; ?>
<?php include_once './header.php'; ?>

<body>
  <?php include_once './topmenu.php'; ?>

  <div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

      <div class="col-xs-12 col-md-12">
        <p class="pull-right visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>

        <div class="row">
          <div class="col-md-12">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <td>Sr</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Mobile</td>
                </tr>
              </thead>
              <tbody>

                <?php $counter = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['student_email']; ?></td>
                    <td><?php echo $row['student_mobile']; ?></td>
                  </tr>
                  <?php $counter++; ?>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
        <!--/row-->
      </div>
      <!--/.col-xs-12.col-sm-9-->


    </div>
    <!--/row-->

    <hr>

    <?php include_once 'footer.php'; ?>

  </div>
  <!--/.container-->


  <?php include_once 'footer_scripts.php'; ?>
</body>

</html>