var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Bootstrap', 'Jquery', 'PHP', 'Wordpress', 'JavaScript', 'Ajax', 'HTML', 'Materialize', 'CSS', 'Visual Basic', 'Java', 'Wix', 'W3css', 'Json', 'ActionScript'],
        datasets: [{
            label: 'Conocimiento',
            data: [80, 85, 100, 30, 80, 75, 90, 70, 80, 40, 40, 80, 85, 75, 40],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title: {
              display: true,
              text: 'Lenguajes'
        },
        scale: {
            ticks: {
                suggestedMin: 0,
                suggestedMax: 100,
                stepSize: 25
            }
        }
    }
});


var ctx = document.getElementById('myChart2');
var myChart2 = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Bootstrap', 'Jquery', 'PHP', 'Wordpress', 'JavaScript', 'Ajax', 'HTML', 'Materialize', 'CSS', 'Visual Basic', 'Java', 'Wix', 'W3css', 'Json', 'ActionScript'],
        datasets: [{
            label: 'Conocimiento',
            data: [80, 85, 100, 30, 80, 75, 90, 70, 80, 40, 40, 80, 85, 75, 40],
            backgroundColor: [
                'rgba(255, 206, 86, 0.5)'
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title: {
              display: true,
              text: 'Bibliotecas'
        },
        scale: {
            ticks: {
                suggestedMin: 0,
                suggestedMax: 100,
                stepSize: 25
            }
        }
    }
});


var ctx = document.getElementById('myChart3');
var myChart3 = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Bootstrap', 'Jquery', 'PHP', 'Wordpress', 'JavaScript', 'Ajax', 'HTML', 'Materialize', 'CSS', 'Visual Basic', 'Java', 'Wix', 'W3css', 'Json', 'ActionScript'],
        datasets: [{
            label: 'Conocimiento',
            data: [80, 85, 100, 30, 80, 75, 90, 70, 80, 40, 40, 80, 85, 75, 40],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        title: {
              display: true,
              text: 'Apis'
        },
        scale: {
            ticks: {
                suggestedMin: 0,
                suggestedMax: 100,
                stepSize: 25
            }
        }
    }
});
