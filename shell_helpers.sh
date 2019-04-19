function dev() {
  docker-compose exec sp-dev sh -l -c "$*"
}

function web() {
  docker-compose exec web sh -l -c "$*"
}

function web-shell() {
  docker exec -it sp-web sh
}

function rebuild-containers() {
  docker-compose kill
  docker-compose rm -f
  docker-compose build
  docker-compose up -d
}

function refresh-containers() {
  docker-compose kill
  docker-compose rm -f
  docker-compose up -d
}

function up() {
  docker-compose up -d
}

function down() {
  docker-compose kill
}