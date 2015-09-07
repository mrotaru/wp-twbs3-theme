$override_options = {
  'mysqld' => {
    'bind-address' => '*',
  }
}

class { '::mysql::server':
  root_password => 'vagrant',
  override_options => $override_options
}

mysql_database { 'wordpress':
  ensure  => 'present',
  charset => 'utf8',
}

mysql_user { 'wordpress@%':
  ensure                   => 'present',
  password_hash            => mysql_password('vagrant'),
  max_connections_per_hour => '0',
  max_queries_per_hour     => '0',
  max_updates_per_hour     => '0',
  max_user_connections     => '0',
}

mysql_grant { 'wordpress@%/wordpress.*':
  ensure     => 'present',
  options    => ['GRANT'],
  privileges => ['ALL'],
  table      => 'wordpress.*',
  user       => 'wordpress@%',
}
