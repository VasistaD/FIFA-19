drop database if exists FOOTBALL_DB;
create database FOOTBALL_DB;
use FOOTBALL_DB;

CREATE TABLE Footballer(player_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
					   	player_name varchar(100),
						club varchar(100),
						age int(5),
						rating int(5),
						nationality varchar(100),
						position varchar(100)
					    );
						
CREATE TABLE Manager (man_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
					  man_name varchar(200),
					 age int(5),
					 nationality varchar(100),
					 expr int(5),
					 club_manages varchar(100)
					 );

CREATE TABLE Valued(id int PRIMARY KEY,
					trans_val int ,
					wage int,
				   	FOREIGN KEY (id) REFERENCES Footballer(player_id) 
					ON DELETE CASCADE 
					ON UPDATE CASCADE
				   );
				   
CREATE TABLE Skills(player_id int PRIMARY KEY, 
					pace int, 				   
				   shoot int, 
				   pass  int,
				   drib int,
				   def int,
				   phy int,
				   jump int,
				   tackling int,
				   handling int,
				   kick int,
				   FOREIGN KEY (player_id) REFERENCES Footballer(player_id) 
				   ON DELETE CASCADE
				   ON UPDATE CASCADE
				   );
				   
				   
CREATE TABLE Player_stats(player_id int PRIMARY KEY,
						 prev_club varchar(100),
						 goals int,
						 assists int,
						 passes int,
						 tackles int,
						 saves int, 
						 FOREIGN KEY(player_id) REFERENCES Footballer(player_id)
						 ON DELETE CASCADE 
						 ON UPDATE CASCADE 
						 );


CREATE TABLE Team_stats (name varchar(100) PRIMARY KEY,
						 num_of_trophies int,
						 num_of_wins int,
						 num_of_losses int,
						 num_of_draws int
						);

ALTER TABLE Footballer AUTO_INCREMENT=50;
ALTER TABLE Manager AUTO_INCREMENT=1050;

INSERT INTO Footballer VALUES(1,'Messi','Barcelona',32,94,'Argentina','FWD');
INSERT INTO Footballer VALUES(2,'Ronaldo','Juventus',34,93,'Portugal','FWD');
INSERT INTO Footballer VALUES(3,'Neymar','PSG',27,92,'Brazil','FWD');
INSERT INTO Footballer VALUES(4,'Hazard','Real Madrid',28,91,'Belgium','FWD');
INSERT INTO Footballer VALUES(5,'de Bruyne','Man City',28,91,'Belgium','MID');
INSERT INTO Footballer VALUES(7,'van Dijk','Liverpool',28,90,'Netherlands','DEF');
INSERT INTO Footballer VALUES(6,'Oblak','Atletico Madrid',26,91,'Slovenia','GK');
INSERT INTO Footballer VALUES(8,'Salah','Liverpool',27,90,'Egypt','FWD');
INSERT INTO Footballer VALUES(9,'Pogba','Man Utd',27,88,'France','MID');
INSERT INTO Footballer VALUES(10,'ter Stegen','Barcelona',27,90,'Germany','GK');
INSERT INTO Footballer VALUES(11,'Lewandowski','Bayern Munich',30,89,'Poland','FWD');
INSERT INTO Footballer VALUES(12,'Kante','Chelsea',29,89,'France','MID');
INSERT INTO Footballer VALUES(13,'Coutinho','Bayern Munich',27,87,'Brazil','MID');
INSERT INTO Footballer VALUES(14,'Sergio Ramos','Real Madrid',30,90,'Spain','DEF');
INSERT INTO Footballer VALUES(15,'de Ligt','Juventus',19,85,'Netherlands','DEF');
INSERT INTO Footballer VALUES(16,'Sancho','Dortmund',19,84,'England','FWD');
INSERT INTO Footballer VALUES(17,'Davies','Bayern Munich',18,72,'USA','MID');
INSERT INTO Footballer VALUES(18,'Pulisic','Chelsea',19,79,'USA','FWD');
INSERT INTO Footballer VALUES(19,'Guendozi','Arsenal',18,69,'France','MID');
INSERT INTO Footballer VALUES(20,'Chettri','Bengaluru',35,88,'India','FWD');

INSERT INTO Manager VALUES(10001,'Valverde',55,'Spain',19,'Barcelona');
INSERT INTO Manager VALUES(10002,'Sarri',60,'Italy',20,'Juventus');
INSERT INTO Manager VALUES(10003,'Kovac',47,'Croatia',11,'Bayern Munich');
INSERT INTO Manager VALUES(10004,'Guardiola',48,'Spain',12,'Man City');
INSERT INTO Manager VALUES(10005,'Klopp',55,'Germany',19,'Liverpool');
INSERT INTO Manager VALUES(10006,'Ole Gunnar',46,'Norway',7,'Man Utd');
INSERT INTO Manager VALUES(10007,'Tuschel',46,'Germnay',11,'PSG');
INSERT INTO Manager VALUES(10008,'Zidane',47,'France',4,'Real Madrid');
INSERT INTO Manager VALUES(10009,'Simeone',49,'Argentina',14,'Atletico Madrid');
INSERT INTO Manager VALUES(10010,'Lampard',41,'Spain',2,'Chelsea');
INSERT INTO Manager VALUES(10011,'Favre',61,'Switzerland',17,'Dortmund');
INSERT INTO Manager VALUES(10012,'Emery',47,'Spain',14,'Arsenal');
INSERT INTO Manager VALUES(10013,'Carles',50,'Spain',3,'Bengaluru');

