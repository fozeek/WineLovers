<?php if($actu['News']['type'] == 'post') : ?>

	<?= $this->element('feeds/post', array('post' => $actu['LinkPost'])) ?>

<?php elseif($actu['News']['type'] == 'post_mention') : ?>
	<div class="row">
		<div class="col-md-1">
			<a class="pull-left" href="#">
    			<img class="media-object img-rounded" src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $actu['LinkPost']['Author']['email'] ) ) ) . '?s=200' ?>" alt="..." style="width: 50px;">
  			</a>
		</div>
		<div class="col-md-11">
			<div >
				<strong><?= $actu['LinkPost']['Author']['name'] ?></strong> à écrit en mentionant <strong>

				<?php 
					if(count($actu['LinkPost']['AttachUser']['id'])>0) {
						echo $actu['LinkPost']['AttachUser']['name'];
					}
					elseif (count($actu['LinkPost']['AttachWine']['id'])>0) {
						echo $actu['LinkPost']['AttachWine']['name'];
					}
					elseif (count($actu['LinkPost']['AttachEvent']['id'])>0) {
						echo $actu['LinkPost']['AttachEvent']['name'];
					}

				?>
				</strong>
			</div>
			<hr style="margin-top: 7px;"/>

	<?= $this->element('feeds/post', array('post' => $actu['LinkPost'])) ?>
		</div>
	</div>

<?php elseif($actu['News']['type'] == 'event_join') : ?>
	<div class="row">
		<div class="col-md-1">
			<a class="pull-left" href="#">
    			<img class="media-object img-rounded" src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $actu['FromUser']['email'] ) ) ) . '?s=200' ?>" alt="..." style="width: 50px;">
  			</a>
		</div>
		<div class="col-md-11">
			<div >
				<strong><?= $actu['FromUser']['name'] ?></strong> <?= $actu['News']['msg'] ?>
			</div>
			<hr style="margin-top: 7px;"/>

	<?= $this->element('cards/posts/event', array('event' => $actu['LinkEvent'])) ?>

		</div>
	</div>


<?php elseif($actu['News']['type'] == 'wine_add') : ?>
	<div class="row">
		<div class="col-md-1">
			<a class="pull-left" href="#">
    			<img class="media-object img-rounded" src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $actu['FromUser']['email'] ) ) ) . '?s=200' ?>" alt="..." style="width: 50px;">
  			</a>
		</div>
		<div class="col-md-11">
			<div >
				<strong><?= $user['User']['name'] ?></strong> <?= $actu['News']['msg'] ?>
			</div>
			<hr style="margin-top: 7px;"/>

	<?= $this->element('cards/posts/wine', array('wine' => $actu['LinkWine'])) ?>

		</div>
	</div>


<?php endif ?>