<?php foreach($rows as $key => $row): ?>
	<?php if ($key == 0): ?>
	<div class="col-md-8 big-banner">
		<?php echo($row) ?>
	</div>
	<?php elseif ($key <= 2):?>
		<?php if ($key == 1): ?>

			<div class="col-md-4">
				<div class="row">
					<div class="col-sm-12 small-banner">
						<?php echo($row) ?>
					</div>
				</div>
			
		<?php elseif ($key == 2): ?>

				<div class="row">
					<div class="col-sm-12 small-banner">
						<?php echo($row) ?>
					</div>
				</div>
			</div>

		<?php endif;?>
	
	<?php endif;?>
	
<?php endforeach; ?>