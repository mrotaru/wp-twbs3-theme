# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "trusty-20150907"
  config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/trusty/20150907/trusty-server-cloudimg-amd64-vagrant-disk1.box"
  config.vm.network :forwarded_port, guest: 80, host: 8080

  config.vm.synced_folder "./theme", "/vagrant/wordpress/wp-content/themes/my-theme"

  config.vm.provision :shell do |shell|
    shell.path = "shell/librarian-puppet.sh"
  end

  config.vm.provision :puppet do |puppet|
      puppet.manifests_path = "puppet/manifests"
      puppet.module_path = "puppet/modules"
      puppet.manifest_file  = "init.pp"
      require 'rbconfig'
      if (RbConfig::CONFIG['host_os'] =~ /mswin|mingw|cygwin/)
          puppet.options << " --color=false"
      end
  end
end
