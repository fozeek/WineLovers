<div class="page-header">
  <h1>Utilisateurs <small></small></h1>
</div>

<div class="row">
  <?php foreach($users as $user) : ?>
    <?= $this->element('cards/user', ['user' => $user, 'size' => 3]) ?>
  <?php endforeach ?>
</div>