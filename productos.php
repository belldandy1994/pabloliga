<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Autopartes</title>
	<link rel="stylesheet" href="estilos.css">

	<link rel="stylesheet" href="fonts.css">
	<style type="text/css">
	body {
}
    </style>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<header>
		<div class="menu_barra">
			<a href="#" class="boton-menu"><span class="icon-menu"></span>Refaccionaria</a>
		</div>

		<nav>
			<ul>
				
				<li><a href="index.html"><span class="icon-home3"></span>Inicio</a></li>
				<li><a href="productos.php"><span class="icon-pencil"></span>Productos</a></li>
				<li><a href="#"><span class="icon-user-tie"></span>Empleados</a></li>
				<li><a href="#"><span class="icon-man-woman"></span>Clientes</a></li>
				<li><a href="#"><span class="icon-users"></span>Proveedores</a></li>
				<li><a href="#"><span class="icon-credit-card"></span>Ventas</a></li>
                
				

			</ul>
		</nav>
	</header>

	<section>

<head>
     <meta charset="uft-8">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
     <link rel="stylesheet" type="text/css" href="estilos/estilos.css"><center><h1> Informacion y Registro de Productos.
    
            <p><font size="3" color="red">Llena los campos con la informacion correspondiente </font></p>
    
    
            <input type="text" name="no" placeholder="Codigo de Pieza" id="no" oninput="validacion('co')" required pattern="([A-Z ]{4,20})" maxlength="20"/><br>
					
			<input type="text" name="no" placeholder="Nombre de la Pieza" id="no" oninput="validacion('no')" required pattern="([A-Z ]{4,20})" maxlength="20"/><br>
		
            <input type="text" name="se" placeholder="Descripción" id="se" oninput="validacion('se')" required pattern="([A-Z ]{10,30})" maxlength="30"/><br>
    
            <input type="text" name="ca" placeholder="Proveedor" id="ca" oninput="validacion('ca')" required pattern="([A-Z] {5,20})" maxlength="20"/><br>
                      
            <input type="text" name="mod" placeholder="Modelo del auto" id="mod" oninput="validacion('mod')" required pattern="([0-9 ]{8,10})" maxlength="10"/>
					
		    <input type="text" name="ma" placeholder="Marca" id="ma" oninput="validacion('ma')" required pattern="([A-Z] {5,20})" maxlength="20"/>
    
            <input type="text" name="a" placeholder="Año" id="a" oninput="validacion('a')" required pattern="([A-Z] {5,20})" maxlength="20"/><br>
                 
            <input type="text" name="ca" placeholder="Precio de Compra" id="ca" oninput="validacion('ca')" required pattern="([A-Z] {5,20})" maxlength="20"/>
        
            <input type="text" name="ca" placeholder="Preciode Venta" id="ca" oninput="validacion('ca')" required pattern="([A-Z] {5,20})" maxlength="20"/>
    
            <br><input type="text" name="se" placeholder="Imagen del producto" id="se" oninput="validacion('se')">
            <input type="submit" value="Examinar"/> 
            
        	<center><input type="submit" value="Guardar"/></center> 
    
            <br> <link rel="stylesheet" type="text/css" href="estilos/estilos.css"><center><h4> Busqueda de Productos.
            <p><font size="3" color="red">Ingresa el Codigo de Pieza y Nombre para obtener informacion  sobre el producto.</font></p>
    
            <input type="text" name="co" placeholder="Codigo de Pieza" id="co" oninput="validacion('co')" required pattern="([A-Z ]{4,20})" maxlength="20"/>
		
            <input type="text" name="no" placeholder="Nombre de la Pieza" id="ed" oninput="validacion('no')" required pattern="([0-9 ]{8,10})" maxlength="10"/>
    
            <input type="text" name="mod" placeholder="Modelo del auto" id="mod" oninput="validacion('mod')" required pattern="([0-9 ]{8,10})" maxlength="10"/>
					
		    <input type="text" name="ma" placeholder="Marca" id="ma" oninput="validacion('ma')" required pattern="([A-Z] {5,20})" maxlength="20"/>
    
            <input type="text" name="a" placeholder="Año" id="a" oninput="validacion('a')" required pattern="([A-Z] {5,20})" maxlength="20"/><br>
    
            

		        <center><input type="submit" value="Buscar"/></center>
        
	