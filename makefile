build:
	@docker compose up -d build

run:
	@docker compose up -d
	@docker ps
	@xdg-open http://localhost:8080/
stop:
	@docker compose down 
