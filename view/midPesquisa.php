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
			foreach($consulta as $link){
		?>
		<a href="" class="list-group item active">
			<h4 class="list-group-item-heading"><?php echo $link['nome'];?></h4>
			<p class="list-group-item-text">dsadsa</p>
		</a>
		<?php
			}
		?>
	</div>

</div>