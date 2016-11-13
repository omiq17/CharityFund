<?php
require_once "header.php";

    if(isset($_POST['d_name']) && !empty($_POST['d_name']) &&
        isset($_POST['d_amount']) && !empty($_POST['d_amount']) &&
        isset($_POST['d_purpose']) && !empty($_POST['d_purpose']) &&
        isset($_POST['d_address']) && !empty($_POST['d_address']) &&
        isset($_POST['d_cell']) && !empty($_POST['d_cell']) &&
        isset($_POST['d_pay']) && !empty($_POST['d_pay']) &&
        isset($_POST['d_paytype']) && !empty($_POST['d_paytype'])  ) {
        $d_name = mysqli_real_escape_string($link, $_POST['d_name']);
        $d_amount = mysqli_real_escape_string($link, $_POST['d_amount']);
        $d_purpose = mysqli_real_escape_string($link, $_POST['d_purpose']);
        $d_date = date("Y-m-d");
        $d_address = mysqli_real_escape_string($link, $_POST['d_address']);
        $d_cell = mysqli_real_escape_string($link, $_POST['d_cell']);
        $d_pay = mysqli_real_escape_string($link, $_POST['d_pay']);
        $d_paytype = mysqli_real_escape_string($link, $_POST['d_paytype']);
        // echo $d_amount;
        // die();
        //inserting data
        $query =" INSERT INTO `doner` (`d_id`, `d_name`, `d_amount`, `d_purpose`,
            `d_date`, `d_addr`, `d_cell`, `d_pay`, `d_paytype`) VALUES (NULL,
            '$d_name', '$d_amount', '$d_purpose', '$d_date', '$d_address', '$d_cell',
            '$d_pay', '$d_paytype') ";
        $result = mysqli_query($link, $query);
        $_SESSION['success'] = $d_name;
        header('Location: doner.php');
      }

//if field is empty
else{
    $_SESSION['form']='e';
    header('Location: doner.php');
}
?>
