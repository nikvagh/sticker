<!DOCTYPE html>
<head>
   <title>work</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <meta name="google-site-verification" content="_0ox0Up1UZQ9JMYBr7S_CVots2V6OR0nk1nF0kBUTKk">
  <link rel="stylesheet" href="https://d3fu7mr2g5m5ku.cloudfront.net/assets/styles/1595841896-index.css">
    <link rel="stylesheet" href="https://d3fu7mr2g5m5ku.cloudfront.net/assets/styles/1595841896-print.css" media="print">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="./js/jquery.colorPicker.js"/></script>
 
   <script type="text/javascript" async="" src="//bat.bing.com/bat.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://connect.facebook.net/signals/config/783262895169731?v=2.9.23&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TVK6J7"></script><script crossorigin="anonymous" src="https://polyfill.io/v3/polyfill.min.js?flags=gated&amp;features=default" async=""></script>

  <script>
    window.dataLayer = window.dataLayer||[];
  </script>

  <script>
    window.initComponents = [
      { name: 'shapes', data: { url: "https:\/\/d3fu7mr2g5m5ku.cloudfront.net\/assets" + '/sprites/shapes.svg' }},
      { name: 'appState', place: document, data: {
        currentIcons: { currentIcons: [ 11171 ] }, 
      }},
      { name: 'lazy', place: document },
      { name: 'snippets', place: document },
      { name: 'ajaxLink', place: document },
      { name: 'scroll', place: document },
      { name: 'gallery', place: '#PhotoSwipeElement' },
      { name: 'userMetrics', place: document }
    ];
  
  function updateFlag(id)
  {
    var new_img = document.getElementById(id).src;
   
    //alert(new_img);
    document.getElementById('modaClose').click();
    document.getElementById('modaClose1').click();
    var tablist = document.getElementsByClassName('editorTabs-preview_img');

   
    if(!document.getElementById('Design0-flag_update'))
    {
      var flag_img = document.createElement("img");
      flag_img.src = new_img;
      flag_img.setAttribute("id", "Design0-flag_update");

      flag_img.setAttribute("height", "30");
      flag_img.setAttribute("width", "100");
      

      document.getElementById('Design0').appendChild(flag_img);

    }
    else
    {
      document.getElementById('Design0-flag_update').src = new_img;
    }

    if(!document.getElementById('Design1-flag_update'))
    {
      var flag_img = document.createElement("img");
      flag_img.src = new_img;
      flag_img.setAttribute("id", "Design1-flag_update");

      flag_img.setAttribute("height", "30");
      flag_img.setAttribute("width", "100");
      document.getElementById('Design1').appendChild(flag_img);

    }
    else
    {
      document.getElementById('Design1-flag_update').src = new_img;
    }

    if(!document.getElementById('Design2-flag_update'))
    {
      var flag_img = document.createElement("img");
      flag_img.src = new_img;
      flag_img.setAttribute("id", "Design2-flag_update");

      flag_img.setAttribute("height", "30");
      flag_img.setAttribute("width", "100");
      document.getElementById('Design2').appendChild(flag_img);

    }
    else
    {
      document.getElementById('Design2-flag_update').src = new_img;
    }
    if(!document.getElementById('Design3-flag_update'))
    {
      var flag_img = document.createElement("img");
      flag_img.src = new_img;
      flag_img.setAttribute("id", "Design3-flag_update");

      flag_img.setAttribute("height", "30");
      flag_img.setAttribute("width", "100");
      document.getElementById('Design3').appendChild(flag_img);

    }
    else
    {
      document.getElementById('Design3-flag_update').src = new_img;
    }

    if(!document.getElementById('Design4-flag_update'))
    {
      var flag_img = document.createElement("img");
      flag_img.src = new_img;
      flag_img.setAttribute("id", "Design4-flag_update");

      flag_img.setAttribute("height", "30");
      flag_img.setAttribute("width", "100");
      document.getElementById('Design4').appendChild(flag_img);

    }
    else
    {
      document.getElementById('Design4-flag_update').src = new_img;
    }
    if(!document.getElementById('Design5-flag_update'))
    {
      var flag_img = document.createElement("img");
      flag_img.src = new_img;
      flag_img.setAttribute("id", "Design5-flag_update");

      flag_img.setAttribute("height", "30");
      flag_img.setAttribute("width", "100");
      document.getElementById('Design5').appendChild(flag_img);

    }
    else
    {
      document.getElementById('Design5-flag_update').src = new_img;
    }

    if(!document.getElementById('Design6-flag_update'))
    {
      var flag_img = document.createElement("img");
      flag_img.src = new_img;
      flag_img.setAttribute("id", "Design6-flag_update");

      flag_img.setAttribute("height", "30");
      flag_img.setAttribute("width", "100");
      document.getElementById('Design6').appendChild(flag_img);

    }
    else
    {
      document.getElementById('Design6-flag_update').src = new_img;
    }

    if(!document.getElementById('Design7-flag_update'))
    {
      var flag_img = document.createElement("img");
      flag_img.src = new_img;
      flag_img.setAttribute("id", "Design7-flag_update");

      flag_img.setAttribute("height", "30");
      flag_img.setAttribute("width", "100");
      document.getElementById('Design7').appendChild(flag_img);

    }
    else
    {
      document.getElementById('Design7-flag_update').src = new_img;
    }
   
    for (eachtab of tablist) { 
      // code to be executed 
      eachtab.src = new_img;
    } 

    

  }


function changeColor()
{
  let color= document.getElementById('color1').value;
   document.getElementById("demo").style.backgroundColor = color;
  
    document.getElementById("demo3").style.backgroundColor = color;
    
    document.getElementById("demo4").style.backgroundColor = color;
   
    document.getElementById("demo7").style.backgroundColor = color;
    document.getElementById("demo8").style.backgroundColor = color;
    
    document.getElementById("demo11").style.backgroundColor = color;
    document.getElementById("demo12").style.backgroundColor = color;
    
    document.getElementById("demo15").style.backgroundColor = color;
    document.getElementById("demo16").style.backgroundColor = color;
    
    document.getElementById("demo19").style.backgroundColor = color;
    document.getElementById("demo20").style.backgroundColor = color;
    
    document.getElementById("demo23").style.backgroundColor = color;
    document.getElementById("demo24").style.backgroundColor = color;
    
    document.getElementById("demo27").style.backgroundColor = color;
    document.getElementById("demo28").style.backgroundColor = color;
   
    document.getElementById("demo31").style.backgroundColor = color;
  
  

  

}
function stringFontColor()
{
    
}

function changeFColor()
{
     
  var color= document.getElementById('color2').value;
 document.getElementById("demo").style.color = color;
  document.getElementById("demo3").style.color = "magenta";
   document.getElementById("demo4").style.color = "magenta";
    document.getElementById("demo7").style.color = "magenta";
     document.getElementById("demo8").style.color = "magenta";
      document.getElementById("demo11").style.color = "magenta";
       document.getElementById("demo12").style.color = "magenta";
        document.getElementById("demo15").style.color = "magenta";
         document.getElementById("demo16").style.color = "magenta";
          document.getElementById("demo19").style.color = "magenta";
           document.getElementById("demo20").style.color = "magenta";
            document.getElementById("demo23").style.color = "magenta";
             document.getElementById("demo24").style.color = "magenta";
              document.getElementById("demo27").style.color = "magenta";
               document.getElementById("demo28").style.color = "magenta";
                document.getElementById("29").style.color = "magenta";
  
//   document.getElementById("demo").style.backgroundColor = color;
  
//     document.getElementById("demo3").style.backgroundColor = color;
//     document.getElementById("demo4").style.backgroundColor = color;
   
//     document.getElementById("demo7").style.backgroundColor = color;
//     document.getElementById("demo8").style.backgroundColor = color;
    
//     document.getElementById("demo11").style.backgroundColor = color;
//     document.getElementById("demo12").style.backgroundColor = color;
    
//     document.getElementById("demo15").style.backgroundColor = color;
//     document.getElementById("demo16").style.backgroundColor = color;
    
//     document.getElementById("demo19").style.backgroundColor = color;
//     document.getElementById("demo20").style.backgroundColor = color;
    
//     document.getElementById("demo23").style.backgroundColor = color;
//     document.getElementById("demo24").style.backgroundColor = color;
    
//     document.getElementById("demo27").style.backgroundColor = color;
//     document.getElementById("demo28").style.backgroundColor = color;
   
//     document.getElementById("demo31").style.backgroundColor = color;
  

}






          function changeIColor()
          {
            var color = document.getElementById('color3');
            document.getElementById("Design0-flag_update").style.backgroundColor = color;
            
          }
        
  

function calc() 
{
  var price = document.getElementById("ticket_price").innerHTML;
  var noTickets = document.getElementById("number").value;
  var total = parseFloat(price) * noTickets
  if (!isNaN(total))
    document.getElementById("total").innerHTML = total
}





 $(function() {    
   //use this method to add new colors to pallete
   //$.fn.colorPicker.addColors(['000', '000', 'fff', 'fff']);
   
   $('#color1').colorPicker();

   $('#color2').colorPicker();

   $('#color3').colorPicker(); 

   
   
   //fires an event when the color is changed
   //$('#color1').change(function(){
    //alert("color changed");
   //});

   // $("#button1").click(function(){
   //  $("#color1").val("#ffffff");   
   //  $("#color1").change();
   // });

   // $("#button2").click(function(){
   //  $("#color2").val("#000000");   
   //  $("#color2").change();
   // });

  });
  (function ($) {
    /**
     * Create a couple private variables.
    **/
    var selectorOwner,
        activePalette,
        cItterate       = 0,
        templates       = {
            control : $('<div class="colorPicker-picker">&nbsp;</div>'),
            palette : $('<div id="colorPicker_palette" class="colorPicker-palette" />'),
            swatch  : $('<div class="colorPicker-swatch">&nbsp;</div>'),
            hexLabel: $('<label for="colorPicker_hex">Hex</label>'),
            hexField: $('<input type="text" id="colorPicker_hex" />')
        },
        transparent     = "transparent",
        lastColor;

    /**
     * Create our colorPicker function
    **/
    $.fn.colorPicker = function (options) {

        return this.each(function () {
            // Setup time. Clone new elements from our templates, set some IDs, make shortcuts, jazzercise.
            var element      = $(this),
                opts         = $.extend({}, $.fn.colorPicker.defaults, options),
                defaultColor = $.fn.colorPicker.toHex(
                        (element.val().length > 0) ? element.val() : opts.pickerDefault
                    ),
                newControl   = templates.control.clone(),
                newPalette   = templates.palette.clone().attr('id', 'colorPicker_palette-' + cItterate),
                newHexLabel  = templates.hexLabel.clone(),
                newHexField  = templates.hexField.clone(),
                paletteId    = newPalette[0].id,
                swatch, controlText;


            /**
             * Build a color palette.
            **/
            $.each(opts.colors, function (i) {
                swatch = templates.swatch.clone();

                if (opts.colors[i] === transparent) {
                    swatch.addClass(transparent).text('X');
                    $.fn.colorPicker.bindPalette(newHexField, swatch, transparent);
                } else {
                    swatch.css("background-color", "#" + this);
                    $.fn.colorPicker.bindPalette(newHexField, swatch);
                }
                swatch.appendTo(newPalette);
            });


            newHexLabel.attr('for', 'colorPicker_hex-' + cItterate);

            newHexField.attr({
                'id'    : 'colorPicker_hex-' + cItterate,
                'value' : defaultColor
            });

            newHexField.bind("keydown", function (event) {
                if (event.keyCode === 13) {
                    var hexColor = $.fn.colorPicker.toHex($(this).val());
                    $.fn.colorPicker.changeColor(hexColor ? hexColor : element.val());
                }
                if (event.keyCode === 27) {
                    $.fn.colorPicker.hidePalette();
                }
            });

            newHexField.bind("keyup", function (event) {
              var hexColor = $.fn.colorPicker.toHex($(event.target).val());
              $.fn.colorPicker.previewColor(hexColor ? hexColor : element.val());
            });

            $('<div class="colorPicker_hexWrap" />').append(newHexLabel).appendTo(newPalette);

            newPalette.find('.colorPicker_hexWrap').append(newHexField);
            if (opts.showHexField === false) {
                newHexField.hide();
                newHexLabel.hide();
            }

            $("body").append(newPalette);

            newPalette.hide();


            /**
             * Build replacement interface for original color input.
            **/
            newControl.css("background-color", defaultColor);

            newControl.bind("click", function () {
                if( element.is( ':not(:disabled)' ) ) {
                                    $.fn.colorPicker.togglePalette($('#' + paletteId), $(this));
                }
            });

            if( options && options.onColorChange ) {
              newControl.data('onColorChange', options.onColorChange);
            } else {
              newControl.data('onColorChange', function() {} );
            }

            if (controlText = element.data('text'))
                newControl.html(controlText)

            element.after(newControl);

            element.bind("change", function () {
                element.next(".colorPicker-picker").css(
                    "background-color", $.fn.colorPicker.toHex($(this).val())
                );
            });

            element.val(defaultColor);

            // Hide the original input.
            if (element[0].tagName.toLowerCase() === 'input') {
                try {
                    element.attr('type', 'hidden')
                } catch(err) { // oldIE doesn't allow changing of input.type
                    element.css('visibility', 'hidden').css('position', 'absolute')
                }
            } else {
                element.hide();
            }

            cItterate++;
        });
    };

    /**
     * Extend colorPicker with... all our functionality.
    **/
    $.extend(true, $.fn.colorPicker, {
        /**
         * Return a Hex color, convert an RGB value and return Hex, or return false.
         *
         * Inspired by http://code.google.com/p/jquery-color-utils
        **/
        toHex : function (color) {
            // If we have a standard or shorthand Hex color, return that value.
            if (color.match(/[0-9A-F]{6}|[0-9A-F]{3}$/i)) {
                return (color.charAt(0) === "#") ? color : ("#" + color);

            // Alternatively, check for RGB color, then convert and return it as Hex.
            } else if (color.match(/^rgb\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*\)$/)) {
                var c = ([parseInt(RegExp.$1, 10), parseInt(RegExp.$2, 10), parseInt(RegExp.$3, 10)]),
                    pad = function (str) {
                        if (str.length < 2) {
                            for (var i = 0, len = 2 - str.length; i < len; i++) {
                                str = '0' + str;
                            }
                        }

                        return str;
                    };

                if (c.length === 3) {
                    var r = pad(c[0].toString(16)),
                        g = pad(c[1].toString(16)),
                        b = pad(c[2].toString(16));

                    return '#' + r + g + b;
                }

            // Otherwise we wont do anything.
            } else {
                return false;

            }
        },

        /**
         * Check whether user clicked on the selector or owner.
        **/
        checkMouse : function (event, paletteId) {
            var selector = activePalette,
                selectorParent = $(event.target).parents("#" + selector.attr('id')).length;

            if (event.target === $(selector)[0] || event.target === selectorOwner[0] || selectorParent > 0) {
                return;
            }

            $.fn.colorPicker.hidePalette();
        },

        /**
         * Hide the color palette modal.
        **/
        hidePalette : function () {
            $(document).unbind("mousedown", $.fn.colorPicker.checkMouse);

            $('.colorPicker-palette').hide();
        },

        /**
         * Show the color palette modal.
        **/
        showPalette : function (palette) {
            var hexColor = selectorOwner.prev("input").val();

            palette.css({
                top: selectorOwner.offset().top + (selectorOwner.outerHeight()),
                left: selectorOwner.offset().left
            });

            $("#color_value").val(hexColor);

            palette.show();

            $(document).bind("mousedown", $.fn.colorPicker.checkMouse);
        },

        /**
         * Toggle visibility of the colorPicker palette.
        **/
        togglePalette : function (palette, origin) {
            // selectorOwner is the clicked .colorPicker-picker.
            if (origin) {
                selectorOwner = origin;
            }

            activePalette = palette;

            if (activePalette.is(':visible')) {
                $.fn.colorPicker.hidePalette();

            } else {
                $.fn.colorPicker.showPalette(palette);

            }
        },

        /**
         * Update the input with a newly selected color.
        **/
        changeColor : function (value) {
            selectorOwner.css("background-color", value);
            selectorOwner.prev("input").val(value).change();

            $.fn.colorPicker.hidePalette();

            selectorOwner.data('onColorChange').call(selectorOwner, $(selectorOwner).prev("input").attr("id"), value);
        },


        /**
         * Preview the input with a newly selected color.
        **/
        previewColor : function (value) {
            selectorOwner.css("background-color", value);
        },

        /**
         * Bind events to the color palette swatches.
        */
        bindPalette : function (paletteInput, element, color) {
            color = color ? color : $.fn.colorPicker.toHex(element.css("background-color"));

            element.bind({
                click : function (ev) {
                    lastColor = color;

                    $.fn.colorPicker.changeColor(color);
                },
                mouseover : function (ev) {
                    lastColor = paletteInput.val();

                    $(this).css("border-color", "#598FEF");

                    paletteInput.val(color);

                    $.fn.colorPicker.previewColor(color);
                },
                mouseout : function (ev) {
                    $(this).css("border-color", "#000");

                    paletteInput.val(selectorOwner.css("background-color"));

                    paletteInput.val(lastColor);

                    $.fn.colorPicker.previewColor(lastColor);
                }
            });
        }
    });

    /**
     * Default colorPicker options.
     *
     * These are publibly available for global modification using a setting such as:
     *
     * $.fn.colorPicker.defaults.colors = ['151337', '111111']
     *
     * They can also be applied on a per-bound element basis like so:
     *
     * $('#element1').colorPicker({pickerDefault: 'efefef', transparency: true});
     * $('#element2').colorPicker({pickerDefault: '333333', colors: ['333333', '111111']});
     *
    **/
    $.fn.colorPicker.defaults = {
        // colorPicker default selected color.
        pickerDefault : "FFFFFF",

        // Default color set.
        colors : [
            '000000', '993300', '333300', '000080', '333399', '333333', '800000', 'FF6600',
            '808000', '008000', '008080', '0000FF', '666699', '808080', 'FF0000', 'FF9900',
            '99CC00', '339966', '33CCCC', '3366FF', '800080', '999999', 'FF00FF', 'FFCC00',
            'FFFF00', '00FF00', '00FFFF', '00CCFF', '993366', 'C0C0C0', 'FF99CC', 'FFCC99',
            'FFFF99', 'CCFFFF', '99CCFF', 'FFFFFF'
        ],

        // If we want to simply add more colors to the default set, use addColors.
        addColors : [],

        // Show hex field
        showHexField: true
    };

})(jQuery);


  </script>

  <script src="https://d3fu7mr2g5m5ku.cloudfront.net/assets/node_modules/opentype.js/dist/opentype.min.js" defer=""></script>
  <script src="https://d3fu7mr2g5m5ku.cloudfront.net/assets/node_modules/svg.js/dist/svg.min.js" defer=""></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" async=""></script>

