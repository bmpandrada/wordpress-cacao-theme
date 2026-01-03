FROM wordpress:php8.2-apache

# copy your theme into wp-content/themes
COPY . /var/www/html/wp-content/themes/cacao-theme
