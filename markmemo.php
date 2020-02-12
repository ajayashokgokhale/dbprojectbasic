<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';


$sql = "SELECT  
        s.id, s.fname, s.lname, s.email, s.mobile, 
        m.phy, m.chem, m.bio, ( m.phy + m.chem + m.bio) AS total 
FROM studentmaster s 
LEFT JOIN sutdentsmarks m ON(s.id = m.sutdentmaster_id) " ;
$result = mysqli_query($db, $sql);

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



        </div>

        <div class="row">
          <div class="col-md-12">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <td>Sr</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Mobile</td>
                  <td>Phy</td>
                  <td>Chem</td>
                  <td>Bio</td>
                  <td>Total</td>
                </tr>
              </thead>
              <tbody>


                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fname'] .' '. $row['lname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['phy']; ?></td>
                    <td><?php echo $row['chem']; ?></td>
                    <td><?php echo $row['bio']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                  </tr>
  
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>


        <!--/row-->

        <hr>

        <?php include_once 'footer.php'; ?>

    </div>
    <!--/.container-->


    <?php include_once 'footer_scripts.php'; ?>
</body>

</html>