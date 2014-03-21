<h2>Wines</h2>
  <p><a class="btn btn-primary btn-lg" role="button" href="/pages/wines">Add a wine</a></p>
<?php for($cpt = 0;$cpt<10;$cpt++) : ?>
	<div style="boder: 1px solid grey;padding: 5px;background: #E5E5E5;float: left;margin: 9px;border-radius: 6px;">
		<img src="http://lorempixel.com/200/200/" style="background: #F9F9F9;padding: 2px;border: 1px solid #ccc;border-radius: 3px;height: 200px;width: 200px;"/>
		<div style="text-align: center;">
			<a href="/pages/wine/">
				<h4 style="color: red;">
					Rouge sang
				</h4>
			</a>
		</div>
	</div>
<?php endfor ?>

<div style="clear: both;"></div>