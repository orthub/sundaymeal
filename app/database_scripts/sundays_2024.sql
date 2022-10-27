-- SCRIPT REQUIRES "create_database.sql"

CREATE TABLE sundays_2024 (
  id SERIAL PRIMARY KEY NOT NULL,
  kw INT NOT NULL,
  sunday_date DATE NOT NULL,
  meal_id INTEGER REFERENCES meals (id)
);

-- SUNDAYS 2024 --
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('1', '2024-01-07', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('2', '2024-01-14', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('3', '2024-01-21', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('4', '2024-01-28', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('5', '2024-02-04', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('6', '2024-02-11', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('7', '2024-02-18', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('8', '2024-02-25', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('9', '2024-03-03', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('10', '2024-03-10', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('11', '2024-03-17', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('12', '2024-03-24', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('13', '2024-03-31', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('14', '2024-04-07', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('15', '2024-04-14', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('16', '2024-04-21', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('17', '2024-04-28', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('18', '2024-05-05', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('19', '2024-05-12', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('20', '2024-05-19', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('21', '2024-05-26', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('22', '2024-06-02', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('23', '2024-06-09', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('24', '2024-06-16', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('25', '2024-06-25', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('26', '2024-06-30', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('27', '2024-07-07', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('28', '2024-07-14', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('29', '2024-07-21', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('30', '2024-07-28', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('31', '2024-08-04', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('32', '2024-08-11', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('33', '2024-08-18', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('34', '2024-08-25', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('35', '2024-09-01', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('36', '2024-09-08', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('37', '2024-09-15', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('38', '2024-09-22', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('39', '2024-09-29', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('40', '2024-10-06', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('41', '2024-10-13', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('42', '2024-10-20', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('43', '2024-10-27', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('44', '2024-11-03', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('45', '2024-11-10', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('46', '2024-11-17', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('47', '2024-11-24', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('48', '2024-12-01', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('49', '2024-12-08', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('50', '2024-12-15', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('51', '2024-12-22', '1');
INSERT INTO sundays_2024 ("kw", "sunday_date", "meal_id") VALUES ('52', '2024-01-29', '1');