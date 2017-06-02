<?php $title ='School Profile';?>
<?php include 'header.php';?>
<?php 
$id = $_SESSION['username'];
$select = mysql_query("select * from school where `email` = '".$id."'") or die(mysql_error());
$row = mysql_fetch_array($select);
if(isset($_REQUEST['update']))
{
if(isset($_REQUEST['filename']))
{
$target_path ="../profile/";
}
else
{
$target_path = $row['userphoto'];
}
$target_path = $target_path . basename( $_FILES['filename']['name']);
move_uploaded_file($_FILES['filename']['tmp_name'], $target_path);
$sql = mysql_query("update school set `userphoto`='".$target_path."',`Roll_No`='".$_REQUEST['rg_no']."',`Name`='".$_REQUEST['fname']."',`Address`='".$_REQUEST['Address']."',`Phone`='".$_REQUEST['phone']."',`Principal`='".$_REQUEST['Contact_person']."',`Seceretary`='".$_REQUEST['Contact_person_1']."',`email`='".$_REQUEST['email']."',`password`= '".$_REQUEST['password']."',`totalPlacement`= '".$_REQUEST['Total']."',`Teacher`= '".$_REQUEST['class_teacher']."',`Level`= '".$_REQUEST['class_level']."',`Communication`= '".$_REQUEST['Communication']."',`Message`= '".$_REQUEST['msg']."' where `email` ='".$id."'") or die(mysql_error());    
if($sql > 0)
{    
$msg = 'Successfully Update Student';
}
else
{
$msg = 'Not Update Student';    
}
}
if(isset($_REQUEST['delete']))
{
$delete = mysql_query("delete from school where `id` = '".$id."'") or die(mysql_error());
if($delete > 0)
{
echo "<script>window.location.href='dashboard.php';</script>";
 $msg = 'Successfully Delete Student';   
}
else
{        
$msg = 'Not Delete Student';   
}
}
?>
<aside class="right-side">
 <section class="content">
<div class="row">
     <div class="col-lg-12">
           <!--tab nav start-->
                        <section class="panel general">
                               <?php //include 'tebs.php';?>
                           <div class="panel-body">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">                                  
                    <div class="col-lg-12">
                          <section class="panel">
                             
                              <header class="panel-heading" style="text-align:center">
                                  School profile
                              </header>                              
                              <div class="panel-body">   
                                  <center><h2><?php echo $msg;?></h2></center>
                                  <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
                                      <div class="form-group">
                                          <div class="col-lg-offset-3 col-lg-10">
                                              <?php if(!isset($_REQUEST['edit'])){ ?>
                                              <button type="submit" name="edit" class="btn btn-primary">Edit</button>                             <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                              <?php }?>
                                          </div>
                                      </div>
