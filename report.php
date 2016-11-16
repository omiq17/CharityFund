<?php require_once "connect.php";
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <link href="css/admin.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
     <!--header & Navbar div-->
    <div class="row header container-fluid">
        <div class="col-md-8">
            <a href="admin.php"><img src="images/logo.png" alt="Charity Fund"></a>
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
            <div class="col-md-9 content">
              <?php
              //if user dont check
              if(isset($_SESSION['form']) && !empty($_SESSION['form'])){
                echo "<p style='color:red;'>
                 Please check and then click.</p>";
                 unset($_SESSION['form']);
              }
              else if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
                echo "<p style='color:green;'>
                 Successfully made paid.</p>";
                 unset($_SESSION['success']);
              }
               ?>
                <div>
                <form class="form-inline" method="post" action="makePaid.php" >
                <table  id="example" class="table table-striped">
                    <thead>
                      <tr>
                       <!-- <th><input type="checkbox"  id="checkAll"/></th> -->
                        <th> </th>
                        <th>Doner Name</th>
                        <th>Ammount</th>
                        <th>Purpose</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Cell No.</th>
                      </tr>
                    </thead>
                  </thead>
                  <tbody>
                          <?php
                              $query="SELECT * FROM `doner` where `d_pay`='Unpaid'";
                              $result=mysqli_query($link, $query);
                             $total = 0;
                              while($row=mysqli_fetch_array($result)){
                                $total += $row['d_amount'];
                          ?>
                                  <tr>
                                         <td><input type="checkbox" name="selected[]"
                                             value="<?php echo $row['d_id']?>"/></td>
                                          <td><?php echo $row['d_name']?></td>
                                          <td><?php echo $row['d_amount']?></td>
                                          <td><?php echo $row['d_purpose']?></td>
                                          <td><?php echo $row['d_date']?></td>
                                          <td><?php echo $row['d_addr']?></td>
                                          <td><?php echo $row['d_cell']?></td>
                                  </tr>
                              <?php
                              }
                              ?>
                  </tbody>
                  </table>
                  <p>
                    Total Amount = <b><?php echo $total; ?></b> Tk.
                  </p>
                  <input type="submit" class="btn btn-primary btn-md"
                         value="Make Paid" name="makePaid">
                </form>
                </div>
            </div>
            <!--end Content-->
        </div>
      <script>
        $(document).ready(function(){
        $('.sidebar ul li.active').removeClass("active");
        $('.sidebar ul li:nth-child(3)').addClass("active");
          });
      </script>
    </body>
</html>
