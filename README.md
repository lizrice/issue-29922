# issue-29922
Repro scenario for https://github.com/moby/moby/issues/29922

Build - note output from ls -l 
```
vagrant@vagrant$ docker build -t wordpress:repro .
Sending build context to Docker daemon  3.846MB
Step 1/3 : FROM wordpress:latest
 ---> cc04fd2e885d
Step 2/3 : ADD zen-mobile-app-native.tar.gz /var/www/html/wp-content/plugins
 ---> 8ed8bd6ed910
Step 3/3 : RUN chown -R 33:33 /var/www/html     && chmod -R 755 /var/www/html/wp-content/plugins     && ls -l /var/www/html/wp-content/plugins
 ---> Running in 0710659175e3
total 4
drwxr-xr-x 7 www-data www-data 4096 Jun  5 18:58 zen-mobile-app-native
Removing intermediate container 0710659175e3
 ---> f419ea9f1c6c
Successfully built f419ea9f1c6c
Successfully tagged wordpress:repro
```

Doesn't look the same inside the container
```
vagrant@vagrant$ docker run -it wordpress:repro /bin/bash
root@5ce208413e37:/var/www/html# ls -l wp-content/plugins/
total 4
drwx------ 7 1000 1000 4096 Jun  5 18:59 zen-mobile-app-native
root@5ce208413e37:/var/www/html#
```

Docker system info
```
vagrant@vagrant:/attacks_lab/Wordpress/Image/compose$ docker system info
Containers: 41
 Running: 5
 Paused: 0
 Stopped: 36
Images: 122
Server Version: 18.05.0-ce
Storage Driver: overlay2
 Backing Filesystem: extfs
 Supports d_type: true
 Native Overlay Diff: true
Logging Driver: json-file
Cgroup Driver: cgroupfs
Plugins:
 Volume: local
 Network: bridge host macvlan null overlay
 Log: awslogs fluentd gcplogs gelf journald json-file logentries splunk syslog
Swarm: inactive
Runtimes: runc
Default Runtime: runc
Init Binary: docker-init
containerd version: 773c489c9c1b21a6d78b5c538cd395416ec50f88
runc version: 4fc53a81fb7c994640722ac585fa9ca548971871
init version: 949e6fa
Security Options:
 apparmor
 seccomp
  Profile: default
Kernel Version: 4.4.0-92-generic
Operating System: Ubuntu 16.04.4 LTS
OSType: linux
Architecture: x86_64
CPUs: 1
Total Memory: 992.3MiB
Name: vagrant
ID: Y2JT:FORY:PDCP:AQ6Z:2EFY:HOUO:PGNW:FZPY:IR4H:A7UE:OXEI:OJQS
Docker Root Dir: /var/lib/docker
Debug Mode (client): false
Debug Mode (server): false
Username: lizrice
Registry: https://index.docker.io/v1/
Labels:
Experimental: false
Insecure Registries:
 127.0.0.0/8
Live Restore Enabled: false

WARNING: No swap limit support
```
