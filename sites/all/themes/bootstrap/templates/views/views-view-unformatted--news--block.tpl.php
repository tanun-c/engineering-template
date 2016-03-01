<?php foreach($rows as $key => $row): ?>
	<div class="col-sm-6 small-banner <?php echo (($key % 2 == 1)?'even':'odd')?>">
		<?php echo($row) ?>
	</div>
<?php endforeach; ?>