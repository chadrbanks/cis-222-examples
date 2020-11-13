

-- CREATE TABLE order
/*
 *  PRIMARY KEY AUTO_INCREMENT order_id
 *  account_id
 *  order_tax
 *  order_subtotal
 *  order_total
 *  order_status
 *  order_dates
 */

-- CREATE TABLE order_items
CREATE TABLE `order_items` (

  `order_item_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` BIGINT UNSIGNED NOT NULL,
  `product_id` BIGINT UNSIGNED NOT NULL,
  `item_qty` SMALLINT UNSIGNED NOT NULL,
  `item_price` BIGINT UNSIGNED NOT NULL,
  `order_item_created_date` DATETIME NOT NULL,
  `order_item_updated_date` DATETIME NOT NULL,
  `order_item_deleted_date` DATETIME NOT NULL,
  PRIMARY KEY (`order_item_id`)
);


-- CREATE TABLE cart

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