<script>
    let colorsArray = [
        '#00A100',
        '#128FD9',
        '#FFB200',
        '#FF0000',
        '#fa560c',
        '#775dd0',
        '#ff4560',
        '#00e396',
        '#008ffb',
        '#ab00a2',
        '#f5956a',
        '#00aba5',
        '#8900ab',
        '#ab005b',
        '#590024',
        '#000000',
        '#ff9d00',
        '#c3ff00',
        '#77ff00',
        '#00c3ff',
        '#0000ff',
        '#d4be00',
        '#ff82a5',
        '#78c59c',
        '#5998ff',
        '#8d8f8f',
        '#b25468',
        '#6094bb',
        '#a0efef',
        '#8b6d81',
        '#b2db9f',
        '#2c8a00',
        '#8ea29e',
        '#4c4a48',
        '#80735c',
    ];
    var options = {
    chart: {
        height: 300,
        type: 'pie',
    },
    series: [@foreach($expenseHeads as $key => $accountHead) {{ $accountHead['amount'] }}{{ $loop->last ? '' : ',' }} @endforeach],

    labels: [@foreach($expenseHeads as $key => $accountHead) '{{ $accountHead['name'] }}'{{ $loop->last ? '' : ',' }} @endforeach],
    colors: colorsArray, // [@foreach($expenseHeads as $key => $accountHead) '{{ \AccountHelper::randomColor() }}'{{ $loop->last ? '' : ',' }} @endforeach],
    legend: {
        show: false,
        position: 'bottom',
        horizontalAlign: 'center',
        verticalAlign: 'middle',
        floating: false,
        fontSize: '14px',
        offsetX: 0,
        offsetY: -10
    },
    responsive: [{
        breakpoint: 600,
        options: {
            chart: {
                height: 210
            },
            legend: {
                show: false
            },
        }
    }]

  }

  var chart = new ApexCharts(
    document.querySelector("#apex_pie1"),
    options
  );

  chart.render();


  var options = {
    chart: {
        height: 380,
        type: 'bar',
        toolbar: {
            show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: true
    },
    series: [{
        data: [@foreach($data as $key => $product) {{ $product['totalSalesQnty'] }}{{ $loop->last ? '' : ',' }} @endforeach],
    }],

    xaxis: {
        categories: [@foreach($data as $key => $product) '{{ $product['product_name'] }}'{{ $loop->last ? '' : ',' }} @endforeach],
    },
    states: {
        hover: {
            filter: 'none'
        }
    },
    grid: {
        borderColor: '#f1f3fa'
    }
}

 var chart = new ApexCharts(
    document.querySelector("#apex_bar1"),
    options
 )
 ;

 chart.render();





  var options = {
  chart: {
      height: 320,
      type: 'donut',
  },
  series: [{{ $todayOverview['income']}}, {{$todayOverview['sales']}},{{$todayOverview['purchases']}},{{$todayOverview['expense']}}],
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
      offsetY: -10
  },
  labels: ["Income", "Sales", "Purchases", "Expenses"],
  colors: ["#1ecab8", "#5766da","#f93b7a", "#fbb624"],
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }],
  fill: {
      type: 'gradient'
  }
}

var chart = new ApexCharts(
  document.querySelector("#apex_pie2"),
  options
);

chart.render();



  //  Column Charts

  //colunm-1

  var options = {
    chart: {
      height: 380,
      type: 'line',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: false
      }
    },
    colors: ['#28a745', '#f93b7a'],
    dataLabels: {
      enabled: true,
    },
    stroke: {
      width: [3, 3],
      curve: 'smooth'
    },
    series: [{
      name: "Sales",
      data: [
        @foreach ($yearlySale as $month => $amount)
                {{ $amount }} {{ $loop->last ? '': ',' }}
        @endforeach
      ]
    },
    {
      name: "Purchase",
      data: [
        @foreach ($yearlyPurchase as $month => $amount)
                {{ $amount }} {{ $loop->last ? '': ',' }}
        @endforeach
      ]
    }
    ],
    grid: {
      row: {
        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.2
      },
      borderColor: '#f1f3fa'
    },
    markers: {
      style: 'inverted',
      size: 6
    },
    xaxis: {
      categories: [
          @foreach ($yearlySale as $month => $amount)
                '{{ $month }}' {{ $loop->last ? '': ',' }}
          @endforeach
      ],
      title: {
        text: 'Month'
      }
    },
    yaxis: {
      title: {
        text: 'Amount'
      }
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      floating: true,
      offsetY: -25,
      offsetX: -5
    },
    responsive: [{
      breakpoint: 600,
      options: {
        chart: {
          toolbar: {
            show: false
          }
        },
        legend: {
          show: false
        },
      }
    }]
  }

  var chart = new ApexCharts(
    document.querySelector("#yearlySalesPurchase"),
    options
  );

  chart.render();

  </script>
