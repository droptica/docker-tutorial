#/bin/bash
docker build -t training/apache .
docker run -itd --name my-apache -v "${PWD}"/public:/var/www/html training/apache 


