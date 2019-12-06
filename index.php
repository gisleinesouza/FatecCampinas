<html lang="pt-BR" dir="ltr" class="g-offcanvas-css3 wf-active wf-raleway-n3-active wf-raleway-n4-active"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="/site/templates/g5_hydrogen/custom/images/favicon.ico">
    <!--<base href="/site/">-->
    <base href=".">
    <meta name="generator" content="Joomla! - Open Source Content Management">
    <title>FatecNews</title>
    <link href="/site/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0">
    <link href="/site/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0">
    <link href="/site/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="./index_files/index.php" rel="stylesheet">
    <link href="./index_files/chosen.css" rel="stylesheet">
    <link href="./index_files/finder.css" rel="stylesheet">
    <link href="./index_files/font-awesome.min.css" rel="stylesheet">
    <link href="./index_files/nucleus.css" rel="stylesheet">
    <link href="./index_files/hydrogen_10.css" rel="stylesheet">
    <link href="./index_files/bootstrap-gantry.css" rel="stylesheet">
    <link href="./index_files/joomla.css" rel="stylesheet">
    <link href="./index_files/icomoon.css" rel="stylesheet">
    <link href="./index_files/hydrogen-joomla_10.css" rel="stylesheet">
    <link href="./index_files/custom_10.css" rel="stylesheet">
    <link href="./index_files/squeezebox.css" rel="stylesheet">
    <style>
        .margin-h-8 {
            margin: 8px;
        }
        
        #g-footer {
            background: #a61f21;
            color: #fff;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .g-powered-by {
            color: #fff;
        }
        
        #g-totop {
            color: #fff;
        }
        
        .gantry-logo img {
            width: 308px;
        }
        
        .gantry-logo-cps img {
            width: 608px;
        }
        
        #g-footer {
            background: #a61f21;
            color: #fff;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        #g-totop {
            color: #fff;
        }
        
        #g-Logo {
            background: #a61f21;
        }
        
        .g-content g-particle {
            color: #fff;
        }
        
        .branco {
            color: #fff;
        }
        
        #g-header {
            background: #c92a6c;
        }
        
        #g-navigation {
            background: #8c1f4c;
        }
        
        #g-footer {
            background: #c92a6c;
        }
        
        #g-header {
            background: #972e28;
            color: #fff;
            position: relative;
            z-index: 3;
            padding: 10px
        }

        .banner-left {
            width: 400px;
            float: left
        }

        .banner-right {
            float: right;
            width: 250px
        }
        
        #g-navigation {
            background: #962d27;
            color: #fff;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        #g-footer {
            background: #972e28;
            color: #666;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        a:hover {
            color: #4d4d4d;
        }
        
        #g-footer {
            color: #ffffff;
        }
        
        a {
            color: #0a4765;
        }
    </style>
    <script src="./index_files/jquery.min.js"></script>
    <script src="./index_files/jquery-noconflict.js"></script>
    <script src="./index_files/jquery-migrate.min.js"></script>
    <script src="./index_files/caption.js"></script>
    <script src="./index_files/bootstrap.min.js"></script>
    <script src="./index_files/chosen.jquery.min.js"></script>
    <script src="./index_files/jquery.autocomplete.min.js"></script>
    <script src="./index_files/jquery.easing.min.js"></script>
    <script src="./index_files/squeezebox.min.js"></script>
    <script src="./index_files/sendmsgs.js"></script>
    <script>
        jQuery(window).on('load', function() {
            new JCaption('img.caption');
        });
        jQuery(function($) {
            initTooltips();
            $("body").on("subform-row-add", initTooltips);

            function initTooltips(event, container) {
                container = container || document;
                $(container).find(".hasTooltip").tooltip({
                    "html": true,
                    "container": "body"
                });
            }
        });
        jQuery(function($) {
            initChosen();
            $("body").on("subform-row-add", initChosen);

            function initChosen(event, container) {
                container = container || document;
                $(container).find(".advancedSelect").chosen({
                    "disable_search_threshold": 10,
                    "search_contains": true,
                    "allow_single_deselect": true,
                    "placeholder_text_multiple": "Digite ou selecione algumas op\u00e7\u00f5es",
                    "placeholder_text_single": "O pacote de idioma n\u00e3o coincide com a vers\u00e3o do Joomla!. Algumas strings podem estar faltando.",
                    "no_results_text": "Selecione alguma op\u00e7\u00e3o"
                });
            }
        });

        jQuery(function($) {
            initTooltips();
            $("body").on("subform-row-add", initTooltips);

            function initTooltips(event, container) {
                container = container || document;
                $(container).find(".hasTooltip").tooltip({
                    "html": true,
                    "container": "body"
                });
            }
        });
        jQuery(document).ready(function() {
            var value, searchword = jQuery('#mod-finder-searchword144');

            // Get the current value.
            value = searchword.val();

            // If the current value equals the default value, clear it.
            searchword.on('focus', function() {
                var el = jQuery(this);

                if (el.val() === 'Pesquisar...') {
                    el.val('');
                }
            });

            // If the current value is empty, set the previous value.
            searchword.on('blur', function() {
                var el = jQuery(this);

                if (!el.val()) {
                    el.val(value);
                }
            });

            jQuery('#mod-finder-searchform144').on('submit', function(e) {
                e.stopPropagation();
                var advanced = jQuery('#mod-finder-advanced144');

                // Disable select boxes with no value selected.
                if (advanced.length) {
                    advanced.find('select').each(function(index, el) {
                        var el = jQuery(el);

                        if (!el.val()) {
                            el.attr('disabled', 'disabled');
                        }
                    });
                }
            });
            var suggest = jQuery('#mod-finder-searchword144').autocomplete({
                serviceUrl: '/site/index.php/component/finder/?task=suggestions.suggest&amp;format=json&amp;tmpl=component',
                paramName: 'q',
                minChars: 1,
                maxHeight: 400,
                width: 300,
                zIndex: 9999,
                deferRequestBy: 500
            });
        });
        (function() {
            if (typeof jQuery == 'undefined')
                return;

            jQuery(function($) {
                if ($.fn.squeezeBox) {
                    $('a.modal').squeezeBox({
                        parse: 'rel'
                    });

                    $('img.modal').each(function(i, el) {
                        $(el).squeezeBox({
                            handler: 'image',
                            url: $(el).attr('src')
                        });
                    })
                } else if (typeof(SqueezeBox) !== 'undefined') {
                    $('img.modal').each(function(i, el) {
                        SqueezeBox.assign(el, {
                            handler: 'image',
                            url: $(el).attr('src')
                        });
                    });
                }

                function jModalClose() {
                    if (typeof(SqueezeBox) == 'object')
                        SqueezeBox.close();
                    else
                        ARK.squeezeBox.close();
                }

            });
        })();

        var sendmsgs_url_1 = '';
        var sendmsgs_url_2 = '';
        var sendmsgs_url_3 = '';
        var sendmsgs_position = 'head';
    </script>

    <!--[if (gte IE 8)&(lte IE 9)]>
        <script type="text/javascript" src="/site/media/gantry5/assets/js/html5shiv-printshiv.min.js"></script>
        <link rel="stylesheet" href="/site/media/gantry5/engines/nucleus/css/nucleus-ie9.css" type="text/css"/>
        <script type="text/javascript" src="/site/media/gantry5/assets/js/matchmedia.polyfill.js"></script>
        <![endif]-->

    <link rel="stylesheet" type="text/css" href="./index_files/smartslider.min.css" media="all">
    <style type="text/css">
        .n2-ss-spinner-simple-white-container {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -20px;
            background: #fff;
            width: 20px;
            height: 20px;
            padding: 10px;
            border-radius: 50%;
            z-index: 1000;
        }
        
        .n2-ss-spinner-simple-white {
            outline: 1px solid RGBA(0, 0, 0, 0);
            width: 100%;
            height: 100%;
        }
        
        .n2-ss-spinner-simple-white:before {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin-top: -11px;
            margin-left: -11px;
        }
        
        .n2-ss-spinner-simple-white:not(:required):before {
            content: '';
            border-radius: 50%;
            border-top: 2px solid #333;
            border-right: 2px solid transparent;
            animation: n2SimpleWhite .6s linear infinite;
        }
        
        @keyframes n2SimpleWhite {
            to {
                transform: rotate(360deg);
            }
        }
        
        .n2-ss-spinner-simple-white-container {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -20px;
            background: #fff;
            width: 20px;
            height: 20px;
            padding: 10px;
            border-radius: 50%;
            z-index: 1000;
        }
        
        .n2-ss-spinner-simple-white {
            outline: 1px solid RGBA(0, 0, 0, 0);
            width: 100%;
            height: 100%;
        }
        
        .n2-ss-spinner-simple-white:before {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin-top: -11px;
            margin-left: -11px;
        }
        
        .n2-ss-spinner-simple-white:not(:required):before {
            content: '';
            border-radius: 50%;
            border-top: 2px solid #333;
            border-right: 2px solid transparent;
            animation: n2SimpleWhite .6s linear infinite;
        }
        
        @keyframes n2SimpleWhite {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <script type="text/javascript">
        (function() {
            var N = this;
            N.N2_ = N.N2_ || {
                r: [],
                d: []
            }, N.N2R = N.N2R || function() {
                N.N2_.r.push(arguments)
            }, N.N2D = N.N2D || function() {
                N.N2_.d.push(arguments)
            }
        }).call(window);
        if (!window.n2jQuery) {
            window.n2jQuery = {
                ready: function(cb) {
                    console.error('n2jQuery will be deprecated!');
                    N2R(['$'], cb)
                }
            }
        }
        window.nextend = {
            localization: {},
            ready: function(cb) {
                console.error('nextend.ready will be deprecated!');
                N2R('documentReady', function($) {
                    cb.call(window, $)
                })
            }
        };
        nextend.fontsLoaded = false;
        nextend.fontsLoadedActive = function() {
            nextend.fontsLoaded = true
        };
        var requiredFonts = ["Raleway:n3", "Raleway:n4"],
            fontData = {
                google: {
                    families: ["Raleway:300,400:latin"]
                },
                active: function() {
                    nextend.fontsLoadedActive()
                },
                inactive: function() {
                    nextend.fontsLoadedActive()
                },
                fontactive: function(f, s) {
                    fontData.resolveFont(f + ':' + s)
                },
                fontinactive: function(f, s) {
                    fontData.resolveFont(f + ':' + s)
                },
                resolveFont: function(n) {
                    for (var i = requiredFonts.length - 1; i >= 0; i--) {
                        if (requiredFonts[i] === n) {
                            requiredFonts.splice(i, 1);
                            break
                        }
                    }
                    if (!requiredFonts.length) nextend.fontsLoadedActive()
                }
            };
        if (typeof WebFontConfig !== 'undefined' && typeof WebFont === 'undefined') {
            var _WebFontConfig = WebFontConfig;
            for (var k in WebFontConfig) {
                if (k == 'active') {
                    fontData.active = function() {
                        nextend.fontsLoadedActive();
                        _WebFontConfig.active()
                    }
                } else if (k == 'inactive') {
                    fontData.inactive = function() {
                        nextend.fontsLoadedActive();
                        _WebFontConfig.inactive()
                    }
                } else if (k == 'fontactive') {
                    fontData.fontactive = function(f, s) {
                        fontData.resolveFont(f + ':' + s);
                        _WebFontConfig.fontactive.apply(this, arguments)
                    }
                } else if (k == 'fontinactive') {
                    fontData.fontinactive = function(f, s) {
                        fontData.resolveFont(f + ':' + s);
                        _WebFontConfig.fontinactive.apply(this, arguments)
                    }
                } else if (k == 'google') {
                    if (typeof WebFontConfig.google.families !== 'undefined') {
                        for (var i = 0; i < WebFontConfig.google.families.length; i++) {
                            fontData.google.families.push(WebFontConfig.google.families[i])
                        }
                    }
                } else {
                    fontData[k] = WebFontConfig[k]
                }
            }
        }
        fontData.classes = true;
        fontData.events = true;
        if (typeof WebFont === 'undefined') {
            window.WebFontConfig = fontData
        } else {
            WebFont.load(fontData)
        }
    </script>
    <script type="text/javascript" src="./index_files/n2-j.min.js"></script>
    <script type="text/javascript" src="./index_files/nextend-gsap.min.js"></script>
    <script type="text/javascript" src="./index_files/nextend-frontend.min.js"></script>
    <script type="text/javascript" src="./index_files/smartslider-frontend.min.js"></script>
    <script type="text/javascript" src="./index_files/smartslider-simple-type-frontend.min.js"></script>
    <script type="text/javascript" src="./index_files/smartslider-backgroundanimation.min.js"></script>
    <link rel="stylesheet" href="./index_files/css" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400&amp;subset=latin" media="all"><script type="text/javascript" src="./index_files/nextend-webfontloader.min.js"></script>
    <script type="text/javascript">
        N2R('documentReady', function($) {
            nextend.fontsDeferred = $.Deferred();
            if (nextend.fontsLoaded) {
                nextend.fontsDeferred.resolve()
            } else {
                nextend.fontsLoadedActive = function() {
                    nextend.fontsLoaded = true;
                    nextend.fontsDeferred.resolve()
                };
                var intercalCounter = 0;
                nextend.fontInterval = setInterval(function() {
                    if (intercalCounter > 3 || document.documentElement.className.indexOf('wf-active') !== -1) {
                        nextend.fontsLoadedActive();
                        clearInterval(nextend.fontInterval)
                    }
                    intercalCounter++
                }, 1000)
            }
            N2R(["nextend-frontend", "smartslider-frontend", "nextend-gsap", "smartslider-backgroundanimation", "smartslider-simple-type-frontend"], function() {
                new N2Classes.SmartSliderSimple('#n2-ss-1', {
                    "admin": false,
                    "translate3d": 1,
                    "callbacks": "",
                    "background.video.mobile": 1,
                    "align": "normal",
                    "isDelayed": 0,
                    "load": {
                        "fade": 1,
                        "scroll": 0
                    },
                    "playWhenVisible": 1,
                    "playWhenVisibleAt": 0.5,
                    "responsive": {
                        "desktop": 1,
                        "tablet": 1,
                        "mobile": 1,
                        "onResizeEnabled": true,
                        "type": "auto",
                        "downscale": 1,
                        "upscale": 1,
                        "minimumHeight": 0,
                        "maximumHeight": 400,
                        "maximumSlideWidth": 800,
                        "maximumSlideWidthLandscape": 800,
                        "maximumSlideWidthTablet": 800,
                        "maximumSlideWidthTabletLandscape": 800,
                        "maximumSlideWidthMobile": 800,
                        "maximumSlideWidthMobileLandscape": 800,
                        "maximumSlideWidthConstrainHeight": 0,
                        "forceFull": 0,
                        "forceFullOverflowX": "body",
                        "forceFullHorizontalSelector": "",
                        "constrainRatio": 1,
                        "sliderHeightBasedOn": "real",
                        "decreaseSliderHeight": 0,
                        "focusUser": 1,
                        "deviceModes": {
                            "desktopPortrait": 1,
                            "desktopLandscape": 0,
                            "tabletPortrait": 1,
                            "tabletLandscape": 0,
                            "mobilePortrait": 1,
                            "mobileLandscape": 0
                        },
                        "normalizedDeviceModes": {
                            "unknownUnknown": ["unknown", "Unknown"],
                            "desktopPortrait": ["desktop", "Portrait"],
                            "desktopLandscape": ["desktop", "Portrait"],
                            "tabletPortrait": ["tablet", "Portrait"],
                            "tabletLandscape": ["tablet", "Portrait"],
                            "mobilePortrait": ["mobile", "Portrait"],
                            "mobileLandscape": ["mobile", "Portrait"]
                        },
                        "verticalRatioModifiers": {
                            "unknownUnknown": 1,
                            "desktopPortrait": 1,
                            "desktopLandscape": 1,
                            "tabletPortrait": 1,
                            "tabletLandscape": 1,
                            "mobilePortrait": 1,
                            "mobileLandscape": 1
                        },
                        "minimumFontSizes": {
                            "desktopPortrait": 4,
                            "desktopLandscape": 4,
                            "tabletPortrait": 4,
                            "tabletLandscape": 4,
                            "mobilePortrait": 4,
                            "mobileLandscape": 4
                        },
                        "ratioToDevice": {
                            "Portrait": {
                                "tablet": 0.6999999999999999555910790149937383830547332763671875,
                                "mobile": 0.5
                            },
                            "Landscape": {
                                "tablet": 0,
                                "mobile": 0
                            }
                        },
                        "sliderWidthToDevice": {
                            "desktopPortrait": 1200,
                            "desktopLandscape": 1200,
                            "tabletPortrait": 840,
                            "tabletLandscape": 0,
                            "mobilePortrait": 600,
                            "mobileLandscape": 0
                        },
                        "basedOn": "combined",
                        "orientationMode": "width_and_height",
                        "overflowHiddenPage": 0,
                        "desktopPortraitScreenWidth": 1200,
                        "tabletPortraitScreenWidth": 800,
                        "mobilePortraitScreenWidth": 440,
                        "tabletLandscapeScreenWidth": 800,
                        "mobileLandscapeScreenWidth": 440,
                        "focus": {
                            "offsetTop": "",
                            "offsetBottom": ""
                        }
                    },
                    "controls": {
                        "mousewheel": 0,
                        "touch": "horizontal",
                        "keyboard": 1,
                        "blockCarouselInteraction": 1
                    },
                    "lazyLoad": 0,
                    "lazyLoadNeighbor": 0,
                    "blockrightclick": 0,
                    "maintainSession": 0,
                    "autoplay": {
                        "enabled": 1,
                        "start": 1,
                        "duration": 5000,
                        "autoplayToSlide": -1,
                        "autoplayToSlideIndex": -1,
                        "allowReStart": 0,
                        "pause": {
                            "click": 1,
                            "mouse": "0",
                            "mediaStarted": 1
                        },
                        "resume": {
                            "click": 0,
                            "mouse": 0,
                            "mediaEnded": 1,
                            "slidechanged": 0
                        }
                    },
                    "perspective": 1500,
                    "layerMode": {
                        "playOnce": 0,
                        "playFirstLayer": 1,
                        "mode": "skippable",
                        "inAnimation": "mainInEnd"
                    },
                    "initCallbacks": ["N2D(\"SmartSliderWidgetArrowImage\",function(i,e){function s(e,s,t,h){this.slider=e,this.slider.started(i.proxy(this.start,this,s,t,h))}return s.prototype.start=function(e,s,t){return this.slider.sliderElement.data(\"arrow\")?!1:(this.slider.sliderElement.data(\"arrow\",this),this.deferred=i.Deferred(),this.slider.sliderElement.on(\"SliderDevice\",i.proxy(this.onDevice,this)).trigger(\"addWidget\",this.deferred),this.previous=i(\"#\"+this.slider.elementID+\"-arrow-previous\").on(\"click\",i.proxy(function(i){i.stopPropagation(),this.slider[this.slider.getDirectionPrevious()]()},this)),this.previousResize=this.previous.find(\".n2-resize\"),0===this.previousResize.length&&(this.previousResize=this.previous),this.next=i(\"#\"+this.slider.elementID+\"-arrow-next\").on(\"click\",i.proxy(function(i){i.stopPropagation(),this.slider[this.slider.getDirectionNext()]()},this)),this.nextResize=this.next.find(\".n2-resize\"),0===this.nextResize.length&&(this.nextResize=this.next),this.desktopRatio=e,this.tabletRatio=s,this.mobileRatio=t,void i.when(this.previous.n2imagesLoaded(),this.next.n2imagesLoaded()).always(i.proxy(this.loaded,this)))},s.prototype.loaded=function(){this.previous.css(\"display\",\"inline-block\"),this.previousResize.css(\"display\",\"inline-block\"),this.previousWidth=this.previousResize.width(),this.previousHeight=this.previousResize.height(),this.previousResize.css(\"display\",\"\"),this.previous.css(\"display\",\"\"),this.next.css(\"display\",\"inline-block\"),this.nextResize.css(\"display\",\"inline-block\"),this.nextWidth=this.nextResize.width(),this.nextHeight=this.nextResize.height(),this.nextResize.css(\"display\",\"\"),this.next.css(\"display\",\"\"),this.previousResize.find(\"img\").css(\"width\",\"100%\"),this.nextResize.find(\"img\").css(\"width\",\"100%\"),this.onDevice(null,{device:this.slider.responsive.getDeviceMode()}),this.deferred.resolve()},s.prototype.onDevice=function(i,e){var s=1;switch(e.device){case\"tablet\":s=this.tabletRatio;break;case\"mobile\":s=this.mobileRatio;break;default:s=this.desktopRatio}this.previousResize.width(this.previousWidth*s),this.previousResize.height(this.previousHeight*s),this.nextResize.width(this.nextWidth*s),this.nextResize.height(this.nextHeight*s)},s});", "new N2Classes.SmartSliderWidgetArrowImage(this, 1, 0.6999999999999999555910790149937383830547332763671875, 0.5);", "N2D(\"SmartSliderWidgetBulletTransition\",function(t,e){function i(e,i){this.slider=e,this.slider.started(t.proxy(this.start,this,i))}return i.prototype.start=function(e){if(this.slider.sliderElement.data(\"bullet\"))return!1;if(this.slider.sliderElement.data(\"bullet\",this),this.axis=\"horizontal\",this.offset=0,this.parameters=e,this.bar=this.slider.sliderElement.find(\".nextend-bullet-bar\"),this.event=\"universalclick\",\"mouseenter\"===this.parameters.action&&(this.event=\"universalenter\"),this.slider.sliderElement.on({slideCountChanged:t.proxy(this.onSlideCountChanged,this),sliderSwitchTo:t.proxy(this.onSlideSwitch,this)}),this.slider.firstSlideReady.done(t.proxy(this.onFirstSlideSet,this)),0===e.overlay){var i=!1;switch(e.area){case 1:i=\"Top\";break;case 12:i=\"Bottom\";break;case 5:i=\"Left\",this.axis=\"vertical\";break;case 8:i=\"Right\",this.axis=\"vertical\"}i&&(this.offset=parseFloat(this.bar.data(\"offset\")),this.slider.responsive.addStaticMargin(i,this))}},i.prototype.onFirstSlideSet=function(t){this.onSlideCountChanged(),this.$dots.eq(t.index).addClass(\"n2-active\").attr(\"aria-current\",\"true\")},i.prototype.onDotClick=function(e,i){this.slider.directionalChangeTo(e),t(i.target).blur()},i.prototype.onSlideSwitch=function(t,e){this.$dots.filter(\".n2-active\").removeClass(\"n2-active\").removeAttr(\"aria-current\"),this.$dots.eq(e).addClass(\"n2-active\").attr(\"aria-current\",\"true\")},i.prototype.isVisible=function(){return this.bar.is(\":visible\")},i.prototype.getSize=function(){return\"horizontal\"===this.axis?this.bar.height()+this.offset:this.bar.width()+this.offset},i.prototype.showThumbnail=function(e,i){var s=this.getThumbnail(e);NextendTween.to(s,.3,{opacity:1}),this.$dots.eq(e).one(\"universalleave.thumbnailleave\",t.proxy(this.hideThumbnail,this,e,s))},i.prototype.hideThumbnail=function(t,e,i){i.stopPropagation(),NextendTween.to(e,.3,{opacity:0,onComplete:function(){e.remove()}})},i.prototype.getThumbnail=function(e){var i=this.$dots.eq(e),s=this.slider.sliderElement.offset(),a=i.offset(),r=i.outerWidth(),o=i.outerHeight(),n=t(\"<div\/>\").append(t(\"<div\/>\").css({width:this.parameters.thumbnailWidth,height:this.parameters.thumbnailHeight,backgroundImage:'url(\"'+this.slider.slides[e].getThumbnail()+'\")'}).addClass(\"n2-ss-bullet-thumbnail\")).addClass(this.parameters.thumbnailStyle).addClass(\"n2-ss-bullet-thumbnail-container\").appendTo(this.slider.sliderElement);switch(this.parameters.thumbnailPosition){case\"right\":n.css({left:a.left-s.left+r,top:a.top-s.top+o\/2-n.outerHeight(!0)\/2});break;case\"left\":n.css({left:a.left-s.left-n.outerWidth(!0),top:a.top-s.top+o\/2-n.outerHeight(!0)\/2});break;case\"top\":n.css({left:a.left-s.left+r\/2-n.outerWidth(!0)\/2,top:a.top-s.top-n.outerHeight(!0)});break;case\"bottom\":n.css({left:a.left-s.left+r\/2-n.outerWidth(!0)\/2,top:a.top-s.top+o})}return i.data(\"thumbnail\",n),n},i.prototype.onSlideCountChanged=function(){this.bar.html(\"\");for(var e=0;e<this.slider.slides.length;e++){var i=this.slider.slides[e],s=t('<div class=\"n2-ow n2-bullet '+this.parameters.dotClasses+'\" tabindex=\"0\"><\/div>').attr(\"role\",\"button\").attr(\"aria-label\",i.getTitle()).appendTo(this.bar);switch(s.wrap(t('<div class=\"n2-ow\"><\/div>').on(this.event,t.proxy(this.onDotClick,this,e))).on(\"n2Activate\",t.proxy(this.onDotClick,this,e)),this.parameters.mode){case\"numeric\":s.html(e+1);break;case\"title\":s.html(i.getTitle())}if(1===this.parameters.thumbnail){var a=i.getThumbnail();a&&s.on({universalenter:t.proxy(this.showThumbnail,this,e)},{leaveOnSecond:!0})}}this.$dots=this.bar.find(\">div>*\")},i});", "new N2Classes.SmartSliderWidgetBulletTransition(this, {\"overlay\":1,\"area\":12,\"dotClasses\":\"n2-style-09efebcef1f2f45d29438e0cabcf79bc-dot \",\"mode\":\"\",\"action\":\"click\",\"thumbnail\":1,\"thumbnailWidth\":120,\"thumbnailHeight\":81,\"thumbnailStyle\":\"n2-style-42845aa02120076deb3a5681d1d750ac-simple \",\"thumbnailPosition\":\"top\"});", "N2D(\"SmartSliderWidgetShadow\",function(t,i){\"use strict\";function s(i,s){this.slider=i,this.slider.started(t.proxy(this.start,this,s))}return s.prototype.start=function(t){this.shadow=this.slider.sliderElement.find(\".nextend-shadow\"),this.slider.responsive.addStaticMargin(\"Bottom\",this)},s.prototype.isVisible=function(){return this.shadow.is(\":visible\")},s.prototype.getSize=function(){return this.shadow.height()},s});", "new N2Classes.SmartSliderWidgetShadow(this, {\"overlay\":true,\"area\":12});"],
                    "allowBGImageAttachmentFixed": false,
                    "bgAnimationsColor": "RGBA(51,51,51,1)",
                    "bgAnimations": {
                        "global": 0,
                        "color": "RGBA(51,51,51,1)",
                        "speed": "normal",
                        "slides": {
                            "4": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            }
                        }
                    },
                    "mainanimation": {
                        "type": "horizontal",
                        "duration": 600,
                        "delay": 0,
                        "ease": "easeOutQuad",
                        "parallax": 0,
                        "shiftedBackgroundAnimation": 0
                    },
                    "carousel": 1,
                    "dynamicHeight": 0
                })
            });
            N2R(["nextend-frontend", "smartslider-frontend", "nextend-gsap", "smartslider-backgroundanimation", "smartslider-simple-type-frontend"], function() {
                new N2Classes.SmartSliderSimple('#n2-ss-2', {
                    "admin": false,
                    "translate3d": 1,
                    "callbacks": "",
                    "background.video.mobile": 1,
                    "align": "normal",
                    "isDelayed": 0,
                    "load": {
                        "fade": 1,
                        "scroll": 0
                    },
                    "playWhenVisible": 1,
                    "playWhenVisibleAt": 0.5,
                    "responsive": {
                        "desktop": 1,
                        "tablet": 1,
                        "mobile": 1,
                        "onResizeEnabled": true,
                        "type": "auto",
                        "downscale": 1,
                        "upscale": 1,
                        "minimumHeight": 0,
                        "maximumHeight": 3000,
                        "maximumSlideWidth": 3000,
                        "maximumSlideWidthLandscape": 3000,
                        "maximumSlideWidthTablet": 3000,
                        "maximumSlideWidthTabletLandscape": 3000,
                        "maximumSlideWidthMobile": 3000,
                        "maximumSlideWidthMobileLandscape": 3000,
                        "maximumSlideWidthConstrainHeight": 0,
                        "forceFull": 0,
                        "forceFullOverflowX": "body",
                        "forceFullHorizontalSelector": "",
                        "constrainRatio": 1,
                        "sliderHeightBasedOn": "real",
                        "decreaseSliderHeight": 0,
                        "focusUser": 1,
                        "deviceModes": {
                            "desktopPortrait": 1,
                            "desktopLandscape": 0,
                            "tabletPortrait": 1,
                            "tabletLandscape": 0,
                            "mobilePortrait": 1,
                            "mobileLandscape": 0
                        },
                        "normalizedDeviceModes": {
                            "unknownUnknown": ["unknown", "Unknown"],
                            "desktopPortrait": ["desktop", "Portrait"],
                            "desktopLandscape": ["desktop", "Portrait"],
                            "tabletPortrait": ["tablet", "Portrait"],
                            "tabletLandscape": ["tablet", "Portrait"],
                            "mobilePortrait": ["mobile", "Portrait"],
                            "mobileLandscape": ["mobile", "Portrait"]
                        },
                        "verticalRatioModifiers": {
                            "unknownUnknown": 1,
                            "desktopPortrait": 1,
                            "desktopLandscape": 1,
                            "tabletPortrait": 1,
                            "tabletLandscape": 1,
                            "mobilePortrait": 1,
                            "mobileLandscape": 1
                        },
                        "minimumFontSizes": {
                            "desktopPortrait": 4,
                            "desktopLandscape": 4,
                            "tabletPortrait": 4,
                            "tabletLandscape": 4,
                            "mobilePortrait": 4,
                            "mobileLandscape": 4
                        },
                        "ratioToDevice": {
                            "Portrait": {
                                "tablet": 0.6974789915966386200096849279361777007579803466796875,
                                "mobile": 0.5
                            },
                            "Landscape": {
                                "tablet": 0,
                                "mobile": 0
                            }
                        },
                        "sliderWidthToDevice": {
                            "desktopPortrait": 238,
                            "desktopLandscape": 238,
                            "tabletPortrait": 166,
                            "tabletLandscape": 0,
                            "mobilePortrait": 119,
                            "mobileLandscape": 0
                        },
                        "basedOn": "combined",
                        "orientationMode": "width_and_height",
                        "overflowHiddenPage": 0,
                        "desktopPortraitScreenWidth": 1200,
                        "tabletPortraitScreenWidth": 800,
                        "mobilePortraitScreenWidth": 440,
                        "tabletLandscapeScreenWidth": 800,
                        "mobileLandscapeScreenWidth": 440,
                        "focus": {
                            "offsetTop": "",
                            "offsetBottom": ""
                        }
                    },
                    "controls": {
                        "mousewheel": 0,
                        "touch": "horizontal",
                        "keyboard": 1,
                        "blockCarouselInteraction": 1
                    },
                    "lazyLoad": 0,
                    "lazyLoadNeighbor": 0,
                    "blockrightclick": 0,
                    "maintainSession": 0,
                    "autoplay": {
                        "enabled": 1,
                        "start": 1,
                        "duration": 2000,
                        "autoplayToSlide": -1,
                        "autoplayToSlideIndex": -1,
                        "allowReStart": 0,
                        "pause": {
                            "click": 1,
                            "mouse": "0",
                            "mediaStarted": 1
                        },
                        "resume": {
                            "click": 0,
                            "mouse": 0,
                            "mediaEnded": 1,
                            "slidechanged": 0
                        }
                    },
                    "perspective": 1500,
                    "layerMode": {
                        "playOnce": 0,
                        "playFirstLayer": 1,
                        "mode": "skippable",
                        "inAnimation": "mainInEnd"
                    },
                    "initCallbacks": [],
                    "allowBGImageAttachmentFixed": false,
                    "bgAnimationsColor": "RGBA(51,51,51,1)",
                    "bgAnimations": {
                        "global": 0,
                        "color": "RGBA(51,51,51,1)",
                        "speed": "normal",
                        "slides": {
                            "1": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "2": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "3": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "4": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "5": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "6": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "7": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "8": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "9": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "10": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "11": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "12": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            },
                            "13": {
                                "animation": [{
                                    "type": "Flat",
                                    "rows": 5,
                                    "columns": 7,
                                    "tiles": {
                                        "delay": 1,
                                        "sequence": "Random"
                                    },
                                    "main": {
                                        "type": "next",
                                        "duration": 0.8000000000000000444089209850062616169452667236328125,
                                        "next": {
                                            "ease": "easeInQuart",
                                            "opacity": 0
                                        }
                                    }
                                }],
                                "speed": "normal"
                            }
                        }
                    },
                    "mainanimation": {
                        "type": "horizontal",
                        "duration": 800,
                        "delay": 0,
                        "ease": "easeOutQuad",
                        "parallax": 0,
                        "shiftedBackgroundAnimation": 0
                    },
                    "carousel": 1,
                    "dynamicHeight": 0
                })
            })
        });
    </script>
    <style type="text/css">
        .n2-ss-background-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 3
        }
        
        .n2-ss-background-animation .n2-ss-slide-background {
            z-index: auto;
        }
        
        .n2-ss-background-animation img {
            max-width: none
        }
        
        .n2-ss-background-animation .n2-3d-side {
            position: absolute;
            left: 0;
            top: 0;
            overflow: hidden;
            background: RGBA(51, 51, 51, 1)
        }
        
        .n2-firefox .n2-ss-background-animation .n2-3d-side {
            outline: transparent solid 1px
        }
        
        .n2-ss-background-animation .n2-ff-3d,
        .n2-ss-background-animation .tile {
            outline: transparent solid 1px
        }
        
        .tile-colored-overlay {
            z-index: 100000;
            background: RGBA(51, 51, 51, 1)
        }
    </style>
