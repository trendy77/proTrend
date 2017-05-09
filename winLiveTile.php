<?php 
/// WINDOWS LIVE TILES FOR WEBISTEs 
$url = home_url();
$name = bloginfo('name');

		$config = $config[$identifier];
	    $user = $config['user'];
	    $this->_pass = $config['pass'];
	    $url = $config['url'];
$id = config['identifier'];
$picpath = site_url( '/ombiz/', 'https' );
$picpath = $picpath . $id . '/';
?>
<meta name="application-name" content="<?php echo $name; ?>"/>
<meta name="msapplication-square70x70logo" content="<?php echo $picpath; ?>small.jpg"/>
<meta name="msapplication-square150x150logo" content="<?php echo $picpath; ?>medium.jpg"/>
<meta name="msapplication-wide310x150logo" content="<?php echo $picpath; ?>wide.jpg"/>
<meta name="msapplication-square310x310logo" content="<?php echo $picpath; ?>large.jpg"/>
<meta name="msapplication-TileColor" content="#ffffff"/>
<meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=<?php echo $url; ?>/feed&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=<?php echo $url;?>/feed&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=<?php echo $url; ?>/feed&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=<?php echo $url; ?>/feed&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=<?php echo $url;?>/feed&amp;id=5; cycle=1"/>
