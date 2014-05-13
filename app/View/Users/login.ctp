<?= $this->Html->script('facebook', array('inLine' => false)) ?>
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

<?= $this->Form->end(array('label' => 'Connexion', 'class' => "btn btn-default")) ?>

<div id="fb-root"></div>
<div id="status"></div>
<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>