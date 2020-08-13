$(document).ready(function () {
    //круговая диаграмма
    Highcharts.chart('chart1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});
//box2
 //круговая диаграмма
    Highcharts.chart('chart2-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart2-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart2-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart2-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});

//box3
 //круговая диаграмма
    Highcharts.chart('chart3-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart3-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart3-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart3-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});

//box4
 //круговая диаграмма
    Highcharts.chart('chart4-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart4-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart4-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart4-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});

//box5
//круговая диаграмма
    Highcharts.chart('chart5-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart5-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart5-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart5-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});

//box6
//круговая диаграмма
    Highcharts.chart('chart6-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart6-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart6-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart6-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});

//box7
//круговая диаграмма
    Highcharts.chart('chart7-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart7-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart7-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart7-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});

//box8
//круговая диаграмма
    Highcharts.chart('chart8-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart8-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart8-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart8-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});

//box9
//круговая диаграмма
    Highcharts.chart('chart9-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart9-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart9-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart9-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});

//box10
//круговая диаграмма
    Highcharts.chart('chart10-1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                dataLabels: {
                    enabled: false
                },
                showInLegend: false
            }
        },
        series: [{
            name: null,
            colorByPoint: true,
            data: [{
                name: 'Мужчины',
                y: 56.33,
                color: 'rgba(51, 204, 255, 1)'
            }, {
                name: 'Женщины',
                y: 24.03,
                color: 'rgba(255, 117, 118, 1)',
                sliced: true,
                selected: true
            }, {
                name: 'Неопределено',
                y: 10.38,
                color: 'rgba(60, 208, 40, 1)'
            }]
        }]
    });
    //Апрув
Highcharts.chart('chart10-2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
        stacking: 'normal',
        dataLabels: {
            enabled: false
        },
        showInLegend: false
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '{series.name}: <b>{point.y}%</b>'
    },
    series: [{
        name: 'Отклонено',
        data: [
            {
            y: 19.97
            }
        ],
        color: 'rgba(255, 117, 118, 1)'
    }, {
        name: 'В обработке',
        data: [
            {
            y: 26.91
            }
        ],
        color: 'rgba(51, 204, 255, 1)'
    }, {
        name: 'Принято',
        data: [
            {
            y: 53.12
            }
        ],
        color: 'rgba(60, 208, 40, 1)'
    }]
});
//трафик
Highcharts.chart('chart10-3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Десктоп',
            y: 56.33,
             color: 'rgba(60, 208, 40, 1)'
        }, {
            name: 'Мобильные',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: 'Планшеты',
            y: 10.38,
            color: 'rgba(255, 205, 86, 1)'
        }]
    }]
});
//Источник
Highcharts.chart('chart10-4', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },
    yAxis: {
        gridLineWidth: 0,
        labels:false
    },
    xAxis: {
        gridLineWidth: 0,
        labels:false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Facebook',
            y: 56.33,
             color: 'rgba(59, 89, 152, 1)'
        }, {
            name: 'Instagram',
            y: 24.03,
            color: 'rgba(151, 71, 71, 1)'
        }, {
            name: 'Vk',
            y: 10.38,
            color: 'rgba(83, 131, 183, 1)'
        }]
    }]
});
});
//Процент одобрения 10 топовых офферов
Highcharts.chart('offers-graph', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        pointFormat: '<b>{point.y:.2f}%</b>'
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: '1',
            y: 56.33,
            color: 'rgba(60, 208, 40, 1)'
        }, {
            name: '2',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: '3',
            y: 56.33,
            color: 'rgba(60, 208, 40, 1)'
        }, {
            name: '4',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: '5',
            y: 56.33,
            color: 'rgba(60, 208, 40, 1)'
        }, {
            name: '6',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: '7',
            y: 56.33,
            color: 'rgba(60, 208, 40, 1)'
        }, {
            name: '8',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }, {
            name: '9',
            y: 56.33,
            color: 'rgba(60, 208, 40, 1)'
        }, {
            name: '10',
            y: 24.03,
            color: 'rgba(51, 204, 255, 1)'
        }]
    }]
});