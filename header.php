<?php require_once "connect.php";
if(empty($_SESSION['user'])){
	header('Location: index.php');
  die();
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Charity Fund</title>
    <link rel="icon" href="images/fav.png" type="image/png">
    <!-- Bootstrap Core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link href="css/admin.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
    </script>
</head>

<body>
     <!--header & Navbar div-->
    <div class="row header container-fluid">
        <div class="col-md-8">
            <img src="images/logo.png" alt="Charity Fund">
        </div>
         <div class="col-md-4">
           <?php
               echo "<div class='dropdown profile'>
                   <button class='btn btn-primary dropdown-toggle' type='button'
                                       data-toggle='dropdown'>
                       Hello, <strong>Admin</strong>&nbsp;
                     <span class='caret'></span>
                     </button>
                     <ul class='dropdown-menu'>
                       <li><a href='logout.php'>Logout</a></li>
                     </ul>
               </div>";
          ?>
            </div>
    </div>  <!--end of header div-->
    <div class="container-fluid row section">
        <!--Start Sidebar-->
            <div class ="col-md-3 sidebar">
                 <ul class="nav nav-pills nav-stacked">
                     <li role="presentation"><a href="admin.php">Dashboard</a></li>
                     <li role="presentation"><a href="doner.php">Add Doner</a></li>
                     <li role="presentation"><a href="list.php">Pending List</a></li>
                     <!-- <li role="presentation"><a href="report.php">Report</a></li> -->
                </ul>
            </div>
            <!--end  Sidebar -->
