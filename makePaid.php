<?php
require_once "connect.php";
if (isset($_POST['makePaid'])){
    if( isset($_POST['selected']) ){
        $id=$_POST['selected'];
        // print_r ($id);
        // die();
        //$N = count($id);
        foreach ($id as $item){
            $query = " UPDATE `doner` SET `d_pay`='Paid' WHERE `doner`.`d_id`='$item' ";
            $result = mysqli_query($link, $query);
            if (!$result) {
                // $_SESSION['del']=$item;
                // header("location: list.php");
                echo "error";
                die();
                }
           }
        //successfully paid all orders
        $_SESSION['success']='added';
        header("location: list.php");
    }

    //if nothing is checked
    else{
        $_SESSION['form']='error';
        header("location: list.php");
    }
    //end of if/else
}
?>
