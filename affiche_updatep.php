<?php include 'updatep.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body >
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
            <form action="updatep.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">update</h4><hr><br>
		   <?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
           
           <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>

           <div class="form-group">
		     <label for="id_carte">Entrer id carte </label>
		     <input type="number" 
		           class="form-control" 
		           id="id_carte" 
		           name="id_carte" 
		           value="<?=$row['id_carte'] ?>" 
		           >
		 </div>
           <div class="form-group">
		     <label for="date_creation">Entrer date creation</label>
		     <input type="date" 
		           class="form-control" 
		           id="date_creation" 
		           name="date_creation" 
		           value="<?=$row['date_creation'] ?>">
		   </div>
           <div class="form-group">
		     <label for="date_limite">Entrer date limite</label>
		     <input type="date" 
		           class="form-control" 
		           id="date_limite" 
		           name="date_limite" 
		           value="<?=$row['date_limite'] ?>">
		   </div>
           <div class="form-group">
		     <label for="point_fidelitee">Entrer point fidelitee</label>
		     <input type="number" 
		           class="form-control" 
		           id="point_fidelitee" 
		           name="point_fidelitee" 
		           value="<?=$row['point_fidelitee'] ?>">
		   </div>
           <div class="form-group">
		     <label for="remises">Entrer remises</label>
		     <input type="number" 
		           class="form-control" 
		           id="remises" 
		           name="remises" 
		           value="<?=$row['remises'] ?>">
		   </div>
           

           <input type="number" 
		          name="id_carte"
		          value="<?=$row['id_carte']?>"
		          hidden >

           <button type="submit" 
		          class="btn btn-primary"
		          name="updatep">update</button>
		    <a href="affichep.php" class="link-primary">liste des carte</a>
        </form>
    </div>

 </body>
</html>