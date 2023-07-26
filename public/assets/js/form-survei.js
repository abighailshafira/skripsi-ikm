// Validasi Form Identitas Responden
// FormValidation.formValidation(document.getElementById("form-kuesioner"), {
//   fields: {
//     waktu: {
//       validators: {
//         notEmpty: {
//           message: "Waktu is required",
//         },
//       },
//     },
//     nama: {
//       validators: {
//         notEmpty: {
//           message: "Nama is required",
//         },
//       },
//     },
//     usia: {
//       validators: {
//         notEmpty: {
//           message: "Usia is required",
//         },
//       },
//     },
//     jenis_kelamin: {
//       validators: {
//         notEmpty: {
//           message: "Jenis Kelamin is required",
//         },
//       },
//     },
//     pendidikan: {
//       validators: {
//         notEmpty: {
//           message: "Pendidikan is required",
//         },
//       },
//     },
//     Pekerjaan: {
//       validators: {
//         notEmpty: {
//           message: "Pekerjaan is required",
//         },
//       },
//     },
//   },

//   plugins: {
//     trigger: new FormValidation.plugins.Trigger(),
//     // Bootstrap Framework Integration
//     bootstrap: new FormValidation.plugins.Bootstrap(),
//     // Validate fields when clicking the Submit button
//     submitButton: new FormValidation.plugins.SubmitButton(),
//     // Submit the form when all fields are valid
//     defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
//   },
// });

// Wizard Form Pengisian Survei
("use strict");

// Tanggal dan Waktu Pengisian Survei
$("#waktu").datetimepicker({
  locale: "de",
});

// Periode
$("#kt_datetimepicker_7_1").on("change.datetimepicker", function (e) {
  $("#kt_datetimepicker_7_2").datetimepicker("minDate", e.date);
});
$("#kt_datetimepicker_7_2").on("change.datetimepicker", function (e) {
  $("#kt_datetimepicker_7_1").datetimepicker("maxDate", e.date);
});

// Class definition
var KTWizard4 = (function () {
  // Base elements
  var _wizardEl;
  var _formEl;
  var _wizardObj;
  var _validations = [];

  // Private functions
  var _initWizard = function () {
    // Initialize form wizard
    _wizardObj = new KTWizard(_wizardEl, {
      startStep: 1, // initial active step number
      clickableSteps: true, // allow step clicking
    });

    // Validation before going to next page
    _wizardObj.on("change", function (wizard) {
      if (wizard.getStep() > wizard.getNewStep()) {
        return; // Skip if stepped back
      }

      // Validate form before change wizard step
      var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

      if (validator) {
        validator.validate().then(function (status) {
          if (status == "Valid") {
            wizard.goTo(wizard.getNewStep());

            KTUtil.scrollTop();
          } else {
            Swal.fire({
              text: "Sorry, looks like there are some errors detected, please try again.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn font-weight-bold btn-light",
              },
            }).then(function () {
              KTUtil.scrollTop();
            });
          }
        });
      }

      return false; // Do not change wizard step, further action will be handled by he validator
    });

    // Change event
    _wizardObj.on("changed", function (wizard) {
      KTUtil.scrollTop();
    });

    // Submit event
    _wizardObj.on("submit", function (wizard) {
      Swal.fire({
        text: "All is good! Please confirm the form submission.", //info
        icon: "success",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Ya, submit!",
        cancelButtonText: "Batal",
        customClass: {
          confirmButton: "btn font-weight-bold btn-primary",
          cancelButton: "btn font-weight-bold btn-default",
        },
      }).then(function (result) {
        if (result.value) {
          _formEl.submit(); // Submit form
        } else if (result.dismiss === "cancel") {
          Swal.fire({
            text: "Your form has not been submitted!.", //cancel
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn font-weight-bold btn-primary",
            },
          });
        }
      });
    });
  };

  var _initValidation = function () {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    _validations.push(FormValidation.formValidation(_formEl, {}));

    // Step 2
    _validations.push(
      FormValidation.formValidation(_formEl, {
        // fields: {
        //   lembaga: {
        //     validators: {
        //       notEmpty: {
        //         message: "Lembaga is required",
        //       },
        //     },
        //   },
        //   layanan: {
        //     validators: {
        //       notEmpty: {
        //         message: "Layanan is required",
        //       },
        //     },
        //   },
        // },
        // plugins: {
        //   trigger: new FormValidation.plugins.Trigger(),
        //   bootstrap: new FormValidation.plugins.Bootstrap({
        //     eleValidClass: "",
        //   }),
        // },
      })
    );

    // Step 3
    _validations.push(
      FormValidation.formValidation(_formEl, {
        // fields: {
        //   waktu: {
        //     validators: {
        //       notEmpty: {
        //         message: "Waktu is required",
        //       },
        //     },
        //   },
        //   nama: {
        //     validators: {
        //       notEmpty: {
        //         message: "Nama is required",
        //       },
        //     },
        //   },
        //   usia: {
        //     validators: {
        //       notEmpty: {
        //         message: "Please select an option",
        //       },
        //     },
        //   },
        //   jenis_kelamin: {
        //     validators: {
        //       notEmpty: {
        //         message: "Please select an option",
        //       },
        //     },
        //   },
        //   pendidikan: {
        //     validators: {
        //       notEmpty: {
        //         message: "Please select an option",
        //       },
        //     },
        //   },
        //   pekerjaan: {
        //     validators: {
        //       notEmpty: {
        //         message: "Please select an option",
        //       },
        //     },
        //   },
        // },
        // plugins: {
        //   trigger: new FormValidation.plugins.Trigger(),
        //   bootstrap: new FormValidation.plugins.Bootstrap({
        //     eleValidClass: "",
        //   }),
        // },
      })
    );

    // Step 4
    _validations.push(
      FormValidation.formValidation(_formEl, {
        // fields: {
        //   radios: {
        //     validators: {
        //       choice: {
        //         min: 1,
        //         message: "Please kindly select package type",
        //       },
        //     },
        //   },
        // },
        // plugins: {
        //   trigger: new FormValidation.plugins.Trigger(),
        //   bootstrap: new FormValidation.plugins.Bootstrap({
        //     eleValidClass: "",
        //   }),
        // },
      })
    );
  };

  return {
    // public functions
    init: function () {
      _wizardEl = KTUtil.getById("wizard-survei");
      _formEl = KTUtil.getById("form-survei");

      _initWizard();
      _initValidation();
    },
  };
})();

jQuery(document).ready(function () {
  KTWizard4.init();
});
