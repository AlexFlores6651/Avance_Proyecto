<?php
    require_once "conexion.php";
    $conexion=conexion();
    $sql="SELECT producto, piezasVendidas from ventas";
    $result=mysqli_query($conexion,$sql);
    $valorY=array();//piezasVendidas
    $valorX=array();//producto
    
    while ($ver=mysqli_fetch_row($result)) {
        $valorY[]=$ver[1];
        $valorX[]=$ver[0];
    }

    $datax=json_encode($valorX);
    $dataY=json_encode($valorY);
?>

<div id="graficaBarras"></div>

<script type="text/javascript">
    function crearCadenaBarras(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x]);
        }
        return arr;
    }

</script>

<script type="text/javascript">
    datosX = crearCadenaBarras('<?php echo $datax ?>');
    datosY = crearCadenaBarras('<?php echo $dataY ?>');

    var data = [{
        x: datosX,
        y: datosY,
        type: 'bar',
        marker: {
            color: 'blue'
        }
    }];
    
    var layout = {
        title: 'Cantidad de productos vendidos',
        font:{
            family: 'Raleway, sans-serif'
        },
        xaxis:{
            tickangle: -45,
            title: 'Piezas vendidas'
        },
        yaxis:{
            title: 'Nombre del producto'
        }
    };

    Plotly.newPlot('graficaBarras', data,layout);

</script>
