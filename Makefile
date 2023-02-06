install:
	composer install
	
brain-games:
	./bin/brain-games
	
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

validate:
	composer validate
