#
# Table structure for table 'tx_paintings_domain_model_paintings'
#
CREATE TABLE tx_paintings_domain_model_paintings (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,

    name varchar(255) DEFAULT '' NOT NULL,
    description text NOT NULL,
    price float(11) DEFAULT '0' NOT NULL,
    style int(11) DEFAULT '0' NOT NULL,
    genre int(11) DEFAULT '0' NOT NULL,
    author int(11) DEFAULT '0' NOT NULL,
    tags int(11) DEFAULT '0' NOT NULL,
    auctioneer int(11) DEFAULT '0' NOT NULL,
    image int(11) unsigned DEFAULT '0',



    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_paintings_domain_model_tag'
#
CREATE TABLE tx_paintings_domain_model_tag (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT 0 NOT NULL,
    crdate int(11) unsigned DEFAULT 0 NOT NULL,
    deleted tinyint(4) unsigned DEFAULT 0 NOT NULL,
    hidden tinyint(4) unsigned DEFAULT 0 NOT NULL,

    tag_title tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_paintings_domain_model_paintings_tag_mm'
#
CREATE TABLE tx_paintings_domain_model_paintings_tag_mm (
	uid_local int(11) DEFAULT '0' NOT NULL,
	uid_foreign int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);