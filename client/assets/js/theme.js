"use strict";
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip()
    $(".card-header-right .close-card").on('click', function() {
        var $this = $(this);
        $this.parents('.card').animate({
            'opacity': '0',
            '-webkit-transform': 'scale3d(.3, .3, .3)',
            'transform': 'scale3d(.3, .3, .3)'
        });
        setTimeout(function() {
            $this.parents('.card').remove();
        }, 800);
    });
    $(".card-header-right .card-option .fa-chevron-left").on('click', function() {
        var $this = $(this);
        if ($this.hasClass('fa-chevron-right')) {
            $this.parents('.card-option').animate({
                'width': '35px',
            });
        } else {
            $this.parents('.card-option').animate({
                'width': '140px',
            });
        }
        $(this).toggleClass("fa-chevron-right").fadeIn('slow');
    });
    $(".card-header-right .minimize-card").on('click', function() {
        var $this = $(this);
        var port = $($this.parents('.card'));
        var card = $(port).children('.card-block').slideToggle();
        $(this).toggleClass("fa-minus").fadeIn('slow');
        $(this).toggleClass("fa-plus").fadeIn('slow');
    });
    $(".card-header-right .full-card").on('click', function() {
        var $this = $(this);
        var port = $($this.parents('.card'));
        port.toggleClass("full-card");
        $(this).toggleClass("fa-window-restore");
    });

    if ($('#statistics-chart').length) {
        var ctx = document.getElementById('statistics-chart').getContext("2d");
        var greenline = ctx.createLinearGradient(500, 0, 100, 0);
        greenline.addColorStop(0, '#fd93a8');
        greenline.addColorStop(1, '#FC6180');
        var blueline = ctx.createLinearGradient(500, 0, 100, 0);
        blueline.addColorStop(1, '#56CCF2');
        blueline.addColorStop(0, '#2F80ED');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
                datasets: [{
                    label: "Data",
                    borderColor: blueline,
                    pointBorderColor: blueline,
                    pointBackgroundColor: blueline,
                    pointHoverBackgroundColor: blueline,
                    pointHoverBorderColor: blueline,
                    pointBorderWidth: 10,
                    pointHoverRadius: 10,
                    pointHoverBorderWidth: 1,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 4,
                    data: [20, 50, 30, 50, 20, 70, 30]
                }, {
                    label: "Data",
                    borderColor: greenline,
                    pointBorderColor: greenline,
                    pointBackgroundColor: greenline,
                    pointHoverBackgroundColor: greenline,
                    pointHoverBorderColor: greenline,
                    pointBorderWidth: 10,
                    pointHoverRadius: 10,
                    pointHoverBorderWidth: 1,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 4,
                    data: [40, 30, 50, 15, 50, 50, 80]
                }]
            },
            options: {
                legend: {
                    position: "top"
                },
                tooltips: {
                    enabled: true,
                    intersect: !1,
                    mode: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            padding: 20,
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawTicks: false,
                            display: false
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold"
                        }
                    }]
                }
            }
        });
    }

    if ($('#process-complience-chart').length) {
        var bar_ctx = document.getElementById('process-complience-chart').getContext('2d');
        var bar_gradient = bar_ctx.createLinearGradient(0, 0, 0, 600);
        bar_gradient.addColorStop(1, '#56CCF2');
        bar_gradient.addColorStop(0, '#4099ff');
        var bar_chart = new Chart(bar_ctx, {
            type: 'bar',
            data: {
                labels: ["", "2016", "2017", "2018", ""],
                datasets: [{
                    label: '# of Votes',
                    data: [0, 12, 19, 15],
                    backgroundColor: bar_gradient,
                    hoverBackgroundColor: bar_gradient,
                    hoverBorderWidth: 0,
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            display: false,
                        },
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false
                        }
                    }]
                }
            }
        });
    }

    if($("#feedback-chart").lenght){
        var ctx = document.getElementById("feedback-chart").getContext("2d");
        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [83, 17, ],
                    backgroundColor: ["#00b19d", "#ef5350"],
                    label: 'Dataset 1',
                    borderWidth: 0
                }],
                labels: ["Positive", "Negative"]
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                },
                title: {
                    display: false,
                    text: 'Chart.js Doughnut Chart'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };
        window.myDoughnut = new Chart(ctx, config);
    }
});