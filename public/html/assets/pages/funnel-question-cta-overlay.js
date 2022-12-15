window.selectItems = {
    'question-cta-icon-type' :[
        {
            id:0,
            text:'<div class="select2_style"><span class="select2js-placeholder">Icon positioning:</span><span>Left Align</span></div>',
            title: 'Left Align'
        },
        {
            id:1,
            text:'<div class="select2_style"><span class="select2js-placeholder">Icon positioning:</span><span>Right Align</span></div>',
            title: 'Right Align'
        }
    ],

    'question-cta-message' :[
        {
            id:0,
            text:'<div class="select2_style"><span class="select2js-placeholder">Select message:</span><span>Default Message</span></div>',
            title:'Message'
        },
        {
            id:1,
            text:'<div class="select2_style"><span class="select2js-placeholder">Select message:</span><span>Default Message</span></div>',
            title:'Message'
        },
        {
            id:2,
            text:'<div class="select2_style"><span class="select2js-placeholder">Select message:</span><span>Default Message</span></div>',
            title:'Message'
        }
    ],
};

var question_cta_overlay = {

    overlay_select_list : [
        {selecter:".question-cta-icon-type", parent:".question-cta-input-icon-parent"},
        {selecter:".question-cta-message", parent:".question-cta-message-parent"},
    ],

    /*
    ** custom select loop
    **/

    allCustomSelect: function () {
        var selectlist = question_cta_overlay.overlay_select_list;
        for(var i = 0; i < selectlist.length; i++){
            question_cta_overlay.initCustomSelect(selectlist[i].selecter,selectlist[i].parent);
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
    },

    /*
    ** Add Class Click Function
    **/

    addclassclick: function () {
        jQuery(document).on('click' , '.panel-aside__head .back-ico', function(){
            jQuery('body').toggleClass('panel-aside_closed');
        });
    },

    /*
    ** Open Close Function
    **/

    openclose: function () {
        setTimeout(function(){
            jQuery('[data-handler]').click(function(){
                jQuery(this).closest('[data-parent]').toggleClass('active');
                jQuery(this).toggleClass('open');
                jQuery(this).closest('[data-parent]').find('[data-handler-slide]:first').slideToggle(function () {
                    jQuery('.panel-aside-wrap-overlay').mCustomScrollbar("scrollTo","bottom",{
                        scrollInertia: 500
                    });
                });
                jQuery(this).closest('[data-parent]').find('.form-control').focus();
            });
        }, 500);

        jQuery('[data-opener]').change(function () {
            if(this.checked){
                jQuery(this).closest('[data-parent]').find('[data-slide]').slideDown();
                jQuery(this).closest('[data-parent]').find('.fb-froala__init').froalaEditor('events.focus', true);
                jQuery(this).closest('[data-parent]').find('.classic-editor__wrapper').addClass('focus');
                jQuery(this).closest('[data-parent]').find('.form-control').focus();
            }
            else {
                jQuery(this).closest('[data-parent]').find('[data-slide]').slideUp();
                jQuery(this).closest('[data-parent]').find('.fb-froala__init').froalaEditor('events.focus', false);
                jQuery(this).closest('[data-parent]').find('.classic-editor__wrapper').removeClass('focus');
                jQuery(this).closest('[data-parent]').find('.form-control').blur();
            }
        });

        jQuery('[data-icon-opener]').change(function () {
            if(this.checked){
                jQuery(this).parents('[data-parent]').find('[data-icon-slide]').slideDown();
                jQuery('.cta-btn .icon-holder').show();
            }
            else {
                jQuery(this).parents('[data-parent]').find('[data-icon-slide]').slideUp();
                jQuery('.cta-btn .icon-holder').hide();
            }
        });

        jQuery('.last-selected').click(function(){
            jQuery('body').toggleClass('colorpicker-active');
        });

        jQuery('.overlay-active .actions-button__link_close-funnels').click(function (e) {
            e.preventDefault();
            jQuery('body').removeClass('overlay-active panel-aside_closed');
        });

        jQuery('.action_dresponsive .view-link').click(function(e){
            e.preventDefault();
            jQuery('.view-link').removeClass('active');
            jQuery(this).addClass('active');
            if(jQuery(this).hasClass('mobile-view-link')){
                jQuery('.funnel-iframe-holder').addClass('mobile-view-active');
            }
            else {
                jQuery('.funnel-iframe-holder').removeClass('mobile-view-active');
            }
        });
    },

    /*
   ** Custom scroll Function
   **/

    customscroll: function () {

        if(jQuery('.panel-aside-wrap-overlay').length > 0) {
            jQuery('.panel-aside-wrap-overlay').mCustomScrollbar({
                axis: "y",
                scrollInertia: 200,
            });
        }


        if(jQuery('.quick-scroll').length > 0) {
            jQuery('.quick-scroll').mCustomScrollbar({
                axis: "y",
            });
        }
    },

    /*
   ** Tool Tip Function
   **/

    tooltip: function () {
        jQuery('.el-tooltip').tooltipster({
            contentAsHTML:true
        });
    },

    /*
  ** select Icon Function
  **/

    selecticon: function () {

        var obj_fontawsome = {
            "plus": 'Plus',
            "arrow-thick-right": 'Forward',
            "forwad": 'Replay',
            "long-arrow": 'Next',
            "double-arrow": 'Refer',
            "check": 'Check',
            "dotted-check": 'Mark',
            "lock": 'Lock',
            "search": 'Search',
            "thumbs": 'Thumb',
            "start-rate": 'Star',
            "heart": 'Heart',
            "location": 'Location',
            "client": 'Client',
            "email": 'Email',
            "file-upload": 'Upload',
        };

        function fontAwsome() {
            jQuery('.icons-list').html('');
            jQuery.each(obj_fontawsome,function (index,value) {
                jQuery('.icons-list').append('<li><span class="icon-label"><span class="icon-wrap"><i class="ico-'+index+'"></i></span>' +
                    '<span class="text-icon-wrap"><span class="icon-title">Icon:</span><span class="text-icon">'+value+'</span></span></span></li>');
            });
        }
        fontAwsome();

        var $fontAsome;

        jQuery('.select-icon-opener').click(function () {
            jQuery(this).addClass('icon-popup-active');
            var get_class = jQuery(this).find('.icon-wrap').children().attr('class');
            console.log(get_class);
            var icon_path = jQuery('.icons-list').find('.' + get_class);
            jQuery(icon_path).parents('.icon-label').addClass('active');
        });

        jQuery('.btn-cancel-icon').click(function () {
            jQuery('.icons-list li > span').removeClass('active');
        });

        jQuery('#select-icon-modal').on('hidden.bs.modal', function () {
            jQuery('.select-icon-opener').removeClass('icon-popup-active');
            //jQuery('.icons-list li > span').removeClass('active');
        });

        jQuery('body').on('click','.icons-list li > span', function(){
            var _self = jQuery(this);
            jQuery('.icons-list li > span').removeClass('active');
            _self.addClass('active');
            $fontAsome = _self.html();
            if(jQuery('.icons-list li > span').hasClass('active')){
                _self.parents('.select-icon-modal').find('.button-primary').removeAttr('disabled');
            }
        });

        jQuery('.btn-add-icon').click(function () {
            jQuery('.icon-popup-active').html('');
            jQuery('.icon-popup-active').html($fontAsome);
            jQuery('.cta-btn .icon-holder').html($fontAsome);
            jQuery('.select-icon-opener').removeClass('icon-popup-active');
            jQuery('.icons-list li > span').removeClass('active');
            jQuery('#select-icon-modal').modal('toggle');
        });
    },

    /*
   ** Range bar Function
   **/

    rangebar: function () {
        jQuery('#question-cta-font-slider').bootstrapSlider({
            formatter: function(value) {
                jQuery('.question-cta-font').val(value);
                jQuery(".cta-btn").css({
                    'font-size': value,
                });
                return   value +'px';
            },
            min: 8,
            max: 40,
            value: jQuery('.question-cta-font').val(),
            tooltip: 'always',
            tooltip_position: 'bottom'
        });

        jQuery('#question-cta-icon-size-slider').bootstrapSlider({
            formatter: function(value) {
                jQuery('.question-cta-icon-size').val(value);
                jQuery(".cta-btn .icon").css({
                    'font-size': value,
                });
                return   value +'px';
            },
            min: 10,
            max: 28,
            value: jQuery('.question-cta-icon-size').val(),
            tooltip: 'always',
            tooltip_position: 'bottom'
        });

        jQuery('.size-range-bar-slide').bootstrapSlider({
            formatter: function(value) {
                jQuery('.size-range-bar-val').val(value);
                return   value +'%';
            },
            min: 75,
            max: 100,
            value: jQuery('.size-range-bar-val').val(),
            tooltip: 'always',
            tooltip_position: 'top',
        }).on("slide", function(slideEvt) {
            jQuery('.funnel-iframe-holder').css('transform','scale('+slideEvt.value/100+')');
        });
    },

    /*
     ** Color Picker Function
    **/

    color_picker: function () {

        $('#question-cta-clr-icon').click(function () {
            var name = ".question-cta-icon-clr";
            var color_box_name = $(name);
            var get_color = $(this).find('.last-selected__code').text();
            lpUtilities.custom_color_picker.call(this,name);
            lpUtilities.set_colorpicker_box(color_box_name,get_color);
        });

        $('#question-cta-icon-clr').ColorPicker({
            color: "#ffffff",
            flat: true,
            opacity:true,
            width: 203,
            height: 144,
            outer_height: 162,
            outer_width: 281,
            onShow: function (colpkr) {
                $(colpkr).fadeIn(100);
                return false;
            },
            onHide: function (colpkr) {
                $(colpkr).fadeOut(100);
                return false;
            },
            onChange: function (hsb, hex, rgb, rgba) {
                var rgba_fn = 'rgba('+rgba.r+', '+rgba.g+', '+rgba.b+', '+rgba.a+')';
                $(".question-cta-icon-clr .color-box__r .color-box__rgb").val(rgb.r);
                $(".question-cta-icon-clr .color-box__g .color-box__rgb").val(rgb.g);
                $(".question-cta-icon-clr .color-box__b .color-box__rgb").val(rgb.b);
                $(".question-cta-icon-clr .color-box__hex-block").val('#'+hex);
                $('#question-cta-clr-icon').find('.last-selected__box').css('backgroundColor', rgba_fn);
                $('#question-cta-clr-icon').find('.last-selected__code').text('#'+hex);
                $('.cta-btn .icon').css('color', rgba_fn);
            }
        });
    },

    /*
     ** Outside click Function
     **/

    outsideclick: function () {
        jQuery(document).click(function(e) {
            var target = e.target;

            if (jQuery("body").hasClass('colorpicker-active')) {
                if (jQuery(target).parents('.color-box__panel-wrapper').length > 0 || jQuery(target).hasClass('color-box__panel-wrapper')) {
                }
                else {
                    jQuery('body').removeClass('colorpicker-active');
                }
            }

            if(jQuery(".client-setting__quick").hasClass('quick-active')) {
                if (jQuery(target).parents('.client-setting__quick').length > 0) {
                }
                else {
                    jQuery('.quick-dropdown').slideUp(400, function () {
                        jQuery('.client-setting__quick').removeClass('quick-active');
                    });
                }
            }

            if (jQuery(".classic-editor__wrapper").hasClass('focus')) {
                if (jQuery(target).parents('.classic-editor__wrapper').length > 0) {
                }
                else {
                    jQuery('.classic-editor__wrapper').removeClass('focus');
                }
            }
        });
    },

    //*
    // ** color picker dropdown
    // *

    color_picker_dropdown: function () {
        $('.color-picker-options').select2({
            width: '100%',
            minimumResultsForSearch: -1,
        });
        $('.color-picker-options').on('change', function () {
            var $this = $(this).val();
            if($this == 1){
                lpUtilities.custom_color_pos(pos_top, $elm, 529, rtl);
                $('.color-box__panel-wrapper.desc-message-clr').offset({top:pos_top - color_picker_block_height + 2, left: rtl });
                $(color_picker_elm).parents().find('.color-pull-block').hide();
                $(color_picker_elm).parents().find('.color-picker-block').show();
            }else {
                lpUtilities.custom_color_pos(pos_top, $elm, 254, rtl);
                $(color_picker_elm).parents().find('.color-picker-block').hide();
                $(color_picker_elm).parents().find('.color-pull-block').show();
            }
        });
    },

    /*
    * Quick Access Menu Function
    * */

    quick_access: function() {
        jQuery('.client-setting__opener').click(function (e) {
            e.preventDefault();
            if(jQuery(this).parents('.client-setting__quick').hasClass('quick-active')) {
                jQuery(this).parents('.client-setting__quick').find('.quick-dropdown').attr('style', '');
                jQuery(this).parents('.client-setting__quick').removeClass('quick-active');
            } else {
                jQuery(this).parents('.client-setting__quick').addClass('quick-active');
                jQuery(this).parents('.client-setting__quick').find('.quick-dropdown').css({'display': 'block', 'opacity': '1', 'transform': 'scaleX(1) scaleY(1)'});
            }
        });
    },

    /*
    * Outside hover close dropdown
    * */
    outside_hover: function () {
        jQuery('.client-setting__quick').mouseleave(function() {
            jQuery(this).find('.quick-dropdown').attr('style', '');
            jQuery(this).removeClass('quick-active');
        });
    },

    /*
    * Farola Editor Funcation
    * */

    farola_editor: function () {
        var fontSize = [];
        for(var i = 8 ; i <=72 ; i++){
            fontSize.push(i);
        }
        var font_object={"ABeeZee": 'ABeeZee',
            "Abel": 'Abel',
            "Abhaya Libre": 'Abhaya Libre',
            "Abril Fatface": 'Abril Fatface',
            "Aclonica": 'Aclonica',
            "Acme": 'Acme',
            "Actor": 'Actor',
            "Adamina": 'Adamina',
            "Advent Pro": 'Advent Pro',
            "Aguafina Script": 'Aguafina Script',
            "Akronim": 'Akronim',
            "Aladin": 'Aladin',
            "Aldrich": 'Aldrich',
            "Alef": 'Alef',
            "Alegreya": 'Alegreya',
            "Alegreya SC": 'Alegreya SC',
            "Alegreya Sans": 'Alegreya Sans',
            "Alegreya Sans SC": 'Alegreya Sans SC',
            "Aleo": 'Aleo',
            "Alex Brush": 'Alex Brush',
            "Alfa Slab One": 'Alfa Slab One',
            "Alice": 'Alice',
            "Alike": 'Alike',
            "Alike Angular": 'Alike Angular',
            "Allan": 'Allan',
            "Allerta": 'Allerta',
            "Allerta Stencil": 'Allerta Stencil',
            "Allura": 'Allura',
            "Almendra": 'Almendra',
            "Almendra Display": 'Almendra Display',
            "Almendra SC": 'Almendra SC',
            "Amarante": 'Amarante',
            "Amaranth": 'Amaranth',
            "Amatic SC": 'Amatic SC',
            "Amethysta": 'Amethysta',
            "Amiko": 'Amiko',
            "Amiri": 'Amiri',
            "Amita": 'Amita',
            "Anaheim": 'Anaheim',
            "Andada": 'Andada',
            "Andika": 'Andika',
            "Angkor": 'Angkor',
            "Annie Use Your Telescope": 'Annie Use Your Telescope',
            "Anonymous Pro": 'Anonymous Pro',
            "Antic": 'Antic',
            "Antic Didone": 'Antic Didone',
            "Antic Slab": 'Antic Slab',
            "Anton": 'Anton',
            "Arapey": 'Arapey',
            "Arbutus": 'Arbutus',
            "Arbutus Slab": 'Arbutus Slab',
            "Architects Daughter": 'Architects Daughter',
            "Archivo": 'Archivo',
            "Archivo Black": 'Archivo Black',
            "Archivo Narrow": 'Archivo Narrow',
            "Aref Ruqaa": 'Aref Ruqaa',
            "Arima Madurai": 'Arima Madurai',
            "Arimo": 'Arimo',
            "Arizonia": 'Arizonia',
            "Armata": 'Armata',
            "Arsenal": 'Arsenal',
            "Artifika": 'Artifika',
            "Arvo": 'Arvo',
            "Arya": 'Arya',
            "Asap": 'Asap',
            "Asap Condensed": 'Asap Condensed',
            "Asar": 'Asar',
            "Asset": 'Asset',
            "Assistant": 'Assistant',
            "Astloch": 'Astloch',
            "Asul": 'Asul',
            "Athiti": 'Athiti',
            "Atma": 'Atma',
            "Atomic Age": 'Atomic Age',
            "Aubrey": 'Aubrey',
            "Audiowide": 'Audiowide',
            "Autour One": 'Autour One',
            "Average": 'Average',
            "Average Sans": 'Average Sans',
            "Averia Gruesa Libre": 'Averia Gruesa Libre',
            "Averia Libre": 'Averia Libre',
            "Averia Sans Libre": 'Averia Sans Libre',
            "Averia Serif Libre": 'Averia Serif Libre',
            "B612": 'B612',
            "B612 Mono": 'B612 Mono',
            "Bad Script": 'Bad Script',
            "Bahiana": 'Bahiana',
            "Bai Jamjuree": 'Bai Jamjuree',
            "Baloo": 'Baloo',
            "Baloo Bhai": 'Baloo Bhai',
            "Baloo Bhaijaan": 'Baloo Bhaijaan',
            "Baloo Bhaina": 'Baloo Bhaina',
            "Baloo Chettan": 'Baloo Chettan',
            "Baloo Da": 'Baloo Da',
            "Baloo Paaji": 'Baloo Paaji',
            "Baloo Tamma": 'Baloo Tamma',
            "Baloo Tammudu": 'Baloo Tammudu',
            "Baloo Thambi": 'Baloo Thambi',
            "Balthazar": 'Balthazar',
            "Bangers": 'Bangers',
            "Barlow": 'Barlow',
            "Barlow Condensed": 'Barlow Condensed',
            "Barlow Semi Condensed": 'Barlow Semi Condensed',
            "Barrio": 'Barrio',
            "Basic": 'Basic',
            "Battambang": 'Battambang',
            "Baumans": 'Baumans',
            "Bayon": 'Bayon',
            "Belgrano": 'Belgrano',
            "Bellefair": 'Bellefair',
            "Belleza": 'Belleza',
            "BenchNine": 'BenchNine',
            "Bentham": 'Bentham',
            "Berkshire Swash": 'Berkshire Swash',
            "Bevan": 'Bevan',
            "Bigelow Rules": 'Bigelow Rules',
            "Bigshot One": 'Bigshot One',
            "Bilbo": 'Bilbo',
            "Bilbo Swash Caps": 'Bilbo Swash Caps',
            "BioRhyme": 'BioRhyme',
            "BioRhyme Expanded": 'BioRhyme Expanded',
            "Biryani": 'Biryani',
            "Bitter": 'Bitter',
            "Black And White Picture": 'Black And White Picture',
            "Black Han Sans": 'Black Han Sans',
            "Black Ops One": 'Black Ops One',
            "Bokor": 'Bokor',
            "Bonbon": 'Bonbon',
            "Boogaloo": 'Boogaloo',
            "Bowlby One": 'Bowlby One',
            "Bowlby One SC": 'Bowlby One SC',
            "Brawler": 'Brawler',
            "Bree Serif": 'Bree Serif',
            "Bubblegum Sans": 'Bubblegum Sans',
            "Bubbler One": 'Bubbler One',
            "Buda": 'Buda',
            "Buenard": 'Buenard',
            "Bungee": 'Bungee',
            "Bungee Hairline": 'Bungee Hairline',
            "Bungee Inline": 'Bungee Inline',
            "Bungee Outline": 'Bungee Outline',
            "Bungee Shade": 'Bungee Shade',
            "Butcherman": 'Butcherman',
            "Butterfly Kids": 'Butterfly Kids',
            "Cabin": 'Cabin',
            "Cabin Condensed": 'Cabin Condensed',
            "Cabin Sketch": 'Cabin Sketch',
            "Caesar Dressing": 'Caesar Dressing',
            "Cagliostro": 'Cagliostro',
            "Cairo": 'Cairo',
            "Calligraffitti": 'Calligraffitti',
            "Cambay": 'Cambay',
            "Cambo": 'Cambo',
            "Candal": 'Candal',
            "Cantarell": 'Cantarell',
            "Cantata One": 'Cantata One',
            "Cantora One": 'Cantora One',
            "Capriola": 'Capriola',
            "Cardo": 'Cardo',
            "Carme": 'Carme',
            "Carrois Gothic": 'Carrois Gothic',
            "Carrois Gothic SC": 'Carrois Gothic SC',
            "Carter One": 'Carter One',
            "Catamaran": 'Catamaran',
            "Caudex": 'Caudex',
            "Caveat": 'Caveat',
            "Caveat Brush": 'Caveat Brush',
            "Cedarville Cursive": 'Cedarville Cursive',
            "Ceviche One": 'Ceviche One',
            "Chakra Petch": 'Chakra Petch',
            "Changa": 'Changa',
            "Changa One": 'Changa One',
            "Chango": 'Chango',
            "Charm": 'Charm',
            "Charmonman": 'Charmonman',
            "Chathura": 'Chathura',
            "Chau Philomene One": 'Chau Philomene One',
            "Chela One": 'Chela One',
            "Chelsea Market": 'Chelsea Market',
            "Chenla": 'Chenla',
            "Cherry Cream Soda": 'Cherry Cream Soda',
            "Cherry Swash": 'Cherry Swash',
            "Chewy": 'Chewy',
            "Chicle": 'Chicle',
            "Chivo": 'Chivo',
            "Chonburi": 'Chonburi',
            "Cinzel": 'Cinzel',
            "Cinzel Decorative": 'Cinzel Decorative',
            "Clicker Script": 'Clicker Script',
            "Coda": 'Coda',
            "Coda Caption": 'Coda Caption',
            "Codystar": 'Codystar',
            "Coiny": 'Coiny',
            "Combo": 'Combo',
            "Comfortaa": 'Comfortaa',
            "Coming Soon": 'Coming Soon',
            "Concert One": 'Concert One',
            "Condiment": 'Condiment',
            "Content": 'Content',
            "Contrail One": 'Contrail One',
            "Convergence": 'Convergence',
            "Cookie": 'Cookie',
            "Copse": 'Copse',
            "Corben": 'Corben',
            "Cormorant": 'Cormorant',
            "Cormorant Garamond": 'Cormorant Garamond',
            "Cormorant Infant": 'Cormorant Infant',
            "Cormorant SC": 'Cormorant SC',
            "Cormorant Unicase": 'Cormorant Unicase',
            "Cormorant Upright": 'Cormorant Upright',
            "Courgette": 'Courgette',
            "Cousine": 'Cousine',
            "Coustard": 'Coustard',
            "Covered By Your Grace": 'Covered By Your Grace',
            "Crafty Girls": 'Crafty Girls',
            "Creepster": 'Creepster',
            "Crete Round": 'Crete Round',
            "Crimson Text": 'Crimson Text',
            "Croissant One": 'Croissant One',
            "Crushed": 'Crushed',
            "Cuprum": 'Cuprum',
            "Cute Font": 'Cute Font',
            "Cutive": 'Cutive',
            "Cutive Mono": 'Cutive Mono',
            "Damion": 'Damion',
            "Dancing Script": 'Dancing Script',
            "Dangrek": 'Dangrek',
            "David Libre": 'David Libre',
            "Dawning of a New Day": 'Dawning of a New Day',
            "Days One": 'Days One',
            "Dekko": 'Dekko',
            "Delius": 'Delius',
            "Delius Swash Caps": 'Delius Swash Caps',
            "Delius Unicase": 'Delius Unicase',
            "Della Respira": 'Della Respira',
            "Denk One": 'Denk One',
            "Devonshire": 'Devonshire',
            "Dhurjati": 'Dhurjati',
            "Didact Gothic": 'Didact Gothic',
            "Diplomata": 'Diplomata',
            "Diplomata SC": 'Diplomata SC',
            "Do Hyeon": 'Do Hyeon',
            "Dokdo": 'Dokdo',
            "Domine": 'Domine',
            "Donegal One": 'Donegal One',
            "Doppio One": 'Doppio One',
            "Dorsa": 'Dorsa',
            "Dosis": 'Dosis',
            "Dr Sugiyama": 'Dr Sugiyama',
            "Duru Sans": 'Duru Sans',
            "Dynalight": 'Dynalight',
            "EB Garamond": 'EB Garamond',
            "Eagle Lake": 'Eagle Lake',
            "East Sea Dokdo": 'East Sea Dokdo',
            "Eater": 'Eater',
            "Economica": 'Economica',
            "Eczar": 'Eczar',
            "El Messiri": 'El Messiri',
            "Electrolize": 'Electrolize',
            "Elsie": 'Elsie',
            "Elsie Swash Caps": 'Elsie Swash Caps',
            "Emblema One": 'Emblema One',
            "Emilys Candy": 'Emilys Candy',
            "Encode Sans": 'Encode Sans',
            "Encode Sans Condensed": 'Encode Sans Condensed',
            "Encode Sans Expanded": 'Encode Sans Expanded',
            "Encode Sans Semi Condensed": 'Encode Sans Semi Condensed',
            "Encode Sans Semi Expanded": 'Encode Sans Semi Expanded',
            "Engagement": 'Engagement',
            "Englebert": 'Englebert',
            "Enriqueta": 'Enriqueta',
            "Erica One": 'Erica One',
            "Esteban": 'Esteban',
            "Euphoria Script": 'Euphoria Script',
            "Ewert": 'Ewert',
            "Exo": 'Exo',
            "Exo 2": 'Exo 2',
            "Expletus Sans": 'Expletus Sans',
            "Fahkwang": 'Fahkwang',
            "Fanwood Text": 'Fanwood Text',
            "Farsan": 'Farsan',
            "Fascinate": 'Fascinate',
            "Fascinate Inline": 'Fascinate Inline',
            "Faster One": 'Faster One',
            "Fasthand": 'Fasthand',
            "Fauna One": 'Fauna One',
            "Faustina": 'Faustina',
            "Federant": 'Federant',
            "Federo": 'Federo',
            "Felipa": 'Felipa',
            "Fenix": 'Fenix',
            "Finger Paint": 'Finger Paint',
            "Fira Mono": 'Fira Mono',
            "Fira Sans": 'Fira Sans',
            "Fira Sans Condensed": 'Fira Sans Condensed',
            "Fira Sans Extra Condensed": 'Fira Sans Extra Condensed',
            "Fjalla One": 'Fjalla One',
            "Fjord One": 'Fjord One',
            "Flamenco": 'Flamenco',
            "Flavors": 'Flavors',
            "Fondamento": 'Fondamento',
            "Fontdiner Swanky": 'Fontdiner Swanky',
            "Forum": 'Forum',
            "Francois One": 'Francois One',
            "Frank Ruhl Libre": 'Frank Ruhl Libre',
            "Freckle Face": 'Freckle Face',
            "Fredericka the Great": 'Fredericka the Great',
            "Fredoka One": 'Fredoka One',
            "Freehand": 'Freehand',
            "Fresca": 'Fresca',
            "Frijole": 'Frijole',
            "Fruktur": 'Fruktur',
            "Fugaz One": 'Fugaz One',
            "GFS Didot": 'GFS Didot',
            "GFS Neohellenic": 'GFS Neohellenic',
            "Gabriela": 'Gabriela',
            "Gaegu": 'Gaegu',
            "Gafata": 'Gafata',
            "Galada": 'Galada',
            "Galdeano": 'Galdeano',
            "Galindo": 'Galindo',
            "Gamja Flower": 'Gamja Flower',
            "Gentium Basic": 'Gentium Basic',
            "Gentium Book Basic": 'Gentium Book Basic',
            "Geo": 'Geo',
            "Geostar": 'Geostar',
            "Geostar Fill": 'Geostar Fill',
            "Germania One": 'Germania One',
            "Gidugu": 'Gidugu',
            "Gilda Display": 'Gilda Display',
            "Give You Glory": 'Give You Glory',
            "Glass Antiqua": 'Glass Antiqua',
            "Glegoo": 'Glegoo',
            "Gloria Hallelujah": 'Gloria Hallelujah',
            "Goblin One": 'Goblin One',
            "Gochi Hand": 'Gochi Hand',
            "Gorditas": 'Gorditas',
            "Gothic A1": 'Gothic A1',
            "Goudy Bookletter 1911": 'Goudy Bookletter 1911',
            "Graduate": 'Graduate',
            "Grand Hotel": 'Grand Hotel',
            "Gravitas One": 'Gravitas One',
            "Great Vibes": 'Great Vibes',
            "Griffy": 'Griffy',
            "Gruppo": 'Gruppo',
            "Gudea": 'Gudea',
            "Gugi": 'Gugi',
            "Gurajada": 'Gurajada',
            "Habibi": 'Habibi',
            "Halant": 'Halant',
            "Hammersmith One": 'Hammersmith One',
            "Hanalei": 'Hanalei',
            "Hanalei Fill": 'Hanalei Fill',
            "Handlee": 'Handlee',
            "Hanuman": 'Hanuman',
            "Happy Monkey": 'Happy Monkey',
            "Harmattan": 'Harmattan',
            "Headland One": 'Headland One',
            "Heebo": 'Heebo',
            "Henny Penny": 'Henny Penny',
            "Herr Von Muellerhoff": 'Herr Von Muellerhoff',
            "Hi Melody": 'Hi Melody',
            "Hind": 'Hind',
            "Hind Guntur": 'Hind Guntur',
            "Hind Madurai": 'Hind Madurai',
            "Hind Siliguri": 'Hind Siliguri',
            "Hind Vadodara": 'Hind Vadodara',
            "Holtwood One SC": 'Holtwood One SC',
            "Homemade Apple": 'Homemade Apple',
            "Homenaje": 'Homenaje',
            "IBM Plex Mono": 'IBM Plex Mono',
            "IBM Plex Sans": 'IBM Plex Sans',
            "IBM Plex Sans Condensed": 'IBM Plex Sans Condensed',
            "IBM Plex Serif": 'IBM Plex Serif',
            "IM Fell DW Pica": 'IM Fell DW Pica',
            "IM Fell DW Pica SC": 'IM Fell DW Pica SC',
            "IM Fell Double Pica": 'IM Fell Double Pica',
            "IM Fell Double Pica SC": 'IM Fell Double Pica SC',
            "IM Fell English": 'IM Fell English',
            "IM Fell English SC": 'IM Fell English SC',
            "IM Fell French Canon": 'IM Fell French Canon',
            "IM Fell French Canon SC": 'IM Fell French Canon SC',
            "IM Fell Great Primer": 'IM Fell Great Primer',
            "IM Fell Great Primer SC": 'IM Fell Great Primer SC',
            "Iceberg": 'Iceberg',
            "Iceland": 'Iceland',
            "Imprima": 'Imprima',
            "Inconsolata": 'Inconsolata',
            "Inder": 'Inder',
            "Indie Flower": 'Indie Flower',
            "Inika": 'Inika',
            "Inknut Antiqua": 'Inknut Antiqua',
            "Irish Grover": 'Irish Grover',
            "Istok Web": 'Istok Web',
            "Italiana": 'Italiana',
            "Italianno": 'Italianno',
            "Itim": 'Itim',
            "Jacques Francois": 'Jacques Francois',
            "Jacques Francois Shadow": 'Jacques Francois Shadow',
            "Jaldi": 'Jaldi',
            "Jim Nightshade": 'Jim Nightshade',
            "Jockey One": 'Jockey One',
            "Jolly Lodger": 'Jolly Lodger',
            "Jomhuria": 'Jomhuria',
            "Josefin Sans": 'Josefin Sans',
            "Josefin Slab": 'Josefin Slab',
            "Joti One": 'Joti One',
            "Jua": 'Jua',
            "Judson": 'Judson',
            "Julee": 'Julee',
            "Julius Sans One": 'Julius Sans One',
            "Junge": 'Junge',
            "Jura": 'Jura',
            "Just Another Hand": 'Just Another Hand',
            "Just Me Again Down Here": 'Just Me Again Down Here',
            "K2D": 'K2D',
            "Kadwa": 'Kadwa',
            "Kalam": 'Kalam',
            "Kameron": 'Kameron',
            "Kanit": 'Kanit',
            "Kantumruy": 'Kantumruy',
            "Karla": 'Karla',
            "Karma": 'Karma',
            "Katibeh": 'Katibeh',
            "Kaushan Script": 'Kaushan Script',
            "Kavivanar": 'Kavivanar',
            "Kavoon": 'Kavoon',
            "Kdam Thmor": 'Kdam Thmor',
            "Keania One": 'Keania One',
            "Kelly Slab": 'Kelly Slab',
            "Kenia": 'Kenia',
            "Khand": 'Khand',
            "Khmer": 'Khmer',
            "Khula": 'Khula',
            "Kirang Haerang": 'Kirang Haerang',
            "Kite One": 'Kite One',
            "Knewave": 'Knewave',
            "KoHo": 'KoHo',
            "Kodchasan": 'Kodchasan',
            "Kosugi": 'Kosugi',
            "Kosugi Maru": 'Kosugi Maru',
            "Kotta One": 'Kotta One',
            "Koulen": 'Koulen',
            "Kranky": 'Kranky',
            "Kreon": 'Kreon',
            "Kristi": 'Kristi',
            "Krona One": 'Krona One',
            "Krub": 'Krub',
            "Kumar One": 'Kumar One',
            "Kumar One Outline": 'Kumar One Outline',
            "Kurale": 'Kurale',
            "La Belle Aurore": 'La Belle Aurore',
            "Laila": 'Laila',
            "Lakki Reddy": 'Lakki Reddy',
            "Lalezar": 'Lalezar',
            "Lancelot": 'Lancelot',
            "Lateef": 'Lateef',
            "Lato": 'Lato',
            "League Script": 'League Script',
            "Leckerli One": 'Leckerli One',
            "Ledger": 'Ledger',
            "Lekton": 'Lekton',
            "Lemon": 'Lemon',
            "Lemonada": 'Lemonada',
            "Libre Barcode 39": 'Libre Barcode 39',
            "Libre Barcode 39 Extended": 'Libre Barcode 39 Extended',
            "Libre Barcode 39 Extended Text": 'Libre Barcode 39 Extended Text',
            "Libre Barcode 39 Text": 'Libre Barcode 39 Text',
            "Libre Barcode 128": 'Libre Barcode 128',
            "Libre Barcode 128 Text": 'Libre Barcode 128 Text',
            "Libre Baskerville": 'Libre Baskerville',
            "Libre Franklin": 'Libre Franklin',
            "Life Savers": 'Life Savers',
            "Lilita One": 'Lilita One',
            "Lily Script One": 'Lily Script One',
            "Limelight": 'Limelight',
            "Linden Hill": 'Linden Hill',
            "Lobster": 'Lobster',
            "Lobster Two": 'Lobster Two',
            "Londrina Outline": 'Londrina Outline',
            "Londrina Shadow": 'Londrina Shadow',
            "Londrina Sketch": 'Londrina Sketch',
            "Londrina Solid": 'Londrina Solid',
            "Lora": 'Lora',
            "Love Ya Like A Sister": 'Love Ya Like A Sister',
            "Loved by the King": 'Loved by the King',
            "Lovers Quarrel": 'Lovers Quarrel',
            "Luckiest Guy": 'Luckiest Guy',
            "Lusitana": 'Lusitana',
            "Lustria": 'Lustria',
            "M PLUS 1p": 'M PLUS 1p',
            "M PLUS Rounded 1c": 'M PLUS Rounded 1c',
            "Macondo": 'Macondo',
            "Macondo Swash Caps": 'Macondo Swash Caps',
            "Mada": 'Mada',
            "Magra": 'Magra',
            "Maiden Orange": 'Maiden Orange',
            "Maitree": 'Maitree',
            "Major Mono Display": 'Major Mono Display',
            "Mako": 'Mako',
            "Mali": 'Mali',
            "Mallanna": 'Mallanna',
            "Mandali": 'Mandali',
            "Manuale": 'Manuale',
            "Marcellus": 'Marcellus',
            "Marcellus SC": 'Marcellus SC',
            "Marck Script": 'Marck Script',
            "Margarine": 'Margarine',
            "Markazi Text": 'Markazi Text',
            "Marko One": 'Marko One',
            "Marmelad": 'Marmelad',
            "Martel": 'Martel',
            "Martel Sans": 'Martel Sans',
            "Marvel": 'Marvel',
            "Mate": 'Mate',
            "Mate SC": 'Mate SC',
            "Maven Pro": 'Maven Pro',
            "McLaren": 'McLaren',
            "Meddon": 'Meddon',
            "MedievalSharp": 'MedievalSharp',
            "Medula One": 'Medula One',
            "Meera Inimai": 'Meera Inimai',
            "Megrim": 'Megrim',
            "Meie Script": 'Meie Script',
            "Merienda": 'Merienda',
            "Merienda One": 'Merienda One',
            "Merriweather": 'Merriweather',
            "Merriweather Sans": 'Merriweather Sans',
            "Metal": 'Metal',
            "Metal Mania": 'Metal Mania',
            "Metamorphous": 'Metamorphous',
            "Metrophobic": 'Metrophobic',
            "Michroma": 'Michroma',
            "Milonga": 'Milonga',
            "Miltonian": 'Miltonian',
            "Miltonian Tattoo": 'Miltonian Tattoo',
            "Mina": 'Mina',
            "Miniver": 'Miniver',
            "Miriam Libre": 'Miriam Libre',
            "Mirza": 'Mirza',
            "Miss Fajardose": 'Miss Fajardose',
            "Mitr": 'Mitr',
            "Modak": 'Modak',
            "Modern Antiqua": 'Modern Antiqua',
            "Mogra": 'Mogra',
            "Molengo": 'Molengo',
            "Molle": 'Molle',
            "Monda": 'Monda',
            "Monofett": 'Monofett',
            "Monoton": 'Monoton',
            "Monsieur La Doulaise": 'Monsieur La Doulaise',
            "Montaga": 'Montaga',
            "Montez": 'Montez',
            "Montserrat": 'Montserrat',
            "Montserrat Alternates": 'Montserrat Alternates',
            "Montserrat Subrayada": 'Montserrat Subrayada',
            "Moul": 'Moul',
            "Moulpali": 'Moulpali',
            "Mountains of Christmas": 'Mountains of Christmas',
            "Mouse Memoirs": 'Mouse Memoirs',
            "Mr Bedfort": 'Mr Bedfort',
            "Mr Dafoe": 'Mr Dafoe',
            "Mr De Haviland": 'Mr De Haviland',
            "Mrs Saint Delafield": 'Mrs Saint Delafield',
            "Mrs Sheppards": 'Mrs Sheppards',
            "Mukta": 'Mukta',
            "Mukta Mahee": 'Mukta Mahee',
            "Mukta Malar": 'Mukta Malar',
            "Mukta Vaani": 'Mukta Vaani',
            "Muli": 'Muli',
            "Mystery Quest": 'Mystery Quest',
            "NTR": 'NTR',
            "Nanum Brush Script": 'Nanum Brush Script',
            "Nanum Gothic": 'Nanum Gothic',
            "Nanum Gothic Coding": 'Nanum Gothic Coding',
            "Nanum Myeongjo": 'Nanum Myeongjo',
            "Nanum Pen Script": 'Nanum Pen Script',
            "Neucha": 'Neucha',
            "Neuton": 'Neuton',
            "New Rocker": 'New Rocker',
            "News Cycle": 'News Cycle',
            "Niconne": 'Niconne',
            "Niramit": 'Niramit',
            "Nixie One": 'Nixie One',
            "Nobile": 'Nobile',
            "Nokora": 'Nokora',
            "Norican": 'Norican',
            "Nosifer": 'Nosifer',
            "Notable": 'Notable',
            "Nothing You Could Do": 'Nothing You Could Do',
            "Noticia Text": 'Noticia Text',
            "Noto Sans": 'Noto Sans',
            "Noto Sans JP": 'Noto Sans JP',
            "Noto Sans KR": 'Noto Sans KR',
            "Noto Sans SC": 'Noto Sans SC',
            "Noto Sans TC": 'Noto Sans TC',
            "Noto Serif": 'Noto Serif',
            "Noto Serif JP": 'Noto Serif JP',
            "Noto Serif KR": 'Noto Serif KR',
            "Noto Serif SC": 'Noto Serif SC',
            "Noto Serif TC": 'Noto Serif TC',
            "Nova Cut": 'Nova Cut',
            "Nova Flat": 'Nova Flat',
            "Nova Mono": 'Nova Mono',
            "Nova Oval": 'Nova Oval',
            "Nova Round": 'Nova Round',
            "Nova Script": 'Nova Script',
            "Nova Slim": 'Nova Slim',
            "Nova Square": 'Nova Square',
            "Numans": 'Numans',
            "Nunito": 'Nunito',
            "Nunito Sans": 'Nunito Sans',
            "Odor Mean Chey": 'Odor Mean Chey',
            "Offside": 'Offside',
            "Old Standard TT": 'Old Standard TT',
            "Oldenburg": 'Oldenburg',
            "Oleo Script": 'Oleo Script',
            "Oleo Script Swash Caps": 'Oleo Script Swash Caps',
            "Open Sans": 'Open Sans',
            "Open Sans Condensed": 'Open Sans Condensed',
            "Oranienbaum": 'Oranienbaum',
            "Orbitron": 'Orbitron',
            "Oregano": 'Oregano',
            "Orienta": 'Orienta',
            "Original Surfer": 'Original Surfer',
            "Oswald": 'Oswald',
            "Over the Rainbow": 'Over the Rainbow',
            "Overlock": 'Overlock',
            "Overlock SC": 'Overlock SC',
            "Overpass": 'Overpass',
            "Overpass Mono": 'Overpass Mono',
            "Ovo": 'Ovo',
            "Oxygen": 'Oxygen',
            "Oxygen Mono": 'Oxygen Mono',
            "PT Mono": 'PT Mono',
            "PT Sans": 'PT Sans',
            "PT Sans Caption": 'PT Sans Caption',
            "PT Sans Narrow": 'PT Sans Narrow',
            "PT Serif": 'PT Serif',
            "PT Serif Caption": 'PT Serif Caption',
            "Pacifico": 'Pacifico',
            "Padauk": 'Padauk',
            "Palanquin": 'Palanquin',
            "Palanquin Dark": 'Palanquin Dark',
            "Pangolin": 'Pangolin',
            "Paprika": 'Paprika',
            "Parisienne": 'Parisienne',
            "Passero One": 'Passero One',
            "Passion One": 'Passion One',
            "Pathway Gothic One": 'Pathway Gothic One',
            "Patrick Hand": 'Patrick Hand',
            "Patrick Hand SC": 'Patrick Hand SC',
            "Pattaya": 'Pattaya',
            "Patua One": 'Patua One',
            "Pavanam": 'Pavanam',
            "Paytone One": 'Paytone One',
            "Peddana": 'Peddana',
            "Peralta": 'Peralta',
            "Permanent Marker": 'Permanent Marker',
            "Petit Formal Script": 'Petit Formal Script',
            "Petrona": 'Petrona',
            "Philosopher": 'Philosopher',
            "Piedra": 'Piedra',
            "Pinyon Script": 'Pinyon Script',
            "Pirata One": 'Pirata One',
            "Plaster": 'Plaster',
            "Play": 'Play',
            "Playball": 'Playball',
            "Playfair Display": 'Playfair Display',
            "Playfair Display SC": 'Playfair Display SC',
            "Podkova": 'Podkova',
            "Poiret One": 'Poiret One',
            "Poller One": 'Poller One',
            "Poly": 'Poly',
            "Pompiere": 'Pompiere',
            "Pontano Sans": 'Pontano Sans',
            "Poor Story": 'Poor Story',
            "Poppins": 'Poppins',
            "Port Lligat Sans": 'Port Lligat Sans',
            "Port Lligat Slab": 'Port Lligat Slab',
            "Pragati Narrow": 'Pragati Narrow',
            "Prata": 'Prata',
            "Preahvihear": 'Preahvihear',
            "Press Start 2P": 'Press Start 2P',
            "Pridi": 'Pridi',
            "Princess Sofia": 'Princess Sofia',
            "Prociono": 'Prociono',
            "Prompt": 'Prompt',
            "Prosto One": 'Prosto One',
            "Proza Libre": 'Proza Libre',
            "Puritan": 'Puritan',
            "Purple Purse": 'Purple Purse',
            "Quando": 'Quando',
            "Quantico": 'Quantico',
            "Quattrocento": 'Quattrocento',
            "Quattrocento Sans": 'Quattrocento Sans',
            "Questrial": 'Questrial',
            "Quicksand": 'Quicksand',
            "Quintessential": 'Quintessential',
            "Qwigley": 'Qwigley',
            "Racing Sans One": 'Racing Sans One',
            "Radley": 'Radley',
            "Rajdhani": 'Rajdhani',
            "Rakkas": 'Rakkas',
            "Raleway": 'Raleway',
            "Raleway Dots": 'Raleway Dots',
            "Ramabhadra": 'Ramabhadra',
            "Ramaraja": 'Ramaraja',
            "Rambla": 'Rambla',
            "Rammetto One": 'Rammetto One',
            "Ranchers": 'Ranchers',
            "Rancho": 'Rancho',
            "Ranga": 'Ranga',
            "Rasa": 'Rasa',
            "Rationale": 'Rationale',
            "Ravi Prakash": 'Ravi Prakash',
            "Redressed": 'Redressed',
            "Reem Kufi": 'Reem Kufi',
            "Reenie Beanie": 'Reenie Beanie',
            "Revalia": 'Revalia',
            "Rhodium Libre": 'Rhodium Libre',
            "Ribeye": 'Ribeye',
            "Ribeye Marrow": 'Ribeye Marrow',
            "Righteous": 'Righteous',
            "Risque": 'Risque',
            "Roboto": 'Roboto',
            "Roboto Condensed": 'Roboto Condensed',
            "Roboto Mono": 'Roboto Mono',
            "Roboto Slab": 'Roboto Slab',
            "Rochester": 'Rochester',
            "Rock Salt": 'Rock Salt',
            "Rokkitt": 'Rokkitt',
            "Romanesco": 'Romanesco',
            "Ropa Sans": 'Ropa Sans',
            "Rosario": 'Rosario',
            "Rosarivo": 'Rosarivo',
            "Rouge Script": 'Rouge Script',
            "Rozha One": 'Rozha One',
            "Rubik": 'Rubik',
            "Rubik Mono One": 'Rubik Mono One',
            "Ruda": 'Ruda',
            "Rufina": 'Rufina',
            "Ruge Boogie": 'Ruge Boogie',
            "Ruluko": 'Ruluko',
            "Rum Raisin": 'Rum Raisin',
            "Ruslan Display": 'Ruslan Display',
            "Russo One": 'Russo One',
            "Ruthie": 'Ruthie',
            "Rye": 'Rye',
            "Sacramento": 'Sacramento',
            "Sahitya": 'Sahitya',
            "Sail": 'Sail',
            "Saira": 'Saira',
            "Saira Condensed": 'Saira Condensed',
            "Saira Extra Condensed": 'Saira Extra Condensed',
            "Saira Semi Condensed": 'Saira Semi Condensed',
            "Salsa": 'Salsa',
            "Sanchez": 'Sanchez',
            "Sancreek": 'Sancreek',
            "Sansita": 'Sansita',
            "Sarabun": 'Sarabun',
            "Sarala": 'Sarala',
            "Sarina": 'Sarina',
            "Sarpanch": 'Sarpanch',
            "Satisfy": 'Satisfy',
            "Sawarabi Gothic": 'Sawarabi Gothic',
            "Sawarabi Mincho": 'Sawarabi Mincho',
            "Scada": 'Scada',
            "Scheherazade": 'Scheherazade',
            "Schoolbell": 'Schoolbell',
            "Scope One": 'Scope One',
            "Seaweed Script": 'Seaweed Script',
            "Secular One": 'Secular One',
            "Sedgwick Ave": 'Sedgwick Ave',
            "Sedgwick Ave Display": 'Sedgwick Ave Display',
            "Sevillana": 'Sevillana',
            "Seymour One": 'Seymour One',
            "Shadows Into Light": 'Shadows Into Light',
            "Shadows Into Light Two": 'Shadows Into Light Two',
            "Shanti": 'Shanti',
            "Share": 'Share',
            "Share Tech": 'Share Tech',
            "Share Tech Mono": 'Share Tech Mono',
            "Shojumaru": 'Shojumaru',
            "Short Stack": 'Short Stack',
            "Shrikhand": 'Shrikhand',
            "Siemreap": 'Siemreap',
            "Sigmar One": 'Sigmar One',
            "Signika": 'Signika',
            "Signika Negative": 'Signika Negative',
            "Simonetta": 'Simonetta',
            "Sintony": 'Sintony',
            "Sirin Stencil": 'Sirin Stencil',
            "Six Caps": 'Six Caps',
            "Skranji": 'Skranji',
            "Slabo 13px": 'Slabo 13px',
            "Slabo 27px": 'Slabo 27px',
            "Slackey": 'Slackey',
            "Smokum": 'Smokum',
            "Smythe": 'Smythe',
            "Sniglet": 'Sniglet',
            "Snippet": 'Snippet',
            "Snowburst One": 'Snowburst One',
            "Sofadi One": 'Sofadi One',
            "Sofia": 'Sofia',
            "Song Myung": 'Song Myung',
            "Sonsie One": 'Sonsie One',
            "Sorts Mill Goudy": 'Sorts Mill Goudy',
            "Source Code Pro": 'Source Code Pro',
            "Source Sans Pro": 'Source Sans Pro',
            "Source Serif Pro": 'Source Serif Pro',
            "Space Mono": 'Space Mono',
            "Special Elite": 'Special Elite',
            "Spectral": 'Spectral',
            "Spectral SC": 'Spectral SC',
            "Spicy Rice": 'Spicy Rice',
            "Spinnaker": 'Spinnaker',
            "Spirax": 'Spirax',
            "Squada One": 'Squada One',
            "Sree Krushnadevaraya": 'Sree Krushnadevaraya',
            "Sriracha": 'Sriracha',
            "Srisakdi": 'Srisakdi',
            "Staatliches": 'Staatliches',
            "Stalemate": 'Stalemate',
            "Stalinist One": 'Stalinist One',
            "Stardos Stencil": 'Stardos Stencil',
            "Stint Ultra Condensed": 'Stint Ultra Condensed',
            "Stint Ultra Expanded": 'Stint Ultra Expanded',
            "Stoke": 'Stoke',
            "Strait": 'Strait',
            "Stylish": 'Stylish',
            "Sue Ellen Francisco": 'Sue Ellen Francisco',
            "Suez One": 'Suez One',
            "Sumana": 'Sumana',
            "Sunflower": 'Sunflower',
            "Sunshiney": 'Sunshiney',
            "Supermercado One": 'Supermercado One',
            "Sura": 'Sura',
            "Suranna": 'Suranna',
            "Suravaram": 'Suravaram',
            "Suwannaphum": 'Suwannaphum',
            "Swanky and Moo Moo": 'Swanky and Moo Moo',
            "Syncopate": 'Syncopate',
            "Tajawal": 'Tajawal',
            "Tangerine": 'Tangerine',
            "Taprom": 'Taprom',
            "Tauri": 'Tauri',
            "Taviraj": 'Taviraj',
            "Teko": 'Teko',
            "Telex": 'Telex',
            "Tenali Ramakrishna": 'Tenali Ramakrishna',
            "Tenor Sans": 'Tenor Sans',
            "Text Me One": 'Text Me One',
            "Thasadith": 'Thasadith',
            "The Girl Next Door": 'The Girl Next Door',
            "Tienne": 'Tienne',
            "Tillana": 'Tillana',
            "Timmana": 'Timmana',
            "Tinos": 'Tinos',
            "Titan One": 'Titan One',
            "Titillium Web": 'Titillium Web',
            "Trade Winds": 'Trade Winds',
            "Trirong": 'Trirong',
            "Trocchi": 'Trocchi',
            "Trochut": 'Trochut',
            "Trykker": 'Trykker',
            "Tulpen One": 'Tulpen One',
            "Ubuntu": 'Ubuntu',
            "Ubuntu Condensed": 'Ubuntu Condensed',
            "Ubuntu Mono": 'Ubuntu Mono',
            "Ultra": 'Ultra',
            "Uncial Antiqua": 'Uncial Antiqua',
            "Underdog": 'Underdog',
            "Unica One": 'Unica One',
            "UnifrakturCook": 'UnifrakturCook',
            "UnifrakturMaguntia": 'UnifrakturMaguntia',
            "Unkempt": 'Unkempt',
            "Unlock": 'Unlock',
            "Unna": 'Unna',
            "VT323": 'VT323',
            "Vampiro One": 'Vampiro One',
            "Varela": 'Varela',
            "Varela Round": 'Varela Round',
            "Vast Shadow": 'Vast Shadow',
            "Vesper Libre": 'Vesper Libre',
            "Vibur": 'Vibur',
            "Vidaloka": 'Vidaloka',
            "Viga": 'Viga',
            "Voces": 'Voces',
            "Volkhov": 'Volkhov',
            "Vollkorn": 'Vollkorn',
            "Vollkorn SC": 'Vollkorn SC',
            "Voltaire": 'Voltaire',
            "Waiting for the Sunrise": 'Waiting for the Sunrise',
            "Wallpoet": 'Wallpoet',
            "Walter Turncoat": 'Walter Turncoat',
            "Warnes": 'Warnes',
            "Wellfleet": 'Wellfleet',
            "Wendy One": 'Wendy One',
            "Wire One": 'Wire One',
            "Work Sans": 'Work Sans',
            "Yanone Kaffeesatz": 'Yanone Kaffeesatz',
            "Yantramanav": 'Yantramanav',
            "Yatra One": 'Yatra One',
            "Yellowtail": 'Yellowtail',
            "Yeon Sung": 'Yeon Sung',
            "Yeseva One": 'Yeseva One',
            "Yesteryear": 'Yesteryear',
            "Yrsa": 'Yrsa',
            "ZCOOL KuaiLe": 'ZCOOL KuaiLe',
            "ZCOOL QingKe HuangYou": 'ZCOOL QingKe HuangYou',
            "ZCOOL XiaoWei": 'ZCOOL XiaoWei',
            "Zeyada": 'Zeyada',
            "Zilla Slab": 'Zilla Slab',
            "Zilla Slab Highlight": 'Zilla Slab Highlight'
        };

        // Define popup template.
        $.extend($.FroalaEditor.POPUP_TEMPLATES, {
            "customPlugin.popup": '[_BUTTONS_]'
        });

        // Define popup buttons.

        $.extend($.FroalaEditor.DEFAULTS, {
            popupButtons: ['align','insertLink','formatUL','-','strikeThrough','fontAwesome','emoticons','-','undo','redo','html'],
        });

        // The custom popup is defined inside a plugin (new or existing).

        $.FroalaEditor.PLUGINS.customPlugin = function (editor) {
            // Create custom popup.
            function initPopup () {
                // Popup buttons.
                var popup_buttons = '';

                // Create the list of buttons.
                if (editor.opts.popupButtons.length > 1) {
                    popup_buttons += '<div class="fr-buttons">';
                    popup_buttons += editor.button.buildList(editor.opts.popupButtons);
                    popup_buttons += '</div>';
                }

                // Load popup template.
                var template = {
                    buttons: popup_buttons,
                };

                // Create popup.
                var $popup = editor.popups.create('customPlugin.popup', template);

                return $popup;
            }

            // Show the popup
            function showPopup () {
                // Get the popup object defined above.
                var $popup = editor.popups.get('customPlugin.popup');

                // If popup doesn't exist then create it.
                // To improve performance it is best to create the popup when it is first needed
                // and not when the editor is initialized.
                if (!$popup) $popup = initPopup();

                // Set the editor toolbar as the popup's container.
                editor.popups.setContainer('customPlugin.popup', editor.$tb);

                // This will trigger the refresh event assigned to the popup.
                // editor.popups.refresh('customPlugin.popup');

                // This custom popup is opened by pressing a button from the editor's toolbar.
                // Get the button's object in order to place the popup relative to it.
                var $btn = editor.$tb.find('.fr-command[data-cmd="myButton"]');

                // Set the popup's position.
                var left = $btn.offset().left + $btn.outerWidth() / 2;
                var top = $btn.offset().top + (editor.opts.toolbarBottom ? 10 : $btn.outerHeight() - 10);

                // Show the custom popup.
                // The button's outerHeight is required in case the popup needs to be displayed above it.
                editor.popups.show('customPlugin.popup', left, top, $btn.outerHeight());
            }

            // Hide the custom popup.
            function hidePopup () {
                editor.popups.hide('customPlugin.popup');
            }

            // Methods visible outside the plugin.
            return {
                showPopup: showPopup,
                hidePopup: hidePopup
            }
        };

        // Define an icon and command for the button that opens the custom popup.

        $.FroalaEditor.DefineIcon('buttonIcon', { NAME: 'star'});
        $.FroalaEditor.RegisterCommand('myButton', {
            title: 'More Options',
            icon: 'buttonIcon',
            undo: false,
            focus: false,
            plugin: 'customPlugin',
            callback: function () {
                this.customPlugin.showPopup();
            }
        });

        // Initialize the editor.

        var froala_init = $('.fb-froala__init');
        $(froala_init).froalaEditor({
            key: 'lB6C1B4C1E1G2wG1G1B2C1B1D7B4E1D4D4jXa1TEWUf1d1QSDb1HAc1==',
            fontFamily: font_object,
            fontSize: fontSize,
            autofocus: false,
            charCounterCount: false,
            placeholderText: '',
            toolbarButtons: ['bold','italic','underline','fontSize','fontFamily','color','insertImage','insertVideo', '|', 'myButton'],
        }).on('froalaEditor.popups.show.emoticons', function (){
            $('.classic-editor__wrapper').addClass('pop-emotions');
        }).on('froalaEditor.popups.hide.emoticons', function (){
            $('.classic-editor__wrapper').removeClass('pop-emotions');
        }).on('froalaEditor.popups.show.link.insert', function (){
            $('.classic-editor__wrapper').addClass('pop-link');
        }).on('froalaEditor.popups.hide.link.insert', function (){
            $('.classic-editor__wrapper').removeClass('pop-link');
        }).on('froalaEditor.click', function () {
            $('.classic-editor__wrapper').removeClass('focus');
            $(this).parent('.classic-editor__wrapper').addClass('focus');
        });
    },

    /*
    ** init Function
    **/

    init: function() {
        question_cta_overlay.addclassclick();
        question_cta_overlay.openclose();
        question_cta_overlay.customscroll();
        question_cta_overlay.selecticon();
        question_cta_overlay.rangebar();
        question_cta_overlay.color_picker();
        question_cta_overlay.allCustomSelect();
        question_cta_overlay.outsideclick();
        question_cta_overlay.tooltip();
        question_cta_overlay.quick_access();
        question_cta_overlay.outside_hover();
        question_cta_overlay.color_picker_dropdown();
        question_cta_overlay.farola_editor();
    },
};

jQuery(document).ready(function() {
    question_cta_overlay.init();
});

