    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">  
    <title>Work Online </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
  </head>
  <body>
<?php include 'inc/header.php'; ?>   
    <form class="form-horizontal" method='POST' action='php/log.php'>
                <fieldset>
                <!-- Form Name -->
                <legend>Login</legend>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label">Username</label>  
                  <div class="col-md-4">
                  <input id="" name="name" type="text" placeholder="Enter Your Username" class="form-control input-md">
                  </div>
                </div>
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label">Password</label>
                  <div class="col-md-4">
                    <input id="" name="password" type="password" class="form-control input-md">
                  </div>
                </div>  
                
                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for=""></label>
                  <div class="col-md-8">
                    <button id="can" name="" class="btn btn-default">Cancel</button>
                    <button name="submit" class="btn btn-warning">Login</button>
                  </div>
                </div>
                </fieldset>
                </form>
<a class="fix-me button" data-target="#feed" data-toggle="modal" href="">Feedback <span class="glyphicon glyphicon-comment"></span></a>    
<?php include 'inc/feed.php'; ?>
<?php include 'inc/footer.php'; ?>
    <script src="assets/jquery-3.2.1.min.js"></script> 
    <script src="assets/script.js"></script>     
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

  