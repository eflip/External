CREATE TABLE `external_links` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `remote_addr` varchar(128) NOT NULL,
 `link` varchar(1024) NOT NULL,
 `http_referer` varchar(1024) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1
