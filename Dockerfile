#Pasos para ejecutar app en docker
#sudo docker pull php:8.0.3-apache
#sudo docker build -t ecommerce-ropa .
#sudo docker run -p 8080:80 -d ecommerce-ropa

#Descarga la imagen de docker php+apache
FROM php:8.0.3-apache

#Copia los archivos hacia la ruta de apache del contenedor
COPY . /var/www/html

#Expone el puerto 80 del docker para acceder
EXPOSE 80