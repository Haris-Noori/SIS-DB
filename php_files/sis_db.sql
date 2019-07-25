----------------------------------------------------------------------
----------------
-- Project Name: Sports Information System
-- Name : 16i-0267 - Ali Jved 
-- : 16i-0480 - Bilal Amjad
-- : 17p-6003 - M.Haris Noori
-- Project Description : We are developing a Web based Premier League information system. Premier League is an English Football league 
-- which consists of 20 football clubs from different cities of England. This system is free for everyone and people can get every 
-- update and every kind of information about Premier League through this system
----------------------------------------------------------------------

DROP DATABASE IF EXISTS sis_db;
CREATE DATABASE sis_db;
use sis_db;


-- TABLES CREATION --

-- TABLE admin
CREATE TABLE admins(
    admin_id INT(4) PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL
);

-- TABLE users
CREATE TABLE users(
    user_id VARCHAR(4) PRIMARY KEY,
    username VARCHAR(20) NOT null,
    PASSWORD varchar(20) not NULL

);

-- TABLE clubs
CREATE TABLE clubs(
    club_id VARCHAR(4) PRIMARY KEY,
    club_name VARCHAR(20) NOT NULL,
    manager_id VARCHAR(4),
    pl_titles INT(4),
    stadium_id VARCHAR(4),
    rank INT(4) 
);

-- TABLE fixtures
CREATE TABLE fixtures(
    club_id1 VARCHAR(4),
    club_id2 VARCHAR(4),
    m_time VARCHAR(4),
    m_date DATE,
    stadium_id VARCHAR(4)

);

-- TABLE stadiums
CREATE TABLE stadiums(
    stadium_id VARCHAR(4) PRIMARY KEY,
    stadium_name VARCHAR(20) NOT NULL,
    capacity INT(5) NOT NULL,
    location VARCHAR(30)NOT NULL,
    built INT(4) NOT NULL,
    pitch_size VARCHAR(20) NOT NULL

);

-- TABLE phone
CREATE TABLE phone(
    phone_id INT(5) PRIMARY KEY,
    phone_number INT(11) NOT NULL,
    stadium_id VARCHAR(4) 

);

-- TABLE team_stats
CREATE TABLE team_stats(
    club_id VARCHAR(4),
    wins INT(4),
    losses INT(4),
    goals INT(4) ,
    yellow_cards INT(4),
    red_cards INT(4),
    goals_conceded INT(4),
    clean_sheets INT(4)
);

-- TABLE managers
CREATE TABLE managers(
    manager_id VARCHAR(4) PRIMARY KEY,
    manager_name VARCHAR(20) NOT NULL,
    nationality VARCHAR(10) NOT NULL,
    club_id VARCHAR(4),
    season_id VARCHAR(4)

);

-- TABLE players
CREATE TABLE players(
    player_id VARCHAR(4) PRIMARY KEY,
    player_name VARCHAR(30) NOT NULL,
    position VARCHAR(4) NOT NULL,
    nationality VARCHAR(10) NOT NULL,
    club_id VARCHAR(4),
    season_id VARCHAR(4)

);

-- TABLE player_stats
CREATE TABLE player_stats(
    player_id VARCHAR(4),
    club_id VARCHAR(4),
    goals_scored INT(4),
    assists INT(4)
);

-- TABLE clean_sheets
CREATE TABLE clean_sheets(
    player_id VARCHAR(4),
    club_id VARCHAR(4),
    c_sheets INT(4)

);

-- TABLE seasons
CREATE TABLE seasons(
    season_id VARCHAR(4) PRIMARY KEY,
    season_name VARCHAR(6) not NULL
);

-- TABLE points_table
CREATE TABLE points_table(
    club_id VARCHAR(4),
    season_id VARCHAR(4),
    played INT(4),
    won INT(4),
    drawn INT(4),
    lost INT(4),
    gf INT(4),
    ga INT(4),
    gd INT(4),
    points INT(4)

);
--

-- ALTER TABLES FOR FOREIGN KEYS
--
ALTER TABLE phone
ADD CONSTRAINT FK_stadium_id_phone FOREIGN KEY (stadium_id) REFERENCES stadiums(stadium_id);

ALTER TABLE clubs
ADD CONSTRAINT FK_manager_id_clubs FOREIGN KEY (manager_id) REFERENCES managers(manager_id);
ALTER TABLE clubs
ADD CONSTRAINT FK_stadium_id_clubs FOREIGN KEY (stadium_id) REFERENCES stadiums(stadium_id);

