<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

@extends('layouts.front')

@section('title')
        Shopping Cart
@endsection

@section('content')

<canvas id="myChart" width="400" height="200">
</canvas>
<script>

        let context = document.querySelector('#myChart').getContext('2d');

        new Chart(context, {
                type: 'bar',
                data: {
                        labels: @json($labels),
                        datasets: [{
                                label: 'Total $$ per day',
                                data: @json($data),
                                borderWidth: 1
                        }]
                },
        });

</script>
@endsection