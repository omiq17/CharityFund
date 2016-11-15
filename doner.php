<?php
  require_once "header.php";
 ?>
 <!--start Content-->
         <div class="col-md-9 content">
           <?php
           //if user dont check
           if(isset($_SESSION['form']) && !empty($_SESSION['form'])){
             echo "<p style='color:red;'>
              Please give all the information correctly.</p>";
              unset($_SESSION['form']);
           }
           else if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
             echo "<p style='color:green;'>
              Successfully added ".$_SESSION['success']."'s information.</p>";
              unset($_SESSION['success']);
           }
           else
           {
              echo "<p style='color:blue;'>
              Please fill all the information.</p>";
           }
            ?>
           <form class="form-horizontal reg-form" action="donerCheck.php" method="post">
                 <div class="form-group form-group-md">
                   <label class="col-md-2 control-label">Doner Name</label>
                       <div class="col-sm-6">
                         <input class="form-control" type="text"
                                placeholder="Doner Name" maxlength="50" name="d_name">
                       </div>
                 </div>
               <div class="form-group form-group-md">
                 <label class="col-md-2 control-label">Amount</label>
                 <div class="col-md-6">
                  <input class="form-control" type="number"
                    placeholder="Amount Here" maxlength="200" name="d_amount">
                  </div>
               </div>
              <div class="form-group form-group-md">
                <label class="col-md-2 control-label">Purpose</label>
                  <div class="col-md-6">
                    <input class="form-control" type="text"
                      placeholder="Purpose of donation" maxlength="20" name="d_purpose">
                  </div>
              </div>
              <div class="form-group form-group-md">
                    <label class="col-md-2 control-label">Address</label>
                    <div class="col-md-6">
                     <input class="form-control" type="text"
                            placeholder="Address Here" maxlength="50" name="d_address">
                   </div>
              </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Contact Number</label>
                       <div class="col-md-6">
                         <input class="form-control" type="text"
                                placeholder="ex : 01xxxxxxxxx" name="d_cell">
                       </div>
                 </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Payment</label>

                       <div class="col-md-6 form-group-md">
                             <select  name="d_pay">
                                  <option disabled selected style='display:none;'>Payment</option>
                                  <option value='Paid' >Paid</option>
                                  <option value='Unpaid' >Pending</option>
                             </select>
                       </div>

                 </div>
                 <div class="form-group form-group-md">
                       <label class="col-md-2 control-label">Pay Type</label>

                       <div class="col-md-6 form-group-md">
                             <select  name="d_paytype">
                                  <option disabled selected style='display:none;'>Pay Type</option>
                                  <option value='Cash' >Cash</option>
                                  <option value='Cheque' >Cheque</option>
                                  <option value='bKash' >bKash</option>
                                  <option value='Other' >Other</option>
                             </select>
                       </div>

                 </div>
                <div class="form-group">
                       <div class="col-sm-offset-2 col-md-10">
                         <button type="submit" class="btn btn-default">Add Doner</button>
                       </div>
                 </div>
           </form>
         </div>
         <!--end Content-->
     </div>
     <script>
     $(document).ready(function(){
         $('.sidebar ul li.active').removeClass("active");
         $('.sidebar ul li:nth-child(2)').addClass("active");
     });
     </script>
   </body>
</html>
