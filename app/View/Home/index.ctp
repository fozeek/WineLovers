<div class="jumbotron">
  <h1>Welcome to La Bonne Cave</h1>
  <p>Come for a Wine !</p>

  <a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'login')) ?>" role="button">Login</a>
  <a class="btn btn-default" href="<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'signin')) ?>" role="button">Sign in</a>
  <br /><br />
  <a href="<?php echo $this->Html->url(array('controller' => 'wines', 'action' => 'index')) ?>">Wines</a> •
  <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>">Users</a>
</div>


