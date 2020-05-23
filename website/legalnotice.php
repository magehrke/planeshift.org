<!doctype html>
<html>
<head>
	<title>Legal Notice</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/legalnotice.css" type="text/css" rel="stylesheet" />
    
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
					<table id="legal_notice_main_table">
                    	<tr>
                        	<td class="content_table_headline">
                            	Legal Notice
                            </td>
                        </tr>
                    	<tr>
                    		<td id="legal_notice_text">
                            	<p>The information contained in this website is for general information purposes only. The information is provided by Kingdom of Valour and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.</p>

								<p>In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.</p>

								<p>Through this website you are able to link to other websites which are not under the control of Kingdom of Valour. We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.</p>

								<p>Every effort is made to keep the website up and running smoothly. However, Kingdom of Valour takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>
                                <p></p>
                                <p>Copyright-Exception: The Quest-Section contains remixed and transformed informations from http://duduandlele.byethost33.com/ which are under the license: <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">CC Attribution-Noncommercial-Share Alike 3.0 Unported</a></p>
                            </td>
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