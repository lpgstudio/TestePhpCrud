USE TESTEVAGA;

DROP TABLE IF EXISTS products, users;
CREATE TABLE users (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    is_admin BOOLEAN NOT NULL DEFAULT false
);
CREATE TABLE products (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6),
    buy_date DATE NOT NULL,
    buy_hour TIME NOT NULL,
    name VARCHAR(100) NOT NULL,
    price FLOAT NOT NULL,
    category VARCHAR(100) NOT NULL,
    perishable BOOLEAN NOT NULL DEFAULT false,
    

    FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT cons_user_buy (user_id)
);

-- Essa senha criptografada corresponde ao valor "a"
INSERT INTO users (id, name, password, email, is_admin)
VALUES (1, 'Admin', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'admin@teste.com.br', 1);

INSERT INTO users (id, name, password, email, is_admin)
VALUES (2, 'User1', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'chaves@teste.com.br', 0);