<link rel="alternate" hreflang="en" href="https://www.bicistickers.com/en/">
<link rel="alternate" hreflang="de" href="https://www.bicistickers.com/de/">
<link rel="alternate" hreflang="pt" href="https://www.bicistickers.com/pt-pt/">
<link rel="alternate" hreflang="es" href="https://www.bicistickers.com/es/">
<link rel="alternate" hreflang="it" href="https://www.bicistickers.com/it/">
<link rel="alternate" hreflang="fr" href="https://www.bicistickers.com/fr/">
<link rel="alternate" hreflang="cs" href="https://www.bicistickers.com/cs/">
<link rel="alternate" hreflang="da" href="https://www.bicistickers.com/da/">
<link rel="alternate" hreflang="no" href="https://www.bicistickers.com/no/">
<link rel="alternate" hreflang="nl" href="https://www.bicistickers.com/nl/">
<link rel="alternate" hreflang="pl" href="https://www.bicistickers.com/pl/">
<link rel="alternate" hreflang="sv" href="https://www.bicistickers.com/sv/">
<link rel="alternate" hreflang="fi" href="https://www.bicistickers.com/fi/">

<!-- This site is optimized with the Yoast SEO plugin v11.6 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="https://www.bicistickers.com/en/">
<script type="application/ld+json" class="yoast-schema-graph yoast-schema-graph--main">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://www.bicistickers.com/en/#website","url":"https://www.bicistickers.com/en/","name":"Bicistickers.com","potentialAction":{"@type":"SearchAction","target":"https://www.bicistickers.com/en/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"https://www.bicistickers.com/en/#webpage","url":"https://www.bicistickers.com/en/","inLanguage":"en-US","name":"Bike Name Stickers with Country Flags - Customizable - bicistickers.com","isPartOf":{"@id":"https://www.bicistickers.com/en/#website"},"datePublished":"2018-01-30T10:41:27+00:00","dateModified":"2019-07-23T12:11:23+00:00"}]}</script>
<!-- / Yoast SEO plugin. -->

<link rel="dns-prefetch" href="//s.w.org">
<link rel="stylesheet" id="embedpress-css" href="https://www.bicistickers.com/wp-content/plugins/embedpress/assets/css/embedpress.css?ver=4.9.4" type="text/css" media="all">
<link rel="stylesheet" id="bodhi-svgs-attachment-css" href="https://www.bicistickers.com/wp-content/plugins/svg-support/css/svgs-attachment.css?ver=4.9.4" type="text/css" media="all">
<link rel="https://api.w.org/" href="https://www.bicistickers.com/wp-json/">
<link rel="shortlink" href="https://www.bicistickers.com/en/">
<meta name="generator" content="WPML ver:4.0.4 stt:9,12,38,1,18,4,3,27,39,41,42,2,51;">

<!-- This Open Graph data is managed by Alex MacArthur's Complete Open Graph plugin. (v3.2.2). -->
<!-- https://wordpress.org/plugins/complete-open-graph/ -->
<meta property="og:site_name" content="Bicistickers.com">
<meta property="og:url" content="https://www.bicistickers.com/en/">
<meta property="og:locale" content="en_US">
<meta property="og:description" content="Bicistickers offers the highest quality bike name stickers with country flags and decals to individual cyclists, cycling teams and all sport enthusiasts all around the world. Our decals are used by road cyclist as well as mountain bikers. Customized your bike frame or helmet with our custom bike nam">
<meta property="og:title" content="Bike Name Stickers">
<meta property="og:type" content="website">
<meta property="og:image" content="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/07/bicistickers-logo.jpg">
<meta property="og:image:width" content="690">
<meta property="og:image:height" content="438">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Bike Name Stickers">
<meta name="twitter:image" content="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/07/bicistickers-logo.jpg">
<meta name="twitter:description" content="Bicistickers offers the highest quality bike name stickers with country flags and decals to individual cyclists, cycling teams and all sport enthusiasts all around the world. Our decals are used by road cyclist as well as mountain bikers. Customized your bike frame or helmet with our custom bike nam">
<!-- End Complete Open Graph. | 0.035202980041504s -->


<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer',"GTM-TVK6J7")</script>
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init',"783262895169731");fbq('track','PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=783262895169731&ev=PageView&noscript=1"></noscript>
<script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/866565903/?random=1597823901156&amp;cv=9&amp;fst=1597823901156&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=2&amp;u_tz=330&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2wg871&amp;sendb=1&amp;ig=1&amp;data=ecomm_pagetype%3Dcontent&amp;frm=0&amp;url=https%3A%2F%2Fwww.bicistickers.com%2Fen&amp;tiba=Bike%20Name%20Stickers%20with%20Country%20Flags%20-%20Customizable%20-%20bicistickers.com&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script>


   <style>
   
   @font-face{	font-family: 'Futura Bold Oblique' ;
	src: url('http://igeekteam.net/sticker/wp-content/themes/twentytwenty-child/Futura Bold Oblique.otf');
}


     body {
    overflow-x: hidden;
}
button.group-itm.chooseIconBtn {
    height: 80px;
}
button.close {
    width: 20px;
    height: 20px;
}
  button.btn.btn-default {
    width: 59px;
    height: 50px;
}

button.tablinks {
    border: none;
    height: 80px;
}

.tabcontent {
  float: left;
  padding: 0px 12px;
  border-style: dashed;
/*
*/  width: 98%;
 /* border-left: none;*/
  height: 150px;
}
.tab
{
  text-align: left;
}
.span
{
text-decoration-color: red;

}
button.tablinks {
    padding: 0;
    border-radius: 15px;
    width: 200px;
}

button.tablinks p {
    border-radius: 10px 10px 1px 1px;
   
    
    
}

button.tablinks {
    border: none;
}

.editorTabs-preview p img {
    width: 30px;
}

.editorTabs-preview p {
    width: 160px;
    margin: auto;
    margin-top: 15px;
    margin-bottom: 15px;
    font-size: 18px;
}

.tab button.tablinks {
    margin: 15px;
}

.tab {
    width: 80%;
    margin: auto;
}

h2.choose-h2 {
    font-weight: 900;
    text-align: center;
    margin: 30px 0;
    font-style: italic;
}

.bg-image {
  /* The image used */
  background-image: url("http://igeekteam.net/sticker/wp-content/uploads/2020/08/home-scaled.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
}
.button4 
{
  border-radius: 12px;
}

.button2 
{
  width:87%;
  height: 32px;
}
button.button.button2 {
    width: 287px;
}

.button1
 {
  width: 140px;
   height: 32px;
}

  .button5
  {
    width: 20px;
    height: 20px;

  }
  
 



button {
    width: 60px;
    height: 25px;
}






body { margin: 0; padding: 0; font: 80%/1.5 Arial,Helvetica,sans-serif; color: #111; background-color: #FFF; }
h2 { margin: 0px; padding: 10px; font-family: Georgia, "Times New Roman", Times, serif; font-size: 200%; font-weight: normal; color: #FFF; background-color: #CCC; border-bottom: #BBB 2px solid; }
p#copyright { margin: 20px 10px; font-size: 90%; color: #999; }

/* Form styles */
div.form-container { margin: 10px; padding: 5px; background-color: #FFF; }

p.legend { margin-bottom: 1em; }
p.legend em { color: #C00; font-style: normal; }

div.form-container div.controlset {display: block; float:left; width: 100%; padding: 0.25em 0;}

div.form-container div.controlset label, 
div.form-container div.controlset input,
div.form-container div.controlset div { display: inline;   }

div.form-container div.controlset label { width: 200px;}

div.colorPicker-picker {
    height: 25px;
    width: 32px;
    padding: 0 !important;
    border: 1px solid #ccc;
    background: url(../arrow.gif) no-repeat top right;
    cursor: pointer;
    line-height: 16px;
    font-size: 0.75em;
    font-weight: bold;
    text-align: center;
    margin-top: 1px;
}

div.colorPicker-palette {
  width: 110px;
  position: absolute;
  border: 1px solid #598FEF;
  background-color: #EFEFEF;
  padding: 2px;
  z-index: 9999;
}
  div.colorPicker_hexWrap {width: 100%; float:left ;  visibility: hidden; }
  div.colorPicker_hexWrap label {font-size: 95%; color: #2F2F2F; margin: 5px 2px; width: 25%;   visibility: hidden;}
  div.colorPicker_hexWrap input {
    margin: 5px 2px;
    padding: 0;
    font-size: 95%;
    border: 1px solid #000;
    width: 65%;
     visibility: hidden;
}

div.colorPicker-swatch {
    height: 12px;
    width: 12px;
    border: 0px solid #005;
    margin: 2px;
    float: left;
    cursor: pointer;
    line-height: 12px;
    border-radius: 50px;
}


input#number {
    width: 110px;
    margin-left: 53px;
}

input[type='radio'][name='buttonGroup'] { display:none; }
label#glo {
  display:inline-block;
  padding:3px;
  border:1px solid #e0e0e0;
  border-radius:3px;
  background-color:#F0F0F0;
  width:10em;
  text-align:center;
}

/* Clicking a label will select its corresponding hidden radio button
   We can select that radio buttons sibling label and style it. */
input[type='radio'][name='buttonGroup']:checked + label#glo { background-color:black; }
/*input#color11 {
    margin-left: -50px;
   
}*/


button.button.button2 {
    width: 100%;
}
img#ic {
    position: absolute;
}

button#total1 {
    width: 100%;
}
p#pt {
    visibility: hidden;
}

label#fc {
    margin-left: 15px;
}

p#nkit {
    margin-top: 30px;
    margin-left: 30px;
}
label#ic {
    padding-left: 50%;
    margin-left: 29px;
}
.colorPicker-picker {
    float: right;
    margin-left: -50px;
}
input[type='radio'][name='buttonGroup'] { display:none; }
label#glo {
  display:inline-block;
  padding:3px;
  border:1px solid #e0e0e0;
  border-radius:3px;
  background-color:#F0F0F0;
  width:10em;
  text-align:center;
}

