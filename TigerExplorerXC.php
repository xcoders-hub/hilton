<?php
	$id=$_REQUEST['id'];
	$nissan=mysql_query("SELECT * FROM nuevos WHERE marca='Nissan' ORDER BY modelo");
	if(isset($id) && !empty($id)) 
	{
		$modelo=mysql_query("SELECT * FROM nuevos WHERE id='$id'");	
	} 
	else 
	{
		$modelo=mysql_query("SELECT * FROM nuevos WHERE marca='Nissan' ORDER BY RAND() LIMIT 0,1");
	}
?>

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="triumph.css" rel="stylesheet" type="text/css" />

<div id="medio">
 	<div id="triumph_header">
    	<p>	GO YOUR OWN WAY </p>
        
        <ul>
        	<li><a href="#">Bonneville</a></li>
            <li><a href="#">Bonneville T100</a></li>
            <li><a href="#">Scrambler</a></li>
            <li><a href="#">Thruxton</a></li>
            <li><a href="#">Tiger 800 XC</a></li>
            <li><a href="#">Tiger Explorer XC</a></li>
        </ul> 
    </div> 
    
  
    <div class="triumph_menu" id="tigerexplorerxc_overview">
      
   		<ul>
        	<li><a href="#" class="active">Vista General</a></li>
            <li><a href="#">Características</a></li>
            <li><a href="#">Especificaciones</a></li>         
        </ul>
        
    </div>
    
    <div class="triumph_content">
    
    	<div id="left_box">
        	<img src="img/marcas/Triumph/Tiger_Explorer/Triumph_tiger_explorer_ xc.jpg" width="100%" />
        </div>
        
        <div id="right_box">
        	<h1>
            	Tiger 800 XC
            </h1>
            
            <p>
            	Nuevo modelo. Nuevas sensaciones.
				La moto definitiva para el aficionado a los grandes viajes. 
                Manejo preciso. El viaje no termina cuando acaba la carretera. 
				Nuevo motor de 1215cc, con cardan, por supuesto. 
				Una Triumph para conquistar el mundo. 
            </p>
            
            <div class="botones">
            	<a id="ficha_tecnica" href="#"> </a>
                <a id="consulte" href="#"> </a> 
            </div>
            
        </div> <!-- /rightbox -->
    <div class="clear"></div>
    </div> <!-- /content -->
    
    <div id="triumph_gallery">
    
    	<a href="img/marcas/Triumph/Tiger_Explorer/TigerExplorerxc_01.jpg" rel="lightbox-"> 
        <img src="img/marcas/Triumph/Tiger_Explorer/TigerExplorerxc_01.jpg" width="230" border="0" alt="Motocicleta Tiger Explorer XC"/>
        </a>
        
        <a href="img/marcas/Triumph/Tiger_Explorer/TigerExplorerxc_02.jpg"> 
        <img src="img/marcas/Triumph/Tiger_Explorer/TigerExplorerxc_02.jpg" width="230" border="0" alt="Motocicleta Tiger Explorer XC"/>
        </a>
        
        <a href="img/marcas/Triumph/Tiger_Explorer/TigerExplorerxc_03.jpg"> 
        <img src="img/marcas/Triumph/Tiger_Explorer/TigerExplorerxc_03.jpg" width="230" border="0" alt="Motocicleta Tiger Explorer XC"/>
        </a>
        
        <a href="img/marcas/Triumph/Tiger_Explorer/TigerExplorerxc_04.jpg"> 
        <img src="img/marcas/Triumph/Tiger_Explorer/TigerExplorerxc_04.jpg" width="230" border="0" alt="Motocicleta Tiger Explorer XC"/>
        </a>
           
        <div class="clear" style="float:none;"></div>
    </div>    
    
</div><!--#medio-->
