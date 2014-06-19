<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.settings', 'active'); ?>

<h2>Informations personnelles</h2>
      <br /><br />
<form role="form">
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Courriel</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 5px;">
      <input type="text" class="form-control" value="<?= $user['User']['email'] ?>"/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Mot de passe</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="password" class="form-control" value=""/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Prénom</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="text" class="form-control" value="<?= $user['User']['firstname'] ?>"/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Nom</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="text" class="form-control" value="<?= $user['User']['lastname'] ?>"/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Address</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="text" class="form-control" value="<?= $user['User']['address'] ?>"/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Description</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <textarea class="form-control" ><?= $user['User']['description'] ?></textarea>
      <br />
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Image</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="file" name="image"/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <button role="button" type="submit" class="btn btn-success">Sauvegarder</button>
      <br /><br />
    </div>
  </div>
</form>