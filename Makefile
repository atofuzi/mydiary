APP_NAME=mydiary

build:
	docker-compose build --no-cache

start:
	docker-compose up -d

stop:
	docker-compose stop

restart:
	docker-compose stop; docker-compose rm -f; \
	cd application; yarn run build; cd ../; \
	docker-compose up -d

down:
	docker-compose down

sh:
	docker exec -it $(APP_NAME) /bin/sh

install:
        docker-compose up -d --build; \
        docker-compose exec $(APP_NAME)  composer install;

migrate:
        docker-compose exec $(APP_NAME) php artisan migrate

dbseed:
        docker-compose exec $(APP_NAME) php artisan db:seed

log:
        docker logs -f ${APP_NAME}

log_db:
        docker-compose logs -f ${DB_NAME}

ps:
        docker-compose ps

