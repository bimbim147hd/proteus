     function copyToClipboard(element) {
         var $temp = $("<input>");
         $("body").append($temp);
         $temp.val($(element).text()).select();
         document.execCommand("copy");
         $temp.remove();
         VC.preloader.show();
         VC.notify.show('success', 'Copied!',  5000);
     }
     $(document).ready(function() {


         //Close popup
         $('.close-pop').on('click', function(event) {
             event.preventDefault();
             $('.pop-up').removeClass('active'); //Hide pop up
         });

         $("#formEmail").validate({
             rules: {
                 email: {
                     required: true,
                     email: true
                 }
             },
             messages: {
                 email: {
                     required: "Please enter an email",
                     email: "The email format is not correct"
                 }
             }
         });
         $('.share-btns a:first-child').click(function() {
             $('#group-share').fadeToggle();

             return false;
         });
     });