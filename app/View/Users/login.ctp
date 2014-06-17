<h2>Connexion<a href="<?= $this->Html->url(array('controller' => 'users', 'action' => 'signin')) ?>"><button class="btn btn-default" style="margin-left: 30px;">Inscription</button></a></h2>
    
<div class="row">
  <div class="col-md-6"> 
    <h3>Via courriel</h3>
    <? echo $this->Session->flash(); ?>
    <br />
    <?= $this->Html->script('facebook', array('inline' => false)) ?>
    <?= $this->Form->create('User', array('action' => 'login', 'role' => 'form')) ?>

      <?= $this->Form->input('email', array(
            'div' => array('class' => 'form-group'), 
            'label' => array('text' => 'Adresse email'),  
            'class' => 'form-control', 
            'placeholder' => 'Adresse email')
          ) ?>

      <?= $this->Form->input('password', array(
            'div' => array('class' => 'form-group'), 
            'label' => array('text' => 'Mot de passe'),
            'type' => 'password',  
            'class' => 'form-control', 
            'placeholder' => 'Mot de passe')
          ) ?>
    <?= $this->Form->end(array('label' => 'Connexion', 'class' => "btn btn-success")) ?>

    
  </div>
  <div class="col-md-6">
    <h3>Via Facebook</h3>
    <br />
    <div id="fb-root"></div>
    <div id="status"></div>
    <button id="fbconnect" class="btn btn-primary btn-lg ">Connexion via Facebook</button>
  </div>
</div>
<br /><br />