</head>

<body class="gantry site com_content view-category layout-blog no-task dir-ltr itemid-101 outline-10 g-offcanvas-left g-home g-style-preset4">

    <div id="g-offcanvas" data-g-offcanvas-swipe="1" data-g-offcanvas-css3="1" style="">
        <div class="g-grid">

            <div class="g-block hidden size-100">
                <div id="mobile-menu-9391-particle" class="g-content g-particle">
                    <div id="g-mobilemenu-container" data-g-menu-breakpoint="48rem"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="g-page-surround">
        <div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div><div class="g-menu-overlay"></div>
        <div class="g-menu-overlay"></div>
        <div class="g-menu-overlay"></div>
        <div class="g-menu-overlay"></div>
        <div class="g-menu-overlay"></div>
        <div class="g-offcanvas-hide g-offcanvas-toggle" role="navigation" data-offcanvas-toggle="" aria-controls="g-offcanvas" aria-expanded="false"><i class="fa fa-fw fa-bars"></i></div>
        <?php include_once("header.php")  ?>

        
        
        <main id="g-main">
            <div class="g-container">
                <div class="g-grid">

                    <div class="g-block size-70">
                        <div class="g-content">
                            <div class="platform-content row-fluid">
                                <div class="span12">
                                    <div class="blog" itemscope="" itemtype="https://schema.org/Blog">

                                        <div class="items-leading clearfix">
                                            <div class="leading-0" itemprop="blogPost" itemscope="" itemtype="https://schema.org/BlogPosting">

                                                <div class="page-header">
                                                    <h2 itemprop="name">
									<a href="materia/001.html" itemprop="url">
						BYD Energy doa 10 painéis para Fatec de Campinas					</a>
							</h2>

                                                </div>

                                                <p><strong><em>Equipamento será utilizado em aulas práticas do curso superior de Gestão de Energia e Eficiência Energética</em></strong></p>
                                                <p><em>&nbsp;</em></p>
                                                <p>O curso superior de Gestão de Energia e Eficiência Energética da Fatec de Campinas acaba de receber a doação de 10 painéis solares da BYD Energy, sendo quatro unidades de módulos convencionais e seis unidades de módulos Double Glass, que serão utilizados nas aulas práticas da primeira turma em formação na faculdade. &nbsp;Além da parte prática da instalação dos módulos, os</p>

                                                <p class="readmore">
                                                    <a class="btn" href="/site/index.php/306-byd-energy-doa-10-paineis-para-fatec-de-campinas" itemprop="url" aria-label="Leia mais:  BYD Energy doa 10 painéis para Fatec de Campinas">
                                                        <span class="icon-chevron-right" aria-hidden="true"></span> Leia mais: BYD Energy doa 10 painéis para Fatec de Campinas </a>
                                                </p>

                                            </div>
                                            <div class="leading-1" itemprop="blogPost" itemscope="" itemtype="https://schema.org/BlogPosting">

                                                <div class="page-header">
                                                    <h2 itemprop="name">
									<a href="/site/index.php/305-vi-semana-da-tecnologia" itemprop="url">
						VI Semana da Tecnologia					</a>
							</h2>

                                                </div>

                                                <p>
                                                    <a href="http://semtec.fateccampinas.com.br/"><img src="./index_files/WhatsApp_Image_2019-10-19_at_09.46.43.jpeg" alt="WhatsApp Image 2019 10 19 at 09.46.43"></a>
                                                </p>

                                            </div>
                                            
                                        </div>
                                        

                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        

                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="g-block size-30">
                        <div class="g-content">
                            <div class="platform-content">
                                <div class="moduletable ">
                                    <h3 class="g-title">Palavra da Direção</h3>
                                    <ul class="nav menu mod-list">
                                        <li class="item-116">Haydee
