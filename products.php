<?php

ini_set('max_execution_time', -1);

$servername = "localhost";
$username = "bhawana";
$password = "123456";
$dbname = "datas";

$connection = mysqli_connect($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.google.com/specimen/Itim?category=Handwriting" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
</head>
<body>
<div class ="container">
	<div class = "row mt-4">
		<h1 class="text-center"> Products </h1> </div>
		<?php 
		 $query = "SELECT * from products";
		 $query_run = mysqli_query($connection,$query);
		 $check_prodcuts = mysqli_num_rows($query_run) > 0;
		 if($check_prodcuts) {
		 		while($row = mysqli_fetch_array($query_run)) {
		 			?>			
								<div class = "col-md-4">
									<div class ="card"> 
										<div class="card-body">  
											<div> <?php if( $row['id'] == 1 )  
												 { ?>
												<img src="./images/milkchocolate.jpg" height="100px">
										 		<?php } ?>

										 		<?php if( $row['id'] == 2 )  
												 { ?>
												<img src="./images/whitechocolate.jpg" height="100px">
										 		<?php } ?>

										 		<?php if( $row['id'] == 3 )  
												 { ?>
												<img src="./images/darkchocolate.jpg" height="100px">
										 		<?php } ?>

										 		<?php if( $row['id'] == 4 )  
												 { ?>
												<img src="./images/sweetgermanchocolate.jpg" height="100px">
										 		<?php } ?>
												
												<?php if( $row['id'] == 5 )  
												 { ?>
												<img src="./images/bittersweetchocolate.jpg" height="100px">
										 		<?php } ?>

											</div>
											<div>
											<h2 class="card-title"><?php echo $row['name']; ?></h2>
											<p class="card-text">
												<p class="card-description" style="font-size: 19px;"><?php echo $row['description']; ?></p>
												<br>
												<p class="card-price">Rs.<?php echo $row['price']; ?></p>
												<br>
												<p class="card-quantity"><i>Quantity:</i> <?php echo $row['quantity']; ?> per Box</p>
												<br>
												<p class="card-weight"><i>Weight pp: </i><?php echo $row['weight']; ?>gm</p>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
	</body>
</html>

		 			<?php 
		 		}
		 }

		 else {
		 	echo " no products";
		 }

		?>
