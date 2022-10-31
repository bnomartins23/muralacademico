<?php
include('connect.php');

if(isset($_POST['gostei'])){
    $id = filter_input(INPUT_POST, 'id');
    $qupdate = mysqli_query($query, "UPDATE mural set gostei = gostei+1 WHERE id = '$id' ");
    if($qupdate) {

        $qselect = mysqli_query($query, "SELECT gostei FROM mural WHERE id = '$id'");

        while ($row = mysqli_fetch_assoc($qselect)){
            echo $row['gostei'];
        }
    }
} else {
    echo "n";
}