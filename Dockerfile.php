# Usa un'immagine PHP con Apache compatibile ARM64
FROM php:8.0-apache

# Installa le dipendenze necessarie per PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copia i file del sito PHP nella directory di lavoro del contenitore
COPY . /var/www/html/

# Esponi la porta per il server Apache
EXPOSE 80