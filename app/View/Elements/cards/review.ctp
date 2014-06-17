<div style="row">
	<?= $this->element('cards/user', array('user' => $review['Author'], 'size' => 4)) ?>
	<div style="col-md-8">
		<?= $review['note'] ?>
		<?= $review['comment'] ?>
		<?= $review['vintage'] ?>
	</div>

</div>