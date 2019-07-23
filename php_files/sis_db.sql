DROP DATABASE IF EXISTS sis_db;
CREATE DATABASE sis_db;
use sis_db;



CREATE TABLE admin(
    admin_id INT(4) PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL
);

CREATE TABLE users(
    user_id VARCHAR(4) PRIMARY KEY,
    username VARCHAR(20) NOT null,
    PASSWORD varchar(20) not NULL

);

CREATE TABLE clubs(
    club_id VARCHAR(4) PRIMARY KEY,
    club_name VARCHAR(20) NOT NULL,
    manager_id VARCHAR(4),
    pl_titles INT(4),
    stadium_id VARCHAR(4),
    rank INT(4) 
);

CREATE TABLE fixtures(
    club_id1 VARCHAR(4),
    club_id2 VARCHAR(4),
    m_time VARCHAR(4),
    m_date DATE,
    stadium_id VARCHAR(4)

);

CREATE table stadiums(
    stadium_id VARCHAR(4) PRIMARY KEY,
    satdium_name VARCHAR(20) NOT NULL,
    capacity INT(5) NOT NULL,
    location VARCHAR(20)NOT NULL,
    built INT(4) NOT NULL,
    pitch_size VARCHAR(20) NOT NULL

);
create table phone(
    phone_id INT(5) PRIMARY KEY,
    phone_number INT(11) NOT NULL,
    stadium_id VARCHAR(4) 

    -- CONSTRAINT FK_satdium_id FOREIGN KEY (stadium_id) REFERENCES stadiums(stadisum_id)
);


CREATE TABLE team_stat(
    club_id VARCHAR(4),
    wins INT(4),
    losses INT(4),
    goals INT(4) ,
    yellow_cards INT(4),
    red_card INT(4),
    goals_conceded INT(4),
    clean_cheats INT(4)
);

CREATE TABLE managers(
    manager_id VARCHAR(4) PRIMARY KEY,
    manager_name VARCHAR(20) NOT NULL,
    nationality VARCHAR(10) NOT NULL,
    club_id VARCHAR(4),
    season_id VARCHAR(4)

);
CREATE table players(
    player_id VARCHAR(4) PRIMARY KEY,
    player_name VARCHAR(30) NOT NULL,
    position VARCHAR(3) not null,
    nationality VARCHAR(10) NOT null,
     club_id VARCHAR(4),
    season_id VARCHAR(4)

);


CREATE table palyer_stats(
    player_id VARCHAR(4),
    club_id VARCHAR(4),
    goals_scored INT(4),
    assist INT(4)
);

CREATE TABLE clean_sheets(
    player_id VARCHAR(4),
    club_id VARCHAR(4),
    c_sheets INT(4)

);

CREATE TABLE seasons(
    season_id VARCHAR(4) PRIMARY KEY,
    season_name VARCHAR(6) not NULL
);

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



ALTER TABLE phone
ADD FOREIGN KEY (stadium_id) REFERENCES stadiums(stadium_id);


ALTER TABLE clubs
ADD FOREIGN KEY (manager_id) REFERENCES managers(manager_id);
ALTER TABLE clubs
ADD FOREIGN KEY (stadium_id) REFERENCES stadiums(stadium_id);

ALTER TABLE fixtures
ADD FOREIGN KEY (club_id1) REFERENCES clubs(club_id);

ALTER TABLE fixtures
ADD FOREIGN KEY (club_id2) REFERENCES clubs(club_id);

ALTER TABLE fixtures
ADD FOREIGN KEY (stadium_id) REFERENCES stadiums(stadium_id);


ALTER TABLE managers
ADD FOREIGN KEY (club_id) REFERENCES clubs(club_id);

ALTER TABLE managers
ADD FOREIGN KEY (season_id) REFERENCES seasons(season_id);

ALTER TABLE players
ADD FOREIGN KEY (club_id) REFERENCES clubs(club_id);

ALTER TABLE players
ADD FOREIGN KEY (season_id) REFERENCES seasons(season_id);

ALTER TABLE palyer_stats
ADD FOREIGN KEY (club_id) REFERENCES clubs(club_id);

ALTER TABLE palyer_stats
ADD FOREIGN KEY (player_id) REFERENCES players(player_id);

ALTER TABLE clean_sheets
ADD FOREIGN KEY (club_id) REFERENCES clubs(club_id);

ALTER TABLE clean_sheets
ADD FOREIGN KEY (player_id) REFERENCES players(player_id);

ALTER TABLE points_table
ADD FOREIGN KEY (club_id) REFERENCES clubs(club_id);

ALTER TABLE points_table
ADD FOREIGN KEY (season_id) REFERENCES seasons(season_id);


