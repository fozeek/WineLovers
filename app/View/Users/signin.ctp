<?= $this->Form->create('User', array('action' => 'signin', 'role' => 'form-horizontal', 
                  'inputDefaults' => array(
                  'error' => array(
                    'attributes' => array(
                      'wrap' => 'label', 
                      'class' => 'alert alert-danger'
                    )
                )))
  ) ?>
  
  <?= $this->Form->input('pseudo', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Pseudo'),  
      'class' => 'form-control', 
      'placeholder' => 'Pseudo', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

  <?= $this->Form->input('password', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Mot de Passe'), 
      'type' => 'password', 
      'class' => 'form-control', 
      'placeholder' => 'Mot de passe', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

  <?= $this->Form->input('confirmpwd', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Confirmation'), 
      'type' => 'password', 
      'class' => 'form-control', 
      'placeholder' => 'Confirmer le mot de passe', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

  <?= $this->Form->input('lastname', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Nom'),  
      'class' => 'form-control', 
      'placeholder' => 'Nom', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

  <?= $this->Form->input('firstname', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Prénom'),  
      'class' => 'form-control', 
      'placeholder' => 'Prénom', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

  <?= $this->Form->input('email', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Adresse email'),  
      'class' => 'form-control', 
      'placeholder' => 'Adresse email', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

  <?= $this->Form->input('address', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Adresse'),  
      'class' => 'form-control', 
      'placeholder' => 'Adresse', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

  <?= $this->Form->input('zip', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Code Postal'),  
      'class' => 'form-control', 
      'placeholder' => 'Code Postal', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

  <?= $this->Form->input('city', array(
      'div' => array('class' => 'form-group'), 
      'label' => array(
        'class' => 'col-sm-2 control-label', 
        'text' => 'Ville'),  
      'class' => 'form-control', 
      'placeholder' => 'Ville', 
      'between' => '<div class="col-sm-10">', 
      'after' => '</div>')
    ) ?>

<?= $this->Form->end(array('label' => 'Inscription', 'class' => "btn btn-default")) ?>