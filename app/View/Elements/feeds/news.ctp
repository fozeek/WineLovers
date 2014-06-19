<?php if($actu['News']['type'] == 'post') : ?>

	<?= $this->element('feeds/post', array('post' => $actu['LinkPost'])) ?>

<?php elseif($actu['News']['type'] == 'post_mention') : ?>
	<div class="row">
		<div class="col-md-1">
			<a class="pull-left" href="#">
    			<img class="media-object img-rounded" src="<?php if(!empty($actu['FromUser']['image'])) : echo '/img/upload/'.$actu['FromUser']['image']; else: ?>http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png<?php endif ?>" alt="..." style="width: 50px;">
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
    			<img class="media-object img-rounded" src="<?php if(!empty($actu['FromUser']['image'])) : echo '/img/upload/'.$actu['FromUser']['image']; else: ?>http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png<?php endif ?>" alt="..." style="width: 50px;">
  			</a>
		</div>
		<div class="col-md-11">
			<?php if(isset($event) && $actu['LinkEvent']['id'] == $event['Event']['id']) : ?>
			<div >
				<strong><?= $actu['FromUser']['name'] ?></strong> a rejoins l'évènement.
			</div>
			<?php else: ?>
			<div >
				<strong><?= $actu['FromUser']['name'] ?></strong> a rejoins un évènement :
			</div>
			<hr style="margin-top: 7px;"/>

				<?= $this->element('cards/posts/event', array('event' => $actu['LinkEvent'])) ?>
			
			<?php endif ?>

		</div>
	</div>


<?php elseif($actu['News']['type'] == 'wine_add') : ?>
	<div class="row">
		<div class="col-md-1">
			<a class="pull-left" href="#">
    			<img class="media-object img-rounded" src="<?php if(!empty($actu['FromUser']['image'])) : echo '/img/upload/'.$actu['FromUser']['image']; else: ?>http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png<?php endif ?>" alt="..." style="width: 50px;">
  			</a>
		</div>
		<div class="col-md-11">
			<?php if(isset($wine) && $actu['LinkWine']['id'] == $wine['Wine']['id']) : ?>
			<div >
				<strong><?= $actu['FromUser']['name'] ?></strong> a ajouté le vin à sa cave.
			</div>
			<?php else: ?>
			<div>
				<strong><?= $actu['FromUser']['name'] ?></strong> a ajouté un vin à sa cave : 
			</div>
			<hr style="margin-top: 7px;"/>

				<?= $this->element('cards/posts/wine', array('wine' => $actu['LinkWine'])) ?>

			<?php endif ?>

		</div>
	</div>


<?php endif ?>