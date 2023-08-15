@extends('admin.layouts.master')

@section('content')

    <div class="container py-5">
        <div>
            <h1>Báo cáo số lượng</h1>
            <canvas id="myChart1"></canvas>
        </div>
        <div>
            <h1>Báo cáo doanh số</h1>
            <canvas id="myChart2"></canvas>
        </div>
        <div>
            <h1>Báo cáo doanh thu</h1>
            <canvas id="myChart3"></canvas>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart1');
            var my_chart  = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [],
                        datasets: [{
                        label: 'Number of Orders',
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
            const myChart2 = document.getElementById('myChart2');
            var my_chart_2  = new Chart(myChart2, {
                    type: 'bar',
                    data: {
                        labels: [],
                        datasets: [{
                        label: 'Cost Price of Orders',
                        data: [],
                        borderWidth: 1
                        },{
                            label: 'Retail Price Price of Orders',
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
            const myChart3 = document.getElementById('myChart3');
            var my_chart  = new Chart('myChart3, {
                    type: 'bar',
                    data: {
                        labels: [],
                        datasets: [{
                        label: 'Number of Orders',
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
                    url: "http://127.0.0.1:8000/admin/reports/gdata1",
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
                $.ajax({
                    url: "http://127.0.0.1:8000/admin/reports/gdata2",
                }).done(function(data, err) {
                    var lbl = [];
                    var dat1 = [];
                    var dat2 = [];

                    data.forEach(e => {
                        lbl.push('Tháng ' + e['mm']);
                        dat1.push(e['order_cost_price']);
                        dat2.push(e['order_retail_price']);
                    });

                    my_chart_2.data.labels = lbl;
                    my_chart_2.data.datasets[0].data = dat1;
                    my_chart_2.data.datasets[1].data = dat2;
                    my_chart_2.update();

                });
            });

        </script>
@endsection
