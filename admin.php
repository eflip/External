<?php 

$links = (new ExternalLinks)->cols('remote_addr, link, http_referer')->find();

echo '<table class="table">';
	echo '<tr><th>Remote Address</th><th>Link</th><th>HTTP Referer</th></tr>';
while( $link = $links->get() )
	echo '<tr><td>'.implode('</td><td>', $link).'</td></tr>';
echo '</table>';
