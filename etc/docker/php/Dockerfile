FROM php:7.2-fpm

# Set locales
RUN apt-get update \
    && apt-get install -y \
        locales \
#        locales-all
    && echo "de_DE.UTF-8 UTF-8" >> /etc/locale.gen \
    && ln -sfn /etc/locale.alias /usr/share/locale/locale.alias \
    && locale-gen

RUN apt-get update \
    && apt-get install -y \
        libxml2-dev \
        wget \
        libssl-dev \
        pkg-config \
        libmcrypt-dev \
        imagemagick \
        graphicsmagick \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libmagickwand-6.q16-dev \
    && pecl install mcrypt-1.0.1

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    soap \
    iconv \

    mbstring \
    bcmath \
    zip \
&& pecl install xdebug \
&& docker-php-ext-enable xdebug

# imagick
RUN ln -s /usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/MagickWand-config /usr/bin/ \
    && pecl install imagick \
    && echo "extension=imagick.so" > /usr/local/etc/php/conf.d/ext-imagick.ini \
    && rm -rf /var/lib/apt/lists/*

# gd
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/lib \
    && docker-php-ext-install gd \
    && rm -rf /var/lib/apt/lists/*