<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.feeds', 'active'); ?>

<textarea class="form-control" rows="5" style="margin-bottom: 5px;">Laissez un commentaire</textarea>
<button type="submit" class="btn btn-default pull-right">Publier</button>
<div class="clearfix"></div>
<?php for ($cpt=0;$cpt<8;$cpt++): ?>
	<div class="media">
	  <a class="pull-left" href="#">
	    <img class="media-object" src="http://lorempixel.com/64/64/" alt="...">
	  </a>
	  <div class="media-body">
	    <h4 class="media-heading">Quentin Deneuve</h4>
	    À écrit un article
	    <br /><br />
	    <blockquote>
	    	<p>J'adore ce vin !!! *Hips'*</p>
	    </blockquote>
	  </div>
	</div>

<?php endfor ?>