# Базовый образ с nginx и php
FROM richarvey/nginx-php-fpm:latest

# Добавляем наше веб приложение
ADD ./ /var/www/app

# Удаляем конфиги сайтов которые там есть
RUN rm -Rf /etc/nginx/sites-enabled/*

# Добавляем наш конфиг
ADD docker/conf/nginx/gb-yii.conf /etc/nginx/sites-available/gb-yii.conf
# Включаем его
RUN ln -s /etc/nginx/sites-available/gb-yii.conf /etc/nginx/sites-enabled/gb-yii.conf