<?php include("template/cabecera.php"); ?>

    <div class="row">
        <div class="text-center">
            <h1>Reconocer protocolos de comunicacion en red</h1>
        </div>
    </div>

    <div class="row">
        <div class="text-center">
            <img class="img-fluid" src="./img/p7.jpg" style="width: 300px;" alt="">
        </div>
    </div>

    <div class="row">
        <div>
            <br>
            <h5>Protocolos de comunicación en red</h5>
			<p>La comunicación exitosa entre los hosts de una red requiere la interacción de gran cantidad de protocolos diferentes. Un grupo de protocolos interrelacionados que son necesarios para realizar una función de comunicación se denomina suite de protocolos. Estos protocolos se implementan en el software y hardware que está cargado en cada host y dispositivo de red.</p>
			<h5>Protocolo de aplicación:</h5>
			<p>Protocolo de transferencia de hipertexto (HTTP) es un protocolo común que regula la forma en que interactúan un servidor Web y un cliente Web. HTTP define el contenido y el formato de las solicitudes y respuestas intercambiadas entre el cliente y el servidor. Tanto el cliente como el software del servidor Web implementan el HTTP como parte de la aplicación. El protocolo HTTP se basa en otros protocolos para regir de qué manera se transportan los mensajes entre el cliente y el servidor</p>
			<h5>Protocolo de transporte:</h5>
			<p>Protocolo de control de transmisión (TCP) es el protocolo de transporte que administra las conversaciones individuales entre servidores Web y clientes Web. TCP divide los mensajes HTTP en pequeñas partes, denominadas segmentos, para enviarlas al cliente de destino. También es responsable de controlar el tamaño y los intervalos a los que se intercambian los mensajes entre el servidor y el cliente.</p>
			<h5>Protocolo de internetwork:</h5>
			<p>El protocolo internetwork más común es el Protocolo de Internet (IP). IP es responsable de tomar los segmentos formateados del TCP, encapsularlos en paquetes, asignarles las direcciones correctas y seleccionar la mejor ruta hacia el host de destino.</p>
            <div  class="text-center">
            <span class="image main"><img src="./img/pic13.jpg" alt="" /></span>
            </div>
        </div>
    </div>

<?php include("template/pie.php"); ?>