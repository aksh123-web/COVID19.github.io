<link rel="stylesheet" type="text/css" href="css/style.php">
<?php include 'link/link.php';?>




<section>
	<div class="main_style">
         <div class="col-12 text-center ">
                <h1 class="m-4">Covid-19 Update</h1s> 
        </div>
    </div>
    <script async="async" data-cfasync="false" src="//pl15435772.passtechusa.com/e316d3a52189987de45bc85e19783695/invoke.js"></script>
    <div id="container-e316d3a52189987de45bc85e19783695"></div>
    <div class="Global_Case">
        <div class="col-12 mt-4 text-center">
                <h2>India Case</h2>
 <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count(['statewise']);

 


$i=0;
while($i < $statescount){
	?>
	<div>
		<p class="time">Last updated : <?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></p>
	</div>
  <!-- echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;-->
   <!-- echo $coranalive['statewise'][$i]['active'] . "<br>"  ;-->
    <!-- echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;-->
      <!-- echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;-->
<?php
  $i++;
}
?>
      
        </div>
    </div>
       <div class="row data_style mr-5 ml-5 ">

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card_style text-center m-3 card-body  ">
                	<h3 class="a_style ">Confirmed</h3>
                  <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count(['statewise']);

 


$i=0;
while($i < $statescount){
	?>
	<div>
		<h4 class="confi"><?php echo $coranalive['statewise'][$i]['confirmed'] ?></h4>
		<h5 class="confi">(+<a class="count"><?php echo $coranalive['statewise'][$i]['deltaconfirmed']; ?></a>)</h5>
	</div>
  <!-- echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;-->
   <!-- echo $coranalive['statewise'][$i]['deltaconfirmed'] . "<br>"  ;-->
    <!-- echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;-->
      <!-- echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;-->
<?php
  $i++;
}
?>
                    
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card_style text-center m-3 card-body">
                	<h3 class="a_style ">Active</h3>
                                       <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count(['statewise']);

 


$i=0;
while($i < $statescount){
	?>
	<div>
		<h4 class="acti"><?php echo $coranalive['statewise'][$i]['active'] ?></h4>
		<h5 class="acti  ">(+<a class="count">0</a>)</h5>
		
	</div>
  <!-- echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;-->
   <!-- echo $coranalive['statewise'][$i]['deltaconfirmed'] . "<br>"  ;-->
    <!-- echo $coranalive['statewise'][$i]['active'] . "<br>"  ;-->
      <!-- echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;-->
<?php
  $i++;
}
?>
   
                    
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card_style text-center m-3 card-body ">
                	  <h3 class="a_style">Deaths</h3>
                                       <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count(['statewise']);

 


$i=0;
while($i < $statescount){
	?>
	<div>
		<h4 class="deat"><?php echo $coranalive['statewise'][$i]['deaths'] ?></h4>
		<h5 class="deat">(+<a class="count"><?php echo $coranalive['statewise'][$i]['deltadeaths']; ?></a>)</h5>
	</div>
  <!-- echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;-->
   <!-- echo $coranalive['statewise'][$i]['deltadeaths'] . "<br>"  ;-->
    <!-- echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;-->
      <!-- echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;-->
<?php
  $i++;
}
?>
   
                  
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card_style text-center m-3 card-body">
                	 <h3 class="a_style">Recovered</h3>
                                       <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count(['statewise']);

 


$i=0;
while($i < $statescount){
	?>
	<div>
		<h4 class="time"><?php echo $coranalive['statewise'][$i]['recovered'] ?></h4>
		<h5 class="time">(+<a class="count"><?php echo $coranalive['statewise'][$i]['deltarecovered']; ?></a>)</h5>
	</div>
  <!-- echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;-->
   <!-- echo $coranalive['statewise'][$i]['deltarecovered'] . "<br>"  ;-->
    <!-- echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;-->
      <!-- echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;-->
<?php
  $i++;
}
?>
   
                   
                </div>
            </div>

        </div>
	




</section>