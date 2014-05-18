<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.friends', 'active'); ?>

<div class="row">
  <div class="col-md-4">
  	<h2 style="margin-top: 5px;">
		Amis
	</h2>
  </div>
  <div class="col-md-8" style="padding-top: 5px;">

	<div class="btn-group pull-right" style="margin-left: 20px;">
	  <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#requests">Demandes (3)</button>
	  <button type="button" class="btn btn-default">Inviter par Facebook</button>
	 </div>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Rechercher">
      <span class="input-group-btn">
      	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Nom <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Prénom</a></li>
          <li><a href="#">Pseudo</a></li>
        </ul>
      </span>
    </div><!-- /input-group -->
  </div>
</div><!-- /.row -->