$(document).ready(function(){
	/*$('.home_popup').on('hidden.bs.modal', function (e) {
		$('body').addClass('modal-open');
	});*/
    $('#reset').click(function(){
        $("#funnel-selector input[type=checkbox]").prop('checked', false);
        $("#funnel-selector input[type=checkbox]").next().removeClass('lp-white');
        $("#lpkey_termsofuse,#lpkey_privacypolicy,#lpkey_licensinginformation,#lpkey_disclosures,#lpkey_contactus,#lpkey_aboutus,#lpkey_secfot,#lpkey,#lpkey_seo,#lpkey_thankyou,#lpkey_responder,#lpkey_maincontent,#lpkey_image,#lpkey_ada_accessibility,#lpkey_logo,#lpkey_background,#lpkey_notification,#lpkey_backgroundcolor,#lpkey_backgroundimage,#selectedfunnel,#funnel_select_count,#lpkey_pixels,#lpkey_recip").val('');
        $('.pop-up-funnel a').html('<i class="fa fa-cog"></i>'+'Select Funnel');
    });
    $('.is_include').change(function(e) {
        e.preventDefault();
        var _values = [];
        if ($(this).prop('checked') == false) {
            $('#funnel-selector input[type=checkbox]:not(:checked)').each(function (index, el){
                if($(el).attr('data-fkey'))
                _values.push($(el).attr('data-fkey'));
            });

            $('#'+$(this).data('field')).val('n');
        }else if($(this).prop('checked') == true){
            $('#funnel-selector input[type=checkbox]:checked').each(function (index, el){
                if($(el).attr('data-fkey'))
                _values.push($(el).attr('data-fkey'));
            });
            $('#'+$(this).data('field')).val('y');
        }
        _values = _values.join(',');
        console.log(_values);
        $("#lpkey_termsofuse,#lpkey_privacypolicy,#lpkey_licensinginformation,#lpkey_disclosures,#lpkey_contactus,#lpkey_aboutus,#lpkey_secfot,#lpkey,#lpkey_seo,#lpkey_thankyou,#lpkey_responder,#lpkey_maincontent,#lpkey_image,#lpkey_ada_accessibility,#lpkey_logo,#lpkey_background,#lpkey_notification,#lpkey_backgroundcolor,#lpkey_backgroundimage,#selectedfunnel,#lpkey_pixels,#lpkey_recip").val(_values);
    });

    $("#funnel-selector").find( ".lp-btn-cancel" ).click(function(e){
        $('#funnel-selector').attr("data-action", "cancel");
    })



    $('input:checkbox').change(function(){
        if($(this).is(":checked")) {
            $(this).next().addClass('lp-white');
        } else {
            //console.log($(this).parents(".funnel-group").find(".sub-group").is(":checked"));
            if($(this).parents(".funnel-group").find(".sub-group").is(":checked")){
                $(this).parents(".funnel-group").find(".sub-group").prop('checked', false);
                $(this).parents(".funnel-group").find(".sub-group").next().removeClass('lp-white');
            }
            $(this).next().removeClass('lp-white');
        }

        //Same Domain in multi-section:  If a domain is selected in website section then same domain should be selected in other section where ever it exists and vice versa
        var secElem = $(".domain_"+$(this).data('domainid'));
        if(secElem.length > 1){
            if($(this).is(":checked")) {
                secElem.prop('checked', true);
                secElem.next().addClass('lp-white');
            } else {
                secElem.prop('checked', false);
                secElem.next().removeClass('lp-white');
            }
        }
        //Same Domain in multi-section ENDS

        //////If any checkbox of sub-group is unchecked then unchecked the sub-group///
        var group = $(this).attr('class');
        var n = $('input:checkbox[class^="'+group+'"]:not(:checked)').length;
        if(n>0){
            $(":checkbox[id='"+group+"']").prop('checked', false);
            $(":checkbox[id='"+group+"']").next().removeClass('lp-white');
        }

        if($(this).attr('name') == "domains[]") {
            var _grp = $(this).parents(".funnel-group").attr("data-sub-group");
            if ($(this).parents(".funnel-group").find(".panel-collapse input:checkbox").length == $(this).parents(".funnel-group").find(".panel-collapse input:checkbox:checked").length) {
                $("#"+_grp+".sub-group").prop('checked', true);
            }else{
                $("#"+_grp+".sub-group").prop('checked', false);
            }
        }

        if($(this).attr('name') != "all") {
            if ($('.sub-group').length == $('.sub-group:checked').length) {
                $('#all-funnel-checkbox').prop('checked', true);
            } else {
                $('#all-funnel-checkbox').prop('checked', false);
            }
        }
    });
    $(".fs-sgrp").change(function(){
        var group = $(this).data("key");
        if($(this).is(":checked")) {
            $("#funnel-selector input[type=checkbox]").each(function(index,el) {
              if ($(el).hasClass(group)) {
                    $(el).prop('checked', true);
                    $(el).next().addClass('lp-white');
               }
            });
        } else {
            $("#funnel-selector input[type=checkbox]").each(function(index,el) {
              if ($(el).hasClass(group)) {
                    $(el).prop('checked', false);
                    $(el).next().removeClass('lp-white');
               }
            });
        }
    });
    $('.sub-group').change(function(){
        var group = $(this).data("key");
        if($(this).is(":checked")) {
            $("#funnel-selector input[type=checkbox]").each(function(index,el) {
              if ($(el).hasClass(group)) {
                    $(el).prop('checked', true);
                    $(el).next().addClass('lp-white');
               }
            });
        } else {
            $("#funnel-selector input[type=checkbox]").each(function(index,el) {
              if ($(el).hasClass(group)) {
                    $(el).prop('checked', false);
                    $(el).next().removeClass('lp-white');
               }
            });
        }
    });
    $('#all-funnel-checkbox').change(function(){
        if($(this).is(":checked")) {
            $('#funnel-selector input:checkbox').prop('checked', true);
            $('#funnel-selector input:checkbox').next().addClass('lp-white');
        }else{
            $('#funnel-selector input:checkbox').prop('checked', false);
            $('#funnel-selector input:checkbox').next().removeClass('lp-white')
            $('.pop-up-funnel a').html('<i class="fa fa-cog"></i>'+'Select Funnel');
        }

    });

});
$(window).on("load",function(){
    $(".funnel-scroll").mCustomScrollbar({
        theme:"dark",
        autoExpandScrollbar: true,
        mouseWheel:{ scrollAmount: 300 }
    });

});
function errormessage(textval){
    $("#alert-danger").find('span').html(textval);
    $("#alert-danger").fadeIn("slow");
    goToByScroll("alert-danger");
    return false;
}