/* Clicking a label will select its corresponding hidden radio button
   We can select that radio buttons sibling label and style it. */
input[type='radio'][name='buttonGroup']:checked + label#glo { background-color:black; }





p.colorbox {
    width: 70%;
}
p.colorboxnew {
    width: 25%;
}
.controlset, .colorbox, .colorboxnew {
    display: inline-block;
}
@font-face {
    font-family: 'Futura Bold Oblique'; /*a name to be used later*/
    src: url(Futura Bold Oblique.otf); /*url('C:\Users\Friend Computer\Desktop\Futura Bold Oblique.otf');*/ /*URL to font*/
}
@media  (max-width: 768px) 


  {
    
    
    .tab button {
    margin: 10px 0 !important;
    width: 48%;
}

.tab {
    width: 100%;
    margin: 10px auto !important;
}
    
    
    
    
    .bg-image {

    height: 200px;
}
form-group {
    margin-bottom: 15px;
    width: max-content;
}
.col-xs-6 {
    width: 100%;
}
 
.col-xs-6.form-group.top {
    width: 275px;
}
.col-xs-6.form-group.bottom {
    width: 275px;
}

.button2 
{
  width: 86%;
  height: 32px;
}


.col-xs-6.form-group.bottom {
    width: 279px;
}
.col-xs-6.form-group.max-width {
    width: auto;
}

.col-xs-6.form-group.max-width .button1 {
   width: 100px;
  
 }
 .myDiv.right {
    display: table-cell;
}
.myDiv1.bottom {
    display: table-footer-group;
}


}
.myDiv.left {
    
    display: table-row;
}

@media  (min-width: 800px) {

.col-xs-6.form-group.new-file {
    margin-top: -73px;
}

 .col-md-6.right
  {
    float:right;
  }


  
}

</style>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="bg-image">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <h1></h1>
      </div>
    </div>
  </div>
</div>
  <div class="col-md-12">

    <div class="col-md-6 right">
      <h2 class="choose-h2">CHOOSE YOUR DESIGN</h2>
    <div class="tab">
    
          <button  class="tablinks" onclick="openDesign(event,'Design0')"   >
            <p  style="background-color:red; color:#fff; " id="defaultOpen">Design0</p>
            <div class="editorTabs-preview">
            <p class="img_div" > <span id="demo1"></span><span id="demo2"></span><img class= "editorTabs-preview_img" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/flag.jpg"> </p>
           </div>
           </button>
           <button class="tablinks" onclick="openDesign(event, 'Design1')"> <p style="background-color:#000; color:#fff;" >Design1</p>
            <div class="editorTabs-preview">
           <p class="img_div" > <span id="demo5"></span><span id="demo6"></span> <img class= "editorTabs-preview_img" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/flag.jpg"> </p>
           </div></button><br>
           <br>
           
               

           <button class="tablinks" onclick="openDesign(event, 'Design2')"> <p style="background-color:#000; color:#fff;" >Design2</p>
            <div class="editorTabs-preview">
            <p class="img_div" > <span id="demo9"></span><span id="demo10"> </span><img class= "editorTabs-preview_img" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/flag.jpg"> </p>
           </div></button>
           <button class="tablinks" onclick="openDesign(event, 'Design3')"> <p style="background-color:#000; color:#fff;" >Design3</p>
            <div class="editorTabs-preview">
            <p class="img_div" > <span id="demo13"></span><span id="demo14"></span> <img class= "editorTabs-preview_img" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/flag.jpg"> </p>
           </div></button><br>
           <br>
           <button class="tablinks" onclick="openDesign(event, 'Design4')"> <p style="background-color:#000; color:#fff; " >Design4</p>
            <div class="editorTabs-preview">
           <p class="img_div" > <span id="demo17"></span><span id="demo18"> </span><img class= "editorTabs-preview_img" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/flag.jpg"> </p>
           </div></button>
           <button class="tablinks" onclick="openDesign(event, 'Design5')"> <p style="background-color:#000; color:#fff;" >Design5</p>
            <div class="editorTabs-preview">
           <p class="img_div" > <span id="demo21"></span><span id="demo22"></span> <img class= "editorTabs-preview_img" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/flag.jpg"> </p>
           </div></button><br>
           <br>
           <button class="tablinks" onclick="openDesign(event, 'Design6')"> <p style="background-color:#000; color:#fff;" >Design6</p>
            <div class="editorTabs-preview">
           <p class="img_div" > <span id="demo25"></span><span id="demo26"></span> <img class= "editorTabs-preview_img" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/flag.jpg"> </p>
           </div></button>
           <button class="tablinks" onclick="openDesign(event, 'Design7')"> <p style="background-color:#000; color:#fff; " >Design7</p>
            <div class="editorTabs-preview">
           <p class="img_div" > <span id="demo29"></span><span id="demo30"></span> <img class= "editorTabs-preview_img" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/flag.jpg"> </p>
           </div></button><br>
        </div>
        
   
        
    </div>


      <div class="col-md-6 left">
      <h2 class="choose-h2">CUSTOMIZE</h2>
      <p align="center">kit of 6 large and 6 small stickers</p>
      <div id="Design0" class="tabcontent">
                  
                 <font face = "Futura Bold Oblique"><h3 align="left"><b id="align"></b></h3>
                   <p align="left"><b><span id="demo"></span><span id="demo3"></span></p></b></p></font>
                   <script>
                            function myFunction() {
                              var x = document.getElementById("name").value;
                              var y = document.getElementById("sname").value;
                             
                               document.getElementById("demo").innerHTML = x;
                               document.getElementById("demo1").innerHTML = x;
                               document.getElementById("demo2").innerHTML = y;
                               document.getElementById("demo3").innerHTML = y;
                              
                               document.getElementById("demo4").innerHTML = x;
                               document.getElementById("demo5").innerHTML = x;
                               document.getElementById("demo6").innerHTML = y;
                               document.getElementById("demo7").innerHTML = y;
                               document.getElementById("demo8").innerHTML = x;
                               document.getElementById("demo9").innerHTML = x;
                               document.getElementById("demo10").innerHTML = y;
                               document.getElementById("demo11").innerHTML = y;
                               document.getElementById("demo12").innerHTML = x;
                               document.getElementById("demo13").innerHTML = x;
                               document.getElementById("demo14").innerHTML = y;
                               document.getElementById("demo15").innerHTML = y;
                               document.getElementById("demo16").innerHTML = x;
                               document.getElementById("demo17").innerHTML = x;
                               document.getElementById("demo18").innerHTML = y;
                               document.getElementById("demo19").innerHTML = y;
                               document.getElementById("demo20").innerHTML = x;
                               document.getElementById("demo21").innerHTML = x;
                               document.getElementById("demo22").innerHTML = y;
                               document.getElementById("demo23").innerHTML = y;
                               document.getElementById("demo20").innerHTML = x;
                               document.getElementById("demo21").innerHTML = x;
                               document.getElementById("demo22").innerHTML = y;
                               document.getElementById("demo23").innerHTML = y;
                               document.getElementById("demo24").innerHTML = x;
                               document.getElementById("demo25").innerHTML = x;
                               document.getElementById("demo26").innerHTML = y;
                               document.getElementById("demo27").innerHTML = y;
                               document.getElementById("demo28").innerHTML = x;
                               document.getElementById("demo29").innerHTML = x;
                               document.getElementById("demo30").innerHTML = y;
                               document.getElementById("demo31").innerHTML = y;
                               
                                                           
                             

                              }



                </script>
            </div>
            <div id="Design1" class="tabcontent">
                 <font face = "Futura Bold Oblique"><h3 align="left"><b id="align"></b></h3>
                   <p align="left"><b><span id="demo4"></span><span id="demo7"></span></b></p></font>
                  <!--  <img src="heroimage1.jpg"> -->
                  
            </div>
            <div id="Design2" class="tabcontent">
                 <font face = "Futura Bold Oblique"><h3 align="left"><b id="align"></b></h3>
                   <p align="left"><b> <p align="left"><b><span id="demo8"></span><span id="demo11"></span></b></p></font>

                

            </div>
            <div id="Design3" class="tabcontent">
                 <font face = "Futura Bold Oblique"><h3 align="left"><b id="align"></b></h3>
                   <p align="left"><b><span id="demo12"></span><span id="demo15"></span></b></p></font>

                    
            </div>
            <div id="Design4" class="tabcontent">
                 <font face = "Futura Bold Oblique"><h3 align="left"><b id="align"></b></h3>
                   <p align="left"><b><span id="demo16"></span><span id="demo19"></span></b></p></font>


                    
            </div>
            <div id="Design5" class="tabcontent">
                 <font face="Futura Bold Oblique"><h3 align="left"><b id="align"></b></h3>
                   <p align="left"><b><span id="demo20"></span><span id="demo23"></span></b></p></font>
                   
            </div>
            <div id="Design6" class="tabcontent">
                 <font face="Futura Bold Oblique"><h3 align="left"><b id="align"></b></h3>
                   <p align="left"><b><span id="demo24"></span><span id="demo27"></span></b></p></font>

                   
            </div>
            <div id="Design7" class="tabcontent">
                 <font face="Futura Bold Oblique"<h3 align="left"><b id="align"></b></h3>
                   <p align="left"><b><span id="demo28"></span><span id="demo31"></span></b></p></font>


                     
            </div>
            <div><br><h4 align="center"><b>SMALL SIZE</b> Height 12mm x Length XXXXmm (max 100mm)</h4>
            <h4 align="center"><b>MEDIUM SIZE</b> Height 18mm x Length XXXXmm (max 100mm)</h4><br>
          </div>




           <form action="/action_page.php">

            <div class="col-xs-6 form-group top" >
                     
                     <input type="text" id="name" class="form-control" onkeyup="myFunction()" placeholder="First Name" maxlength = "10" />
            </div>
            <div class="col-xs-6 form-group bottom">
                     
                      <input type="text" id="sname" class="form-control" onkeyup="myFunction()" placeholder="Last Name"  maxlength = "10" />

                     
                       
            </div>

             <div class="col-xs-6 form-group top">

               <button type="button" class="button button2" data-toggle="modal" data-target="#myModal1">Select Country</button>

                



        </div>
        
<div class="col-xs-6 form-group bottom">
               
               <img src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/pencil1.png" id="ic"> 
              <button type="button" class="button button2" data-toggle="modal" data-target="#myModal" id="icon">Select Icon</button>


</div>

                  <div class="col-xs-6 form-group max-width">
                  <h1  align="center" id="h1">Finish</h1>
                   
  
            <input type="radio" name="buttonGroup" value="one" id="one"><label for="one" id="glo">Glossy</label>
           <input type="radio" name="buttonGroup" value="two" id="two"><label for="two" id="glo">Matte</label>

            </div>
              
             <div class="col-xs-6 form-group ">
     <div class="form-container">
                  
    <fieldset>
      <div class="mydiv">
      <div class="controlset"><p class="colorbox"><label>Background color</label> <input id="color1" type="text" name="color1" value="#333399" onclick="changeColor()"  /></p>
       <p class="colorboxnew"><input type="button" id="color11" name="color1" value="apply" onclick="changeColor()" />
       </p></div>
     </div>
    
       <div class="mydiv11">
     <div class="controlset"><p class="colorbox"><label>Font color</label> <input id="color2" type="text" name="color2" value="#FF0000" onclick="changeFColor()" /></p>
     
     <p class="colorboxnew"><input type="button" id="color22" name="color22" value="apply" onclick="changeFColor()" />
     
     </p>
     <script >document.getElementById("color2").onclick = function(){
  document.getElementById("demo").style.color = 'color';
}</script></div></div>
    

        
       
        
     



      <div class="mydiv22">
      <div class="controlset"><p class="colorbox"><label>Icon color</label> <input id="color3" type="text" name="color3" value="#993300" onclick="changeIColor()" /></p>
      <p class="colorboxnew"><input type="button" id="color33" name="color33" value="apply" onclick="changeIColor()" />
      
      </p></div>
    </div>
        
       
       
        



      

      

    </fieldset>
  </div>
</div>
    
    
    
  <div class="col-xs-6 form-group new-file">
               

            <p id="nkit">N Kit :<input id="number" type="number"    value="1" oninput="calc()" /></p>
               <p id="pt">Price Per ticket : €<span id="ticket_price">16.90</span></p>

              
             </div>


              <div class="col-xs-12 form-group">
                
                        <div class="col-xs-2">
                        </div>  
                        <div class="col-xs-2">
                          <img src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/paypalexpress.svg" width="100px" id="pay" >
                        </div> 
                        <div class="col-xs-2">
                          <img src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/mastercard.svg" width="100px" id="master">
                        </div> 
                        <div class="col-xs-2">
                          <img src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/visa.svg" width="100px" id="visa">
                        </div> 
                        <div class="col-xs-2">
                          <img src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/22.png" width="100px" id="satis">
                        </div> 
                        <div class="col-xs-2">
                        </div> 
                        
                    </div>

              
                     <div class="col-md-12 form-group">
                       
                       <p id="sub" style="background-color: red; border-color: black; color: white;" align="center">Free Shipping</p>
                        <button type="submit" id="total1" style="background-color: black; border-color: black; color: white;" align="center" value=" Go To Checkout "><b>Go To Checkout  <span id="total" >€ 16.90</span></b></button>








                     </div> 


                                
            
      
        </form>

           </div>
    </div>
  </div>

  </body>

