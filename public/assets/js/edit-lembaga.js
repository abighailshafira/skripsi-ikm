"use strict";

// Class definition
var KTContactsEdit = (function () {
  // Base elements
  var avatar;

  var initAvatar = function () {
    avatar = new KTImageInput("input-logo");
  };

  return {
    // public functions
    init: function () {
      initAvatar();
    },
  };
})();

jQuery(document).ready(function () {
  KTContactsEdit.init();
});

FormValidation.formValidation(document.getElementById("form-lembaga"), {
  fields: {
    logo: {
      validators: {
        file: {
          extension: "jpg,jpeg,png",
          type: "image/jpg,image/jpeg,image/png",
          // max_size: "1024",
          message: "The selected file is not valid",
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
