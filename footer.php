  <!--<aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="#" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>-->

    <section id="contact">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>-->
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:hello@webcoin.in">educationdept@nuim.co.in</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
<!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
   <div class = "modal-dialog">
<?php
if(isset($_REQUEST['login']))
{
$sql = mysql_query("select * from admin where `username` ='".$_REQUEST['username']."' and `password` ='".$_REQUEST['password']."'") or die(mysql_error());
$row = mysql_fetch_array($sql);
$name = $row['username'];
$pass = $row['password'];
if($name==$_REQUEST['username'] && $pass==$_REQUEST['password'])
{
$_SESSION['username']=$name;
echo "<script>window.location.href='admin/dashboard.php';</script>";
}
else
{
echo "<script>alert('Username and Password Invalid');</script>";
}
}
?>
<div class = "modal-content">
     <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            <h4 class = "modal-title" id = "myModalLabel">
               Admin Login
            </h4>
         </div>
    <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Forgot Password?</a></li>
            </ul>
        </div>
<div class="modal-body">
        <div id="myTabContent" class="tab-content">

        <div class="tab-pane fade active in" id="signin">
            <form  action="" method="post">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input name="username" required placeholder="Username" type="text" value=""  class="form-control"/>
                    </div>
                      <br>
                        <div class="clearfix"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input name="password" required placeholder="Password" type="password" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                            <input type="checkbox"/> Remember me
                        </label>
                      </div>
                    </div> <br>
                        <div class="clearfix"></div>
                  </div>
                <div class = "modal-footer">

                    <input id="btn_login" name="login" type="submit" class="btn btn-primary" value="Login" />
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
         </div>
               </form>
        </div>
        <div class="tab-pane fade" id="signup">
<?php
if(isset($_POST['forgot']))
{
    $email = mysql_real_escape_string($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        echo "<script>alert('Invalid email address please type a valid email!!');</script>";
    }
    else
    {
        $query = "SELECT * FROM admin where `email`='".$email."'";
        $result = mysql_query($query);
        $Results = mysql_fetch_array($result);
        if(mysql_num_rows($result) > 0)
        {
            $encrypt = md5(1290*3+$Results['id']);
            $message = "Your password reset link send to your e-mail address.";
            $to=$email;
            $subject="Forget Password";
            $from = 'hello@webcoin.in';
            $body='Hi, <br/> <br/>Your Membership ID is '.$Results['fullname'].' <br><br> Your Password is '.$Results['password'].' set password';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to,$subject,$body,$headers);
           echo "<script>alert('Please Check Your Email Your password sent');</script>";
        }
        else
        {
             echo "<script>alert('Account not found please signup now!!');</script>";
        }
    }
}
?>

            <form class="form-horizontal" action="#" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="email" class="form-control" type="email" placeholder="Enter Your Email Id" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="forgot" type="submit" class="btn btn-success">Forgot Password</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
       </div>
	   <!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class = "modal fade" id = "myModal1" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
   <div class ="modal-dialog">
<?php
if(isset($_REQUEST['login6']))
{
$sql = mysql_query("select * from user where `email` ='".$_REQUEST['username']."' and `password` ='".$_REQUEST['password']."'") or die(mysql_error());
$row = mysql_fetch_array($sql);
$name = $row['email'];
$pass = $row['password'];
if($name==$_REQUEST['username'] && $pass==$_REQUEST['password'])
{
$_SESSION['username']=$name;
echo "<script>window.location.href='student/dashboard.php';</script>";
}
else
{
echo "<script>alert('Username and Password Invalid');</script>";
}
}
?>
<?php
if(isset($_POST['forgot1']))
{
    $email = mysql_real_escape_string($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        echo "<script>alert('Invalid email address please type a valid email!!');</script>";
    }
    else
    {
        $query = "SELECT * FROM user where `email`='".$email."'";
        $result = mysql_query($query);
        $Results = mysql_fetch_array($result);
        if(mysql_num_rows($result) > 0)
        {
            $encrypt = md5(1290*3+$Results['id']);
            $message = "Your password reset link send to your e-mail address.";
            $to=$email;
            $subject="Forget Password";
            $from = 'hello@webcoin.in';
            $body='Hi, <br/> <br/>Your Membership ID is '.$Results['fullname'].' <br><br> Your Password is '.$Results['password'].' set password';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to,$subject,$body,$headers);
           echo "<script>alert('Please Check Your Email Your password sent');</script>";
        }
        else
        {
             echo "<script>alert('Account not found please signup now!!');</script>";
        }
    }
}
?>
<div class = "modal-content">
     <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            <h4 class = "modal-title" id = "myModalLabel">
               Admin Login
            </h4>
         </div>
    <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin3" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup3" data-toggle="tab">Forgot Password?</a></li>
            </ul>
        </div>
<div class="modal-body">
        <div id="myTabContent" class="tab-content">

        <div class="tab-pane fade active in" id="signin3">
            <form  action="" method="post">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input name="username" required placeholder="Username" type="text" value=""  class="form-control"/>
                    </div>
                      <br>
                        <div class="clearfix"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input name="password" required placeholder="Password" type="password" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                            <input type="checkbox"/> Remember me
                        </label>
                      </div>
                    </div> <br>
                        <div class="clearfix"></div>
                  </div>
                <div class = "modal-footer">

                    <input id="btn_login" name="login6" type="submit" class="btn btn-primary" value="Login" />
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
         </div>
               </form>
        </div>
        <div class="tab-pane fade" id="signup3">
            <form class="form-horizontal" action="" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="email" class="form-control" type="email" placeholder="Enter Your Email Id" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="forgot1" type="submit" class="btn btn-success">Forgot Password</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
       </div>
	   <!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class = "modal fade" id = "myModal2" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
   <div class = "modal-dialog">
