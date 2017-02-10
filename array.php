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
          <div class="panel-heading"> Search Aptron branch </div>
          <div class="panel-body">
            <form method="post" action="">
              <div class="row">
                <div class="col-lg-4 "> country </div>
                <div class="col-lg-8 form-group" >
                  <select  name="country" class="form-control" >
                    <?php 
					
$country=array("india"=>array("delhi"=>"Aptron"),"america"=>array("canada"=>"canada Aptron"));
					echo $country["india"]["delhi"];
					foreach($country as $allkey=>$allvalue)
					{?>
					<option value="<?php echo $allkey;?>"><?php echo $allkey;?></option>
					<?php 	}?>
                  </select>
                  
                   </div>
              </div>
              <div class="row">
                <div class="col-lg-4 "> state</div>
                <div class="col-lg-8 form-group" >
                  
                  <select  name="state" class="form-control" >
                    <?php 
					
//$country=array("india"=>array("delhi"=>"Aptron"),"america"=>array("canada"=>"canada Aptron"));
					echo $country["india"]["delhi"];
					foreach($country as $allkey=>$allvalue)
					{
						foreach($allvalue as $subarray=>$subname){
						
						?>
					<option value="<?php echo $subarray;?>"><?php echo $subarray;?></option>
					<?php 	}}?>
                  </select>
                   </div>
              </div>
              <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8  form-group">
                  <input type="submit" name="submit" value="submit" class="btn btn-success btn-sm form-control"/>
                   </div>
              </div>
            </form>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading"> Result</div>
          <div class="panel-body">
            <?php 
			if(isset($_POST["submit"])&& $_POST["submit"]=="submit")
			$cc=$_POST['country'];
			$ss=$_POST['state'];
				{
				$result= $country[$cc][$ss];	
				if(empty($result))
				{
					echo "No Branch is here";
					}
					else{
						
						echo $result;
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