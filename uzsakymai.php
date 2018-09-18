<?php include("includes/header.php"); ?>
<?php 

$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$items_per_page = 10;
$items_total_count = Auto::count_all();

$paginate = new Paginate($page, $items_per_page, $items_total_count);
$sql = "SELECT * FROM auto ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()}";
$autos = Auto::find_this_query($sql);

// $autos = Auto::find_all_auto(); 

if(isset($_POST['submit'])){
	$search = $_POST['search'];
	$sql = "SELECT * FROM auto ";
	$sql .= "WHERE auto_name LIKE '%$search%' ";
}

?>

	<?php include("includes/nav.php") ?>

	<article id="irasai">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Užsakymų sąrašas</h1>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Automobilis</th>
								<th>Vardas</th>
								<th>Pavardė</th>
								<th>Telefono numeris</th>
								<th>Papildomi reikalavimai</th>
								<th>El. paštas</th>
							</tr>
						</thead>

						<tbody>
							<?php  foreach ($autos as $auto) : ?>
								<tr>
									<td><?php echo $auto->id; ?></td>
									<td><?php echo $auto->auto_name; ?></td>
									<td><?php echo $auto->first_name; ?></td>
									<td><?php echo $auto->last_name; ?></td>
									<td><?php echo $auto->number; ?></td>
									<td><?php echo $auto->content; ?></td>
									<td><?php echo $auto->email; ?>
										<div class="link">
											<a href="delete_auto.php?id=<?php echo $auto->id; ?>">Ištrinti užsakymą</a>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						
					</table>
				</div>
			</div>
		</div>

		<nav aria-label="Page navigation example">
  			<ul class="pagination justify-content-center">
  				<?php  

					if($paginate->has_previous()) {
							echo "<li class='page-item'><a class='page-link' href='uzsakymai.php?page={$paginate->previous()}'>Previous</a></li>";
					}


					for ($i=1; $i <= $paginate->page_total(); $i++) { 
						if($i == $paginate->current_page){
							echo "<li class='active page-item'><a class='page-link' href='uzsakymai.php?page={$i}'>{$i}</a></li>";
						} else {
							echo "<li class=''><a class='page-link' href='uzsakymai.php?page={$i}'>{$i}</a></li>";
						}
					}

					if($paginate->page_total() > 1) {
						if($paginate->has_next()) {
							echo "<li class='page-item next'><a class='page-link' href='uzsakymai.php?page={$paginate->next()}'>Next</a></li>";
						}
					}
				?>
  			</ul>
		</nav>
	</article>
<?php include("includes/footer.php") ?>