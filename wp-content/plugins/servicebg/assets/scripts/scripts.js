jQuery(document).ready(function($) {
     $('.like').on('click', function(e){
          e.preventDefault();

          let service_id = jQuery(this).attr('data-id');

          jQuery.ajax({
               type: 'post',
               dataType: 'json',
               url: my_ajax_object.ajax_url,
               data: {
                    action:'servicebg_service_upvote',
                    service_id: service_id,
               },
               success: function(msg){
                    console.log(msg);
               }
          });
     });
});