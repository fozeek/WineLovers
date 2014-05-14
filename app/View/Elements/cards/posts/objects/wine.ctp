<div style="width: 50%;float: left;padding: 15px;padding-top: 0px;padding-right: 0px;">
	<div class="thumbnail" style="margin: 0px;cursor: pointer;" data-name="<?= $wine['Wine']['name'] ?>" data-image="glass" data-object="wine" data-id="<?= $wine['Wine']['id'] ?>">
	  <div class="row">
	    <div class="col-md-5">
	      <div class="img-responsive img-rounded" style="background: url(<?= $wine['Wine']['image'] ?>) center center no-repeat;height: 94px;width: 94px;background-size: cover;">
	      </div>
	    </div> 
	    <div class="col-md-7" style="padding: 0px;padding-right: 5px;"> 
	      <div class="caption" style="padding: 0px;padding-right: 5px;vertical-align: middle;">
	        <h3 style="max-height: 53px;color: rgb(128, 0, 0);overflow: hidden;font-size: 1.2em;"><?= (strlen($wine['Wine']['name'])>25) ? substr($wine['Wine']['name'], 0, 25).'...' : $wine['Wine']['name'] ?></h3>
	      </div>
	    </div>
	  </div>
	  
	</div>
</div>