<?php
if(isset($_REQUEST['login1']))
{
$sql = mysql_query("select * from tutor where  `email` = '".$_REQUEST['username']."' and `password` = '".$_REQUEST['password']."'") or die(mysql_error());
$row = mysql_fetch_array($sql);
$name = $row['email'];
$pass = $row['password'];
if($name==$_REQUEST['username'] && $pass==$_REQUEST['password'])
{
$_SESSION['username']=$name;
echo "<script>window.location.href='tutor/dashboard.php';</script>";
}
else
{
echo "<script>alert('Username and Password Invalid');</script>";
}
}
?>
<?php
if(isset($_POST['forgot2']))
{
    $email = mysql_real_escape_string($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        echo "<script>alert('Invalid email address please type a valid email!!');</script>";
    }
    else
    {
        $query = "SELECT * FROM tutor where `email`='".$email."'";
        $result = mysql_query($query);
        $Results = mysql_fetch_array($result);
        if(mysql_num_rows($result) > 0)
        {
            $encrypt = md5(1290*3+$Results['id']);
            $message = "Your password reset link send to your e-mail address.";
            $to=$email;
            $subject="Forget Password";
            $from = 'hello@webcoin.in';
            $body='Hi, <br/> <br/>Your Membership ID is '.$Results['fullname'].' <br><br> Your Password is '.$Results['password'].' set password';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to,$subject,$body,$headers);
           echo "<script>alert('Please Check Your Email Your password sent');</script>";
        }
        else
        {
             echo "<script>alert('Account not found please signup now!!');</script>";
        }
    }
}
?>
<div class = "modal-content">
     <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            <h4 class = "modal-title" id = "myModalLabel">
               Admin Login
            </h4>
         </div>
    <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin2" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup2" data-toggle="tab">Forgot Password?</a></li>
            </ul>
        </div>
<div class="modal-body">
        <div id="myTabContent" class="tab-content">

        <div class="tab-pane fade active in" id="signin2">
            <form  action="" method="post">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input name="username" required placeholder="Username" type="text" value=""  class="form-control"/>
                    </div>
                      <br>
                        <div class="clearfix"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input name="password" required placeholder="Password" type="password" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                            <input type="checkbox"/> Remember me
                        </label>
                      </div>
                    </div> <br>
                        <div class="clearfix"></div>
                  </div>
                <div class = "modal-footer">

                    <input id="btn_login" name="login1" type="submit" class="btn btn-primary" value="Login" />
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
         </div>
               </form>
        </div>
        <div class="tab-pane fade" id="signup2">
            <form class="form-horizontal" action="" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="email" class="form-control" type="email" placeholder="Enter Your Email Id" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="forgot2" type="submit" class="btn btn-success">Forgot Password</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
       </div>
	   <!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class = "modal-dialog">
<?php
if(isset($_REQUEST['login2']))
{
$sql = mysql_query("select * from school where `email` = '".$_REQUEST['username']."' and `password` = '".$_REQUEST['password']."'") or die(mysql_error());
$row = mysql_fetch_array($sql);
$name = $row['email'];
$pass = $row['password'];
if($name==$_REQUEST['username'] && $pass==$_REQUEST['password'])
{
$_SESSION['username']=$name;
echo "<script>window.location.href='school/dashboard.php';</script>";
}
else
{
echo "<script>alert('Username and Password Invalid');</script>";
}
}
?>
<?php
if(isset($_POST['forgot3']))
{
    $email = mysql_real_escape_string($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        echo "<script>alert('Invalid email address please type a valid email!!');</script>";
    }
    else
    {
        $query = "SELECT * FROM school where `email`='".$email."'";
        $result = mysql_query($query);
        $Results = mysql_fetch_array($result);
        if(mysql_num_rows($result) > 0)
        {
            $encrypt = md5(1290*3+$Results['id']);
            $message = "Your password reset link send to your e-mail address.";
            $to=$email;
            $subject="Forget Password";
            $from = 'hello@webcoin.in';
            $body='Hi, <br/> <br/>Your Membership ID is '.$Results['fullname'].' <br><br> Your Password is '.$Results['password'].' set password';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to,$subject,$body,$headers);
           echo "<script>alert('Please Check Your Email Your password sent');</script>";
        }
        else
        {
             echo "<script>alert('Account not found please signup now!!');</script>";
        }
    }
}
?>
<div class = "modal-content">
     <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            <h4 class = "modal-title" id = "myModalLabel">
               Admin Login
            </h4>
         </div>
    <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin1" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup1" data-toggle="tab">Forgot Password?</a></li>
            </ul>
        </div>
<div class="modal-body">
        <div id="myTabContent" class="tab-content">

        <div class="tab-pane fade active in" id="signin1">
            <form  action="" method="post">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input name="username" required placeholder="Username" type="text" value=""  class="form-control"/>
                    </div>
                      <br>
                        <div class="clearfix"></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input name="password" required placeholder="Password" type="password" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                            <input type="checkbox"/> Remember me
                        </label>
                      </div>
                    </div> <br>
                        <div class="clearfix"></div>
                  </div>
                <div class = "modal-footer">

                    <input id="btn_login" name="login2" type="submit" class="btn btn-primary" value="Login" />
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
         </div>
               </form>
        </div>
        <div class="tab-pane fade" id="signup1">
            <form class="form-horizontal" action="" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="email" class="form-control" type="email" placeholder="Enter Your Email Id" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="forgot3" type="submit" class="btn btn-success">Forgot Password</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
       </div>
	   <!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
