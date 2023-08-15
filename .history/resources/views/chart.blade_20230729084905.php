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
        function datachange(e) {
            console.log(e)
        }

        $(document).ready(function() {
            $.ajax({
                url: "http://127.0.0.1:8000/gdata",
            }).done(function(data, err) {
                var lbl = [];
                var dat = [];

                data.forEach(e => {

                    lbl.push('Tháng ' + e['mm']);
                    dat.push(e['order_no']);
                });

                const ctx = document.getElementById('myChart');
                new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: lbl,
                    datasets: [{
                    label: '# of Orders',
                    data: dat,
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
            });
        });

      </script>


</body>
</html>
