<!doctype html>
<html>
<head>
	<title>Guildranks</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
    <!-- import the css for quests -->
    <link href="/styles/guildranks.css" type="text/css" rel="stylesheet" />
    
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
                
                <h2 style="text-align: center;">
                    Guildranks
                </h2>


                <!-- Content section -->
                <div id="content_main_container">
  				
                    <table class="guildranks_main_table">

                    <tr>
                        <th class="border_on_top border_on_left" rowspan='2' style="min-width: 50px;">Rank</th>
                        <th class="border_on_top" rowspan='2' style="min-width: 130px;">Name</th>
                        <th class="border_on_top" rowspan='2' style="min-width: 50px;">Stats</th>
                        <th class="border_on_top" rowspan='2' style='min-width: 150px;'>Survival Skills: pick 2 of 3, Armor (any), Combat (any), Body Development</th>
                        <th class="border_on_top" colspan='2' style="min-width: 250px;">All Skills (except Stats)</th> 
                        <th class="border_on_top" rowspan='2' style="min-width: 130px;">Rewards</th>
                    </tr>

                    <tr>                    
                        <th class="border_on_left"># of Skills</th>
                        <th>at Rank</th>              
                    </tr>

                    <tr >
                        <td class="border_on_left">1</td>
                        <td>Newcomer</td>
                        <td colspan='4'>Willing to learn and a will to live. The player must have honest and ethical play practices. This includes no exploiting bugs, using multi-clients, or macro/botting to train.</td>
                        <td>LA/MA set, 2 sets of weapons each set for a different skill or weapon type.  Shield if the member is interested.  Tools for craft(s) of interest. All base glyphs from Leverus & HP pots as needed.  All gear and HP pots are to be starting tier and 50q</td>
                    </tr>
                    <tr>
                        <td class="border_on_left">2</td>
                        <td>Pathfinder</td>
                        <td>450</td>
                        <td>10</td>
                        <td>1</td>
                        <td>25</td>
                        <td>300q gear of steel tier.  Gear is to be the same type and amount as for rank one.  More potent hp pots if needed.  Jewelry of useful boost to the player. (Thinking of Empathy here.) tria for stats - recommended amount 450k</td>
                    </tr>
                    <tr>
                        <td class="border_on_left">3</td>
                        <td>Journeyman</td>
                        <td>600</td>
                        <td>20</td>
                        <td>2</td>
                        <td>35</td>
                        <td>300q enchanted gear, master crafted helm. More Jewelry options. tria for stats - recommended amount 700k</td>
                    </tr>
                    <tr>
                        <td class="border_on_left">4</td>
                        <td>Freeman</td>
                        <td>750</td>
                        <td>30</td>
                        <td>2</td>
                        <td>75</td>
                        <td>Guild house key, jewelry options, tria for stats - recommended amount 925k</td>
                    </tr>
                    <tr>
                        <td class="border_on_left">5</td>
                        <td>Stalwart</td>
                        <td>1200</td>
                        <td>40</td>
                        <td>3</td>
                        <td>100</td>
                        <td>tria for stats - recommend 2000k. At this point the player should be maxing stats with the combination of gifts and their own earnings.</td>
                    </tr>
                    <tr>
                        <td class="border_on_left">6</td>
                        <td>Veteran</td>
                        <td>1800</td>
                        <td>50</td>
                        <td>3</td>
                        <td>150</td>
                        <td rowspan='4'>After the 5th rank, stalwart, the player should be more than able to acquire what they need.</td>
                    </tr>
                    <tr>
                        <td class="border_on_left">7</td>
                        <td>Veteran Elite</td>
                        <td>2400</td>
                        <td>50</td>
                        <td>3</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td class="border_on_left">8</td>
                        <td>Council</td>
                        <td colspan='4'>Council people are promoted to the council at the discretion of the guild leader. They help teach other members and advise the guild leader.</td>
                    </tr>
                    <tr>
                        <td class="border_on_left">9</td>
                        <td>Lady of Valour</td>
                        <td colspan='4'>Promotion is at the discretion of the current guild leader.</td>
                    </tr>

                    </table>        
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


