<!-- Drop and Create all the database tables -->
<!-- Can be removed if all Data is correct -->
<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_static.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_items.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_npcs-maps.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_questchains.php";
    include($path);
?>

<!doctype html>
<html>
<head>
	<title>Guild</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

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



                <!-- check if user is logged in -->
                <?php 
                    if (login_check($mysqli) == true) : 
                ?>


                
                <!-- Content section -->
                <div id="content_main_container">

                    <div class="content_left_main">
                    
                        <!-- Content left section -->
                        <table class="content_left_main_table">
                            <tr>
                                <td>
                                    <table class="news_box">

                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Items (07.12.2017)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> NEWS: The devs have added cutlery and a green gift box to the game. Make sure to check them out in Game.
                                                <br><br>
                                                The items 'Gift Box Green' (129 T.), 'Small Cloth Sack' (50 T.), 'Potted Plant' (50 T.), 'Fork' (5 T.), 'Plate' (5 T.), 'Small Plate' (5 T.), 'Spoon' (5 T.) from 
                                                <?php
                                                    echo "<a href='";
                                                    /* Printing the NPC with a link to the Map */
                                                    /* The Variable $npcName has to be set !!! */
                                                    $npcName = 'Kaiman Jilatt';
                                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                                    $path .= "/includes/npc_link_to_map.inc.php";
                                                    include($path);
                                                    echo "' target='_blank'>Kaiman Jilatt</a>";
                                                ?>
                                                have been added to the <a href="/items.php" target="_blank">items section</a>. 
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Arena NPC (08.04.2017)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Finally I added the new 9 NPCs in the Arena to the <a href="/npcs.php" target="_blank">NPCs</a> tab. Sadly I cannot make a reference to <a href="www.planeshift.net/npc" target="_blank">planeshift.net</a>, because the NPC are not added there. If anyone knows how I can contact the planeshift.net owners, please write me an email. Take care, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Quests (08.04.2017)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>I have done a lot in the past 2 weeks. I started to add all the quests again to the page. These quests are done by me and a program I wrote translates them so a browser can display it correctly. The program is still growing, but I started to add the first 8 Quests. I have to actually do them In Game to be able to add them, so please be patient. Because of this, we now have 2 Quest sections. One <a href="/quests/quests.php" target="_blank">Quests</a> section, where you can find the new quests and one <a href="/quests/quests-old.php" target="_blank">Quests (Old)</a> section, where you can find the old 385 quest logs. I would suggest looking for the information you need under the new <a href="/quests/quests.php" target="_blank">Quests</a> tab and if you don't find the quest, consulting the <a href="/quests/quests-old.php" target="_blank">Quests (Old)</a> tab. 
                                                <br>
                                                <br>
                                                If someone wants to contribute and also send me his questlog, after doing a quest, please write me an E-Mail or tell me in Game. Would be a great help for me. Take care, Huarwar.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Metallurgy (23.03.2017)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>I just renewed the <a href="/jobs/metallurgy.php" target="_blank">Metallurgy Page</a>. I added tiny little pictures. Sadly I do not have all the ores or am not able to craft all the stuff, because my level is to low. If someone can help me, figuring out which pictures fits to the ores, ingots or stocks, please write me. I have extracted all the pictures from the game, which have anything to do with metallurgy, and I can tell you, there will be at some point many more ores in the game. Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Shield Crafting (23.03.2017)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Hello again. We have a new section: <a href="/jobs/shieldcrafting.php" target="_blank">Shield Crafting</a>. Yoken (I guess some of you know him) contributed the information. Thanks to him! Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Lifting Access Limitations (23.03.2017)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Hello everyone. Today I lifted the access limitations. Non guild memebers are now able to access all the informations, except guild inter informations. Looking at the amount of players who are playing the game, I think it is a good step. Sharing is Caring, hopefully other people find these informations useful. Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Landing Page (07.02.2017)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. I did some changes to the <a href="/index.php" target="_blank">landing page</a>. The picture you see can be our new guild logo. Please tell me in game or via e-mail what you think about it. As always, if you know suggestions how to improve the landing page, please reach out to me. Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Metallurgy</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. I finished the metallurgy page. Check it out under <a href="/jobs/metallurgy.php" target="_blank">Jobs -> Metallurgy</a>. Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Lockpicking</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. Eatuck took the time and collected all the data about lockpicking. Thanks to him I was able to update the page (<a href="/jobs/lockpicking.php" target="_blank">link</a>). Give him a hug if you see him, take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Way Training 2</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. It's me again, Huarwar. Today I found a little logical error in my program which aggregates all the quests and creates all the databases with rewards etc. Therefore is the <a href="/magic/way-training.php" target="_blank">Way Training</a> Section under the Magic tab now complete. Except human errors of course. Still, if anyone of you notices that there are wrong levels dedicated to the quests, please give me a tell. Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Way Training</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. You may have already seen the <a href="/magic/way-training.php" target="_blank">Way Training</a> Section under the Magic tab. It looked horrible the last month, so I made a few changes. Hopefully you enjoy! Moreover I noticed that it isn't complete. If you have knowledge about this section and can give me (some of) the missing information, please let me know. Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Guildranks</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. Just now I finished the new guildranks table. I am still not fully satisfied with the formatting, but I think it looks ok now and you can extract the information. You can find the site under the guild tab, <a href="/guild/guildranks.php" target="_blank">here</a>. Lots of thanks also to Eatuck who send me the information including the layout! Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Site Counters</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. Today I added a page counter. Ok, i even added two. So the first one counts the total visits of the planeshift.org page and the second one counts the visit of different ip-addresses (closest thing to people). At the moment the counters are under the <a href="/" target="_blank">Home Section</a> and not as beautiful as I would like it to be. If you have an idea where to place it and how to change the style, please tell me. Fine. Let's see how much our site is in use. Take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Training Calculator</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. Today I added a <a href="/trainers/trainingcalculator.php" target="_blank">Training Calculator</a>. I think it is especially helpful for newbies, knowing what they need for leveling up stats. Training it faster. But even if you have maxed all your stats, please make sure to check it out! This is it for now, take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Lava Cave Exit, Nefas Entrance, Grendol Cave</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone, it's me again. I just added two new sections under the guild tab. The first is <a href="/more/nefasentrance.php" target="_blank">Nefas Entrance</a> and the second is <a href="/more/grendolcave.php" target="_blank">Grendol Cave</a> (click on the names to go direeeeeectly to the sections). Both show solutions for the respective problem, so in the future you do not have to worry anymore going into the skull cave.</p>
                                                    <p>Great thanks this time to Lingwelli, who provided the information and did all the pictures. He additionally provided informations about how to get out of the lava cave (<a href="/more/lavacaveexit.php" target="_blank">Lava Cave Exit</a>), which is already online for several month. You can find this peace of information also under the guild tab. Again a big thank you (and hug) for this contribution to Lingwelli. This is it for now, take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content_table_headline">
                                                <p>Gem Enchanting Section</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Hello everyone. I (Huaaaaaaaarwar) am currently working on the website again. I did a few changes. First, there is no changelog anymore at the Landingpage. To compensate this and to get to use this section right here, I will write little updates right here from time to time. In the long run, this section shall also be used for other information purposes. I hope at some point I will have the time to program a frontend for other members, to post stuff here. Second, there is a new site. Hurraaay! It's called Gem Enchanting and you will find it under the magic tab or if you click on this link: <a href="/magic/gemenchanting.php" target="blank">Yeah, I can finally look up gem enchanting</a>.</p>
                                                    <p>Great Thanks to Eatuck, who took a lot of time, to provide all the information. Without him, the section would not exist. This is it for now, take care and see you in game, Huarwar.
                                                </p>
                                            </td>
                                        </tr>
                                    	<tr>
                                            <td class="content_table_headline">
                                                <p>Website Launch</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                    
                                                <p> Welcome to our new Guild Website. It is still under construction, but if you can already find useful information, please help yourself. There are most probably lots of mistakes and I do not claim completeness. Please contact me and tell me what you like or don't like about the website. Don't hesitate, most of the changes are simple and fast. I hope you like the site. Enjoy.</p>
                                                 <p> For the content we all have to contribute our experience and information we collect during playing. Just send me an E-Mail. Adding information is my job and my participation to the guild, so please contact me if you have anything which should be put online.</p>
                                                
                                            </td>
                                        </tr>
                                  	</table>
                                </td>
                            </tr>
                        </table>
                        
                    
                    </div>
                    
                    <!-- Right Content Section-->
                    <div class="content_right_main">
                        <table class="content_right_main_table">
                        
                            <!-- Headline right content -->
                            <!-- Official Links -->
                            <tr>
                                <td class="content_table_headline"> Official Links</td>
                            </tr>
                            
                            <tr>
                                <td><a href="http://planeshift.it/" target="_blank">Planeshift Mainpage</a></td>
                            </tr>
                            <tr>
                                <td> <a href="http://hydlaaplaza.com/smf/" target="_blank">Forum</a></td>
                            </tr>
                            <tr>
                                <td> <a href="http://docs.hydlaaplaza.com/doc/" target="_blank">Wiki</a></td>
                            </tr>
                            <tr>
                                <td> <a href="http://hydlaaplaza.com/flyspray/" target="_blank">Bug Tracker</a></td>
                            </tr>

                            <tr>
                            	<td> <a href="http://planeshift.teamix.org/myplane/" target="_blank">MyPlane</a></td>
                            </tr>
                            <!-- Links: Quests etc. -->
                            <tr>
                            	<td class="content_table_headline">Quests, NPCs &amp; Items</td>
                            </tr>
                            <tr>
                            	<td><a href="http://planeshift.net/" target="_blank">planeshift.net</td>
                            </tr>
                            <tr>
                            	<td> <a href="http://duduandlele.byethost33.com/" target="_blank">duduandlele</a></td>
                            </tr>
                            <tr>
                            	<td> <a href="https://wanderers-info.tk/HomePage/" target="_blank">wanderers</a></td>
                            </tr>

                            <!-- Links: Mods for Planeshift -->
                            <tr>
                            	<td class="content_table_headline">Mods</td>
                            </tr>
                            <tr>
                            	<td> <a href="http://greatshift.111mb.de/" target="_blank">Greatshift</a></td>
                            </tr>

                            <!-- Links: IRC -->
                            <tr>
                            	<td class="content_table_headline">IRC</td>
                            </tr>
                            <tr>
                            	<td> <a href="http://webchat.freenode.net" target="_blank">IRC Webchat (Freenode)</a></td>
                            </tr>


                            
                            
                        </table>
                    </div>
				</div>

                <!-- if user is not logged in -->            
               	<?php 
                   	else : 
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= "/includes/psl_login_redirect.php";
                        include($path);

                   	endif; 
               	?>
    
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