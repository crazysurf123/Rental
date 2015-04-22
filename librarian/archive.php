<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_archive.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
						<!--  -->
								    <ul class="nav nav-pills">
										<li   class="active"><a href="archive.php">Archive</a></li>
									
									</ul>
						<!--  -->
						<center class="title">
						<h1>Liste des Films</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimer</a>
								</div>
							
                                <thead>
                                    <tr>
									    <th>Acc No.</th>                                 
                                        <th>Titre du Film</th>                                 
                                        <th>Categorie</th>
										<th>Autheur</th>
										<th class="action">Examplaires</th>
										<th>Film Pub</th>
										<th>Producteur</th>
										<th>IMDB</th>
										<th>Année de sortie</th>	
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from movie where status = 'Archive'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['movie_id'];  
									$cat_id=$row['category_id'];

											$cat_query = mysql_query("select * from category where category_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['movie_id']; ?></td>
                                    <td><?php echo $row['movie_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo $row['movie_copies']; ?> </td>
                                     <td><?php echo $row['movie_pub']; ?></td>
									 <td><?php echo $row['publisher_name']; ?></td>
									 <td><?php echo $row['IMDB_Rating']; ?></td>
									 <td><?php echo $row['copyright_year']; ?></td>		
							
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>