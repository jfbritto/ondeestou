CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    avatar VARCHAR(100),
    bio VARCHAR(100),
    city VARCHAR(100),
    phone VARCHAR(100),
    is_root TINYINT(1),
    is_admin TINYINT(100),
    id_admin INT(1),
    created_at DATETIME,
    updated_at DATETIME,
PRIMARY KEY (id));

CREATE TABLE links (
    id INT NOT NULL AUTO_INCREMENT,
    id_user INT(1),
    id_social_network INT(1),
    id_theme INT(1),
    link VARCHAR(100),
    status CHAR(1),
    created_at DATETIME,
    updated_at DATETIME,
PRIMARY KEY (id));

CREATE TABLE social_networks (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    avatar VARCHAR(50),
    created_at DATETIME,
    updated_at DATETIME,
PRIMARY KEY (id));

CREATE TABLE themes (
    id INT NOT NULL AUTO_INCREMENT,
    color VARCHAR(100),
    created_at DATETIME,
    updated_at DATETIME,
PRIMARY KEY (id));

CREATE TABLE click_logs (
    id INT NOT NULL AUTO_INCREMENT,
    id_link INT(1),
    created_at DATETIME,
    updated_at DATETIME,
PRIMARY KEY (id));