<?php
  require_once "header.php";
 ?>
 <!--start Content-->
         <div class="col-md-9 content">
           <?php
           //if user dont check
           if(isset($_SESSION['form']) && !empty($_SESSION['form'])){
             echo "<p style='color:red;'>
              Please check order to make them paid.</p>";
              unset($_SESSION['form']);
           }
           else if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
             echo "<p style='color:green;'>
              Successfully made orders paid.</p>";
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
                           while($row=mysqli_fetch_array($result)){
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
               <input type="submit" class="btn btn-primary btn-md"
                      value="Make Paid" name="makePaid">
             </form>
             </div>
         </div>
         <!--end Content-->
     </div>
