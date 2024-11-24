FROM httpd:2.4

# Cài đặt các package cần thiết
RUN apt-get update && apt-get install -y \
    iputils-ping \
    libapache2-mod-php

# Tạo thư mục log và cấp quyền cho Apache để ghi vào thư mục này
RUN mkdir -p /var/log/apache2 && \
    chown -R www-data:www-data /var/log/apache2

# Kiểm tra và đảm bảo module mod_unixd đã được bật (nếu cần thiết)
RUN sed -i '/mod_unixd.so/s/^#//g' /usr/local/apache2/conf/httpd.conf

# Sao chép file cấu hình Apache vào container
COPY apache/default.conf /usr/local/apache2/conf/httpd.conf

# Sao chép mã nguồn vào thư mục web của Apache
COPY src/ /var/www/html/

# Mở cổng 80 cho container
EXPOSE 80

# Lệnh khởi động Apache trong chế độ foreground
CMD ["httpd-foreground"]