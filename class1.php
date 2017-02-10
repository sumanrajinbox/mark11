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
          <div class="panel-heading"> Array handling </div>
          <div class="panel-body">
            <form method="post" action="">
              <div class="row">
                <div class="col-lg-4 "> select item </div>
                <div class="col-lg-8 form-group" >
                  <select name="color" class="form-control" >
                    <?php 
           
$a=array("a"=>"red","b"=>"green","c"=>"blue");
if(isset($_POST["submit"] )&& !empty($_POST['color']))
	{
	$value=$_POST["color"];
	$result= $a[$value];
	}
foreach($a as $myarray=>$key)
	{ 
	if ($myarray==$_POST['color'])
	{
		$select ="selected";
		}
		else{ $select ="";}
	$option.='<option value="'.$myarray.'"'.$select.' >'.$myarray.'</option>';
	
 }echo $option;?>
	
	
                  </select>
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
        </div><?php if($_POST['color']){ ?>
        <div class="panel panel-success">
          <div class="panel-heading"> Result</div>
          <div class="panel-body"> <button class="btn" style="background:<?php echo $result; ?>;"><h3><?php echo $result; ?></h3></button> </div>
        </div><?php } ?>
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