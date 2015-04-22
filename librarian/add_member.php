<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Ajout membre</div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Retour</a></p>
	<div class="addstudent">
	<div class="details">Veuiller renseigner les informations suivante</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Prénom:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="Prénom" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Nom:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="Nom" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Genre:</label>
			<div class="controls">
			<select name="gender" required>
				<option></option>
				<option>Homme</option>
				<option>Femme</option>
				<option>Droïd</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Adddresse:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="Addresse" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Tu as un 07 mademoiselle:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact"  placeholder="07 de la miss"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Type:</label>
			<div class="controls">
			<select name="type" required>
			
			
			
									<option></option>
									<option>Etudiant</option>
									<option>Professeur</option>
									<option></option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Année d'étude:</label>
			<div class="controls">
				<select name="year_level" >
					

									<option> </option>
									<option>Première Année</option>
									<option>Deuxième Année</option>
									<option>Troisième Année</option>
									<option>Quatrième Année</option>
									<option>Cinquième Année</option>
									<option>C'est compliqué (=Vincent")</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Enregistrer</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>