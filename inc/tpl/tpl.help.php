<?php
require_once '../class.Frontend.php';

$Frontend = new Frontend();
?>
<div class="panel-heading">
	<h1>Runalyze v<?php echo RUNALYZE_VERSION; ?></h1>
</div>
<div class="panel-content">
	<p class="text">
		<?php _e('Runalyze is completely configurable and more detailed than any other tool for analyzing your activities.'); ?>
	</p>

	<p class="text">
		<?php printf( __('Please look at our official website %s to get an overview of our features.'), '<a href="http://blog.runalyze.com/">blog.runalyze.com</a>'); ?><br>
		<?php printf( __('If you want to stay up to date on changes and receive tips from time to time, visit our blog at %s.'), '<a href="http://blog.runalyze.com/blog/">blog.runalyze.com/blog/</a>'); ?>
	</p>

	<p class="text">
		<?php _e('Runalyze is an open-source project. We are working on it as much as we can in our free time.'); ?><br>
		<?php _e('Official developers:'); ?>
		<a href="http://www.laufhannes.de/" title="Laufblog: Laufhannes">Hannes Christiansen</a>,
		<a href="http://mipapo.de/" title="Mipapo: Michael Pohl">Michael Pohl</a>
	</p>
</div>


<div class="panel-heading panel-sub-heading">
	<h1><?php _e('Configuration'); ?></h1>
</div>
<div class="panel-content">
	<p class="text">
		<?php _e('The main advantage of Runalyze is the ability to adapt everything to your personal needs and wishes.'); ?>
		<?php _e('Have a look at the configuration window to see what we\'re talking about.'); ?>
		<?php _e('You can define your own sports or activity types and choose your own way of presentation and configure some parameters of our experimental calculations.'); ?>
	</p>
</div>


<div class="panel-heading panel-sub-heading">
	<h1><?php _e('Support'); ?></h1>
</div>
<div class="panel-content">
	<p class="text">
		<?php _e('Please let us know if you have wishes or have encountered bugs.'); ?>
		<?php _e('We give our best to make Runalyze as good as possible for you. - Therefore we would be interested in your suggestions for improvement.'); ?>
		<?php _e('In general most questions, problems and ideas are more appropriate to ask in the forum.'); ?>
	</p>

	<ul class="blocklist blocklist-inline clearfix">
		<li><a href="http://forum.runalyze.com" title="Board: Runalyze"><i class="fa fa-comments"></i> <strong><?php _e('Forum'); ?></strong></a></li>
		<li><a href="http://help.runalyze.com" title="Runalyze"><i class="fa fa-question"></i> <strong><?php _e('Documentation'); ?></strong></a></li>
		<li><a href="https://github.com/Runalyze/Runalyze" title="GitHub: Runalyze"><i class="fa fa-github-alt"></i> <strong>GitHub</strong></a></li>
		<li><a href="http://twitter.com/RunalyzeDE" title="Runalyze"><i class="fa fa-twitter color-twitter"></i> <strong>Twitter</strong></a></li>
		<li><a href="http://facebook.com/Runalyze" title="Runalyze"><i class="fa fa-facebook color-facebook"></i> <strong>Facebook</strong></a></li>
		<li><a href="https://plus.google.com/communities/116260192529858591171" title="Runalyze"><i class="fa fa-google-plus color-google-plus"></i> <strong>Google+</strong></a></li>
	</ul>
	
	<p class="text">
		<?php _e('In a case of urgency you can contact us via email:'); ?> <a href="mailto:support@runalyze.com" title="Support">support@runalyze.com</a>.
	</p>
</div>

<div class="panel-heading panel-sub-heading">
	<h1><?php printf( __('Browser Support')); ?></h1>
</div>
<div class="panel-content">
	<?php printf( __('Runalyze is a modern application and therefore we want to use the most modern web techniques. We will not try to support any outdated browser versions.')); ?>
	<ul>
		<li><?php printf( __('e.g. jQuery 2.x does not support IE8 (or less)')); ?></li>
	</ul>
