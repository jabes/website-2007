# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.hostname = "website-2007.dev"
	config.vm.network "private_network", ip: "192.168.2.10"
	config.vm.synced_folder "./www", "/var/www/public", :mount_options => ["dmode=777", "fmode=666"]

	config.vm.provision "shell", path: "provision.sh", privileged: false

	config.vm.provider "virtualbox" do |v|
      v.name = config.vm.hostname
      v.customize ["modifyvm", :id, "--memory", 1024]
      v.customize ["modifyvm", :id, "--cpus", 1]
      v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
      v.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
    end

end
