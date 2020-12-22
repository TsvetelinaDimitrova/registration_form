<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>Registrieren und Einloggen</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="expires" content="0">
		<link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet'>
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Paprika">
		<script src="script.js"></script>
	</head>
	<body>
		<div class="header">
			<h1>Haben Sie dem Weihnachtsmann schon geschrieben?</h1>
			<h2>Sei schnell und verpass die Chance nicht, das Geschenk deiner Träume zu bekommen!</h2>
		</div>		
		<div class="buttons1">
			<p>Bereits registriert?</p>
			<div class="wrap">
				<button class="button" id="loginButton" type="button">Anmelden</button>
			</div>
		</div>
		<div class="buttons2">
			<p>Noch nicht registriert?</p>
			<div class="wrap">
				<button class="button" id="regButton" type="button">Registrieren</button>
			</div>
		</div>
			
		<div class="form1" id="id01">
			<form id="formRegister" class="signup-form" action="register.php" method="post">
		
				<!-- form header -->
				<div class="form-header">
					<h1>Benutzerkonto erstellen</h1>
				</div>
					
				<!-- form body -->
				<div class="form-body">
					
					<!-- Anrede und Titel -->
					<div class="horizontal-group">
						<div class="form-group left">
							<label class="label-title">Anrede</label>
							<div class="input-group">
								<label for="frau"><input type="radio" name="anrede" value="Frau" id="frau"> Frau</label>
								<label for="herr"><input type="radio" name="anrede" value="Herr" id="herr"> Herr</label>.
							</div>
						</div>
						<div class="form-group right">
							<label class="label-title">Titel</label>
							<div class="input-group">
								<label><input type="checkbox" name="titel[]" value="Dipl.-Ing.">Dipl.-Ing.</label>
								<label><input type="checkbox" name="titel[]" value="Prof.">Prof.</label>
								<label><input type="checkbox" name="titel[]" value="Dr.">Dr.</label>
							</div>
						</div>
					</div>
						
					<!-- Vorname and Nachname -->
					<div class="horizontal-group">
						<div class="form-group left">
							<label for="vorname" class="label-title">Vorname *</label>
							<input type="text" id="vorname" class="form-input" name="firstname"value="<?php echo $firstname; ?>" required>
						</div>
						<div class="form-group right">
							<label for="nachname" class="label-title">Nachname *</label>
							<input type="text" id="nachname" class="form-input" name="lastname" value="<?php echo $lastname; ?>" required>
						</div>
					</div>
						
					<!-- Geburtsdatum -->
					<div class="horizontal-group">
						<div class="form-group left">
							<label for="geburtstag" class="label-title">Geburtsdatum</label>
							<input id="geburtstag" type="date" class="form-input" name="birthday" value="<?php echo $birthday; ?>">
						</div>
						<div class="form-group right">
							<label for="username" class="label-title">Benutzername *</label>
							<input id="username" type="text" class="form-input" name="username" value="<?php echo $username; ?>" required>
						</div>
					</div>
						
					<!-- Anschrift -->
					<div class="horizontal-group">
						<div class="form-group">
							<label for="strasse" class="label-title">Strasse</label>
							<input type="text" id="strasse" class="form-input" name="street" value="<?php echo $street; ?>">
						</div>
					</div>
					<div class="horizontal-group">
						<div class="form-group left">
							<label for="plz" class="label-title">Plz</label>
							<input type="text" id="plz" class="form-input" name="postcode" value="<?php echo $postcode; ?>">
						</div>
						<div class="form-group right">	
							<label for="ort" class="label-title">Ort</label>
							<input type="text" id="ort" class="form-input" name="city" value="<?php echo $city; ?>">
						</div>
					</div>

					<!-- Email -->
					<div class="form-group">
						<label for="email" class="label-title">Email *</label>
						<input type="email" id="email" class="form-input" name="email" value="<?php echo $email; ?>"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="email">
					</div>

					<!-- Passwort und Passwort Bestätigung -->
					<div class="horizontal-group">
						<div class="form-group left">
							<label for="password" class="label-title">Passwort *</label>
							<input type="password" id="password" class="form-input" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Muss mindestens eine Zahl und einen Groß- und Kleinbuchstaben sowie mindestens 8 oder mehr Zeichen enthalten" required>
						</div>

						<div class="form-group right">
							<label for="confirm-password" class="label-title">Passwort bestätigen *</label>
							<input type="password" class="form-input" id="confirm-password" name="password_2" required>
						</div>
					</div>
					<button type="reset" class="reset">Zurücksetzen</button>
					
					<div class="error_r">
						<span id="validationError"></span>
						<span id="confirmPasswordError"></span>
						<span><?php include('errors.php'); ?></span>
					</div>
					
				</div>
				
				<!-- form footer -->
				<div class="form-footer">
					
					<!-- Benutzer Zustimmung -->
					<div class="horizontal-group">
						<input type="checkbox" id="dsgvo" name="dsgvo" role="switch" required aria-checked="false">
						<label for="dsgvo">Ich bin mit der Übertragung und Verarbeitung meiner Daten einverstanden.</label>
					</div>

					<!-- Schaltflächen -->
					<div class="horizontal-group">
						<button type="submit" class="btn" name="reg_user">Erstellen</button>
						<button id="cancel" type="button" class="btn">Beenden</button>
					</div>
					<div class="form-group left">
						<span>* erforderlich</span>
					</div>
				</div>
			</form>
		</div>
			
		<div class="form2" id="id02">
			<form class="login-form" action="register.php" method="post">
				
				<!-- form header -->
				<div class="form-header">
					<h1>Benutzerkonto einloggen</h1>
				</div> 
					
				<!-- form body -->
				<div class="form-body">
					
					<div class="horizontal-group">
						<div class="form-group">
							<label for="user" class="label-title">Benutzername *</label>
							<input type="text" id="user" class="form-input" name="username" required>
						</div>
					</div>
						
					<!-- Passwort -->
					<div class="horizontal-group">
						<div class="form-group">
							<label for="pass" class="label-title">Passwort *</label>
							<input class="form-input" type="password" id="pass" name="password" required>
						</div>
					</div>
					
					<div class="error_l">
						<span><?php include('errors.php'); ?></span>
					</div>
					
					<div class="horizontal-group">
						<div class="form-group">
							<a href="#">Passwort vergessen</a>
						</div>
					</div>
				</div>
				
				<!-- form footer -->
				<div class="form-footer">
		
					<!-- Benutzerkonto bleiben -->
					<div class="horizontal-group">
						<input type="checkbox" checked="checked" name="remember"> 
						<label>Lass mich angemeldet</label>
					</div>
						
					<!-- Schaltflächen -->
					<button type="submit" class="btn" name="login_user">Einloggen</button>
					<button id="cancel1" type="button" class="btn">Beenden</button>
					<div class="form-group left">
						<span>* erforderlich</span>
					</div>
				</div>
			</form>
		</div>		
	</body>
</html>