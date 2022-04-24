/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootstrap validation js
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
  'use strict';

  var pageResetForm = $('.auth-register-form');

  // jQuery Validation
  // --------------------------------------------------------------------
  if (pageResetForm.length) {
    pageResetForm.validate({
      /*
      * ? To enable validation onkeyup
      onkeyup: function (element) {
        $(element).valid();
      },*/
      /*
      * ? To enable validation on focusout
      onfocusout: function (element) {
        $(element).valid();
      }, */
      rules: {
        'name': {
          required: true
        },
        'email': {
          required: true,
          email: true
        },
        'password': {
          required: true
        },
        'mobile':{
          required:true,
          minlength:10,
          maxlength:10
        }
      },
      messages:{
        name:{
          required:'Name is required'
        },
        email:{
          required:'Email is required',
          email:'Must be a valid email'
        },
        password:{
          required:'password is required'
        },
        mobile:{
          required:'Mobile Number is required',
          minlength:'Must be a valid mobile number',
          maxlength:'Must be a valid mobile number'
        }
      }
    });
  }
});