ALTER TABLE fixtures
ADD CONSTRAINT FK_club_id1_fix FOREIGN KEY (club_id1) REFERENCES clubs(club_id);
ALTER TABLE fixtures
ADD CONSTRAINT FK_club_id2_fix FOREIGN KEY (club_id2) REFERENCES clubs(club_id);
ALTER TABLE fixtures
ADD CONSTRAINT FK_stadium_id_fix FOREIGN KEY (stadium_id) REFERENCES stadiums(stadium_id);

ALTER TABLE managers
ADD CONSTRAINT FK_club_id_managers FOREIGN KEY (club_id) REFERENCES clubs(club_id);
ALTER TABLE managers
ADD CONSTRAINT FK_season_id_managers FOREIGN KEY (season_id) REFERENCES seasons(season_id);

ALTER TABLE players
ADD CONSTRAINT FK_club_id_players FOREIGN KEY (club_id) REFERENCES clubs(club_id);
ALTER TABLE players
ADD CONSTRAINT FK_season_id_players FOREIGN KEY (season_id) REFERENCES seasons(season_id);

ALTER TABLE player_stats
ADD CONSTRAINT FK_club_id_player_stats FOREIGN KEY (club_id) REFERENCES clubs(club_id);
ALTER TABLE player_stats
ADD CONSTRAINT FK_player_id_player_stats FOREIGN KEY (player_id) REFERENCES players(player_id);

ALTER TABLE clean_sheets
ADD CONSTRAINT FK_club_id_clean_sheets FOREIGN KEY (club_id) REFERENCES clubs(club_id);
ALTER TABLE clean_sheets
ADD CONSTRAINT FK_player_id_clean_sheets FOREIGN KEY (player_id) REFERENCES players(player_id);

ALTER TABLE points_table
ADD CONSTRAINT FK_club_id_points_table FOREIGN KEY (club_id) REFERENCES clubs(club_id);
ALTER TABLE points_table
ADD CONSTRAINT FK_season_id_points_table FOREIGN KEY (season_id) REFERENCES seasons(season_id);
-----------------------------------------------------------------------------------

-- DISABLE FK CONSTRAINTS
SET FOREIGN_KEY_CHECKS = 0;
 ---------------------------------------------------------------------------------

-- INSERTION STARTS HERE --
-- ADMIN
INSERT INTO admins(admin_id, username, password) VALUES (1, 'haris', 'haris');
INSERT INTO admins(admin_id, username, password) VALUES (2, 'ali', 'javed');
INSERT INTO admins(admin_id, username, password) VALUES (3, 'bilal', 'amjad');

-- CLUBS
INSERT INTO clubs(club_id, club_name, manager_id, pl_titles, stadium_id, rank) VALUES ('cl1', 'Arsenal', 'mgr1', 3, 'std1', 5);
INSERT INTO clubs(club_id, club_name, manager_id, pl_titles, stadium_id, rank) VALUES ('cl2', 'Chelsea', 'mgr2', 5, 'std2', 3);
INSERT INTO clubs(club_id, club_name, manager_id, pl_titles, stadium_id, rank) VALUES ('cl3', 'Manchester United', 'mgr3', 13, 'std3', 6);

-- MANAGERS
INSERT INTO managers(manager_id, manager_name, nationality, club_id, season_id) VALUES ('mgr1', 'Unai Emery', 'Spanish', 'cl1', 's18');
INSERT INTO managers(manager_id, manager_name, nationality, club_id, season_id) VALUES ('mgr2', 'Maurizio Sarri', 'Italian', 'cl2', 's18');
INSERT INTO managers(manager_id, manager_name, nationality, club_id, season_id) VALUES ('mgr3', 'Ole Gunnar', 'Spanish', 'cl3', 's18');

-- PLAYERS
INSERT INTO players(player_id, player_name, position, nationality, club_id, season_id) VALUES ('pl1', 'Mesut Ozil', 'MID', 'German', 'cl1', 's18');
INSERT INTO players(player_id, player_name, position, nationality, club_id, season_id) VALUES ('pl2', 'NGolo Kante', 'MID', 'French', 'cl2', 's18');
INSERT INTO players(player_id, player_name, position, nationality, club_id, season_id) VALUES ('pl3', 'Paul Pogba', 'MID', 'French', 'cl3', 's18');
INSERT INTO players(player_id, player_name, position, nationality, club_id, season_id) VALUES ('pl4', 'David de Gea', 'GK', 'Spanish', 'cl3', 's18');
INSERT INTO players(player_id, player_name, position, nationality, club_id, season_id) VALUES ('pl5', 'Petr Cech', 'GK', 'Czech', 'cl1', 's18');
INSERT INTO players(player_id, player_name, position, nationality, club_id, season_id) VALUES ('pl6', 'Robert Green', 'GK', 'English', 'cl2', 's18');

