include php

class { 'php::cli': }

class { 'php::fpm':
  emergency_restart_threshold  => 5,
  emergency_restart_interval   => '1m',
  rlimit_files                 => 32768,
  events_mechanism             => 'epoll'
}
