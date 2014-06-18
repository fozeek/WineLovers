<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.cellar', 'active'); ?>

<?php foreach($datas as $key => $data) : if(count($data['vintages'])) : ?>
  <?php 
	$note = false;
  	if(count($data['reviews'])>0) {
	  	$note = 0;
	  	foreach ($data['reviews'] as $key => $review) {
	  		$note += $review['Review']['note'];
	  	}
	  	$note = $note/count($data['reviews']);
	}

  ?>
  <div class="row">
  	<?= $this->element('cards/wine', array('wine' => $data['wine'], 'size' => 4)) ?>
  	<div class="col-md-8">
  	<div style="padding: 20px;padding-top: 5px;padding-bottom: 0px;">

  		<div class="row">
  			<div class="form-group col-md-2" style="padding: 5px;padding-left: 20px;">
  				<h3 style="margin: 0px;">Note</h3>
  			</div>
            <div class="form-group col-md-10" style="padding-top: 3px;" data-id="<?= $data['wine']['id'] ?>" data-name="<?= $data['wine']['name'] ?>">
            <?php if($note) : ?>
            <?php for($cpt = 1;$cpt<=5;$cpt++) : ?>
			  <span class="glyphicon glyphicon-star<?php if($cpt>$note) : ?>-empty<?php endif ?> addnote" data-val="1" style="font-size: 2em;"></span>
			<?php endfor ?>
			<?php else: ?>
				<span style="color: grey;font-size: 1.5em;">Aucune note</span>
			<?php endif; ?>
            </div>
        </div>

       </div>

  		<hr style="margin-top: 0px;" />

  	<div style="padding: 20px;padding-top: 0px;">
  	<?php foreach($data['vintages'] as $vintage => $qty) : ?>
  			<span style="font-size: 1.3em;"><strong><?= $qty ?></strong> bouteilles de <strong><?= $vintage ?></strong></span>
  			<br />
  	<?php endforeach; ?>
  	</div>
  	</div>
  </div>
  <?php endif; endforeach; ?>