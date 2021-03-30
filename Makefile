
up:
	@docker-compose up -d

up-build:
	@docker-compose up -d --build

stop:
	@docker-compose stop

down:
	@docker-compose down

status:
	@docker-compose ps

logs:
	@docker-compose logs -f

exec-php:
	@docker exec -it php8.0 bash