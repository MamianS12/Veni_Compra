  <!--Estadisticas-->
  <script src="web/js/canvasjs.min.js"></script>
  <!--Chart-->
  <script>
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
          text: "Ventas del año"
        },
        axisY: {
          title: "Metas de ventas",
          valueFormatString: "#0,,.",
          suffix: "mn",
          stripLines: [{
            value: 3366500,
            label: "Promedio"
          }]
        },
        data: [{
          yValueFormatString: "#,### Millones",
          xValueFormatString: "YYYY",
          type: "spline",
          dataPoints: [
            { x: new Date(2002, 0), y: 2506000 },
            { x: new Date(2003, 0), y: 2798000 },
            { x: new Date(2004, 0), y: 3386000 },
            { x: new Date(2005, 0), y: 6944000 },
            { x: new Date(2006, 0), y: 6026000 },
            { x: new Date(2007, 0), y: 2394000 },
            { x: new Date(2008, 0), y: 1872000 },
            { x: new Date(2009, 0), y: 2140000 },
            { x: new Date(2010, 0), y: 7289000 },
            { x: new Date(2011, 0), y: 4830000 },
            { x: new Date(2012, 0), y: 2009000 },
            { x: new Date(2013, 0), y: 2840000 },
            { x: new Date(2014, 0), y: 2396000 },
            { x: new Date(2015, 0), y: 1613000 },
            { x: new Date(2016, 0), y: 2821000 },
            { x: new Date(2017, 0), y: 2000000 }
          ]
        }]
      });
      chart.render();

    }
  </script>
  <!--JQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <!--Componentes js-->
  <script type="text/javascript" src="web/js/init.js"></script>

   {messagebox id=$cod_message}