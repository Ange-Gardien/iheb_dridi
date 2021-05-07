<?php 

if (isset($_POST['createp'])) {
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

	$user_data = 'id_carte='.$id_carte. 'date_creation='.$date_creation. 'date_limite='.$date_limite. 'point_fidelitee='.$point_fidelitee. 'remises='.$remises;

	if (empty($id_carte)) {
		header("Location: point_fidelite.php?error= erreur id_carte point_fidelite &$user_data");
	}else if (empty($date_creation)) {
		header("Location: point_fidelite.php?error=erreur date_creation point_fidelite&$user_data");
	}else if (empty($date_limite)) {
		header("Location: point_fidelite.php?error=erreur date_limite point_fidelite&$user_data");
	}else if (empty($point_fidelitee)) {
		header("Location: point_fidelite.php?error=erreur point_fidelitee point_fidelite&$user_data");
	}else if (empty($remises)) {
		header("Location: point_fidelite.php?error=erreur remises point_fidelite&$user_data");
	}else {
       $sql = "INSERT INTO point_fidelite(id_carte, date_creation , date_limite , point_fidelitee , remises) 
               VALUES('$id_carte', '$date_creation', '$date_limite', '$point_fidelitee', '$remises')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: point_fidelite?success=successfully created");
			 
       }else {
          header("Location: point_fidelite?error= error occurred&$user_data");
       }
	}

}
?>