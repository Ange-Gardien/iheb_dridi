<!DOCTYPE html>
<html>
<head>
	<title>ajouter compte</title>
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
      <a class="nav-item nav-link active" href="#"><h4>compte</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="point_fidelite.php"><h4>point fidelite</h4></a>
      
    </div>
  </div>
</nav>

    <div class="container">
            <form action="createc.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Ajouter compte</h4><hr><br>
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
		     <label for="id">Entrer ID </label>
		     <input type="number" 
		           class="form-control" 
		           id="id" 
		           name="id" 
		           value="<?php if(isset($_GET['id']))
		                           echo($_GET['id']); ?>" 
		           placeholder="Entrer ID">
		 </div>
           <div class="form-group">
		     <label for="password">Entrer mot de passe</label>
		     <input type="password" 
		           class="form-control" 
		           id="password" 
		           name="password" 
		           value="<?php if(isset($_GET['password']))
		                           echo($_GET['password']); ?>" 
		           placeholder="Entrer mot de passe">
		   </div>
           <div class="form-group">
		     <label for="name">Entrer nom</label>
		     <input type="text" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Entrer nom">
		   </div>
           <div class="form-group">
		     <label for="surname">Entrer prenom</label>
		     <input type="text" 
		           class="form-control" 
		           id="surname" 
		           name="surname" 
		           value="<?php if(isset($_GET['surname']))
		                           echo($_GET['surname']); ?>" 
		           placeholder="Entrer prenom">
		   </div>
           <div class="form-group">
		     <label for="phone">Entrer numero de telephone</label>
		     <input type="tel" 
		           class="form-control" 
		           id="phone" 
		           name="phone" 
		           value="<?php if(isset($_GET['phone']))
		                           echo($_GET['phone']); ?>" 
		           placeholder="Entrer numero de telephone">
		   </div>
           <div class="form-group">
		     <label for="email">Entrer email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>" 
		           placeholder="Entrer email">
		   </div>
           <div class="form-group">
		     <label for="location">Entrer location</label>
		     <input type="text" 
		           class="form-control" 
		           id="location" 
		           name="location" 
		           value="<?php if(isset($_GET['location']))
		                           echo($_GET['location']); ?>" 
		           placeholder="Entrer location">
		   </div>

           <button type="submit" 
		          class="btn btn-primary"
		          name="createc">ajouter</button>
		    <a href="affichec.php" class="link-primary">liste des comptes</a>
        </form>
    </div>

 </body>
</html>