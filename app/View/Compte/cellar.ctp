<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.cellar', 'active'); ?>

<?php $this->Html->script('pages/comptes/cellar', array('inline'=>false)); ?>

<div class="modal fade" id="listnote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Note pour <span class="winename" data-id=""></span></h4>
      </div>
      <input type="hidden" id="ids"/>
      <div class="modal-body" style="padding-bottom: 1px;">
          <div class="row">
            <div class="form-group col-md-2" style="padding: 10px;margin-bottom: 0px;">
              <span style="font-size: 2em;">1032</label>
            </div>
            <div class="form-group col-md-10" style="padding: 5px;padding-left: 20px;margin-bottom: 0px;" data-val="">
			  <span class="glyphicon glyphicon-star-empty star star-1" data-val="1" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty star star-2" data-val="2" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty star star-3" data-val="3" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty star star-4" data-val="4" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty star star-5" data-val="5" style="font-size: 2em;cursor: pointer;"></span>
            </div>

            <div class="form-group col-md-10">
            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button id="addnotebtn" type="button" class="btn btn-primary">Ajouter une note</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Noter  : <span class="winename" data-id=""></span></h4>
      </div>
      <input type="hidden" id="ids"/>
      <div class="modal-body" style="padding-bottom: 1px;">
        <form role="form">
          <div class="row">
            <div class="form-group col-md-4" style="padding: 10px;text-align: right;">
              <label for="winenote">Note</label>
            </div>
            <div class="form-group col-md-8" style="padding: 5px;padding-left: 20px;" data-val="">
			  <span class="glyphicon glyphicon-star-empty star star-1" data-val="1" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty star star-2" data-val="2" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty star star-3" data-val="3" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty star star-4" data-val="4" style="font-size: 2em;cursor: pointer;"></span>
			  <span class="glyphicon glyphicon-star-empty star star-5" data-val="5" style="font-size: 2em;cursor: pointer;"></span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
            <label for="winecomm">Commentaire</label>
            </div>
            <div class="form-group col-md-8">
            <textarea class="form-control comment"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
            <label for="eventwhere">Millésime</label>
            </div>
            <div class="form-group col-md-8">
            <input class="form-control vintage"/>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="addnotesubmit" type="button" class="btn btn-primary">Enregistrer ma notation</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addWine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Choississez vos vins</h4>
      </div>
  	  <input type="hidden" id="ids"/>
      <div id="step1" class="modal-body" style="padding: 0px;">
		<div class="results" style="position: relative;max-height: 550px;overflow-y: auto;overflow-x: hidden;">
	        <input class="form-control" style="margin-top: 15px;margin-left: 15px;width: 568px;" placeholder="Rechercher un vin"/>
			<div class="nodata" style="display: none;text-align: center;font-size: 40px;color: #E7E7E7;padding: 20px;">
				Aucun resultat.
			</div>
			<div class="row" style="margin: 15px;margin-left: 0px;margin-bottom: 0px;" >
			  <?php foreach($wines as $wine) : ?>
			   	<?= $this->element('cards/posts/objects/wine', array('wine' => $wine)) ?>
			  <?php endforeach ?>
			</div>
			<div class="paginator" data-page="2" data-object="wines" style="display: none;">
				Chargement ..
			</div>
		</div>
      </div>
		<div id="step2" class="modal-body" style="padding: 0px;display: none;">
		</div>
		<div class="hidden template">
			<div class="new selectedWine" data-id style="padding: 15px;margin-top: -1px;border-top: 1px solid #eee;">
				<div class="row">
					<div class="col-md-2">
						<div class="img-responsive img-rounded img" style="background: center center no-repeat;height: 94px;width: 94px;background-size: cover;">
	      				</div>
					</div>
					<div class="col-md-10">
						<h4 class="name" style="color: rgb(128, 0, 0);">Wine name</h4>
						<input type="text" class="form-control qty" placeholder="Quantité"/>
						<input type="text" class="form-control millesime" placeholder="Millésime"/>
					</div>
				</div>
			</div>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="step1submit" type="button" class="btn btn-primary">Suivant</button>
        <button id="step2submit" type="button" class="btn btn-primary" style="display: none;">Ajouter à ma Cave</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modifier le stock d'un vin</h4>
      </div>
		<div id="step2" class="modal-body" style="padding: 0px;">
		</div>
			<div class="update" data-id style="padding: 15px;margin-top: -1px;border-top: 1px solid #eee;">
				<div class="row">
					<div class="col-md-2">
						<div class="img-responsive img-rounded img" style="background: center center no-repeat;height: 94px;width: 94px;background-size: cover;">
	      				</div>
					</div>
					<div class="col-md-10">
						<h4 class="winename" data-id="" style="color: rgb(128, 0, 0);">Wine name</h4>
						<input type="text" class="form-control qty" placeholder="Quantité"/>
						<input type="text" class="form-control vintage" placeholder="Millésime"/>
					</div>
				</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="updateSubmit" type="button" class="btn btn-primary">Sauvegarder</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
  	<h2 style="margin-top: 5px;">
		Ma Cave
	</h2>
  </div>
  <div class="col-md-8" style="padding-top: 5px;">

	<div class="btn-group pull-right" style="margin-left: 20px;">
	  <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#addWine">Ajouter un vin</button>
	  <button type="button" class="btn btn-default">Partager</button>
	 </div>
    <div class="input-group hidden">
      <input type="text" class="form-control" placeholder="Rechercher">
      <span class="input-group-btn">
      	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Nom <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Millésime</a></li>
          <li><a href="#">Note</a></li>
        </ul>
      </span>
    </div><!-- /input-group -->
  </div>
