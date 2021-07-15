FROM mattrayner/lamp:latest-1804-php7
# RUN mkdir app-inside
COPY ./app /app
COPY ./sql /var/lib/mysql-files