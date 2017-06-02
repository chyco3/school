<?php $title ='Student Allocate';?>
<?php include 'header.php';?>
<aside class="right-side">
 <section class="content">
<div class="row">
     <div class="col-lg-12">
           <!--tab nav start-->
          <section class="panel general">
                           <?php include 'tebs.php';?>
                            <div class="panel-body">                          
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="panel">
                                                    <div class="panel-body table-responsive">
                                                    <table class="table table-hover results" id="table" data-toggle="table" data-search="true" data-filter-control="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                          <thead>
                                                            <tr> 
                                                                <th data-field="Placement" control="select" data-sortable="true">Placement</th>
                                                                <th data-field="Roll No(National ID)" control="select" data-sortable="true">National ID(Roll No)</th>
                                                                <th data-field="Student Name" control="select" data-sortable="true">Student Name</th>
                                                                <th data-field="Last Name" control="select" data-sortable="true">Last Name</th>
                                                                <th data-field="Course" control="select" data-sortable="true">Course</th>
                                                                <th data-field="Student Address" control="select" data-sortable="true">Student Email Address</th>
                                                                <th data-field="Date Of Visit" control="select" data-sortable="true">Date Of Visit</th>
                                                                <th  data-field="SuperVisor" control="select" data-sortable="true">SuperVisor</th>
                                                                <th data-field="SuperVisor Contact" control="select" data-sortable="true">SuperVisor Contact</th>
                                                                <th data-field="Other SuperVisor" control="select" data-sortable="true">Other SuperVisor</th>
                                                               <th data-field="Other SuperVisor Contact " control="select" data-sortable="true">Other SuperVisor Contact</th>
                                                            </tr>
                                                             
                                                            </thead>
                                                          <tbody>
                                                              <?php 
           $sql = mysql_query("select * from school where `email`='".$_SESSION['username']."'") or die(mysql_error());
           $rows = mysql_fetch_array($sql);
           
           $sql1 = mysql_query("select * from student_allocate where `roll_no`='".$rows['Roll_No']."'") or die(mysql_error());
           while($row = mysql_fetch_array($sql1))
           {
             $s1 = $row['supervisor_1'];
             $s2 = $row['supervisor_2'];
            $sql2 = mysql_query("select * from tutor where `fname`='".$s1."'") or die(mysql_error());
           $row2 = mysql_fetch_array($sql2);
              
                $sql3 = mysql_query("select * from tutor where `fname`='".$s2."'") or die(mysql_error());
           $row3 = mysql_fetch_array($sql3);
              
            ?>
                                                            <tr>
                                                                <td><?php echo $row['placement'];?></td>
                                                                <td><?php echo $row['roll_no'];?></td>
                                                                <td><?php echo $row['fname'];?></td>
                                                                <td><?php echo $row['lname'];?></td>
                                                                <td><?php echo $row['course'];?></td>
                                                                <td><?php echo $row['stu_email'];?></td>
                                                                <td><?php echo $rows['email'];?></td>
                                                                <td><?php echo $row['supervisor_1'];?></td>
                                                                <td><?php echo $row2['phone'];?></td>
                                                                <td><?php echo $row['supervisor_2'];?></td>
                                                                <td><?php echo $row3['phone'];?></td>
                                                               
                                                            </tr>   
                                                            <?php }?></tbody>
                                                           
                                                        </table>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
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