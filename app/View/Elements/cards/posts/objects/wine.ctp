<?php
	$bool = false;
	if(isset($ids)) {
		foreach (explode(':', $ids) as $id) {
			if($wine['Wine']['id']==$id) {
				$bool = true;
			}
		}
	}
?>
<div style="width: 50%;float: left;padding: 15px;padding-top: 0px;padding-right: 0px;">
	<div class="thumbnail <?php if($bool) : ?>selected<?php endif ?>" style="margin: 0px;cursor: pointer;<?php if($bool) : ?>background: rgb(206, 222, 253);border-color: blue;<?php endif ?>" data-name="<?= $wine['Wine']['name'] ?>" data-image="glass" data-object="wine" data-id="<?= $wine['Wine']['id'] ?>">
	  <div class="row">
	    <div class="col-md-5">
	      <div class="img-responsive img-rounded img" style="background: url(/img/upload/<?= $wine['Wine']['image'] ?>) center center no-repeat;height: 94px;width: 94px;background-size: cover;">
	      </div>
	    </div> 
	    <div class="col-md-7" style="padding: 0px;padding-right: 5px;"> 
	      <div class="caption" style="padding: 0px;padding-right: 5px;vertical-align: middle;">
	        <h3 style="max-height: 53px;color: <?php if($bool) : ?>blue<?php else : ?>rgb(128, 0, 0)<?php endif ?>;overflow: hidden;font-size: 1.2em;"><?= (strlen($wine['Wine']['name'])>25) ? substr($wine['Wine']['name'], 0, 25).'...' : $wine['Wine']['name'] ?></h3>
	      </div>
	    </div>
	  </div>
	  
	</div>
</div>