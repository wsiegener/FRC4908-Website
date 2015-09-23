<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>
<!-- for use with OUSTIDE the root yet only 1 folder in -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Duxbury High School Robotics Team">
    <meta name="author" content="@Fredghostkyle for DHS Robitics Team">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Duxbury Robotics</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/glyphicons.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<div id=""></div>
  <body>
        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../">Duxbury Robotics</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="../team/">Our Team</a></li>
                <li><a href="../history/">History</a></li>
                <li class="dropdown">
                  <a href="../media/">Media <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../media/#Gallery">Gallery</a></li>
                        <li><a href="../media/#Videos">Videos</a></li>
                        <li><a href="../media/#archives">Archives</a></li>
                    </ul>
                </li>
                <li><a href="../sponsors/"><span class="glyphicon glyphicon-heart-empty"></span> Sponsors</a></li>
<!--                <li><a href="../blog/">Blog</a></li>-->
              </ul>
               <ul class="nav navbar-nav navbar-right">
                <li><a href="http://twitter.com/DuxburyRobotics"><span class="glyphicons social-twitter"></span></a></li>
                <li><a href="http://fb.com/DuxburyRobotics"><span class="glyphicons social-facebook"></span></a></li>
                <li><a href="http://instagram.com/DuxburyRobotics"><span class="glyphicons social-instagram"></span></a></li>
                <li><a href="../contact/"><span class="glyphicons social-e-mail"></span></a></li>
               </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="container">
<h1>Resource Register</h1>
<br>
<br>
<form action="addR.php" method="post" role="form">
<fieldset>
<p>
<label for="phpro_username">Username</label>
<input type="text" id="phpro_username" name="phpro_username" value="" class="form-control">
</p>
<p>
<label for="phpro_password">Password (Case sensitive)</label>
<input type="password" id="phpro_password" name="phpro_password" value="" class="form-control">
<p class="help-block">Passwords <strong>can not</strong> be changed after setting them. </p>
</p>
<p>
<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
<input type="submit" value="&rarr; Register" class="btn btn-info">
</p>
</fieldset>
</form>
</center>          
                   
                   
    </div>  
      
    <div class="container"> 
     <hr>
      <footer>
        <p class="pull-right">FIRST Team 4908 | <a href="../admin/">Admin</a> | <a href="../admin/resource/">Resources</a></p>
        <p>Copyright © Duxbury Robotics</p>
      </footer>

    </div><!-- /.container -->
      
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
      
    </body>
  </html>