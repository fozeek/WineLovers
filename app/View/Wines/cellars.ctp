<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.cellars', 'active'); ?>

<?php 

	// Suppression des doublons
    $ids = [];
    $return = [];
    foreach ($wine['Cellars'] as $key => $user) {
        if(!in_array($user['id'], $ids)) {
            $ids[] = $user['id'];
            $return[] = $user;
        }
    }

?>

<div class="row">
  <?php foreach($return as $user) : ?>
  	<?= $this->element('cards/user', array('user' => $user, 'size' => 4)) ?>
  <?php endforeach ?>
</div>