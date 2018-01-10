 
<?php 
session_start();
include_once('php/connection.php');
include ('php/tasks.php');
if (!isset($_SESSION['name'])) {
  header('Location: login.php');
}else {
  
?> 

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
<php echo $row['subject']; ?>
  
<?php include 'inc/header.php'; ?>
<section id="main">  
  <div class="container">
    <div class="row">
      <div class="col-md-2 asidep">
        <div class="list-group">
          <a href="index.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Ready Tasks <span class="badge">112</span></a>
          <div class="dropdown">
                <button class="btn btn-default dropdown-toggle list-group-item" type="button" id="dropdownMenu1" data-toggle="dropdown"  aria-expanded="true">
                    <span class="glyphicon glyphicon-tasks"></span> My Tasks
                     <span class="caret"></span></button>              
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#!" id="pro">In Progress <span class="badge badge-change"> 1</span></a></li>
                              <li><a href="#!" id="com">Completed <span class="badge badge-change"> 124</span></a></li>
                              <li><a href="#!" id="can">Cancelled <span class="badge badge-change"> 0</span></a></li>
                            </ul>
                </div>
          <a href="#!" id="payHist" class="list-group-item"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Payment History</a>              
          <a href="#!" id="bon"class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Bonus <span class="badge"></span></a>
          <a href="#!" id="fine" class="list-group-item"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Fines <span class="badge"></span></a>
         <div class="dropdown">
          <button class="btn btn-default dropdown-toggle list-group-item glyphicon glyphicon-user"type="button" id="dropdownMenu1"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Profile
               <span class="caret"></span></button>              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#!" id="con">ContactInfo</a></li>
                        <li><a href="#!" id="pay">Payment Info</a></li>
                        <li><a href="#!" id="acc">Account Info</a></li>
                      </ul>
          </div>
          <a href="#!" id="st" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> My Statistics <span class="badge"></span></a>       
       </div>
       <div class="well">
             <ul class="list-group">
               <span class="glyphicon glyphicon-flag"></span> <a href="">System Update</a><br><br>
               <span class="glyphicon glyphicon-flag"></span><a href="">Specialization</a><br><br>
               <span class="glyphicon glyphicon-flag"></span> <a href="">Managing Your Acc</a><br><br>
               <span class="glyphicon glyphicon-flag"></span> <a href="">FAQ</a><br><br>
                <span class="glyphicon glyphicon-flag"></span>  <a href="">How to Earn more  </a>
             </ul> 
        </div>
    </div>
      <div class="col-md-10" id="pan"> 
        <!-- Website Overview -->
        <ol class="breadcrumb">
               <li id="od"> <h3>Available Jobs</h3><h3></h3> </li>
               <div id="d"> 
                  <li><em>Show First:</em>  </li>     
                <li> <a href="#">Request</a> </li>
                <li> <a href="#">Urgent</a></li>
                 </div>             
              </ol>       
          <!-- Latest Users -->
          <div class="panel panel-default" >
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Orders</h3>
              </div>
            <div class="panel-body">
                <div id="scrolTable">
              <table class="table table-striped table-hover">
                <tr>
                        <th >#</th>
                        <th >Task Info</th>                   
                        <th>Desc</th>                   
                        <th>Time left</th>                   
                        <th>Cost</th>                   
                        <th>Level</th>                   
                        <th>Bids</th>                   
                        <th>Requested</th> 
                </tr>
                <tr>
                    <td>
                      <ul class="list-group"><b>
                        <li>Task Id:<a href="task_info.php"> 25409 <span class="badge">new</span></a></li> 
                        <li>&nbsp;&nbsp;&nbsp;Subject: <small class="b">Graphic design Prof</small> </li>
                        <li>&nbsp;&nbsp;&nbsp;Type: <small class="b">Modeling</small> </li>
                      </b>
                      </ul>
                    </td>
                    <td>Photoshop</td>  

                    <td>Poster</td>                   
                    <td>5 days 2hrs 2min </td>                   
                    <td>Ksh. 1000</td>                   
                    <td>Beginner</td>                   
                    <td>2</td>                   
                    <td>45 </td>                 
                </tr>
                <?php while(){ ?>
                <tr> 
                <td>   <ul class="list-group"><b>
                        <li>Task Id:&nbsp;<a href="task_info.php"> <?php echo $row['o_id']; ?>&nbsp;&nbsp;<span class="badge">new</span></a></li> 
                        <li>&nbsp;&nbsp;&nbsp;Subject: <small class="b"><?php echo $row['subject']; ?></small> </li>
                        <li>&nbsp;&nbsp;&nbsp;Type: <small class="b"><?php echo $row['type']; ?></small> </li>
                      </b>
                      </ul>
                    </td>
                    <td ><?php echo $row['subject']; ?></td>                   
                    <td><?php echo $row['topic']; ?></td>                   
                    <td><?php echo $row['deadline']; ?></td>                   
                    <td>Ksh. <?php echo $row['charges']; ?></td>                   
                    <td><?php echo $row['level']; ?></td>                   
                    <td><?php echo $row['bid']; ?></td>                   
                    <td>1 </td>                 
                </tr>

               <?php } ?>
                
               
              </table>
              </div>
          </div>
          </div>
    </div>
  </div>

</section>
<a class="fix-me button" data-target="#feed" data-toggle="modal" href="">Feedback <span class="glyphicon glyphicon-comment"></span></a>    
<?php
 include 'inc/feed.php';
 include 'inc/footer.php';
  ?>
    <script src="assets/jquery-3.2.1.min.js"></script> 
    <script src="assets/script.js"></script>     
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<?php }?>