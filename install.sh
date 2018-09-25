#!/bin/bash

if [ -d "vendor" ]
then
	php artisan versatile:install && \
	echo && \

	php artisan versatile-posts:install && \
	echo && \

	php artisan versatile-pages:install && \
	echo && \

	php artisan versatile-forms:install && \
	echo && \

	php artisan versatile-portfolio:install && \
	echo && \

	php artisan versatile-frontend:install && \
	echo && \

	php artisan versatile-themes:install && \
	echo && \

	php artisan versatile:permissions admin
fi