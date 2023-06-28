@extends('App')

@section('content')
    <h1>Dashboard</h1>

    <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Total de Tickets</h5>
                        <p class="card-text">90</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">Tickets Abiertos</h5>
                        <p class="card-text">20</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Tickets Pendientes</h5>
                        <p class="card-text">40</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Tickets Cerrados</h5>
                        <p class="card-text">30</p>
                    </div>
                </div>
            </div>
            <div class="container">
    <div class="row">
    <canvas id="frequencyPolygonChart" width="400" height="100"></canvas>
    </div>
</div>
            
<script src="{{ asset('js/chart.js') }}"></script>
    <script>
        var ctx = document.getElementById('frequencyPolygonChart').getContext('2d');

        // Datos de ejemplo para el gráfico de Polígono de Frecuencias
        var frequencyData = {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
            datasets: [{
                label: 'Abiertos',
                data: [10, 15, 7, 12, 9, 11],
                borderColor: '#FF0000',
                backgroundColor: 'rgba(75, 139, 190, 0.2)',
                pointBackgroundColor: '#FF0000',
                pointBorderColor: '#FFFFFF',
                pointRadius: 5,
                pointHoverRadius: 7,
                lineTension: 0
            }]
        };

        frequencyData.datasets.push({
    label: 'Pendientes',
    data: [5, 10, 8, 7, 12, 9],
    borderColor: '#FFFF00',
    backgroundColor: 'rgba(255, 0, 0, 0.2)',
    pointBackgroundColor: '#FFFF00',
    pointBorderColor: '#FFFFFF',
    pointRadius: 5,
    pointHoverRadius: 7,
    lineTension: 0
});

frequencyData.datasets.push({
    label: 'Cerrados',
    data: [12, 9, 11, 15, 10, 8],
    borderColor: '#00FF00',
    backgroundColor: 'rgba(0, 255, 0, 0.2)',
    pointBackgroundColor: '#00FF00',
    pointBorderColor: '#FFFFFF',
    pointRadius: 5,
    pointHoverRadius: 7,
    lineTension: 0
});

        var chartOptions = {
            responsive: true,
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true
                }
            }
        };

        var frequencyPolygonChart = new Chart(ctx, {
            type: 'line',
            data: frequencyData,
            options: chartOptions
        });
    </script>
@endsection