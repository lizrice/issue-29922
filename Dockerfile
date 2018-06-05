FROM wordpress:latest

ARG WORDPRESS_URL 

COPY wp-config.php /var/www/html/
RUN rm -rf /var/www/html/index.html

ADD zen-mobile-app-native.tar.gz /var/www/html/wp-content/plugins

# https://github.com/moby/moby/issues/29922 means the following doesn't currently work
RUN chown -R 33:33 /var/www/html \
    && chmod -R 755 /var/www/html/wp-content/plugins \
    && echo "Using WORDPRESS_URL: " $WORDPRESS_URL \
    && ls -l /var/www/html/wp-content/plugins \
    && sed -i -e 's/aqua_wordpress_url/'"$WORDPRESS_URL"'/g' /var/www/html/wp-content/plugins/zen-mobile-app-native/server/admin_nta/db.php \
    && sed -i -e 's/aqua_wordpress_url/'"$WORDPRESS_URL"'/g' /var/www/html/wp-content/plugins/zen-mobile-app-native/server/function.php 
