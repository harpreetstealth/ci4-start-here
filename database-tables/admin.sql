CREATE TABLE `admin` (
    `admin_id` int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `admin_username` varchar(250) NOT NULL,
    `admin_email` varchar(250) NOT NULL,
    `admin_pwd` varchar(256) NOT NULL,
    `admin_status` varchar(15) NOT NULL DEFAULT 'active'
);

INSERT INTO
    `admin` (
        `admin_username`,
        `admin_email`,
        `admin_pwd`,
        `admin_status`
    )
VALUES
    (
        'adminuser',
        'user@example.com',
        '$2y$10$T.rg2z9daWD.MTzoR4SDouEaiXWory85NxYbT0K7xIgNbih34cKHy',
        'active'
    );