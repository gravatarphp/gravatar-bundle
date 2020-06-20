lint-php:
	php vendor/bin/phpcs --standard=Generic --sniffs="Generic.PHP.Syntax" src -p

phpcbf:
	php vendor/bin/phpcbf src tests

phpcs:
	php vendor/bin/phpcs src tests -n

phpunit:
	php vendor/bin/phpunit tests/ --colors=always --stop-on-failure --testdox --no-interaction
	@make coverage-check

composer-normalize:
	php bin/composer-normalize.phar --no-update-lock
