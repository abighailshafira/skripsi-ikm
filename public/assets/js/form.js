FormValidation.formValidation(document.getElementById("form"), {
  fields: {
    email: {
      validators: {
        notEmpty: {
          message: "Email is required",
        },
        emailAddress: {
          message: "The value is not a valid email address",
        },
      },
    },
    layanan: {
      validators: {
        notEmpty: {
          message: "Nama layanan is required",
        },
      },
    },
    pertanyaan: {
      validators: {
        notEmpty: {
          message: "Pertanyaan is required",
        },
      },
    },
    unsur: {
      validators: {
        notEmpty: {
          message: "Please select an option",
        },
      },
    },

    // url: {
    //   validators: {
    //     notEmpty: {
    //       message: "Website URL is required",
    //     },
    //     uri: {
    //       message: "The website address is not valid",
    //     },
    //   },
    // },

    // phone: {
    //   validators: {
    //     notEmpty: {
    //       message: "US phone number is required",
    //     },
    //     phone: {
    //       country: "US",
    //       message: "The value is not a valid US phone number",
    //     },
    //   },
    // },
  },

  plugins: {
    trigger: new FormValidation.plugins.Trigger(),
    // Bootstrap Framework Integration
    bootstrap: new FormValidation.plugins.Bootstrap(),
    // Validate fields when clicking the Submit button
    submitButton: new FormValidation.plugins.SubmitButton(),
    // Submit the form when all fields are valid
    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
  },
});

FormValidation.formValidation(document.getElementById("form-indikator"), {
  fields: {
    unsur: {
      validators: {
        notEmpty: {
          message: "Please select an option",
        },
      },
    },
    kode: {
      validators: {
        notEmpty: {
          message: "Kode is required",
        },
      },
    },
    indikator: {
      validators: {
        notEmpty: {
          message: "Indikator is required",
        },
      },
    },
  },

  plugins: {
    trigger: new FormValidation.plugins.Trigger(),
    // Bootstrap Framework Integration
    bootstrap: new FormValidation.plugins.Bootstrap(),
    // Validate fields when clicking the Submit button
    submitButton: new FormValidation.plugins.SubmitButton(),
    // Submit the form when all fields are valid
    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
  },
});

FormValidation.formValidation(document.getElementById("form-unsur"), {
  fields: {
    kode: {
      validators: {
        notEmpty: {
          message: "Kode is required",
        },
      },
    },
    unsur: {
      validators: {
        notEmpty: {
          message: "Unsur is required",
        },
      },
    },
  },

  plugins: {
    trigger: new FormValidation.plugins.Trigger(),
    // Bootstrap Framework Integration
    bootstrap: new FormValidation.plugins.Bootstrap(),
    // Validate fields when clicking the Submit button
    submitButton: new FormValidation.plugins.SubmitButton(),
    // Submit the form when all fields are valid
    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
  },
});

FormValidation.formValidation(document.getElementById("form-pertanyaan"), {
  fields: {
    unsur: {
      validators: {
        notEmpty: {
          message: "Please select an option",
        },
      },
    },
    kode: {
      validators: {
        notEmpty: {
          message: "Kode is required",
        },
      },
    },
    pertanyaan: {
      validators: {
        notEmpty: {
          message: "Pertanyaan is required",
        },
      },
    },
  },

  plugins: {
    trigger: new FormValidation.plugins.Trigger(),
    // Bootstrap Framework Integration
    bootstrap: new FormValidation.plugins.Bootstrap(),
    // Validate fields when clicking the Submit button
    submitButton: new FormValidation.plugins.SubmitButton(),
    // Submit the form when all fields are valid
    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
  },
});
