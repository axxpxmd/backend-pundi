<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="row" style="padding-top: 0px">
            <div class="col-lg-6 mb-2">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        <a href="#" class="text-white">HEADLINE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-2">
                <div class="card bg-success text-white shadow">
                    <div class="card-body">
                        <a href="#" class="text-white">INDPETH</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-2">
                <div class="card bg-info text-white shadow">
                    <div class="card-body">
                        <a href="#" class="text-white">KEBIJAKAN</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-2">
                <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                        <a href="#" class="text-white">SERBA SERBI</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                        <a href="#" class="text-white">KONSULTASI</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                        <a href="#" class="text-white">USERS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">PUNDI.ID</h6>
            </div>
            <div class="card-body">
                <div class="text-center mb-3">
                    <span>PEGIAT PENDIDIKAN INDONESIA</span><br>
                    <span>Kanal Pendidikan Tajam Dan Mencerahkan</span><br>
                </div>
                <a target="_blank" rel="nofollow" href="http://pundi.or.id">PUNDI.ID &rarr;   </a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DATA ARTIKEL</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Headline
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Indepth
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Kebijakan
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-warning"></i> Serba Serbi
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Konsultasi
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ["Headline", "Indepth", "Kebijakan", "Serba Serbi", 'Konsultasi'],
        datasets: [{
            backgroundColor: ['#2979FF', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'],
            data: [{{$artikel_headline}}, {{$artikel_indepth}}, {{$artikel_kebijakan}}, {{$artikel_serbaserbi}}, {{$artikel_konsultasi}}],
        }]
    },

    // Configuration options go here
    options: {
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 60,
    }
});
</script>
