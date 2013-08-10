exec { "apt_update":
  command => "apt-get update",
  path    => "/usr/bin"
}

class{'git::install':}
class{'apache2::install':}
class{'php5::install':}  
class{'mysql::install':}
class{'wordpress::install':}
include composer

file { '/vagrant/wordpress/wp-content/themes/my-theme/composer.json':
  ensure => file,
  source => '/vagrant/composer.json',
  require => Class['composer']
}

exec { 'get_composer_dependencies':
  command => '/usr/local/bin/composer install',
  cwd    => '/vagrant/wordpress/wp-content/themes/my-theme',
  subscribe => File['/vagrant/wordpress/wp-content/themes/my-theme/composer.json']
}
