"use strict";

// Class definition
var KTAppsEducationStudentProfile = (function () {
  // Base elements
  var avatar;

  var initAvatar = function () {
    avatar = new KTImageInput("input-avatar");
  };

  return {
    // public functions
    init: function () {
      initAvatar();
    },
  };
})();

jQuery(document).ready(function () {
  KTAppsEducationStudentProfile.init();
});
