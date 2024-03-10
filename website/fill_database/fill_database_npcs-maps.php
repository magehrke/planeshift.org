<?php

    /* ########### CONNECT TO DB ########### */

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path = $path . "/includes/db_connect.php";
    include $path;

    /* ########## NPC-Table ########## */
    /* drop NPCs database table if exists */
    $mysqli->query("DROP TABLE IF EXISTS npcs")
        or die($mysqli->error);


    /* create database table for NPCs */
    $newTable = "CREATE TABLE IF NOT EXISTS npcs (
                        name VARCHAR(50) NOT NULL,
                        area VARCHAR(50) NOT NULL,
                        profession VARCHAR(80) NOT NULL,
                        quantity INT NOT NULL,
                        checkup DATE NOT NULL,
                        position VARCHAR(700) NOT NULL,
                        walking VARCHAR(1000),
                        mainPos bit NOT NULL,
                        PRIMARY KEY (name, area)
                ) ENGINE = MyISAM";

    $mysqli->query($newTable) or die($mysqli->error);

    /* All nps in alphabetical order */
    /* Order: name, location, quantity of this npc, last checkup, positions */
    $npcs_to_insert = array(
        // Amdeneir
        'Alnaxen Inzein','Amdeneir','Guard','1','2018-02-03','-49.42 24.22 -110.08', '', 1,
        'Blxzahe Rlzsda','Amdeneir','Guard','1','2018-02-03','-42.13 27.73 7.45', '', 1,
        'Boreen Wigor','Amdeneir','tbd',1,'2018-2-3','-29.21 28.80 11.16', '', 1,
        'Boroz Tolka', 'Amdeneir','Priest (Talad)',1, 'none', '-34.88 24.05 -104.78', '', 1,
        'Chirkal Masoqi', 'Amdeneir','tbd', 1, '2018-03-27', '2.46 33.58 -146.35', '', 1,
        'Ellioran Foein', 'Amdeneir','Stable Keep', 1, '2018-02-03', '-0.79 22.12 78.90', '', 1,
        'Hioona Yelian','Amdeneir','Criminal', 1,'2018-2-3','7.64 24.60 18.86', '', 1,
        'Jarda Ynarow', 'Amdeneir','Barkeeper', 1, 'none', '-23.45 22.80 21.17', '', 1,
        'Jolter Hosull', 'Amdeneir','Pterosaur Keeper', 1, 'none', '-26.11 23.84 -9.73', '', 1,
        'Keianna Xoreloran','Amdeneir','Herbalist,Healer', 1,'2018-03-02', '-21 0 -81', '', 1,
        'Kethzun Guthazik', 'Amdeneir','Blacksmith', 1, 'none', '-42.52 26.46 -16.23', '', 1,
        'Kzavu Gilnet', 'Amdeneir','Fishdealer', 1, '2018-02-03', '18.75 21.51 79.70', '', 1,
        'Leann Grudaire','Amdeneir','Brewer', 1,'2018-2-3','-18.87 35.23 23.35', '', 1,
        'Linoria Dialenie','Amdeneir','Artist', 1,'2018-02-03', '40.30 21.83 28.97', '', 1,
        'Lipzawie Foxriw','Amdeneir','tbd', 1,'2018-2-3', '-42.13 27.73 7.45', '', 1,
        'Muuro Zarel','Amdeneir','Artist',1,'2018-02-03','41.71 21.83 30.82', '', 1,
        'Njormik Carpenter', 'Amdeneir','Carpenter', 1, 'none', '-4.25 23.34 62.12', '', 1,
        'Noora Wiedsiek','Amdeneir','tbd',1,'2018-02-03','-65.21 26.14 -86.95', '', 1,
        'Qaxin Kaxen','Amdeneir','Guard',1,'2018-02-03','16.86 25.79 -72.18', '', 1,
        'Qoien Masoqi', 'Amdeneir','Guard', 1, '2018-02-03', '17.48 21.56 66.77', '', 1,
        'Rogien Wigor', 'Amdeneir','Guard', 1, '2018-02-03', '10.06 21.23 86.93', '', 1,
        'Steeldart', 'Amdeneir','Pterosauer', 1, 'none', '-27.75 23.84 -8.02', '', 1,
        'Woorixa Lazdia','Amdeneir','Guard',1,'2018-02-03','-42.18 23.86 -114.24', '', 1,
        'Zornatan Xiorad', 'Amdeneir','Drunkard', 1,'2018-03-04', '-29.44 46.22 19.02', '', 1,


        // Arena
        'Archery Target', 'Arena','Mob', 1, '2018-02-03', '-70 0 16', '', 1,
        'Archilaya Gurpleferd', 'Arena','Cook', 1, '2020-06-01', '-70 17 49', '', 1,
        'Birkin Draewr', 'Arena','Beastmaster', 1, '2018-02-06', '-12.67 9.42 -20.03', '', 1,
        'Bordaron Arakaben', 'Arena','Mercenary', 1, '2020-06-01', '-25 0 -4', '', 1,
        'Clacker', 'Arena','Mob', 5, '2018-02-03', '34 0 -22, 39 0 -23, 22 0 -38, 45 0 -50, 47 0 -49', '', 1,
        'Coamti', 'Arena','Mob', 2, '2018-02-03', '24 0 -32, 50 0 -35', '', 1,
        'Deriur Eirtaban','Arena','tbd', 1, '2018-02-06', '-31.82 4.88 -18.01', '', 1,
        'Diseased Rat', 'Arena','Mob', 3, '2018-02-03', '38 0 -22,  24 0 -48, 55 0 -33', '', 1,
        'Dlayo Gladiator', 'Arena','Mob', 5, '2018-02-03', '41 0 27, 21 0 40, 29 0 40, 47 0 55, 49 0 53', '', 1,
        'Expert Gladiator', 'Arena','Mob', 7, '2018-02-03', '5 0 39, 9 0 44, 4 0 51, 16 0 53, 17 0 65, 14 0 65, 7 0 66', '', 1,
        'Flayed Velnishi', 'Arena','Mob', 3, '2018-02-03', '43 0 45, 37 0 44, 41 0 39', '', 1,
        'Gannr Serphairn', 'Arena','tbd', 1, '2018-02-06', '7.53 25.93 -10.24', '', 1,
        'Gladiator', 'Arena','Mob', 7, '2018-02-03', '-27.20 0.00 32.95, -44.65 0.00 26.09, -51.18 0.00 44.47, -30.08 0.00 50.83, -36.50 0.00 35.43, -54.88 0.00 37.65, -56.77 0.00 44.08', '', 1,
        'Gregori Stevald', 'Arena','tbd', 1, 'none', '-0.48 -7.01 0.60 4am-10pm', '-34.60 4.88 0.06', 1,
        'Jade Clacker', 'Arena','Mob', 2, '2018-02-03', '30 0 -46, 50 0 -44', '', 1,
        'Jjousk Carryt', 'Arena','Bowmaster', 1, '2018-02-06', '-67.47 17.76 -47.18', '', 1,
        'Kireya Ahinit', 'Arena','tbd', 1, '2020-06-01', '-65.08 17.76 50.45', '', 1,
        'Kretch Lahaine', 'Arena','tbd', 1, '2018-02-06', '1.33 3.90 -6.88', '', 1,
        'Krri Koreni', 'Arena','tbd', 1, '2018-02-06', '9.61 11.69 1.61', '', 1,
        'Laranier Vieduran', 'Arena','tbd', 1, '2018-02-06', '-1.77 -9.96 -40.02', '', 1,
        'Liera Zireti', 'Arena','Alchemist', 1, 'none', '-53.21 17.76 -61.77', '', 1,
        'Mercenary', 'Arena','Mob', 6, '2018-02-03', '-31 0 57, -39 0 57, -51 0 41, -56 0 31, -39 0 26, -36 0 30', '', 1,
        'Nayera Menayan', 'Arena','tbd', 1, '2018-02-06', '21.43 4.11 -51.59', '', 1,
        'One-Eyed Rat', 'Arena','Mob', 6, '2018-02-03', '27 0 -37, 33 0 -42, 38 0 -33, 52 0 -48, 50 0 -40, 54 0 -33', '', 1,
        'Tefusang', 'Arena','Mob', 1, '2018-02-03', '-36 0 -43', '', 1,
        'Tefusangling', 'Arena','Mob', 2, '2018-02-03', '-30 0 -43, -40 0 -56', '', 1,
        'Thunder Clacker', 'Arena','Mob', 2, '2018-02-03', '56 0 -41, 46 0 -44', '', 1,
        'Tloke Drone', 'Arena','Mob', 2, '2018-02-03', '35 0 -38, 48 0 -32, 44 0 -39', '', 1,
        'Tloke Queen', 'Arena','Mob', 1, 'none', '-29.89 0.00 39.08', '', 1,
        'Tloke Warrior', 'Arena','Mob', 3, '2018-02-03', '-41 0 -50, -23 0 -42, -31 0 -25', '', 1,
        'Training Dummy', 'Arena','Mob', 2, '2018-02-03', '-70 0 0, -70 0 -16', '', 1,
        'Trepor', 'Arena','Mob', 3, '2018-02-03', '-41 0 -23, -49 0 -29, -34 0 -53', '', 1,
        'Trepor Queen', 'Arena','Mob', 1, '2018-02-03', '-44 0 - 35', '', 1,
        'Trepor Warrior', 'Arena','Mob', 4, '2018-02-03', '-25 0 -49, -41 0 -49, -48 0 -50, -24 0 -32', '', 1,
        'Veja Pontor', 'Arena','Blacksmith (Shields)', 1, 'none', '-63.75 17.76 -52.47', '-64 0 -50, -65 0 -63, -50 0 -75, -45 0 -83, -35 0 -87, -25 0 -87, -15 0 -87, -5 0 -87, 5 0 -87, 15 0 -87, 25 0 -87, 35 0 -84, 45 0 -74, 55 0 -64, 65 0 -54, 75 0 -44, 85 0 -34, 85 0 -24, 85 0 -14, 85 0 0, 95 0 0, 105 0 0, 115 0 0, 125 0 0, 135 0 0, 145 0 0, 155 0 0', 1,
        'Velnishi', 'Arena','Mob', 3, '2018-02-03', '43 0 38, 41 0 33, 36 0 38', '', 1,
        'Vesper Arangma', 'Arena','Mob', 3, '2018-02-03', '-45 0 51, -26 0 46, -22 0 38', '', 1,
        'Vresa Nohdiir', 'Arena','tbd', 1, '2018-02-06', '-34.70 4.88 0.12', '', 1,
        'Weaver Arangma', 'Arena','Mob', 1, 'none', '-36.43 0.00 -38.09', '', 1,

        // Bronze Doors Fortress
        'Aerayau Strongwill', 'Bronze Doors Fortress','tbd', 1, 'none', '-23.71 121.87 -560.93', '', 1,
        'Beniua Busuka', 'Bronze Doors Fortress','tbd', 1, 'none', '-30.77 121.87 -556.87', '', 1,
        'Canyt Klannarr', 'Bronze Doors Fortress','tbd', 1, 'none', '-193.33 51.93 -791.91', '', 1,
        'Chrosor Soran', 'Bronze Doors Fortress','tbd', 1, 'none', '-1.04 94.77 -617.30', '', 1,
        'Deelor Blackeye', 'Bronze Doors Fortress','tbd', 1, 'none', '-157.26 110.78 -579.13', '', 1,
        'Frost Arangma', 'Bronze Doors Fortress','tbd', 2, 'none', '62.72 42.64 -711.44, -192.87 48.14 -816.11', '', 1,
        'Hiacheius Dilechi', 'Bronze Doors Fortress','tbd', 1, 'none', '-93.81 96.36 -480.99', '', 1,
        'Hinoserri', 'Bronze Doors Fortress','tbd', 1, 'none', '-121.12 132.27 -574.10', '', 1,
        'Jade Clacker', 'Bronze Doors Fortress','tbd', 1, 'none', '62.50 -49.17 -1101.71', '', 1,
        'Kimlorm', 'Bronze Doors Fortress','tbd', 1, 'none', '2.23 94.78 -616.07', '', 1,
        'Lawar-Lava Cave Entrance', 'Bronze Doors Fortress','tbd', 1,'2018-02-03', '50.00 -37.01 -1228.00', '', 1,
        'Mudobber Coamti', 'Bronze Doors Fortress','tbd', 1, 'none', '41.58 -1.53 -805.78', '', 1,
        'Nkaw', 'Bronze Doors Fortress','tbd', 1, 'none', '-144.95 -65.67 -1188.10', '', 1,
        'Nkel', 'Bronze Doors Fortress','tbd', 1, 'none', '42.77 -37.01 -1201.08', '', 1,
        'Polyuntri Stevald', 'Bronze Doors Fortress','tbd', 1, 'none', '-123.71 121.87 -560.36', '', 1,
        'Pterosaur', 'Bronze Doors Fortress','tbd', 1, '2018-02-23', '-61.13 125.11 -586.49', '', 1,
        'Raithen', 'Bronze Doors Fortress','tbd', 1, 'none', '-138.91 150.25 -565.32', '', 1,
        'Rorwein Jonnavo','Bronze Doors Fortress','tbd',1,'2018-02-03','-61.11 125.11 -584.06', '', 1,
        'Rylour Awnnys', 'Bronze Doors Fortress','tbd', 1, 'none', '-77.88 121.79 -550.12', '', 1,
        'Sysial Shillor', 'Bronze Doors Fortress','tbd', 1, 'none', '-49.38 110.28 -516.32', '', 1,
        'Taemian Yangnk', 'Bronze Doors Fortress','tbd', 1, 'none', '-104.52 117.72 -559.66', '', 1,
        'Tarmeen Alecheech', 'Bronze Doors Fortress','tbd', 1, 'none', '-161.77 111.15 -570.22', '', 1,
        'Thrynt Glass', 'Bronze Doors Fortress','tbd', 1, 'none', '-112.26 87.84 -441.61', '', 1,
        'Vesper Arangma', 'Bronze Doors Fortress','tbd', 2, 'none', '59.70 -54.59 -1196.24, -179.94 -85.31 -1158.06', '', 1,
        'Weaver Arangma', 'Bronze Doors Fortress','tbd', 1, 'none', '-130.72 -80.76 -1138.74', '', 1,
        'Zhaomal Shehan', 'Bronze Doors Fortress','tbd', 1, 'none', '-110.52 87.84 -447.59', '', 1,

        // Bronze Door Road 1
        'Armored Riverling', 'Bronze Door Road 1','tbd', 1, 'none', '330.93 46.86 22.42', '', 1,
        'Clacker', 'Bronze Door Road 1','tbd', 1, 'none', '-446.62 33.65 -145.89', '', 1,
        'Coamti', 'Bronze Door Road 1','tbd', 2, 'none', '70.69 55.04 -484.57, -398.33 61.17 -53.94', '', 1,
        'Consumer', 'Bronze Door Road 1','tbd', 5, 'none', '-365.08 47.37 -471.46, -315.01 47.38 -504.75, -368.59 47.37 -492.59, -333.77 47.37 -491.73, -321.44 47.37 -474.45', '', 1,
        'Cutthroat', 'Bronze Door Road 1','tbd', 4, 'none', '8.17 61.37 -110.25, -33.44 56.85 13.83, 25.02 68.46 -22.91, -80.18 67.13 -94.12', '', 1,
        'Eagle Gobble', 'Bronze Door Road 1','tbd', 3, 'none', '-341.40 46.34 78.04, -334.53 45.75 80.57, -340.78 46.59 82.26', '', 1,
        'Grok Idon', 'Bronze Door Road 1','tbd', 1, 'none', '240.35 53.28 -398.31', '', 1,
        'Jade Clacker', 'Bronze Door Road 1','tbd', 6, 'none', '-135.42 47.37 5.03, -118.79 47.37 1.00, -142.91 47.41 17.24, -131.76 47.37 2.99, -437.12 33.49 -146.25, -132.86 47.37 26.06', '', 1,
        'Laure Eves', 'Bronze Door Road 1','tbd', 1, 'none', '-162.48 70.44 -361.56', '', 1,
        'Marfusang', 'Bronze Door Road 1','tbd', 2, 'none', '-146.52 48.33 398.27, -166.46 47.40 426.35', '', 1,
        'Maulbernaut', 'Bronze Door Road 1','tbd', 2, 'none', '-448.43 47.37 431.99, -502.13 47.53 326.76', '', 1,
        'Nyshyn Klannarr', 'Bronze Door Road 1','tbd', 1, 'none', '-497.56 46.37 172.98', '', 1,
        'Riverling', 'Bronze Door Road 1','tbd', 3, 'none', '-316.55 45.50 22.78, -335.11 46.18 38.19, -322.50 45.60 29.68', '', 1,
        'Rulayne Ogrin', 'Bronze Door Road 1','tbd', 1, 'none', '-350.73 47.54 -521.65', '', 1,
        'Serpent Gobble', 'Bronze Door Road 1','tbd', 3, 'none', '-260.52 47.25 40.31, -268.02 46.38 40.19, -264.02 46.87 33.52', '', 1,
        'Tefusang', 'Bronze Door Road 1','tbd', 9, 'none', '327.53 47.72 104.32, 533.82 53.57 98.17, 388.49 46.97 -210.84, -169.60 47.58 370.94, 295.93 47.41 129.22, 533.53 52.52 150.20, 369.88 46.94 -183.32, -180.04 47.45 400.99, -137.22 47.48 372.45', '', 1,
        'Tefusangling', 'Bronze Door Road 1','tbd', 6, 'none', '320.57 47.24 -210.01, 508.56 53.44 119.30, 292.66 47.37 71.07, 340.11 46.90 -190.26, 504.13 52.87 179.24, 256.97 47.40 124.97', '', 1,
        'Thalus Lau', 'Bronze Door Road 1','tbd', 1, '2017-04-10', '600.00 53.44 119.30', '', 1,
        'Thunder Clacker', 'Bronze Door Road 1','tbd', 6, 'none', '135.65 54.40 118.10, 81.27 53.42 218.53, 70.07 53.67 183.85, 213.25 47.74 170.32, 88.82 53.39 238.49, 77.57 53.67 204.28', '', 1,
        'Trepor', 'Bronze Door Road 1','tbd', 8, 'none', '-271.19 47.37 461.44, 48.47 49.38 -336.45, 44.81 49.38 -326.77, -280.93 47.37 466.43, 39.01 49.38 -335.00, 49.24 49.38 -329.04, 43.57 49.38 -317.81, -298.21 47.46 468.14', '', 1,
        'Trepor Queen', 'Bronze Door Road 1','tbd', 2, 'none', '47.83 49.52 -301.01, -275.62 47.44 483.97', '', 1,
        'Trepor Warrior', 'Bronze Door Road 1','tbd', 4, 'none', '-289.03 47.85 484.46, 35.87 49.38 -331.63, -264.04 47.37 472.27, 30.25 49.53 -318.25', '', 1,
        'Ukabnu', 'Bronze Door Road 1','tbd', 1, 'none', '-142.76 69.96 -373.34', '', 1,
        'Ulbernaut', 'Bronze Door Road 1','tbd', 5, 'none', '-509.73 47.37 258.45, -482.80 47.37 375.09, -493.67 47.37 256.06, -489.92 47.37 272.59, -450.15 47.37 381.21', '', 1,
        'Vilenaut', 'Bronze Door Road 1','tbd', 3, 'none', '-509.49 48.85 292.73, -492.88 47.37 421.38, -470.59 47.62 305.74', '', 1,

        // Bronze Door Road 2
        'Armored Riverling', 'Bronze Door Road 2','tbd', 2, 'none', '-448.21 29.05 221.26, -464.97 28.94 232.95', '', 1,
        'Blackroot','Bronze Door Road 2','tbd',1,'2018-02-06','-179.61 48.19 554.83', '', 1,
        'Consumer', 'Bronze Door Road 2','tbd', 4, 'none', '403.12 31.41 99.54, 398.67 31.38 76.84, 398.95 31.35 150.90, 423.90 31.40 86.57', '', 1,
        'Imago Consumer', 'Bronze Door Road 2','tbd', 3, 'none', '296.50 37.39 92.55, 227.16 33.02 129.67, 277.30 33.17 121.35', '', 1,
        'Jade Clacker', 'Bronze Door Road 2','tbd', 2, 'none', '-129.56 15.18 186.03, -121.96 19.18 212.89', '', 1,
        'Kora Windstone','Bronze Door Road 2','tbd', 1, '2018-02-06','-308.56 39.15 133.92', '', 1,
        'Marfusang', 'Bronze Door Road 2','tbd', 3, 'none', '-247.50 48.19 556.56, -183.02 48.19 531.98, -202.27 48.19 572.22', '', 1,
        'Maulbernaut', 'Bronze Door Road 2','tbd', 3, 'none', '599.27 52.21 155.71, 581.17 40.32 237.41, 556.42 50.82 182.55', '', 1,
        'Neoten Consumer', 'Bronze Door Road 2','tbd', 4, 'none', '208.34 31.18 85.58, 118.80 33.13 93.52, 137.54 33.13 75.23, 117.52 33.13 68.07', '', 1,
        'Riverling', 'Bronze Door Road 2','tbd', 3, 'none', '-448.83 28.36 228.61, -457.81 27.96 237.71, -454.07 28.34 230.07', '', 1,
        'Serpent Gobble', 'Bronze Door Road 2','tbd', 3, 'none', '-372.40 29.84 249.35, -380.35 28.60 259.16, -376.06 29.22 244.56', '', 1,
        'Tefusang', 'Bronze Door Road 2','tbd', 3, 'none', '-283.08 48.46 594.22, -320.76 55.16 576.35, -254.26 48.40 586.32', '', 1,
        'Tefusangling', 'Bronze Door Road 2','tbd', 3, 'none', '-387.41 55.29 589.79, -415.85 55.20 577.21, -387.05 55.22 563.10', '', 1,
        'Thunder Clacker', 'Bronze Door Road 2','tbd', 3, 'none', '-117.92 18.08 200.60, -110.96 15.23 190.84, -129.41 17.75 198.55', '', 1,
        'Trepor', 'Bronze Door Road 2','tbd', 4, 'none', '70.14 30.18 229.91, 3.87 30.12 173.17, 77.01 30.12 171.22, 51.76 30.12 176.51', '', 1,
        'Trepor Queen', 'Bronze Door Road 2','tbd', 1, 'none', '44.85 40.19 123.62', '', 1,
        'Trepor Warrior', 'Bronze Door Road 2','tbd', 2, 'none', '51.22 35.57 241.50, 25.68 35.46 198.84', '', 1,
        'Ulbernaut', 'Bronze Door Road 2','tbd', 8, 'none', '486.53 38.20 255.01, 490.75 38.15 201.47, -594.27 30.12 395.08, -507.55 36.14 560.65, 502.87 38.15 235.15, 464.29 38.15 214.79, -578.71 30.37 352.75, -537.33 36.13 550.44', '', 1,
        'Vilenaut', 'Bronze Door Road 2','tbd', 6, 'none', '-579.45 30.30 371.48, -533.64 36.14 578.90, 567.07 52.22 141.69, -574.60 36.65 322.86, -521.52 36.09 568.58, 587.47 52.20 130.12', '', 1,

        // Bronze Doors Outside
        'Armored Riverling', 'Bronze Doors Outside','tbd', 7, 'none', '-320.75 -185.41 -1408.05, -391.73 -262.53 -1607.77, -462.74 -262.75 -1556.85, -476.93 -264.34 -1603.25, -322.70 -181.94 -1420.60, -392.39 -261.90 -1587.48, -468.33 -263.56 -1584.00', '', 1,
        'Dark Rogue', 'Bronze Doors Outside','tbd', 5, 'none', '-390.74 -178.53 -1426.46, -390.59 -178.53 -1430.76, -395.86 -178.53 -1428.14, -389.06 -178.44 -1430.21, -392.83 -178.53 -1432.53', '', 1,
        'Dark Wanderer', 'Bronze Doors Outside','tbd', 1, 'none', '-1161.46 -269.30 -2014.48', '', 1,
        'Eagle Gobble', 'Bronze Doors Outside','tbd', 3, 'none', '602.18 -278.79 -1840.81, 587.46 -279.14 -1843.42, 596.23 -279.27 -1842.26', '', 1,
        'Easamau', 'Bronze Doors Outside','tbd', 1, 'none', '-748.79 -236.17 -1639.65', '', 1,
        'Elder Gorweal', 'Bronze Doors Outside','tbd', 1, '2018-02-04', '-1222.77 -267.99 -2002.23', '', 1,
        'Flayed Velnishi', 'Bronze Doors Outside','tbd', 2, 'none', '-519.87 -192.94 -1457.27, -495.40 -188.64 -1426.65', '', 1,
        'Frost Arangma', 'Bronze Doors Outside','tbd', 4, 'none', '-177.47 -105.10 -1232.93, -343.56 -219.03 -1538.17, 88.73 -63.55 -1294.15, -261.11 -155.49 -1427.70', '', 1,
        'Gawert', 'Bronze Doors Outside','tbd', 1, 'none', '595.47 -279.10 -1843.05', '', 1,
        'Jade Clacker', 'Bronze Doors Outside','tbd', 1, 'none', '-108.52 -170.22 -1480.36', '', 1,
        'Lorytia Starhammer', 'Bronze Doors Outside','tbd', 1, 'none', '-189.49 -198.52 -1550.17', '', 1,
        'Marfusang', 'Bronze Doors Outside','tbd', 2, 'none', '57.53 -286.45 -2202.97, 60.88 -285.79 -2179.54', '', 1,
        'Maulberlord', 'Bronze Doors Outside','tbd', 1, 'none', '-1339.43 -246.62 -1685.44', '', 1,
        'Maulbernaut', 'Bronze Doors Outside','tbd', 8, 'none', '-1104.31 -270.41 -1702.75, -1061.18 -280.26 -1679.32, -957.79 -254.14 -2334.83, -1262.00 -237.21 -1749.78, -1266.36 -237.53 -1667.01, -1095.07 -275.26 -1690.16, -965.01 -255.61 -2298.14, -1306.59 -240.02 -1712.96', '', 1,
        'Meoeor', 'Bronze Doors Outside','tbd', 1, 'none', '606.03 -260.42 -1532.56', '', 1,
        'Mudobber Coamti', 'Bronze Doors Outside','tbd', 4, 'none', '-249.12 -163.89 -1465.94, -142.17 -130.85 -1376.52, -245.39 -163.78 -1461.98, 141.78 -73.74 -1367.25', '', 1,
        'One-Claw', 'Bronze Doors Outside' ,'tbd', 1,'2018-02-04', '975.00 -263.84 -1467.18', '', 1,
        'Petrified Kran', 'Bronze Doors Outside','tbd', 1, 'none', '-304.75 -192.35 -1398.24', '', 1,
        'Raerul Bloodaxe', 'Bronze Doors Outside','tbd', 1, 'none', '-127.88 -183.81 -1533.44', '', 1,
        'Riverling', 'Bronze Doors Outside','tbd', 9, 'none', '-425.93 -280.41 -1628.20, -421.07 -280.10 -1591.11, -435.55 -276.96 -1556.76, -291.21 -191.47 -1390.68, -454.25 -280.56 -1638.37, -438.87 -282.35 -1606.04, -434.32 -282.30 -1574.05, -280.73 -192.54 -1401.50, -433.69 -281.27 -1653.38', '', 1,
        'Roniston Shane', 'Bronze Doors Outside','tbd', 1, '2017-04-09', '-921.21 -272.10 -1780.00', '', 1,
        'Roobelh', 'Bronze Doors Outside','tbd', 1, 'none', '-688.88 -220.98 -1586.47', '', 1,
        'Sand Arangma', 'Bronze Doors Outside','tbd', 10, 'none', '596.12 -287.99 -2196.05, 609.55 -287.14 -2194.90, 596.99 -291.10 -2177.71, 388.43 -312.67 -2164.31, 398.96 -311.55 -2181.16, 600.78 -287.59 -2196.26, 603.25 -289.01 -2186.91, 382.20 -312.02 -2172.79, 400.73 -313.25 -2169.93, 386.78 -312.05 -2180.96', '', 1,
        'Serpent Gobble', 'Bronze Doors Outside','tbd', 4, 'none', '599.15 -276.57 -1734.67, 611.16 -275.86 -1734.52, 600.59 -276.91 -1739.05, 612.79 -278.81 -1745.27', '', 1,
        'Sierann', 'Bronze Doors Outside','tbd', 1, 'none', '-250.08 -205.66 -1538.55', '', 1,
        'Tefusang', 'Bronze Doors Outside','tbd', 4, 'none', '48.55 -285.40 -2163.97, 32.08 -286.66 -2191.44, 77.23 -284.99 -2195.51, 75.27 -288.17 -2158.09', '', 1,
        'Thunder Clacker', 'Bronze Doors Outside','tbd', 3, 'none', '-392.63 -164.22 -1467.77, -396.34 -164.34 -1467.68, -182.97 -111.72 -1317.39', '', 1,
        'Tloke Drone', 'Bronze Doors Outside','tbd', 9, 'none', '-722.00 -271.50 -1985.79, -738.01 -270.46 -1983.23, -696.26 -276.01 -1995.27, -711.18 -273.00 -2009.21, -723.52 -270.88 -1993.23, -736.36 -269.42 -1991.72, -700.75 -273.19 -2021.37, -710.73 -273.72 -1984.74, -719.56 -272.00 -2005.90', '', 1,
        'Tloke Queen', 'Bronze Doors Outside','tbd', 1, 'none', '-722.73 -271.55 -2005.92', '', 1,
        'Tloke Warrior', 'Bronze Doors Outside','tbd', 4, 'none', '-713.69 -272.62 -1992.71, -705.44 -274.51 -2006.29, -734.37 -271.36 -1973.66, -724.44 -271.19 -2003.49', '', 1,
        'Ulbernaut', 'Bronze Doors Outside','tbd', 3, 'none', '-1061.21 -272.10 -1760.00, -1017.59 -277.49 -1758.88, -1034.57 -278.12 -1715.90', '', 1,
        'Vaieund', 'Bronze Doors Outside','tbd', 1, 'none', '608.26 -260.25 -1533.64', '', 1,
        'Velnishi', 'Bronze Doors Outside','tbd', 3, 'none', '-573.31 -199.01 -1493.67, -601.04 -200.40 -1537.66, -461.88 -174.10 -1476.74', '', 1,
        'Vesper Arangma', 'Bronze Doors Outside','tbd', 7, 'none', '596.63 -256.26 -1513.23, -191.37 -178.87 -1513.52, 616.39 -255.26 -1536.97, 594.78 -257.18 -1539.32, -319.51 -157.35 -1425.16, 133.11 -118.58 -1467.37, 614.96 -254.92 -1540.21', '', 1,
        'Vilenaut', 'Bronze Doors Outside','tbd', 6, 'none', '-1267.58 -240.87 -1706.19, -1308.93 -231.23 -1637.34, -982.31 -255.24 -2320.74, -985.67 -277.99 -1725.77, -1310.25 -243.59 -1689.49, -1007.28 -253.98 -2302.64', '', 1,
        'Weaver Arangma', 'Bronze Doors Outside','tbd', 1, 'none', '-268.96 -204.56 -1528.56', '', 1,
        'Xalpalock - Cave Entrance', 'Bronze Doors Outside','tbd', 1, '2018-02-07', '-1350.00 -270.00 -1700.00', '', 1,
        'Zlatac', 'Bronze Doors Outside' ,'tbd', 1,'2018-02-04', '-434.09 -282.29 -1574.14', '', 1,

        // Death Realm
        'Death Guardian', 'Death Realm','tbd', 1, 'none', '-205.45 -131.05 27.35', '', 1,
        'Wrathrat', 'Death Realm','tbd', 4, 'none', '-185.13 -99.80 -26.45, -195.16 -99.80 -36.38, -187.01 -99.80 -28.39, -196.54 -99.80 -36.71', '', 1,
        'Fire Carkarass', 'Death Realm','tbd', 1, 'none', '-156.98 -95.14 -82.26, -195.79 -99.80 -37.77, -149.61 -84.54 -85.46', '', 1,
        'Grendol', 'Death Realm','tbd', 2, 'none', '-80.50 -99.19 15.13, -80.61 -99.27 -9.43', '', 1,
        'Londris Kolaim', 'Death Realm','tbd', 1, 'none', '-178.03 -95.16 -94.04', '', 1,
        'Oriven Thamel', 'Death Realm','tbd', 1, 'none', '-153.33 -95.16 -75.94', '', 1,

        // Dungeon
        'Clacker', 'Dungeon','tbd', 4, 'none', '-96.76 -40.96 110.61, -158.27 -56.28 66.43, -94.25 -39.90 110.86, -149.96 -56.28 24.20', '', 1,
        'Coamti', 'Dungeon','tbd', 4, 'none', '-75.48 -35.41 98.16, -190.02 -56.28 30.24, -191.64 -56.28 17.67, -213.01 -56.28 63.72', '', 1,
        'Crosh Dunehammer', 'Dungeon','tbd', 1, 'none', '-93.74 -32.21 52.67', '', 1,
        'Diseased Rat', 'Dungeon','tbd', 8, 'none', '-203.55 -56.28 25.04, -179.87 -11.98 2.82, -14.53 -36.17 49.85, -213.35 -56.28 30.30, -191.40 -56.28 49.69, -180.60 -11.98 1.62, -33.65 -36.03 61.63, -194.27 -56.28 21.34', '', 1,
        'Frost Arangma', 'Dungeon','tbd', 5, 'none', '-185.72 -21.98 -9.11, -175.94 -75.27 102.43, -102.34 -34.21 33.76, -166.35 -48.35 107.27, -76.26 -34.21 32.67', '', 1,
        'Jade Clacker', 'Dungeon','tbd', 8, 'none', '-133.28 -44.61 116.92, -200.57 -56.28 25.52, -192.32 -56.28 75.73, -77.65 -34.21 63.14, -103.04 -42.82 109.46, -118.35 -44.61 117.25, -190.15 -56.28 63.23, -93.39 -34.21 79.92', '', 1,
        'Marangma', 'Dungeon','tbd', 1, '2018-2-22', '-61.88 -106.36 83.18', '10.02 -35.52 44.21', 1,
        'Mudobber Coamti', 'Dungeon','tbd', 4, 'none', '-111.80 -44.21 48.69, -9.08 -107.07 54.20, -113.86 -44.21 30.09, -35.35 -106.99 82.36', '', 1,
        'One-Eyed Rat', 'Dungeon','tbd', 2, 'none', '-39.18 -36.15 70.08, -27.78 -36.51 54.11', '', 1,
        'Onyx Dagger', 'Dungeon','tbd', 7, 'none', '-177.88 -48.35 89.79, -182.21 -75.27 96.28, -174.67 -98.98 75.10, -198.56 -12.28 45.41, -167.59 -47.34 51.77, -186.39 -102.89 79.04, -65.14 -106.27 82.40', '', 1,
        'Thunder Clacker', 'Dungeon','tbd', 5, 'none', '-191.73 -41.98 81.27, -82.18 -100.91 49.19, -211.55 -41.98 80.68, -173.55 -87.03 67.01, -67.13 -101.00 72.07', '', 1,
        'Vesper Arangma', 'Dungeon','tbd', 9, 'none', '-188.60 -41.98 9.22, -206.70 -41.98 6.50, -82.88 -105.25 50.94, -137.05 -106.67 44.73, -28.06 -106.08 65.49, -213.18 -41.98 9.82, -212.67 -41.98 -7.17, -126.25 -106.62 40.65, -161.59 -106.33 43.32', '', 1,
        'Weaver Arangma', 'Dungeon','tbd', 10, 'none', '-110.81 -44.21 67.63, -139.06 -56.28 68.35, -185.30 -56.28 24.10, -155.54 -55.52 26.99, -173.14 -11.98 -6.26, -109.77 -44.21 80.32, -128.27 -56.28 65.94, -173.24 -56.28 68.68, -177.22 -56.28 27.06, -211.83 -54.21 7.76', '', 1,
        'Wrathrat', 'Dungeon','tbd', 9, 'none', '-118.52 -44.61 31.93, -123.96 -44.61 19.13, -199.97 -21.98 23.17, -97.69 -105.18 54.33, -182.55 -105.17 59.36, -128.81 -44.61 32.20, -198.34 -31.98 -8.57, -92.65 -105.18 51.16, -179.88 -106.03 48.90', '', 1,
        'Zak', 'Dungeon','tbd', 1, 'none', '5.29 -106.29 49.16', '', 1,

        // Guildlaw
        'Iragdun Salikarios', 'Guildlaw','tbd', 1, 'none', '8.86 1.44 19.08', '', 1,
        'Jarop Saven', 'Guildlaw','tbd', 1, 'none', '-8.67 -2.20 9.71', '', 1,
        'Oropher Telemmaite', 'Guildlaw','tbd', 1, 'none', '8.76 -2.20 9.74', '', 1,

        // Gugrontid City
        'Belcor Krakko', 'Gugrontid City','tbd', 1, '2017-04-14', '10.00 0.00 -17.00', '', 1,
        'Coamti', 'Gugrontid City','tbd', 4, 'none', '-10.54 62.36 63.50, 1.08 60.01 68.53, -16.18 57.76 80.04, 32.12 57.41 80.43', '', 1,
        'Davikel Iramok', 'Gugrontid City','tbd', 1, 'none', '-44.77 115.95 -38.98', '', 1,
        'Gardr Keck', 'Gugrontid City','tbd', 1, 'none', '31.51 89.82 4.63', '', 1,
        'Gibbsite', 'Gugrontid City','tbd', 1, '2017-04-09', '64.78 55.40 -11.63', '', 1,
        'Gulm Ossoe', 'Gugrontid City','tbd', 1, 'none', '35.71 90.89 -22.93', '', 1,
        'Gurgus Dahnik', 'Gugrontid City','tbd', 1, 'none', '2.40 105.62 -7.46', '', 1,
        'Gurrak Qualor', 'Gugrontid City','tbd', 1, 'none', '99.55 55.56 46.33', '', 1,
        'Imago Consumer', 'Gugrontid City','tbd', 2, 'none', '85.83 53.40 256.46, 112.66 54.01 231.28', '', 1,
        'Kerryk Cor', 'Gugrontid City','tbd', 1, 'none', '-5.08 105.62 18.82', '', 1,
        'Lady Peckerly', 'Gugrontid City','tbd', 1, 'none', '3.45 94.90 -13.24', '', 1,
        'Lyrus Lospur', 'Gugrontid City','tbd', 1, 'none', '50.64 52.46 -50.35', '', 1,
        'Malco Mokkar', 'Gugrontid City','tbd', 1, 'none', '91.78 55.40 -14.63', '', 1,
        'Marfusang', 'Gugrontid City','tbd', 1, 'none', '42.38 48.50 469.57', '', 1,
        'Mulgik', 'Gugrontid City','tbd', 1, 'none', '63.17 55.40 31.82', '', 1,
        'Neoten Consumer', 'Gugrontid City','tbd', 1, 'none', '130.15 53.41 261.71', '', 1,
        'Pterosaur', 'Gugrontid City','tbd', 1, 'none', '102.03 55.68 45.93', '', 1,
        'Quasus Adyum', 'Gugrontid City','tbd', 1, 'none', '-59.07 100.78 -12.88', '', 1,
        'Stalg','Gugrontid City','tbd',1,'2018-02-06','52 0 488', '', 1,
        'Tefusang', 'Gugrontid City','tbd', 3, 'none', '101.33 48.53 475.96, 66.82 48.45 443.78, 77.83 48.37 467.34', '', 1,
        'Tefusangling', 'Gugrontid City','tbd', 4, 'none', '99.60 48.42 339.74, -9.41 48.88 322.54, 92.26 48.61 329.10, 94.10 48.37 335.41', '', 1,
        'Tloke Drone', 'Gugrontid City','tbd', 1, 'none', '107.98 48.79 325.90', '', 1,
        'Tyrus Beaut', 'Gugrontid City','tbd', 1, 'none', '23.68 94.16 6.92', '', 1,

        // Hydlaa
        'Abelia Aruine', 'Hydlaa','tbd', 1, '2017-12-28', '-235.00 21.00 27.00', '', 1,
        'Aleena Arlavin', 'Hydlaa','tbd', 1, 'none', '-131.38 33.89 -85.98', '', 1,
        'Allelia Symiestra', 'Hydlaa','tbd', 1, 'none', '-135.03 22.22 -91.14', '', 1,
        'Amidison Stronghand', 'Hydlaa','tbd', 1, 'none', '-99.93 26.96 31.93 4am-12pm/1pm-12am', '-109.09 26.76 39.95, -125.48 26.76 34.49, -132.67 26.76 28.32, -142.07 26.76 20.40, -153.24 26.76 25.82, -161.66 26.89 36.02, -164.13 26.89 48.75, -175.08 26.89 66.36, -180.28 21.32 53.23, -175.30 21.32 33.38, -169.29 21.32 15.13, -156.27 16.29 2.41, -151.19 16.02 -7.19, -133.87 10.59 -13.93, -118.51 10.59 -25.68, -104.71 10.59 -36.74, -98.68 10.59 -32.39, -87.18 10.59 -37.18, -75.17 5.31 -52.02, -80.48 5.31 -57.39, -69.84 5.31 -65.31, -57.05 5.31 -75.16, -42.58 0.00 -86.14, -25.29 -3.70 -99.65, -18.34 -4.00 -105.59, -1.78 -4.04 -95.92, 17.95 -4.00 -104.58, 23.00 -4.00 -124.78, 38.02 -2.10 -128.45, 53.61 0.00 -132.06, 86.01 0.00 -139.59, 93.74 0.00 -123.18', 1,
        'Arion Fildar', 'Hydlaa','tbd', 1, 'none', '107.22 0.07 -21.38', '', 1,
        'Bevon Damerr', 'Hydlaa','tbd', 1, 'none', '-176.65 21.32 47.17', '', 1,
        'Boralis Voladrand', 'Hydlaa','tbd', 1, 'none', '-171.11 26.89 74.55', '', 1,
        'Burdess Quirain', 'Hydlaa','tbd', 1, 'none', '17.12 0.20 -182.06', '', 1,
        'Charisa Malod', 'Hydlaa','tbd', 1, 'none', '-54.61 9.34 -50.98', '', 1,
        'Darphen Wrestle', 'Hydlaa','tbd', 1, 'none', '-39.54 0.20 -195.27', '', 1,
        'Darven Bounash', 'Hydlaa','tbd', 1, 'none', '-83.50 15.99 -20.57', '', 1,
        'Ervin Fromaad', 'Hydlaa','tbd', 1, 'none', '-83.98 16.10 25.18', '', 1,
        'Finara Plund', 'Hydlaa','tbd', 1, 'none', '-198.48 21.32 74.81', '', 1,
        'Frilaa Bhundri', 'Hydlaa','tbd', 1, 'none', '-132.06 10.77 -32.46', '', 1,
        'Gayla Grotemey', 'Hydlaa','tbd', 1, 'none', '90.22 0.20 -146.04', '', 1,
        'Govell Mihdren', 'Hydlaa','tbd', 1, 'none', '105.28 0.07 -21.68', '', 1,
        'Grimal Bloodaxe', 'Hydlaa','tbd', 1, 'none', '-88.48 15.99 25.79', '', 1,
        'Hamel Warson', 'Hydlaa','tbd', 1, 'none', '-9.02 0.42 -185.70', '', 1,
        'Harnquist', 'Hydlaa','tbd', 1, 'none', '-48 0 -164', '', 1,
        'Ibhaar Senad', 'Hydlaa','tbd', 1, '2017-12-28', '-235.00 21.00 27.00', '', 1,
        'Jefecra Harcrit', 'Hydlaa','tbd', 1, 'none', '-120.22 21.52 -80.78', '', 1,
        'Jeyarp Grotemey', 'Hydlaa','tbd', 1, 'none', '89.33 0.20 -146.87', '', 1,
        'Jomed Parcen', 'Hydlaa','tbd', 1, 'none', '-146.79 26.08 -75.88', '', 1,
        'Kaiman Jilatt', 'Hydlaa','tbd', 1, 'none', '41.99 0.40 -152.34', '', 1,
        'Krestal Dhusho', 'Hydlaa','tbd', 1, 'none', '47.86 0.06 52.46', '', 1,
        'Lennston', 'Hydlaa','tbd', 1, '2017-12-28', '-96 0.21 1', '', 1,
        'Loren Chama', 'Hydlaa','tbd', 1, 'none', '-78.86 0.21 -119.33', '', 1,
        'Menlil Toresun', 'Hydlaa','tbd', 1, 'none', '0.01 -0.00 -23.23', '', 1,
        'Nalri Grimtorr', 'Hydlaa','tbd', 1, 'none', '-102.56 10.78 -42.08', '', 1,
        'Narwin Molstagh', 'Hydlaa','tbd', 1, 'none', '-80.77 0.21 -115.79', '', 1,
        'Neave Besetun', 'Hydlaa','tbd', 1, '2017-12-28', '-235.00 21.00 27.00', '', 1,
        'Ondren Torr', 'Hydlaa','tbd', 1, 'none', '13.57 -4.03 -119.16', '', 1,
        'Orphia Eldri', 'Hydlaa','tbd', 1, '2017-12-28', '-235.00 21.00 27.00', '', 1,
        'Pauril Rentaurin', 'Hydlaa','tbd', 1, 'none', '-49.97 0.16 -27.05', '', 1,
        'Percival Hawthorne', 'Hydlaa','tbd', 1, 'none', '42.80 0.00 -199.71', '', 1,
        'Pterosaur', 'Hydlaa','tbd', 1, 'none', '50.63 0.06 52.67', '', 1,
        'Rabartus Livrandar', 'Hydlaa','tbd', 1, 'none', '-118.21 21.52 -80.24', '', 1,
        'Remant Tovere', 'Hydlaa','tbd', 1, 'none', '-204.05 21.32 75.25', '', 1,
        'Rinna Voladrand', 'Hydlaa','tbd', 1, 'none', '-168.07 26.89 73.86', '', 1,
        'Rolara Hammersong', 'Hydlaa','tbd', 1, 'none', '6.83 0.20 -172.15', '', 1,
        'Sharven Xant-Areth', 'Hydlaa','tbd', 1, 'none', '0.21 -2.01 15.80', '', 1,
        'Silaces Regalin', 'Hydlaa','tbd', 1, '2017-12-28', '-235.00 21.00 27.00', '', 1,
        'Sinto Gheshd', 'Hydlaa','tbd', 1, 'none', '-115.53 10.68 -10.21', '', 1,
        'Tabein Morzle', 'Hydlaa','tbd', 1, 'none', '-101.15 21.52 -61.86', '', 1,
        'Talisa Tamariss', 'Hydlaa','tbd', 1, 'none', '-85.43 15.99 31.65', '', 1,
        'Tarela Girshon', 'Hydlaa','tbd', 1, 'none', '17.42 -4.03 -119.38', '', 1,
        'Taria Prestis', 'Hydlaa','tbd', 1, 'none', '42.97 4.01 -63.92', '', 1,
        'Telzanna Zarel', 'Hydlaa','tbd', 1, '2017-12-28', '-235.00 21.00 27.00', '', 1,
        'Thorian Gronk', 'Hydlaa','tbd',1, 'none', '-133.66 26.08 -86.34', '', 1,
        'Trankin Quartzforger', 'Hydlaa','tbd', 1, 'none', '-99.07 21.52 -63.53', '', 1,
        'Veja Pontor', 'Hydlaa','tbd', 1, 'none', '-48 0 -164', '-52 0 -160, -45 0 -155, -35 0 -145, -35 0 -135, -35 0 -125, -50 0 -132, -74 0 -140, -98 0 -145', 0,
        'Warinn Klumdt', 'Hydlaa','tbd', 1, 'none', '-117.14 10.68 -9.63', '', 1,
        'Willam Chorind', 'Hydlaa','tbd', 1, 'none', '-69.89 5.54 -0.36', '', 1,
        'Xenak', 'Hydlaa','tbd', 1, '2017-12-28', '-235.00 21.00 27.00', '', 1,

        // Hydlaa East
        'Aldaaren Phostle', 'Hydlaa East','tbd', 1, 'none', '213.05 0.34 -127.81', '', 1,
        'Aliress Doomforge', 'Hydlaa East','tbd', 1, 'none', '193.86 0.20 -101.98', '', 1,
        'Amidison Stronghand', 'Hydlaa East','tbd', 1, 'none', '164.86 3.17 -107.50 12-4am/12-1pm', '93.74 0.00 -123.18, 97.52 0.00 -104.26, 115.74 0.00 -106.03, 131.24 0.00 -109.15, 133.06 0.00 -94.03, 135.73 0.00 -83.51, 153.36 0.00 -87.27, 172.01 0.00 -91.02, 183.21 0.00 -94.22, 180.91 0.00 -109.48, 177.96 -0.00 -119.29', 0,
        'Barrin Dhorod', 'Hydlaa East','tbd', 1, 'none', '206.71 0.00 -81.10', '', 1,
        'Dhalia Colat', 'Hydlaa East','tbd', 1, 'none', '223.28 0.19 -82.76', '', 1,
        'Durok Rrecrok', 'Hydlaa East','tbd', 1, 'none', '169.74 0.00 -64.24', '', 1,
        'Edrich Sultov', 'Hydlaa East','tbd', 1, 'none', '239.47 0.20 -100.38', '', 1,
        'Fholen Medraa', 'Hydlaa East','tbd', 1, 'none', '147.14 -5.20 -181.91', '', 1,
        'Gordy Pumuont', 'Hydlaa East','tbd', 1, 'none', '127.55 -0.00 -93.49', '', 1,
        'Jardet Forsill', 'Hydlaa East','tbd', 1, 'none', '222.60 0.10 -160.75', '', 1,
        'Jayose', 'Hydlaa East','tbd', 1, 'none', '184.25 0.00 -72.89', '', 1,
        'Jorni Yeelni', 'Hydlaa East','tbd', 1, 'none', '265 0 -110', '', 1,
        'Kilas Tungse', 'Hydlaa East','tbd', 1, 'none', '209.04 0.00 -122.47', '', 1,
        'Lori Tryllyn', 'Hydlaa East','tbd', 1, 'none', '185.61 4.55 -75.37', '', 1,
        'Mirra Houphen', 'Hydlaa East','tbd', 1, 'none', '208.99 0.00 -117.26', '', 1,
        'Moren Findel', 'Hydlaa East','tbd', 1, 'none', '267 0 -135 3-am-10pm', '250 0 -137, 233 0 -136, 222 0 -128, 218 0 -114, 220 0 -102, 205 0 -98, 136 0 -83, 129 0 -108, 124 0 -134, 148 -5 -140, 144 -5 -164, 118 -5 -169, 118 -5 -179, 104 -5 -181', 1,
        'Murago Puntjal', 'Hydlaa East','tbd', 1, 'none', '185.39 -5.15 -177.15', '', 1,
        'Nevis Revori', 'Hydlaa East','tbd', 1, 'none', '266 0 -142 6pm-6pm',  '250 0 -137, 233 0 -136, 222 0 -128, 218 0 -114, 220 0 -102, 205 0 -98, 136 0 -83, 129 0 -108, 124 0 -134, 148 -5 -140, 144 -5 -164, 118 -5 -169, 118 -5 -179, 104 -5 -181', 1,
        'Roya Vuntarr', 'Hydlaa East','tbd', 1, 'none', '98.70 -5.36 -178.21', '', 1,
        'Saria Dunwallow', 'Hydlaa East','tbd', 1, 'none', '216.97 0.00 -122.26', '', 1,
        'Serevim Colat', 'Hydlaa East','tbd', 1, 'none', '224.51 0.17 -86.00', '', 1,
        'Taulim Wilaal', 'Hydlaa East','tbd', 1, 'none', '171.57 0.20 -115.58', '', 1,
        'Terea Lohdren', 'Hydlaa East','tbd', 1, 'none', '188.10 -5.18 -176.72', '', 1,
        'Uri Djho-Maat', 'Hydlaa East','tbd', 1, 'none', '118.44 -5.17 -191.89', '', 1,
        'Worrem Dhoshi', 'Hydlaa East','tbd', 1, 'none', '144.89 0.20 -74.28', '', 1,
        'Yonda Axebow', 'Hydlaa East','tbd', 1, 'none', '187.67 0.00 -120.55', '', 1,

        // Magic Shop
        'Forest Arangma', 'Magic Shop','tbd', 3, 'none', '-139.27 -3.94 -22.94, -103.74 -4.73 -44.63, -155.79 -2.54 -64.09', '', 1,
        'Levrus Dahrenn', 'Magic Shop','tbd', 1, 'none', '-121.28 -4.92 -39.73', '', 1,
        'Niala Xanao', 'Magic Shop','tbd', 1, 'none', '-116.28 -4.92 -35.73', '', 1,

        // Ojaveda
        'Adackie Calil', 'Ojaveda','tbd', 1, 'none', '-85.66 9.63 70.76', '', 1,
        'Benacha Thaninar', 'Ojaveda','tbd', 1, 'none', '-108.09 4.32 111.49', '', 1,
        'Benack Yasoj', 'Ojaveda','tbd', 1, 'none', '-122.93 4.33 51.59', '', 1,
        'Bhurral Varsheen', 'Ojaveda','tbd', 1, 'none', '-36.30 -7.37 -64.60', '', 1,
        'Bjorid Haakthir', 'Ojaveda','tbd', 1, 'none', '38.40 -4.58 -50.91', '', 1,
        'Brado', 'Ojaveda','tbd', 1, 'none', '-35.84 -6.95 -10.90', '', 1,
        'Brintec Dev-Onni', 'Ojaveda','tbd', 1, 'none', '-61.10 1.52 30.30', '', 1,
        'Celila Yasoj', 'Ojaveda','tbd', 1, 'none', '-128.82 -4.21 -37.43', '', 1,
        'Chilye Esimar', 'Ojaveda','tbd', 1, 'none', '-101.52 -0.15 5.39', '', 1,
        'Chired Idelall', 'Ojaveda','tbd', 1, 'none', '-149.43 5.03 111.04', '', 1,
        'Deneses Bakeara', 'Ojaveda','tbd', 1, 'none', '-110.16 -4.46 -42.75', '', 1,
        'Diseased Rat', 'Ojaveda','tbd', 2, 'none', '45.13 -2.10 7.35, 33.55 -2.10 30.09', '', 1,
        'Ereneid Dhusho', 'Ojaveda','tbd', 1, 'none', '-53.76 2.33 76.05', '', 1,
        'Evelyn', 'Ojaveda','tbd',1, '2018-3-10', '-107.42 4.35 88.44', '', 1,
        'Ferryd Shillor', 'Ojaveda','tbd', 1, 'none', '-119.79 -3.88 -24.85', '', 1,
        'Forest Arangma', 'Ojaveda','tbd', 7, 'none', '-56.91 -5.92 -119.23, -57.43 -6.53 -132.13, -16.90 -5.43 -99.61, -17.57 -5.70 -92.66, -57.57 -6.18 -125.71, -23.40 -5.83 -127.24, -15.12 -5.18 -96.05', '', 1,
        'Fruntar Durek', 'Ojaveda','tbd', 1, 'none', '-36.98 -6.95 -17.06', '', 1,
        'Gilata Meselir', 'Ojaveda','tbd', 1, 'none', '-121.62 -4.52 -50.48', '', 1,
        'Havead Maronef', 'Ojaveda','tbd', 1, 'none', '-84.47 8.62 87.65', '', 1,
        'Henas Kenar', 'Ojaveda','tbd', 1, 'none', '-126.83 4.06 121.05', '', 1,
        'Hirenn Darmeth', 'Ojaveda','tbd', 1, 'none', '-70.55 1.47 30.74', '', 1,
        'Hurenes Shekalal', 'Ojaveda','tbd', 1, 'none', '-132.60 -2.22 25.11', '', 1,
        'Jedonek Bolossj', 'Ojaveda','tbd', 1, 'none', '-93.55 -5.22 -42.98', '', 1,
        'Jirosh Mikana', 'Ojaveda','tbd', 1, 'none', '13.37 -2.10 28.45', '', 1,
        'Kekayer Fayn', 'Ojaveda','tbd', 1, 'none', '-145 0 80', '', 1,
        'Kikiri', 'Ojaveda','tbd', 24, 'none', '-5.34 -7.35 -56.91, -62.64 1.78 65.09, -77.52 -7.27 -56.42, -63.54 1.81 65.61, 116.83 -4.89 3.77, -28.11 2.20 73.18, 116.61 -4.39 8.07, -24.72 2.16 72.35, -29.10 -0.10 41.31, -32.37 -0.35 38.41, -9.45 -7.34 -55.22, -5.72 -7.36 -58.95, -62.27 1.70 63.91, -75.12 -7.26 -57.06, -61.75 1.82 65.80, 114.76 -5.46 -1.06, -61.09 1.99 68.24, 117.80 -4.60 6.09, -25.81 2.23 73.87, -22.80 2.29 74.85, -31.59 -0.23 39.52, -30.54 -0.53 37.28, -9.39 -7.36 -58.89, -62.98 1.63 62.85', '', 1,
        'Kisatol Gathoji', 'Ojaveda','tbd', 1, 'none', '108.64 -0.17 -18.11', '', 1,
        'Leshollo Moteroy', 'Ojaveda','tbd', 1, 'none', '-148.05 -3.04 -39.34', '', 1,
        'Magne Nagess', 'Ojaveda','tbd', 1, '2018-3-10', '-107.42 4.35 88.44', '', 1,
        'Menita', 'Ojaveda','tbd', 1, 'none', '-176.61 1.56 -35.34', '', 1,
        'Merrinez Dholant', 'Ojaveda','tbd', 1, 'none', '105.68 -5.41 -11.66', '', 1,
        'Muresie Serapon', 'Ojaveda','tbd', 1, 'none', '-169.86 1.42 11.17', '', 1,
        'One-Eyed Rat', 'Ojaveda','tbd', 17, 'none', '86.07 -2.10 20.33, 78.33 -2.10 34.75, -49.91 -11.07 -21.59, 69.08 -0.17 -24.46, 10.82 -2.10 -1.51, 30.89 -2.10 3.16, 61.68 -2.10 13.56, 42.19 1.58 38.23, 91.45 -2.10 20.77, 80.99 -2.10 23.93, -12.09 0.70 43.97, -42.18 -11.07 -22.22, 78.73 -0.17 -19.21, 17.85 -2.10 0.46, 37.96 -2.10 5.00, 76.24 -2.07 19.23, 26.44 -2.10 32.39', '', 1,
        'Orchibaly Gurpleferd', 'Ojaveda','tbd', 1, 'none', '-71.31 1.48 21.94', '', 1,
        'Pinayet Ullavin', 'Ojaveda', 'tbd',1, 'none', '-47.06 -7.37 -64.70', '', 1,
        'Pterosaur', 'Ojaveda','tbd', 1, 'none', '-56.52 2.33 76.17', '', 1,
        'Reffitia Thamal', 'Ojaveda','tbd', 1, 'none', '-37.38 -6.95 -6.37', '', 1,
        'Rogue', 'Ojaveda','tbd', 11, 'none', '-5.91 0.70 19.24, 33.66 -4.58 -57.54, 85.98 -0.17 -41.69, 115.99 -6.19 -11.90, 62.92 1.58 57.27, -7.85 0.70 26.95, 1.47 -4.58 -59.16, 73.83 -0.17 -47.05, 111.04 -0.17 -20.57, 95.08 1.40 55.38, -77.35 1.47 20.04', '', 1,
        'Seduna Secut', 'Ojaveda','tbd', 1, 'none', '-159.24 1.38 31.05', '', 1,
        'Selisar Zeinifa', 'Ojaveda','tbd', 1, 'none', '-173.68 1.54 2.90', '', 1,
        'Shenji TorKaal', 'Ojaveda','tbd', 1, 'none', '-163.34 5.26 77.76', '', 1,
        'Surenes Shekalal', 'Ojaveda','tbd', 1, 'none', '-102.80 -0.15 20.60', '', 1,
        'Tasesk Coughun', 'Ojaveda','tbd', 1, 'none', '-173.14 1.39 30.37', '', 1,
        'Tebengrin Nilaiun', 'Ojaveda','tbd', 1, '2020-06-01', '-190 1.54 7', '', 1,
        'Tilavi Aurenta', 'Ojaveda','tbd', 1, 'none', '-40.81 -0.19 -11.17', '', 1,
        'Toda Ombretis', 'Ojaveda','tbd', 1, 'none', '-15.00 0.71 37.63', '', 1,
        'Trasok Starhammer', 'Ojaveda','tbd', 1, 'none', '-75.52 -4.33 -3.65', '', 1,
        'Vetasor Knemal', 'Ojaveda','tbd', 1, 'none', '-174.98 1.39 25.75', '', 1,
        'Vladovic Chel-Astra', 'Ojaveda','tbd', 1, 'none', '-62.56 1.47 11.47', '', 1,
        'Vorigna Tassen', 'Ojaveda','tbd', 1, 'none', '-130.81 4.20 120.11', '', 1,

        // Ojaveda Road 1
        'Amakeer', 'Ojaveda Road 1','tbd', 1, 'none', '521.46 29.74 169.05', '', 1,
        'Aydken', 'Ojaveda Road 1','tbd', 1, 'none', '-332.74 30.33 162.23', '', 1,
        'Azarnith', 'Ojaveda Road 1','tbd', 1, 'none', '533.06 29.75 158.44', '', 1,
        'Boilghere', 'Ojaveda Road 1','tbd', 1, 'none', '515.73 29.12 153.14', '', 1,
        'Carkarass', 'Ojaveda Road 1','tbd', 5, 'none', '430.15 30.12 171.67, 411.36 30.12 155.53, 422.71 30.12 126.10, 430.14 30.12 164.85, 421.99 30.10 138.65', '', 1,
        'Consumer', 'Ojaveda Road 1','tbd', 3, 'none', '-38.25 30.25 571.14, -47.87 30.14 541.43, -18.88 30.20 567.16', '', 1,
        'Filch', 'Ojaveda Road 1','tbd', 1, 'none', '-329.91 30.29 161.41', '', 1,
        'Guile', 'Ojaveda Road 1','tbd', 1, 'none', '-337.12 30.37 179.05', '', 1,
        'Imago Consumer', 'Ojaveda Road 1','tbd', 6, 'none', '-116.70 30.33 566.39, -131.55 30.15 597.34, 176.37 16.06 388.45, -116.76 30.43 588.17, 214.78 16.24 411.73, 152.75 15.89 392.99', '', 1,
        'Jade Clacker', 'Ojaveda Road 1','tbd', 3, 'none', '579.75 30.13 259.19, 453.17 30.15 346.96, 571.00 30.00 259.98', '', 1,
        'Jashoky Dakarn', 'Ojaveda Road 1','tbd', 1, 'none', '494.91 30.12 423.74', '', 1,
        'Maulberlord', 'Ojaveda Road 1','tbd', 2, 'none', '126.99 25.64 543.89, 182.74 27.23 536.08', '', 1,
        'Maulbernaut', 'Ojaveda Road 1','tbd', 5, 'none', '106.26 22.16 490.32, 97.33 26.73 556.69, 131.97 21.17 466.33, 158.29 29.16 487.82, 63.74 26.35 547.02', '', 1,
        'Neoten Consumer', 'Ojaveda Road 1','tbd', 4, 'none', '-6.77 13.22 59.23, -144.27 28.12 49.07, -88.99 30.36 39.89, -207.20 23.39 68.80', '', 1,
        'Pilfer', 'Ojaveda Road 1','tbd', 1, 'none', '-337.75 30.41 168.91', '', 1,
        'Rook', 'Ojaveda Road 1','tbd', 1, 'none', '-317.03 30.40 177.02', '', 1,
        'Ryger', 'Ojaveda Road 1','tbd', 1, 'none', '524.09 29.60 146.05', '', 1,
        'Thunder Clacker', 'Ojaveda Road 1','tbd', 3, 'none', '418.40 30.12 418.00, 413.12 30.12 405.32, 462.32 30.12 351.81', '', 1,
        'Vilenaut', 'Ojaveda Road 1','tbd', 1, 'none', '122.37 26.41 514.48', '', 1,

        // Ojaveda Road 2
        'Cutthroat', 'Ojaveda Road 2','tbd', 10, 'none', '70.13 15.66 124.74, 218.39 34.08 498.95, 318.12 16.14 79.56, 242.33 10.04 203.95, 185.12 30.95 90.43, 62.47 9.60 190.49, 260.66 38.82 497.96, 252.77 9.16 105.21, 163.25 19.03 174.61, 131.79 15.22 112.34', '', 1,
        'Draameni Forjhet', 'Ojaveda Road 2','tbd', 1, '2018-03-10', '539.00 32.97 143.78', '', 1,
        'Eagle Gobble', 'Ojaveda Road 2','tbd', 5, 'none', '-491.06 13.80 536.52, -531.74 13.34 546.50, -482.51 12.55 526.23, -512.82 11.68 550.18, -529.27 13.10 521.69', '', 1,
        'Enack Lerenal', 'Ojaveda Road 2','tbd', 1, 'none', '539.83 28.46 305.13', '', 1,
        'Forest Arangma', 'Ojaveda Road 2','tbd', 2, 'none', '295.07 30.84 448.01, 301.14 30.97 427.44', '', 1,
        'Marfusang', 'Ojaveda Road 2','tbd', 4, 'none', '-248.71 30.12 575.80, 537.39 34.41 607.03, -265.98 30.12 552.55, 137.01 36.11 417.51', '', 1,
        'Maulbernaut', 'Ojaveda Road 2','tbd', 4, 'none', '-304.77 46.14 142.18, 193.27 13.05 323.47, -182.16 39.85 170.06, 130.79 33.21 389.50', '', 1,
        'Serpent Gobble', 'Ojaveda Road 2','tbd', 4, 'none', '-452.22 13.00 174.01, -499.66 12.51 201.72, -464.82 11.49 169.56, -460.54 12.27 145.12', '', 1,
        'Tefusang', 'Ojaveda Road 2','tbd', 11, 'none', '483.38 30.84 581.33, 585.82 31.85 605.59, 487.61 29.73 108.88, -214.36 30.12 544.84, -264.65 30.56 498.99, 129.20 35.12 412.34, 498.64 31.09 597.21, 538.09 30.10 160.26, -236.31 30.12 559.61, -250.58 30.12 516.35, 145.28 38.24 413.52', '', 1,
        'Tefusangling', 'Ojaveda Road 2','tbd', 10, 'none', '-203.82 30.12 522.89, -226.49 30.12 478.42, 542.78 31.08 594.98, 545.23 30.12 176.62, 513.23 30.33 128.31, -215.39 30.12 501.13, 557.47 30.53 602.16, 525.99 30.70 595.66, 543.60 30.18 164.96, 502.07 29.61 125.09', '', 1,
        'Tloke Drone', 'Ojaveda Road 2','tbd', 9, 'none', '319.95 30.00 342.24, 334.44 31.00 342.39, 332.92 30.49 320.48, 340.31 30.15 283.52, 326.32 32.29 260.41, 329.34 30.69 344.98, 321.48 30.59 329.99, 329.57 30.33 301.11, 329.24 30.40 279.69', '', 1,
        'Tloke Queen', 'Ojaveda Road 2','tbd', 1, 'none', '307.74 29.29 353.12', '', 1,
        'Tloke Warrior', 'Ojaveda Road 2','tbd', 5, 'none', '310.55 29.69 346.05, 341.88 31.74 299.98, 316.12 29.50 352.21, 331.86 31.98 332.44, 337.80 32.00 266.89', '', 1,
        'Trepor', 'Ojaveda Road 2','tbd', 9, 'none', '-53.79 0.08 367.43, 0.67 0.12 292.37, -41.97 0.00 323.88, -24.96 0.09 345.86, -18.87 0.00 363.94, -12.81 0.32 294.51, -11.38 0.06 323.02, -44.21 0.00 336.50, 5.32 0.04 357.99', '', 1,
        'Trepor Warrior', 'Ojaveda Road 2','tbd', 9, 'none', '-34.78 0.09 436.13, -47.11 0.00 342.29, -4.76 0.74 334.14, 3.95 0.15 320.19, -18.37 2.75 281.51, -57.93 0.00 361.51, -9.26 2.56 340.80, 3.57 0.00 326.85, -4.54 2.57 307.79', '', 1,
        'Ulbernaut', 'Ojaveda Road 2','tbd', 9, 'none', '-261.30 24.10 207.46, -215.10 26.11 199.56, 163.64 13.13 352.97, 176.02 13.05 321.30, -310.41 28.11 212.74, -228.48 24.71 210.39, -185.36 27.08 222.04, 169.32 13.05 340.52, 159.18 13.06 313.53', '', 1,
        'Vilenaut', 'Ojaveda Road 2','tbd', 4, 'none', '179.28 13.17 305.64, -267.89 30.16 145.05, 182.37 13.37 346.63, -246.07 28.87 162.52', '', 1,

        // Sewers
        'Diseased Rat', 'Sewers','tbd', 2, 'none', '-242.37 0.51 -67.30, -242.31 0.51 -62.40', '', 1,
        'Finra Neticlo', 'Sewers','tbd', 1, 'none', '13.70 -5.95 -165.03', '', 1,
        'Fordanot Helsun', 'Sewers','tbd', 1, 'none', '-50.28 -11.44 -156.26', '', 1,
        'Gobble', 'Sewers','tbd', 4, '2018-02-06', '-65.50 -20.49 -16.79, -35.25 -20.49 -14.69, -8.03 -20.49 -22.75, 18.90 -20.49 -16.48', '', 1,
        'Gorbiak', 'Sewers','tbd', 1, 'none', '8.36 -15.94 -75.39', '', 1,
        'Grendol', 'Sewers','tbd', 2, 'none', '-124.43 -31.00 -77.06, -148.29 -31.00 -78.59', '', 1,
        'Jirris Athano', 'Sewers','tbd', 1, 'none', '0.80 -5.95 -166.33', '', 1,
        'Jolik Huevan', 'Sewers','tbd', 1, 'none', '-156.80 -9.99 -88.82', '', 1,
        'Musanulos Terfanis', 'Sewers','tbd', 1, 'none', '-157.67 -9.99 -96.39', '', 1,
        'Nohali Mirdasu', 'Sewers','tbd', 1, 'none', '-13.22 -4.74 -5.49', '', 1,
        'One-Eyed Rat', 'Sewers','tbd', 4, 'none', '-247.56 0.51 -67.14, -247.60 0.51 -61.08, -247.51 0.51 -69.04, -247.68 0.51 -63.20', '', 1,
        'Onyx Dagger', 'Sewers','tbd', 4, 'none', '-150.71 -31.00 -124.45, -122.88 -31.00 -96.96, -124.66 -31.00 -125.59, -150.48 -31.00 -96.60', '', 1,
        'Poison Carkarass', 'Sewers','tbd', 1, '2018-02-06', '-78.00 -16.45 -233.67', '', 1,
        'Relliom', 'Sewers','tbd', 1, 'none', '-8.40 -5.46 -107.35', '', 1,
        'Serana Tuvi', 'Sewers','tbd', 1, 'none', '-165.56 -9.99 -90.40', '', 1,
        'Tloke Drone', 'Sewers','tbd', 4, 'none', '-14.35 -15.24 40.35, -8.46 -15.24 40.19, -16.44 -15.24 40.41, -10.35 -15.24 40.24', '', 1,
        'Tloke Queen', 'Sewers','tbd', 1, 'none', '-12.46 -15.24 45.56', '', 1,
        'Tloke Warrior', 'Sewers','tbd', 3, 'none', '-14.41 -15.24 35.57, -10.42 -15.24 35.62, -12.44 -15.24 35.60', '', 1,
        'Toxic Grendol', 'Sewers','tbd', 7, 'none', '-4.77 -28.01 -162.20, -1.98 -28.01 -167.01, -177.24 -12.26 -239.41, 52.29 -25.28 -39.29, 1.36 -28.01 -161.87, -183.34 -12.26 -239.39, -180.34 -12.26 -244.39', '', 1,
        'Toxic Clacker', 'Sewers','tbd', 1, '2018-02-06', '-47.88 -23.97 -260.14', '', 1,
        'Viscarina Shardis', 'Sewers','tbd', 1, 'none', '-136.96 -30.99 -105.98', '', 1,

        // Winch
        'Acigra', 'Winch','tbd', 1, 'none', '69.13 -23.71 -416.97', '', 1,
        'Axomir', 'Winch','tbd', 1, 'none', '58.35 -23.71 -432.99', '', 1,
        'Baboraer Airiskel', 'Winch','tbd', 1, 'none', '75.04 -25.08 -388.36', '', 1,
        'Datal Allavium', 'Winch','tbd', 1, 'none', '59.73 -16.02 -435.13', '', 1,
        'Hakik Gheshd', 'Winch','tbd', 1, 'none', '71.12 -25.25 -519.25', '', 1,
        'Hygrnn', 'Winch','tbd', 1, 'none', '146.71 -24.99 -377.05', '', 1,
        'Jecascis Airiskel', 'Winch','tbd', 1, 'none', '32.54 -25.11 -394.27', '', 1,
        'Kelicha Anijiel', 'Winch','tbd', 1, 'none', '59.13 -16.27 -443.45', '', 1,
        'Lentanor Thunderhead', 'Winch','tbd', 1, 'none', '-28.23 -7.70 -363.09', '', 1,
        'Lerok Dilechi', 'Winch','tbd', 1, 'none', '72.71 -23.71 -407.25', '', 1,
        'Martiana Zeth', 'Winch','tbd', 1, 'none', '60.30 -16.24 -426.85', '', 1,
        'Nodramok Dakyl', 'Winch','tbd', 1, 'none', '-38.58 -10.77 -413.75', '', 1,
        'Noxdar Darmeth', 'Winch','tbd', 1, 'none', '107.11 -25.10 -353.20', '', 1,
        'Pawprech Forsill', 'Winch','tbd', 1, 'none', '45.87 -28.01 -403.74', '', 1,
        'Pevrin Damerr', 'Winch','tbd', 1, 'none', '-42.81 -28.18 -451.74', '', 1,
        'Phanejor Mikana', 'Winch','tbd', 1, 'none', '10.00 0.00 -257.83', '', 1,
        'Raul Ursino', 'Winch','tbd', 1, 'none', '-47.97 -10.39 -390.21', '', 1,
        'Shiu Hri', 'Winch','tbd', 1, 'none', '109.55 -10.42 -321.34', '', 1,
        'Utno-Leig', 'Winch','tbd', 1, 'none', '-27.25 -7.31 -356.14', '', 1,
        'Venec Agenwolfer', 'Winch','tbd', 1, 'none', '62.46 -16.02 -436.66', '', 1,

        // lava cave
        'Fire Carcarass', 'Lava Cave','tbd', 1, '2020-06-01', '25 0 31', '', 1,
        'Lavvar', 'Lava Cave','tbd', 1, '2020-06-01', '47 0 26', '', 1,
        'Wild Pterosaur', 'Lava Cave','tbd', 1, '2020-06-01', '45 0 26', '', 1,
        'Ghost Hand', 'Lava Cave','tbd', 1, '2020-06-01', '26 0 -75', '', 1,

        // xalpys cave
        'Mudober ', 'Xalpys Cave','tbd', 4, '2020-06-01', '-4 0 0, -27 0 -28, 24 0 -74, 53 0 -46', '', 1,
        'Flayed Velnishi', 'Xalpys Cave','tbd', 2, '2020-06-01', '26 0 -75, 43 0 -93', '', 1,
        'Frost Arangma ', 'Xalpys Cave','tbd', 4, '2020-06-01', '4 0 28, -23 0 -28, 31 0 -67,   48 0 -43', '', 1,
        'Sand Arangma ', 'Xalpys Cave','tbd', 2, '2020-06-01', '41 0 -53, -49 0 -26', '', 1,
        'Thunder Clacker ', 'Xalpys Cave','tbd', 2, '2020-06-01', '55 0 -67, -31 0 5', '', 1,
        'Velnishi', 'Xalpys Cave','tbd', 6, '2020-06-01', '-18 0 12, 8 0 -16, 31 0 -25, 31 0 -48, 23 0 -91, -31 0 -56', '', 1,
        'Vesper Arangma ', 'Xalpys Cave','tbd', 2, '2020-06-01', '41 0 -79, 41 0 -83', '', 1,
        'Weaver Arangma ', 'Xalpys Cave','tbd', 1, '2020-06-01', '-18 0 -5, 10 0 -13, 31 0 -42, 31 0 -37', '', 1,
        'Xalpalock ', 'Xalpys Cave','tbd', 1, '2020-06-01', '-31 0 3', '', 1,

        // the howling well
        'Ash Brother', 'Howling Well','tbd', 3, 'none', '60 0 175, 58 0 175, 56 0 175', '', 1,
        'Consumer', 'Howling Well','tbd', 5, 'none', '160 0 55, 148 0 105, 187 0 127, 133 0 142, 65 0 115', '', 1,
        'Grendol', 'Howling Well','tbd', 6, 'none', '148 0 70, 148 0 85, 164 0 133, 157 0 148, 176 0 190, 115 0 77', '', 1,
        'Imago Consumer', 'Howling Well','tbd', 5, 'none', '130 0 55, 167 0 148, 166 0 180, 105 0 142, 115 0 77', '', 1,
        'Nefas Dur', 'Howling Well','tbd', 1, 'none', '50 0 143', '', 1,
        'Rune Carved Grendol', 'Howling Well','tbd', 2, 'none', '18 0 114, 34 0 143', '', 1,
        'Rune Carved Toxic Grendol', 'Howling Well','tbd', 2, 'none', '140 0 203, 147 0 203', '', 1,
        'Strange Grendol', 'Howling Well','tbd', 1, 'none', '52 0 175', '', 1,

        'Intelligent Clacker', '','tbd', 1, 'none', '0 0 0', '', 1,
        'Peasant Woman', '','tbd', 1, 'none', '0 0 0', '', 1,

    );

    /* Insert NPC into table */
    for($i = 0; $i < count($npcs_to_insert); $i += 8)
    {
        $npcQuery = "INSERT INTO npcs (name, area,profession, quantity, checkup, position, walking, mainPos) VALUES ("
            ."'" . $npcs_to_insert[$i]   . "',"
            ."'" . $npcs_to_insert[$i+1] . "',"
            ."'" . $npcs_to_insert[$i+2] . "',"
                 . $npcs_to_insert[$i+3] . ","
            ."'" . $npcs_to_insert[$i+4] . "',"
            ."'" . $npcs_to_insert[$i+5] . "',"
            ."'" . $npcs_to_insert[$i+6] . "',"
                 . $npcs_to_insert[$i+7] . ")";
        if ($mysqli->query($npcQuery) == FALSE)
        {
            print "q: $npcQuery<br>";
            print $mysqli->error."<br>";
        }
    }

    /* ########## MAPS Locations ########## */

    /* Drop maps locations database table if exists */
    $mysqli->query("DROP TABLE IF EXISTS mapsLocations")
        or die($mysqli->error);

    $mapsLoc_sql = "CREATE TABLE IF NOT EXISTS mapsLocations (
                    name VARCHAR(50) NOT NULL,
                    area VARCHAR(50) NOT NULL,
                    position VARCHAR(700) NOT NULL,
                    checkup DATE NOT NULL,
                    PRIMARY KEY (name, area)
                    ) ENGINE = MyISAM";

    $mysqli->query($mapsLoc_sql) or die($mysqli->error);

    $mapsLoc_to_insert = array(
            // Arena
            'Kitchen', 'Arena', '-62.41 17.76 52.10', '',
            'Smith tools', 'Arena', '-60.33 17.76 -53.42', '',
            'To Hydlaa', 'Arena', '136.46 0.69 0.88', '',

            // Amdeneir
            'Billboard', 'Amdeneir',  '-18 0 -10', '',
            'Charity Box', 'Amdeneir',  '-18 0 -10', '',
            'Hall of Learning', 'Amdeneir',  '-18 0 -50', '',
            'Health Clinic', 'Amdeneir',  '0 0 -95', '',
            'Pterosaur', 'Amdeneir',  '-26 0 -9', '',
            'Storage Provider', 'Amdeneir',  '-42 0 -16', '',
            'Tavern', 'Amdeneir',  '-22 0 10', '',

            // Bronze Door Road 1
            'House of the Spirit', 'Bronze Door Road 1', '543.94 55.82 103.06', '',
            'Howling Well', 'Bronze Door Road 1' , '-356.75 47.51 -517.91', '2018-02-04',
            'Ruins', 'Bronze Door Road 1', '-504.80 46.37 198.49', '',
            'To Bronze Door Road 2', 'Bronze Door Road 1', '-39.40 48.97 522.50', '',
            'To Gugrontid', 'Bronze Door Road 1', '-527.97 49.84 4.02', '',
            'To Hydlaa', 'Bronze Door Road 1', '45.42 48.53 -537.48', '',
            'To Magic Shop', 'Bronze Door Road 1', '45.42 48.53 -537.48', '',

            // Bronze Door Road 2
            'To Bronze Door Road 1', 'Bronze Door Road 2', '-617.87 31.91 241.63', '',
            'Explorers Camp', 'Bronze Door Road 2', '-308 0 270', '',
            'To Bronze Doors Outside', 'Bronze Door Road 2', '636.70 30.12 485.07', '',

            // Bronze Doors Outside
            'Camp', 'Bronze Doors Outside', '607.50 -260.21 -1529.26', '',
            'Mine enterance', 'Bronze Doors Outside', '-667.02 -258.78 -1599.90', '',
            'To Bronze Doors Fortress', 'Bronze Doors Outside', '-340.02 -227.69 -1572.04', '',
            'To Bronze Door Road 2', 'Bronze Doors Outside', '37.18 -278.19 -2671.16', '',

            // Bronze Doors Fortress
            'Lava Cave', 'Bronze Doors Fortress', '70 0 -1200', '2020-05-30',
            'To Bronze Doors Outside', 'Bronze Doors Fortress', '-172.91 -105.77 -1223.09', '',

            'To Hydlaa East', 'Courthouse', '0.01 -1.17 -7.02', '',
            'Exit Point', 'Death Realm', '-39.86 -91.74 3.27', '',
            'Portal to spawn point', 'Death Realm', '-114.84 -191.84 -97.15', '',
            'Spawn Point', 'Death Realm', '-29.20 -118.99 28.20', '',
            'Throne', 'Death Realm', '-189.71 -74.65 -35.11', '',
            'Entrance', 'Dungeon', '-0.02 -34.26 51.74', '',
            'Exit', 'Dungeon', '-175.91 -3.00 -1.82', '',
            'To roof of windowless tower', 'Dungeon', '-198.21 -22.18 1.86', '',
            'To Bronze Door Road 1', 'Gugrontid City', '165.44 48.23 -6.64', '',

            'To Hydlaa', 'Guildlaw', '0.01 -1.17 -7.02', '',

            'Dungeon Exit', 'Hydlaa', '-171.23 21.59 0.64', '',
            'Fountain', 'Hydlaa', '-0.85 2.42 -118.90', '',
            'Gazebo', 'Hydlaa', '77.42 3.29 18.66', '',
            'Smith Tools', 'Hydlaa', '-74.57 0.09 -149.85', '',
            'Storage Provider', 'Hydlaa',  '-48 0 -164, -69 0 0', '',
            'Tavern', 'Hydlaa', '-134.03 21.52 -81.42', '',
            'To Arena', 'Hydlaa', '-102.30 -0.08 -143.68', '',
            'To Bronze Door Road 1', 'Hydlaa', '-203.03 22.20 94.39', '',
            'To Dungeon', 'Hydlaa', '2.06 4.22 48.27', '',
            'To Guildlaw', 'Hydlaa', '-100.01 21.52 -62.65', '',
            'To Hydlaa East', 'Hydlaa', '93.69 0.00 -124.15', '',
            'To Magic Shop', 'Hydlaa', '-203.03 22.20 94.39', '',
            'To Sewers', 'Hydlaa', '64.40 -2.39 -176.29, -147.94 19.13 -88.63', '',
            'To Winch', 'Hydlaa', '40.51 0.00 -204.78', '',
            'Hydlaa Sanatorium', 'Hydlaa', '119 0 -32', '',

            'Library', 'Hydlaa East', '175.54 11.30 -77.70', '',
            'Market', 'Hydlaa East', '260 0 -130', '',
            'Museum', 'Hydlaa East', '135 0 -185', '',
            'Secret Garden', 'Hydlaa East', '211.19 -0.06 -155.53', '',
            'Storage Provider', 'Hydlaa East',  '265 0 -110', '',
            'To Courthouse', 'Hydlaa East', '154.63 3.31 -114.43', '',
            'To Hydlaa', 'Hydlaa East', '94.22 0.00 -121.16', '',
            'To Ojaveda Road 1', 'Hydlaa East', '327.45 0.00 -141.88', '',

            'To Bronze Door Road 1', 'Magic Shop', '-160.92 -5.86 -30.51', '',
            'To Hydlaa', 'Magic Shop', '-160.92 -5.86 -30.51', '',
            'House of Power', 'Magic Shop', '-116.28 -4.92 -35.73', '2018-03-26',

            'Kitchen', 'Ojaveda', '-38.94 -6.95 -5.40', '',
            'Smith tools', 'Ojaveda', '-76.72 -0.52 -2.26', '',
            'Alchemy Station', 'Ojaveda', '-149.43 5.03 111.04', '',
            'To Ojaveda Road 2', 'Ojaveda', '-40.52 -9.22 -140.09', '',
            'Warehouse', 'Ojaveda', '85.05 -1.10 28.32', '',

            'Smith Tools', 'Ojaveda Road 1', '-319.66 30.79 150.26', '',
            'To Hydlaa East', 'Ojaveda Road 1', '-637.77 30.22 420.91', '',
            'To Ojaveda Road 2', 'Ojaveda Road 1', '618.28 31.47 276.56', '',

            'The Leaky Rock', 'Ojaveda Road 2', '-497.55 12.52 206.80', '',
            'To Cave', 'Ojaveda Road 2', '206.78 12.98 323.22', '',
            'To Ojaveda', 'Ojaveda Road 2', '637.67 30.31 425.14', '',
            'To Ojaveda Road 1', 'Ojaveda Road 2', '-609.73 30.12 278.67', '',

            'Tavern Enterance', 'Sewers', '-140.14 10.30 -91.84', '',
            'Winch Enterance', 'Sewers', '32.55 -6.66 -168.31', '',
            'Black Flame', 'Sewers', '-82 0 -158', '',

            'To Hydlaa', 'Winch', '40.91 -0.03 -208.35', '',
            'Storage Provider', 'Winch', '10 0 -257', '',

            // xalpys cave
            'Entry/Exit', 'Xalpys Cave', '10 0 10', '',

            // lava cave
            'Entry/Exit', 'Lava Cave', '46 0 70', '',
            'Exit', 'Lava Cave', '27 0 -74', '',

            // the howling well
            'Entry/Exit', 'Howling Well', '148 0 3', '',
            'Exit', 'Howling Well', '18 0 114', '',
        );

        for($i = 0; $i < count($mapsLoc_to_insert); $i += 4) {
            $mapsLoc_query = "INSERT INTO mapsLocations (name, area, position, checkup)
                        VALUES ('" . $mapsLoc_to_insert[$i]
                        . "', '" . $mapsLoc_to_insert[$i+1]
                        . "', '" . $mapsLoc_to_insert[$i+2]
                        . "', '" . $mapsLoc_to_insert[$i+3]
                        .  "')";
        if ($mysqli->query($mapsLoc_query) == FALSE)
        {
            print "q: $npcQuery<br>";
            print $mysqli->error."<br>";
        }
    }
    /* ########################################################################################## */
    /* ########################################################################################## */

    /* ########## MAPS Items ########## */

    /* Drop maps items database table if exists */
    $mysqli->query("DROP TABLE IF EXISTS mapsItems")
        or die($mysqli->error);

    $mapsItems_sql = "CREATE TABLE IF NOT EXISTS mapsItems (
                    name VARCHAR(50) NOT NULL,
                    area VARCHAR(50) NOT NULL,
                    category VARCHAR(50),
                    position VARCHAR(700) NOT NULL,
                    checkup DATE NOT NULL,
                    PRIMARY KEY (name, area)
                    ) ENGINE = MyISAM";

    $mysqli->query($mapsItems_sql) or die($mysqli->error);

    $mapsItems_to_insert = array(
        'Apple',        'Bronze Door Road 1',   'Plants - Cooking',     '200.30 52.39 -487.92', 'none',
        'Carp Fish',        'Bronze Door Road 1',   'Fish',         '-302.67 45.36 44.01', 'none',
        'Carrot',       'Bronze Door Road 1',   'Plants',       '331.15 52.51 -467.56', 'none',
        'Charmflower',      'Bronze Door Road 1',   'Plants - Herbal',  '-536.67 46.29 202.09', 'none',
        'Coal Lump',        'Bronze Door Road 1',   'Ore',          '85.98 53.82 -287.08', 'none',
        'Hops',         'Bronze Door Road 1',   'Plants - Herbal',  '142.31 49.37 -352.18', 'none',
        'Iron Ore',     'Bronze Door Road 1',   'Ore',          '92.31 54.90 -403.98, 261.30 52.82 48.09', 'none',
        'Juiceberry Fruit', 'Bronze Door Road 1',   'Plants - Herbal,Brewing',  '-342.71 47.37 381.86', 'none',
        'Lavender Flower',  'Bronze Door Road 1',   'Plants - Herbal',  '131.33 49.38 -350.60', 'none',
        'Orilliphia',       'Bronze Door Road 1',   'Plants - Herbals', '308.96 47.12 -180.54', 'none',
        'Pungent Tuber',    'Bronze Door Road 1',   'Plants',       '-161.96 47.54 -533.96', 'none',
        'Saffron',      'Bronze Door Road 1',   'Plants',       '145.92 68.46 -483.64', 'none',
        'Snowbud',      'Bronze Door Road 1',   'Plants - Herbal',  '-513.53 46.40 160.98', 'none',
        'Tin Ore',      'Bronze Door Road 1',   'Ore',          '-252.66 54.70 508.29', 'none',
        'Zinc Ore',     'Bronze Door Road 1',   'Ore',          '474.54 51.64 343.33', 'none',

        'Carp Fish',        'Bronze Door Road 2',   'Fish',         '-434.41 27.11 260.86', 'none',
        'Carrot',       'Bronze Door Road 2',   'Plants',       '-285.42 38.13 317.47', 'none',
        'Copper Ore',       'Bronze Door Road 2',   'Ore',          '-291.11 38.16 231.09, -463.20 0 432.32, -292.32 39.26 114.31', 'none',
        'Coppernose',       'Bronze Door Road 2',   'Fish',         '-434.41 27.11 260.86', 'none',
        'Crayfish',     'Bronze Door Road 2',   'Fish',         '-434.41 27.11 260.86', 'none',
        'Dace',         'Bronze Door Road 2',   'Fish',         '-434.41 27.11 260.86', 'none',
        'Devils Claw',      'Bronze Door Road 2',   'Plants - Herbal',  '-163.31 31.73 590.39', 'none',
        'Duppong',      'Bronze Door Road 2',   'Plants',       '-77.52 6.02 460.12', 'none',
        'Gold Ore',     'Bronze Door Road 2',   'Ore',          '-585.00 30.84 359.52', 'none',
        'Kingsfoil Leaf',   'Bronze Door Road 2',   'Plants - Herbal',  '-433.88 29.71 205.67, 114.88 33.42 64.22', 'none',
        'Perch',        'Bronze Door Road 2',   'Fish',         '-434.41 27.11 260.86', 'none',
        'Red Mangrove Leaf',    'Bronze Door Road 2',   'Plants - Herbal',  '-446.23 27.16 298.31', 'none',
        'Sinaflar Root',    'Bronze Door Road 2',   'Plants - Herbal',  '-430.34 29.88 199.65', 'none',
        'Wragberry',        'Bronze Door Road 2',   'Plants - Herbal',  '210.79 9.04 369.29', 'none',

        'Barberry Root',    'Bronze Doors Outside', 'Plants - Herbal',  '620.60 -276.55 -1846.96', 'none',
        'Black Walnut',     'Bronze Doors Outside', 'Plants',       '547.62 -273.48 -1736.49', 'none',
        'Bream',        'Bronze Doors Outside', 'Fish',         '-422.68 -276.07 -1659.20, -439.34 -277.81 -1614.84', 'none',
        'Carp Fish',        'Bronze Doors Outside', 'Fish',         '-439.34 -277.81 -1614.84', 'none',
        'Eel',          'Bronze Doors Outside', 'Fish',         '-292.69 -191.15 -1405.45', 'none',
        'Ide',          'Bronze Doors Outside', 'Fish',         '595 0 -1800', 'none',
        'Lake Mushroom',    'Bronze Doors Outside', 'Plants',       '-302.42 -184.47 -1427.79, -477.83 -264.18 -1601.53', 'none',
        'Lionfish',     'Bronze Doors Outside', 'Fish',         '-292.69 -191.15 -1405.45, -439.34 -277.81 -1614.84', 'none',
        'Manta Ray',        'Bronze Doors Outside', 'Fish',         '-422.68 -276.07 -1659.20', 'none',

        'Coal Lump',        'Dungeon',      'Ore',          '-64.36 -106.51 84.55', 'none',
        'Diamond Crystal',  'Dungeon',      'Crystal',      '-211.96 -56.28 40.23', 'none',
        'Emerald Crystal',  'Dungeon',      'Crystal',      '-90.30 -105.17 52.10', 'none',
        'Iron Ore',     'Dungeon',      'Ore',          '-183.67 -101.21 82.36', 'none',
        'Ruby Crystal',     'Dungeon',      'Crystal',      '-191.74 -56.28 72.37', 'none',
        'Sapphire Crystal', 'Dungeon',      'Crystal',      '-98.34 -41.41 110.31', 'none',
        'Silver Ore',       'Dungeon',      'Ore',          '6.62 -106.07 48.75', 'none',

        'Cinnabar Ore',     'Gugrontid City',   'Ore',          '195 0 -25', 'none',
        'Copper Ore',       'Gugrontid City',   'Ore',          '34.76 57.07 47.19', 'none',
        'Diamond Crystal',  'Gugrontid City',   'Crystal',      '17.04 61.08 -289.07', 'none',
        'Gobo Root',        'Gugrontid City',   'Plants - Herbal',  '69.71 48.40 339.06, 103.77 50.47 320.74', 'none',
        'Gold Ore',     'Gugrontid City',   'Ore',          '166.34 60.66 36.68', 'none',
        'Lumium Ore',       'Gugrontid City',   'Ore',          '26.55 51.56 9.78', 'none',
        'Yarrow',       'Gugrontid City',   'Plants - Herbal',  '49.64 4938 -331.04', 'none',

        'Coal Lump',        'Magic Shop',       'Ore',          '-154.40 -5.25 -60.90, -118.34 -5.61 -62.90', 'none',
        'Night Mushroom',   'Magic Shop',       'Plants',       '-105.50 -5.61 -32.81, -160.39 -5.61 -43.09', 'none',

        'Barberry Root',    'Ojaveda Road 1',   'Plants - Herbal',  '-530.82 25.10 279.22, -340.19 59.70 390.57', 'none',
        'Blackbush Stem',   'Ojaveda Road 1',   'Plants - Herbal',      '235.30 30.11 365.11', 'none',
        'Blue Cohosh Root', 'Ojaveda Road 1',   'Plants - Herbal',  '-548.74 19.42 562.98', 'none',
        'Butchers Broom Root',  'Ojaveda Road 1',   'Plants - Herbal',  '-116.51 30.32 586.25', 'none',
        'Clackerweed Leaf', 'Ojaveda Road 1',   'Plants - Herbal',  '-168.14 30.15 446.64', 'none',
        'Couchgrass',       'Ojaveda Road 1',   'Plants',       '-246.96 30.12 147.16', 'none',
        'Dandelion Flower', 'Ojaveda Road 1',   'Plants - Herbal,Brewing',  '-430.06 30.12 481.26', 'none',
        'Devils Claw',      'Ojaveda Road 1',   'Plants - Herbal',  '-562.78 32.20 170.73', 'none',
        'Eyebright',        'Ojaveda Road 1',   'Plants - Herbal',  '-358.92 59.23 417.52', 'none',
        'Feverfew',     'Ojaveda Road 1',   'Plants - Herbal',  '201.24 30.13 299.19', 'none',
        'Hops',         'Ojaveda Road 1',   'Plants - Herbal',  '27.64 40.14 224.51, 192.59 30.12 289.35, 11.25 30.12 492.58', 'none',
        'Kingsfoil Leaf',   'Ojaveda Road 1',   'Plants - Herbal',  '292.22 28.23 344.22', 'none',
        'Lavender Flower',  'Ojaveda Road 1',   'Plants - Herbal',  '-230 0 138, 9 0 229', 'none',
        'Lionfish',     'Ojaveda Road 1',   'Fish',         '12.00 45.57 400.91', 'none',
        'Nightlantern',     'Ojaveda Road 1',   'Plants - Herbal',  '562 0 380', 'none',
        'Platinum Ore',     'Ojaveda Road 1',   'Ore',          '502.61 72.89 238.84', 'none',
        'Red Mangrove Leaf',    'Ojaveda Road 1',   'Plants - Herbal',  '275.98 20.08 230.93', 'none',
        'Sicklepod Flower', 'Ojaveda Road 1',   'Plants - Herbal',      '276.63 20.08 223.79', 'none',
        'Threestem Fruit',  'Ojaveda Road 1',   'Plants - Herbal',  '234.83 30.12 352.55', 'none',
        'Threestem Wood',   'Ojaveda Road 1',   'Plants - Herbal',  '234.83 30.12 352.55', 'none',
        'Unicornfish',      'Ojaveda Road 1',   'Fish',         '15.17 44.46 390.33', 'none',
        'White Oak Bark',   'Ojaveda Road 1',   'Plants',       '-113.94 31.93 369.18, -233.28 30.12 161.77', 'none',
        'White Oak Wood',   'Ojaveda Road 1',   'Plants',       '-113.94 31.93 369.18, -233.28 30.12 161.77', 'none',
        'Yarrow',       'Ojaveda Road 1',   'Plants - Herbal',  '194.36 30.12 283.12, -428.95 30.12 466.66', 'none',

        'Black Walnut',     'Ojaveda Road 2',   'Plants',       '173.25 13.06 306.51', 'none',
        'Blue Cohosh Root', 'Ojaveda Road 2',   'Plants - Herbal',  '-68.50 0.00 472.54', 'none',
        'Blue Shan Flower', 'Ojaveda Road 2',   'Plants - Herbal',  '200.11 15.68 308.52', 'none',
        'Carp Fish',        'Ojaveda Road 2',   'Fish',         '-463.23 10.82 353.83', 'none',
        'Clackerweed Leaf', 'Ojaveda Road 2',   'Plants - Herbal',  '-239.51 30.12 575.23', 'none',
        'Coal Lump',        'Ojaveda Road 2',   'Ore',          '462.20 34.32 589.18', 'none',
        'Crayfish',     'Ojaveda Road 2',   'Fish',         '-497.30 10.86 588.30', 'none',
        'Dace',         'Ojaveda Road 2',   'Fish',         '-495.71 10.41 538.73', 'none',
        'Dandelion Flower', 'Ojaveda Road 2',   'Plants - Herbal,Brewing',  '-237.28 30.12 584.08', 'none',
        'Devils Claw',      'Ojaveda Road 2',   'Plants - Herbal',  '-551.26 25.94 84.98', 'none',
        'Eyebright',        'Ojaveda Road 2',   'Plants - Herbal',  '-418.92 13.05 94.72', 'none',
        'Gold Ore',     'Ojaveda Road 2',   'Ore',          '-276.85 31.93 165.92', 'none',
        'Golden Ivy Leaf',  'Ojaveda Road 2',   'Plants - Herbal',  '-376.47 30.11 382.08', 'none',
        'Iron Ore',     'Ojaveda Road 2',   'Ore',          '577.97 32.89 577.40', 'none',
        'Juiceberry Fruit', 'Ojaveda Road 2',   'Plants - Herbal,Brewing',  '-81.33 0.00 454.90', 'none',
        'Lavender Flower',  'Ojaveda Road 2',   'Plants - Herbal',  '-238.53 30.64 590.54', 'none',
        'Orfe',         'Ojaveda Road 2',   'Fish',         '-495.03 11.04 501.35', 'none',
        'Silver Ore',       'Ojaveda Road 2',   'Ore',          '-198.95 1.76 306.05', 'none',
        'Threestem Fruit',  'Ojaveda Road 2',   'Plants - Herbal',  '287.82 11.02 126.80', 'none',
        'Threestem Wood',   'Ojaveda Road 2',   'Plants - Herbal',  '287.82 11.02 126.80', 'none',
        'Tin Ore',      'Ojaveda Road 2',   'Ore',          '-492.55 13.60 536.50', 'none',
        'Trout',        'Ojaveda Road 2',   'Fish',         '-505.53 10.13 398.53', 'none',
        'Wragberry',        'Ojaveda Road 2',   'Plants - Herbal',  '428.52 13.05 488.39', 'none',
        'Wyn Reed',     'Ojaveda Road 2',   'Plants - Herbal',  '-430.10 13.05 94.20', 'none',
        'Zinc Ore',     'Ojaveda Road 2',   'Ore',          '320.47 37.14 262.47', 'none',

        'Adorned Crate',    'Ojaveda',      'Chest',        '-88 0 4', '2020-06-01',
        'Hardened Crate',   'Dungeon',      'Chest',        '-178 0 3', '2020-06-01',
        'Hardened Crate',   'Bronze Doors Fortress','Chest',        '-7 0 -580', '2020-06-01', // estimated, check with '/pos'

        // lava cave
        'Metal Chest',      'Lava Cave',        'Chest',        '25 0 30', '2020-06-01',
        'Jeweled Chest',    'Lava Cave',        'Chest',        '26 0 -78', '2020-06-01',
        'Wide Chest',       'Lava Cave',        'Chest',        '47 0 26', '2020-06-01',

        // xalpys cave
        'Ancient Chest',    'Xalpys Cave',      'Chest',        '28 0 15', '2020-06-01',

        // the howling well
        'Reinforced Chest',     'Howling Well', 'Chest',        '143 0 203', '2020-06-01',
        'Adorned Crate',        'Howling Well', 'Chest',        '58 0 175', '2020-06-01',
        'Ancient Ash Brother Journal',  'Howling Well', 'Book',         '143 0 204', '2020-06-01',
        'The Journal of Magister Fallox', 'Howling Well', 'Book',       '52 0 162', '2020-06-01',
        'Nefas Dur Journal',        'Howling Well', 'Book',         '40 0 146', '2020-06-01'
        );

        for($i = 0; $i < count($mapsItems_to_insert); $i += 5) {
            $mapsItems_query = "INSERT INTO mapsItems (name, area, category, position, checkup)
                        VALUES ('" . $mapsItems_to_insert[$i]
                        . "', '" . $mapsItems_to_insert[$i+1]
                        . "', '" . $mapsItems_to_insert[$i+2]
                        . "', '" . $mapsItems_to_insert[$i+3]
                        . "', '" . $mapsItems_to_insert[$i+4]
                        .  "')";
        if ($mysqli->query($mapsItems_query) == FALSE)
        {
            print "q: $npcQuery<br>";
            print $mysqli->error."<br>";
        }
    }
    /* ########################################################################################## */

    /* close connection */
    $mysqli->close();
