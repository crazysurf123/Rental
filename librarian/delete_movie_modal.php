	<div id="delete_movie<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Êtes-vous sur de vouloir supprimer cette information?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="delete_movies.php<?php echo '?id='.$id; ?>">Oui</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Fermer</button>
		</div>
    </div>
	
