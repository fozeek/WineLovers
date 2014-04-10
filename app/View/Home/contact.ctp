<div>
  <h3>Contactez-nous :</h3>
  	<?= $this->Form->create('Home', array('action' => '', 'role' => 'form-horizontal')) ?>  
  		<?= $this->Form->textarea('notes',array('rows' => '10', 'cols' => '100')); ?>
	<?= $this->Form->end(array('label' => 'Envoyer le message', 'class' => "btn btn-default")) ?>
</div>