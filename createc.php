<?php 

if (isset($_POST['createc'])) {
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

	$user_data = 'id='.$id. 'password='.$password. 'name='.$name. 'surname='.$surname. 'phone='.$phone. 'email='.$email. 'location='.$location;

	if (empty($id)) {
		header("Location: compte.php?error= erreur id compte &$user_data");
	}else if (empty($password)) {
		header("Location: compte.php?error=erreur password compte&$user_data");
	}else if (empty($name)) {
		header("Location: compte.php?error=erreur name compte&$user_data");
	}else if (empty($surname)) {
		header("Location: compte.php?error=erreur surname compte&$user_data");
	}else if (empty($phone)) {
		header("Location: compte.php?error=erreur phone compte&$user_data");
	}else if (empty($email)) {
		header("Location: compte.php?error=erreur email compte&$user_data");
	}else if (empty($location)) {
		header("Location: compte.php?error=erreur location compte&$user_data");
	}else {
       $sql = "INSERT INTO compte(id, password , name , surname , phone , email , location) 
               VALUES('$id', '$password', '$name', '$surname', '$phone', '$email', '$location')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: compte.php?success=successfully created");
			 
       }else {
          header("Location: compte.php?error= error occurred&$user_data");
       }
	}
}
?>