exec { "apt-update":
  command => "/usr/bin/apt-get update"
}

class set_env($var, $value) {
  file { "/etc/environment":
    content => inline_template("${var}=${value}")
  }
}

Exec["apt-update"] -> Package <| |>

package {'git': ensure => present } 
package {'build-essential': ensure => present }

import 'mysql.pp'
import 'node.pp'
import 'nginx.pp'
import 'php.pp'
