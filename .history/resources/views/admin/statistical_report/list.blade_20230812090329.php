@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')

    <div class="container py-5">
            <div>
            <input type="text" placeholder="Tháng" onchange="datachange(this)">
            <canvas id="myChart"></canvas>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

          <script>
            const ctx = document.getElementById('myChart');
            var my_chart  = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [],
                        datasets: [{
                        label: '# of Orders',
                        data: [],
                        borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                        y: {
                            beginAtZero: true
                        }
                        }
                    }
                });

            function datachange(e) {
                var m = $(e).val();
            }

            $(document).ready(function() {
                $.ajax({
                    url: "http://127.0.0.1:8000/admin/reports/gdata",
                }).done(function(data, err) {
                    var lbl = [];
                    var dat = [];

                    data.forEach(e => {
                        lbl.push('Tháng ' + e['mm']);
                        dat.push(e['order_no']);
                    });

                    my_chart.data.labels = lbl;
                    my_chart.data.datasets[0].data = dat;
                    my_chart.update();

                });
            });

          </script>

    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');

      data.addRows([
        [0,0],[1,-10],[2,5],[3,76],[4,50],[5,25],
        [6,110],[7,45],[8,76],[9,50],[10,25],
        [11,100],[12,51]
      ]);

      var options = {
        hAxis: {
          title: 'Time'
        },
        vAxis: {
          title: 'Popularity'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
@endsection
