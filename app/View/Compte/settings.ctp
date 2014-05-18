<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.cellar', 'settings'); ?>

<h2>Informations personnelles</h2>
<form role="form">
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Compte</label>
    </div>
    <div class="form-group col-md-8" style="padding: 5px;margin-bottom: 0px;">
      <label style="margin-left: 20px;">
        <input name="privacy_compte" type="radio"> Public
        <input name="privacy_compte" type="radio" checked="checked" style="margin-left: 20px;"> Privé
      </label>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Courriel</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 5px;">
      <input type="text" class="form-control" value="<?= $user['User']['email'] ?>"/>
      <label style="margin-left: 10px;margin-top: 5px;">
        <input name="privacy_mail" type="radio"> Public
        <input name="privacy_mail" type="radio" checked="checked" style="margin-left: 20px;"> Privé
      </label>
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
      <input type="password" class="form-control" value=""/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Nom</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="password" class="form-control" value=""/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Pseudo</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="password" class="form-control" value=""/>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Nom</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="password" class="form-control" value=""/>
    </div>
  </div>
</form>
<h2>Votre page</h2>
<form role="form">
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="eventwhen">Qui peut poster ?</label>
    </div>
    <div class="form-group col-md-8" style="padding: 5px;margin-bottom: 0px;">
      <label style="margin-left: 20px;">
        <input name="privacy_whocanpost" type="radio"> Tout le monde
        <input name="privacy_whocanpost" type="radio" checked="checked" style="margin-left: 20px;"> Seulement mes amis
      </label>
    </div>
  </div>
</form>