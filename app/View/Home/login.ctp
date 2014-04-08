<form role="form" action="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'login')) ?>" method="post">
  <div class="form-group">
    <label for="email">Adresse email</label>
    <input type="text" class="form-control" name="email" placeholder="Saisir email">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="password" placeholder="Mot de passe">
  </div>
  <?php echo $this->Session->flash() ?>
  <button type="submit" class="btn btn-default">Submit</button>
</form>