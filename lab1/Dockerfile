# croftd - simple Dockerfile to create a PHP 7.4 and Apache container pulled from Docker Hub
FROM php:7.4-apache
# copy all the files from current directory into /var/www/html which is where Apache serves
COPY . /var/www/html

EXPOSE 80

# To build a container using this Dockerfile, you'll need the command:
#
# docker build -t apachephp . 
# (or call the container whatever you want, here I am using apachephp)
#
# And then to run and be able to edit files, we use a volume:
#
# docker run --rm -it --volume C:\www\itas255_f20_code -p 8080:80 apachephp
