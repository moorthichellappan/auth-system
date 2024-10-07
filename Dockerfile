# Use the official PHP image with Apache
FROM php:8.1-apache

# Install necessary extensions for PHP and MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite for URL rewriting if necessary
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy the current directory to the working directory
COPY . /var/www/html

# Set the permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
