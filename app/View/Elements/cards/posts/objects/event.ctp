<div style="width: 50%;float: left;padding: 15px;padding-top: 0px;padding-right: 0px;cursor: pointer;">
	<div class="thumbnail" style="margin: 0px;" data-name="<?= $event['Event']['name'] ?>" data-image="calendar" data-object="event" data-id="<?= $event['Event']['id'] ?>">
	  <div class="row">
	    <div class="col-md-5">
	      <img src="<?php if(!empty($event['Event']['image'])) : echo '/img/upload/'.$event['Event']['image']; else: ?>http://www.iconpng.com/png/pictograms/serve-wine.png<?php endif ?>" alt="..." class="img-responsive img-rounded">
	    </div> 
	    <div class="col-md-7" style="padding: 0px;padding-right: 5px;"> 
	      <div class="caption" style="padding: 0px;padding-right: 5px;">
	        <h3 style="max-height: 53px;overflow: hidden;font-size: 1.2em;"><a><?= (strlen($event['Event']['name'])>25) ? substr($event['Event']['name'], 0, 25).'...' : $event['Event']['name'] ?></a></h3>
	      </div>
	    </div>
	  </div>
	  
	</div>
</div>