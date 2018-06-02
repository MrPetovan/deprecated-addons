<?php
/**
 * Name: Calendar with CalDAV Support
 * Description: A web-based calendar system with CalDAV-support. Also brings your Friendica-Contacts to your CardDAV-capable mobile phone. Requires PHP >= 5.3.
 * Version: 0.3.0
 * Author: Tobias Hößl <https://github.com/CatoTH/>
 * Status: Unsupported
 */

$_v = explode(".", phpversion());
if ($_v[0] > 5 || ($_v[0] == 5 && $_v[1] >= 3)) {
	require(__DIR__ . "/friendica/main.php");
}
