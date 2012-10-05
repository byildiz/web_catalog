CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `configs` (
  `key` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`key`)
);

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);
