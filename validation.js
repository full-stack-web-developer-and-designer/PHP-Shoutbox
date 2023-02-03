'use strict';
jQuery(document).ready(function () {
jQuery("#shoutbox").on(function (e) {
    //e.preventDefault();
}).validate({
  //debug: true,
    submitHandler: function (_form) { 
        var user = $('#user').val();
        var message = $('#message').val();
        var date = getDate();
        var dataString = 'user=' + user + '&message=' + message + '&date=' + date;
        console.log(dataString);
        
        jQuery.ajax({
            url: "process.php",
            type: "post",
            data: dataString,
            cache: false,
            success: function (html) {
              console.log(html);
                jQuery('#shouts ul').prepend(html);
            }
      
        }); //Your code for AJAX Ends
        // Clear all data after submit
        var form_contact = document.getElementById('shoutbox').reset();
        return false;
    }, //submitHandler*/
   
    groups: {
      mygroup: "user message"
    },
    errorPlacement: function(error, element) {
      if (element.attr("name") == "user" || element.attr("name") == "message" ) {
        error.insertBefore(".error");
      } else {
        error.insertBefore(element);
      }
    },

}); // validate
$.extend($.validator.messages, {
    required: "Please fill in your name and message!"
});
}); // document.ready
// Format date like MySQL date
function getDate(){
  var date;
  date = new Date();
  date = date.getUTCFullYear() + '-' +
          ('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
          ('00' + date.getUTCDate()).slice(-2) + ' ' +
          ('00' + date.getUTCHours()).slice(-2) + ':' +
          ('00' + date.getUTCMinutes()).slice(-2) + ':' +
          ('00' + date.getUTCSeconds()).slice(-2);
  return date;
}
