<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_movies.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from movie LEFT JOIN category on category.category_id  = movie.category_id where movie_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		$category_id = $row['category_id'];
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Modifier le DVD</div>
			<p><a class="btn btn-info" href="movies.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Retour</a></p>
	<div class="addstudent">
	<div class="details">Rentrez les informations suivantes</div>	
	<form class="form-horizontal" method="POST" action="update_movies.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Titre du Film:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="movie_title" value="<?php echo $row['movie_title']; ?>" placeholder="Titre du Film" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="Titre du Film" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Categorie:</label>
			<div class="controls">
			<select name="category_id">
				<option value="<?php echo $category_id; ?>"><?php echo $row['classname']; ?></option>
				<?php $query1 = mysql_query("select * from category where category_id != '$category_id'")or die(mysql_error());
				while($row1 = mysql_fetch_array($query1)){
				?>
				<option value="<?php echo $row1['category_id']; ?>"><?php echo $row1['classname']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Autheur:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="author" value="<?php echo $row['author']; ?>" placeholder="autheur" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Examplaires</label>
			<div class="controls">
			<input class="span1" type="text" id="inputPassword" name="movie_copies" value="<?php echo $row['movie_copies']; ?>" placeholder="Examplaires" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Film pub:</label>
			<div class="controls">
			<input type="text" class="span4"  id="inputPassword" name="movie_pub" value="<?php echo $row['movie_pub']; ?>" placeholder="Film pub" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Producteur:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="Producteur" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">IMDB:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="isbn" value="<?php echo $row['IMDB_Rating']; ?>" placeholder="IMDB" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Année de sortie:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="Année de sortie" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Etat:</label>
			<div class="controls">
			<select name="status">
				<option><?php echo $row['status']; ?></option>
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