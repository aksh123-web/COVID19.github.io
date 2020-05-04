<link rel="stylesheet" type="text/css" href="css/style.php">
<?php include 'link/link.php';?>


<section>
	<div>
		<h3 class="text-uppercase text-center mt-3 Global_Case">covid-19 live update of the india</h3>
	</div>
	<div class="table-responsive update">
		<table class="table table-dark  table-striped text-center table-hover dataTable" >

			<caption>covid-19 live update of the india</caption>
			<thead>
				<tr>
					<th class="text-capitalize" >state</th>
					<th class="text-capitalize confi">confirmed</th>
					<th class="text-capitalize acti">active</th>
					<th class="text-capitalize deat">deaths</th>
					<th class="text-capitalize time">recovered</th>
					
				</tr>
	<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);
$statescount = count($coranalive['statewise']);

 


$i=1;
while($i < $statescount){
	?>
	<tr>
		<td><?php echo $coranalive['statewise'][$i]['state']  ?> </td>
		<td class="confi"><a class=" Global_Case"><?php echo $coranalive['statewise'][$i]['confirmed']; ?></a>(+<a class="count"><?php echo $coranalive['statewise'][$i]['deltaconfirmed']; ?></a>)</td>
		<td class=""><?php echo $coranalive['statewise'][$i]['active']  ?> </td>
		<td class="deat"><a class=" Global_Case"><?php echo $coranalive['statewise'][$i]['deaths']; ?></a>(+<a class="count"><?php echo $coranalive['statewise'][$i]['deltadeaths']; ?></a>)</td>
		<td class=" time"><a class=" Global_Case"><?php echo $coranalive['statewise'][$i]['recovered']; ?></a>(+<a class="count"><?php echo $coranalive['statewise'][$i]['deltarecovered']; ?></a>)</td>
		
		
	</tr>

  <!--echo $coranalive['statewise'][$i]['deltaconfirmed'] . "<br>"  ;
  	echo $coranalive['statewise'][$i]['deltadeaths'] . "<br>"  ;
  	echo $coranalive['statewise'][$i]['deltarecovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; -->


<?php
  $i++;
}


?>

			</thead>
		</table>
	</div>	
</section>

<script type="text/javascript" >
	$('.count').counterUp({
		delay:10,
		time:3000 

	})


</script>

