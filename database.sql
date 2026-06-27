-- First, go to phpMyAdmin and create the database:
-- CREATE DATABASE movie_finder;

-- Then select the movie_finder database and run this query:

CREATE TABLE favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    year VARCHAR(20),
    genre VARCHAR(255),
    actors VARCHAR(500),
    plot TEXT,
    poster VARCHAR(500),
    type VARCHAR(50),
    saved_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
