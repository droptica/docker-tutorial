#/bin/bash
docker run -itd --name my-apache -v "${PWD}"/public:/var/www/html prez/apache 


