$node_version = "0.12.7"

class { 'nodejs':
  version      => "v${node_version}",
  make_install => false
}

file { '/usr/local/bin/node':
   ensure => 'link',
   target => "/usr/local/node/node-v${node_version}/bin/node",
}

file { '/usr/local/bin/npm':
   ensure => 'link',
   target => "/usr/local/node/node-v${node_version}/lib/node_modules/npm/bin/npm-cli.js",
}
