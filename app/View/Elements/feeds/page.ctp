<div class="modal fade" id="addObjectToPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="padding: 0px;padding-top: 15px;">
        <!-- Nav tabs -->
		<ul class="nav nav-tabs">
        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 15px;">&times;</button>
		  <li class="active" style="margin-left: 15px;" data-tab="friend"><a href="#friends" data-toggle="tab">Ami</a></li>
		  <li data-tab="event"><a href="#events" data-toggle="tab">Évènement</a></li>
		  <li data-tab="wine"><a href="#wines" data-toggle="tab">Vin</a></li>
		</ul>
		<div class="tab tab-friend">
			<div class="results" style="position: relative;max-height: 550px;overflow-y: auto;overflow-x: hidden;">
				<input class="form-control" style="margin-top: 15px;margin-left: 15px;width: 568px;" placeholder="Rechercher un ami"/>
				<div class="nodata" style="display: none;text-align: center;font-size: 40px;color: #E7E7E7;padding: 20px;">
					Aucun resultat.
				</div>
				<div class="row" style="margin: 15px;margin-left: 0px;margin-bottom: 0px;" >
				  <?php foreach($friendsPosts as $friend) : ?>
				   	<?= $this->element('cards/posts/objects/user', array('friend' => $friend)) ?>
				  <?php endforeach ?>
				</div>
				<div class="paginator" data-page="2" data-object="friends" style="display: none;">
					Chargement ..
				</div>
			</div>
		</div>
		<div class="tab tab-event" style="display: none;">
			<div class="results" style="position: relative;max-height: 550px;overflow-y: auto;overflow-x: hidden;">
				<input class="form-control" style="margin-top: 15px;margin-left: 15px;width: 568px;" placeholder="Rechercher un évènement"/>
				<div class="nodata" style="display: none;text-align: center;font-size: 40px;color: #E7E7E7;padding: 20px;">
					Aucun resultat.
				</div>
				<div class="row" style="margin: 15px;margin-left: 0px;margin-bottom: 0px;" >
				  <?php foreach($eventsPosts as $event) : ?>
				   	<?= $this->element('cards/posts/objects/event', array('event' => $event)) ?>
				  <?php endforeach ?>
				</div>
				<div class="paginator" data-page="2" data-object="events" style="display: none;">
					Chargement ..
				</div>
			</div>
		</div>
		<div class="tab tab-wine" style="display: none;">
			<div class="results" style="position: relative;max-height: 550px;overflow-y: auto;overflow-x: hidden;">
				<input class="form-control" style="margin-top: 15px;margin-left: 15px;width: 568px;" placeholder="Rechercher un vin"/>
				<div class="nodata" style="display: none;text-align: center;font-size: 40px;color: #E7E7E7;padding: 20px;">
					Aucun resultat.
				</div>
				<div class="row" style="margin: 15px;margin-left: 0px;margin-bottom: 0px;" >
				  <?php foreach($winesPosts as $wine) : ?>
				   	<?= $this->element('cards/posts/objects/wine', array('wine' => $wine)) ?>
				  <?php endforeach ?>
				</div>
				<div class="paginator" data-page="2" data-object="wines" style="display: none;">
					Chargement ..
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>
<?php if(!isset($isyou)) : ?>
<form id="post-form" role="form" method="post">
  <div class="form-group">
  	<input type="hidden" class="link_id" value="<?= $id ?>" />
  	<input type="hidden" class="link_object" value="<?= $object ?>" />
  	<input type="hidden" class="attach_id" value="" />
  	<input type="hidden" class="attach_object" value="" />
	<textarea class="form-control text" rows="5" style="margin-bottom: 5px;width: 100%;max-width: 100%;height: 35px;" name="text" data-val="Laisser un message">Laisser un message</textarea>
	<button type="submit" class="btn btn-default pull-right" style="display: none;">Publier</button>
	<div class="btn-group pull-right" style="margin-right: 10px;">
		<button class="btn btn-default addSomething" style="display: none;" data-toggle="modal" data-target="#addObjectToPost">Ajouter</button>
		<button class="btn btn-default removeSomething" style="display: none;"><span class="glyphicon glyphicon-remove"></span></button>
	</div>
  </div>
</form>
<div class="clearfix"></div>
<hr />

<?php endif ?>
<div class="posts-container">
<?php foreach ($news as $actu): ?>
	<?= $this->element('feeds/news', ['actu' => $actu]) ?>
<?php endforeach ?>
</div>
<?= $this->element('feeds/paginator', ['count' => $countPosts, 'pagePosts' => $pagePosts, 'object' => (isset($object)) ? $object: false, 'id' => (isset($id)) ? $id: false, 'conditions' => (isset($conditions)) ? $conditions: false]) ?>