window.selectItems = {
    'select2js-custom-size':[
        {
            id: 'custom',
            text: '<div class="options">Custom Size</div>',
            title: 'Custom Size'
        },
        {
            id: 'full',
            text: '<div class="options">Full Page</div>',
            title: 'Full Page'
        },
    ],

    'select2js__height-unit':[
        {
            id: 'height-pixel',
            text: '<div class="options">px</div>',
            title: 'Pixel'
        },
        {
            id: 'height-percantage',
            text: '<div class="options">%</div>',
            title: 'Precantage'
        },
    ],

    'select2js__width-unit':[
        {
            id: 'width-pixel',
            text: '<div class="options">px</div>',
            title: 'Pixel'
        },
        {
            id: 'width-percantage',
            text: '<div class="options">%</div>',
            title: 'Precantage'
        },
    ]
};


var iframe_page = {

    embed_select_list : [
        {selecter:".select2js-custom-size", parent:".select-custom-size-parent"},
        {selecter:".select2js__height-unit", parent:".select2js__height-unit-parent"},
        {selecter:".select2js__width-unit", parent:".select2js__width-unit-parent"},
    ],

    /*
    ** custom select loop
    **/
    allCustomSelect: function () {
        var selectlist = iframe_page.embed_select_list;
        for(var i = 0; i < selectlist.length; i++){
            iframe_page.initCustomSelect(selectlist[i].selecter,selectlist[i].parent);
        }
    },

    /*
    ** init custom select
    **/
    initCustomSelect: function (selecter,parent) {
        var amIclosing = false;
        var _selector = jQuery(selecter);
        var _parent = jQuery(parent);
        var selectorClass = selecter.replace(/[#.]/g,'');
        _selector.select2({
            data: selectItems[selectorClass],
            minimumResultsForSearch: -1,
            dropdownParent: jQuery(parent),
            width: '100%',
            templateResult: function (d) {
                return $(d.text);
            },
            templateSelection: function (d) {
                return $(d.text);
            }

            /*
            ** Triggered before the drop-down is opened.
            */
        }).on('select2:opening', function() {
            _parent.find('.select2-selection__rendered').css('opacity', '0');

            /*
            ** Triggered whenever the drop-down is opened.
            ** select2:opening is fired before this and can be prevented.
            */
        }).on('select2:open', function() {
            var _selectoptions = _parent.find('.select2-results__options');
            var _selectdropdown = _parent.find('.select2-dropdown');

            _selectoptions.css('pointer-events', 'none');

            setTimeout(function() {
                _selectoptions.css('pointer-events', 'auto');
            }, 300);

            _selectdropdown.hide();
            _selectdropdown.css({'display': 'block', 'opacity': '1', 'transform': 'scale(1, 1)'});
            _parent.find('.select2-selection__rendered').hide();
            lpUtilities.niceScroll();
            setTimeout(function () {
                _parent.find('.select2-dropdown .nicescroll-rails-vr').each(function () {
                    this.style.setProperty( 'opacity', '1', 'important' );
                    var getindex = _selector.find(':selected').index();
                    var defaultHeight = 44;
                    var scrolledArea = getindex * defaultHeight;
                    $(".select2-results__options").getNiceScroll(0).doScrollTop(scrolledArea);
                    this.style.setProperty( 'opacity', '1', 'important' );
                });
            }, 100);

            /*
            ** Triggered before the drop-down is closed.
            */
        }).on('select2:closing', function(e) {
            if(!amIclosing) {
                e.preventDefault();
                amIclosing = true;

                _parent.find('.select2-dropdown').attr('style', '');
                setTimeout(function () {
                    _selector.select2("close");
                }, 200);
            } else {
                amIclosing = false;
            }

            /*
            ** Triggered whenever the drop-down is closed.
            ** select2:closing is fired before this and can be prevented.
            */
        }).on('select2:close', function() {
            _parent.find('.select2-selection__rendered').show();
            _parent.find('.select2-selection__rendered').css('opacity', '1');
            _parent.find('.select2-results__options').css('pointer-events', 'none');
        });

        $('.select2js-custom-size').val("full").trigger('change');

        if (selectorClass == 'select2js-custom-size') {
            _selector.on('change', function () {
                if($(this).val() == 'full') {
                    $('.embed-setting__basic').find('.form-group').addClass('disabled');
                }
                if($(this).val() == 'custom') {
                    $('.embed-setting__basic').find('.form-group').removeClass('disabled');
                }
            });
        }
    },

    /*
      ** init Function
    **/

    init: function() {
        iframe_page.allCustomSelect();
        iframe_page.modal_callbacks();
    },
};

jQuery(document).ready(function() {
    iframe_page.init();
});

function copyToClipboard(element) {
    var myStr = $(element).text();
    var trimStr = $.trim(myStr);
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(trimStr).select();
    document.execCommand("copy");
    $temp.remove();
}
