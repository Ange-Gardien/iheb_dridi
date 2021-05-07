<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);
    
	$sql = "SELECT * FROM compte WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
        
    }else {
    	header("Location: affichec.php");
    }
}
else if(isset($_POST['updatec'])){
include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_POST['id']);
	$password = validate($_POST['password']);
    $name = validate($_POST['name']);
    $surname = validate($_POST['surname']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $location = validate($_POST['location']);
   
  



	if (empty($id)) {
		header("Location: affiche_updatec.php?id=$id &error= erreur id compte &$user_data");
	}else if (empty($password)) {
		header("Location: affiche_updatec.php?id=$id &error=erreur password compte &$user_data");
	}else if (empty($name)) {
		header("Location: affiche_updatec.php?id=$id &error=erreur name compte &$user_data");
	}else if (empty($surname)) {
		header("Location: affiche_updatec.php?id=$id &error=erreur surname compte &$user_data");
	}else if (empty($phone)) {
		header("Location: affiche_updatec.php?id=$id &error=erreur phone compte &$user_data");
	}else if (empty($email)) {
		header("Location: affiche_updatec.php?id=$id &error=erreur email compte &$user_data");
	}else if (empty($location)) {
		header("Location: affiche_updatec.php?id=$id &error=erreur location compte &$user_data");
	}else {
       $sql = "UPDATE compte SET id='$id' , password ='$password' , name ='$name' , surname ='$surname' , phone ='$phone' , email ='$email' , location ='$location' WHERE id=$id";
              
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: affiche_updatec.php?id=$id &success=successfully updated");
			 
       }else {
          header("Location: affiche_updatec.php?id=$id &error=unknown error occurred&$user_data");
       }
	}

}






?>







