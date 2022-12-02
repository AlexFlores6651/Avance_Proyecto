<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acerca de Nosotros</title>
    <link rel="stylesheet" href="css/grid.css">
</head>

<body>
    <?php
    include "encabezado.php";
    ?>
    <div class="contenedor">
        <header class="header">
            <h2>Acerca de Nosotros</h2>
        </header>
        <main class="contenido">
            <p>
                Somos una pequeña empresa que busca continuar desarrollando los conocimientos y habilidades para impulsar las carreras profesionales relacionadas a algún lenguaje de la programación como c, c++, java y PHP.
                <br>
                <br>
                Dando una idea mas clara de que son algunos lenguajes:
            </p>
        </main>
        <main class="vision">
            <p>
                <b>Java</b> es un lenguaje de programación y una plataforma informática que fue comercializada por primera vez en 1995 por Sun Microsystems.
                El lenguaje de programación Java fue desarrollado originalmente por James Gosling, de Sun Microsystems (constituida en 1983 y posteriormente adquirida el 27 de enero de 2010 por la compañía Oracle), y publicado en 1995 como un componente fundamental de la plataforma Java de Sun Microsystems. Su sintaxis deriva en gran medida de C y C++, pero tiene menos utilidades de bajo nivel que cualquiera de ellos. Las aplicaciones de Java son compiladas a bytecode (clase Java), que puede ejecutarse en cualquier máquina virtual Java (JVM) sin importar la arquitectura de la computadora subyacente.
            </p>
            <br>
            <img src="" alt="">
        </main>
        <main class="mision">
            <p>
                <b>C++</b> es un lenguaje de programación diseñado en 1979 por Bjarne Stroustrup. La intención de su creación fue extender al lenguaje de programación C y añadir mecanismos que permiten la manipulación de objetos. En ese sentido, desde el punto de vista de los lenguajes orientados a objetos, C++ es un lenguaje híbrido.

                Posteriormente se añadieron facilidades de programación genérica, que se sumaron a los paradigmas de programación estructurada y programación orientada a objetos. Por esto se suele decir que el C++ es un lenguaje de programación multiparadigma.
            </p>
            <img src="" alt="">
        </main>
        <main class="objetivo">
            <p>
                El lenguaje de programación <b>C</b> se considera como uno de los lenguajes más importantes en la actualidad. Su flexibilidad aporta una gran libertad al programador informático; sin embargo, dispone de una baja comprobación de incorrecciones, por lo que la responsabilidad del profesional es total.

                Además del desarrollo de sistemas operativos, C es clave en la creación de apps y sustenta otros lenguajes más actuales como Java, C++ o C#.

                Por otro lado, C está compuesto por una base en la que se almacenan las diferentes funciones en forma de bloques de código y así operar en los parámetros marcados.
            </p>
            <img src="imagenes/cmasmas.png" alt="">
        </main>
        <aside class="sidebar">
            <h3>Ultima actualizacion del servidor:</h3>
            <br>
            <?php
            date_default_timezone_set("America/Mexico_City");
            echo date("F d Y H:i:s.", getlastmod());
            ?>
        </aside>
    </div>
</body>

</html>