<?php
    require_once "conexion.php";
    $conexion=conexion();
    $sql="SELECT fechaVenta,montoVenta from ventas";
    $result=mysqli_query($conexion,$sql);
    $valorY=array();//MontoVentas
    $valorX=array();//fechaVentas
    
    while ($ver=mysqli_fetch_row($result)) {
        $valorY[]=$ver[1];
        $valorX[]=$ver[0];
    }

    $datax=json_encode($valorX);
    $dataY=json_encode($valorY);
?>

<div id="graficaLineal"></div>

<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>


<script type="text/javascript">
    
    datosX=crearCadenaLineal('<?php echo $datax ?>');
    datosY=crearCadenaLineal('<?php echo $dataY ?>');
    
    var trace1 = {
        x: datosX,
        y: datosY,
        type: 'scatter',
        line: {
            color: 'black',
            width: 2
        },
        marker: {
            color: 'red',
            size: 12
        }
    };

    var layout = {
        title: 'Total de ventas',
        xaxis: {
            title: 'Fecha'
        },
        yaxis: {
            title: '$$ Monto'
        }
    };
    var data = [trace1];

    Plotly.newPlot('graficaLineal', data,layout);

</script>
