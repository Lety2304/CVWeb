var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['HTML', 'CSS', 'JavaScript', 'PHP'],
        datasets: [{
            label: 'lenguajes',
            data: [35, 28, 22, 15,],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 198, 255, 0.5)',
                'rgba(255, 206, 86, 0.5)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 198, 255, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('myChart2');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['HTML', 'Materialize', 'CSS', 'Bootstrap', 'PHP', 'Wordpress', 'JavaScript', 'Wix', 'W3css', 'Json', 'GIT', 'ADOBE CREATIVE', 'BITRIX24'],
        datasets: [{
            label: 'Conocimiento',
            data: [12, 10, 11, 10, 5, 5, 7, 5, 7, 5, 10, 8, 5],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 198, 255, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(250, 128, 114, 0.5)',
                'rgba(240, 230, 140, 0.5)',
                'rgba(64, 224, 208, 0.5)',
                'rgba(128, 128, 0, 0.5)',
                'rgba(255, 182, 193, 0.5)',
                'rgba(192, 192, 192, 0.5)'
            ],
            borderColor: [
              'rgba(54, 162, 235, 1)',
              'rgba(255, 99, 132, 1)',
              'rgba(255, 198, 255, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)',
              'rgba(250, 128, 114, 1)',
              'rgba(240, 230, 140, 1)',
              'rgba(64, 224, 208, 1)',
              'rgba(128, 128, 0, 1)',
              'rgba(255, 182, 193, 1)',
              'rgba(192, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
