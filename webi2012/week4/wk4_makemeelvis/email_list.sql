CREATE TABLE `wk4_email_list` (
  `id` INT AUTO_INCREMENT,
  `first_name` VARCHAR(50),
  `last_name` VARCHAR(50),
  `email` VARCHAR(100),
  `street_address` VARCHAR(100),
  `city` VARCHAR(50),
  `state_id` INT SET AS INDEX,
  `zip` VARCHAR(10),
  PRIMARY KEY (`id`)
);
