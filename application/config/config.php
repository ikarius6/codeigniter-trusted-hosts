<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Trusted Hosts
|--------------------------------------------------------------------------
|
| In case you want to leave the base_url configuration empty for portability,
| it involves a risk:
|
| http://www.skeletonscribe.net/2013/05/practical-http-host-header-attacks.html	
|
| To avoid security issues, you may want to configure a list of "trusted hosts".
| (for dev and test environments or multi-domain sites)
|
| Elements of this list imply you accept any subdomain it has. 
| For example domain.com also accepts <whatever.>domain.com
|
| Array:		array('localhost', 'my-development.com', 'my-production.com', 'subdomain.domain.com')
|
*/

$config['trusted_hosts'] = array();
