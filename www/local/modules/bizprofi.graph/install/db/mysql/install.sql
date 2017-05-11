create table if not exists bizprofi_graph_metric
(
	ID INT(11) unsigned not null auto_increment,
	HOST CHAR(3) not null,
	VALUE DECIMAL(10, 2) not null,
	TIMESTAMP TIMESTAMP  not null,
	PRIMARY KEY (ID)
);
