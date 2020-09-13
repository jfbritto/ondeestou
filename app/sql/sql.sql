CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    url_name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    avatar VARCHAR(100),
    bio text,
    city VARCHAR(100),
    state VARCHAR(100),
    phone VARCHAR(100),
    latitude VARCHAR(100),
    longitude VARCHAR(100),
    id_theme INT(1),
    is_root TINYINT(1),
    is_admin TINYINT(100),
    id_admin INT(1),
    time_token VARCHAR(100),
    token_email DATETIME,
    status CHAR(1),
    created_at DATETIME,
    updated_at DATETIME,
PRIMARY KEY (id));

CREATE TABLE links (
    id INT NOT NULL AUTO_INCREMENT,
    id_user INT(1),
    id_social_network INT(1),
    name VARCHAR(100),
    link VARCHAR(100),
    phone VARCHAR(100),
    msg VARCHAR(100),
    status CHAR(1),
    order int(1),
    created_at DATETIME,
    updated_at DATETIME,
PRIMARY KEY (id));

CREATE TABLE social_networks (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100),
    icon VARCHAR(100),
    color VARCHAR(50),
    created_at DATETIME default now(),
    updated_at DATETIME default now(),
PRIMARY KEY (id));

CREATE TABLE themes (
    id INT NOT NULL AUTO_INCREMENT,
    color VARCHAR(100),
    created_at DATETIME,
    updated_at DATETIME,
PRIMARY KEY (id));

CREATE TABLE click_logs (
    id INT NOT NULL AUTO_INCREMENT,
    type_log char(1),
    id_link INT(1),
    id_user INT(1),
    created_at DATETIME default now(),
    updated_at DATETIME default now(),
PRIMARY KEY (id));


insert into social_networks (name, icon, color) values("Instagram", "<i class='fab fa-instagram icon-style'></i>", "#da3279");    
insert into social_networks (name, icon, color) values("Facebook", "<i class='fab fa-facebook icon-style'></i>", "#0d8bf0");    
insert into social_networks (name, icon, color) values("WhatsApp", "<i class='fab fa-whatsapp icon-style'></i>", "#3ec250");    
insert into social_networks (name, icon, color) values("SnapChat", "<i class='fab fa-snapchat icon-style'></i>", "#fffc00");    
insert into social_networks (name, icon, color) values("Linkedin", "<i class='fab fa-linkedin icon-style'></i>", "#007bb5");    
insert into social_networks (name, icon, color) values("Github", "<i class='fab fa-github icon-style'></i>", "#171515");    
insert into social_networks (name, icon, color) values("Twitch", "<i class='fab fa-twitch icon-style'></i>", "#9147ff");    
insert into social_networks (name, icon, color) values("Youtube", "<i class='fab fa-youtube icon-style'></i>", "#ff0000");    
insert into social_networks (name, icon, color) values("Spotify", "<i class='fab fa-spotify icon-style'></i>", "#1ed760");    
insert into social_networks (name, icon, color) values("Tiktok", "<i class='fab fa-tiktok icon-style'></i>", "#000000");    
insert into social_networks (name, icon, color) values("Bitbucket", "<i class='fab fa-bitbucket icon-style'></i>", "#156de8");    
insert into social_networks (name, icon, color) values("Dropbox", "<i class='fab fa-dropbox icon-style'></i>", "#0062ff");    
insert into social_networks (name, icon, color) values("Reddit", "<i class='fab fa-reddit icon-style'></i>", "#ff4500");    
insert into social_networks (name, icon, color) values("Pinterest", "<i class='fab fa-pinterest icon-style'></i>", "#ca2127");    
insert into social_networks (name, icon, color) values("Periscope", "<i class='fab fa-periscope icon-style'></i>", "#40a4c4");    
insert into social_networks (name, icon, color) values("Slack", "<i class='fab fa-slack icon-style'></i>", "#ebb22d");    
insert into social_networks (name, icon, color) values("Steam", "<i class='fab fa-steam icon-style'></i>", "#146295");    
insert into social_networks (name, icon, color) values("Soundcloud", "<i class='fab fa-soundcloud icon-style'></i>", "#f78a0f");    
insert into social_networks (name, icon, color) values("Telegram", "<i class='fab fa-telegram icon-style'></i>", "#2ba3d6");    
insert into social_networks (name, icon, color) values("Tumblr", "<i class='fab fa-tumblr icon-style'></i>", "#001935");    
insert into social_networks (name, icon, color) values("Twitter", "<i class='fab fa-twitter icon-style'></i>", "#1da1f2");    
insert into social_networks (name, icon, color) values("Vimeo", "<i class='fab fa-vimeo icon-style'></i>", "#3d95ce");


alter table users add column state VARCHAR(100) after city;
alter table users add column longitude VARCHAR(100) after phone;
alter table users add column latitude VARCHAR(100) after phone;

alter table links add column phone VARCHAR(100) after link;
alter table links add column msg VARCHAR(100) after link;

alter table users add column time_token DATETIME after id_admin;
alter table users add column token_email VARCHAR(100) after id_admin;

insert into social_networks (name, icon, color) values("Site", "<i class='fas fa-link icon-style'></i>", "#6c757d");

alter table links add column name VARCHAR(100) after id_social_network;
alter table links add column order_link INT(1) after status;

alter table click_logs add column from_site VARCHAR(100) after id_user

alter table users add column status CHAR(1) default 'A' after time_token;