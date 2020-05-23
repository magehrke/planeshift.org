 <!-- Footer -->
<div id="footer_main_container">
    <div id="footer_content_container">
        <table>
            <tr>
                <td>
                    <p> 
                    	&copy; Planeshift.org 2020 
                    	| e-mail: <a href="mailto:planeshift@online.de">planeshift@online.de</a>
                    	| <a href="/legalnotice.php">Legal Notice</a>
                        | Visits:                                 
                                    <!-- Total Visits: 
                                    <php 
                                        # This will print the counter 1
                                        # This counter counts all requests this page is getting
                                        # If a page is reloaded, it is a new request, if you go to a subpage its also a new request

                                        $count = $mysqli->query("SELECT counter FROM counter") 
                                            or die(mysql_error());
                                        $count = $count->fetch_array();
                                        echo $count['counter']; 
                                    ?>
                                    
                                    -->

                                    <?php
                                        # This counter shows all unique ip addresses who connected to kov
                                        
                                        # DISTINCT ist eigentlich nicht nötig, da eine ip adresse ja nur
                                        # eingetragen wird, wenn sie für die jeweilige page (aber wir haben
                                        # nur eine page=kov_mainpage) noch nicht eingetragen wurde.
                                        # Dass heißt, wenn alles richtig ist, sollte es jede userip - page
                                        # kombination nur einmal geben.
                                        
                                        $pageview = $mysqli->query("SELECT userip FROM pageview 
                                            WHERE page='kov_mainpage' ") or die(mysql_error());
                                        $pageview_count = $pageview->num_rows;
                                        echo $pageview_count; 
                                    ?>
                    </p>
                </td>
            </tr>
        </table>
    </div>
</div>