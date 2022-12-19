-- UNCOMMENT STATEMENTS BELOW IF YOU NEED A FRESH INSTALL --
-- DROP TABLE IF EXISTS sundays_2021;
-- DROP TABLE IF EXISTS sundays_2022;
-- DROP TABLE IF EXISTS sundays_2023;

-- IF YOU ADDED MORE SCRIPTS, UNCOMMENT THEM BELOW --
-- DROP TABLE IF EXISTS sundays_2024

-- DROP TABLE IF EXISTS meals;

-- CREATE TABLES --
CREATE TABLE meals (
  id SERIAL PRIMARY KEY NOT NULL,
  meal VARCHAR(255) NOT NULL,
  note TEXT,
  image_path VARCHAR(255)
);

CREATE TABLE sundays_2021 (
  id SERIAL PRIMARY KEY NOT NULL,
  kw INT NOT NULL,
  sunday_note TEXT,
  sunday_date DATE NOT NULL,
  meal_id INTEGER REFERENCES meals (id) DEFAULT 1
);
CREATE TABLE sundays_2022 (
  id SERIAL PRIMARY KEY NOT NULL,
  kw INT NOT NULL,
  sunday_note TEXT,
  sunday_date DATE NOT NULL,
  meal_id INTEGER REFERENCES meals (id)
);
CREATE TABLE sundays_2023 (
  id SERIAL PRIMARY KEY NOT NULL,
  kw INT NOT NULL,
  sunday_note TEXT,
  sunday_date DATE NOT NULL,
  meal_id INTEGER REFERENCES meals (id)
);

-- DEFAULT MEAL AS PLACEHOLDER --
INSERT INTO meals ("meal", "note", "image_path") VALUES ('Nichts geplant', 'Kein geplantes Essen für diesen Tag.', '/public/images/default.jpg');

-- SUNDAYS 2021 --
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('1', '', '2021-01-10', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('2', '', '2021-01-17', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('3', '', '2021-01-24', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('4', '', '2021-01-31', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('5', '', '2021-02-07', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('6', '', '2021-02-14', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('7', '', '2021-02-21', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('8', '', '2021-02-28', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('9', '', '2021-03-07', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('10', '', '2021-03-14', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('11', '', '2021-03-21', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('12', '', '2021-03-28', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('13', '', '2021-04-04', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('14', '', '2021-04-11', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('15', '', '2021-04-18', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('16', '', '2021-04-25', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('17', '', '2021-05-02', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('18', '', '2021-05-09', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('19', '', '2021-05-16', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('20', '', '2021-05-23', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('21', '', '2021-05-30', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('22', '', '2021-06-06', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('23', '', '2021-06-13', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('24', '', '2021-06-20', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('25', '', '2021-06-27', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('26', '', '2021-07-04', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('27', '', '2021-07-11', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('28', '', '2021-07-18', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('29', '', '2021-07-25', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('30', '', '2021-08-01', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('31', '', '2021-08-08', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('32', '', '2021-08-15', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('33', '', '2021-08-22', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('34', '', '2021-08-29', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('35', '', '2021-09-05', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('36', '', '2021-09-12', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('37', '', '2021-09-19', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('38', '', '2021-09-26', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('39', '', '2021-10-03', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('40', '', '2021-10-10', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('41', '', '2021-10-17', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('42', '', '2021-10-24', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('43', '', '2021-10-31', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('44', '', '2021-11-07', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('45', '', '2021-11-14', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('46', '', '2021-11-21', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('47', '', '2021-11-28', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('48', '', '2021-12-05', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('49', '', '2021-12-12', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('50', '', '2021-12-19', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('51', '', '2021-12-26', '1');
INSERT INTO sundays_2021 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('52', '', '2022-01-02', '1');

-- 2022 --
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('1', '', '2022-01-09', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('2', '', '2022-01-16', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('3', '', '2022-01-23', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('4', '', '2022-01-30', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('5', '', '2022-02-06', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('6', '', '2022-02-13', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('7', '', '2022-02-20', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('8', '', '2022-02-27', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('9', '', '2022-03-06', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('10', '', '2022-03-13', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('11', '', '2022-03-20', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('12', '', '2022-03-27', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('13', '', '2022-04-03', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('14', '', '2022-04-10', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('15', '', '2022-04-17', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('16', '', '2022-04-24', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('17', '', '2022-05-01', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('18', '', '2022-05-08', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('19', '', '2022-05-15', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('20', '', '2022-05-22', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('21', '', '2022-05-29', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('22', '', '2022-06-05', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('23', '', '2022-06-12', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('24', '', '2022-06-19', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('25', '', '2022-06-26', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('26', '', '2022-07-03', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('27', '', '2022-07-10', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('28', '', '2022-07-17', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('29', '', '2022-07-24', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('30', '', '2022-07-31', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('31', '', '2022-08-07', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('32', '', '2022-08-14', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('33', '', '2022-08-21', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('34', '', '2022-08-28', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('35', '', '2022-09-04', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('36', '', '2022-09-11', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('37', '', '2022-09-18', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('38', '', '2022-09-25', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('39', '', '2022-10-02', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('40', '', '2022-10-09', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('41', '', '2022-10-16', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('42', '', '2022-10-23', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('43', '', '2022-10-30', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('44', '', '2022-11-06', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('45', '', '2022-11-13', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('46', '', '2022-11-20', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('47', '', '2022-11-27', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('48', '', '2022-12-04', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('49', '', '2022-12-11', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('50', '', '2022-12-18', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('51', '', '2022-12-25', '1');
INSERT INTO sundays_2022 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('52', '', '2023-01-01', '1');

-- 2023 --
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('1', '', '2023-01-08', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('2', '', '2023-01-15', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('3', '', '2023-01-22', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('4', '', '2023-01-29', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('5', '', '2023-02-05', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('6', '', '2023-02-12', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('7', '', '2023-02-19', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('8', '', '2023-02-26', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('9', '', '2023-03-05', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('10', '', '2023-03-12', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('11', '', '2023-03-19', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('12', '', '2023-03-26', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('13', '', '2023-04-02', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('14', '', '2023-04-09', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('15', '', '2023-04-16', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('16', '', '2023-04-23', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('17', '', '2023-04-30', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('18', '', '2023-05-07', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('19', '', '2023-05-14', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('20', '', '2023-05-21', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('21', '', '2023-05-28', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('22', '', '2023-06-04', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('23', '', '2023-06-11', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('24', '', '2023-06-18', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('25', '', '2023-06-25', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('26', '', '2023-07-02', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('27', '', '2023-07-09', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('28', '', '2023-07-16', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('29', '', '2023-07-23', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('30', '', '2023-07-30', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('31', '', '2023-08-06', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('32', '', '2023-08-13', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('33', '', '2023-08-20', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('34', '', '2023-08-27', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('35', '', '2023-09-03', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('36', '', '2023-09-10', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('37', '', '2023-09-17', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('38', '', '2023-09-24', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('39', '', '2023-10-01', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('40', '', '2023-10-08', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('41', '', '2023-10-15', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('42', '', '2023-10-22', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('43', '', '2023-10-29', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('44', '', '2023-11-05', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('45', '', '2023-11-12', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('46', '', '2023-11-19', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('47', '', '2023-11-26', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('48', '', '2023-12-03', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('49', '', '2023-12-10', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('50', '', '2023-12-17', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('51', '', '2023-12-24', '1');
INSERT INTO sundays_2023 ("kw", "sunday_note", "sunday_date", "meal_id") VALUES ('52', '', '2023-12-31', '1');