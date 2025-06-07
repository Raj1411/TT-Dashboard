# Use official PHP image with Apache
FROM php:8.1-apache

# Copy your PHP project into the container
COPY . /var/www/html/

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Set working directory (optional)
WORKDIR /var/www/html/

# Set permissions (optional, depending on your app)
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80
EXPOSE 80

# Use Apache's foreground command
CMD ["apache2-foreground"]
