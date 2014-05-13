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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=245395472314748&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>