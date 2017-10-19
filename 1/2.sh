#/bin/bash
echo "docker run -itd -p 80:80 --name my-apache -v "${PWD}"/public:/usr/local/apache2/htdocs httpd httpd-foreground"

docker run -itd -p 80:80 --name my-apache -v "${PWD}"/public:/usr/local/apache2/htdocs httpd httpd-foreground


