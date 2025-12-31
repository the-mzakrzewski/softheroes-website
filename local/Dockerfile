FROM debian:13.2

RUN apt-get update -y
RUN apt-get install -y \
    curl \
    unzip \
    locales \
    ca-certificates \
    lsb-release \
    apt-transport-https \
    gnupg2

RUN curl -sSLo /tmp/debsuryorg-archive-keyring.deb https://packages.sury.org/debsuryorg-archive-keyring.deb \
    && dpkg -i /tmp/debsuryorg-archive-keyring.deb \
    && sh -c 'echo "deb [signed-by=/usr/share/keyrings/deb.sury.org-php.gpg] https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'

RUN apt-get update -y

# Add nodejs
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.3/install.sh | bash \
    && export NVM_DIR="$HOME/.nvm" \
    && [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh" \
    && nvm install 24 \
    && nvm use 24

# Install PHP, nginx and Node
RUN apt-get install -y \
    nginx \
    php8.5-fpm \
    php8.5-common \
    php8.5-curl \
    php8.5-pgsql \
    php8.5-pdo \
    php8.5-mbstring \
    php8.5-xml \
    php8.5-bcmath \
    php8.5-xdebug \
    php8.5-mongodb \
    php8.5-gd \
    php8.5-zip

# Config PHP & nginx
RUN mkdir -p /var/run/php
COPY local/resources/nginx.conf /etc/nginx/sites-available/default
COPY local/resources/php-fpm.ini /etc/php/8.5/fpm/conf.d/99-custom-php-fpm.ini

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Install supervisor
RUN apt-get install -y supervisor
RUN mkdir -p /var/log/supervisor
COPY local/resources/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN usermod -u 1000 www-data
RUN usermod -G staff www-data

RUN chown www-data:www-data -R .

# Set supervisor to manage container processes
ENTRYPOINT ["/usr/bin/supervisord"]
