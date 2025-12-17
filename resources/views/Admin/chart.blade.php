<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-10 space-y-8">

        <!-- Page Header -->
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Dashboard Statistik</h1>
            <p class="text-slate-500 mt-1">
                Ringkasan laporan dan distribusi pengaduan
            </p>
        </div>

        <!-- Stat Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Total -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-slate-100 flex items-center justify-center">
                        📄
                    </div>
                    <div>
                        <p class="text-sm text-slate-500">Total Laporan</p>
                        <p class="text-3xl font-bold text-slate-800">{{ $totalReports }}</p>
                    </div>
                </div>
            </div>

            <!-- Responded -->
            <div class="bg-white rounded-2xl border border-blue-200 p-6 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        ✔️
                    </div>
                    <div>
                        <p class="text-sm text-blue-600">Sudah Ditanggapi</p>
                        <p class="text-3xl font-bold text-blue-700">{{ $respondedReports }}</p>
                    </div>
                </div>
            </div>

            <!-- Unresponded -->
            <div class="bg-white rounded-2xl border border-red-200 p-6 shadow-sm">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center text-red-600">
                        ⏳
                    </div>
                    <div>
                        <p class="text-sm text-red-600">Belum Ditanggapi</p>
                        <p class="text-3xl font-bold text-red-700">{{ $unrespondedReports }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Status Chart -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-slate-800 mb-4">
                    Status Laporan
                </h2>
                <div class="h-[300px] flex items-center justify-center">
                    <canvas id="reportsChart"></canvas>
                </div>
            </div>

            <!-- Province Chart -->
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-slate-800 mb-4">
                    Laporan per Provinsi
                </h2>
                <div class="h-[300px] flex items-center justify-center">
                    <canvas id="provinceChart"></canvas>
                </div>
            </div>

        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Chart.register(ChartDataLabels);
            const totalReports = {{ max($totalReports, 1) }};

            // Status Chart
            new Chart(document.getElementById('reportsChart'), {
                type: 'doughnut',
                data: {
                    labels: ['Ditanggapi', 'Belum Ditanggapi'],
                    datasets: [{
                        data: [{{ $respondedReports }}, {{ $unrespondedReports }}],
                        backgroundColor: [
                            'rgba(37, 99, 235, 0.6)',
                            'rgba(239, 68, 68, 0.6)'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    cutout: '65%',
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        datalabels: {
                            color: '#fff',
                            font: {
                                weight: 'bold',
                                size: 14
                            },
                            formatter: (value, ctx) => {
                                const data = ctx.chart.data.datasets[0].data;
                                const total = data.reduce((a, b) => a + b, 0);
                                const percentage = ((value / total) * 100).toFixed(1);
                                return `${percentage}%`;
                            }
                        }
                    }
                }
            });


            // Province Chart
            new Chart(document.getElementById('provinceChart'), {
                type: 'pie',
                data: {
                    labels: {!! json_encode($provinceData->keys()) !!},
                    datasets: [{
                        data: {!! json_encode($provinceData->values()) !!},
                        backgroundColor: [
                            '#60a5fa', '#818cf8', '#34d399',
                            '#fbbf24', '#f87171', '#a78bfa', '#38bdf8'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        datalabels: {
                            color: '#fff',
                            font: {
                                weight: '600',
                                size: 12
                            },
                            formatter: (value, ctx) => {
                                const data = ctx.chart.data.datasets[0].data;
                                const total = data.reduce((a, b) => a + b, 0);
                                const percent = ((value / total) * 100).toFixed(1);

                                // Optional: hide tiny slices
                                return percent < 5 ? '' : `${percent}%`;
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: (ctx) => {
                                    const value = ctx.raw;
                                    const data = ctx.chart.data.datasets[0].data;
                                    const total = data.reduce((a, b) => a + b, 0);
                                    const percent = ((value / total) * 100).toFixed(1);
                                    return `${ctx.label}: ${value} (${percent}%)`;
                                }
                            }
                        }
                    }
                }
            });

        });
    </script>
</x-app-layout>