</div><!-- /.row -->



<div class="clearfix"></div>
<br />

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
            <div class="form-group col-md-4" style="padding-top: 3px;" data-id="<?= $data['wine']['id'] ?>" data-name="<?= $data['wine']['name'] ?>">
            <?php if($note) : ?>
            <?php for($cpt = 1;$cpt<=5;$cpt++) : ?>
			  <span class="glyphicon glyphicon-star<?php if($cpt>$note) : ?>-empty<?php endif ?> addnote" data-val="1" style="font-size: 2em;"></span>
			<?php endfor ?>
			<?php else: ?>
				<span style="color: grey;font-size: 1.5em;">Aucune note</span>
			<?php endif; ?>
            </div>
            <div class="col-md-6" style="padding-top: 8px;">

			  <a href="" class="addnotebtn" data-toggle="modal" data-target="#addNote" data-id="<?= $data['wine']['id'] ?>" data-name="<?= $data['wine']['name'] ?>">Ajouter une note</a>
            </div>
        </div>

       </div>

  		<hr style="margin-top: 0px;" />

  	<div style="padding: 20px;padding-top: 0px;">
  	<?php foreach($data['vintages'] as $vintage => $qty) : ?>
  			<span style="font-size: 1.3em;"><strong><?= $qty ?></strong> bouteilles de <strong><?= $vintage ?></strong></span> - <a href="" class="updatestockbtn" role="button" data-toggle="modal" data-target="#update" data-name="<?= $data['wine']['name'] ?>" data-id="<?= $data['wine']['id'] ?>" data-qty="<?= $qty ?>" data-vintage="<?= $vintage ?>">modifier</a>
  			<br />
  	<?php endforeach; ?>
  	<br />
	  <button class="btn btn-primary addstockbtn" data-name="<?= $data['wine']['name'] ?>" data-id="<?= $data['wine']['id'] ?>" role="button" data-id="<?= $key ?>" data-toggle="modal" data-target="#update">Ajouter un millésime</button>
  	</div>
  	</div>
  </div>
  <?php endif; endforeach; ?>
