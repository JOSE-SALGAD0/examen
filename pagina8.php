<?php include("template/cabecera.php"); ?>

    <div class="row">
        <div class="text-center">
            <h1>Clasificar los sistemas de informacion de acuerdo a su arquitectura</h1>
        </div>
    </div>

    <div class="row">
        <div class="text-center">
            <img class="img-fluid" src="./img/p8.jpg" style="width: 300px;" alt="">
        </div>
    </div>

    <div class="row">
        <div>
            <br>
			<h5>Los sistemas de dos niveles: archivo — servidor</h5>
			<p>Las funciones de servidor en este caso se limitan habitualmente por el almacenamiento de datos (es posible también el almacenamiento de archivos ejecutados), y el procesamiento de datos tiene lugar solamente de parte de cliente. El número de clientes está limitado a causa de imposibilidad de acceso simultáneo para grabar un archivo. Las fallas principales de tal sistema son: la ausencia de integridad garantizada de la base de datos, el bajo nivel de protección, la baja productividad del sistema.</p>
			<h5>Los sistemas de dos niveles: cliente — servidor,</h5>
			<p>donde todos los cálculos se realizan en el servidor con los medios del Sistema de Gestión de Bases de Datos bajo la protección del sistema operativo del servidor. Las fallas principales de tal tipo son la velocidad insuficiente de funcionamiento y la incapacidad de realizar los algoritmos complejos de cálculo. Aquí también es necesario señalar númerosas decisiones donde el sistema en la realidad funciona como archivo — servidor a pesar de uso de los medios instrumentales cliente — servidor con todas las consecuencias negativas derivadas. Tal decisión se crea por lo habitual a causa de dificultad de realizar los algoritmos complejos de cálculo con los medios del Sistema de Gestión de Bases de Datos de servidor y de transferir los cálculos al puesto de trabajo del cliente.</p>
			<h5>Los sistemas de muchos niveles</h5>
			<p>donde las funciones de procesamiento de datos son pasados a uno o varios servidores especiales, lo que permite dividir las funciones de almacenamiento, de procesamiento y de presentación de datos para el uso más efectivo. En dicha etapa las realizaciones de tal clase son más convenientes para la realización de funcionalidad requerida.</p>
        </div>
    </div>

<?php include("template/pie.php"); ?>