<?php 

//include("include/config.php"); 

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="css/style.css">
<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid" ng-app="">
  <header>
    <div class="row">
      <div class="col-lg-3"><img src="img/programmer.png"  width="170" height="170"/></div>
      <div class="col-lg-6">
        <p class="theader">codetime</p>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </header>
  <?php include("menu.php"); ?>
  <section>
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <div class="panel panel-success">
          <div class="panel-heading"> Calculator </div>
          <div class="panel-body">
            <form method="post" action="">
              <div class="row">
                <div class="col-lg-12 form-group" ng-app="" ng-init="points=[0,1,2,3,4,5,6,7,8,9]" >
                  <textarea class="form-control">{{mydata}}</textarea>
                </div>
              </div>
              <div class="row space">
                <div class="col-lg-3">
                
                  <input type="button" class="btn btn-default btn-lg" ng-click="mydata=1"  value="1"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" ng-click="mydata=2" name="2" value="2"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="3" value="3"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-danger btn-lg" name="minus" value="-"/>
                </div>
              </div>
              <div class="row space">
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="4" value="4"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="5" value="5"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="6" value="6"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-primary btn-lg" name="plush" value="+"/>
                </div>
              </div>
              <div class="row space">
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="7" value="7"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="8" value="8"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="9" value="9"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-warning btn-lg" name="x" value="x"/>
                </div>
              </div>
              <div class="row space">
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="0" value="0"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="." value="."/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-default btn-lg" name="00" value="00"/>
                </div>
                <div class="col-lg-3">
                  <input type="button" class="btn btn-success btn-lg" name="equal" value="="/>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4"></div>
    </div>
  </section>
  <footer>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6"></div>
      <div class="col-lg-3"></div>
    </div>
  </footer>
</div>
</body>
</html>