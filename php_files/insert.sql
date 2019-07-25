-- ADMIN
INSERT INTO admin(admin_id, username, password) VALUES (1, 'haris', 'haris');
INSERT INTO admin(admin_id, username, password) VALUES (2, 'ali', 'javed');
INSERT INTO admin(admin_id, username, password) VALUES (3, 'bilal', 'amjad');

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
