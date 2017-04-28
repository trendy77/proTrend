<?php
/// WINDOWS LIVE TILES FOR WEBISTEs

<meta name="application-name" content="<?php bloginfo('name'); ?>"/>
<meta name="msapplication-square70x70logo" content="small.jpg"/>
<meta name="msapplication-square150x150logo" content="medium.jpg"/>
<meta name="msapplication-wide310x150logo" content="wide.jpg"/>
<meta name="msapplication-square310x310logo" content="large.jpg"/>
<meta name="msapplication-TileColor" content="#ffffff"/>
<meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=<?php $url = home_url(); echo $url;?>/feed&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=<?php $url = home_url(); echo $url;?>/feed&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=<?php $url = home_url(); echo $url;?>/feed&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=<?php $url = home_url(); echo $url;?>/feed&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=<?php $url = home_url(); echo $url;?>/feed&amp;id=5; cycle=1"/>
