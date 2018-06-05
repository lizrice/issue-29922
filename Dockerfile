FROM wordpress:latest

ADD zen-mobile-app-native.tar.gz /var/www/html/wp-content/plugins

# https://github.com/moby/moby/issues/29922 means the following doesn't currently work
RUN chown -R 33:33 /var/www/html \
    && chmod -R 755 /var/www/html/wp-content/plugins \
    && ls -l /var/www/html/wp-content/plugins 
