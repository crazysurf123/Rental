<?php include('header.php'); ?>
<div class="container">
		<div class="margin-top">
			<div class="row">	
			<?php include('head.php'); ?>

<div class="col-main">
	<div class="cms">
	<div class="loader_success"></div>
	<div class="contact_add" style="float: right">
	<h2>Moyen de contact</h2>
	<?php if(phoneNumber()) { ?><p><strong>Notre numéro de téléphone : </strong><?php echo phoneNumber(); ?></p> <?php } ?>
	<?php if(email()) { ?><p><strong>Notre adresse mail : </strong><?php echo email(); ?></p> <?php } ?>
	<?php if(address()) { ?><p><strong>Addresse : </strong><?php echo address(); ?></p> <?php } ?>
	</div>
	<input type="hidden" class="emailaddress_admin" value="<?php echo email(); ?>" />
	
	<div class="loader_mail" style="position: absolute;">Nous envoyons un email merci de patienter</div>
	
	<div class="Cotactform">
		<div class="personal_info">
			<p>
			<label>Prénom: </label><br />
			<input type="text" name="fname" class="fname email_text" />
			</p>
			<p>
			<label>Nom de famille: </label><br />
			<input type="text" name="lname" class="lname email_text" />
			</p>
			<p>
			<label>Votre addresse mail: </label><br />
			<input type="text" id="validate" name="email" class="email email_text" />
			</p>
			<p>
			<label>Message: </label><br />
			<textarea class="message" style="width: 580px; height: 225px;"></textarea>
			</p>
			<p>
			<br />
			<button class="send"><span>Envoyer</span></button>
			</p>
		</div>
	</div>
</div>
</div>

<?php include('footer.php') ?>