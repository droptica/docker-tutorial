#/bin/bash


echo "docker build -t training/apache ."
docker build -t training/apache .

echo "docker run -itd -p 80:80 --name my-apache -v "${PWD}"/public:/var/www/html training/apache"
docker run -itd -p 80:80 --name my-apache -v "${PWD}"/public:/var/www/html training/apache 


