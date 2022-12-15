$(document).ready(function() {

    $('.select2js__linkpage-option').select2({
        minimumResultsForSearch: -1,
        width: '100%', // need to override the changed default
        dropdownParent: $('.select2js__linkpage-option-parent')
    }).on('change', function (e) {
        console.info($(this).val());
        var this_val = $(this).val();
        if(this_val == 'u') {
            $('.another-web').slideDown();
            $('.own-web').slideUp();
        }
        else {
            $('.another-web').slideUp();
            $('.own-web').slideDown();
        }
    });



    //$("#success-alert,#alert-danger").hide();
    $('.close').click(function() {
        $('.alert').hide();
    });
    $( "body" ).on( "change",".pptogbtn" , function() {
        var con_key=$(this).data('lpkeys');
      //  detailincludepage(con_key);
    });
    if($('#footereditor').length > 0){
        // CK editor
        CKEDITOR.replace( 'footereditor' );
    }
    mytoggledestination();

    $.validator.addMethod("cus_url", function (value, element) {
        return this.optional(element) || /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(value);
    }, "Please enter a valid url.");

    var valid_obj = $('#pricay-page').validate({
        rules: {
            theurltext: {
                required: true
            },
            otherurl: {
                required: true,
                cus_url: true
            }
        },
        messages: {
            theurltext: {
                required: "Please enter link text."
            },
            otherurl: {
                required: "Please enter your URL."
            }
        },
        debug: true,
        submitHandler: function () {
            console.info('submitted');
        }
    });
});
function mytoggledestination() {
   // debugger;
    var thelink = $('#linktype').val();
    if(thelink == 'u') {
        $('#theselection').val('u');
        $('#webmodal').hide();
        $('#webaddress').show();
    }
    else if (thelink == 'm') {
        $('#theselection').val('m');
        $('#webaddress').hide();
        $('#webmodal').show();
    }
    else {
        $(".lp-auto-responder .lp-pp-box").css("padding-bottom","10px");
        $('#webaddress').hide();
        $('#webmodal').hide();
    }
}
function detailincludepage(lpkeys) {
    var client_id = $('#client_id').val();
    var akeys = lpkeys.split("~");
    var vertical_id = akeys[0];
    var subvertical_id = akeys[1];
    var leadpop_id = akeys[2];
    var version_seq = akeys[3];
    var thelink =  akeys[4];
    var post =  "client_id=" + client_id + "&vertical_id=" + vertical_id +  "&subvertical_id=" + subvertical_id + "&leadpop_id=" + leadpop_id + "&version_seq=" + version_seq + "&thelink=" + thelink;
    $.ajax( {
        type : "POST",
        url : "/updatebottomlinks.php",
        data : post,
        success : function(d) {
        },
        cache : false,
        async : false
    });
}
function savebottomlinkmessage() {
    console.info("call");
    var error=false;

    //var html = oEditor.getData();
    var html = $('#footereditor').froalaEditor('html.get');
    var theurl = $('#theurl').val();
    switch ($('#linktype').val()){
        case 'u':
            if($('#theurltext').val() == ""){
                errormessage("Please enter Link Text.");
                error=true;
            }

            else if($('#theurl').val() == "" || ((theurl.toLowerCase().indexOf("http://") < 0) && (theurl.toLowerCase().indexOf("https://") < 0))){
                errormessage("Please enter a valid URL.");
                error=true;
            }
            break;
        case 'm':

            if($('#theurltext').val() == ""){
                errormessage("Please enter Link Text.");
                error=true;
            }else if(html==""){
                errormessage("Please enter the detail.");
                error=true;
            }
            break;
        default:
            errormessage("Choose your option and enter the appropriate data before saving.");
            error=true;
            break;
    }
    // if(error===false){
    //     $('#ffooter').submit();
    // }
}
function errormessage(textval){

    displayAlert('danger', textval);

    /*$("#alert-danger").find('p').text(textval);
    $("#alert-danger").fadeIn("slow");
    return false;*/
    /*$("#alert-danger").fadeTo(2000, 2000).slideUp(2000, function(){
        $("#alert-danger").slideUp(2000);
    });               */
    //return false;
}
