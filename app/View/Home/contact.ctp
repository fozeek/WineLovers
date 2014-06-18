<div>
  <h3>Contactez-nous :</h3>
  	<? echo $this->Session->flash(); ?><br/>
  	<?= $this->Form->create(null, array('url' => array('controller' => 'home', 'action' => 'sendEmail'), 'role' => 'form-horizontal')) ?>  
	  	<?= $this->Form->input('email', array(
	      'div' => array('class' => 'form-group'),
	      'type' => 'email', 
	      'label' => array(
	        'class' => 'col-sm-2 control-label', 
	        'text' => 'Adresse email'),  
	      'class' => 'form-control', 
	      'placeholder' => 'Adresse email', 
	      'between' => '<div class="col-sm-10">', 
	      'after' => '</div>')
	    ) ?>
  		<?= $this->Form->textarea('notes',array(
  		  'rows' => '10',
	      'style' => 'width :515px',
  		  'class' => 'form-control')
  		) ?><br/>
	<?= $this->Form->end(array('label' => 'Envoyer le message', 'class' => "btn btn-default")) ?>
</div>