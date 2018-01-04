
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
<nav class="navbar navbar-default">
<div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
      data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php">WorkFlowHub</a>
    </div>
    <div id="navR">
        <ul class="nav navbar-nav navbar-right">            
        <li><a href="#!" id="nam2">Hi<span id="nam"> Isaac Thuo</span></a></li>
        <li><a href="#">New Messages: <span> 0</span> </a> </li>        
        <li><a href="#!" id="log">Logout  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>      
      </ul>
    </div>
</div>
 </nav>
<section id="main">  
  <div class="container">
    <div class="row">
      <div class="col-md-2">
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
                <span class="glyphicon glyphicon-flag"></span>  <a href="">How to Earn more</a>
             </ul> 
        </div>
    </div>
      <div class="col-md-10" id="pan"> 
        <!-- Website Overview -->
        <ol class="breadcrumb">
               <li id="od"> <h3>Available Jobs</h3> </li>
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
                <tr>
                    <td ><a href="">25408 <span class="badge">new</span></a></td>
                    <td >Copytyping</td>                   
                    <td>Article</td>                   
                    <td>12hrs 12min </td>                   
                    <td>Ksh. 3000</td>                   
                    <td>Expert</td>                   
                    <td>2</td>                   
                    <td>1 </td>                 
                </tr>
                
                <tr>
                    <td><a href="">25499 <span class="badge">new</span></a></td>
                    <td>Photoshop</td>                   
                    <td>Poster</td>                   
                    <td>2hrs 20min </td>                   
                    <td>Ksh. 1000</td>                   
                    <td>Beginner</td>                   
                    <td>2</td>                   
                    <td> </td>                 
                </tr>
                <tr>
                    <td><a href="">25409 <span class="badge">new</span></a></td>
                    <td>Data Entry</td>                   
                    <td>Picture to Excel</td>                   
                    <td>1 days 2hrs 59min </td>                   
                    <td>Ksh. 1500</td>                   
                    <td>Normal</td>                   
                    <td>2</td>                   
                    <td> </td>                 
                </tr>
                <tr>
                    <td>25769</td>
                    <td>Article</td>                   
                    <td>Web on farming</td>                   
                    <td> 2hrs 2min </td>                   
                    <td>Ksh. 2000</td>                   
                    <td>Normal</td>                   
                    <td>0</td>                   
                    <td>3</td>                 
                </tr>
                
              </table>
              </div>
          </div>
          </div>
    </div>
  </div>

</section>
<a class="fix-me button" data-target="#feed" data-toggle="modal" href="">Feedback <span class="glyphicon glyphicon-comment"></span></a>    

<!-- Modal -->
<!-- Add Pages -->
<div class="modal fade" id="feed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span> </button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label for="">Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label for="">
            <input type="checkbox"> Published
            </label>
        </div>
        <div class="form-group">
          <label for="">Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add some Tags...">
        </div>
        <div class="form-group">
          <label for="">Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div> 

<footer id="footer">
    <p>Copyright &copy; WorkFlowHub.com 2018</p>
</footer>

    <script src="assets/jquery-3.2.1.min.js"></script> 
    <script src="assets/script.js"></script>     
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
