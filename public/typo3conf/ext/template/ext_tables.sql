#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
    check_user_function TINYINT(1) UNSIGNED DEFAULT '0' NOT NULL,
    card_number varchar (17) DEFAULT '0' NOT NULL,
    type_card varchar(100) NOT NULL DEFAULT '1',
    card_holder varchar(100) DEFAULT '',
	extension_fields int(11) DEFAULT '0' NOT NULL,
);
#
# Table structure for table 'tx_template_domain_model_template'
#
CREATE TABLE tx_template_domain_model_template (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    description text NOT NULL,
    quantity int(11) DEFAULT '0' NOT NULL,
    image int(11) unsigned DEFAULT '0',
    own_link 	tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
#
# Table structure for table 'tx_template_domain_model_template'
#
CREATE TABLE tx_template_domain_model_template (
	tx_news_related_news int(11) DEFAULT '0' NOT NULL,
	KEY index_newscontent (tx_news_related_news)
);