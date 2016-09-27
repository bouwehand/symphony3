Chocolate Factory
=================
#I wanna be with the oempa loempa's!


A Symfony project created on September 28, 2016, 12:01 am.

clear cache and logs:
`rm -rf var/cache/*`
`rm -rf var/logs/*`

RUN in root for linux file system:
`sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var`