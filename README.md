# sundaymeal
meal planner for sundays

# Feel free to fork and use

# Program language is German

# Setup postgresql

sudo -u postgres psql

CREATE DATABASE essen;

-- single ticks!
CREATE USER db WITH PASSWORD 'STRong14d@taba53';

GRANT ALL PRIVILEGES ON DATABASE essen TO db;