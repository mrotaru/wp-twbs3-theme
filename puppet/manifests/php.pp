include php

php::config { 'cgi.fix_pathinfo=0':
  file    => '/etc/php5/fpm/php.ini',
  section => 'PHP',
}

class { 'php::cli': }

class { 'php::fpm': }
