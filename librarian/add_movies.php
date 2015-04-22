<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_movies.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Ajout d'un film</div>
			<p><a href="movies.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Retour</a></p>
	<div class="addstudent">
	<div class="details">Rentrer les informations suivantes</div>		
	<form class="form-horizontal" method="POST" action="movies_save.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Titre du Film</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="movie_title"  placeholder="Titre du film" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Categorie</label>
			<div class="controls">
			<select name="category_id">
			<option></option>
			<?php
			$cat_query = mysql_query("select * from category");
			while($cat_row = mysql_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Autheur:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="Autheur" required>
			</div>
		</div>
		

		
		

		<div class="control-group">
			<label class="control-label" for="iionputPassword">Exemplaires du DVD:</label>
			<div class="controls">
			<input type="text" class="span1" id="inputPassword" name="movie_copies"  placeholder="" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Film pub:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="movie_pub"  placeholder="Film pub" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Producteur:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="publisher_name"  placeholder="Producteur" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">IMDB:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="IMDB" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Année de sortie:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year"  placeholder="Année de sortie" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Etat:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>Nouveau</option>
				<option>Ancien</option>
				<option>Perdu</option>
				<option>Abbimé</option>
				<option>A remplacer</option>
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