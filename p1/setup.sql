


CREATE TABLE `locations` (
  `location_id` BIGINT NOT NULL AUTO_INCREMENT,
  `location_name` VARCHAR(32) NOT NULL,
  `create_date` DATETIME NOT NULL,
  `update_date` DATETIME NOT NULL,
  `delete_date` DATETIME DEFAULT NULL,
  PRIMARY KEY(`location_id`)
);


SHOW TABLES;

DESCRIBE `locations`;


DROP TABLE `locations`;


INSERT INTO `locations`
(`location_id`, `location_name`, `create_date`, `update_date`, `delete_date`)
VALUES
( NULL, 'Test Location', NOW(), NOW(), NULL );



SELECT * FROM `locations`;