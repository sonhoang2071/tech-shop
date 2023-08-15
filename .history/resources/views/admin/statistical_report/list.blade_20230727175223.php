@extends('admin.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')

    <div class="container py-5">
        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <div id="chart_div"></div>

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
        [0,0],[1,10],[2,5],[3,76],[4,50],[5,25]
        [6,10],[7,5],[8,76],[9,50],[10,25]
        [1,10],[2,5],[3,76],[4,50],[5,25]
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
