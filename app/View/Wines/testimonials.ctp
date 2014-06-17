<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.testimonials', 'active'); ?>
  <?php foreach($wine['Reviews'] as $review) : ?>
  <div class="row">
    <div class="col-md-2" style="padding-top: 23px;">
      <img src="<?= 'http://www.gravatar.com/avatar/' . md5( strtolower( trim( $review['Author']['email'] ) ) ) . '?s=400&d=http://chicagoluvbiz.com/wp-content/uploads/2014/01/wine-icon.png' ?>" alt="..." class="img-responsive img-rounded">
    </div> 
    <div class="col-md-2" style="padding: 0px;padding-right: 5px;"> 
      <div class="caption" style="padding: 0px;padding-right: 5px;">
        <h3><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'feeds', 'pseudo' => $review['Author']['slug'])); ?>"><?= $review['Author']['name'] ?></a></h3>
      </div>
    </div>

    <div class="col-md-7" style="padding-top: 23px;">
  		<?php for($cpt = 1;$cpt<=5;$cpt++ ) : ?>
			<span class="glyphicon glyphicon-star<?php if($review['note']<$cpt) : ?>-empty<?php endif ?>" style="font-size: 1.6em;"></span>
  		<?php endfor ?>
  		<br />
  		<?= $review['comment'] ?>
	</div>

  </div>
  <?php endforeach ?>