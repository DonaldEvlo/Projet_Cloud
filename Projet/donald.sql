GRANT ALL PRIVILEGES ON *.* TO will@'localhost'  IDENTIFIED BY 'will' WITH GRANT OPTION;
CREATE DATABASE IF NOT EXISTS will CHARACTER SET utf8;
CREATE USER 'will'@'localhost' IDENTIFIED BY 'will';
GRANT ALL PRIVILEGES ON will.* TO 'will'@'localhost';
GRANT ALL PRIVILEGES ON *.* TO will@'localhost'  IDENTIFIED BY 'will' WITH GRANT OPTION;
use will;

CREATE TABLE `etudiant` (
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Filiere` varchar(50) NOT NULL,
  `Classe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `etudiant` (`Nom`, `Prenom`, `Filiere`, `Classe`) VALUES
('Diallo', 'Thierno', 'GLAR', 'L3');


CREATE TABLE `filères` (
  `Nom` varchar(50) NOT NULL,
  `Specialite` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `filères` (`Nom`, `Specialite`, `Description`) VALUES
('GLAR', 'Teleinformatique', 'est une filiere tres importante dans le programme des nouvelles technologies qui permet aux etudiants de se specialiser en prommation, en reseau et bien d\'autres');



CREATE TABLE `professeur` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Matiere` varchar(50) NOT NULL,
  `Filière` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-

INSERT INTO `professeur` (`Id`, `Nom`, `Prenom`, `Matiere`, `Filière`) VALUES
(1, 'Diack', 'Demba', 'BDD', 'GLAR');


ALTER TABLE `professeur`
  ADD PRIMARY KEY (`Id`);
COMMIT;

