CREATE TABLE `users` (
    `id`    int(10)     unsigned NOT NULL AUTO_INCREMENT,
    `firstname`  varchar(70)          NOT NULL,
    `lastname`  varchar(70)          NOT NULL,
    `email` varchar(70)          NOT NULL,
    `gender`  varchar(70)          NOT NULL,
    `education`  varchar(70)          NOT NULL,
    `skills`  varchar(100)          NOT NULL,

    PRIMARY KEY (`id`)
);