# codeigniter-trusted-hosts
In case you want to leave the base_url configuration empty for portability, 
it involves a risk.

##  Host Header Injection issue in CodeIgniter
http://www.skeletonscribe.net/2013/05/practical-http-host-header-attacks.html

http://carlos.bueno.org/2008/06/host-header-injection.html  
	
To avoid security issues, you may want to configure a list of "trusted hosts". 
(for multi-domain sites) where you add all domains than you use for your project.

This code overwrite the way than core/Config.php of CodeIgniter guess your
current domain by checking a list of trusted host first and changing the value
of base_url if not.
	
## Example
```
$config['trusted_hosts'] = array('localhost', 'my.development.com', 'my.production.com');
```

If your domain is: 
```
mydomain.com
```

And HTTP_HOST header is: 
```
evilhacker.com
```

Test: application/views/test.php
```
<?php
echo site_url("my_secret/12345");
```

Without codeigniter-trusted-hosts will show:
```
http://evilhacker.com/my_secret/12345
```

With codeigniter-trusted-hosts will show:
```
http://localhost/my_secret/12345
```
**sorry hacker, not today**