<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.events', 'active'); ?>
<?php $this->Html->script('pages/comptes/events', array('inline'=>false)); ?>

<div class="modal fade" id="createEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Créer un évènement</h4>
      </div>
      <input type="hidden" id="ids"/>
      <div class="modal-body" style="padding-bottom: 1px;">
        <form role="form">
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
              <label for="eventname">Nom de l'évènement</label>
            </div>
            <div class="form-group col-md-8">
              <input type="text" id="eventname" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
            <label for="eventdesc">Description</label>
            </div>
            <div class="form-group col-md-8">
            <textarea id="eventdesc" class="form-control"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
            <label for="eventlocation">Où</label>
            </div>
            <div class="form-group col-md-8">
            <input id="eventlocation" class="form-control"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
            <label for="eventdate">Quand</label>
            </div>
            <div class="form-group col-md-8">
            <input type="text" id="eventdate" class="form-control"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4" style="padding: 5px;text-align: right;">
            <label>Privacité</label>
            </div>
            <div class="form-group col-md-8" style="padding: 5px;margin-bottom: 0px;">
              <label style="margin-left: 20px;">
                <input name="privacy" value="0" class="eventprivacy" type="radio"> Public
                <input name="privacy" value="1" class="eventprivacy" type="radio" checked="checked" style="margin-left: 20px;"> Privé
                <p class="help-block">En Public, tout le monde peut rejoindre l'évènement.<br />En Privé, seul les invités le peuvent.</p>
              </label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="eventcreatebtn" type="button" class="btn btn-primary">Créer l'évènement</button>
      </div>
    </div>
  </div>
</div>

<div class="btn-group pull-right">
  <div class="btn-group pull-right" style="margin-left: 20px;">
    <button class="btn btn-default" role="button" data-toggle="modal" data-target="#invits">Invitations (0)</button>
    <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#createEvent">Créer un évènement</button>
   </div>
</div>
<h2 style="margin-top: 5px;">
	Mes évènements
</h2>
<div class="clearfix"></div>
<h3>Mes évènements créés</h3>
<div class="row">
  <?php foreach($user['CreatedEvent'] as $event) : ?>
    <?= $this->element('cards/event', ['event' => $event, 'size' => 3]) ?>
  <?php endforeach ?>
  <?php ?>
  <?php if(count($user['CreatedEvent']) == 0) : ?>
    <div class="alert alert-info">vous n'avez pas encore créé d'évènement.</div>
  <?php endif ?>
</div>

<h3>Mes participations</h3>
<div class="row">
  <?php foreach($user['JoinedEvent'] as $event) : ?>
    <?= $this->element('cards/event', ['event' => $event, 'size' => 3]) ?>
  <?php endforeach ?>
  <?php if(count($user['JoinedEvent']) == 0) : ?>
    <div class="alert alert-info">vous n'avez pas encore rejoins d'évènement.</div>
  <?php endif ?>
</div>