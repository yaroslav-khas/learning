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


    PRIMARY KEY (uid),
    KEY parent (pid)
);