-- FIXTURES
INSERT INTO fixtures(club_id1, club_id2, m_time, m_date, stadium_id) VALUES ('cl1', 'cl2', '00:00', '2018-08-17', 'st1');
INSERT INTO fixtures(club_id1, club_id2, m_time, m_date, stadium_id) VALUES ('cl2', 'cl3', '16:30', '2018-08-17', 'st2');
INSERT INTO fixtures(club_id1, club_id2, m_time, m_date, stadium_id) VALUES ('cl3', 'cl1', '20:30', '2018-08-20', 'st3');

-- STADIUMS
INSERT INTO stadiums(stadium_id, stadium_name, capacity, location, built, pitch_size) VALUES ('st1', 'Emirates Stadium', 60260, '75 Drayton Park, London', 2006, '105m x 68m');
INSERT INTO stadiums(stadium_id, stadium_name, capacity, location, built, pitch_size) VALUES ('st2', 'Stamford Bridge', 40853, 'Fulham Road, London', 1877, '103m x 67.5m');
INSERT INTO stadiums(stadium_id, stadium_name, capacity, location, built, pitch_size) VALUES ('st3', 'Old Trafford', 75000, 'Old Trafford, Manchester', 1909, '105m x 68m');

-- PHONE
INSERT INTO phone(phone_id, phone_number, stadium_id) VALUES (101, 02076195003, 'st1');
INSERT INTO phone(phone_id, phone_number, stadium_id) VALUES (102, 03718111955, 'st1');
INSERT INTO phone(phone_id, phone_number, stadium_id) VALUES (103, 01618688000, 'st3');

-- TEAM STATS
INSERT INTO team_stats(club_id, wins, losses, goals, yellow_cards, red_cards, goals_conceded, clean_sheets) VALUES ('cl1', 565, 213, 1845, 1546, 88, 1013, 401);
INSERT INTO team_stats(club_id, wins, losses, goals, yellow_cards, red_cards, goals_conceded, clean_sheets) VALUES ('cl2', 558, 223, 1770, 1627, 78, 1002, 420);
INSERT INTO team_stats(club_id, wins, losses, goals, yellow_cards, red_cards, goals_conceded, clean_sheets) VALUES ('cl3', 648, 166, 1989, 1473, 66, 929, 444);

-- PLAYER STATS
INSERT INTO player_stats(player_id, club_id, goals_scored, assists) VALUES ('pl1', 'cl1', 5, 2);
INSERT INTO player_stats(player_id, club_id, goals_scored, assists) VALUES ('pl2', 'cl2', 4, 4);
INSERT INTO player_stats(player_id, club_id, goals_scored, assists) VALUES ('pl3', 'cl3', 13, 9);

-- CLEAN SHEETS
INSERT INTO clean_sheets(player_id, club_id, c_sheets) VALUES ('pl4', 'cl3', 100);
INSERT INTO clean_sheets(player_id, club_id, c_sheets) VALUES ('pl5', 'cl1', 1);
INSERT INTO clean_sheets(player_id, club_id, c_sheets) VALUES ('pl6', 'cl2', 0);

-- POINTS TABLE
INSERT INTO points_table(club_id, season_id, played, won, drawn, lost, gf, ga, gd, points) VALUES ('cl1', 's18', 38, 21, 7, 10, 73, 51, 22, 70); 
INSERT INTO points_table(club_id, season_id, played, won, drawn, lost, gf, ga, gd, points) VALUES ('cl2', 's18', 38, 21, 9, 8, 63, 39, 24, 72);
INSERT INTO points_table(club_id, season_id, played, won, drawn, lost, gf, ga, gd, points) VALUES ('cl3', 's18', 38, 19, 9, 10, 65, 54, 11, 66);

-- USERS
INSERT INTO users(user_id, username, password) VALUES ('u1', 'Haris Noorwala', 'noori');
INSERT INTO users(user_id, username, password) VALUES ('u2', 'Bilal Khalid', 'dar');
INSERT INTO users(user_id, username, password) VALUES ('u3', 'Usman Kaisser', 'fast');
INSERT INTO users(user_id, username, password) VALUES ('u4', 'Syed Ali', 'javed');
----------------------------------------------------------------------------------

-- ENABLE FK CONSTRAINTS
SET FOREIGN_KEY_CHECKS = 1;

 ---------------------------------------------------------------------------------