<footer>


           <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="modaClose1">&times;</button>
          <h4 class="modal-title">Select Country</h4>
        </div>
        <div class="modal-body">
         <div class="h1">
          <div class="group-source">
             <input type="search" id="search" name="search" placeholder="Search  your Content">
    <h3 class="group-header">Recommended</h3>
       <button name="icon" data-key="11171" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in.svg" data-title="India" onclick="updateFlag('11171');return false;" onclick="myFunction()">
    <img id="11171" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in.png 703w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in-58x39.png 58w" sizes="38px"><strong>India</strong><i>Choose a flag</i>
  </button>

  <button name="icon" data-key="11202" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ing.svg" data-title="Ingria" onclick="updateFlag('11202');return false;">
    <img id="11202" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ing.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ing.png 532w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ing-300x183.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ing-58x35.png 58w" sizes="38px"><strong>Ingria</strong><i>Choose a flag</i>
  </button>
  
  
                  <h3 class="group-header">A</h3>
                  <button name="icon" data-key="9817" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/af-1.svg" data-title="Afghanistan"  onclick="updateFlag('9817');return false;">
                  <img id="9817" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/af-1.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/af-1.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/af-1-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/af-1-58x39.png 58w" sizes="38px"><strong>Afghanistan</strong><i>Choose a flag</i>
                </button>




                <button name="icon" data-key="9834" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ax-1.svg" data-title="Aland"  onclick="updateFlag('9834');return false;">
                  <img id="9834" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ax-1.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ax-1.png 271w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ax-1-58x38.png 58w" sizes="38px"><strong>Aland</strong><i>Choose a flag</i>
                </button>



                <button name="icon" data-key="9845" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/al-1.svg" data-title="Albanie"  onclick="updateFlag('9845');return false;">
                  <img id="9845" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/al-1.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/al-1.png 365w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/al-1-300x214.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/al-1-58x41.png 58w" sizes="38px"><strong>Albanie</strong><i>Choose a flag</i>
                </button>




                <button name="icon" data-key="9870" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dz.svg" data-title="Algeria"  onclick="updateFlag('9870');return false;">
                  <img id="9870" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dz.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dz.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dz-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dz-58x39.png 58w" sizes="38px"><strong>Algeria</strong><i>Choose a flag</i>
                </button>



              <button name="icon" data-key="9883" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/as.svg" data-title="American Samoa" onclick="updateFlag('9870');return false;">
                <img id="9883" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/as.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/as.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/as-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/as-58x29.png 58w" sizes="38px"><strong>American Samoa</strong><i>Choose a flag</i>
              </button>
                 


                 <button name="icon" data-key="9895" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ad-1.svg" data-title="Andorra"  onclick="updateFlag('9895');return false;">
                  <img id="9895" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ad.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ad.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ad-300x210.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ad-58x41.png 58w" sizes="38px"><strong>Andorra</strong><i>Choose a flag</i>
                </button>
                  
                  <button name="icon" data-key="9909" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ao.svg" data-title="Angola"  onclick="updateFlag('9909');return false;">
                    <img id="9909" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ao.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ao.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ao-58x39.png 58w" sizes="38px"><strong>Angola</strong><i>Choose a flag</i>
                  </button>



                  <button name="icon" data-key="9923" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ai.svg" data-title="Anguilla"  onclick="updateFlag('9923');return false;">
                  <img id="9923" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ai.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ai.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ai-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ai-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ai-58x29.png 58w" sizes="38px"><strong>Anguilla</strong><i>Choose a flag</i>
                </button>



                <button name="icon" data-key="9927" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ag.svg" data-title="Antigua and Barbuda"  onclick="updateFlag('9927');return false;">
                  <img id="9927")src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ag.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ag.png 359w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ag-300x201.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ag-58x39.png 58w" sizes="38px"><strong>Antigua and Barbuda</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="9949" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ar.svg" data-title="Argentina"  onclick="updateFlag('9949');return false;">
                  <img id="9949" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ar.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ar.png 417w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ar-300x187.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ar-58x36.png 58w" sizes="38px"><strong>Argentina</strong><i>Choose a flag</i>
                </button>


                <button name="icon" data-key="9963" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/am.svg" data-title="Armenia"  onclick="updateFlag('9963');return false;">
                  <img id="9963" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/am.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/am.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/am-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/am-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/am-58x29.png 58w" sizes="38px"><strong>Armenia</strong><i>Choose a flag</i>
                </button>


                <button name="icon" data-key="9977" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/aw.svg" data-title="Aruba"  onclick="updateFlag('9977');return false;">
                  <img id="9977" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/aw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/aw.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/aw-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/aw-58x39.png 58w" sizes="38px"><strong>Aruba</strong><i>Choose a flag</i>
                </button>


               


              <button name="icon" data-key="13977" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/au.svg" data-title="Australia"  onclick="updateFlag('13977');return false;">
                <img id="13977" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/au.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/au.png 667w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/au-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/au-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/au-200x100.png 200w" sizes="38px"><strong>Australia</strong><i>Choose a flag</i>
              </button>


              <button name="icon" data-key="13385" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1-fix.svg" data-title="Australia &amp;#8211; map"  onclick="updateFlag('13385');return false;">
                <img id="13385" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1.png 1941w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1-300x247.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1-768x633.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1-1024x844.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1-576x475.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1-992x818.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1-1200x989.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/australia-1296727-1-58x48.png 58w" sizes="38px"><strong>Australia – map</strong><i>Choose a flag</i>
              </button>


              <button name="icon" data-key="9995" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/at.svg" data-title="Austria"  onclick="updateFlag('9995');return false;">
              <img id ="9995" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/at.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/at.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/at-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/at-58x39.png 58w" sizes="38px"><strong>Austria</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10012" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/az.svg" data-title="Azerbaijan"  onclick="updateFlag('10012');return false;">
            <img id="10012" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/az.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/az.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/az-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/az-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/az-58x29.png 58w" sizes="38px"><strong>Azerbaijan</strong><i>Choose a flag</i>
          </button>

          <h3 class="group-header">B</h3>


          <button name="icon" data-key="10030" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bs.svg" data-title="Bahamas"  onclick="updateFlag('10030');return false;">
              <img id="10030" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bs.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bs.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bs-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bs-58x29.png 58w" sizes="38px"><strong>Bahamas</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10044" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bh.svg" data-title="Bahrain"  onclick="updateFlag('10044');return false;">
            <img id="10044" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bh.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bh.png 781w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bh-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bh-768x461.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bh-576x346.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bh-58x35.png 58w" sizes="38px"><strong>Bahrain</strong><i>Choose a flag</i>
          </button>


          <button name="icon" data-key="10063" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bd.svg" data-title="Bangladesh"  onclick="updateFlag('10063');return false;">
              <img id="10063" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bd.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bd.png 260w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bd-58x35.png 58w" sizes="38px"><strong>Bangladesh</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10077" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bb.svg" data-title="Barbados"  onclick="updateFlag('10077');return false;">
              <img id="10077" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bb.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bb.png 781w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bb-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bb-768x512.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bb-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bb-58x39.png 58w" sizes="38px"><strong>Barbados</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10120" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/by.svg" data-title="Belarus"  onclick="updateFlag('10120');return false;">
              <img id="10120" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/by.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/by.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/by-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/by-58x29.png 58w" sizes="38px"><strong>Belarus</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10134" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/be.svg" data-title="Belgium"  onclick="updateFlag('10134');return false;">
              <img id="10134" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/be.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/be.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/be-58x50.png 58w" sizes="38px"><strong>Belgium</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10148" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bz.svg" data-title="Belize"  onclick="updateFlag('10148');return false;">
              <img id="10148" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bz.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bz.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bz-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bz-58x39.png 58w" sizes="38px"><strong>Belize</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10162" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bj.svg" data-title="Benin"  onclick="updateFlag('10162');return false;">
              <img id="10162" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bj.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bj.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bj-58x39.png 58w" sizes="38px"><strong>Benin</strong><i>Choose a flag</i>
            </button>



            <button name="icon" data-key="10181" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bm-1.svg" data-title="Bermuda"  onclick="updateFlag('10181');return false;">
              <img id="10181" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bm.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bm-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bm-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bm-58x29.png 58w" sizes="38px"><strong>Bermuda</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10185" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bt-1.svg" data-title="Bhutan"  onclick="updateFlag('10185');return false;">
              <img id="10185" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bt.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bt.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bt-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bt-58x39.png 58w" sizes="38px"><strong>Bhutan</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10201" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bo-1.svg" data-title="Bolivia"  onclick="updateFlag('10201');return false;">
              <img id="10201" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bo.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bo.png 573w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bo-300x205.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bo-58x40.png 58w" sizes="38px"><strong>Bolivia</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10215" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bq.svg" data-title="Bonaire"  onclick="updateFlag('10215');return false;">
              <img id="10215" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bq.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bq.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bq-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bq-58x39.png 58w" sizes="38px"><strong>Bonaire</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10218" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ba-fixed.svg" data-title="Bosnia and Herzegovina"  onclick="updateFlag('10218');return false;">
              <img id="10218" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ba-fixed-76x38.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ba-fixed.png 538w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ba-fixed-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ba-fixed-200x100.png 200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ba-fixed-76x38.png 76w" sizes="38px"><strong>Bosnia and Herzegovina</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10232" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bw.svg" data-title="Botswana"  onclick="updateFlag('10232');return false;">
              <img id="10232" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bw.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bw-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bw-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bw-58x39.png 58w" sizes="38px"><strong>Botswana</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="14018" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/br.svg" data-title="Brazil"  onclick="updateFlag('14018');return false;">
              <img id="14018" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/br.png" srcset="" sizes="38px"><strong>Brazil</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10271" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bn.svg" data-title="Brunei"  onclick="updateFlag('10271');return false;">
              <img id="10271" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bn.png 750w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bn-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bn-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bn-58x29.png 58w" sizes="38px"><strong>Brunei</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10290" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bg.svg" data-title="Bulgaria"  onclick="updateFlag('10290');return false;">
              <img id="10290" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bg.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bg-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bg-58x35.png 58w" sizes="38px"><strong>Bulgaria</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10304" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bf.svg" data-title="Burkina Faso"  onclick="updateFlag('10304');return false;">
              <img id="10304" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bf.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bf.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bf-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bf-58x39.png 58w" sizes="38px"><strong>Burkina Faso</strong><i>Choose a flag</i>
            </button>

            <h3 class="group-header">C</h3>


            <button name="icon" data-key="10323" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kh.svg" data-title="Cambodia"  onclick="updateFlag('10323');return false;">
                <img id="10323" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kh.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kh.png 326w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kh-300x191.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kh-58x37.png 58w" sizes="38px"><strong>Cambodia</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="10337" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cm.svg" data-title="Cameroon"  onclick="updateFlag('10337');return false;">
                <img id="10337" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cm.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cm-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cm-58x39.png 58w" sizes="38px"><strong>Cameroon</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="10356" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ca.svg" data-title="Canada"  onclick="updateFlag('10356');return false;">
                <img id="10356" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ca.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ca.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ca-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ca-58x29.png 58w" sizes="38px"><strong>Canada</strong><i>Choose a flag</i>
              </button>


              <button name="icon" data-key="10397" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ky-1.svg" data-title="Cayman Islands"  onclick="updateFlag('10397');return false;">
                  <img id="10397" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ky.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ky.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ky-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ky-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ky-58x29.png 58w" sizes="38px"><strong>Cayman Islands</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="10405" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cf.svg" data-title="Central Africa Republic"  onclick="updateFlag('10405');return false;">
                    <img id="10405" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cf.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cf.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cf-58x39.png 58w" sizes="38px"><strong>Central Africa Republic</strong><i>Choose a flag</i>
                  </button>


                  <button name="icon" data-key="10427" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/td.svg" data-title="Chad"  onclick="updateFlag('10427');return false;">
                  <img id="10427" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/td.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/td.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/td-58x39.png 58w" sizes="38px"><strong>Chad</strong><i>Choose a flag</i>
                 </button>


                 <button name="icon" data-key="10444" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cl.svg" data-title="Chile"  onclick="updateFlag('10444');return false;">
                  <img id="10444" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cl.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cl.png 781w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cl-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cl-768x512.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cl-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cl-58x39.png 58w" sizes="38px"><strong>Chile</strong><i>Choose a flag</i>
                </button>
                     

                     <button name="icon" data-key="10458" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cn.svg" data-title="China"  onclick="updateFlag('10458');return false;">
                  <img id="10458" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cn.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cn-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cn-58x39.png 58w" sizes="38px"><strong>China</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="10472" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cx.svg" data-title="Christmas Island"  onclick="updateFlag('10472');return false;">
                <img id="10472" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cx.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cx.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cx-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cx-58x29.png 58w" sizes="38px"><strong>Christmas Island</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="10482" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/co.svg" data-title="Colombia"  onclick="updateFlag('10482');return false;">
                <img id="10482" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/co.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/co.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/co-58x39.png 58w" sizes="38px"><strong>Colombia</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="10499" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/km.svg" data-title="Comoros"  onclick="updateFlag('10499');return false;">
                <img id="10499" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/km.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/km.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/km-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/km-58x35.png 58w" sizes="38px"><strong>Comoros</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="10513" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cd.svg" data-title="Congo (Zaire)"  onclick="updateFlag('10513');return false;">
              <img id="10513" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cd.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cd.png 417w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cd-300x225.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cd-58x44.png 58w" sizes="38px"><strong>Congo (Zaire)</strong><i>Choose a flag</i>
            </button>



            <button name="icon" data-key="10517" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cg.svg" data-title="Congo-Brazzaville"  onclick="updateFlag('10517');return false;">
              <img id="10517" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cg.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cg-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cg-58x39.png 58w" sizes="38px"><strong>Congo-Brazzaville</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10533" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cr.svg" data-title="Costa Rica"  onclick="updateFlag('10533');return false;">
              <img id="10533" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cr.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cr-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cr-58x35.png 58w" sizes="38px"><strong>Costa Rica</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="53124" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/Flag_of_Costa_Rica_state.svg" data-title="Costa Rica (state)"  onclick="updateFlag('53124');return false;">
              <img id="53124" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/flag_of_costa_rica_state-76x46.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/flag_of_costa_rica_state.png 1000w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/flag_of_costa_rica_state-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/flag_of_costa_rica_state-768x461.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/flag_of_costa_rica_state-576x346.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/flag_of_costa_rica_state-992x595.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/flag_of_costa_rica_state-200x120.png 200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/07/flag_of_costa_rica_state-76x46.png 76w" sizes="38px"><strong>Costa Rica (state)</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="51567" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/11/Flag_of_Croatia-long-opt.svg" data-title="Croatia"  onclick="updateFlag('51567');return false;">
              <img id="51567" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/11/flag_of_croatia-long-76x38.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/11/flag_of_croatia-long.png 785w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/11/flag_of_croatia-long-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/11/flag_of_croatia-long-768x384.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/11/flag_of_croatia-long-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/11/flag_of_croatia-long-200x100.png 200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/11/flag_of_croatia-long-76x38.png 76w" sizes="38px"><strong>Croatia</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="14053" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/hr.svg" data-title="Croatia (2:3)"  onclick="updateFlag('14053');return false;">
            <img id="14053" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/hr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/hr.png 267w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/hr-150x150.png 150w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/hr-200x200.png 200w" sizes="38px"><strong>Croatia (2:3)</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="10547" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/Flag_of_Cuba-fixed3.svg" data-title="Cuba"  onclick="updateFlag('10547');return false;">
            <img id="10547" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cu.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cu.png 417w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cu-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cu-58x29.png 58w" sizes="38px"><strong>Cuba</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="10561" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cw.svg" data-title="Curaçao"  onclick="updateFlag('10561');return false;">
              <img id="10561" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cw.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cw-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cw-58x39.png 58w" sizes="38px"><strong>Curaçao</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10564" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cy.svg" data-title="Cyprus"  onclick="updateFlag('10564');return false;">
              <img id="10564" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cy.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cy.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cy-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cy-58x39.png 58w" sizes="38px"><strong>Cyprus</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10577" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cz.svg" data-title="Czech Republic"  onclick="updateFlag('10577');return false;">
              <img id="10577" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cz.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cz.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cz-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cz-58x39.png 58w" sizes="38px"><strong>Czech Republic</strong><i>Choose a flag</i>
            </button>

            <h3 class="group-header">D</h3>

            <button name="icon" data-key="10594" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dk.svg" data-title="Denmark"  onclick="updateFlag('10594');return false;">
              <img id="10594" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dk.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dk.png 193w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dk-58x44.png 58w" sizes="38px"><strong>Denmark</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10608" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dj.svg" data-title="Djibouti"  onclick="updateFlag('10608');return false;">
              <img id="10608" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dj.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dj.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dj-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dj-58x39.png 58w" sizes="38px"><strong>Djibouti</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10622" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dm.svg" data-title="Dominica"  onclick="updateFlag('10622');return false;">
              <img id="10622" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dm.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dm-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dm-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/dm-58x29.png 58w" sizes="38px"><strong>Dominica</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10635" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/do.svg" data-title="Dominican Republic"  onclick="updateFlag('10635');return false;">
              <img id="10635" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/do.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/do.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/do-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/do-58x39.png 58w" sizes="38px"><strong>Dominican Republic</strong><i>Choose a flag</i>
            </button>

            <h3 class="group-header">E</h3>

            <button name="icon" data-key="10653" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tl.svg" data-title="East Timor"  onclick="updateFlag('10653');return false;">
              <img id="10653" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tl.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tl.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tl-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tl-58x29.png 58w" sizes="38px"><strong>East Timor</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10667" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ec.svg" data-title="Ecuador"  onclick="updateFlag('10667');return false;">
          <img id="10667" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ec.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ec.png 750w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ec-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ec-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ec-58x39.png 58w" sizes="38px"><strong>Ecuador</strong><i>Choose a flag</i>
        </button>


        <button name="icon" data-key="10680" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/eg.svg" data-title="Egypt"  onclick="updateFlag('10680');return false;">
          <img id="10680" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/eg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/eg.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/eg-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/eg-58x39.png 58w" sizes="38px"><strong>Egypt</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="10694" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sv.svg" data-title="El Salvador"  onclick="updateFlag('10694');return false;">
          <img id="10694" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sv.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sv.png 554w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sv-300x169.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sv-58x33.png 58w" sizes="38px"><strong>El Salvador</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="10725" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gq-1.svg" data-title="Equatorial Guinea"  onclick="updateFlag('10725');return false;">
          <img id="10725" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gq.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gq.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gq-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gq-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gq-58x39.png 58w" sizes="38px"><strong>Equatorial Guinea</strong><i>Choose a flag</i>
        </button>


        <button name="icon" data-key="10739" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/er.svg" data-title="Eritrea"  onclick="updateFlag('10739');return false;">
            <img id="10739" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/er.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/er.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/er-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/er-58x29.png 58w" sizes="38px"><strong>Eritrea</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="10753" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ee.svg" data-title="Estonia"  onclick="updateFlag('10753');return false;">
            <img id="10753" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ee.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ee.png 516w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ee-300x191.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ee-58x37.png 58w" sizes="38px"><strong>Estonia</strong><i>Choose a flag</i>
          </button>

          <button  name="icon" data-key="10767" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/et.svg" data-title="Ethiopia"  onclick="updateFlag('10767');return false;">
              <img id="10767" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/et.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/et.png 375w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/et-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/et-58x29.png 58w" sizes="38px"><strong>Ethiopia</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="26233" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/04/Flag_of_Europe.svg" data-title="European Union"  onclick="updateFlag('26233');return false;">
              <img id="26233" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/04/flag_of_europe-76x51.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/04/flag_of_europe.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/04/flag_of_europe-200x133.png 200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/04/flag_of_europe-76x51.png 76w" sizes="38px"><strong>European Union</strong><i>Choose a flag</i>
            </button>

            <h3 class="group-header">F</h3>

            <button name="icon" data-key="10785" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fk-1.svg" data-title="Falkland Island"  onclick="updateFlag('10785');return false;">
              <img id="10785" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fk.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fk.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fk-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fk-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fk-58x29.png 58w" sizes="38px"><strong>Falkland Island</strong><i>Choose a flag</i>
            </button> 

            <button name="icon" data-key="10798" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fo.svg" data-title="Faroe Island"  onclick="updateFlag('10798');return false;">
            <img id="10798" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fo.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fo.png 573w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fo-300x218.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fo-58x42.png 58w" sizes="38px"><strong>Faroe Island</strong><i>Choose a flag</i>
          </button>  


          <button name="icon" data-key="10812" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fj-1.svg" data-title="Fiji"  onclick="updateFlag('10812');return false;">
              <img id="10812" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fj.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fj.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fj-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fj-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fj-58x29.png 58w" sizes="38px"><strong>Fiji</strong><i>Choose a flag</i>
            </button>  

            <button name="icon" data-key="10826" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fi.svg" data-title="Finland"  onclick="updateFlag('10826');return false;">
              <img id="10826" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fi.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fi.png 938w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fi-300x183.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fi-768x469.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fi-576x352.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fi-58x35.png 58w" sizes="38px"><strong>Finland</strong><i>Choose a flag</i>
            </button>  

            <button name="icon" data-key="10870" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fr.svg" data-title="France"  onclick="updateFlag('10870');return false;">
              <img id="10870" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fr.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fr-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fr-58x39.png 58w" sizes="38px"><strong>France</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10889" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gf.svg" data-title="French Guiana"  onclick="updateFlag('10889');return false;">
              <img id="10889" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gf.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gf.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gf-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gf-58x39.png 58w" sizes="38px"><strong>French Guiana</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10902" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pf.svg" data-title="French Polynesia"  onclick="updateFlag('10902');return false;">
              <img id="10902" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pf.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pf.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pf-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pf-58x39.png 58w" sizes="38px"><strong>French Polynesia</strong><i>Choose a flag</i>
            </button>


            <h3 class="group-header">G</h3>

            <button name="icon" data-key="10911" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ga.svg" data-title="Gabon"  onclick="updateFlag('10911');return false;">
              <img id="10911" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ga.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ga.png 208w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ga-58x44.png 58w" sizes="38px"><strong>Gabon</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="10930" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gm.svg" data-title="Gambia"  onclick="updateFlag('10930');return false;">
            <img id="10930" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gm.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gm-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gm-58x39.png 58w" sizes="38px"><strong>Gambia</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="10953" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ge-1.svg" data-title="Georgia"  onclick="updateFlag('10953');return false;">
            <img id="10953" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ge.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ge.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ge-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ge-58x39.png 58w" sizes="38px"><strong>Georgia</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="10968" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/de.svg" data-title="Germany"  onclick="updateFlag('10968');return false;">
            <img id="10968" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/de.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/de.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/de-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/de-58x35.png 58w" sizes="38px"><strong>Germany</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="10982" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gh.svg" data-title="Ghana"  onclick="updateFlag('10982');return false;">
              <img id="10982" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gh.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gh.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gh-58x39.png 58w" sizes="38px"><strong>Ghana</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="10995" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gi.svg" data-title="Gibraltar"  onclick="updateFlag('10995');return false;">
                <img id="10995" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gi.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gi.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gi-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gi-58x29.png 58w" sizes="38px"><strong>Gibraltar</strong><i>Choose a flag</i>
              </button>


              <button name="icon" data-key="11004" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gr.svg" data-title="Greece"  onclick="updateFlag('11004');return false;">
              <img id="11004" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gr.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gr-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gr-58x39.png 58w" sizes="38px"><strong>Greece</strong><i>Choose a flag</i>
            </button>


            <button name="icon" data-key="11018" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gl.svg" data-title="Greenland"  onclick="updateFlag('11018');return false;">
              <img id="11018" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gl.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gl.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gl-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gl-58x39.png 58w" sizes="38px"><strong>Greenland</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="11026" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gu-1.svg" data-title="Guam" onclick="updateFlag('11026');return false;">
                <img id="11026" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gu.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gu.png 427w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gu-300x161.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gu-58x31.png 58w" sizes="38px"><strong>Guam</strong><i>Choose a flag</i>
              </button>


              <button name="icon" data-key="11029" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gt-1.svg" data-title="Guatemala"  onclick="updateFlag('11029');return false;">
                <img id="11029" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gt.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gt.png 500w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gt-300x188.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gt-58x36.png 58w" sizes="38px"><strong>Guatemala</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="11042" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gg.svg" data-title="Guernsey"  onclick="updateFlag('11042');return false;">
                <img id="11042" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gg.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gg-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gg-58x39.png 58w" sizes="38px"><strong>Guernsey</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="11045" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gn.svg" data-title="Guinea"  onclick="updateFlag('11045');return false;">
                <img id="11045" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gn.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gn-58x39.png 58w" sizes="38px"><strong>Guinea</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="11058" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gw.svg" data-title="Guinea Bissau"  onclick="updateFlag('11058');return false;">
                <img id="11058" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gw.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gw-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gw-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gw-58x29.png 58w" sizes="38px"><strong>Guinea Bissau</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="11071" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gy.svg" data-title="Guyana"  onclick="updateFlag('11071');return false;">
              <img  id="11071" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gy.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gy.png 260w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gy-58x35.png 58w" sizes="38px"><strong>Guyana</strong><i>Choose a flag</i>
            </button>

            <h3 class="group-header">H</h3>

            <button name="icon" data-key="11090" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ht-1.svg" data-title="Haiti"  onclick="updateFlag('11090');return false;">
              <img id="11092" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ht.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ht.png 260w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ht-58x35.png 58w" sizes="38px"><strong>Haiti</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="11118" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hn.svg" data-title="Honduras"  onclick="updateFlag('11118');return false;">
            <img id="11118" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hn.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hn-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hn-58x29.png 58w" sizes="38px"><strong>Honduras</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="11131" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hk.svg" data-title="Hong Kong"  onclick="updateFlag('11131');return false;">
            <img id="11131" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hk.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hk.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hk-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hk-58x39.png 58w" sizes="38px"><strong>Hong Kong</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="11138" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hu.svg" data-title="Hungary"  onclick="updateFlag('11138');return false;">
          <img id="11138" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hu.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hu.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hu-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hu-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/hu-58x29.png 58w" sizes="38px"><strong>Hungary</strong><i>Choose a flag</i>
        </button>

        <h3 class="group-header">I</h3>

        <button name="icon" data-key="11152" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is.svg" data-title="Iceland"  onclick="updateFlag('11152');return false;">
        <img id="11152" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is.png 1302w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is-300x216.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is-768x553.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is-1024x738.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is-576x415.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is-992x715.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is-1200x865.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/is-58x42.png 58w" sizes="38px"><strong>Iceland</strong><i>Choose a flag</i>
      </button>


          <button name="icon" data-key="11171" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in.svg" data-title="India"  onclick="updateFlag('11171');return false;">
        <img id="11171" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in.png 703w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/in-58x39.png 58w" sizes="38px"><strong>India</strong><i>Choose a flag</i>
      </button>


          <button name="icon" data-key="11188" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/id.svg" data-title="Indonesia"  onclick="updateFlag('11188');return false;">
        <img id="11188" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/id.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/id.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/id-58x39.png 58w" sizes="38px"><strong>Indonesia</strong><i>Choose a flag</i>
      </button>


          <button name="icon" data-key="11209" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ir.svg" data-title="Iran"  onclick="updateFlag('11209');return false;">
        <img id="11209" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ir.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ir.png 328w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ir-300x172.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ir-58x33.png 58w" sizes="38px"><strong>Iran</strong><i>Choose a flag</i>
      </button>

             <button name="icon" data-key="11237" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ie2.svg" data-title="Ireland"  onclick="updateFlag('11237');return false;">
        <img id="11237" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ie.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ie.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ie-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ie-58x29.png 58w" sizes="38px"><strong>Ireland</strong><i>Choose a flag</i>
      </button>


          <button name="icon" data-key="11251" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/im_fixed.svg" data-title="Isle of Man"  onclick="updateFlag('11251');return false;">
        <img id="11251" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/im.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/im.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/im-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/im-58x29.png 58w" sizes="38px"><strong>Isle of Man</strong><i>Choose a flag</i>
      </button>


        <button name="icon" data-key="11255" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/il.svg" data-title="Israel"  onclick="updateFlag('11255');return false;">
      <img id="11255" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/il.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/il.png 344w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/il-300x218.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/il-58x42.png 58w" sizes="38px"><strong>Israel</strong><i>Choose a flag</i>
    </button>


      <button name="icon" data-key="11272" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/it.svg" data-title="Italy"  onclick="updateFlag('11272');return false;">
      <img id="11272" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/it.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/it.png 781w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/it-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/it-768x512.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/it-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/it-58x39.png 58w" sizes="38px"><strong>Italy</strong><i>Choose a flag</i>
      </button>


          <button name="icon" data-key="11286" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ci.svg" data-title="Ivory Coast"  onclick="updateFlag('11286');return false;">
        <img id="11286" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ci.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ci.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ci-58x39.png 58w" sizes="38px"><strong>Ivory Coast</strong><i>Choose a flag</i>
      </button>


      <h3 class="group-header">J</h3>


      
          <button name="icon" data-key="11293" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jm-1.svg" data-title="Jamaica"  onclick="updateFlag('11293');return false;">
        <img id="11293" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jm.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jm-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jm-58x29.png 58w" sizes="38px"><strong>Jamaica</strong><i>Choose a flag</i>
        </button>

              <button name="icon" data-key="11306" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jp.svg" data-title="Japan"  onclick="updateFlag('11306');return false;">
          <img id="11306" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jp.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jp.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jp-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jp-58x39.png 58w" sizes="38px"><strong>Japan</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="11319" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/je.svg" data-title="Jersey"  onclick="updateFlag('11319');return false;">
            <img id="11319" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/je.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/je.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/je-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/je-58x35.png 58w" sizes="38px"><strong>Jersey</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="11322" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jo.svg" data-title="Jordan"  onclick="updateFlag('11322');return false;">
          <img id="11322" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jo.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jo.png 438w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jo-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/jo-58x29.png 58w" sizes="38px"><strong>Jordan</strong><i>Choose a flag</i>
        </button>

        <h3 class="group-header">K</h3>

        <button name="icon" data-key="11338" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kz.svg" data-title="Kazakhstan"  onclick="updateFlag('11338');return false;">
          <img id="11338" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kz.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kz.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kz-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kz-58x29.png 58w" sizes="38px"><strong>Kazakhstan</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="11355" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ke.svg" data-title="Kenya"  onclick="updateFlag('11355');return false;">
          <img id="11355" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ke.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ke.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ke-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ke-58x39.png 58w" sizes="38px"><strong>Kenya</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="11368" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/xk.svg" data-title="Kosovo"  onclick="updateFlag('11368');return false;">
            <img id="11368" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/xk.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/xk.png 438w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/xk-300x214.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/xk-58x41.png 58w" sizes="38px"><strong>Kosovo</strong><i>Choose a flag</i>
          </button>


                <button name="icon" data-key="11371" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kw.svg" data-title="Kuwait"  onclick="updateFlag('11371');return false;">
          <img id="11371" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kw.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kw-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kw-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kw-58x29.png 58w" sizes="38px"><strong>Kuwait</strong><i>Choose a flag</i>
        </button>


        <button name="icon" data-key="11384" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kg-1.svg" data-title="Kyrgyzstan"  onclick="updateFlag('11384');return false;">
          <img id="11384" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kg.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kg-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kg-58x35.png 58w" sizes="38px"><strong>Kyrgyzstan</strong><i>Choose a flag</i>
        </button>

        <h3 class="group-header">L</h3>

        <button name="icon" data-key="11397" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/la.svg" data-title="Laos"  onclick="updateFlag('11397');return false;">
          <img id="11397" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/la.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/la.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/la-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/la-58x39.png 58w" sizes="38px"><strong>Laos</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="11410" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lv.svg" data-title="Latvia"  onclick="updateFlag('11410');return false;">
          <img id="11410" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lv.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lv.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lv-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lv-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lv-58x29.png 58w" sizes="38px"><strong>Latvia</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="11427" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lb.svg" data-title="Lebanon"  onclick="updateFlag('11427');return false;">
          <img id="11427" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lb.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lb.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lb-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lb-58x39.png 58w" sizes="38px"><strong>Lebanon</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="11443" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ls-1.svg" data-title="Lesotho"  onclick="updateFlag('11443');return false;">
          <img id="11443" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ls.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ls.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ls-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ls-58x39.png 58w" sizes="38px"><strong>Lesotho</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="11456" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lr.svg" data-title="Liberia"  onclick="updateFlag('11456');return false;">
          <img id="11456" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lr.png 594w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lr-300x158.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lr-576x304.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lr-58x31.png 58w" sizes="38px"><strong>Liberia</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="11469" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ly.svg" data-title="Libya"  onclick="updateFlag('11469');return false;">
        <img id="11469" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ly.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ly.png 500w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ly-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ly-58x29.png 58w" sizes="38px"><strong>Libya</strong><i>Choose a flag</i>
      </button>

          <button name="icon" data-key="11482" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/li-1.svg" data-title="Liechstenstein"  onclick="updateFlag('11482');return false;">
        <img id="11482" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/li.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/li.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/li-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/li-58x35.png 58w" sizes="38px"><strong>Liechstenstein</strong><i>Choose a flag</i>
      </button>

       <button name="icon" data-key="11509" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lt.svg" data-title="Lithuania"  onclick="updateFlag('11509');return false;">
        <img id="11509" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lt.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lt.png 260w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lt-58x35.png 58w" sizes="38px"><strong>Lithuania</strong><i>Choose a flag</i>
      </button>

      <button name="icon" data-key="11538" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lu.svg" data-title="Luxembourg"  onclick="updateFlag('11538');return false;">
          <img id="11538" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lu.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lu.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lu-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lu-58x35.png 58w" sizes="38px"><strong>Luxembourg</strong><i>Choose a flag</i>
        </button>

        <h3 class="group-header">M</h3>

        <button name="icon" data-key="11551" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mo.svg" data-title="Macau"  onclick="updateFlag('11551');return false;">
          <img id="11551" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mo.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mo.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mo-58x39.png 58w" sizes="38px"><strong>Macau</strong><i>Choose a flag</i>
        </button>


              <button name="icon" data-key="11555" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mg.svg" data-title="Madagascar"  onclick="updateFlag('11555');return false;">
          <img id="11555" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mg.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mg-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mg-58x39.png 58w" sizes="38px"><strong>Madagascar</strong><i>Choose a flag</i>
        </button>

              <button name="icon" data-key="11575" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mw.svg" data-title="Malawi"  onclick="updateFlag('11575');return false;">
          <img id="11575" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mw.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mw-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mw-58x39.png 58w" sizes="38px"><strong>Malawi</strong><i>Choose a flag</i>
        </button>

               <button name="icon" data-key="11588" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my.svg" data-title="Malaysia"  onclick="updateFlag('11588');return false;">
          <img id="11588" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my.png 1458w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my-768x384.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my-1024x512.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my-992x496.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my-1200x600.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/my-58x29.png 58w" sizes="38px"><strong>Malaysia</strong><i>Choose a flag</i>
        </button>

                <button name="icon" data-key="11601" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mv.svg" data-title="Maldives"  onclick="updateFlag('11601');return false;">
            <img id="11601" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mv.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mv.png 375w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mv-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mv-58x39.png 58w" sizes="38px"><strong>Maldives</strong><i>Choose a flag</i>
          </button>


                <button name="icon" data-key="11614" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ml.svg" data-title="Mali"  onclick="updateFlag('11614');return false;">
          <img id="11614" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ml.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ml.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ml-58x39.png 58w" sizes="38px"><strong>Mali</strong><i>Choose a flag</i>
        </button>


                <button name="icon" data-key="11627" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mt.svg" data-title="Malta"  onclick="updateFlag('11627');return false;">
            <img id="11627" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mt.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mt.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mt-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mt-58x39.png 58w" sizes="38px"><strong>Malta</strong><i>Choose a flag</i>
          </button>

                <button name="icon" data-key="11647" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mh.svg" data-title="Marshal Islands"  onclick="updateFlag('11647');return false;">
          <img id="11647" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mh.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mh.png 297w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mh-58x30.png 58w" sizes="38px"><strong>Marshal Islands</strong><i>Choose a flag</i>
        </button>

            <button name="icon" data-key="11660" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mq.svg" data-title="Martinique"  onclick="updateFlag('11660');return false;">
        <img id="11660" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mq.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mq.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mq-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mq-58x39.png 58w" sizes="38px"><strong>Martinique</strong><i>Choose a flag</i>
      </button>


          <button name="icon" data-key="11670" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mr.svg" data-title="Mauritania"  onclick="updateFlag('11670');return false;">
        <img id="11670" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mr.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mr-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mr-58x39.png 58w" sizes="38px"><strong>Mauritania</strong><i>Choose a flag</i>
      </button>

            <button name="icon" data-key="11683" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mu.svg" data-title="Mauritius"  onclick="updateFlag('11683');return false;">
          <img id="11683" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mu.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mu.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mu-58x39.png 58w" sizes="38px"><strong>Mauritius</strong><i>Choose a flag</i>
        </button>


                  <button name="icon" data-key="11699" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mx-1.svg" data-title="Mexico"  onclick="updateFlag('11699');return false;">
              <img id="11699" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mx.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mx.png 438w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mx-300x171.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mx-58x33.png 58w" sizes="38px"><strong>Mexico</strong><i>Choose a flag</i>
            </button>


                    <button name="icon" data-key="11715" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fm.svg" data-title="Micronesia"  onclick="updateFlag('11715');return false;">
            <img id="11715" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fm.png 396w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fm-300x158.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/fm-58x30.png 58w" sizes="38px"><strong>Micronesia</strong><i>Choose a flag</i>
          </button>


                  <button name="icon" data-key="11736" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/md.svg" data-title="Moldova"  onclick="updateFlag('11736');return false;">
            <img id="11736" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/md.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/md.png 938w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/md-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/md-768x384.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/md-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/md-58x29.png 58w" sizes="38px"><strong>Moldova</strong><i>Choose a flag</i>
          </button>

                <button name="icon" data-key="11753" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mc.svg" data-title="Monaco"  onclick="updateFlag('11753');return false;">
          <img id="11753" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mc.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mc.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mc-300x240.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mc-58x46.png 58w" sizes="38px"><strong>Monaco</strong><i>Choose a flag</i>
        </button>


              <button name="icon" data-key="11766" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn.svg" data-title="Mongolia"  onclick="updateFlag('11766');return false;">
          <img id="11766" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn.png 2500w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn-768x384.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn-1024x512.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn-992x496.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn-1200x600.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mn-58x29.png 58w" sizes="38px"><strong>Mongolia</strong><i>Choose a flag</i>
        </button>


              <button name="icon" data-key="11783" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/me.svg" data-title="Montenegro"  onclick="updateFlag('11783');return false;">
          <img id="11783" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/me.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/me.png 333w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/me-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/me-58x29.png 58w" sizes="38px"><strong>Montenegro</strong><i>Choose a flag</i>
        </button>


              <button name="icon" data-key="11797" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ms-1.svg" data-title="Montserrat"  onclick="updateFlag('11797');return false;">
          <img id="11797" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ms.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ms.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ms-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ms-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ms-58x29.png 58w" sizes="38px"><strong>Montserrat</strong><i>Choose a flag</i>
        </button>

              <button name="icon" data-key="11800" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ma.svg" data-title="Morocco"  onclick="updateFlag('11800');return false;">
          <img id="11800" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ma.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ma.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ma-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ma-58x39.png 58w" sizes="38px"><strong>Morocco</strong><i>Choose a flag</i>
        </button>


              <button name="icon" data-key="11814" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mz.svg" data-title="Mozambique"  onclick="updateFlag('11814');return false;">
          <img id="11814" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mz.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mz.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mz-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mz-58x39.png 58w" sizes="38px"><strong>Mozambique</strong><i>Choose a flag</i>
        </button>


              <button name="icon" data-key="11832" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mm.svg" data-title="Myanmar (Burma)"  onclick="updateFlag('11832');return false;">
          <img id="11382" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mm.png 938w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mm-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mm-768x512.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mm-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/mm-58x39.png 58w" sizes="38px"><strong>Myanmar (Burma)</strong><i>Choose a flag</i>
        </button>


        <h3 class="group-header">N</h3>

            <button name="icon" data-key="52235" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/04/Flag_of_Namibia.svg" data-title="Namibia"  onclick="updateFlag('52235');return false;">
        <img id="52235" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/04/flag_of_namibia-76x51.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/04/flag_of_namibia.png 400w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/04/flag_of_namibia-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/04/flag_of_namibia-200x134.png 200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/04/flag_of_namibia-76x51.png 76w" sizes="38px"><strong>Namibia</strong><i>Choose a flag</i>
      </button>

          <button name="icon" data-key="11849" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nr.svg" data-title="Nauru"  onclick="updateFlag('11849');return false;">
        <img id="11849" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nr.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nr-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nr-58x29.png 58w" sizes="38px"><strong>Nauru</strong><i>Choose a flag</i>
      </button>

              <button name="icon" data-key="51821" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/01/Flag_of_Nepal.svg" data-title="Nepal"  onclick="updateFlag('51821');return false;">
            <img id="51821" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/01/flag_of_nepal-62x76.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/01/flag_of_nepal.png 726w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/01/flag_of_nepal-246x300.png 246w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/01/flag_of_nepal-473x576.png 473w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/01/flag_of_nepal-630x768.png 630w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/01/flag_of_nepal-164x200.png 164w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2020/01/flag_of_nepal-62x76.png 62w" sizes="38px"><strong>Nepal</strong><i>Choose a flag</i>
          </button>


                  <button name="icon" data-key="11869" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nl.svg" data-title="Netherlands"  onclick="updateFlag('11869');return false;">
            <img id="11869" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nl.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nl.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nl-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nl-58x39.png 58w" sizes="38px"><strong>Netherlands</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="11890" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nc.svg" data-title="New Caledonia"  onclick="updateFlag('11890');return false;">
            <img id="11890" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nc.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nc.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nc-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nc-58x29.png 58w" sizes="38px"><strong>New Caledonia</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="11906" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nz.svg" data-title="New Zealand"  onclick="updateFlag('11906');return false;">
              <img id="11906" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nz.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nz.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nz-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nz-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nz-58x29.png 58w" sizes="38px"><strong>New Zealand</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="11926" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/Flag_of_Nicaragua_rework5code.svg" data-title="Nicaragua"  onclick="updateFlag('11926');return false;">
                  <img id="11926" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ni.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ni.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ni-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ni-58x35.png 58w" sizes="38px"><strong>Nicaragua</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="11946" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ne.svg" data-title="Niger"  onclick="updateFlag('11946');return false;">
                      <img  id="11946" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ne.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ne.png 365w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ne-300x257.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ne-58x50.png 58w" sizes="38px"><strong>Niger</strong><i>Choose a flag</i>
                    </button>

                    <button name="icon" data-key="11958" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng.svg" data-title="Nigeria"  onclick="updateFlag('11958');return false;">
                  <img id="11958" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng.png 1250w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng-768x384.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng-1024x512.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng-992x496.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng-1200x600.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ng-58x29.png 58w" sizes="38px"><strong>Nigeria</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="11970" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nf.svg" data-title="Norfolk Islands"  onclick="updateFlag('11970');return false;">
                  <img id="11970" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nf.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nf.png 479w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nf-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/nf-58x29.png 58w" sizes="38px"><strong>Norfolk Islands</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="11987" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kp.svg" data-title="North Korea"  onclick="updateFlag('11987');return false;">
                  <img id="11987" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kp.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kp.png 833w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kp-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kp-768x384.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kp-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kp-58x29.png 58w" sizes="38px"><strong>North Korea</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="12014" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/no.svg" data-title="Norway"  onclick="updateFlag('12014');return false;">
                  <img id="12014" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/no.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/no.png 573w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/no-300x218.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/no-58x42.png 58w" sizes="38px"><strong>Norway</strong><i>Choose a flag</i>
                </button>


                <h3 class="group-header">O</h3>

                <button name="icon" data-key="12035" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/om.svg" data-title="Oman"  onclick="updateFlag('12035');return false;">
                    <img id="12035" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/om.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/om.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/om-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/om-58x29.png 58w" sizes="38px"><strong>Oman</strong><i>Choose a flag</i>
                  </button>

                  <h3 class="group-header">P</h3>

                  <button name="icon" data-key="12071" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pk.svg" data-title="Pakistan"  onclick="updateFlag('12071');return false;">
                    <img id="12071" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pk.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pk.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pk-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pk-58x39.png 58w" sizes="38px"><strong>Pakistan</strong><i>Choose a flag</i>
                  </button>

                  <button name="icon" data-key="12084" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pw.svg" data-title="Palau"  onclick="updateFlag('12084');return false;">
                    <img id="12084" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pw.png 417w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pw-300x187.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pw-58x36.png 58w" sizes="38px"><strong>Palau</strong><i>Choose a flag</i>
                  </button>

                  <button name="icon" data-key="12096" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ps.svg" data-title="Palestine"  onclick="updateFlag('12096');return false;">
                    <img id="12096" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ps.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ps.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ps-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ps-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ps-58x29.png 58w" sizes="38px"><strong>Palestine</strong><i>Choose a flag</i>
                  </button>

                  <button name="icon" data-key="12099" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pa.svg" data-title="Panama"  onclick="updateFlag('12099');return false;">
                    <img id="12099" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pa.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pa.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pa-58x39.png 58w" sizes="38px"><strong>Panama</strong><i>Choose a flag</i>
                  </button>

                  <button name="icon" data-key="12112" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pg.svg" data-title="Papua New Guinea"  onclick="updateFlag('12112');return false;">
                    <img id="12112" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pg.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pg-300x224.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pg-58x43.png 58w" sizes="38px"><strong>Papua New Guinea</strong><i>Choose a flag</i>
                  </button>


                  <button name="icon" data-key="12126" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/py-1.svg" data-title="Paraguay"  onclick="updateFlag('12126');return false;">
                    <img src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/py.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/py.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/py-300x165.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/py-58x32.png 58w" sizes="38px"><strong>Paraguay</strong><i>Choose a flag</i>
                  </button>

                  <button name="icon" data-key="12142" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1.svg" data-title="Peru"  onclick="updateFlag('12142');return false;">
                    <img id="12142" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1.png 1875w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1-768x512.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1-1024x683.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1-992x661.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1-1200x800.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pe-1-58x39.png 58w" sizes="38px"><strong>Peru</strong><i>Choose a flag</i>
                  </button>

                  <button name="icon" data-key="12160" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ph.svg" data-title="Philippines"  onclick="updateFlag('12160');return false;">
                      <img id="12160" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ph.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ph.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ph-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ph-58x29.png 58w" sizes="38px"><strong>Philippines</strong><i>Choose a flag</i>
                    </button>


                    <button name="icon" data-key="12191" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pl.svg" data-title="Poland"  onclick="updateFlag('12191');return false;">
                        <img id="12191" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pl.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pl.png 667w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pl-300x188.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pl-576x360.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pl-58x36.png 58w" sizes="38px"><strong>Poland</strong><i>Choose a flag</i>
                      </button>


                      <button name="icon" data-key="14161" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/pt.svg" data-title="Portugal"  onclick="updateFlag('14161');return false;">
                        <img id="14161" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/pt.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/pt.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/pt-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/pt-200x133.png 200w" sizes="38px"><strong>Portugal</strong><i>Choose a flag</i>
                      </button>

                      <button name="icon" data-key="12220" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pr.svg" data-title="Puerto Rico"  onclick="updateFlag('12220');return false;">
                        <img id="12220" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pr.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pr-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pr-58x39.png 58w" sizes="38px"><strong>Puerto Rico</strong><i>Choose a flag</i>
                      </button>


                      <h3 class="group-header">Q</h3>

                      <button name="icon" data-key="12223" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/qa.svg" data-title="Qatar"  onclick="updateFlag('12223');return false;">
                      <img id="12223" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/qa.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/qa.png 729w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/qa-300x118.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/qa-576x226.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/qa-58x23.png 58w" sizes="38px"><strong>Qatar</strong><i>Choose a flag</i>
                    </button>

                    <h3 class="group-header">R</h3>

                    <button name="icon" data-key="12261" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ro.svg" data-title="Romania"  onclick="updateFlag('12261');return false;">
                      <img id="12261" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ro.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ro.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ro-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ro-58x39.png 58w" sizes="38px"><strong>Romania</strong><i>Choose a flag</i>
                    </button>

                    <button name="icon" data-key="12274" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ru.svg" data-title="Russia"  onclick="updateFlag('12274');return false;">
                        <img id="12274" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ru.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ru.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ru-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ru-58x39.png 58w" sizes="38px"><strong>Russia</strong><i>Choose a flag</i>
                      </button>

                      <button name="icon" data-key="12287" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rw.svg" data-title="Rwanda"  onclick="updateFlag('12287');return false;">
                        <img id="12287" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rw.png 563w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rw-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rw-58x39.png 58w" sizes="38px"><strong>Rwanda</strong><i>Choose a flag</i>
                      </button>


                      <h3 class="group-header">S</h3>

                      <button name="icon" data-key="12303" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bl.svg" data-title="Saint Barthelmy"  onclick="updateFlag('12303');return false;">
                     <img id="12303" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bl.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bl.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/bl-58x39.png 58w" sizes="38px"><strong>Saint Barthelmy</strong><i>Choose a flag</i>
                     </button>

                     <button name="icon" data-key="12306" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kn-1.svg" data-title="Saint Kitts and Nevis"  onclick="updateFlag('12306');return false;">
                    <img id="12306" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kn.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kn-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/kn-58x39.png 58w" sizes="38px"><strong>Saint Kitts and Nevis</strong><i>Choose a flag</i>
                    </button>


                    <button name="icon" data-key="12319" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lc.svg" data-title="Saint Lucia"  onclick="updateFlag('12319');return false;">
                  <img id="12319" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lc.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lc.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lc-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lc-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lc-58x29.png 58w" sizes="38px"><strong>Saint Lucia</strong><i>Choose a flag</i>
                  </button>

                  <button name="icon" data-key="12332" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pm.svg" data-title="Saint Pierre and Miquelon"  onclick="updateFlag('12332');return false;">
                   <img id="12332" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pm.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pm-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/pm-58x39.png 58w" sizes="38px"><strong>Saint Pierre and Miquelon</strong><i>Choose a flag</i>
                   </button>


                   <button name="icon" data-key="12338" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vc.svg" data-title="Saint Vincent and the Grenadines"  onclick="updateFlag('12338');return false;">
                    <img id="12338" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vc.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vc.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vc-58x39.png 58w" sizes="38px"><strong>Saint Vincent and the Grenadines</strong><i>Choose a flag</i>
                   </button>

                   <button name="icon" data-key="12351" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws.svg" data-title="Samoa"  onclick="updateFlag('12351');return false;">
                    <img id="12351" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws.png 1500w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws-768x384.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws-1024x512.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws-992x496.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws-1200x600.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ws-58x29.png 58w" sizes="38px"><strong>Samoa</strong><i>Choose a flag</i>
                   </button>

                   <button name="icon" data-key="12364" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sm-1.svg" data-title="San Marino"  onclick="updateFlag('12364');return false;">
                   <img id="12364" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sm.png 417w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sm-300x225.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sm-58x44.png 58w" sizes="38px"><strong>San Marino</strong><i>Choose a flag</i>
                  </button>


                  <button name="icon" data-key="12377" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sa.svg" data-title="Saudi Arabia"  onclick="updateFlag('12377');return false;">
                 <img id="12377" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sa.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sa.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sa-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sa-58x39.png 58w" sizes="38px"><strong>Saudi Arabia</strong><i>Choose a flag</i>
                 </button>


                 <button name="icon" data-key="12415" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sn.svg" data-title="Senegal"  onclick="updateFlag('12415');return false;">
                  <img id="12415" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sn.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sn-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sn-58x39.png 58w" sizes="38px"><strong>Senegal</strong><i>Choose a flag</i>
                 </button>

                 <button name="icon" data-key="12428" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rs.svg" data-title="Serbia"  onclick="updateFlag('12428');return false;">
                  <img id="12428" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rs.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rs.png 703w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rs-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rs-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/rs-58x39.png 58w" sizes="38px"><strong>Serbia</strong><i>Choose a flag</i>
                 </button>


                 <button name="icon" data-key="12442" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sc.svg" data-title="Seychelles"  onclick="updateFlag('12442');return false;">
                  <img id="12442" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sc.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sc.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sc-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sc-58x29.png 58w" sizes="38px"><strong>Seychelles</strong><i>Choose a flag</i>
               </button>


               <button name="icon" data-key="12459" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sl.svg" data-title="Sierra Leone"  onclick="updateFlag('12459');return false;">
                <img id="12459" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sl.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sl.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sl-58x39.png 58w" sizes="38px"><strong>Sierra Leone</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="12472" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg.svg" data-title="Singapore"  onclick="updateFlag('12472');return false;">
               <img id="12472" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg.png 2250w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg-768x512.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg-1024x683.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg-992x661.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg-1200x800.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sg-58x39.png 58w" sizes="38px"><strong>Singapore</strong><i>Choose a flag</i>
                </button>


                <button name="icon" data-key="12485" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sx-1.svg" data-title="Sint Marteen"  onclick="updateFlag('12485');return false;">
                <img id="12485" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sx.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sx.png 352w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sx-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sx-58x39.png 58w" sizes="38px"><strong>Sint Marteen</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="12492" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sk-1.svg" data-title="Slovakia"  onclick="updateFlag('12492');return false;">
                <img id="12492" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sk.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sk.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sk-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sk-58x39.png 58w" sizes="38px"><strong>Slovakia</strong><i>Choose a flag</i>
                </button> 

                <button name="icon" data-key="12505" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/si.svg" data-title="Slovenia"  onclick="updateFlag('12505');return false;">
                <img id="12505" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/si.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/si.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/si-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/si-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/si-58x29.png 58w" sizes="38px"><strong>Slovenia</strong><i>Choose a flag</i>
                </button>

                <button name="icon" data-key="12521" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/so.svg" data-title="Somalia"  onclick="updateFlag('12521');return false;">
                <img id="12521" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/so.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/so.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/so-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/so-58x39.png 58w" sizes="38px"><strong>Somalia</strong><i>Choose a flag</i>
               </button>

               <button name="icon" data-key="12538" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/za2.svg" data-title="South Africa"  onclick="updateFlag('12538');return false;">
               <img id="12538" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/za.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/za.png 333w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/za-300x225.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/za-58x44.png 58w" sizes="38px"><strong>South Africa</strong><i>Choose a flag</i>
               </button>


               <button name="icon" data-key="12557" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gs-1.svg" data-title="South Georgia and the South Sandwich Islands"  onclick="updateFlag('12557');return false;">
              <img id="12557" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gs.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gs.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gs-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/gs-58x29.png 58w" sizes="38px"><strong>South Georgia and the South Sandwich Islands</strong><i>Choose a flag</i>
              </button>

              <button name="icon" data-key="14080" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/kr.svg" data-title="South Korea"  onclick="updateFlag('14080');return false;">
              <img id="14080" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/kr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/kr.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/kr-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/kr-200x133.png 200w" sizes="38px"><strong>South Korea</strong><i>Choose a flag</i>
             </button>

             <button name="icon" data-key="12560" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ss.svg" data-title="South Sudan"  onclick="updateFlag('12560');return false;">
            <img id="12560" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ss.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ss.png 521w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ss-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ss-58x29.png 58w" sizes="38px"><strong>South Sudan</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="12573" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/es-1.svg" data-title="Spain"  onclick="updateFlag('12573');return false;">
           <img id="12573" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/es.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/es.png 391w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/es-300x199.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/es-58x39.png 58w" sizes="38px"><strong>Spain</strong><i>Choose a flag</i>
         </button>

         <button name="icon" data-key="13401" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/spain-without-islands-1758851-1-no-emblem.svg" data-title="Spain &amp;#8211; map"  onclick="updateFlag('13401');return false;">
        <img id="13401" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/spain-without-islands-1758851-1-no-emblem-76x61.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/spain-without-islands-1758851-1-no-emblem.png 250w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/spain-without-islands-1758851-1-no-emblem-200x161.png 200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/spain-without-islands-1758851-1-no-emblem-76x61.png 76w" sizes="38px"><strong>Spain – map</strong><i>Choose a flag</i>
       </button>


       <button name="icon" data-key="12587" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lk.svg" data-title="Sri Lanka"  onclick="updateFlag('12587');return false;">
        <img id="12587" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lk.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lk.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lk-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lk-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/lk-58x29.png 58w" sizes="38px"><strong>Sri Lanka</strong><i>Choose a flag</i>
       </button>

       <button name="icon" data-key="12608" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sd.svg" data-title="Sudan"  onclick="updateFlag('12608');return false;">
      <img id="12608" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sd.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sd.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sd-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sd-58x29.png 58w" sizes="38px"><strong>Sudan</strong><i>Choose a flag</i>
     </button>


     <button name="icon" data-key="12621" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sr.svg" data-title="Suriname"  onclick="updateFlag('12621');return false;">
    <img id="12621" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sr.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sr-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sr-58x39.png 58w" sizes="38px"><strong>Suriname</strong><i>Choose a flag</i>
     </button>

     <button name="icon" data-key="12634" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sz.svg" data-title="Swaziland"  onclick="updateFlag('12634');return false;">
    <img id="12634" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sz.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sz.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sz-58x39.png 58w" sizes="38px"><strong>Swaziland</strong><i>Choose a flag</i>
     </button>

       
       <button name="icon" data-key="12647" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/se.svg" data-title="Sweden"  onclick="updateFlag('12647');return false;">
       <img id="12647" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/se.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/se.png 833w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/se-300x188.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/se-768x480.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/se-576x360.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/se-58x36.png 58w" sizes="38px"><strong>Sweden</strong><i>Choose a flag</i>
       </button>


       <button name="icon" data-key="12661" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ch.svg" data-title="Switzerland"  onclick="updateFlag('12661');return false;">
       <img id="12661" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ch.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ch.png 167w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ch-150x150.png 150w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ch-58x58.png 58w" sizes="38px"><strong>Switzerland</strong><i>Choose a flag</i>
      </button>


      <button name="icon" data-key="13402" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1-fixed4.svg" data-title="Switzerland &amp;#8211; map"  onclick="updateFlag('13402');return false;">
        <img id="13402" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1.png 2489w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1-300x193.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1-768x494.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1-1024x659.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1-576x371.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1-992x638.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1-1200x772.png 1200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/switzerland-1758854-1-58x37.png 58w" sizes="38px"><strong>Switzerland – map</strong><i>Choose a flag</i>
        </button>

        <button name="icon" data-key="12675" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sy.svg" data-title="Syria"  onclick="updateFlag('12675');return false;">
       <img id="12765" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sy.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sy.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sy-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/sy-58x39.png 58w" sizes="38px"><strong>Syria</strong><i>Choose a flag</i>
       </button>


       <h3 class="group-header">T</h3>

       <button name="icon" data-key="12688" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tw.svg" data-title="Taiwan"  onclick="updateFlag('12688');return false;">
       <img id="12688" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tw.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tw.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tw-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tw-58x39.png 58w" sizes="38px"><strong>Taiwan</strong><i>Choose a flag</i>
       </button>

       <button name="icon" data-key="12693" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tj.svg" data-title="Tajikistan"  onclick="updateFlag('12693');return false;">
       <img id="12693" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tj.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tj.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tj-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tj-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tj-58x29.png 58w" sizes="38px"><strong>Tajikistan</strong><i>Choose a flag</i>
      </button>

      <button name="icon" data-key="50034" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/05/Tanzania.svg" data-title="Tanzania"  onclick="updateFlag('50034');return false;">
      <img id="50034" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/05/tanzania-76x51.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/05/tanzania.png 486w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/05/tanzania-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/05/tanzania-200x133.png 200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2019/05/tanzania-76x51.png 76w" sizes="38px"><strong>Tanzania</strong><i>Choose a flag</i>
      </button>

      <button name="icon" data-key="12712" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cc.svg" data-title="Territory of Cocos (Keeling) Islands"  onclick="updateFlag('12712');return false;">
       <img id="12712" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cc.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cc.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cc-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/cc-58x29.png 58w" sizes="38px"><strong>Territory of Cocos (Keeling) Islands</strong><i>Choose a flag</i>
       </button>


       <button name="icon" data-key="12718" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/th.svg" data-title="Thailand"  onclick="updateFlag('12718');return false;">
       <img id="12718" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/th.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/th.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/th-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/th-58x39.png 58w" sizes="38px"><strong>Thailand</strong><i>Choose a flag</i>
      </button>

       <button name="icon" data-key="12746" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tg.svg" data-title="Togo"  onclick="updateFlag('12476');return false;">
       <img id="12746" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tg.png 421w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tg-300x185.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tg-58x36.png 58w" sizes="38px"><strong>Togo</strong><i>Choose a flag</i>
       </button>

       <button name="icon" data-key="12759" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/to.svg" data-title="Tonga"  onclick="updateFlag('12759');return false;">
       <img id="12759" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/to.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/to.png 500w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/to-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/to-58x29.png 58w" sizes="38px"><strong>Tonga</strong><i>Choose a flag</i>
      </button>


       <button name="icon" data-key="12778" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tt.svg" data-title="Trinidad and Tobago"  onclick="updateFlag('12778');return false;">
       <img id="12778" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tt.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tt.png 417w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tt-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tt-58x35.png 58w" sizes="38px"><strong>Trinidad and Tobago</strong><i>Choose a flag</i>
       </button>


       <button name="icon" data-key="12798" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tn.svg" data-title="Tunisia"  onclick="updateFlag('12798');return false;">
       <img id="12798" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tn.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tn-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tn-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tn-58x39.png 58w" sizes="38px"><strong>Tunisia</strong><i>Choose a flag</i>
       </button>


       <button name="icon" data-key="12811" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tr.svg" data-title="Turkey"  onclick="updateFlag('12811');return false;">
        <img id="12811" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tr.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tr.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tr-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tr-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tr-58x39.png 58w" sizes="38px"><strong>Turkey</strong><i>Choose a flag</i>
       </button>


       <button name="icon" data-key="12825" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tm-1.svg" data-title="Turkmenistan"  onclick="updateFlag('12825');return false;">
        <img id="12825" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tm.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tm-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tm-58x39.png 58w" sizes="38px"><strong>Turkmenistan</strong><i>Choose a flag</i>
       </button>


       <button name="icon" data-key="12838" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tc-1.svg" data-title="Turks and Cyicos Islands"  onclick="updateFlag('12838');return false;">
        <img id="12838" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tc.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tc.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tc-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tc-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tc-58x29.png 58w" sizes="38px"><strong>Turks and Cyicos Islands</strong><i>Choose a flag</i>
        </button>


        <button name="icon" data-key="12845" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tv-1.svg" data-title="Tuvalu"  onclick="updateFlag('12845');return false;">
         <img id="12845" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tv.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tv.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tv-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tv-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/tv-58x29.png 58w" sizes="38px"><strong>Tuvalu</strong><i>Choose a flag</i>
        </button>


        <h3 class="group-header">U</h3>


        <button name="icon" data-key="12858" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ug-1.svg" data-title="Uganda"  onclick="updateFlag('12858');return false;">
        <img id="12858" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ug.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ug.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ug-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ug-58x39.png 58w" sizes="38px"><strong>Uganda</strong><i>Choose a flag</i>
        </button>


        <button name="icon" data-key="12870" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ua.svg" data-title="Ukraine"  onclick="updateFlag('12870');return false;">
         <img id="12870" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ua.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ua.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ua-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ua-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ua-58x39.png 58w" sizes="38px"><strong>Ukraine</strong><i>Choose a flag</i>
         </button>


         <button name="icon" data-key="12890" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ae.svg" data-title="United Arab Emirates"  onclick="updateFlag('12890');return false;">
            <img id="12890" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ae.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ae.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ae-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ae-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ae-58x29.png 58w" sizes="38px"><strong>United Arab Emirates</strong><i>Choose a flag</i>
         </button>


         <button name="icon" data-key="14032" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/gb-1.svg" data-title="United Kingdom"  onclick="updateFlag('14032');return false;">
          <img id="14032" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/gb.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/gb.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/gb-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/gb-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/gb-200x100.png 200w" sizes="38px"><strong>United Kingdom</strong><i>Choose a flag</i>
          </button>

          <button name="icon" data-key="14140" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/united-states-of-america-flag.svg" data-title="United States of America (USA)"  onclick="updateFlag('14140');return false;">
            <img id="14140" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/us.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/us.png 643w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/us-300x158.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/us-576x304.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/03/us-200x105.png 200w" sizes="38px"><strong>United States of America (USA)</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="12906" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/uy.svg" data-title="Uruguay"  onclick="updateFlag('12906');return false;">
             <img id="12906" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/uy.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/uy.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/uy-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/uy-58x39.png 58w" sizes="38px"><strong>Uruguay</strong><i>Choose a flag</i>
            </button>

            <h3 class="group-header">V</h3>

            <button name="icon" data-key="12927" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vu.svg" data-title="Vanautu"  onclick="updateFlag('12927');return false;">
             <img id="12927" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vu.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vu.png 313w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vu-300x180.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vu-58x35.png 58w" sizes="38px"><strong>Vanautu</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="12943" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/va.svg" data-title="Vatican City &amp;#8211; Holy See"  onclick="updateFlag('12943');return false;">
            <img id="12943" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/va.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/va.png 260w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/va-150x150.png 150w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/va-58x58.png 58w" sizes="38px"><strong>Vatican City – Holy See</strong><i>Choose a flag</i>
            </button>

            <button name="icon" data-key="27624" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/05/Flag_of_Venezuela.svg" data-title="Venezuela"  onclick="updateFlag('27624');return false;">
            <img id="27624" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/05/flag_of_venezuela-76x51.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/05/flag_of_venezuela.png 675w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/05/flag_of_venezuela-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/05/flag_of_venezuela-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/05/flag_of_venezuela-200x133.png 200w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/05/flag_of_venezuela-76x51.png 76w" sizes="38px"><strong>Venezuela</strong><i>Choose a flag</i>
           </button>


           <button name="icon" data-key="12958" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vn.svg" data-title="Vietnam"  onclick="updateFlag('12958');return false;">
            <img id="12958" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vn.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vn.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vn-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vn-58x39.png 58w" sizes="38px"><strong>Vietnam</strong><i>Choose a flag</i>
           </button>


           <button name="icon" data-key="12972" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vg-1.svg" data-title="Virgin Islands"  onclick="updateFlag('12972');return false;">
           <img id="12972" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vg.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vg.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vg-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vg-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vg-58x29.png 58w" sizes="38px"><strong>Virgin Islands</strong><i>Choose a flag</i>
           </button>

           <button name="icon" data-key="12975" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vi.svg" data-title="Virgin Islands US"  onclick="updateFlag('12975');return false;">
             <img id="12975" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vi.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vi.png 664w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vi-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vi-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/vi-58x39.png 58w" sizes="38px"><strong>Virgin Islands US</strong><i>Choose a flag</i>
           </button>

           <h3 class="group-header">W</h3>

           <button name="icon" data-key="12984" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/wf.svg" data-title="Wallis and Futuna"  onclick="updateFlag('12984');return false;">
           <img id="12984" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/wf.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/wf.png 469w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/wf-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/wf-58x39.png 58w" sizes="38px"><strong>Wallis and Futuna</strong><i>Choose a flag</i>
           </button>

           <h3 class="group-header">Y</h3>

           <button name="icon" data-key="13020" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ye.svg" data-title="Yemen"  onclick="updateFlag('13020');return false;">
           <img id="13020" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ye.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ye.png 234w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/ye-58x39.png 58w" sizes="38px"><strong>Yemen</strong><i>Choose a flag</i>
            </button>


            <h3 class="group-header">Z</h3>

            <button name="icon" data-key="13037" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm-1.svg" data-title="Zambia"  onclick="updateFlag('13037');return false;">
          <img id="13037" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm.png" srcset="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm.png 1094w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm-300x200.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm-768x512.png 768w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm-1024x682.png 1024w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm-576x384.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm-992x661.png 992w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zm-58x39.png 58w" sizes="38px"><strong>Zambia</strong><i>Choose a flag</i>
         </button>


         <button name="icon" data-key="13051" class="group-itm chooseIconBtn" value="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zw-1.svg" data-title="Zimbabwe"  onclick="updateFlag('13051');return false;">
          <img id="13051" src="https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zw.png" srcset="    https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zw.png 625w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zw-300x150.png 300w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zw-576x288.png 576w, https://d3fu7mr2g5m5ku.cloudfront.net/prod/uploads/uploads/2018/02/zw-58x29.png 58w" sizes="38px"><strong>Zimbabwe</strong><i>Choose a flag</i>
         </button>

         </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>




  
              <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" id="modaClose">&times;</button>
          <h4 class="modal-title">Select Icon</h4>
        </div>
        <div class="modal-body">
        
    <h1 class="group-header">icon</h1>

 
    <div class="tab">






     <button name="icon" data-key="Layer_1" class="group-itm chooseIconBtn" value="http://igeekteam.net/sticker/wp-content/uploads/2020/08/First_icon.svg?_t=1598416790" data-title="Layer_1"  onclick="updateFlag('Layer_1');return false;">
     <img id="Layer_1" data-name="Layer 1" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/First_icon.svg?_t=1598416790" srcset=" http://igeekteam.net/sticker/wp-content/uploads/2020/08/First_icon.svg?_t=1598416790 234w, http://igeekteam.net/sticker/wp-content/uploads/2020/08/First_icon.svg?_t=1598416790" sizes="38px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 71.47 64.39"><defs><style>.cls-1{fill:none;}.cls-2{clip-path:url(#clip-path);}</style><clipPath id="clip-path" transform="translate(-13.75 -0.92)"><rect class="cls-1" width="100" height="66"/></clipPath></defs><title>First_icon</title><g class="cls-2"><path d="M49.47,0.92a35.89,35.89,0,0,0-31.39,53V44.43a7.65,7.65,0,0,1,1.71-4.76q-0.14-1.42-.14-2.85A29.82,29.82,0,1,1,79.14,40a7.58,7.58,0,0,1,1.48,4.46v10A35.89,35.89,0,0,0,49.47.92" transform="translate(-13.75 -0.92)"/><path d="M20.29,42.89a5.26,5.26,0,0,0-.23,1.53v13.4c0,4.14,4.93,7.49,11,7.49h4.63V36.94H31.06c-5.3,0-9.73,2.56-10.77,6" transform="translate(-13.75 -0.92)"/><path d="M78.65,57.83V44.43a5.2,5.2,0,0,0-.09-1c-0.69-3.69-5.31-6.54-10.91-6.54H63V65.32h4.63c6.08,0,11-3.35,11-7.49" transform="translate(-13.75 -0.92)"/></g></svg>


       <button name="icon" data-key="i150" class="group-itm chooseIconBtn" value="http://igeekteam.net/sticker/wp-content/uploads/2020/08/icon%20(150).svg?_t=1598082484" data-title="Icon150"  onclick="updateFlag('i150');return false;">
        <img id="i150" src="http://igeekteam.net/sticker/wp-content/uploads/2020/08/icon%20(150).svg?_t=1598082484" srcset="http://igeekteam.net/sticker/wp-content/uploads/2020/08/icon%20(150).svg?_t=1598082484 234w, http://igeekteam.net/sticker/wp-content/uploads/2020/08/icon%20(150).svg?_t=1598082484" sizes="38px">
      </button>


      
    </div>
    </div>
    
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>

    
    
          <script ="text/javascript">
function openDesign(evt, designName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(designName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


function fetch()
{
  var get = document.getElementById("get").value;
  document.getElementById("put").value = get;
}





</script>




    </footer>
</html>




















































































































































































































































































































































































































































































































































































































































































































































