<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php
$query=mysql_query("select * from students where student_id='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
			<div class="span3">
			</div>
			
				<div class="span7">
						<form class="form-horizontal" method="post">
							<div class="control-group">
								<label class="control-label" for="inputEmail">Nouveau mot de passe</label>
								<div class="controls">
								<input type="text" name="np" id="inputEmail" placeholder="Nouveau mot de passe">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Ré entré votre mot de passe</label>
								<div class="controls">
								<input type="password" name="rp" id="inputPassword" placeholder="Ré entré votre mot de passe">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
								<button type="submit" name="update" class="btn btn-success">Mettre à jour</button>
								</div>
								<br>
								<br>
			<?php
			
						if (isset($_POST['update'])){
						$np = $_POST['np'];
						$rp = $_POST['rp'];			
						if($np!=$rp){
						?>
						<div class="alert alert-danger">Mot de passe pas cohérent</div>
						<?php
						}else{
						mysql_query("update students set password = '$np' where student_id = '$session_id' ")or die(mysql_error); ?>
						<div class="alert alert-success">Mot de passe bien changé</div>
						<?php }}?>
							</div>
						</form>
				</div>
				

	
			
			</div>
		</div>
    </div>
<?php include('footer.php') ?>