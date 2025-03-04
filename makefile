SNAIL = ./vendor/bin/sail 

up:
	$(SNAIL) up

dev: 
	$(SNAIL) composer run dev

csfixer:
	PHP_CS_FIXER_IGNORE_ENV=1 ./vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.php
