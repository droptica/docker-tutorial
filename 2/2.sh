#/bin/bash
docker run -itd --name mysql -e MYSQL_ROOT_PASSWORD=123 mysql:5.6
docker run -itd --link mysql:mysql --name my-apache -v "${PWD}"/public:/var/www/html training/apache 
docker run --name phpmyadmin -d --link mysql:db phpmyadmin/phpmyadmin

