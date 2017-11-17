/*------------------------------------------------------------------------
# MD Slider - March 18, 2013
# ------------------------------------------------------------------------
# Websites:  http://www.megadrupal.com -  Email: info@megadrupal.com
--------------------------------------------------------------------------*/

(function(e){effectsIn=["rollIn","fadeIn","fadeInUp","fadeInDown","fadeInLeft","fadeInRight","fadeInUpBig","fadeInDownBig","fadeInLeftBig","fadeInRightBig","bounceIn","bounceInDown","bounceInUp","bounceInLeft","bounceInRight","rotateIn","rotateInDownLeft","rotateInDownRight","rotateInUpLeft","rotateInUpRight","lightSpeedIn"];effectsOut=["rollOut","fadeOut","fadeOutUp","fadeOutDown","fadeOutLeft","fadeOutRight","fadeOutUpBig","fadeOutDownBig","fadeOutLeftBig","fadeOutRightBig","bounceOut","bounceOutDown","bounceOutUp","bounceOutLeft","bounceOutRight","rotateOut","rotateOutDownLeft","rotateOutDownRight","rotateOutUpLeft","rotateOutUpRight","lightSpeedOut"];var t=effectsIn.length;var n=effectsOut.length;e.fn.mdSlider=function(r){function A(){s.addClass("loading-image");var t="";if(r.responsive)t+=" md-slide-responsive";if(r.fullwidth)t+=" md-slide-fullwidth";if(r.showBullet&&r.posBullet)t+=" md-slide-bullet-"+r.posBullet;if(!r.showBullet&&r.showThumb&&r.posThumb)t+=" md-slide-thumb-"+r.posThumb;s.wrap('<div class="'+r.className+t+'"><div class="md-item-wrap"></div></div>');u=s.parent();o=u.parent();l=r.responsive?s.width():r.width;c=r.height;h=[];a=W();if(a)o.addClass("md-touchdevice");s.find("."+r.itemClassName).each(function(t){f++;h[t]=e(this);e(this).find(".md-object").each(function(){var t=e(this).data("y")?e(this).data("y"):0,n=e(this).data("x")?e(this).data("x"):0,i=e(this).data("width")?e(this).data("width"):0,s=e(this).data("height")?e(this).data("height"):0;if(i>0){e(this).width(i/r.width*100+"%")}if(s>0){e(this).height(s/r.height*100+"%")}var o={top:t/r.height*100+"%",left:n/r.width*100+"%"};e(this).css(o)});if(t>0)e(this).hide()});O();M();if(r.slideShow){N=true}e(".md-object",s).hide();if(e(".md-video",o).size()>0){if(r.videoBox){e(".md-video",o).mdvideobox()}else{var n=e('<div class="md-video-control" style="display: none"></div>');o.append(n);e(".md-video",o).click(function(){var t=e("<iframe></iframe>");t.attr("allowFullScreen","").attr("frameborder","0").css({width:"100%",height:"100%",background:"black"});t.attr("src",e(this).attr("href"));var r=e('<a href="#" class="md-close-video" title="Close video"></a>');r.click(function(){n.html("").hide();N=true;return false});n.html("").append(t).append(r).show();N=false;return false})}}e(window).resize(function(){X()});J();X()}function O(){if(r.slideShow&&r.showLoading){var t=e('<div class="loading-bar-hoz loading-bar-'+r.loadingPosition+'"><div class="br-timer-glow" style="left: 120px;"></div><div class="br-timer-bar" style="width:220px"></div></div>');o.append(t);g=e(".br-timer-bar",t);y=e(".br-timer-glow",t)}if(r.slideShow&&r.pauseOnHover){u.hover(function(){C=true},function(){C=false})}if(r.styleBorder!=0){var n='<div class="border-top border-style-'+r.styleBorder+'"></div>';n+='<div class="border-bottom border-style-'+r.styleBorder+'"></div>';if(!r.fullwidth){n+='<div class="border-left border-style-'+r.styleBorder+'"><div class="edge-top"></div><div class="edge-bottom"></div></div>';n+='<div class="border-right border-style-'+r.styleBorder+'"><div class="edge-top"></div><div class="edge-bottom"></div></div>'}o.append(n)}if(r.styleShadow!=0){var i='<div class="md-shadow md-shadow-style-'+r.styleShadow+'"></div>'}if(r.showArrow){v=e('<div class="md-arrow" style="opacity:0;"><div class="md-arrow-left"><span></span></div><div class="md-arrow-right"><span></span></div></div>');u.append(v);e(".md-arrow-right",v).bind("click",function(){F()});e(".md-arrow-left",v).bind("click",function(){I()})}if(r.showBullet!=false){m=e('<div class="md-bullets"></div>');o.append(m);for(var a=0;a<f;a++){m.append('<div class="md-bullet"  rel="'+a+'"><a></a></div>')}if(r.showThumb){var l=parseInt(s.data("thumb-width")),c=parseInt(s.data("thumb-height"));for(var a=0;a<f;a++){var p=h[a].data("thumb");if(p){var d=e("<img />").attr("src",p).css({top:-(9+c)+"px",left:-(l/2-2)+"px",opacity:0});e("div.md-bullet:eq("+a+")",m).append(d).append('<div class="md-thumb-arrow" style="opacity: 0"></div>')}}e("div.md-bullet",m).hover(function(){e(this).addClass("md_hover");var t=e("img",this);if(t.length){t.show().animate({opacity:1},200);e(".md-thumb-arrow",this).show().animate({opacity:1},200)}},function(){e(this).removeClass("md_hover");e("img",this).animate({opacity:0},200,function(){e(this).hide()});e(".md-thumb-arrow",this).animate({opacity:0},200,function(){e(this).hide()})})}e("div.md-bullet",o).click(function(){if(e(this).hasClass("md-current")){return false}var t=e(this).attr("rel");H(t)})}else if(r.showThumb){var w=e('<div class="md-thumb"><div class="md-thumb-container"><div class="md-thumb-items"></div></div></div>').appendTo(o);b=e(".md-thumb-items",w);for(var a=0;a<f;a++){var p=h[a].data("thumb");if(p){var E=e('<a class="md-thumb-item" />').attr("rel",a).append(e("<img />").attr("src",p));b.append(E)}}e("a",b).click(function(){if(e(this).hasClass("md-current")||x){return false}var t=e(this).attr("rel");H(t)})}}function M(){if(a){s.bind("touchstart",function(e){e=e.originalEvent.touches[0]||e.originalEvent.changedTouches[0];if(!E){E=true;if(r.transitions=="scrollVert"||r.transitions=="scrollUp"||r.transitions=="scrollDown")this.mouseY=e.pageY;else this.mouseX=e.pageX}});s.bind("touchmove",function(e){e=e.originalEvent.touches[0]||e.originalEvent.changedTouches[0];if(E){if(r.transitions=="scrollVert"||r.transitions=="scrollUp"||r.transitions=="scrollDown")S=e.pageY-this.mouseY;else S=e.pageX-this.mouseX}return false});s.bind("touchend",function(e){E=false;if(S>r.touchSensitive){I();S=0;return false}else if(S<-r.touchSensitive){F();S=0;return false}});if(r.touchArrow&&v){v.css({opacity:1}).show()}}else{u.hover(function(){if(v){v.stop(true,true).animate({opacity:1},200)}},function(){if(v){v.stop(true,true).animate({opacity:0},200)}});o.trigger("hover")}if(r.enableDrag){s.mousedown(function(e){if(!E){E=true;if(r.transitions=="scrollVert"||r.transitions=="scrollUp"||r.transitions=="scrollDown")this.mouseY=e.pageY;else this.mouseX=e.pageX}return false});s.mousemove(function(e){if(E){if(r.transitions=="scrollVert"||r.transitions=="scrollUp"||r.transitions=="scrollDown")S=e.pageY-this.mouseY;else S=e.pageX-this.mouseX}return false});s.mouseup(function(e){E=false;if(S>r.touchSensitive){I()}else if(S<-r.touchSensitive){F()}S=0;return false});s.mouseleave(function(e){s.mouseup()})}}function _(){if(b){b.unbind("touchstart");b.unbind("touchmove");b.unbind("touchmove");b.css("left",0);var t=e("a",b).width()*f;var n=b.parent().parent();e(".md-thumb-next",n).remove();e(".md-thumb-prev",n).remove();if(t>e(".md-thumb-container",n).width()){w=e(".md-thumb-container",n).width()-t;b.width(t);n.append('<div class="md-thumb-prev"></div><div class="md-thumb-next"></div>');e(".md-thumb-prev",n).click(function(){D("right")});e(".md-thumb-next",n).click(function(){D("left")});P();if(a){x=true;var i,s;b.bind("touchstart",function(e){e=e.originalEvent.touches[0]||e.originalEvent.changedTouches[0];i=true;this.mouseX=e.pageX;s=b.position().left;return false});b.bind("touchmove",function(e){e.preventDefault();e=e.originalEvent.touches[0]||e.originalEvent.changedTouches[0];if(i){b.css("left",s+e.pageX-this.mouseX)}return false});b.bind("touchend",function(t){t.preventDefault();t=t.originalEvent.touches[0]||t.originalEvent.changedTouches[0];i=false;if(Math.abs(t.pageX-this.mouseX)<r.touchSensitive){var n=e(t.target).closest("a.md-thumb-item");if(n.length){H(n.attr("rel"))}b.stop(true,true).animate({left:s},400);return false}if(b.position().left<w){b.stop(true,true).animate({left:w},400,function(){P()})}else if(b.position().left>0){b.stop(true,true).animate({left:0},400,function(){P()})}s=0;return false})}}}}function D(t){if(b){if(t=="left"){var n=b.position().left;if(n>w){var r=e(".md-thumb-container",o).width();if(n-r>w){b.stop(true,true).animate({left:n-r},400,function(){P()})}else{b.stop(true,true).animate({left:w},400,function(){P()})}}}else if(t=="right"){var n=b.position().left;if(n<0){var r=e(".md-thumb-container",o).width();if(n+r<0){b.stop(true,true).animate({left:n+r},400,function(){P()})}else{b.stop(true,true).animate({left:0},400,function(){P()})}}}else{var i=e("a",b).index(e("a.md-current",b));if(i>=0){var n=b.position().left;var s=i*e("a",b).width();if(s+n<0){b.stop(true,true).animate({left:-s},400,function(){P()})}else{var u=s+e("a",b).width();var r=e(".md-thumb-container",o).width();if(u+n>r){b.stop(true,true).animate({left:r-u},400,function(){P()})}}}}}}function P(){var t=b.position().left;if(t>w){e(".md-thumb-next",o).show()}else{e(".md-thumb-next",o).hide()}if(t<0){e(".md-thumb-prev",o).show()}else{e(".md-thumb-prev",o).hide()}}function H(t,n){L=0;if(g){var i=L*l/T;g.width(i);y.css({left:i-100+"px"})}if(t!=p){d=p;if(n===null){n=t>d}var o=z(r.transitions,n);if(o){r.onStartTransition.call(s);if(h[d]){e("div.md-bullet:eq("+d+")",m).removeClass("md-current");e("a:eq("+d+")",b).removeClass("md-current");R(h[d]);h[d].animate(o.oSlide,r.transitionsSpeed,function(){h[d].hide()});T=h[t].data("timeout")?h[t].data("timeout"):r.slideShowDelay;h[t].css(o.newSlide.before).show();h[t].animate(o.newSlide.after,r.transitionsSpeed,function(){r.onEndTransition.call(s)})}else{T=h[t].data("timeout")?h[t].data("timeout"):r.slideShowDelay;h[t].css(o.newSlide.after).show()}if(m)e("div.md-bullet:eq("+t+")",m).addClass("md-current");if(b)e("a:eq("+t+")",b).addClass("md-current");U(h[t]);D();p=t}}}function B(){H(0);k=setInterval(j,20)}function j(){if(N&&!C){L+=20;if(L>T){F()}else if(g){var e=L*l/T;g.width(e);y.css({left:e-100+"px"})}}}function F(){var e=p;e++;if(e>=f&&r.loop){e=0;H(e,true)}else if(e<f){H(e,true)}}function I(){var e=p;e--;if(e<0&&r.loop){e=f-1;H(e,false)}else if(e>=0){H(e,false)}}function q(t){clearTimeout(t.data("timer-start"));if(e.browser.msie&&parseInt(e.browser.version)<=9){t.fadeOut()}else{t.removeClass(effectsIn.join(" "));var r=t.data("easeout");if(r){if(r=="random")r=effectsOut[Math.floor(Math.random()*n)];t.addClass(r)}else{t.hide()}}}function R(t){t.find(".md-object").each(function(){var t=e(this);t.stop(true,true);clearTimeout(t.data("timer-start"));clearTimeout(t.data("timer-stop"))})}function U(n){n.find(".md-object").each(function(n){var r=e(this);if(r.data("easeout"))r.removeClass(effectsOut.join(" "));var i=r.data("easein")?r.data("easein"):"";if(i=="random")i=effectsIn[Math.floor(Math.random()*t)];r.removeClass(effectsIn.join(" "));r.hide();if(r.data("start")!=undefined){r.data("timer-start",setTimeout(function(){if(i==""||e.browser.msie&&parseInt(e.browser.version)<=9){r.fadeIn()}else{r.show().addClass(i)}},r.data("start")))}else{r.show().addClass(i)}if(r.data("stop")!=undefined){if(f==1&&r.data("stop")==T&&r.data("easeout")==null)return;r.data("timer-stop",setTimeout(function(){q(r)},r.data("stop")))}})}function z(e,t){if(e=="scrollLeft"){return{oSlide:{left:-l+"px",top:0},newSlide:{before:{left:l+"px",top:0},after:{left:0,top:0}}}}else if(e=="scrollRight"){return{oSlide:{left:l+"px",top:0},newSlide:{before:{left:-l+"px",top:0},after:{left:0,top:0}}}}else if(e=="scrollHorz"){if(t)return z("scrollLeft");else return z("scrollRight")}else if(e=="scrollUp"){return{oSlide:{left:0,top:-c+"px"},newSlide:{before:{left:0,top:c+"px"},after:{left:0,top:0}}}}else if(e=="scrollDown"){return{oSlide:{left:0,top:c+"px"},newSlide:{before:{left:0,top:-c+"px"},after:{left:0,top:0}}}}else if(e=="scrollVert"){if(t)return z("scrollUp");else return z("scrollDown")}else if(e=="fade"){return{oSlide:{left:0,top:0,opacity:0},newSlide:{before:{left:0,top:0,opacity:0},after:{left:0,top:0,opacity:1}}}}}function W(){return"ontouchstart"in window||"createTouch"in document}function X(){o.width();l=r.responsive?o.width():r.width;if(r.responsive&&l<r.width){c=Math.round(l/r.width*r.height)}else{c=r.height}if(!r.responsive&&!r.fullwidth)o.width(l);if(!r.responsive&&r.fullwidth)o.css({"min-width":l+"px"});if(r.fullwidth){e(".md-objects",s).width(r.width);var t=20;if((o.width()-r.width)/2>20)t=(o.width()-r.width)/2;o.find(".md-bullets").css({left:t,right:t});o.find(".md-thumb").css({left:t,right:t})}if(r.responsive&&r.fullwidth&&o.width()<r.width)e(".md-objects",s).width(l);o.height(c);e(".md-slide-item",s).height(c);V();_();G();Y();Z()}function V(){e(".md-slide-item",s).each(function(){var t=e(".md-mainimg img",this);if(t.data("defW")&&t.data("defH")){var n=t.data("defW"),r=t.data("defH");Q(t,n,r)}})}function J(){var t=e(".md-slide-item .md-mainimg img",s).length;s.data("count",t);if(s.data("count")==0)K();e(".md-slide-item .md-mainimg img",s).each(function(){e(this).load(function(){var t=e(this);if(!t.data("defW")){var n=et(t.attr("src"));Q(t,n.width,n.height);t.data({defW:n.width,defH:n.height})}s.data("count",s.data("count")-1);if(s.data("count")==0)K()});if(this.complete)e(this).load()})}function K(){s.removeClass("loading-image");s.removeAttr("style");B()}function Q(t,n,r){var i=e(".md-slide-item:visible",s).width(),o=e(".md-slide-item:visible",s).height();if(r>0&&o>0){if(n/r>i/o){var u=i-o/r*n;t.css({width:"auto",height:"100%"});if(u<0){t.css({left:u/2+"px",top:0})}else{t.css({left:0,top:0})}}else{var a=o-i/n*r;t.css({width:"100%",height:"auto"});if(a<0){t.css({top:a/2+"px",left:0})}else{t.css({left:0,top:0})}}}}function G(){var t=1;if(parseInt(e.browser.version,10)<9)t=6;if(o.width()<r.width){e(".md-objects",s).css({"font-size":o.width()/r.width*100-t+"%"})}else{e(".md-objects",s).css({"font-size":100-t+"%"})}}function Y(){if(o.width()<r.width&&r.responsive){e(".md-objects > div",s).each(function(){var t=o.width()/r.width,n=e(this),i=[];if(n.data("padding-top"))i["padding-top"]=n.data("padding-top")*t;if(n.data("padding-right"))i["padding-right"]=n.data("padding-right")*t;if(n.data("padding-bottom"))i["padding-bottom"]=n.data("padding-bottom")*t;if(n.data("padding-left"))i["padding-left"]=n.data("padding-left")*t;if(n.find("a").length){n.find("a").stop().animate(i,0)}else{n.stop().animate(i,0)}})}else{e(".md-objects > div",s).each(function(){var t=e(this),n=[];if(t.data("padding-top")){n["padding-top"]=t.data("padding-top")}if(t.data("padding-right"))n["padding-right"]=t.data("padding-right");if(t.data("padding-bottom"))n["padding-bottom"]=t.data("padding-bottom");if(t.data("padding-left"))n["padding-left"]=t.data("padding-left");if(t.find("a").length){t.find("a").stop().animate(n,0)}else{t.stop().animate(n,0)}})}}function Z(){if(r.showThumb&&!r.showBullet){thumbHeight=s.data("thumb-height");if(r.posThumb=="1"){thumbBottom=thumbHeight/2;o.find(".md-thumb").css({height:thumbHeight+10,bottom:-thumbBottom-10});o.css({"margin-bottom":thumbBottom+10})}else{o.find(".md-thumb").css({height:thumbHeight+10,bottom:-(thumbHeight+40)});o.css({"margin-bottom":thumbHeight+50})}}}function et(e){var t=new Image;t.src=e;var n={height:t.height,width:t.width};return n}var i={className:"md-slide-wrap",itemClassName:"md-slide-item",transitions:"scrollHorz",transitionsSpeed:600,width:990,height:420,responsive:true,fullwidth:true,styleBorder:0,styleShadow:0,posBullet:2,posThumb:1,slideShowDelay:6e3,slideShow:true,loop:false,pauseOnHover:false,showLoading:true,loadingPosition:"bottom",showArrow:true,touchArrow:false,showBullet:true,videoBox:false,showThumb:true,enableDrag:true,touchSensitive:50,onEndTransition:function(){},onStartTransition:function(){}};r=e.extend({},i,r);var s=e(this),o,u,a,f=0,l,c,h,p=-1,d,v,m,g,y,b,w=0,E,S,x=false,T=0,N=false,C=false,k,L=0;A()}})(jQuery)