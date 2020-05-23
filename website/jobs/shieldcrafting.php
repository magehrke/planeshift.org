<!doctype html>
<html>
<head>
	<title>Shield Crafting</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/shieldcrafting.css" type="text/css" rel="stylesheet" />
    
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

                <div class="shieldcrafting_main_container">
                
                    <!-- Cut and Paste here - New Shield Page -->
                    <!-- PlaneShift - Shields - 2015 Nov Author Yoken Yahem -->     

                    <style>
                    p { font-size: ; font-family: ; } 
                    div.shields          { width: 900px;}
                    div.shields div      { width: 350px; float: left;}
                    div.shieldparts      { width: 900px;}
                    div.shieldparts div  { width: 425px;}
                    div.shieldcores      { width: 800px;}
                    div.shieldkits       { width: 900px;}
                    div.clear            { clear: both; }
                    .cleaner    { clear: left; line-height: 0; height: 0;} 
                    .rows       { width: 97%; min-height: 20px; background-color: rgba(255,255,255,0.15);}
                    .rows2      { width: 97%; min-height: 20px;}
                    b {min-height: 20px;}

                    .kits   { width: 100%; float: left;}
                    .col1   { width: 25%;}
                    .col2   { width: 2%;}
                    .col3   { width: 70%;}

                    .parts  { width: 100%; float: left;}
                    .col4   { width: 35%; float: left;}
                    .col5   { width: 5%; float: left;}
                    .col6   { width: 60%; float: left;}

                    .shapes { width: 100%; float: left; padding-left: 10px;}
                    .col7   { width: 35%; float: left;}
                    .col8   { width: 5%; float: left;}
                    .col9   { width: 60%; float: left;}

                    .cores  { width: 100%; float: left;}
                    .col10  { width: 30%; float: left;}
                    .col11  { width: 5%; float: left;}
                    .col12  { width: 60%; float: left;}
                    </style>
                                                
                                                
                    <p>The books regarding crafting shields are: "Catalog of Light Shields", "Catalog of Medium Shields",
                    <br> "Enforcer Shield Diagram" and "Shadow and Sunshine Shield Design".</p>
                    <dl compact="compact"><dt>

                    <b>Shields to make:</b></dt>

                    <br>

                    <div class="shields">
                      <div>
                        <dl compact="compact"><dt><b>Catalog of Light Shields:</b></dt>
                          <dd>
                            <li>Small Round Shield</li>
                            <li>Buckler</li>
                            <li>Bronze Buckler</li>
                            <li>Iron Buckler</li>
                            <li>Reinforced Wooden Shield</li>
                            <li>Small Bronze</li>
                            <li>Small Round Bronze Shield</li>
                            <li>Small Round Iron Shield</li>
                            <li>Small Round Shield</li>
                            <li>Small Shield</li>
                            <li>Small Spiked Bronze Shield</li>
                            <li>Small Spiked Iron Shield</li>
                            <li>Small Spiked Shield</li>
                            <li>Wooden and Metal Shield</li>
                          </dd>
                        </dl>
                      </div>
                      <div>
                        <dl compact="compact"><dt><b>Catalog of Medium Shields:</b></dt>
                          <dd>
                            <li>Banded Shield</li>
                            <li>Bronze Shield</li>
                            <li>Iron Shield</li>
                            <li>Round Shield</li>
                            <li>Round Bronze Shield</li>
                            <li>Round Iron Shield</li>
                            <li>Spiked Shield</li>
                            <li>Spiked Bronze Shield</li>
                            <li>Round Iron Shield</li>
                            <li>Five Spiked Shield1</li>
                            <li>Five Spiked Shield2</li>
                            <li>Stinger Shield</li>
                            <li>Three Rivet Shield</li>
                          </dd>
                        </dl>
                      </div>
                    </div>
                    <div class="clear"></div>
                    <br>
                    <div class="shields">
                      <div>
                        <dl compact="compact"><dt><b>Enforced Shield Diagram:</b></dt>
                          <dd>
                            <li>Battle Shield</li>
                            <li>Bulls Eye Shield</li>
                            <li>Crown Shield</li>
                            <li>Enforcer Shield</li>
                            <li>Protector Shield</li>
                            <li>Valiant Shield</li>
                            <li>War Shield</li>
                            <li>Warrior Shield</li>
                          </dd>
                        </dl>
                      </div>
                      <div>
                        <dl compact="compact"><dt><b>Shadow and Sunshine Shield Design:</b></dt>
                          <dd>
                          <li>Golden Shield</li>
                          <li>Radiant Shield</li>
                          <li>Shadow Shield</li>
                          <li>Sunshine Shield</li>
                          <li>Wheel Shield</li>
                          </dd>
                        </dl>
                      </div>
                    </div>
                    <div class="clear"></div>

                    <br><br>

                    <b>Shield Parts:</b>
                    <br><p>
                      a.) Leather Shield Handle, (combine)weave 4 leather strings using Smith table.<br>
                      b.) Shield Cores, combine selected Shaped Wooden Blocks/Shaped Small Wooden Blocks
                      using Smith table (see chart below).<br>
                      c.) Shaped Wooden Blocks, cut Threestem or White Oak into 2 wooden blocks, shape with wood chisel<br>
                      d.) Small Shaped Wooden Blocks, cut wooden block into 2 small wooden blocks, shape with wood chisel<br> 
                      </p> 
                    <p>For some parts like shield bands or edgings, you need to have at least 
                    level 16 shield making (level 15 for spikes). <br>
                    And the same BS applies here too: No use of the Master Crafted Hammer until level 20.
                    </p>
                    <br>


                    <div class="shieldparts"><!-- begin shieldparts-->
                      <div class="parts" ><!-- begin shieldparts parts-->
                          <div class="rows2">
                          <b> Shield Handles:</b>
                          </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">12 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">6 Shield Handles</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">12 Iron Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">6 Iron Shield Handles</div>
                          </div><!--end row7-->
                           <div class="rows">
                      <div style="float: left; width: 35%;">12 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">6 Bronze Shield Handles</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">12 Gold Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">6 Gold Shield Handles</div>
                          </div><!--end row7-->
                           <div class="rows">
                           </div>

                            <div class="rows2">
                       <b>Shield Edgings:</b>
                            </div>

                           <div class="rows">
                      <div style="float: left; width: 35%;">14 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">7 Shield Edgings</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">14 Iron Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">7 Iron Shield Edgings</div>
                          </div><!--end row7-->
                           <div class="rows">
                      <div style="float: left; width: 35%;">14 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">7 Bronze Shield Edgings</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">14 Gold Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">7 Gold Shield Edgings</div>
                          </div><!--end row7-->
                           <div class="rows">
                           </div>
                           <div class="rows2">
                      <b>Shield Half Circles:</b><br>
                          </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">2 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">2 Shield Half Circles</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">2 Iron Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">2 Iron Shield Half Circles</div>
                          </div><!--end row7-->
                           <div class="rows">
                      <div style="float: left; width: 35%;">2 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">2 Bronze Shield Half Circle</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">2 Gold Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">2 Gold Shield Half Circle</div>
                          </div><!--end row7-->
                           <div class="rows">
                           </div>
                           <div class="rows2">
                          <b> Shield Circles:</b>
                          </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">8 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">4 Shield Circles</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">8 Iron Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">4 Iron Shield Circles</div>
                          </div><!--end row7-->
                           <div class="rows">
                      <div style="float: left; width: 35%;">8 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">4 Bronze Shield Circles</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">8 Gold Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">4 Gold Shield Circles</div>
                          </div><!--end row7-->
                           <div class="rows">
                           </div>
                           <div class="rows2">
                          <b> Shield Spikes:</b>
                          </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">1 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">2 Shield Spikes</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">1 Iron Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">2 Iron Shield Spikes</div>
                          </div><!--end row7-->
                           <div class="rows">
                      <div style="float: left; width: 35%;">1 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">2 Bronze Shield Spikes</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">1 Gold Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">2 Gold Shield Spikes</div>
                          </div><!--end row7-->
                           <div class="rows">
                           </div>
                           <div class="rows2">
                          <b> Shield Bands:</b>
                          </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">7 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">3 Shield Bands</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">7 Iron Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">3 Iron Shield Bands</div>
                          </div><!--end row7-->
                           <div class="rows">
                      <div style="float: left; width: 35%;">7 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">3 Bronze Shield Bands</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">7 Gold Ingots</div>
                      <div style="float: left; width: 5%;">=</div>
                      <div style="float: left; width: 60%;">3 Gold Shield Bands</div>
                          </div><!--end row7-->
                           <div class="rows2">
                           </div><!-- end shield parts-->
                          
                          
                          
                         <div class="cleaner"></div>
                        
                          </div><!-- end left cloumn-->
                          
                      <div class="shapes"><!-- begin shieldparts shapes-->
                          <div class="rows2">
                          <b> Shield Shapes:</b>
                          </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">3 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Buckler Shield Shape</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">3 Iron Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Iron Buckler Shield Shape</div>
                           </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">3 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Bronze Buckler Shield Shape</div>
                           </div>
                           <div class="rows2">
                           </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">4 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Round Shield Shape</div>
                           </div>    
                           <div class="rows2">
                      <div style="float: left; width: 35%;">4 Iron Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Round Iron Shield Shape</div>
                           </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">4 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Round Bronze Shield Shape</div>
                           </div>
                           <div class="rows2">
                           </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">6 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Spiked Shield Shape</div>
                           </div>    
                           <div class="rows2">
                      <div style="float: left; width: 35%;">6 Iron Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Spiked Iron Shield Shape</div>
                           </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">6 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Spiked Bronze Shield Shape</div>
                           </div>
                           <div class="rows2">
                           </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">5 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Shield Shape</div>
                           </div>    
                           <div class="rows2">
                      <div style="float: left; width: 35%;">5 Iron Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Iron Shield Shape</div>
                           </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">5 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Small Bronze Shield Shape</div>
                           </div>
                           <div class="rows2">
                           </div>
                            <div class="rows">
                      <div style="float: left; width: 35%;">9 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Round Shield Shape</div>
                           </div>    
                           <div class="rows2">
                      <div style="float: left; width: 35%;">9 Iron Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Round Iron Shield Shape</div>
                           </div>
                           <div class="rows">
                      <div style="float: left; width: 35%;">9 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Round Bronze Shield Shape</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">9 Blue Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Round Blue Steel Shield Shape</div>
                           </div>
                           <div class="rows">
                           </div>
                            <div class="rows2">
                      <div style="float: left; width: 35%;">10 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Shield Shape</div>
                           </div>    
                           <div class="rows">
                      <div style="float: left; width: 35%;">10 Iron Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Iron Shield Shape</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">10 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Bronze Shield Shape</div>
                           </div>
                           <div class="rows">
                           </div>
                            <div class="rows2">
                      <div style="float: left; width: 35%;">11 Steel Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Spiked Shield Shape</div>
                           </div>    
                           <div class="rows">
                      <div style="float: left; width: 35%;">11 Iron Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Spiked Iron Shield Shape</div>
                           </div>
                           <div class="rows2">
                      <div style="float: left; width: 35%;">11 Bronze Ingots</div>
                      <div style="float: left; width: 5%;"> = </div>
                      <div style="float: left; width: 60%;">Spiked Bronze Shield Shape</div>
                           </div>
                           <div class="rows">
                           </div>
                      
                      </div><!-- begin shieldparts shapes-->

                    </div><!-- end shieldparts -->
                    <div class="clear"></div>

                    <br>

                    <b>Shield Cores:</b><br>
                    <p>Using a hand saw place Threemstem or White Oak wood on Smith table, cut into Wooden Blocks<br>
                    Cut Wooden Block into Small Wooden Blocks.<br>
                    Shape Wooden Block and Small Wooden Blocks into Shaped Wooden Blocks or Small Shaped Wooden Blocks<br>
                    using a Wood Chisel at the Smith table....</p>
                    <p> Dry Wyn Reed into Dried Reeds using the Smith table.
                        weave 8 Dried Reeds into Wicker Section using Smith table.</p>

                    <p>Combine the parts at the smith table</p>
                          
                    <br>
                    <div class="shieldcores"><!-- begin shield cores-->
                      <div class="rows">
                        <div class="cores col10">Round Wicker Shield Core</div>
                        <div class="cores col11">-</div>
                        <div class="cores col12">Weave 3 Wicker Sections</div>
                      </div><!--end row1-->
                      <div class="rows">
                        <div class="cores col10">Round Wooden Shield Core</div>
                        <div class="cores col11">-</div>
                        <div class="cores col12">3 shaped small wooden blocks</div>
                      </div><!--end row1-->
                      <div class="rows">
                        <div class="cores col10">Small Wicker Shield Core</div>
                        <div class="cores col11">-</div>
                        <div class="cores col12">Weave 2 Wicker Sections</div>
                      </div><!--end row1-->
                      <div class="rows">
                        <div class="cores col10">Small Wooden Shield Core</div>
                        <div class="cores col11">-</div>
                        <div class="cores col12">2 shaped small wooden blocks</div>
                      </div><!--end row1-->
                      <div class="rows">
                        <div class="cores col10">Wicker Shield Core</div>
                        <div class="cores col11">-</div>
                        <div class="cores col12">Weave 4 Wicker Sections</div>
                      </div><!--end row1-->
                        <div class="rows">
                        <div class="cores col10">Wooden Shield Core</div>
                        <div class="cores col11">-</div>
                        <div class="cores col12">2 shaped small wooden blocks, 1 wooden shield block</div>
                      </div><!--end row1-->
                    </div><!-- end shield cores-->
                       
                    <br><br>

                    <b>Shield Kits:</b><br>
                    <p>The step of assembling the parts ...</p>

                    <p>        Combine the parts at the smith table<br>
                            Use the Riviter to turn the XYZ Kit into a Shield</p>
                    <br>

                    <div id="shieldkits"><!-- begin shieldkits-->

                    <div class="rows">
                     <div class="kits col1">Buckler Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">Buckler Shape, Leather Shield Handle, Small Wooden Shield Core</div>
                     <div class="cleaner"></div>
                    </div><!--end row1-->

                    <div class="rows2">
                     <div class="kits col1">Bronze Buckler Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">Bronze Buckler Shape, small wooden shield core, leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row2-->

                    <div class="rows">
                     <div class="kits col1">Iron Buckler Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">iron buckler shape,small wooden shield core,leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row3-->

                    <div class="rows2">
                     <div class="kits col1">Reinforced Wooden Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">wooden shield core, leather shield handle,2 iron edgings</div>
                     <div class="cleaner"></div>
                    </div><!--end row4-->

                    <div class="rows">
                     <div class="kits col1">Small Bronze Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small bronze shield shape, wooden shield core,leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row5-->

                    <div class="rows2">
                     <div class="kits col1">Small Iron Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round iron shield shape, wooden shield core, leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row6-->

                    <div class="rows">
                     <div class="kits col1">Small Round Bronze Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round bronze shield shape,small wooden shield core,leather          
                    shield handle,</div>
                     <div class="cleaner"></div>
                    </div><!--end row7-->

                    <div class="rows2">
                     <div class="kits col1">Small Round Iron Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round iron shield shape, small wooden shield core, leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row8-->

                    <div class="rows">
                     <div class="kits col1">Small Round Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round shield shape,small wooden shield core,leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row9-->

                    <div class="rows2">
                     <div class="kits col1">Small Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small shield shape, wooden shield core,leather shield handle,</div>
                     <div class="cleaner"></div>
                    </div><!--end row10-->

                    <div class="rows">
                     <div class="kits col1">Small Spiked Bronze Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">bronze spike,small spiked bronze shield shape,,wooden shield core,leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row11-->

                    <div class="rows2">
                     <div class="kits col1">Small Spiked Iron Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">iron spike,small spiked iron shield shape,wooden shield core,leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row12-->

                    <div class="rows">
                     <div class="kits col1">Small Spiked Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">shield spike,small spiked shield shape, wooden shield core,leather shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row13-->

                    <div class="rows2">
                     <div class="kits col1">Wooden and Metal Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">wooden shield core,leather shield handle,4 iron bands</div>
                     <div class="cleaner"></div>
                    </div><!--end row14-->

                    <div class="rows">
                     <div class="kits col1">Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">Shield shape. wooden shield core, leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row15-->

                    <div class="rows2">
                     <div class="kits col1">Banded Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small shield shape,3 shield bands, small wicker shield core,shield edging,shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row16-->

                    <div class="rows">
                     <div class="kits col1">Banded Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small shield shape,3 shield bands, small wooden shield core,shield edging,shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row17-->

                    <div class="rows2">
                     <div class="kits col1">Bronze Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">bronze shield shape,wooden shield core,leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row18-->

                    <div class="rows">
                     <div class="kits col1">Iron Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">iron shield shape,wooden shield core,leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row19-->

                    <div class="rows2">
                     <div class="kits col1">Round Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round shield shape,round wooden shield core,leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row20-->

                    <div class="rows">
                     <div class="kits col1">Round Bronze Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round bronze shield shape,round wooden shield core,shield handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row21-->

                    <div class="rows2">
                     <div class="kits col1">Round Iron Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round iron shield shape,round wooden shield core,leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row22-->

                    <div class="rows">
                     <div class="kits col1">Spiked Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">4 shield spikes, spiked shield shape wooden sheild core leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row23-->

                    <div class="rows2">
                     <div class="kits col1">Spiked Bronze Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">4 bronze spikes,spiked bronze sheild shape, wooden shield cors, leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row24-->

                    <div class="rows">
                     <div class="kits col1">Spiked Iron Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">4 iron spikes, spiked iron shield shape wooden Shield core, leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row25-->

                    <div class="rows2">
                     <div class="kits col1">Five Spiked Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spiked shield shape,5 shield spikes,shield band,wooden shield core,shield circle, leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row26-->

                    <div class="rows">
                     <div class="kits col1">Five Spiked Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spiked shield shape,5 shield spikes,shield band,wicker shield core,shield circle, leather handle</div>
                     <div class="cleaner"></div>
                    </div><!--end row27-->

                    <div class="rows2">
                     <div class="kits col1">Stinger Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spiked shield shape,4 shield spikes,wooden shield core,shield circle,shield handle, </div>
                     <div class="cleaner"></div>
                    </div><!--end row28-->

                    <div class="rows">
                     <div class="kits col1">Stinger Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spiked shield shape,4 shield spikes,wicker shield core,shield circle,shield handle, </div>
                     <div class="cleaner"></div>
                    </div><!--end row29-->

                    <div class="rows2">
                     <div class="kits col1">Three Rivet Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round shield shape,sheild handle,4 bronze bands, small wooden shield core,2 bronze half circles, </div>
                     <div class="cleaner"></div>
                    </div><!--end row30-->

                    <div class="rows">
                     <div class="kits col1">Three Rivet Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round shield shaps,shield handle,4 bronze bands,small wicker shield core,2 bronze half circles, </div>
                     <div class="cleaner"></div>
                    </div><!--end row31-->

                    <div class="rows2">
                     <div class="kits col1">Battle Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round shield shape, shield handle, shield circle, 2 shield bands, round wooden shield core,shield edging</div>
                     <div class="cleaner"></div>
                    </div><!--end row32-->

                    <div class="rows">
                     <div class="kits col1">Battle Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round shield shape, shield handle, shield circle, 2 shield bands, round wicker shield core,shield edging</div>
                     <div class="cleaner"></div>
                    </div><!--end row33-->

                    <div class="rows2">
                     <div class="kits col1">Bulls Eye Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round shield shape,iron shield handle, 2 shield circles,iron circle,4 shield bands, round wooden shield core,shield edging</div>
                     <div class="cleaner"></div>
                    </div><!--end row34-->

                    <div class="rows">
                     <div class="kits col1">Bulls Eye Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round shield shape,iron shield handle, 2 shield circles,iron circle,4 shield bands, round wicker shield core,shield edging</div>
                     <div class="cleaner"></div>
                    </div><!--end row35-->

                    <div class="rows2">
                     <div class="kits col1">Crown Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spiked shield shape,shield handle,4 shield spikes,bronze circle,wooden shield core,bronze band</div>
                     <div class="cleaner"></div>
                    </div><!--end row36-->

                    <div class="rows">
                     <div class="kits col1">Crown Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spiked shield shape,shield handle,4 shield spikes,bronze circle,wicker shield core,bronze band</div>
                     <div class="cleaner"></div>
                    </div><!--end row37-->

                    <div class="rows2">
                     <div class="kits col1">Enforcer Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spike shield shape,shield handle,2 shield bands,2 shield spikes,bronze circle,wooden shield core,shield circle</div>
                     <div class="cleaner"></div>
                    </div><!--end row38-->

                    <div class="rows">
                     <div class="kits col1">Enforcer Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spike shield shape,shield handle,2 shield bands,2 shield spikes,bronze circle,wicker shield core,shield circle</div>
                     <div class="cleaner"></div>
                    </div><!--end row39-->

                    <div class="rows2">
                     <div class="kits col1">Protector Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spike shield shape,shield handle,4 shield spikes,2 bronze bands,2 shield bands,wooden shield core,bronze circle</div>
                     <div class="cleaner"></div>
                    </div><!--end row40-->

                    <div class="rows">
                     <div class="kits col1">Protector Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">spike shield shape,shield handle,4 shield spikes,2 bronze bands,2 shield bands,wicker shield core,bronze circle</div>
                     <div class="cleaner"></div>
                    </div><!--end row41-->

                    <div class="rows2">
                     <div class="kits col1">Valiant Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">shield shape,shield handle,2 shield bands, wooden shield core, 2 shield edgings,</div>
                     <div class="cleaner"></div>
                    </div><!--end row42-->

                    <div class="rows">
                     <div class="kits col1">Valiant Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">shield shape,shield handle,2 shield bands, wicker shield core, 2 shield edgings,</div>
                     <div class="cleaner"></div>
                    </div><!--end row43-->

                    <div class="rows2">
                     <div class="kits col1">War Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">bronze shield shape,bronze shield handle,3 shield bands,wooden shield core,2 shield edgings,</div>
                     <div class="cleaner"></div>
                    </div><!--end row44-->

                    <div class="rows">
                     <div class="kits col1">War Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">bronze shield shape,bronze shield handle,3 shield bands,wicker shield core,2 shield edgings,</div>
                     <div class="cleaner"></div>
                    </div><!--end row45-->

                    <div class="rows2">
                     <div class="kits col1">Warrior Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">iron shield shape, shield handle,shield band,wooden shield core, 2 shield edgings,</div>
                     <div class="cleaner"></div>
                    </div><!--end row46-->

                    <div class="rows">
                     <div class="kits col1">Warrior Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">iron shield shape, shield handle,shield band,wicker shield core, 2 shield edgings,</div>
                     <div class="cleaner"></div>
                    </div><!--end row47-->

                    <div class="rows2">
                     <div class="kits col1">Golden Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round shield shape,gold shield handle,gold circle, 2 gold bands,small wooden shield core,gold edging</div>
                     <div class="cleaner"></div>
                    </div><!--end row48-->

                    <div class="rows">
                     <div class="kits col1">Golden Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round shield shape,gold shield handle,gold circle, 2 gold bands,small wicker shield core,gold edging</div>
                     <div class="cleaner"></div>
                    </div><!--end row49-->

                    <div class="rows2">
                     <div class="kits col1">Radiant Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round shield shape,bronze shield handle, bronze circle,6 bronze bands,round wooden shield core,</div>
                     <div class="cleaner"></div>
                    </div><!--end row50-->

                    <div class="rows">
                     <div class="kits col1">Radiant Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round shield shape,bronze shield handle, bronze circle,6 bronze bands,round wicker shield core,</div>
                     <div class="cleaner"></div>
                    </div><!--end row51-->

                    <div class="rows2">
                     <div class="kits col1">Shadow Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round blue steelshield shape, shield handle, 2 iron half circles,shield half circle,2 bronze bands,round wooden shield core</div>
                     <div class="cleaner"></div>
                    </div><!--end row52-->

                    <div class="rows">
                     <div class="kits col1">Shadow Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round blue steel shield shape, shield handle, 2 iron half circles,shield half circle,2 bronze bands,round wicker shield core</div>
                     <div class="cleaner"></div>
                    </div><!--end row53-->

                    <div class="rows2">
                     <div class="kits col1">Sunshine Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">round blue steel shield shape,shield handle,4 gold spikes,2 bronze edging,gold half circle,round wooden shield core</div>
                     <div class="cleaner"></div>
                    </div><!--end row54-->

                    <div class="rows">
                     <div class="kits col1">Sunshine Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">shape super heated Small Spiked Bronze Shield Shape into Sushine Shield Wicker Kit using Anvil and Hammer</div>
                     <div class="cleaner"></div>
                    </div><!--end row55-->

                    <div class="rows2">
                     <div class="kits col1">Wheel Shield Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round shield shape, shield handle,5 bronze handle,2 shield circles,small wooden shield core, 4 shield edging</div>
                     <div class="cleaner"></div>
                    </div><!--end row56-->

                    <div class="rows">
                     <div class="kits col1">Wheel Shield Wicker Kit</div>
                     <div class="kits col2">=</div>
                     <div class="kits col3">small round shield shape, shield handle,5 bronze handle,2 shield circles,small wicker shield core, 4 shield edging</div>
                     <div class="cleaner"></div>
                    </div><!--end row57-->
                    </div><!--end shieldkits-->
                    <!-- Cut and Paste here - New Shield Page -->   

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


