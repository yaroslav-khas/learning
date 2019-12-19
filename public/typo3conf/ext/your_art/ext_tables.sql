#
# Table structure for table 'tx_yourart_domain_model_paintings'
#
CREATE TABLE tx_yourart_domain_model_paintings (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,

    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,

    name varchar(255) DEFAULT '' NOT NULL,
    description text NOT NULL,
    price float(11) DEFAULT '0' NOT NULL,
    style int(11) DEFAULT '0' NOT NULL,
    author int(11) DEFAULT '0' NOT NULL,
    tags int(11) DEFAULT '0' NOT NULL,
    image int(11) unsigned DEFAULT '0',
	slug varchar(2048),



    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_yourart_domain_model_tag'
#
CREATE TABLE tx_yourart_domain_model_tag (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,
	slug varchar(2048),

    title tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_yourart_domain_model_paintings_tag_mm'
#
CREATE TABLE tx_yourart_domain_model_paintings_tag_mm (
	uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
#
# Table structure for table 'tx_yourart_domain_model_style'
#
CREATE TABLE tx_yourart_domain_model_style (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,
	slug varchar(2048),

    title tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_yourart_domain_model_paintings_style_mm'
#
CREATE TABLE tx_yourart_domain_model_paintings_style_mm (
	uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
#
# Table structure for table 'tx_yourart_domain_model_author'
#
CREATE TABLE tx_yourart_domain_model_author (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,
	slug varchar(2048),

    title tinytext,
    description text NOT NULL,
    auctioneer int(11) DEFAULT '0' NOT NULL,
    image int(11) unsigned DEFAULT '0',
    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_yourart_domain_model_paintings_author_mm'
#
CREATE TABLE tx_yourart_domain_model_paintings_author_mm (
    uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
#
# Table structure for table 'tx_yourart_domain_model_auctioneer'
#
CREATE TABLE tx_yourart_domain_model_auctioneer (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,
	slug varchar(2048),

    title tinytext,
    description text NOT NULL,
    image int(11) unsigned DEFAULT '0',

    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_yourart_domain_model_offers'
#
CREATE TABLE tx_yourart_domain_model_offers (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,

    picture_id int(11) DEFAULT '0' NOT NULL,
    title tinytext,
    description text NOT NULL,
    author int(11) DEFAULT '0' NOT NULL,
    pictures int(11) DEFAULT '0' NOT NULL,
    sum_all_pic int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_yourart_domain_model_orders'
#
CREATE TABLE tx_yourart_domain_model_orders (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,

    name tinytext,
    surname tinytext,
    user_id int(11) unsigned DEFAULT 0 NOT NULL,
    auctioneer_id int(11) unsigned DEFAULT 0 NOT NULL,
    delivery_company tinytext,
    delivery_street tinytext,
    total_sum float(11) DEFAULT '0' NOT NULL,
    order_products int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_yourart_domain_model_orderproducts'
#
CREATE TABLE tx_yourart_domain_model_orderproducts (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,

    order_id int(11) unsigned DEFAULT 0 NOT NULL,
    product_id int(11) unsigned DEFAULT 0 NOT NULL,
    quantity int(11) DEFAULT 1 NOT NULL,
    price float(11) DEFAULT 0 NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
