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
    available INT(11) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO ezrent.items (name, description, available) VALUES
('Camera', 'A high-quality DSLR camera for rental.', 1),
('Laptop', 'A powerful laptop suitable for programming and gaming.', 4),
('Projector', 'A portable projector for presentations and home cinema.', 10),
('Bicycle', 'A mountain bike suitable for rough terrains.', 1),
('Tent', 'A spacious tent for camping.', 3),
('Smartphone', 'A modern smartphone with a 6.7-inch OLED display, 128GB storage, and 5G connectivity.', 10),
('GoPro', 'A compact, waterproof GoPro action camera for adventure enthusiasts, capable of 4K recording.', 4),
('Drone', 'A lightweight drone with 4K camera and auto-pilot features, ideal for aerial photography and videography.', 2),
('Headphones', 'Noise-cancelling over-ear headphones with 40 hours of battery life, ideal for music and gaming.', 15),
('Gaming Console', 'A next-gen gaming console with 8K support, 1TB storage, and access to a large library of games.', 6),
('Kayak', 'A 2-person inflatable kayak, easy to carry and perfect for water adventures.', 3),
('VR Headset', 'A virtual reality headset with motion controllers and a wide field of view, suitable for immersive gaming.', 5),
('Electric Scooter', 'A lightweight electric scooter with a 25km range, foldable design, and top speed of 25km/h.', 9),
('Camping Stove', 'A compact and portable camping stove with adjustable heat settings and wind protection.', 12),
('Backpack', 'A waterproof hiking backpack with multiple compartments and a capacity of 50L.', 10);;