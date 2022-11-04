JOB_NAME=design_pattern_php
PROJECT_NAME=${JOB_NAME}

go-build:
	docker build -t ${JOB_NAME} .
	docker run -v $(shell pwd):/app ${JOB_NAME} composer install

go-test:
	docker run -v $(shell pwd):/app ${JOB_NAME} vendor/bin/phpunit