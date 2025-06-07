# Use official PHP image with Apache
FROM php:8.1-apache

# Copy your PHP project into the container
COPY . /var/www/html/

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80
