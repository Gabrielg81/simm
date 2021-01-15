FROM debian:latest
RUN docker-php-ext-install mysqli && apt get update-y