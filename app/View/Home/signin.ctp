<form role="form-horizontal" action="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'signin')) ?>" method="post">
  <div class="form-group">
    <label for="pseudo" class="col-sm-2 control-label">Pseudo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Mot de Passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Mot de passe">
    </div>
  </div>
  <div class="form-group">
    <label for="confirmpwd" class="col-sm-2 control-label">Confirmation</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="confirmpwd" placeholder="Confirmer le mot de passe">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lastname" placeholder="Nom">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">Prénom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="firstname" placeholder="Prénom">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Adresse email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="Adresse email">
    </div>
  </div>
  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">Adresse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" placeholder="Adresse">
    </div>
  </div>
  <div class="form-group">
    <label for="zip" class="col-sm-2 control-label">Code Postal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="zip" placeholder="Code postal">
    </div>
  </div>
  <div class="form-group">
    <label for="city" class="col-sm-2 control-label">Ville</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="city" placeholder="Ville">
    </div>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>