<?php  

if(isset($_GET['id_carte'])){
   include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id_carte = validate($_GET['id_carte']);

	$sql = "DELETE FROM point_fidelite
	        WHERE id_carte=$id_carte";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: affichep.php?success=successfully deleted");
   }else {
      header("Location: affichep.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: affichep.php");
}