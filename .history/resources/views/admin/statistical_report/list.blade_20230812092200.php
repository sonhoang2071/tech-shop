@extends('admin.layouts.master')

@section('content')

    <div class="container py-5">
        <div>
            <h1>Báo cáo doanh số</h1>
            <canvas id="myChart1"></canvas>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart');
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
@endsection
