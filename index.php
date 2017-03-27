<!DOCTYPE html>
<html>
	<head>
		<title>REGISTER</title>
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="./assets/css/register.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
					<form class=" col-md-6 request" method="POST" action="traitement.php">
  						<label for="name">Nom :</label>
  						<input type="text" name="name" class="form-control" id="name">
			
						<label for="firstname">Prenom :</label>
						<input type="text" name="firstname" class="form-control" id="firstname">

						<label for="birth">Date de naissance :</label>	
						<input type="date" name="birth" class="form-control" id="birth">

						<label for="sexe">Sexe :</label></br>
						<input type="radio" name="gender" value="fille">Fille</br>
						<input type="radio" name="gender" value="garcon">Garcon </br>

						<label for="email">E-Mail :</label>
						<input type="text" name="email" class="form-control" id="email">

						<label for="pass">Mot de passe :</label>
						<input type="password" name="pass" class="form-control" id="pass">

						<label for="conf_pass">Confirmer votre mot de passe :</label>
						<input type="password" name="conf_pass" class="form-control" id="conf_pass">

						<center><input type="submit" value="S'INSCRIRE" class=" bouton btn-success form-control"/></center>
					</form>
			</div>
		</div>	
	</body>
</html>