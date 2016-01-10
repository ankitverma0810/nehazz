$('document').ready(function(){

    var siteName = '/nehazz';

	//for pagination in tables//
    jQuery("#table-1").dataTable({
        "sPaginationType": "bootstrap",
        "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "bStateSave": true
    });

    jQuery(".dataTables_wrapper select").select2({
        minimumResultsForSearch: -1
    });

    //for changing status//
    jQuery('.jquery_action_status').click( function(){
        var buttonId = jQuery(this).attr('id');
        var d = buttonId.split('_');
        var id = d[1];
        var controller= d[2];
        var status = jQuery(this).attr('rel');
        var setUrl = siteName+'/'+controller+'/setstatus/'+ id + '/'+ status;
        jQuery.ajax({
            type: "GET",
            url: setUrl,
            success: function(data) {
                if( data == 2 ) {
                    jQuery('#'+buttonId).attr('rel', 1);
                    jQuery('#'+buttonId).html('<i class="entypo-check"></i> Activate');
                    jQuery('#change_'+id+'_status').html('Not Active');
                    jQuery('#'+buttonId).removeClass('btn-danger');
                    jQuery('#'+buttonId).addClass('btn-success');
                } else if ( data == 1) {
                    jQuery('#'+buttonId).attr('rel', 2);
                    jQuery('#'+buttonId).html('<i class="entypo-cancel"></i> Deactivate');
                    jQuery('#change_'+id+'_status').html('Active');
                    jQuery('#'+buttonId).removeClass('btn-success');
                    jQuery('#'+buttonId).addClass('btn-danger');
                }
            }
        });
        return false;
    });
});