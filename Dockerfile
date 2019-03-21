FROM kibatic/symfony:7.2
MAINTAINER renaud.bredy@kibatic.com

RUN apt-get -qqq update && DEBIAN_FRONTEND=noninteractive apt-get -qq -y --no-install-recommends install \
        build-essential \
        make \
        unzip \
        git \
        curl \
        vim \
        openssl \
        php7.2-curl \
        php7.2-zip \
        php7.2-mysql \
        php7.2-pgsql \
        php7.2-sqlite3 \
        php7.2-xdebug &&\
      # Cleanup
      apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*



ENV SYMFONY_VERSION 4

ADD . /var/www
