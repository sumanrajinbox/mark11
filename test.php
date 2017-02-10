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
        <p class="theader">Code Time </p>
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
          <div class="panel-heading"> Fibonacci series </div>
          <div class="panel-body">
			  <pre>
$count = 0 ;
$f1 = 0;
$f2 = 1;
echo $f1."<br>";
echo $f2."<br>";
while ($count < 10 )
{
$f3 = $f2 + $f1 ;
echo $f3."<br> ";
$f1 = $f2 ;
$f2 = $f3 ;
$count = $count + 1;
}


			  </pre>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading"> Result</div>
          <div class="panel-body">
            
            <?php 

$count = 0 ;
$f1 = 0;
$f2 = 1;
echo $f1."<br>";
echo $f2."<br>";
while ($count < 10 )
{
$f3 = $f2 + $f1 ;
echo $f3."<br> ";
$f1 = $f2 ;
$f2 = $f3 ;
$count = $count + 1;
}

?>
         <?php 
			  
			  foreach(range(12,20) as $r)
			  {
				  echo $r .'<br>';
				  
				  
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
      <div class="col-lg-6">
		  
      <form method="post" action="">
      	<input name="lang[]" type="checkbox" value="English" />
<input name="lang[]" type="checkbox" value="Hindi" />
<input name="lang[]" type="checkbox" value="Urdu" />
	  <input type="submit" name="submit" value="submit" />
		  </form>
      	<script>
		  $().submit(function(){
		  var totalCheckboxSelected = $('input[name="lang[]"]:checked').val;
			  if(totalCheckboxSelected){
				  alert(totalCheckboxSelected+' check box checked');
			  }else{
				  alert('NO checkbox is selected');
			  }
		  });
		  
		  </script>
      	
      </div>
      <div class="col-lg-3"></div>
    </div>
  </footer>
</div>
</body>
</html>