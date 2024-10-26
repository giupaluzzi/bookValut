create DATABASE IF NOT EXISTS bookVaultDB;

USE bookVaultDB;

CREATE TABLE IF NOT EXISTS libri (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titolo VARCHAR(255) NOT NULL,
    autore VARCHAR(255) NOT NULL,
    anno SMALLINT NOT NULL
);

CREATE TABLE IF NOT EXISTS bibliotecari (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    psw VARCHAR(255) NOT NULL
);

INSERT INTO libri (titolo, autore, anno) VALUES
('1984', 'George Orwell', 1949),
('To Kill a Mockingbird', 'Harper Lee', 1960),
('The Great Gatsby', 'F. Scott Fitzgerald', 1925),
('Moby Dick', 'Herman Melville', 1851),
('Pride and Prejudice', 'Jane Austen', 1813),
('War and Peace', 'Leo Tolstoy', 1869),
('The Catcher in the Rye', 'J.D. Salinger', 1951),
('The Hobbit', 'J.R.R. Tolkien', 1937),
('Brave New World', 'Aldous Huxley', 1932),
('Ulysses', 'James Joyce', 1922),
('The Odyssey', 'Homer', -800),
('Crime and Punishment', 'Fyodor Dostoevsky', 1866),
('The Brothers Karamazov', 'Fyodor Dostoevsky', 1880),
('Madame Bovary', 'Gustave Flaubert', 1857),
('The Divine Comedy', 'Dante Alighieri', 1320);

INSERT INTO bibliotecari (username, nome, email, psw) VALUES
('BAldo','Aldo Baglio', 'baglioaldo@gmail.com', 'psw1'),
('GiovanniS','Giovanni Storti', 'stortigiovanni@gmail.com', 'psw2'),
('Poromo','Giacomo Poretti', 'porettigiacomo@gmail.com', 'psw3');