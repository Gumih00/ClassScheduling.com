<?php
if (isset($_GET['generated']) && $_GET['generated'] == "false") {
    unset($_GET['generated']);
    echo '<script>alert("Timetable not generated yet!!");</script>';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> </title>
  <style>
		 body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: #081b29;
  cursor: pointer;
}
 .login-box-body{
		background-color: #081b29;
    border-radius: 20px;
    padding: 20px;
    border: 3px solid #0ef; 
		width: 400px;
		height: 550px;
		margin: 50px;
		cursor: pointer;
		box-shadow: 0 0 25px #0ef;
    } 
 .container { 
    margin: 30px;
    padding: 40px; 
		
} 
</style>
<link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition login-page" style="background:  #081b29">
   
    <div class="login-box">
      <div class="login-logo">
      </div><!-- /.login-logo -->
      <div class="login-box-body" style="background:  #081b29">
	  <center>
      <br>
	  <img src = "RSULOGO.png" width = '45' height = '45' ><img src = "IITLOGO.jpg" width = '45' height = '45'>
		<br>
		<font color = "white"><h5><b>Romblon State University (Main Campus)</b><h5>
	<h5><b>College Of Computing Multimedia Arts and Digital Innovation at Romblon State University (Main Campus)</b> </h5>
        <h5><b>CLASS SCHEDULING SYSTEM</b></h5></center>
        <center><p class="login-box-msg">Sign in to start your session</p></font></center>
        
        <div align="center" STYLE="margin-top: 30px">
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="teacherLoginBtn" class="btn btn-info btn-lg">TEACHER LOGIN
    </button>
    <button data-scroll-reveal="enter from the bottom after 0.2s"
            id="adminLoginBtn" class="btn btn-success btn-lg">ADMIN LOGIN
    </button>
    </div>
    <div align="center">
    <form data-scroll-reveal="enter from the bottom after 0.2s" action="studentvalidation.php" method="post">
        <select id="select_semester" name="select_semester" class="list-group-item">
            <option selected disabled>Select Semester</option>
            <option value="3">BSIT (First Semester)</option>
            <option value="4">BSIT (Second Semester)</option>
            <option value="5">BBMA (First Semester)</option>
            <option value="6">BBMA (Second Semester)</option>
            <!-- <option value="7"></option>
            <option value="8"></option> -->
        </select>
    </form>
</div>


    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Modal Header</h2>
        </div>
        <div class="modal-body" id="LoginType">
            <!--Admin Login Form-->
            <div style="display:none" id="adminForm">
                <form action="adminFormvalidation.php" method="POST">
                    <div class="form-group">
                        <label for="adminname">Username</label>
                        <input type="text" class="form-control" id="adminname" name="UN" placeholder="Username ...">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="PASS"
                               placeholder="Password ...">
                    </div>
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="LOGIN" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
        <!--Faculty Login Form-->
        <div style="display:none" id="facultyForm">
            <form action="facultyformvalidation.php" method="POST" style="overflow: hidden">
                <div class="form-group">
                    <label for="facultyno">Faculty No.</label>
                    <input type="text" class="form-control" id="facultyno" name="FN" placeholder="Faculty No. ...">
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-default" name="LOGIN">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var teacherLoginBtn = document.getElementById("teacherLoginBtn");
    var adminLoginBtn = document.getElementById("adminLoginBtn");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("facultyForm");
    var adminForm = document.getElementById("adminForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    adminLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Admin Login";
        adminForm.style.display = "block";
        facultyForm.style.display = "none";

    }
    teacherLoginBtn.onclick = function () {
        modal.style.display = "block";
        heading.innerHTML = "Faculty Login";
        facultyForm.style.display = "block";
        adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        adminForm.style.display = "none";
        facultyForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
      
           
   
<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
