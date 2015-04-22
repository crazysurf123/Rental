      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Accueil</a></li>
					<li><a href="users.php"><i class="icon-user icon-large"></i>&nbsp;Utilisateurs</a></li>
					<li>		
					<a href=""  data-toggle="dropdown" ><i class="icon-file icon-large"></i> Réservation</a>
					<ul class="dropdown-menu">
					<li><a href="change_password.php"><i class="icon-pencil icon-large"></i>&nbsp;Emprunt</a></li>
					<li><a href="return.php"><i class="icon-cog icon-large"></i>&nbsp;Retour</a></li>
					</ul>
					</li>
					
					<li><a href="movie.php"><i class="icon-book icon-large"></i>&nbsp;Films</a></li>
					<li><a href="member.php"><i class="icon-group icon-large"></i>&nbsp;Membre</a></li>
					<li><a href=""><i class="icon-list-alt icon-large"></i>&nbsp;Vue</a></li>
					<!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
					<li><a href="#logout" data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Déconnexion</a></li>
					</ul>
					 <div class="pull-right">
						 <div class="admin">Bienvenue Gentil Professeur</div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
 
     <!-- Modal logout login -->
	<div id="logout" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-error">Etes-vous sur de vouloir vous déconnecter?</div>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Non</button>
			<a href="logout.php" class="btn btn-danger"><i class="icon-check icon-large"></i>&nbsp;Oui</a>
		</div>
    </div>