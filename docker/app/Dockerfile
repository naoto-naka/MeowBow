FROM php:7-fpm

#一般ユーザ作成
ARG UID=501
ARG GID=20
RUN useradd -m -u ${UID} dokcer

#composerインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#Node.jsインストール
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

#Laravelに必要なパッケージインストール
RUN apt-get update && apt-get install -y git zip unzip git vim curl

RUN apt-get update \
    && docker-php-ext-install pdo_mysql

#作成したユーザに切り替える
USER ${UID}:${GID}

#作業ディレクトリ変更
WORkDIR /var/www/html
