CREATE TABLE `users` (
  `id` int(9) NOT NULL auto_increment,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,  
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `contact` (
  `id` int(9) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `admins` (
  `id` int(9) NOT NULL auto_increment,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL auto_increment,
  `birthday` varchar(300) NOT NULL,
  `website` varchar(300) NOT NULL,
  `age` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `freelance` varchar(300) NOT NULL
) ENGINE=InnoDB;



CREATE TABLE `gallery` (
  `id` int(9) NOT NULL auto_increment,
  `images` varchar(900) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `homeimage` (
  `id` int(9) NOT NULL auto_increment,
  `image` varchar(900) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `contpages` (
  `id` int(9) NOT NULL auto_increment,
  `loction` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `call` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;