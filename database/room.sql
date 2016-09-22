CREATE TABLE room (
id int(11) NOT NULL AUTO_INCREMENT,
floor int(11) NOT NULL,
room_number int(11) NOT NULL,
has_conditioner int(1) NOT NULL,
has_tv int(1) NOT NULL,
has_phone int(1) NOT NULL,
available_from date NOT NULL,
price_per_day decimal(20,2) DEFAULT NULL,
description text,
PRIMARY KEY(id)
);

INSERT INTO yii2basic.room (id,floor,room_number,has_conditioner,has_tv,has_phone,available_from,price_per_day,description) VALUES (NULL,'1','101','1','0','1','2015-05-20','120',NULL),(NULL,'2','202','0','1','1','2015-05-30','118',NULL);