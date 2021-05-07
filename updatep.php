<?php 

if (isset($_GET['id_carte'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id_carte = validate($_GET['id_carte']);
    
	$sql = "SELECT * FROM point_fidelite WHERE id_carte=$id_carte";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
        
    }else {
    	header("Location: affichep.php");
    }
}
else if(isset($_POST['updatep'])){
include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id_carte = validate($_POST['id_carte']);
	$date_creation = validate($_POST['date_creation']);
    $date_limite = validate($_POST['date_limite']);
    $point_fidelitee = validate($_POST['point_fidelitee']);
    $remises = validate($_POST['remises']);
    
   
  



	if (empty($id_carte)) {
		header("Location: affiche_updatep.php?id_carte=$id_carte &error= erreur id_carte point_fidelite &$user_data");
	}else if (empty($date_creation)) {
		header("Location: affiche_updatep.php?id_carte=$id_carte &error=erreur date_creation point_fidelite &$user_data");
	}else if (empty($date_limite)) {
		header("Location: affiche_updatep.php?id_carte=$id_carte &error=erreur date_limite point_fidelite &$user_data");
	}else if (empty($point_fidelitee)) {
		header("Location: affiche_updatep.php?id_carte=$id_carte &error=erreur point_fidelitee point_fidelite &$user_data");
	}else if (empty($remises)) {
		header("Location: affiche_updatep.php?id_carte=$id_carte &error=erreur remises point_fidelite &$user_data");
	}else {
       $sql = "UPDATE point_fidelite SET id_carte='$id_carte' , date_creation ='$date_creation' , date_limite ='$date_limite' , point_fidelitee ='$point_fidelitee' , remises ='$remises' WHERE id_carte=$id_carte";
              
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: affiche_updatep.php?id_carte=$id_carte &success=successfully updated");
			 
       }else {
          header("Location: affiche_updatep.php?id_carte=$id_carte &error=unknown error occurred&$user_data");
       }
	}

}






?>







