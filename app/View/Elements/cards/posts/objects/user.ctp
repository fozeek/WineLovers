<div style="width: 50%;float: left;padding: 15px;padding-top: 0px;padding-right: 0px;cursor: pointer;">
	<div class="thumbnail" style="margin: 0px;" data-name="<?= $friend['firstname'] ?> <?= $friend['lastname'] ?>" data-image="user" data-object="user" data-id="<?= $friend['id'] ?>">
	  <div class="row">
	    <div class="col-md-5">
	      <img src="<?php if(!empty($friend['image'])) : echo $friend['image']; else: ?>http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png<?php endif ?>" alt="..." class="img-responsive img-rounded">
	    </div> 
	    <div class="col-md-7" style="padding: 0px;padding-right: 5px;"> 
	      <div class="caption" style="padding: 0px;padding-right: 5px;">
	        <h3><a><?= $friend['firstname'] ?> <?= $friend['lastname'] ?></a></h3>
	      </div>
	    </div>
	  </div>
	  
	</div>
</div>