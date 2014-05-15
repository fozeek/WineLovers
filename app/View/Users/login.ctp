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

<?= $this->Form->end(array('label' => 'Connexion', 'class' => "btn btn-default")) ?>

<div id="fb-root"></div>
<div id="status"></div>
<button id="fbconnect">Connexion via Facebook</button>