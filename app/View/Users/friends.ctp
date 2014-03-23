<?php $this->extend('Elements/layout'); ?>
<?php $this->assign('active.friends', 'active'); ?>
<?php for ($cpt=0;$cpt<8;$cpt++): ?>
	<div class="media">
	  <a class="pull-left" href="#">
	    <img class="media-object" src="http://lorempixel.com/64/64/" alt="...">
	  </a>
	  <div class="media-body">
	    <h4 class="media-heading">Quentin Deneuve</h4>
	    À écrit un article
	    <br /><br />
	    <blockquote>
	    	<p>Ut enim ad minim veniam,
	    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	    	<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
	    </blockquote>
	  </div>
	</div>

<?php endfor ?>