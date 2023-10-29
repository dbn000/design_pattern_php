JOB_NAME=design_pattern_php
PROJECT_NAME=${JOB_NAME}

up:
	docker build -t ${JOB_NAME} .
	docker run -v $(shell pwd):/app ${JOB_NAME} composer install

test:
	docker run -v $(shell pwd):/app ${JOB_NAME} vendor/bin/phpunit --colors=always

# Interactive
run:
	docker run -v $(shell pwd):/app -p 8080:80 --name ${JOB_NAME} ${JOB_NAME}

console:
	docker exec -it ${JOB_NAME} bash