Diretora da Fatec Campinas<br>Ao nos aproximarmos de mais um
final de semestre verificamos o quanto
foram proveitosas todas as atividades
acadêmicas realizadas na Fatec
Campinas. A principal delas foram as
aulas, que é o evento mais importante
da Faculdade. Mas, além disto tivemos,
por exemplo, a nossa Semana de
Tecnologia, na qual foram ministradas palestras e mini cursos
de grande relevância para formação e atualização
profissional. Destacamos ainda a nossa
Empregabilidade e Oportunidades, que contou com a
participação de várias empresas, que disponibilizaram vagas
para os alunos tanto de estágios como de contratação
efetiva. Foi um evento marcante, no qual tivemos também a
participação do coral Universitário da Unicamp, embelezando
sobremaneira o nosso evento.
 Parabenizo a todos os professores e toda equipe
administrativa pela dedicação e eficiência com que tem se
empenhado para que esta Fatec cumpra sua missão com
excelência. <br><br></li>
                                        <li class="item-118"></li>
                                        <li class="item-117"><h4>Química forense geral</h4><h1>
</h1>
DR. ERALDO LUIZ LEHMANN<br>
Graduação em Química pela UNICAMP, mestra
Analítica e Doutor em Ciências
Trabalha no Laboratório de Ensino de Química Analítica Clássica
Universidade Estadual de Campinas</li>
                                        
                                </div>
                            </div>
                            <div class="platform-content">
                                <div class="moduletable ">
                                    <h3 class="g-title">Últimas Notícias </h3>
                                    <ul class="latestnews mod-list">
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/306-byd-energy-doa-10-paineis-para-fatec-de-campinas" itemprop="url">
                                                <span itemprop="name">
				BYD Energy doa 10 painéis para Fatec de Campinas			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/305-vi-semana-da-tecnologia" itemprop="url">
                                                <span itemprop="name">
				VI Semana da Tecnologia			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/304-vestibular-2020" itemprop="url">
                                                <span itemprop="name">
				Vestibular 2020			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/303-12-edicao-da-isa-expo-campinas" itemprop="url">
                                                <span itemprop="name">
				12ª Edição da ISA EXPO CAMPINAS			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/302-websai-2019-participe" itemprop="url">
                                                <span itemprop="name">
				WebSai 2019 Participe!			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/300-feira-do-livro" itemprop="url">
                                                <span itemprop="name">
				Feira do Livro			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/299-edital-de-processo-de-selecao-de-alunos-para-bolsas-santander-graduacao-do-santander-universidades" itemprop="url">
                                                <span itemprop="name">
				Edital de Processo de Seleção de alunos para Bolsas Santander Graduação do Santander Universidades.			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/298-edital-de-programa-de-mobilidade-academica-internacional-promaips" itemprop="url">
                                                <span itemprop="name">
				Edital de Programa de Mobilidade Acadêmica Internacional – PROMAIPS			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/296-trote-solidario" itemprop="url">
                                                <span itemprop="name">
				Trote Solidário 			</span>
                                            </a>
                                        </li>
                                        <li itemscope="" itemtype="https://schema.org/Article">
                                            <a href="/site/index.php/292-selecao-de-alunos-para-o-curso-de-empreendedorismo" itemprop="url">
                                                <span itemprop="name">
				Seleção de alunos para o curso de Empreendedorismo			</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="platform-content">
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </main>


  

   

    <?php include_once("footer.php")  ?>

<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div>
<div class="autocomplete-suggestions" style="position: absolute; display: none; width: 300px; max-height: 400px; z-index: 9999;"></div><div style="font-size:10rem;"></div></body></html>
