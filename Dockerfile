FROM php:8.2-apache

# نسخ ملف البوت إلى مجلد السيرفر الافتراضي
COPY index.php /var/www/html/index.php

# تفعيل المنفذ الافتراضي لـ Render
EXPOSE 80
