<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';

/** Need to update query **/


echo '<pre>';
print_r($_POST);
echo '</pre>';

$sql = "DELETE FROM 
        studentmaster 
        WHERE  
        mobile='" . $_POST['mobile'] . "' ";

$result = mysqli_query($db, $sql);

$rows_deleted = mysqli_affected_rows($db);

?>
<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Delete';
$page_menu = 'delete'; ?>
<?php include_once './header.php'; ?>

<body>
    <?php include_once './topmenu.php'; ?>

    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">
            <h3><?php echo $rows_deleted; ?> Record is deleted.</h3>
        </div>
        <!--/row-->

        <hr>

        <?php include_once 'footer.php'; ?>

    </div>
    <!--/.container-->


    <?php include_once 'footer_scripts.php'; ?>
</body>

</html>