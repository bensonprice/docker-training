cat train-public-portal.sql | docker exec -i train-mysql /usr/bin/mysql -u root --password=dbpass public-portal
