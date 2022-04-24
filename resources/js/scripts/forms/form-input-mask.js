/*=========================================================================================
        File Name: form-input-mask.js
        Description: Input Masks
        ----------------------------------------------------------------------------------------
        Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
        Author: Pixinvent
        Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
  'use strict';

  var creditCard = $('.credit-card-mask'),
    phoneMask = $('.phone-number-mask'),
    mobileMask = $('.mobile-number-mask'),
    dateMask = $('.date-mask'),
    timeMask = $('.time-mask'),
    numeralMask = $('.numeral-mask'),
    blockMask = $('.block-mask'),
    delimiterMask = $('.delimiter-mask'),
    customDelimiter = $('.custom-delimiter-mask'),
    prefixMask = $('.prefix-mask'),
    pincodeMask = $('.pincode-mask'),
    aadharMask = $('.aadhar-mask');

  // Credit Card
  if (creditCard.length) {
    creditCard.each(function () {
      new Cleave($(this), {
        creditCard: true
      });
    });
  }

  // Phone Number
  if (phoneMask.length) {
    phoneMask.each(function(){
      new Cleave(phoneMask, {
        phone: true,
        phoneRegionCode: 'IN'
      });
    });
  }

  // mobileMask Number
  if (mobileMask.length) {
    mobileMask.each(function(){
      new Cleave(mobileMask, {
        phone: true,
        phoneRegionCode: 'IN'
      });
    });
  }

  // Date
  if (dateMask.length) {
    new Cleave(dateMask, {
      date: true,
      delimiter: '-',
      datePattern: ['Y', 'm', 'd']
    });
  }

  // Time
  if (timeMask.length) {
    new Cleave(timeMask, {
      time: true,
      timePattern: ['h', 'm', 's']
    });
  }

  //Numeral
  if (numeralMask.length) {
    new Cleave(numeralMask, {
      numeral: true,
      numeralThousandsGroupStyle: 'thousand'
    });
  }

  //Block
  if (blockMask.length) {
    new Cleave(blockMask, {
      blocks: [4, 3, 3],
      uppercase: true
    });
  }

  // Delimiter
  if (delimiterMask.length) {
    new Cleave(delimiterMask, {
      delimiter: '·',
      blocks: [3, 3, 3],
      uppercase: true
    });
  }

  // Custom Delimiter
  if (customDelimiter.length) {
    new Cleave(customDelimiter, {
      delimiters: ['.', '.', '-'],
      blocks: [3, 3, 3, 2],
      uppercase: true
    });
  }

  // Prefix
  if (prefixMask.length) {
    new Cleave(prefixMask, {
      prefix: '+63',
      blocks: [3, 3, 3, 4],
      uppercase: true
    });
  }

  //Aadhar
  if (aadharMask.length) {
    new Cleave(aadharMask, {      
      numericOnly: true,
      blocks: [4, 4, 4]
    });
  }

   //Aadhar
   if (pincodeMask.length) {
    new Cleave(pincodeMask, {      
      numericOnly: true,
      blocks: [3, 3]
    });
  }
});
