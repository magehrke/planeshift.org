<!doctype html>
<html>
<head>
	<title>Magic</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
    <link href="/styles/descriptions.css" type="text/css" rel="stylesheet" />

    <!-- script for sorting tables -->
    <script src="/js/sorttable.js"></script>
    
</head>

<!-- BODY -->
<body>

<table align="center">
	<tr>
    	<td>
        	<div id="root_site_container">
            
            	<!-- include Header and Navigation -->
				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/header_and_navigation.php";
                    include($path);
                ?>
                
                <!-- Content section -->
                <div id="content_main_container">
                    <h1 class="heading">Magic</h1>
                    <div class="text_container">

                        <p>Description: <i>With magic you can cast spells of various forms in Planeshift.</i></p>

                        <p>General information:
                            <ul>
                                <li>Currently the game offers about 90 spells and 55 glyphs.</li>
                                <li>Only training is needed to rank up your magic level.</li>
                                <li>Each way has a different focus and mental stat with different glyphs and spells.</li>
                            </ul>
                        </p>

                        <p>Spellcasting:
                            <ul>
                                <li>You can cast spells on dummies for training.</li>
                                <li>Casting spells give differnt amounts of XP.</li>
                                <li>Casting spells may be faster than gem enchanting!</li>
                                <li>Casting spells give less XP the higher your realm is in that way.</li>
                                <li>This also applies, if you boost your level to the next realm with magical items.</li>
                                <li>The higher you get the faster you cast a spell.</li>
                                <li>Thus, in the levels before a new realm, you train the fastest.</li>
                            </ul>
                        </p>
                        
                        <p>Way Master:
                            <ul>
                                <li>you have one mastery way. in this way you get the mastery staff, robe and bracers</li>
                                <li>the two ways next to them are the supporting ways. in this ways you can get the mastery staff</li>
                                <li>the ways next to the supporting ways are the nutreal ways.</li>
                                <li>the way on the other side is the opposing way</li>
                                <li>of course you can cast all the spells of all ways</li>
                                <li>but this is the history to the ways</li>
                                <li>and you may not get all the glyphs (but if you trade or have money you can again)</li>
                                <li>to see what ways are next to the way you want to master, open the spellbook and look at it as a circle</li>
                            </ul>
                        </p>
                       
                        <p>Way Training:
                            <ul>
                                <li>apprentice wand to start, then the bracers and then a robe, after the Apprentice items you go for Adept</li>
                                <li>the apprentice items get changed for Adept ones and so on</li>
                                <li>Apprentice, Adept, Master ,the 3 grades of the ways..you need to be at different magic levels to progress</li>
                                <li>you can be apprentice in all ways and adept,but only a master in one way,don't do master quests in any other way if you want to be a cw master..</li>
                                <li>all the items give boosts for that way if you equip them</li>
                            </ul>
                        </p>

                        
                        <p>Spell Power:
                            <ul>
                                <li>there is a scrollbar named "spell power" at your information window</li>
                                <li>if you put it to 100 you do stronger spells</li>
                                <li>but maybe they cost more mana</li>
                                <li>if its 0 the enemies avoid the spell more often</li>
                                <li>if its 0 you do not fail, if its 100 you fail to cast the spell very often</li>
                                <li>for training 0 is better, cause you dont fail and get always xp in the way</li>
                            </ul>
                        </p>

                        
                        <p>Tea:
                            <ul>
                                <li>you can drink tea (maybe also other stuff) that gives you a boost</li>
                                <li>at 300q they boost + 17</li>
                                <li>at 300y they boost you 10 min</li>
                                <li>snowbud tea = + 17 BLW for 10 min</li>
                                <li>wyn tea = + 17 CW</li>
                            </ul>
                        </p>
                    </div>
                </div>
                
                <!-- include Footer -->
				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/footer.php";
                    include($path);
                ?>
            </div>
        </td>
    </tr>
</table>

</body>
</html>