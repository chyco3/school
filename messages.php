<?php $title ='Message';?>
<?php include 'header.php';?>
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
                                                        <table class="table table-hover results" id="table" data-toggle="table" data-search="true" data-filter-control="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                            <tr>
                                                                <th  data-field="Name" control="select" data-sortable="true">Name</th>
                                                                <th  data-field="First Name" control="select" data-sortable="true">Message</th>
<th  data-field="Reply" control="select" data-sortable="true">Reply</th>
                                                             </tr>
                                                            </thead>
                                                            <tbody>                                                            
                                                            <?php   
                               $sql1 = mysql_query("select * from msg where `school-Id`='".$row['email']."'") or die(mysql_error()); 
                               //$row1 = mysql_fetch_array($sql1);
                               while($row1 = mysql_fetch_array($sql1))
                                  {  
                                   ?>
                                                            <tr>
                                                                <td><?php echo $row1['admin_id'];?></td>
                                                                <td><?php echo $row1['msg'];?></td>
                                                                 <td><a href="reply.php?id=<?php echo $row1['admin_id'];?>">Reply</a></td>                                                         
                                                            </tr>  
                                                              <?php 
                                                            } 
                                                            ?>
                                                            </tbody>
                                                        </table>
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