</div>

<div class="panel-heading panel-sub-heading">
	<h1><?php printf( __('Credits')); ?></h1>
</div>
<div class="panel-content">
	<ul>
		<li>
			<strong>Icons</strong>
			<ul>
				<li>Font Awesome by Dave Gandy - <a class="external" href="http://fontawesome.io/">http://fontawesome.io/</a></li>
				<li>Forecast Font by Ali Sisk - <a class="external" href="http://forecastfont.iconvau.lt/">http://forecastfont.iconvau.lt/</a></li>
				<li>Icons8 Font by VisualPharm - <a class="external" href="http://icons8.com">http://icons8.com/</a></li>
			</ul>
		</li>
		<li>
			<strong>Elevation data from Shuttle Radar Topography Mission</strong>
			<ul>
				<li>SRTM tiles grabbed via Derek Watkins - <a class="external" href="http://dwtkns.com/srtm/">http://dwtkns.com/srtm/</a></li>
				<li>SRTM files by International Centre for Tropical  Agriculture (CIAT) - <a class="external" href="http://srtm.csi.cgiar.org/">http://srtm.csi.cgiar.org/</a></li>
				<li>SRTMGeoTIFFReader by Bob Osola - <a class="external" href="http://www.osola.org.uk/elevations/index.htm">http://www.osola.org.uk/elevations/index.htm</a></li>
			</ul>
		</li>
		<li>
			<strong>jQuery</strong> by jQuery Foundation, Inc. - <a class="external" href="http://jquery.org/">http://jquery.org/</a>
			<ul>
				<li>Bootstrap Tooltip by Twitter, Inc. - <a class="external" href="http://twitter.github.com/bootstrap/javascript.html#tooltips">http://twitter.github.com/bootstrap/javascript.html#tooltips</a></li>
				<li>Flot by IOLA and Ole Laursen - <a class="external" href="http://www.flotcharts.org/">http://www.flotcharts.org/</a></li>
				<li>Leaflet by Vladimir Agafonkin - <a class="external" href="http://leafletjs.com/">http://leafletjs.com/</a></li>
				<li>FineUploader by Widen Enterprises, Inc. <a class="external" href="https://github.com/Widen/fine-uploader">https://github.com/Widen/fine-uploader</a>
				<li>Tablesorter by Christian Bach - <a class="external" href="http://tablesorter.com/docs/">http://tablesorter.com/docs/</a></li>
				<li>Datepicker by Stefan Petre - <a class="external" href="http://www.eyecon.ro/">http://www.eyecon.ro/</a></li>
				<li>Chosen by Patrick Filler for Harvest - <a class="external" href="http://getharvest.com">http://getharvest.com</a></li>
				<li>FontIconPicker by Alessandro Benoit &amp; Swashata Ghosh <a class="external" href="http://codeb.it">http://codeb.it</a></li>
			</ul>
		</li>
		<li>
			<strong>Miscellaneaous</strong>
			<ul>
				<li>phpFastCache by Khoa Bui - <a class="external" href="https://github.com/khoaofgod/phpfastcache">https://github.com/khoaofgod/phpfastcache</a></li>
				<li>Garmin Communicator by Garmin Ltd. - <a class="external" href="http://developer.garmin.com/web-device/garmin-communicator-plugin/">http://developer.garmin.com/web-device/garmin-communicator-plugin/</a></li>
				<li>Weather data from OpenWeatherMap - <a class="external" href="http://openweathermap.org/">http://openweathermap.org</a></li>
				<li>Linux TomTom GPS Watch Utilities - <a class="external" href="https://github.com/ryanbinns/ttwatch">https://github.com/ryanbinns/ttwatch</a></li>
			</ul>
		</li>
	</ul>
</div>
