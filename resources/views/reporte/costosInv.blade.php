<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Grafica de Costos</title>
  </head>
  <body>


<div class="d-flex justify-content-between">
        <h1>  {{ __('Reportes de Costos') }} </h1>
        <p>
        <a href="{{ url()->previous() }}" class="btn btn-danger" >Cerrar</a>
    </p>
    </div>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div id="container">
                
            </div>
            
        </div>
    </div>
</div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


      <script src="https://code.highcharts.com/highcharts.js"></script> 
     <script src="https://code.highcharts.com/modules/exporting.js"></script> 
     <script src="https://code.highcharts.com/modules/export-data.js"></script> 
     <script src="https://code.highcharts.com/accessibility.js"></script> 


     <script>
        Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Reportes de Costos'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Costo',
        colorByPoint: true,
        data: <?= $data ?>
    }]
});
    </script>
  </body>
</html>



