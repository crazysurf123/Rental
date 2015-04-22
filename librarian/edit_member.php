<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from member where member_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Modifier le membre</div>
			<p><a class="btn btn-info" href="member.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Retour</a></p>
	<div class="addstudent">
	<div class="details">Veuillez rentrer les informations suivante</div>	
	<form class="form-horizontal" method="POST" action="update_member.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Prénom:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Prénom" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Prénom" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Nom:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Nom" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Genre:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="gender" value="<?php echo $row['gender']; ?>" placeholder="Genre" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Adddresse:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Addresse" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Contact:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact"  placeholder="07 Mademoiselle"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Type:</label>
			<div class="controls">
			<select name="type" required>
			
			
	
									
									<option><?php echo $row['type']; ?></option>
									<option>Etudiant</option>
									<option>Professeur</option>
									
				</select>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Année d'étude:</label>
			<div class="controls">
				<select name="year_level" required>			
									<option><?php echo $row['year_level']; ?></option>
									<option>Première année</option>
									<option>Deuxième année</option>
									<option>Troisième année</option>
									<option>Quatrième année</option>
									<option>C'est compliqué (=Vincent)</option>
				</select>
			</div>
		</div>
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
				<select name="status" required>
									<option><?php  echo $row['status']; ?></option>
									<option>Actif</option>
									<option>Bloqué</option>
				</select>
			</div>
		</div>
		
		
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Mettre à jour</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>