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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid" ng-app="">
  <header>
    <div class="row">
      <div class="col-lg-3"><img src="img/programmer.png"  width="170" height="170"/></div>
      <div class="col-lg-6">
        <p class="theader">codetime{{xman}}</p>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </header>
  <?php include("menu.php"); ?>
  <section>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="panel panel-success">
          <div class="panel-heading"> Dynamic combox </div>
          <div class="panel-body">
            <form method="post" action="">
              <div class="row">
                <div class="col-lg-4 "> select item </div>
                <div class="col-lg-8 form-group" >
                  <select  name="course[]"  multiple class="form-control" ng-model="raj">
                    <option value="php">PHP</option>
                    <option value="java script">Java script</option>
                    <option value="html">HTML</option>
                    <option value="css">css</option>
                    <option value="c++">C++</option>
                    <option value="Python">Pyton</option>
                    <option value="Angular">Angular</option>
                    <option value="jquery">Jquery</option>
                  </select>
                  <input type="text" class="form-control" name="fname" ng-model="xman" placeholder="Test Angular data "/>
                  <span></span> </div>
              </div>
              <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8  form-group">
                  <input type="submit" name="submit" value="submit" class="btn btn-success btn-sm form-control"/>
                  {{raj}} </div>
              </div>
            </form>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading"> Result</div>
          <div class="panel-body">
            <?php 
			if(isset($_POST["submit"])&& $_POST["submit"]=="submit")
				{
					if(isset($_POST["course"]))
					{
						
				$xyz=$_POST["course"];
				echo '<p>Your are selected  <span class="badge">'.count($xyz).'</span> skill</p><br>';
				foreach ($xyz as $sk)
				{
				echo '<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>'.$sk.'</strong> </div>';		
				}
				
				}
				else{
					echo '<img src="img/error.png" width="200" height="200"/>Please select course skill';
					}
				}
			?>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
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