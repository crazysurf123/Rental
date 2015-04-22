<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<a href="http://blog.my-univ.com"><img src="../LMS/popcorntime.png" class="img-rounded"></a>
					</div>
				<div class="login">
				<div class="log_txt">
				<p><strong>Veuillez rentrer les informations suivante:</strong></p>
				</div>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Identifiant</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Identifiant" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Mot de passe</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Mot de passe" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Envoyer</button>
								</div>
								</div>
								
								<?php
								if (isset($_POST['submit'])){
								session_start();
								$username = $_POST['username'];
								$password = $_POST['password'];
								$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									if( $num_row > 0 ) {
										header('location:dashboard.php');
								$_SESSION['id']=$row['user_id'];
									}
									else{ ?>
								<div class="alert alert-danger">Accès refusé</div>		
								<?php
								}}
								?>
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>