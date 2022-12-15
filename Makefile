TAG=$(shell git log -1 --format=%h)

build:
	docker build -t delicia_php .
login:
	docker login
tag: login
	docker tag delicia_php cananeadouglas/delicia_php:$(TAG)
push: tag
	docker push cananeadouglas/delicia_php:$(TAG)
