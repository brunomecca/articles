<div class="container">
	<div class="col-lg-3">
		<form method="get" enctype="multipart/form-data">
			<div class="text-center">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
		            <input type="text" id="pesquisa" name="pesquisa" class="form-control" placeholder="Search!" required />
				</div>
				<br>
				<input type="submit" class="btn btn-default" value="Go!"  />

			</div>
		</form>
	</div>
</div>
<div class="container">
	<div class="list-group">
<?php
	if(isset($_SESSION['id'])){
		if($consulta == False)
			echo "<div class='alert alert-danger' role='alert'><strong>Oh snap!</strong> You have 0 links</div>";
		else{
			foreach($consulta as $link){
?>
				<div class="post-link">
					
					<a href="<?php echo $link['link'];?>" class="list-group-item">

						<h4 class="list-group-item-heading"><?php echo $link['nome'];?></h4>
						<h6 class="list-group-item-heading"><?php echo $link['data'];?></h6>
						<p class="list-group-item-text"><?php echo $link['categoria'];?></p>

					</a>
					<a href="?done=<?php echo $link['id'];?>"><button type="button" class="button">DONE!</button></a>
					<br><br>
				</div>
				
<?php
			}
		}
	}
?>
	</div>
</div>