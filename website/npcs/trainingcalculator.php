<?php
    $current_level = '';
    $desired_level = '';
    $result_pp = 0;
    $result_tria = 0;

    if(isset($_POST['current_level'])) {
       $current_level = $_POST['current_level'];
       $desired_level = $_POST['desired_level'];
       $result_pp = $_POST['result_pp'];
       $result_tria = $_POST['result_tria'];

}
?>

<!doctype html>
<html>
<head>
	<title>Training Calculator</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/trainingcalculator.css" type="text/css" rel="stylesheet" />
    
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

                <div class="trainingcalculator_main_container">

                    <h2>
                        Training Calculator
                    </h2>

                    <p>This little Calculator shall help you calculate how many Progression Points (PP) and Tria you need to reach a specific level in one of your stats. The cost is the same, no matter what stat (Agility, Charisma, Endurance, Intelligence, Strength, Will). Just insert your current level and the level of your disire and click 'Calculate'.</p>
                    
                    <form method="post">

                        <fieldset>
                            <legend>Input:</legend>


                            <p>Please enter your current level (between 1 and 400):<br>
                            <input class="trainingcalculator_textinput" 
                                type="text" 
                                pattern="([1-9]|[1-9][0-9]|[1-3][0-9]{2}|400)"
                                name="current_level" 
                                value="<?php echo $current_level; ?>"
                                placeholder="current level"
                                required="True"/></p>


                            <p>Please enter your desired level (between 1 and 400): <br>
                            <input class="trainingcalculator_textinput" 
                                type='text'
                                pattern='([1-9]|[1-9][0-9]|[1-3][0-9]{2}|400)'
                                name='desired_level'
                                value='<?php echo $desired_level; ?>'
                                placeholder='desired level'
                                required="True"/></p> 

                            <input type="submit" value="Calculate" onClick="calculate_tria_pp()"/>  

                        </fieldset>
                        
                        <br>

                        <fieldset>
                            <legend>Result:</legend>
                            <p>You will need:  <br>
                            <input type="text" 
                                name="result_pp" 
                                readonly="True" 
                                value="<?php echo $result_pp; ?>"> PP<br>
                            <input type="text" 
                                name="result_tria" 
                                readonly="True" 
                                value="<?php echo $result_tria; ?>"> Tria</p>              
                        </fieldset>
                    </form>

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

<script type="text/javascript">

function calculate_tria_pp() {
    var current_lvl = document.getElementsByName('current_level')[0].value;
    var desired_lvl = document.getElementsByName('desired_level')[0].value;

    current_lvl = +current_lvl;
    desired_lvl = +desired_lvl;



    //Progression Points for one level is calculated:
    //floor(level/2) - we take half of the even levels
 
    //Tria for one level is calculated   
    //floor(level/2) * 30

    var pp = 0;
    var tria = 0;

    for(i = current_lvl+1; i <= desired_lvl; i++) {
        pp = pp + Math.floor(i/2);
        tria = tria + Math.floor(i/2);
    }

    tria = tria * 30;

    document.getElementsByName('result_pp')[0].value = pp;
    document.getElementsByName('result_tria')[0].value = tria;
}


</script>


