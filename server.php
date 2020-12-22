<?php
session_start();

// Variablen initialisieren
$username  = "";
$email     = "";
$password  = "";
$firstname = "";
$lastname  = "";
$birthday  = "";
$street    = "";
$postcode  = "";
$city      = "";
$errors    = array();
$anrede    = "anrede";


// Verbindung zur Datenbank herstellen
$db = mysqli_connect('localhost', 'root', '', 'registration');

// BENUTZER REGISTRIEREN
if (isset($_POST['reg_user'])) {
	// alle Eingabewerte aus dem Formular empfangen
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	$anrede = mysqli_real_escape_string($db, $_POST['anrede']);
	$titel = $_POST['titel'];
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$birthday = mysqli_real_escape_string($db, $_POST['birthday']);
	$street = mysqli_real_escape_string($db, $_POST['street']);
	$postcode = mysqli_real_escape_string($db, $_POST['postcode']);
	$city = mysqli_real_escape_string($db, $_POST['city']);
	
	// das Array der Kontrollkästchenwerte durchlaufen
	$check="";
	foreach($titel as $key => $value){
		$check .= $value . ",";
	}
	
	// Formularüberprüfung: sicherstellen, dass das Formular korrekt ausgefüllt ist ...
	// durch Hinzufügen von (array_push()) des entsprechenden Fehlers im Array $errors
	if (empty($username)) { array_push($errors, "Benutzername ist erforderlich"); }
	if (empty($email)) { array_push($errors, "Email ist erforderlich"); }
	if (empty($password_1)) { array_push($errors, "Passwort ist erforderlich"); }
	if ($password_1 != $password_2) { array_push($errors, "Die zwei Passwörter stimmen nicht überein"); }
	if (empty($firstname)) { array_push($errors, "Vorname ist erforderlich"); }
	if (empty($lastname)) { array_push($errors, "Nachname ist erforderlich"); }

	// zunächst die Datenbank überprüfen, um sicherzustellen, dass noch kein Benutzer ...  
	// mit demselben Benutzernamen und/ oder derselben Emailadresse vorhanden ist
	$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
  
	if ($user) { // wenn Benutzer bereits existiert
		if ($user['username'] === $username) {
			array_push($errors, "Benutzername existiert bereits");
		}

		if ($user['email'] === $email) {
			array_push($errors, "Email existiert bereits");
		}
	}

	// zum Schluss den Benutzer registrieren, wenn das Formular keine Fehler enthält
	if (count($errors) == 0) {
		$password = md5($password_1);// das Passwort bevor es in der Datenbank gespeichert wird, verschlüsseln

		$query = "INSERT INTO users (username, anrede, titel, email, password, firstname, 
									lastname, birthday, street, postcode, city) 
					VALUES('$username', '$anrede', '$check', '$email', '$password', '$firstname', '$lastname', '$birthday', '$street', '$postcode', '$city')";
		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Sie sind jetzt eingeloggt";
		header('location: index.php');
	}
}



// Benutzer anmelden
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Benutzername ist erforderlich");
	}
	if (empty($password)) {
		array_push($errors, "Passwort ist erforderlich");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Sie sind jetzt eingeloggt";
			header('location: index.php');
		}else {
			array_push($errors, "Falsche Kombination aus Benutzername und Passwort");
		}
	}
}

?>