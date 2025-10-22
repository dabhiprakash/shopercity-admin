$(document).ready(function () {
    const ctxDoughnut = document.getElementById('doughnutChart');

    new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: ['Commercial Ovens (28%)', 'Cooking Equipment (18%)', 'Food Prep Equipment (15%) ','Beverages Equipment (15%)', 'Refrigeration Equipment (24%)'],
            datasets: [{
                label: 'Votes',
                data: [15, 15, 15, 15, 15],
                backgroundColor: [
                    '#F46200',
                    '#45B7D1',
                    '#4ECDC4',
                    '#FF6B6B',
                    '#0F3C54',
                ],
                // borderColor: [
                //     'rgba(255, 99, 132, 1)',
                //     'rgba(54, 162, 235, 1)',
                //     'rgba(255, 206, 86, 1)',
                //     'rgba(75, 192, 192, 1)'
                // ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom', // or 'left', 'right', 'bottom'
                },
            }
        }
    });

    const ctxLine = document.getElementById('lineChart');

    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Series 1',
                    data: [250, 290, 320, 370, 420, 480],
                    borderColor: 'rgba(255, 99, 71, 1)', // orange/red
                    backgroundColor: 'rgba(255, 99, 71, 0.2)',
                    borderWidth: 2,
                    tension: 0.4, // smooth curve
                    fill: false,
                    pointBackgroundColor: 'white',
                    pointBorderColor: 'rgba(255, 99, 71, 1)',
                    pointRadius: 4
                },
                {
                    label: 'Series 2',
                    data: [150, 180, 210, 240, 280, 320],
                    borderColor: 'rgba(0, 191, 255, 1)', // cyan
                    backgroundColor: 'rgba(0, 191, 255, 0.2)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: false,
                    pointBackgroundColor: 'white',
                    pointBorderColor: 'rgba(0, 191, 255, 1)',
                    pointRadius: 4
                },
                {
                    label: 'Series 3',
                    data: [100, 120, 135, 150, 170, 190],
                    borderColor: 'rgba(0, 0, 0, 0.8)', // dark line
                    backgroundColor: 'rgba(0, 0, 0, 0.1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: false,
                    pointBackgroundColor: 'white',
                    pointBorderColor: 'rgba(0, 0, 0, 0.8)',
                    pointRadius: 4
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: false,
                    min: 0,
                    max: 600,
                    ticks: {
                        stepSize: 100
                    }
                }
            },
        }
    });

    const ctxActivity = document.getElementById('activityChart').getContext('2d');

    const activityChart = new Chart(ctxActivity, {
        type: 'line',
        data: {
            labels: [
            "00:00", "02:00", "04:00", "06:00",
            "08:00", "10:00", "12:00", "14:00"
            ],
            datasets: [
            {
                label: "Orange Area",
                data: [50, 30, 20, 40, 120, 200, 90, 110],
                borderColor: "rgba(244, 98, 0, 1)",
                backgroundColor: "rgba(244, 98, 0, 0.3)",
                fill: true,
                tension: 0.4,
                pointRadius: 0
            },
            {
                label: "Gray Area",
                data: [10, 8, 6, 20, 50, 70, 30, 40],
                borderColor: "rgba(15, 60, 84, 1)",
                backgroundColor: "rgba(15, 60, 84, 0.3)",
                fill: true,
                tension: 0.4,
                pointRadius: 0
            },
            {
                label: "Blue Area",
                data: [5, 4, 3, 10, 30, 50, 10, 20],
                borderColor: "rgba(69, 183, 209, 1)",
                backgroundColor: "rgba(69, 183, 209, 0.3)",
                fill: true,
                tension: 0.4,
                pointRadius: 0
            }
            ]
        },
        options: {
            responsive: true,
            interaction: {
            mode: 'index',
            intersect: false,
            },
            stacked: true,
            plugins: {
            legend: {
                display: false // Hide legend like in your chart
            }
            },
            scales: {
            x: {
                stacked: true,
                grid: {
                display: true
                }
            },
            y: {
                stacked: true,
                beginAtZero: true,
                grid: {
                display: true
                }
            }
            }
        }
    });
});

