CREATE DATABASE IF NOT EXISTS libreria;
USE libreria;

CREATE TABLE libros(
isbn INT(11),
titulo VARCHAR(50),
autor VARCHAR(50),
editorial VARCHAR(50), 
temas VARCHAR(100),
anioEdi VARCHAR(50),
numEdi VARCHAR(50),
paginas int(4),
precio VARCHAR(50),
cubierta varchar(50),
numEjem int(11),
)
INSERT INTO libros (isbn, titulo, autor, editorial, temas, anioEdi, numEdi, paginas, precio, cubierta, numEjm) VALUES 
(1, 'El señor de los anillos', 'J.R.R. Tolkien', 'Editorial 2', 'Fantasia', '1954', '1', '1264', '$200', 'carta', 1),
(2, 'El señor de los anillos 2', 'J.R.R. Tolkien', 'Editorial 3', 'Fantasia', '1955', '2', '3000', '$400', 'carta', 2),
(3, 'El señor de los anillos 3', 'J.R.R. Tolkien', 'Editorial 4', 'Fantasia', '1956', '1', '126', '$500', 'carta', 4),
(4, 'El señor de los anillos 4', 'J.R.R. Tolkien', 'Editorial 2', 'Fantasia', '1957', '2', '12', '$150', 'carta', 55),
(5, 'El señor de los anillos 5', 'J.R.R. Tolkien', 'Editorial 3', 'Fantasia', '1958', '3', '1', '$200', 'carta', 0),
