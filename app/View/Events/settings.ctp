<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('settings.likes', 'active'); ?>



<form enctype="multipart/form-data" method="post" action="<?= $this->Html->url(array("controller" => "events", "action" => "update")) ?>" role="form">
  <input type="hidden" name="id" value="<?= $event['Event']['id'] ?>"/>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="description">Description</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 5px;">
      <textarea name="description" id="description" class="form-control" rows="6"><?= $event['Event']['description'] ?></textarea><br />
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
    <label for="image">Image</label>
    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0px;">
      <input type="file" name="image" id="image"/>
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