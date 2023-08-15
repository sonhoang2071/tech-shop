<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
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
                url: "http://127.0.0.1:8000/admin/report/gdata",
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


</body>
</html>