INSERT INTO Valued VALUES(1,105,616);
INSERT INTO Valued VALUES(2,65,430);
INSERT INTO Valued VALUES(3,135,570);
INSERT INTO Valued VALUES(4,100,360);
INSERT INTO Valued VALUES(5,95,340);
INSERT INTO Valued VALUES(6,85,260);
INSERT INTO Valued VALUES(7,95,310);
INSERT INTO Valued VALUES(8,100,270);
INSERT INTO Valued VALUES(9,90,280);
INSERT INTO Valued VALUES(10,72,200);
INSERT INTO Valued VALUES(11,80,250);
INSERT INTO Valued VALUES(12,75,170);
INSERT INTO Valued VALUES(13,90,240);
INSERT INTO Valued VALUES(14,65,300);
INSERT INTO Valued VALUES(15,70,230);
INSERT INTO Valued VALUES(16,60,100);
INSERT INTO Valued VALUES(17,25,30);
INSERT INTO Valued VALUES(18,55,140);
INSERT INTO Valued VALUES(19,16,45);
INSERT INTO Valued VALUES(20,20,15);


INSERT INTO Skills(player_id,pace,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(1,87,92,92,96,39,66,20,27,NULL,40);
INSERT INTO Skills(player_id,pace, shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(2,90,93,82,89,38,78,25,30,NULL,42);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(3,91,85,87,95,32,58,27,22,NULL,35);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(4,91,83,86,94,35,66,19,23,NULL,37);
INSERT INTO Skills(player_id,pace, shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(5,76,86,92,87,61,78,32,33,NULL,41);	
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(6,NULL,45,60,NULL,67,66,78,87,92,89);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(7,77,60,70,72,90,86,25,77,NULL,47);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(8,91,86,81,89,45,74,21,37,NULL,22);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(9,74,76,89,90,72,66,31,22,NULL,39);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(10,NULL,41,62,NULL,68,61,88,85,88,90);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(11,71,88,74,85,41,82,39,52,NULL,45);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(12,78,65,77,81,87,83,39,57,NULL,39);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(13,72,68,75,74,87,85,50,68,NULL,51);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(14,79,80,84,90,52,64,31,35,NULL,29);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(15,67,58,66,69,83,84,49,61,NULL,49);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(16,68,78,88,81,29,71,29,25,NULL,31);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(17,65,75,90,81,35,72,22,21,NULL,35);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(18,61,72,85,85,33,73,28,26,NULL,31);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(19,60,70,86,89,31,72,25,24,NULL,30);
INSERT INTO Skills(player_id,pace ,shoot,pass,drib,def,phy,jump,tackling,handling,kick) 
	VALUES(20,NULL,40,60,NULL,65,60,85,81,87,89);
	
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(1,"Barcelona",602,239,null,250,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(2,"Real Madrid",450,119,null,210,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(3,"Barcelona",100,55,null,211,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(4,"Chelsea",151,215,null,350,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(5,"Wolvesburg",45,50,null,300,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(6,"Benfica",NULL,NULL,null,100,150);

#insert values from here leaving id and team 

INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(7,"Southampton",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(8,"AS Roma",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(9,"	Juventus",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(10,"Bor. M'gladbach",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(11,"Dortmund",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(12,"Leister City",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(13,"Liverpool",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(14,"Sevilla",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(15,"Ajax",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(16,"Dortmund",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(17,"Munich 2",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(18,"Dortmund",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(19,"Lorient",602,239,null,650,null);
INSERT INTO Player_stats(player_id,prev_club,goals,assists,passes,tackles,saves) VALUES(20,"Mumbai city",602,239,null,650,null);

#insert values for 10 teams aleast
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Barcelona",20,26,9,3);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Juventus",18,28,6,4);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Bayern Munich",10,24,6,4);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Man City",6,32,2,4);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Liverpool",14,30,7,1);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Man Utd",15,19,9,10);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("PSG",4,29,4,5);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Real Madrid",21,21,5,12);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Atletico Madrid",5,20,10,8);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Chelsea",7,21,9,7);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Dortmund",12,23,7,4);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Arsenal",10,21,7,10);
INSERT INTO team_stats(name,num_of_trophies,num_of_wins,num_of_losses,num_of_draws) VALUES("Bengaluru",5,20,8,8);

