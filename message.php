<?php
    include("connection.php");
    $qry = "SELECT * FROM `message` ";
    $rs = mysqli_query($con,$qry);
    while ($row = mysqli_fetch_array($rs)) {
        echo "" . $row['sender_name'] . " " . ":: " . $row['msg_text'] .  " -- " . $row["msg_time"] . "<br>" ;
        ?>
        <hr>
        <?php
    }
?>

