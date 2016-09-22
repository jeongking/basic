CREATE TABLE reservation (
id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
room_id int(11) NOT NULL,
customer_id int(11) NOT NULL,
price_per_day decimal(20,2) NOT NULL,
date_from date NOT NULL,
date_to date NOT NULL,
reservation_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);