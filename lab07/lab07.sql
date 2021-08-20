--My D&D Characters
CREATE TABLE IF NOT EXISTS characters (
  id INT AUTO INCREMENT PRIMARY KEY,
  FFIRST varchar (20) not null,
  LLAST varchar (20) not null,
  LVL INT,
  CLASS TEXT,
  SSTATUS TEXT
);

INSERT INTO characters (FFIRST,LLAST, LVL, CLASS, SSTATUS)
VALUES
("Evan", "Hernandez", 23, "Student", "Alive"),
("Dank", "Thief", 3, "Rogue", "Dead"),
("Pope Hopeless", "the Dopeless", 3, "Anti-Paladin", "Dead"),
("Dalhghore", "Babysniffer", 5, "Deliverer", "Dead"),
("The Man-Thing", "That Flew", 6, "Sorcerer", "Dead"),
("Clyza", "n/a", 7, "Brawler", "Dead");

SELECT * FROM characters;

CREATE TABLE IF NOT EXISTS party (
  id INT AUTO INCREMENT PRIMARY KEY,
  FFIRST varchar (20) not null,
  LLAST varchar (20) not null,
  LVL INT,
  CLASS TEXT,
  RACE TEXT
);

INSERT INTO party (FFIRST, LLAST, LVL, CLASS, RACE)
VALUES
("Evan", "Hernandez", 23, "Student", "Human"),
("Rysgil", "Lissi", 10, "Hunter", "Elf"),
("Shizina", "Torrahel", 10, "Cleric", "Aasimar"),
("Eren", "Lupinsward", 10, "Sage", "Aasimar"),
("Clyos", "n/a", 10, "Titan-Mauler", "Half-Elf");

SELECT * FROM characters
UNION ALL
SELECT * FROM party
ORDER BY FFIRST;

SELECT * FROM characters
WHERE LLAST='Hernandez'
UNION
SELECT * from party
WHERE LLAST='Hernandez';