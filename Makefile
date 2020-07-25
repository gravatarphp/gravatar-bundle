lint-php:
	php vendor/bin/phpcs --standard=Generic --sniffs="Generic.PHP.Syntax" src -p

phpcbf:
	php vendor/bin/phpcbf src tests

phpcs:
	php vendor/bin/phpcs src tests -n

php-cs-fixer:
	php ./bin/php-cs-fixer.phar fix -v

php-cs-fixer-dry:
	php bin/php-cs-fixer.phar fix -v --dry-run --diff --diff-format=udiff

composer-normalize:
	php bin/composer-normalize.phar --no-update-lock

phpunit:
	php vendor/bin/phpunit tests/ --colors=always --stop-on-failure --testdox --no-interaction
	@make coverage-check
