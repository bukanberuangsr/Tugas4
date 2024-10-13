CREATE SCHEMA ezrent;

CREATE TABLE ezrent.users
(
    userid INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    userpass VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE ezrent.items
(
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    available TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO ezrent.items (name, description, available) VALUES
('Camera', 'A high-quality DSLR camera for rental.', 1),
('Laptop', 'A powerful laptop suitable for programming and gaming.', 1),
('Projector', 'A portable projector for presentations and home cinema.', 1),
('Bicycle', 'A mountain bike suitable for rough terrains.', 1),
('Tent', 'A spacious tent for camping.', 1);