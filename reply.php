<?php $title ='Reply';?>
<?php include 'header.php';?>
<?php if(isset($_REQUEST['send']))
{ 
$msg = $_REQUEST['myField'];
$id1 =  $_REQUEST['id'];
$sql1 = mysql_query("insert into msg(`msg`,`school-Id`,`admin_id`,`status`) values('".$msg."','".$row['email']."','".$id1."','2')") or die(mysql_error()); 
if($sql1 > 0)
{
echo "<script>window.location.href='messages.php';</script>";
}  
else
{
$ms = "<div class='alert alert-danger' id='me1'>Message could not be sent...</div>";
}
}    
?>
<aside class="right-side">
 <section class="content">
<div class="row">
     <div class="col-lg-12">
           <!--tab nav start-->
          <section class="panel general">
                          <div class="panel-body">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="panel">
                                                    <div class="panel-body table-responsive">
                                                        <div class="box-tools m-b-15" style="padding:bottom:5px;">
                                                       </div>
                                                       <form role="form" class="form-horizontal" method="post" action="">
                                             
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea rows="10" cols="30" class="form-control" id="" name="myField"></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                     <button class="btn btn-success" name="send" type="submit">Send</button>
                                                  </div>
                                              </div>
                                          </form><?php echo $ms;?>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                            </div>
                                        </div>
                    <div class="col-lg-12">                                             
                      </div>
                        </div>
                                
                                </div>
                            </div>
                        </section>
                        <!--tab nav start-->
                        </div>
                    </div>
                </section>
            </div>
        </div><!-- ./wrapper -->
<?php include 'footer.php';?>