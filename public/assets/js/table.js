"use strict";

var KTDatatablesBasicPaginations = (function () {
  var table = function () {
    var table = $("#table");

    table.DataTable({
      responsive: true,
      pagingType: "full_numbers",
      columnDefs: [
        {
          targets: 0,
          width: "15px",
        },
        {
          targets: -1,
          width: "100px",
          title: "Aksi",
          orderable: false,
        },
      ],
    });
  };

  var layananTable = function () {
    var table = $("#layanan_table");

    // begin first table
    table.DataTable({
      responsive: true,
      pagingType: "full_numbers",
      columnDefs: [
        {
          targets: 0,
          width: "15px",
        },
        // {
        //   targets: 3,
        //   width: "100px",
        //   orderable: false,
        // },
        // {
        //   targets: 4,
        //   width: "75px",
        //   render: function (data, type, full, meta) {
        //     var status = {
        //       1: { title: "Aktif", class: "label-light-success" },
        //       2: { title: "Tidak Aktif", class: " label-light-primary" },
        //     };
        //     if (typeof status[data] === "undefined") {
        //       return data;
        //     }
        //     return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + "</span>";
        //   },
        // },
        {
          targets: -1,
          width: "100px",
          title: "Aksi",
          orderable: false,
        },
      ],
    });
  };

  var indikatorTable = function () {
    var table = $("#indikator_table");

    // begin first table
    table.DataTable({
      responsive: true,
      pagingType: "full_numbers",
      columnDefs: [
        {
          targets: 0,
          width: "15px",
        },
        {
          targets: -1,
          width: "100px",
          title: "Aksi",
          orderable: false,
        },
      ],
    });
  };

  var pertanyaanTable = function () {
    var table = $("#pertanyaan_table");

    // begin first table
    table.DataTable({
      responsive: true,
      pagingType: "full_numbers",
      columnDefs: [
        {
          targets: 0,
          width: "15px",
        },
        {
          targets: -1,
          width: "75px",
          title: "Aksi",
          orderable: false,
        },
      ],
    });
  };

  var pilihanJawabanTable = function () {
    var table = $("#pilihan_jawaban_table");

    // begin second table
    table.DataTable({
      pagingType: "full_numbers",
      // orderable: false,
      columnDefs: [
        {
          targets: 0,
          width: "30px",
        },
        {
          targets: -1,
          width: "50px",
          title: "Aksi",
          orderable: false,
        },
      ],
    });
  };

  var responTable = function () {
    var table = $("#respon_table");

    // begin first table
    table.DataTable({
      pagingType: "full_numbers",
      scrollY: "50vh",
      scrollX: true,
      scrollCollapse: true,
      columnDefs: [
        {
          targets: 0,
          width: "15px",
        },
        {
          targets: -1,
          width: "50px",
          title: "Aksi",
          orderable: false,
        },
      ],
    });
  };

  var adminTable = function () {
    var table = $("#admin_table");

    // begin first table
    table.DataTable({
      responsive: true,
      pagingType: "full_numbers",
      columnDefs: [
        {
          targets: 0,
          width: "15px",
        },
        {
          targets: 3,
          width: "150px",
          render: function (data, type, full, meta) {
            var status = {
              1: { title: "Super Admin", class: "label-light-success" },
              2: { title: "Admin", class: " label-light-danger" },
            };
            if (typeof status[data] === "undefined") {
              return data;
            }
            return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + "</span>";
          },
        },
        {
          targets: -1,
          width: "50px",
          title: "Aksi",
          orderable: false,
        },
      ],
    });
  };

  var initTable2 = function () {
    var table = $("#kt_datatable2");

    // begin second table
    table.DataTable({
      pagingType: "full_numbers",
      scrollY: "50vh",
      scrollX: true,
      scrollCollapse: true,
      columnDefs: [
        {
          targets: 0,
          width: "30px",
        },
        // {
        //   targets: 2,
        //   width: "125px",
        //   render: function (data, type, full, meta) {
        //     var output;
        //     output =
        //       `
        //       <div class="d-flex align-items-center">
        //         <div class="symbol symbol-30 flex-shrink-0">
        //          <img src="assets/media/svg/avatars/001-boy.svg` +
        //       `" alt="photo">
        //         </div>

        //         <div class="ml-1">
        //           <a href="#" class="text-muted text-hover-primary">` +
        //       full[3] +
        //       `</a>
        //         </div>
        //       </div>`;
        //     return output;
        //   },
        // },
        {
          targets: -1,
          width: "50px",
          orderable: false,
        },
      ],
    });
  };

  var rekapitulasiTable = function () {
    var table = $("#rekapitulasi_table");

    // begin second table
    table.DataTable({
      pagingType: "full_numbers",
      columnDefs: [
        {
          targets: 0,
          width: "30px",
        },
      ],
      // rowDefs: [
      //   {
      //     targets: -1,
      //     orderable: false,
      //   },
      // ],
    });
  };

  var presentaseTable = function () {
    var table = $("#presentase_table");

    // begin second table
    table.DataTable({
      pagingType: "full_numbers",
      // orderable: false,
      columnDefs: [
        {
          targets: 0,
          width: "50px",
        },
      ],
      // rowDefs: [
      //   {
      //     targets: -1,
      //     orderable: false,
      //   },
      // ],
    });
  };

  return {
    //main function to initiate the module
    init: function () {
      table();
      layananTable();
      indikatorTable();
      pertanyaanTable();
      responTable();
      adminTable();
      initTable2();
      rekapitulasiTable();
      presentaseTable();
      pilihanJawabanTable();
    },
  };
})();

jQuery(document).ready(function () {
  KTDatatablesBasicPaginations.init();
  KTDatatablesBasicBasic.init();
});
