install:
	@docker compose build --no-cache
	@docker compose run --rm composer install
	@docker-compose run --rm composer dump-autoload -o

up:
	@docker compose up -d app --force-recreate

stop:
	@docker compose stop

restart:
	@make stop
	@make up

logs:
	@docker logs -f app.invoice

sh:
	@docker compose run --rm --entrypoint sh composer

test:
	@make restart
	@docker compose run --rm composer test

filter-test:
	@docker compose run --rm composer test $(CMD)

build:
	@docker-compose build image