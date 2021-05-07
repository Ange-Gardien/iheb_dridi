<?php include "readp.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>affiche</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#"><h4>point fidelite</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="compte.php"><h4>compte</h4></a>
      
    </div>
  </div>
</nav>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Liste Des cartes</h4><br>
			
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped" id="myTable">
			  <thead>
			    <tr>
			       
			      <th scope="col" onclick='sortTable(0)'>id_carte</th>
			      <th scope="col" onclick='sortTable(1)'>date_creation</th>
			      <th scope="col" onclick='sortTable(2)'>date_limite</th>
				  <th scope="col" onclick='sortTable(3)'>point_fidelitee</th>
				  <th scope="col" onclick='sortTable(4)'>remises</th>
				  
			    </tr>
			  </thead>
			  <tbody>
              <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			     
			      <td><?php echo $rows['id_carte']; ?></td>
			      <td><?php echo $rows['date_creation']; ?></td>
				  <td><?php echo $rows['date_limite']; ?></td>
				  <td><?php echo $rows['point_fidelitee']; ?></td>
				  <td><?php echo $rows['remises']; ?></td>
				  

			      <td><a href="affiche_updatep.php?id_carte=<?=$rows['id_carte']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="deletep.php?id_carte=<?=$rows['id_carte']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php }?>
			<div class="link-left">
			<td><a href="recherchep.php?id=<?=$rows['id']?>" class="btn btn-info">recherche</a>
				<button onclick="downloadPDFWithBrowserPrint()" class="btn btn-success" >Imprimer ou sauvegarder en PDF</button>
				<a href="point_fidelite.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
	<script>      
      function downloadPDFWithBrowserPrint() {
  window.print();
}
document.querySelector('#browserPrint').addEventListener('click', downloadPDFWithBrowserPrint);
    </script>
	<script>
		function sortTable(n) {
			var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
			table = document.getElementById("myTable");
			switching = true;
			//Set the sorting direction to ascending:
			dir = "asc";
			/*Make a loop that will continue until
			no switching has been done:*/
			while (switching) {
				//start by saying: no switching is done:
				switching = false;
				rows = table.rows;
				/*Loop through all table rows (except the
				first, which contains table headers):*/
				for (i = 1; i < (rows.length - 1); i++) {
					//start by saying there should be no switching:
					shouldSwitch = false;
					/*Get the two elements you want to compare,
					one from current row and one from the next:*/
					x = rows[i].getElementsByTagName("TD")[n];
					y = rows[i + 1].getElementsByTagName("TD")[n];
					/*check if the two rows should switch place,
					based on the direction, asc or desc:*/
					if (dir == "asc") {
						if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
							//if so, mark as a switch and break the loop:
							shouldSwitch = true;
							break;
						}
					} else if (dir == "desc") {
						if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
							//if so, mark as a switch and break the loop:
							shouldSwitch = true;
							break;
						}
					}
				}
				if (shouldSwitch) {
					/*If a switch has been marked, make the switch
					and mark that a switch has been done:*/
					rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
					switching = true;
					//Each time a switch is done, increase this count by 1:
					switchcount++;
				} else {
					/*If no switching has been done AND the direction is "asc",
					set the direction to "desc" and run the while loop again.*/
					if (switchcount == 0 && dir == "asc") {
						dir = "desc";
						switching = true;
					}
				}
			}
		}
	</script>
</body>
</html>