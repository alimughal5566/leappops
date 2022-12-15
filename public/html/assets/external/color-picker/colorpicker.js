/**
 *
 * Color picker
 * Author: Stefan Petre www.eyecon.ro
 *
 * Dual licensed under the MIT and GPL licenses
 *
 */
(function ($) {
    var ColorPicker = function () {
        var
            ids = {},
            inAction,
            currentColor = {},
            opacity = 1,
            charMin = 65,
            visible,
            options,
            tpl = '<div class="colorpicker"><div class="colorpicker_color"><div><div></div></div></div><div class="colorpicker_hue"><div></div></div><div class="colorpicker_opacity"><div></div></div><div class="colorpicker_new_color"></div><div class="colorpicker_current_color"></div><div class="colorpicker_hex"><input type="text" maxlength="6" size="6" /></div><div class="colorpicker_rgb_r colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_rgb_g colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_rgb_b colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_h colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_s colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_hsb_b colorpicker_field"><input type="text" maxlength="3" size="3" /><span></span></div><div class="colorpicker_submit"></div></div>',
            defaults = {
                eventName: 'click',
                onShow: function () {},
                onBeforeShow: function(){},
                onHide: function () {},
                onChange: function () {},
                onSubmit: function () {},
                color: 'rgb(36, 170, 242)',
                livePreview: true,
                flat: false,
                width: 150,
                height: 150,
                outer_height: 176,
                outer_width: 356,
                set_opacity:1
            },
            fillRGBFields = function  (hsb, cal) {
                var rgb = HSBToRGB(hsb);
                $(cal).data('colorpicker').fields
                    .eq(1).val(rgb.r).end()
                    .eq(2).val(rgb.g).end()
                    .eq(3).val(rgb.b).end();
            },
            fillHSBFields = function  (hsb, cal) {
                var resulth = (hsb.h - Math.floor(hsb.h)) !== 0;
                var results = (hsb.s - Math.floor(hsb.s)) !== 0;
                var resultb = (hsb.b - Math.floor(hsb.b)) !== 0;
                if(resulth){
                    hsb.h =  hsb.h.toFixed(2);
                }
                if(results){
                    hsb.s =  hsb.s.toFixed(2);
                }
                if(resultb){
                    hsb.b =  hsb.b.toFixed(2);
                }
                $(cal).data('colorpicker').fields
                    .eq(4).val(hsb.h).end()
                    .eq(5).val(hsb.s).end()
                    .eq(6).val(hsb.b).end();
            },
            fillHexFields = function (hsb, cal) {
                $(cal).data('colorpicker').fields
                    .eq(0).val(HSBToHex(hsb)).end();
            },
            setSelector = function (hsb, cal) {
                $(cal).data('colorpicker').selector.css('backgroundColor', '#' + HSBToHex({h: hsb.h, s: 100, b: 100}));
                var _height = defaults.height;
                if($(cal).data('height')!=undefined){
                    _height = $(cal).data('height');
                }
                var _width = defaults.width;
                if($(cal).data('width')!=undefined){
                    _width = $(cal).data('width');
                }

                $(cal).data('colorpicker').selectorIndic.css({
                    left: parseInt(_width * hsb.s/100, 10),
                    top: parseInt(_height * (100-hsb.b)/100, 10)
                });
            },
            setHueOpacity = function (hsb, cal) {
                var _height = defaults.height;
                if($(cal).data('height')!=undefined){
                    _height = $(cal).data('height');
                }
                $(cal).data('colorpicker').hueOpcity.css('top', parseInt(_height - _height * hsb.h/360, 10));
            },
            setHueOpacityLoad = function (opc, cal) {
                var _height = defaults.height;
                if($(cal).data('height')!=undefined){
                    _height = $(cal).data('height');
                }
                var op = 1 - opc;
                $(cal).data('colorpicker').hueOpcity.css('top', parseInt((( op * 100)*_height) / 100, 10));
            },
            setHex = function(rgba) {
                // var valArr = val.split("(")[1].split(")")[0].split(","),
                    red = toHex(rgba.r),
                    green = toHex(rgba.g),
                    blue = toHex(rgba.b),
                    alpha = toHex(rgba.a*256) || 00;
                    if(opacity == 1){
                        return red + green + blue;
                    }else{
                        return red + green + blue + alpha;
                    }
            };

            toHex = function(val) {
                val = parseInt(val);
                val = Math.max(0,val);
                val = Math.min(val,255);
                val = Math.ceil(val);
                return "0123456789ABCDEF".charAt((val-val%16)/16) + "0123456789ABCDEF".charAt(val%16);
            };

            setHue = function (hsb, cal) {
                var _height = defaults.height;
                if($(cal).data('height')!=undefined){
                    _height = $(cal).data('height');
                }
                $(cal).data('colorpicker').hue.css('top', parseInt(_height - _height * hsb.h/360, 10));
            },
            setCurrentColor = function (hsb, cal) {
                $(cal).data('colorpicker').currentColor.css('backgroundColor', '#' + HSBToHex(hsb));
            },
            setNewColor = function (hsb, cal) {
                var _rgba = HSBToRGB(hsb);
                currentColor = hsb;
                if(opacity != 1){
                    var rgba_color = 'rgba('+_rgba.r+', '+_rgba.g+', '+_rgba.b+', '+opacity+')';
                    $(cal).data('colorpicker').newColor.css('backgroundColor', rgba_color);
                }else{
                    $(cal).data('colorpicker').newColor.css('backgroundColor', '#' + HSBToHex(hsb));
                }


                var _rgba_str = 'rgba('+_rgba.r+', '+_rgba.g+', '+_rgba.b+', 0)';
                var _rgb_str = 'rgb('+_rgba.r+', '+_rgba.g+', '+_rgba.b+')';
                $(cal).data('colorpicker').opacityNewColor.css({'background':'rgba(0, 0, 0, 0) linear-gradient(to top, '+_rgba_str+', '+_rgb_str+') repeat scroll 0% 0%'});
            },
            keyDown = function (ev) {
                var pressedKey = ev.charCode || ev.keyCode || -1;
                if ((pressedKey > charMin && pressedKey <= 90) || pressedKey == 32) {
                    return false;
                }
                var cal = $(this).parent().parent();
                if (cal.data('colorpicker').livePreview === true) {
                    change.apply(this);
                }
            },
            changeOpacity = function (ev) {


                var cal = $(this).parent().parent(), _col;

                if (this.parentNode.className.indexOf('_hex') > 0) {
                    cal.data('colorpicker').color = _col = HexToHSB(fixHex(this.value));
                } else if (this.parentNode.className.indexOf('_hsb') > 0) {
                    cal.data('colorpicker').color = _col = fixHSB({
                        h: parseInt(cal.data('colorpicker').fields.eq(4).attr('data-val'), 10),
                        s: parseInt(cal.data('colorpicker').fields.eq(5).attr('data-val'), 10),
                        b: parseInt(cal.data('colorpicker').fields.eq(6).attr('data-val'), 10)
                    });

                    currentColor = fixHSB({
                        h: parseInt(cal.data('colorpicker').fields.eq(4).val(), 10),
                        s: parseInt(cal.data('colorpicker').fields.eq(5).val(), 10),
                        b: parseInt(cal.data('colorpicker').fields.eq(6).val(), 10)
                    });

                } else {
                    cal.data('colorpicker').color = _col = RGBToHSB(fixRGB({
                        r: parseInt(cal.data('colorpicker').fields.eq(1).attr('data-val'), 10),
                        g: parseInt(cal.data('colorpicker').fields.eq(2).attr('data-val'), 10),
                        b: parseInt(cal.data('colorpicker').fields.eq(3).attr('data-val'), 10)
                    }));
                }
                setHueOpacity(_col, cal.get(0));
                setOpacity(_col, cal.get(0));

                // cal.data('colorpicker').onChange.apply(cal, [currentColor, HSBToHex(currentColor), HSBToRGB(currentColor),HSBToRGBA(currentColor)]);
                cal.data('colorpicker').onChange.apply(cal, [currentColor, HSBToHex(currentColor), HSBToRGB(currentColor),HSBToRGBA(currentColor),setHex(HSBToRGBA(currentColor))]);
            },
            change = function (ev) {
                var cal = $(this).parent().parent(), col;
                if (this.parentNode.className.indexOf('_hex') > 0) {
                    cal.data('colorpicker').color = col = HexToHSB(fixHex(this.value));
                } else if (this.parentNode.className.indexOf('_hsb') > 0) {
                    cal.data('colorpicker').color = col = fixHSB({
                        h: parseInt(cal.data('colorpicker').fields.eq(4).val(), 10),
                        s: parseInt(cal.data('colorpicker').fields.eq(5).val(), 10),
                        b: parseInt(cal.data('colorpicker').fields.eq(6).val(), 10)
                    });
                } else {
                    cal.data('colorpicker').color = col = RGBToHSB(fixRGB({
                        r: parseInt(cal.data('colorpicker').fields.eq(1).val(), 10),
                        g: parseInt(cal.data('colorpicker').fields.eq(2).val(), 10),
                        b: parseInt(cal.data('colorpicker').fields.eq(3).val(), 10)
                    }));
                }
                if (ev) {
                    fillRGBFields(col, cal.get(0));
                    fillHexFields(col, cal.get(0));
                    fillHSBFields(col, cal.get(0));
                }
                setSelector(col, cal.get(0));
                setHue(col, cal.get(0));
                setNewColor(col, cal.get(0));
                cal.data('colorpicker').onChange.apply(cal, [col, HSBToHex(col), HSBToRGB(col), HSBToRGBA(col), setHex(HSBToRGBA(col)) ]);
            },
            setOpacity = function(hsb, cal){
                var _height = defaults.height;
                if($(cal).data('height')!=undefined){
                    _height = $(cal).data('height');
                }
                var opc = parseInt(_height - _height * hsb.h/360, 10);
                var _val = ((opc / _height) * 100) / 100;
                opacity = 1 - _val;
            },
            HSBToRGBA = function(hsb){
                var rgba= HSBToRGB(hsb);
                rgba['a'] = opacity;
                return rgba;
            },
            blur = function (ev) {
                var cal = $(this).parent().parent();
                cal.data('colorpicker').fields.parent().removeClass('colorpicker_focus');
            },
            focus = function () {
                charMin = this.parentNode.className.indexOf('_hex') > 0 ? 70 : 65;
                $(this).parent().parent().data('colorpicker').fields.parent().removeClass('colorpicker_focus');
                $(this).parent().addClass('colorpicker_focus');
            },
            downIncrement = function (ev) {
                var field = $(this).parent().find('input').focus();
                var current = {
                    el: $(this).parent().addClass('colorpicker_slider'),
                    max: this.parentNode.className.indexOf('_hsb_h') > 0 ? 360 : (this.parentNode.className.indexOf('_hsb') > 0 ? 100 : 255),
                    y: ev.pageY,
                    field: field,
                    val: parseInt(field.val(), 10),
                    preview: $(this).parent().parent().data('colorpicker').livePreview
                };
                $(document).bind('mouseup', current, upIncrement);
                $(document).bind('mousemove', current, moveIncrement);
            },
            moveIncrement = function (ev) {
                ev.data.field.val(Math.max(0, Math.min(ev.data.max, parseInt(ev.data.val + ev.pageY - ev.data.y, 10))));
                if (ev.data.preview) {
                    change.apply(ev.data.field.get(0), [true]);
                }
                return false;
            },
            upIncrement = function (ev) {
                change.apply(ev.data.field.get(0), [true]);
                ev.data.el.removeClass('colorpicker_slider').find('input').focus();
                $(document).unbind('mouseup', upIncrement);
                $(document).unbind('mousemove', moveIncrement);
                return false;
            },
            downHue = function (ev) {
                var current = {
                    cal: $(this).parent(),
                    y: $(this).offset().top
                };
                current.preview = current.cal.data('colorpicker').livePreview;
                $(document).bind('mouseup', current, upHue);
                $(document).bind('mousemove', current, moveHue);
            },
            moveHue = function (ev) {
                var _height = defaults.height;
                if(ev.data.cal.data('height')!=undefined){
                    _height = ev.data.cal.data('height');
                }
                change.apply(
                    ev.data.cal.data('colorpicker')
                        .fields
                        .eq(4)
                        .val(parseInt(360*(_height - Math.max(0,Math.min(_height,(ev.pageY - ev.data.y))))/_height, 10))
                        .get(0),
                    [ev.data.preview]
                );
                return false;
            },
            upHue = function (ev) {
                fillRGBFields(ev.data.cal.data('colorpicker').color, ev.data.cal.get(0));
                fillHexFields(ev.data.cal.data('colorpicker').color, ev.data.cal.get(0));
                $(document).unbind('mouseup', upHue);
                $(document).unbind('mousemove', moveHue);
                return false;
            },

            downHueOpacity = function (ev) {
                var current = {
                    cal: $(this).parent(),
                    y: $(this).offset().top
                };
                // current.preview = current.cal.data('colorpicker').livePreview;
                $(document).bind('mouseup', current, upHueOpacity);
                $(document).bind('mousemove', current, moveHueOpacity);
            },
            upHueOpacity = function (ev) {
                fillRGBFields(ev.data.cal.data('colorpicker').color, ev.data.cal.get(0));
                fillHexFields(ev.data.cal.data('colorpicker').color, ev.data.cal.get(0));
                $(document).unbind('mouseup', upHueOpacity);
                $(document).unbind('mousemove', moveHueOpacity);
                return false;
            },
            moveHueOpacity = function (ev) {
            // console.info(ev);
                var _height = defaults.height;
                if(ev.data.cal.data('height')!=undefined){
                    _height = ev.data.cal.data('height');
                }
                changeOpacity.apply(
                    ev.data.cal.data('colorpicker')
                        .fields
                        .eq(4)
                        .attr('data-val', parseInt(360*(_height - Math.max(0,Math.min(_height,(ev.pageY - ev.data.y))))/_height, 10))
                        .get(0),
                    [ev.data.preview]
                );
                return false;
            },



            downSelector = function (ev) {
                var current = {
                    cal: $(this).parent(),
                    pos: $(this).offset()
                };
                current.preview = current.cal.data('colorpicker').livePreview;
                $(document).bind('mouseup', current, upSelector);
                $(document).bind('mousemove', current, moveSelector);
            },

            // new opacity bar

            downOpacity = function (ev) {
                var current = {
                    cal: $(this).parent(),
                    y: $(this).offset().top
                };
                // current.preview = current.cal.data('colorpicker').livePreview;
                $(document).bind('mouseup', current, upOpacity);
                // $(document).bind('mousemove', current, moveOpacity);
            },
            upOpacity = function (ev) {
                // fillRGBFields(ev.data.cal.data('colorpicker').color, ev.data.cal.get(0));
                // fillHexFields(ev.data.cal.data('colorpicker').color, ev.data.cal.get(0));
                $(document).unbind('mouseup', upOpacity);
                // $(document).unbind('mousemove', moveOpacity);
                return false;
            },
            // moveOpacity = function (ev) {
            //     var _height = defaults.height;
            //     if(ev.data.cal.data('height')!=undefined){
            //         _height = ev.data.cal.data('height');
            //     }
            //     change.apply(
            //         ev.data.cal.data('colorpicker')
            //             .fields
            //             .eq(4)
            //             .val(parseInt(360*(_height - Math.max(0,Math.min(_height,(ev.pageY - ev.data.y))))/_height, 10))
            //             .get(0),
            //         [ev.data.preview]
            //     );
            //     return false;
            // },

            moveSelector = function (ev) {
                var _height = defaults.height;
                if(ev.data.cal.data('height')!=undefined){
                    _height = ev.data.cal.data('height');
                }
                var _width = defaults.width;
                if(ev.data.cal.data('width')!=undefined){
                    _width = ev.data.cal.data('width');
                }
                change.apply(
                    ev.data.cal.data('colorpicker')
                        .fields
                        .eq(6)
                        .val(parseInt(100*(_height - Math.max(0,Math.min(_height,(ev.pageY - ev.data.pos.top))))/_height, 10))
                        .end()
                        .eq(5)
                        .val(parseInt(100*(Math.max(0,Math.min(_width,(ev.pageX - ev.data.pos.left))))/_width, 10))
                        .get(0),
                    [ev.data.preview]
                );
                return false;
            },
            upSelector = function (ev) {
                fillRGBFields(ev.data.cal.data('colorpicker').color, ev.data.cal.get(0));
                fillHexFields(ev.data.cal.data('colorpicker').color, ev.data.cal.get(0));
                $(document).unbind('mouseup', upSelector);
                $(document).unbind('mousemove', moveSelector);
                return false;
            },
            enterSubmit = function (ev) {
                $(this).addClass('colorpicker_focus');
            },
            leaveSubmit = function (ev) {
                $(this).removeClass('colorpicker_focus');
            },
            clickSubmit = function (ev) {
                var cal = $(this).parent();
                var col = cal.data('colorpicker').color;
                cal.data('colorpicker').origColor = col;
                setCurrentColor(col, cal.get(0));
                cal.data('colorpicker').onSubmit(col, HSBToHex(col), HSBToRGB(col), cal.data('colorpicker').el);
            },
            show = function (ev) {
                var cal = $('#' + $(this).data('colorpickerId'));
                cal.data('colorpicker').onBeforeShow.apply(this, [cal.get(0)]);
                var pos = $(this).offset();
                var viewPort = getViewport();
                var top = pos.top + this.offsetHeight;
                var left = pos.left;
                var outer_height = defaults.outer_height;
                if(cal.data('outer_height')!=undefined){
                    outer_height = $(cal).data('outer_height');
                }
                var outer_width = defaults.outer_width;
                if(cal.data('outer_width')!=undefined){
                    outer_width = $(cal).data('outer_width');
                }
                if (top + outer_height > viewPort.t + viewPort.h) {
                    top -= this.offsetHeight + outer_height;
                }
                if (left + outer_width > viewPort.l + viewPort.w) {
                    left -= outer_width;
                }
                cal.css({left: left + 'px', top: top + 'px'});
                if (cal.data('colorpicker').onShow.apply(this, [cal.get(0)]) != false) {
                    cal.show();
                }
                $(document).bind('mousedown', {cal: cal}, hide);
                return false;
            },
            hide = function (ev) {
                if (!isChildOf(ev.data.cal.get(0), ev.target, ev.data.cal.get(0))) {
                    if (ev.data.cal.data('colorpicker').onHide.apply(this, [ev.data.cal.get(0)]) != false) {
                        ev.data.cal.hide();
                    }
                    $(document).unbind('mousedown', hide);
                }
            },
            isChildOf = function(parentEl, el, container) {
                if (parentEl == el) {
                    return true;
                }
                if (parentEl.contains) {
                    return parentEl.contains(el);
                }
                if ( parentEl.compareDocumentPosition ) {
                    return !!(parentEl.compareDocumentPosition(el) & 16);
                }
                var prEl = el.parentNode;
                while(prEl && prEl != container) {
                    if (prEl == parentEl)
                        return true;
                    prEl = prEl.parentNode;
                }
                return false;
            },
            getViewport = function () {
                var m = document.compatMode == 'CSS1Compat';
                return {
                    l : window.pageXOffset || (m ? document.documentElement.scrollLeft : document.body.scrollLeft),
                    t : window.pageYOffset || (m ? document.documentElement.scrollTop : document.body.scrollTop),
                    w : window.innerWidth || (m ? document.documentElement.clientWidth : document.body.clientWidth),
                    h : window.innerHeight || (m ? document.documentElement.clientHeight : document.body.clientHeight)
                };
            },
            fixHSB = function (hsb) {
                return {
                    h: Math.min(360, Math.max(0, hsb.h)),
                    s: Math.min(100, Math.max(0, hsb.s)),
                    b: Math.min(100, Math.max(0, hsb.b))
                };
            },
            fixRGB = function (rgb) {
                return {
                    r: Math.min(255, Math.max(0, rgb.r)),
                    g: Math.min(255, Math.max(0, rgb.g)),
                    b: Math.min(255, Math.max(0, rgb.b))
                };
            },
            fixHex = function (hex) {
                var len = 6 - hex.length;
                if (len > 0) {
                    var o = [];
                    for (var i=0; i<len; i++) {
                        o.push('0');
                    }
                    o.push(hex);
                    hex = o.join('');
                }
                return hex;
            },
            HexToRGB = function (hex) {
                var hex = parseInt(((hex.indexOf('#') > -1) ? hex.substring(1) : hex), 16);
                return {r: hex >> 16, g: (hex & 0x00FF00) >> 8, b: (hex & 0x0000FF)};
            },
            HexToHSB = function (hex) {
                return RGBToHSB(HexToRGB(hex));
            },
            RGBToHSB = function (rgb) {
                var hsb = {
                    h: 0,
                    s: 0,
                    b: 0
                };
                var min = Math.min(rgb.r, rgb.g, rgb.b);
                var max = Math.max(rgb.r, rgb.g, rgb.b);
                var delta = max - min;
                hsb.b = max;
                if (max != 0) {

                }
                hsb.s = max != 0 ? 255 * delta / max : 0;
                if (hsb.s != 0) {
                    if (rgb.r == max) {
                        hsb.h = (rgb.g - rgb.b) / delta;
                    } else if (rgb.g == max) {
                        hsb.h = 2 + (rgb.b - rgb.r) / delta;
                    } else {
                        hsb.h = 4 + (rgb.r - rgb.g) / delta;
                    }
                } else {
                    hsb.h = -1;
                }
                hsb.h *= 60;
                if (hsb.h < 0) {
                    hsb.h += 360;
                }
                hsb.s *= 100/255;
                hsb.b *= 100/255;
                return hsb;
            },
            HSBToRGB = function (hsb) {
                var rgb = {};
                var h = Math.round(hsb.h);
                var s = Math.round(hsb.s*255/100);
                var v = Math.round(hsb.b*255/100);
                if(s == 0) {
                    rgb.r = rgb.g = rgb.b = v;
                } else {
                    var t1 = v;
                    var t2 = (255-s)*v/255;
                    var t3 = (t1-t2)*(h%60)/60;
                    if(h==360) h = 0;
                    if(h<60) {rgb.r=t1;	rgb.b=t2; rgb.g=t2+t3}
                    else if(h<120) {rgb.g=t1; rgb.b=t2;	rgb.r=t1-t3}
                    else if(h<180) {rgb.g=t1; rgb.r=t2;	rgb.b=t2+t3}
                    else if(h<240) {rgb.b=t1; rgb.r=t2;	rgb.g=t1-t3}
                    else if(h<300) {rgb.b=t1; rgb.g=t2;	rgb.r=t2+t3}
                    else if(h<360) {rgb.r=t1; rgb.g=t2;	rgb.b=t1-t3}
                    else {rgb.r=0; rgb.g=0;	rgb.b=0}
                }
                return {r:Math.round(rgb.r), g:Math.round(rgb.g), b:Math.round(rgb.b)};
            },
            RGBToHex = function (rgb) {
                var hex = [
                    rgb.r.toString(16),
                    rgb.g.toString(16),
                    rgb.b.toString(16)
                ];
                $.each(hex, function (nr, val) {
                    if (val.length == 1) {
                        hex[nr] = '0' + val;
                    }
                });
                return hex.join('');
            },
            HSBToHex = function (hsb) {
                return RGBToHex(HSBToRGB(hsb));
            },
            restoreOriginal = function () {
                var cal = $(this).parent();
                var col = cal.data('colorpicker').origColor;
                cal.data('colorpicker').color = col;
                fillRGBFields(col, cal.get(0));
                fillHexFields(col, cal.get(0));
                fillHSBFields(col, cal.get(0));
                setSelector(col, cal.get(0));
                setHue(col, cal.get(0));
                setNewColor(col, cal.get(0));
            };
        return {
            init: function (opt) {
                opt = $.extend({}, defaults, opt||{});
                if (typeof opt.color == 'string') {
                    opt.color = HexToHSB(opt.color);
                } else if (opt.color.r != undefined && opt.color.g != undefined && opt.color.b != undefined) {
                    opt.color = RGBToHSB(opt.color);
                } else if (opt.color.h != undefined && opt.color.s != undefined && opt.color.b != undefined) {
                    opt.color = fixHSB(opt.color);
                } else {
                    return this;
                }
                return this.each(function () {
                    if (!$(this).data('colorpickerId')) {
                        options = $.extend({}, opt);
                        options.setOpacity = opt.set_opacity
                        options.origColor = opt.color;
                        var id = 'collorpicker_' + parseInt(Math.random() * 1000);
                        $(this).data('colorpickerId', id);
                        var cal = $(tpl).attr('id', id);

                        if(options.width!=undefined){
                            cal.data('width', options.width);
                            cal.attr('data-width', options.width);
                        }

                        if(options.height!=undefined){
                            cal.data('height', options.height);
                            cal.attr('data-height', options.height);
                        }

                        if(options.outer_width!=undefined){
                            cal.data('outer_width', options.outer_width);
                            cal.attr('data-outer_width', options.outer_width);
                        }

                        if(options.outer_height!=undefined){
                            cal.data('outer_height', opt.outer_height);
                            cal.attr('data-outer_height', opt.outer_height);
                        }


                        if (options.flat) {
                            cal.appendTo(this).show();
                        } else {
                            cal.appendTo(document.body);
                        }
                        options.fields = cal
                            .find('input')
                            .bind('keyup', keyDown)
                            .bind('change', change)
                            .bind('blur', blur)
                            .bind('focus', focus);
                        cal
                            .find('span').bind('mousedown', downIncrement).end()
                            .find('>div.colorpicker_current_color').bind('click', restoreOriginal);
                        options.selector = cal.find('div.colorpicker_color').bind('mousedown', downSelector);
                        options.selectorIndic = options.selector.find('div div');
                        options.el = this;
                        options.hue = cal.find('div.colorpicker_hue div');
                        options.hueOpcity = cal.find('div.colorpicker_opacity div');
                        cal.find('div.colorpicker_hue').bind('mousedown', downHue);

                        cal.find('div.colorpicker_opacity').bind('mousedown', downHueOpacity);

                        // new opacity bar

                        options.opacity = cal.find('div.colorpicker_opacity div');
                        cal.find('div.colorpicker_opacity').bind('mousedown', downOpacity);

                        options.newColor = cal.find('div.colorpicker_new_color');
                        options.opacityNewColor = cal.find('div.colorpicker_opacity');
                        options.currentColor = cal.find('div.colorpicker_current_color');
                        cal.data('colorpicker', options);
                        cal.find('div.colorpicker_submit')
                            .bind('mouseenter', enterSubmit)
                            .bind('mouseleave', leaveSubmit)
                            .bind('click', clickSubmit);
                        fillRGBFields(options.color, cal.get(0));
                        fillHSBFields(options.color, cal.get(0));
                        fillHexFields(options.color, cal.get(0));
                        setHue(options.color, cal.get(0));
                        setSelector(options.color, cal.get(0));
                        setCurrentColor(options.color, cal.get(0));
                        setNewColor(options.color, cal.get(0));
                        // setOpacity(options.color, cal.get(0));
                        setHueOpacityLoad(options.setOpacity,cal.get(0))
                        opacity = 1
                        if (options.flat) {
                            cal.css({
                                position: 'relative',
                                display: 'block'
                            });
                        } else {
                            $(this).bind(options.eventName, show);
                        }
                    }
                });
            },

            showPicker: function() {
                return this.each( function () {
                    if ($(this).data('colorpickerId')) {
                        show.apply(this);
                    }
                });
            },
            hidePicker: function() {
                return this.each( function () {
                    if ($(this).data('colorpickerId')) {
                        $('#' + $(this).data('colorpickerId')).hide();
                    }
                });
            },
            setColor: function(col) {
                if (typeof col == 'string') {
                    col = HexToHSB(col);
                } else if (col.r != undefined && col.g != undefined && col.b != undefined) {
                    col = RGBToHSB(col);
                } else if (col.h != undefined && col.s != undefined && col.b != undefined) {
                    col = fixHSB(col);
                } else {
                    return this;
                }
                return this.each(function(){
                    if ($(this).data('colorpickerId')) {
                        var cal = $('#' + $(this).data('colorpickerId'));
                        cal.data('colorpicker').color = col;
                        cal.data('colorpicker').origColor = col;
                        fillRGBFields(col, cal.get(0));
                        fillHSBFields(col, cal.get(0));
                        fillHexFields(col, cal.get(0));
                        setHue(col, cal.get(0));
                        setSelector(col, cal.get(0));
                        setCurrentColor(col, cal.get(0));
                        setNewColor(col, cal.get(0));

                    }
                });
            }
        };
    }();
    $.fn.extend({
        ColorPicker: ColorPicker.init,
        ColorPickerHide: ColorPicker.hidePicker,
        ColorPickerShow: ColorPicker.showPicker,
        ColorPickerSetColor: ColorPicker.setColor
    });
})(jQuery)
