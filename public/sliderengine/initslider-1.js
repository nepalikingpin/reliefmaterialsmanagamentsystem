jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    jQuery("#amazingslider-1").amazingslider({
        jsfolder:jsFolder,
        width:900,
        height:300,
        skinsfoldername:"",
        loadimageondemand:false,
        watermarktextcss:"font:12px Arial,Tahoma,Helvetica,sans-serif;color:#333;padding:2px 4px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff;opacity:0.9;filter:alpha(opacity=90);",
        watermarkstyle:"text",
        enabletouchswipe:true,
        fullscreen:false,
        autoplayvideo:false,
        addmargin:true,
        watermarklinkcss:"text-decoration:none;font:12px Arial,Tahoma,Helvetica,sans-serif;color:#333;",
        watermarktext:"amazingslider.com",
        watermarklink:"http://amazingslider.com?source=watermark",
        randomplay:false,
        isresponsive:false,
        pauseonmouseover:true,
        playvideoonclickthumb:false,
        showwatermark:false,
        slideinterval:5000,
        watermarkpositioncss:"display:block;position:absolute;bottom:4px;right:4px;",
        watermarkimage:"",
        fullwidth:false,
        transitiononfirstslide:false,
        watermarktarget:"_blank",
        scalemode:"fill",
        loop:0,
        autoplay:true,
        navplayvideoimage:"play-32-32-0.png",
        navpreviewheight:60,
        timerheight:2,
        descriptioncssresponsive:"font-size:12px;",
        shownumbering:false,
        skin:"Stylish",
        textautohide:true,
        addgooglefonts:true,
        navshowplaypause:true,
        navshowplayvideo:false,
        navshowplaypausestandalonemarginx:8,
        navshowplaypausestandalonemarginy:8,
        navbuttonradius:2,
        navthumbnavigationarrowimageheight:32,
        navmarginy:16,
        lightboxshownavigation:false,
        showshadow:false,
        navfeaturedarrowimagewidth:16,
        navpreviewwidth:120,
        googlefonts:"Inder",
        textpositionmarginright:24,
        bordercolor:"#ffffff",
        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",
        lightboxthumbwidth:80,
        navthumbnavigationarrowimagewidth:32,
        navthumbtitlehovercss:"text-decoration:underline;",
        texteffectresponsivesize:600,
        arrowwidth:32,
        texteffecteasing:"easeOutCubic",
        texteffect:"slide",
        lightboxthumbheight:60,
        navspacing:4,
        playvideoimage:"playvideo-64-64-0.png",
        ribbonimage:"ribbon_topleft-0.png",
        navwidth:20,
        navheight:20,
        arrowtop:50,
        timeropacity:0.6,
        titlecssresponsive:"font-size:12px;",
        navthumbnavigationarrowimage:"carouselarrows-32-32-0.png",
        navshowplaypausestandalone:false,
        texteffect1:"slide",
        navpreviewbordercolor:"#ffffff",
        ribbonposition:"topleft",
        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",
        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",
        arrowstyle:"none",
        navthumbtitleheight:20,
        textpositionmargintop:24,
        texteffectdelay:800,
        navswitchonmouseover:false,
        navarrowimage:"navarrows-20-20-1.png",
        arrowimage:"arrows-32-32-0.png",
        textstyle:"dynamic",
        playvideoimageheight:64,
        navfonthighlightcolor:"#ffffff",
        showbackgroundimage:false,
        navpreviewborder:4,
        navopacity:0.8,
        shadowcolor:"#aaaaaa",
        navbuttonshowbgimage:false,
        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",
        textbgcss:"display:none;",
        playvideoimagewidth:64,
        navborder:4,
        navshowpreviewontouch:false,
        bottomshadowimagewidth:110,
        showtimer:true,
        navradius:2,
        navmultirows:false,
        navshowpreview:false,
        navpreviewarrowheight:8,
        navmarginx:16,
        navfeaturedarrowimage:"featuredarrow-16-8-0.png",
        showribbon:false,
        navstyle:"numbering",
        textpositionmarginleft:24,
        descriptioncss:"display:inline; position:relative; font:14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#e04000; white-space:nowrap;  background-color:#fff; margin-top:16px; padding:10px; ",
        navplaypauseimage:"navplaypause-20-20-1.png",
        backgroundimagetop:-10,
        timercolor:"#ffffff",
        numberingformat:"%NUM/%TOTAL ",
        navfontsize:12,
        navhighlightcolor:"#ff4629",
        texteffectdelay1:1000,
        navimage:"bullet-24-24-0.png",
        texteffectduration1:800,
        navshowplaypausestandaloneautohide:false,
        navbuttoncolor:"#333333",
        navshowarrow:true,
        texteffectslidedirection:"bottom",
        navshowfeaturedarrow:false,
        lightboxbarheight:64,
        titlecss:"display:inline; position:relative; font:16px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff; white-space:nowrap; background-color:#e04000; padding:10px;",
        ribbonimagey:0,
        ribbonimagex:0,
        texteffectresponsive:true,
        texteffectslidedistance1:10,
        navrowspacing:8,
        navshowplaypausestandaloneposition:"bottomright",
        shadowsize:5,
        lightboxthumbtopmargin:12,
        arrowhideonmouseleave:1000,
        navshowplaypausestandalonewidth:28,
        navfeaturedarrowimageheight:8,
        navshowplaypausestandaloneheight:28,
        navpreviewposition:"top",
        backgroundimagewidth:120,
        navcolor:"#333333",
        navthumbtitlewidth:120,
        lightboxthumbbottommargin:8,
        texteffectseparate:true,
        arrowheight:32,
        arrowmargin:8,
        texteffectduration:600,
        bottomshadowimage:"bottomshadow-110-95-0.png",
        border:0,
        lightboxshowdescription:false,
        timerposition:"bottom",
        navfontcolor:"#ffffff",
        navthumbnavigationstyle:"arrow",
        borderradius:0,
        navbuttonhighlightcolor:"#ff4629",
        textpositionstatic:"bottom",
        navthumbstyle:"imageonly",
        texteffecteasing1:"easeOutCubic",
        textcss:"display:block; padding:8px 16px; text-align:left;",
        navbordercolor:"#ffffff",
        navpreviewarrowimage:"previewarrow-16-8-0.png",
        showbottomshadow:true,
        texteffectslidedistance:10,
        navdirection:"horizontal",
        textpositionmarginstatic:0,
        backgroundimage:"",
        navposition:"topright",
        texteffectslidedirection1:"bottom",
        navpreviewarrowwidth:16,
        textformat:"Red box",
        bottomshadowimagetop:95,
        textpositiondynamic:"bottomleft",
        navshowbuttons:true,
        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",
        textpositionmarginbottom:24,
        lightboxshowtitle:true,
        slice: {
            checked:true,
            effectdirection:0,
            effects:"up,down,updown",
            slicecount:10,
            duration:1500,
            easing:"easeOutCubic"
        },
        blocks: {
            columncount:5,
            checked:true,
            rowcount:5,
            effects:"topleft,bottomright,top,bottom,random",
            duration:1500,
            easing:"easeOutCubic"
        },
        fade: {
            duration:1000,
            easing:"easeOutCubic",
            checked:true
        },
        transition:"slice,blocks,fade",
        isfullscreen:false,
        textformat: {
            "Underneath center": {
                titlecssresponsive:"font-size:12px;",
                descriptioncss:"display:block; position:relative; font:14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#333; margin-top:8px;",
                texteffect1:"slide",
                descriptioncssresponsive:"font-size:12px;",
                texteffectseparate:false,
                texteffectduration:600,
                textpositionmarginleft:24,
                textpositionstatic:"bottomoutside",
                addgooglefonts:false,
                textpositionmargintop:24,
                texteffectdelay:500,
                texteffecteasing1:"easeOutCubic",
                texteffectdelay1:1000,
                texteffectduration1:600,
                googlefonts:"",
                textpositionmarginright:24,
                textautohide:false,
                textstyle:"static",
                texteffectslidedistance:30,
                texteffectslidedirection:"left",
                textcss:"display:block; padding:12px 0px; text-align:center; margin-top:4px;",
                titlecss:"display:block; position:relative; font:bold 16px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#333;",
                textpositionmarginstatic:0,
                texteffectresponsivesize:600,
                texteffectslidedirection1:"right",
                texteffectslidedistance1:120,
                textbgcss:"display:none;",
                texteffectresponsive:true,
                texteffecteasing:"easeOutCubic",
                textpositiondynamic:"bottomleft",
                textpositionmarginbottom:24,
                texteffect:"slide"
            },
            "Light box": {
                titlecssresponsive:"font-size:12px;",
                descriptioncss:"display:block; position:relative; font:12px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#333; white-space:nowrap; margin-top:8px;",
                texteffect1:"slide",
                descriptioncssresponsive:"font-size:12px;",
                texteffectseparate:false,
                texteffectduration:600,
                textpositionmarginleft:0,
                textpositionstatic:"bottom",
                addgooglefonts:false,
                textpositionmargintop:24,
                texteffectdelay:500,
                texteffecteasing1:"easeOutCubic",
                texteffectdelay1:1000,
                texteffectduration1:600,
                googlefonts:"",
                textpositionmarginright:0,
                textautohide:true,
                textstyle:"dynamic",
                texteffectslidedistance:30,
                texteffectslidedirection:"left",
                textcss:"display:block; padding:8px 16px; text-align:left;",
                titlecss:"display:block; position:relative; font:bold 14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#333; white-space:nowrap;",
                textpositionmarginstatic:0,
                texteffectresponsivesize:600,
                texteffectslidedirection1:"right",
                texteffectslidedistance1:120,
                textbgcss:"display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#fff; opacity:0.7; filter:alpha(opacity=70);",
                texteffectresponsive:true,
                texteffecteasing:"easeOutCubic",
                textpositiondynamic:"bottomleft",
                textpositionmarginbottom:24,
                texteffect:"fade"
            }
        }
    });
});