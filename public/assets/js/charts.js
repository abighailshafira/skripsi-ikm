"use strict";

// Shared Colors Definition
const primary = "#6993FF";
const success = "#1BC5BD";
const info = "#8950FC";
const warning = "#FFA800";
const danger = "#F64E60";

function generateData(count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = "w" + (i + 1).toString();
    var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

    series.push({
      x: x,
      y: y,
    });
    i++;
  }
  return series;
}

var KTApexChartsDemo = (function () {
  // Grafik Perbandingan Nilai IKM
  var grafikPerbandinganNilai = function () {
    const apexChart = "#grafik_perbandingan_nilai";
    var options = {
      series: [
        {
          name: "Triwulan 1",
          data: [61, 58, 63, 60, 66],
        },
        {
          name: "Triwulan 2",
          data: [87, 105, 91, 114, 94],
        },
        {
          name: "Triwulan 3",
          data: [45, 48, 52, 53, 41],
        },
      ],
      chart: {
        type: "bar",
        height: 350,
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: "55%",
          endingShape: "rounded",
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        show: true,
        width: 2,
        colors: ["transparent"],
      },
      xaxis: {
        categories: ["2019", "2020", "2021", "2022", "2023"],
      },
      yaxis: {
        title: {
          text: "Nilai IKM (Konversi)",
        },
      },
      fill: {
        opacity: 1,
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return val;
          },
        },
      },
      colors: [primary, success, warning],
    };

    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
  };

  var _demo12 = function () {
    const apexChart = "#chart_12";
    var options = {
      series: [44, 55, 13, 43, 22],
      chart: {
        width: 380,
        type: "pie",
      },
      labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
      responsive: [
        {
          breakpoint: 480,
          options: {
            chart: {
              width: 200,
            },
            legend: {
              position: "bottom",
            },
          },
        },
      ],
      colors: [primary, success, warning, danger, info],
    };

    var chart = new ApexCharts(document.querySelector(apexChart), options);
    chart.render();
  };

  return {
    // public functions
    init: function () {
      grafikPerbandinganNilai();
      // _demo11();
      _demo12();
    },
  };
})();

jQuery(document).ready(function () {
  KTApexChartsDemo.init();
});
