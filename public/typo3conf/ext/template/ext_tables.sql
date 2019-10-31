#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
    check_user_function TINYINT(1) UNSIGNED DEFAULT '0' NOT NULL,
    card_number varchar (17) DEFAULT '0' NOT NULL,
    type_card varchar(100) NOT NULL DEFAULT '1',
    card_holder varchar(100) DEFAULT ''
);

CREATE TABLE tx_template_domain_model_ (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(3) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(3) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,

    company_name varchar(255) DEFAULT '' NOT NULL,
    street varchar(255) DEFAULT '' NOT NULL,
    house_number varchar(255) DEFAULT '' NOT NULL,
    zip varchar(255) DEFAULT '' NOT NULL,
    city varchar(255) DEFAULT '' NOT NULL,
    country varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);