<?php if(isset($_REQUEST['edit'])){ ?>
<div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Upload Teacher Image</label>
                                          <div class="col-lg-6">
 <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
    <input type="file" name="filename" class="form-control" />
                                             
                                          </div>
                                      </div>   <?php }?> 
                                      <div class="form-group">
                                           <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">National ID (Roll No)</label>
                                          <div class="col-lg-6">
                                              <?php if(isset($_REQUEST['edit'])){ ?>
                                                 <input type="text" class="form-control" id="inputPassword1" required name="rg_no" placeholder="National ID(Roll No)" value="<?php echo $row['Roll_No'];?>">
                                             
                                              <?php } else{ ?>
                                                 <input type="text"  disabled style="border:none" class="form-control" id="inputPassword1" required name="rg_no" placeholder="National ID(Roll No)" value="<?php echo $row['Roll_No'];?>">
                                            
                                              <?php }?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Name</label>
                                          <div class="col-lg-6">
                                              <?php if(isset($_REQUEST['edit'])){ ?>
                                              <input type="text" class="form-control" id="inputPassword1" value="<?php echo $row['Name'];?>" required name="fname" placeholder="Student First Name">
                                                <?php } else{ ?>
                                              <input type="text" class="form-control" disabled id="inputPassword1" value="<?php echo $row['Name'];?>" required name="fname" style="border:none" placeholder="Student First Name">
                                              <?php }?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Address</label>
                                          <div class="col-lg-6">
                                              <?php if(isset($_REQUEST['edit'])){ ?>
                                              <textarea type="text" name="Address" class="form-control" id="inputPassword1" placeholder="Address" required><?php echo $row['Address'];?></textarea>
                                                <?php } else{ ?>
                                              <input type="text" class="form-control" style="border:none" value="<?php echo $row['Address'];?>" id="inputPassword1" required name="Address" disabled placeholder="Address">
                                              <?php }?>                                             
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputEmail1" class="col-lg-3 col-sm-12 control-label">Phone</label>
                                          <div class="col-lg-6">
                                              <?php if(isset($_REQUEST['edit'])){ ?>
                                               <input type="text" class="form-control"  value="<?php echo $row['Phone'];?>" id="inputPassword1" required name="phone" placeholder="Phone">                                         
                                                <?php } else{ ?>
                                              <input type="text" class="form-control" style="border:none" value="<?php echo $row['Phone'];?>" id="inputPassword1" required name="phone" disabled placeholder="Phone">
                                              <?php }?>
                                                                                       
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Contact Person (Principal)</label>
                                          <div class="col-lg-6">
                                               <?php if(isset($_REQUEST['edit'])){ ?>
                                               <input type="text" class="form-control" value="<?php echo $row['Principal'];?>" id="inputPassword1" required name="Contact_person" placeholder="Contact Person (Principal)">
                                                                                 
                                                <?php } else{ ?>
                                             <input type="text" class="form-control" style="border:none" value="<?php echo $row['Principal'];?>" id="inputPassword1" required name="Contact_person" disabled placeholder="Contact Person (Principal)">
                                              <?php }?>                                                                         
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Contact Person(Seceretary)</label>
                                          <div class="col-lg-6">
                                              <?php if(isset($_REQUEST['edit'])){ ?>
                                              <input class="form-control" type="text" required id="inputPassword1" name="Contact_person_1" placeholder="Contact Person(Seceretary)" value="<?php echo $row['Seceretary'];?>">                                    <?php } else{ ?>
                                              <input class="form-control" type="text" required style="border:none" id="inputPassword1" name="Contact_person_1" placeholder="Contact Person(Seceretary)" disabled 
                                                     value="<?php echo $row['Seceretary'];?>">                       
                                              <?php }?>  
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Total Placement Available</label>
                                          <div class="col-lg-6">
                                               <?php if(isset($_REQUEST['edit'])){ ?>
                                                <input type="text" required readonly class="form-control" id="inputPassword1" name="Total" placeholder="Total Placement Available" value="<?php echo $row['totalPlacement'];?>">                                  <?php } else{ ?>
                                              <input class="form-control" type="text" readonly required style="border:none" id="inputPassword1" name="Total" placeholder="Total Placement Available" value="<?php echo $row['totalPlacement'];?>">                       <?php }?>
                                  
                                          </div>
                                      </div>
                                      
                                       <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Class Teacher</label>
                                          <div class="col-lg-6">
                                               <?php if(isset($_REQUEST['edit'])){ ?>
                                                <input type="text" required readonly class="form-control" id="inputPassword1" name="class_teacher" placeholder="Class Teacher" value="<?php echo $row['Teacher'];?>">                                  <?php } else{ ?>
                                              <input class="form-control" type="text" readonly required style="border:none" id="inputPassword1" name="class_teacher" placeholder="Class Teacher" value="<?php echo $row['Teacher'];?>">                       <?php }?>
                                  
                                          </div>
                                      </div>
                                       <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Class Level</label>
                                          <div class="col-lg-6">
                                               <?php if(isset($_REQUEST['edit'])){ ?>
                                                <input type="text" required readonly class="form-control" id="inputPassword1" name="class_level" placeholder="Class Level" value="<?php echo $row['Level'];?>">                                  <?php } else{ ?>
                                              <input class="form-control" type="text" readonly required style="border:none" id="inputPassword1" name="class_level" placeholder="Class Level" value="<?php echo $row['Level'];?>">                       <?php }?>
                                  
                                          </div>
                                      </div>
                                      
                                      
                                       <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Mode Of Communication</label>
                                          <div class="col-lg-6">
                                               <?php if(isset($_REQUEST['edit'])){ ?>
                                                <select class="form-control" type="text" required id="inputPassword1" name="Communication" placeholder="Mode Of Communication">
<option value="<?php echo $row['Communication'];?>"><?php echo $row['Communication'];?></option>
<option value="Car">Car</option>
<option value="Cycle">Cycle</option>
<option value=" Public transport(Train)"> Public transport(Train)</option>
<option value="Punblic tranport (Luas)">Punblic tranport (Luas)</option>
<option value="Public transport(Bus)">Public transport(Bus)</option>
<option value="MotorCycle">MotorCycle</option>
<option value="Walk">Walk</option>
<option value="None">None</option>
</select>                                  <?php } else{ ?>
                                              <input class="form-control" type="text" readonly required style="border:none" id="inputPassword1" name="Communication" placeholder="Mode Of Communication" value="<?php echo $row['Communication'];?>">                       <?php }?>
                                  
                                          </div>
                                      </div>
                                       <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Message</label>
                                          <div class="col-lg-6">
                                              <?php if(isset($_REQUEST['edit'])){ ?>
                                              <textarea type="text" name="msg" class="form-control" id="inputPassword1" placeholder="Message" required><?php echo $row['Message'];?></textarea>
                                                <?php } else{ ?>
                                              <input type="text" class="form-control" style="border:none" value="<?php echo $row['Message'];?>" id="inputPassword1" required name="msg" disabled placeholder="Address">
                                              <?php }?>                                             
                                          </div>
                                      </div>
                                      
                                       <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Contact Email</label>
                                          <div class="col-lg-6">
                                               <?php if(isset($_REQUEST['edit'])){ ?>
                                                <input type="email" required readonly class="form-control" id="inputPassword1" name="email" placeholder="Contact Email" value="<?php echo $row['email'];?>">                                  <?php } else{ ?>
                                              <input class="form-control" type="email" readonly required style="border:none" id="inputPassword1" name="email" placeholder="Contact E-mail" value="<?php echo $row['email'];?>">                       <?php }?>
                                  
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Reset Password</label>
                                          <div class="col-lg-6">
                                                <?php if(isset($_REQUEST['edit'])){ ?>
                                                        <input type="password" class="form-control"  value="<?php echo $row['password'];?>" id="password" name="password" required placeholder="Password">                         <?php } else{ ?>
                                              <input type="password" class="form-control"  value="<?php echo $row['password'];?>" id="inputEmail1" name="password" style="border:none" required placeholder="Password" disabled>                        <?php }?>
                 
                                          </div>
                                      </div>
<div class="form-group">
                                          <label for="inputPassword1" class="col-lg-3 col-sm-12 control-label">Confirm Password</label>
                                          <div class="col-lg-6">
                                                <?php if(isset($_REQUEST['edit'])){ ?>
                                                        <input type="password" class="form-control"  value="" id="confirm_password" name="confirm_password" required placeholder="Confirm Password">                         <?php } else{ ?>
                                              <input type="password" class="form-control"  value="<?php echo $row['password'];?>" id="inputEmail1" name="password" style="border:none" required placeholder="Password" disabled>                        <?php }?>
                 
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-3 col-lg-10">
                                              <?php if(isset($_REQUEST['edit'])){ ?>
                                              <button type="submit" name="update" class="btn btn-success">Save</button>
                                              <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                              <?php }?>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </section>
                 
                      </div>
                                    </div>
                               </div>
                            </div>
                            
                                 
                                     
                </section>
            </div>
        </div><!-- ./wrapper -->
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");
function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  }
else if(confirm_password.value.length <8)
{
confirm_password.setCustomValidity("Password must be at least 8 characters long.");
} 
else {
    confirm_password.setCustomValidity('');
  }

}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<?php include 'footer.php';?>