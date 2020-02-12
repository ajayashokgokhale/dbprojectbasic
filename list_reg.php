<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';

/** Need to update query **/

$sql = "SELECT * FROM studentmaster ORDER BY id ASC ";

$result = mysqli_query($db, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'List';
$page_menu = 'list'; ?>
<?php include_once './header.php'; ?>

<body>
    <?php include_once './topmenu.php'; ?>

    <div class="container">
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
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                            </tr>
                            <?php $counter++; ?>
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