// $(".full").hover(function(){
//     $(this).css("background-color", "black");
//     }, function(){
//     $(this).css("background-color", "purple");
//   });
$('.stat').popover({ 
    boundary: 'window',
    trigger: 'focus'
 });
 let states = [
  "Alabama",
  "Alaska",
  "Arizona",
  "Arkansas",
  "California",
  "Colorado",
  "Connecticut",
  "Delaware",
  "Florida",
  "Georgia",
  "Hawaii",
  "Idaho",
  "Illnois",
  "Indiana",
  "Iowa",
  "Kansas",
  "Kentucky",
  "Louisiana",
  "Maine",
  "Maryland",
  "Massachusetts",
  "Michigan",
  "Minnesota",
  "Mississippi",
  "Missouri",
  "Montana",
  "Nebraska",
  "Nevada",
  "New Hampshire",
  "New Jersey",
  "New Mexico",
  "New York",
  "North Carolina",
  "North Dakota",
  "Ohio",
  "Oklahoma",
  "Oregon",
  "Pennsylvania",
  "Rhode Island",
  "South Carolina",
  "South Dakota",
  "Tennessee",
  "Texas",
  "Utah",
  "Vermont",
  "Virginia",
  "Washington",
  "West Virginia",
  "Wisconsin",
  "Wyoming"
  ];
  
  $('#form-autocomplete-4').mdbAutocomplete({
  data: states,
  dataColor: 'green',
  inputFocus: '2px solid green',
  inputBlur: '1px solid #ced4da',
  inputFocusShadow: '0 1px 0 0 #4285f4',
  inputBlurShadow: ''
  });
