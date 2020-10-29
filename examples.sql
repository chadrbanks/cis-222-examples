/**
 * examples.sql
 *
 * Just some example SQL statements
 *
 * @category   SQL
 * @package    CIS-222
 * @author     Chad Banks <crbanks1@hfcc.edu>
 * @version    2020.09.24
 */


# Single line comment?
USE crbanks1; -- Use your username!

SHOW TABLES; -- See all tables in a DB

CREATE TABLE `users` (
  `user_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR( 32 ) NOT NULL,
  `password` VARCHAR(60) NOT NULL,
  `admin` BOOL DEFAULT FALSE,
  `create_date` DATETIME NOT NULL,
  `update_date` DATETIME NOT NULL,
  `delete_date` DATETIME DEFAULT NULL,
  PRIMARY KEY (`user_id`)
);

DESCRIBE `users`;

SELECT * FROM `users`;
SELECT `user_id`, `email` FROM users;

INSERT INTO `users`
(
  `user_id`,
  `email`,
  `password`,
  `create_date`,
  `update_date`,
  `delete_date`
)
VALUES
(
  NULL,
  'crbanks1@hfcc.edu',
  'MyCatsNameIsSnowflake',
  NOW(),
  NOW(),
  NULL
);

-- TODO : UPDATE
-- TODO : DELETE?





CREATE TABLE Cart(

  `cart_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `cart_qty` SMALLINT UNSIGNED NOT NULL,
  `product_id` BIGINT UNSIGNED NOT NULL,
  `account_id` BIGINT UNSIGNED NOT NULL,
  `cart_data` LONGTEXT,
  `created_date` DATETIME NOT NULL,
  `updated_date` DATETIME NOT NULL,
  `removed_date` DATETIME NOT NULL,
  PRIMARY KEY (`cart_id`)

);