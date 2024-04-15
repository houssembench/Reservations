<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reservations</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body >
<header>
<details>
  <summary>
    Azultunes
	
    <span><div class="menu-icon">&#9776;</div></span>
  </summary>
  <button class="button-header">
    <a href="index.php">Home</a>
  </button>
</details>
</header>
<div class="container2">

<div class="space2">
    <form id="update2" class="textg1" action="../Controller/updateres.php" method="post">

    <label >ID Reservation</label><br>
    <input type="text" name="idres" class="input1"><br><br><br>
    <input type="hidden" id="val" name="stat">
    <button type="submit"  class="buttonCon" onclick="setButtonValue('confirmed')">Confirm </button>
    <button type="submit"  class="buttonCan" onclick="setButtonValue('cancelled')">Cancel </button>
    </form>
    <form   id="form3" class="textg2">
    <label >ID Reservation Delete</label><br>
    <input type="text" name="idres"  class="input1"><br><br><br>
    <button type="submit"  class="buttonCan" >Delete Reservation</button>
    </form>
	
</div >

<div class="space1">
    
<section id="content">
		<main>
			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>My Reservations</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Date debut reservation</th>
								<th>Date fin reservation</th>
								<th>Date de reservation</th>
								<th>Status</th>
								<th>Titre</th>
								<th>Prix</th>
								<th>Categorie</th>
							</tr>
						</thead>
						<tbody id="tablehoss">
							
						</tbody>
					</table>
				</div>
			</div>
		</main>
		
	</section>

    
</div>    

   

    
    







    
    
</div>
        <script src="table.js"></script>
</body>
</html>