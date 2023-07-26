// Confirm alert delete
$(".button-hapus").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "No, cancel!",
    customClass: {
      confirmButton: "btn font-weight-bold btn-success",
      cancelButton: "btn font-weight-bold btn-light",
    },
    reverseButtons: true,
  }).then(function (result) {
    if (result.value) {
      document.location.href = href;
    } else if (result.dismiss === "cancel") {
      Swal.fire({
        title: "Cancelled",
        text: "Your data is safe :)",
        icon: "error",
        showConfirmButton: false,
        timer: 1200,
      });
    }
  });
});

$(".button-submit").on("click", function (e) {
  e.preventDefault();
  const form = $(this).parents("form");

  Swal.fire({
    title: "Apakah data akan disimpan?",
    text: "Lorem ipsum dolor sit amet consectetur",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Simpan",
    cancelButtonText: "Batal",
    closeOnConfirm: false,
    customClass: {
      confirmButton: "btn font-weight-bold btn-success",
      cancelButton: "btn font-weight-bold btn-light",
    },
    reverseButtons: true,
  }).then(function (result) {
    if (result.value) {
      form.submit();
    }
  });
});

// Tetap muncul walau salah
// $(".button-login").on("click", function (e) {
//   e.preventDefault();
//   const form = $(this).parents("form");

//   Swal.fire({
//     title: "Berhasil Login!",
//     icon: "success",
//     timer: 3000,
//     showConfirmButton: false,
//     timer: 1500,
//     allowOutsideClick: false,
//     allowEscapeKey: false,
//   }).then(function (result) {
//     form.submit();
//   });
// });

//berhasil
// $("#kt_sweetalert_demo_4").click(function (e) {
//   Swal.fire({
//     title: "Good job!",
//     text: "You clicked the button!",
//     icon: "success",
//     buttonsStyling: false,
//     confirmButtonText: "Confirm me!",
//     customClass: {
//       confirmButton: "btn btn-primary",
//     },
//   });
// });

//berhasil tanpa button
// $("#kt_sweetalert_demo_6").click(function (e) {
//   Swal.fire({
//     position: "top-right",
//     icon: "success",
//     title: "Your work has been saved",
//     showConfirmButton: false,
//     timer: 1500,
//   });
// });

// $(".confirm-responden").click(function (e) {
//   e.preventDefault();
//   const href = $(this).attr("href");

//   Swal.fire({
//     title: "Simpan data?",
//     text: "You won't be able to revert this!",
//     icon: "warning",
//     showCancelButton: true,
//     confirmButtonText: "Ya, simpan!",
//   }).then(function (result) {
//     if (result.value) {
//       // document.location.href = href;
//       Swal.fire("Disimpan!", "Data berhasil disimpan.", "success");
//     }
//   });
// });

// $(".test").submit(function (e) {
//   Swal.fire({
//     position: "top-right",
//     icon: "success",
//     title: "Your work has been saved",
//     showConfirmButton: true,
//     // timer: 1500,
//   });
// });
