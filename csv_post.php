<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';

/** Need to update query **/

echo '<pre>';
print_r($_FILES);
echo '</pre>';


$fileName = $_FILES["csvfile"]["tmp_name"];


$file = fopen($fileName, "r");

while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
    echo '<pre>';
    print_r($column);
    echo '</pre>';

    //Prepare Insert
    $sql = "INSERT INTO 
        studentmaster 
        SET 
        fname='" . $column[1] . "',
        lname='" .  $column[2]  . "',
        email='" . $column[3]  . "',
        mobile='" .  $column[4]  . "',
        date_added='" . date('Y-m-d H:i:s') . "' ";

    $result = mysqli_query($db, $sql);
    if ($result) {
        //If insert successfully then insert into marks
        $new_ID = mysqli_insert_id($db);
        echo '<br>New Record is added successfully: ' . $column[1] . ' ' . $column[2];

        //Insert into marks
        $sql = "INSERT INTO 
        sutdentsmarks 
        SET 
        sutdentmaster_id='" . $new_ID . "',
        phy='" .  $column[5]  . "',
        chem='" . $column[6]  . "',
        bio='" .  $column[7]  . "' ";
        $result2 = mysqli_query($db, $sql);

        if( !$result2 ) {
            //Show Error
            echo '<br>Error: ' . mysqli_error($db);
        }


    } else {
        //Show Error
        echo '<br>Error: ' . mysqli_error($db);
    }
}

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
          <p>CSV Imported</p>



        </div>




        <!--/row-->

        <hr>

        <?php include_once 'footer.php'; ?>

    </div>
    <!--/.container-->


    <?php include_once 'footer_scripts.php'; ?>
</body>

</html>