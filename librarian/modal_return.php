	<div id="delete_movie<?php echo $borrow_details_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-success">Voulez-vous rendre ce DVD?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="return_save.php<?php echo '?id='.$id; ?>&<?php echo 'movie_id='.$movie_id; ?>">Oui</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Ferme</button>
		</div>
    </div>
	
