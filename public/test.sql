CREATE TABLE `db99`.`students` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL,
    `mobile` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `db99`.`cats` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL,
    `mobile` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `db99`.`dogs` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL,
    `mobile` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `db99`.`eggs` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL,
    `address` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO
    `cats` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'amy', '0911-111-111'),
    (NULL, 'bob', '0922'),
    (NULL, 'cat', '0933'),
    (NULL, 'dog', '0944')