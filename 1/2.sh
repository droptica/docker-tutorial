#/bin/bash
docker run -itd --name my-apache -v "${PWD}"/public:/usr/local/apache2/htdocs httpd httpd-foreground


