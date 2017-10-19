#/bin/bash
echo "docker run -itd --name mysql -e MYSQL_ROOT_PASSWORD=123 mysql:5.6"
echo "docker run -itd -p 80:80 --link mysql:mysql --name my-apache -v "${PWD}"/public:/var/www/html training/apache"
echo "docker run -p 90:80 --name phpmyadmin -d --link mysql:db phpmyadmin/phpmyadmin"

docker run -itd --name mysql -e MYSQL_ROOT_PASSWORD=123 mysql:5.6
docker run -itd --link mysql:mysql --name my-apache -v "${PWD}"/public:/var/www/html training/apache 
docker run --name phpmyadmin -d --link mysql:db phpmyadmin/phpmyadmin

echo "Your website is now available at localhost, phpmyadmin is available at localhost:90"
