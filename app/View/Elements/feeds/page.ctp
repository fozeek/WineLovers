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
				<div class="row" style="margin: 15px;margin-left: 0px;" >
				  <?php foreach($friendsPosts as $friend) : ?>
				   	<div style="width: 50%;float: left;padding: 15px;padding-top: 0px;padding-right: 0px;cursor: pointer;">
						<div class="thumbnail" style="margin: 0px;" data-name="<?= $friend['firstname'] ?> <?= $friend['lastname'] ?>" data-image="user" data-object="user" data-id="<?= $friend['id'] ?>">
						  <div class="row">
						    <div class="col-md-5">
						      <img src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $friend['email'] ) ) ) . '?s=400&d=http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png' ?>" alt="..." class="img-responsive img-rounded">
						    </div> 
						    <div class="col-md-7" style="padding: 0px;padding-right: 5px;"> 
						      <div class="caption" style="padding: 0px;padding-right: 5px;">
						        <h3><a><?= $friend['firstname'] ?> <?= $friend['lastname'] ?></a></h3>
						      </div>
						    </div>
						  </div>
						  
						</div>
					</div>
				  <?php endforeach ?>
				</div>
			</div>
		</div>
		<div class="tab tab-event" style="display: none;">
			<div id="testou" class="results" style="position: relative;max-height: 550px;overflow-y: auto;overflow-x: hidden;">
				<div class="row" style="margin: 15px;margin-left: 0px;" >
				  <?php foreach($eventsPosts as $event) : ?>
				   	<div style="width: 50%;float: left;padding: 15px;padding-top: 0px;padding-right: 0px;cursor: pointer;">
						<div class="thumbnail" style="margin: 0px;" data-name="<?= $event['Event']['name'] ?>" data-image="calendar" data-object="event" data-id="<?= $event['Event']['id'] ?>">
						  <div class="row">
						    <div class="col-md-5">
						      <img src="http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png" alt="..." class="img-responsive img-rounded">
						    </div> 
						    <div class="col-md-7" style="padding: 0px;padding-right: 5px;"> 
						      <div class="caption" style="padding: 0px;padding-right: 5px;">
						        <h3 style="max-height: 53px;overflow: hidden;font-size: 1.2em;"><a><?= (strlen($event['Event']['name'])>25) ? substr($event['Event']['name'], 0, 25).'...' : $event['Event']['name'] ?></a></h3>
						      </div>
						    </div>
						  </div>
						  
						</div>
					</div>
				  <?php endforeach ?>
				</div>
			</div>
		</div>
		<div class="tab tab-wine" style="display: none;">
			<div class="results" style="position: relative;max-height: 550px;overflow-y: auto;overflow-x: hidden;">
				<div class="row" style="margin: 15px;margin-left: 0px;" >
				  <?php foreach($winesPosts as $wine) : ?>
				   	<div style="width: 50%;float: left;padding: 15px;padding-top: 0px;padding-right: 0px;cursor: pointer;">
						<div class="thumbnail" style="margin: 0px;" data-name="<?= $wine['Wine']['name'] ?>" data-image="glass" data-object="wine" data-id="<?= $wine['Wine']['id'] ?>">
						  <div class="row">
						    <div class="col-md-5">
						      <img src="http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png" alt="..." class="img-responsive img-rounded">
						    </div> 
						    <div class="col-md-7" style="padding: 0px;padding-right: 5px;"> 
						      <div class="caption" style="padding: 0px;padding-right: 5px;vertical-align: middle;">
						        <h3 style="max-height: 53px;color: rgb(128, 0, 0);overflow: hidden;font-size: 1.2em;"><?= (strlen($wine['Wine']['name'])>25) ? substr($wine['Wine']['name'], 0, 25).'...' : $wine['Wine']['name'] ?></h3>
						      </div>
						    </div>
						  </div>
						  
						</div>
					</div>
				  <?php endforeach ?>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>
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
<div class="posts-container">
<?php foreach ($posts as $post): ?>
	<?= $this->element('feeds/news', ['post' => $post]) ?>
<?php endforeach ?>
</div>
<?= $this->element('feeds/paginator', ['count' => $countPosts, 'pagePosts' => $pagePosts, 'object' => $object, 'id' => $id]) ?>