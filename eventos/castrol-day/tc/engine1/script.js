// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_basic_linear(j,g,a){var c=jQuery;var f=c(this);var e=a.find(".ws_list");var i=c("<div>").addClass("ws_effect ws_basic_linear").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(a);var b=c("<div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(i);var h=c("<div>").css({position:"absolute",left:"auto",top:"auto",width:"50%",height:"100%",overflow:"hidden"}),d=h.clone();b.append(h,d);this.go=function(k,n,m){b.stop(1,1);if(m==undefined){m=(!!((k-n+1)%g.length)^j.revers?"left":"right")}else{m=m?"left":"right"}var o=c(g[n]);var l={width:o.width()||j.width,height:o.height()||j.height};o.clone().css(l).appendTo(h).css(m,0);c(g[k]).clone().css(l).appendTo(d).show();if(m=="right"){h.css("left","50%");d.css("left",0)}else{h.css("left",0);d.css("left","50%")}var q={},p={};q[m]=0;p[m]=-a.width();if(j.support.transform){if(m=="right"){q.left=q.right;p.left=-p.right}q={translate:[q.left,0,0]};p={translate:[p.left,0,0]}}e.hide();wowAnimate(b.css({left:"auto",right:"auto",top:0}).css(m,0).show(),q,p,j.duration,"easeInOutExpo",function(){f.trigger("effectEnd");b.hide().find("div").html("")})}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"basic_linear",prev:"",next:"",duration:20*100,delay:20*100,width:800,height:600,autoPlay:true,autoPlayVideo:false,playPause:false,stopOnHover:true,loop:false,bullets:0,caption:false,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:true,gestures:2,onBeforeStep:0,images:[{src:"./img20170502wa0001.jpg",title:"IMG-20170502-WA0001"},{src:"./img20170502wa0002.jpg",title:"IMG-20170502-WA0002"},{src:"./img20170502wa0003.jpg",title:"IMG-20170502-WA0003"},{src:"./img20170502wa0004.jpg",title:"IMG-20170502-WA0004"},{src:"./img20170502wa0005.jpg",title:"IMG-20170502-WA0005"},{src:"./img20170502wa0006.jpg",title:"IMG-20170502-WA0006"},{src:"./img20170502wa0007.jpg",title:"IMG-20170502-WA0007"},{src:"./img20170502wa0008.jpg",title:"IMG-20170502-WA0008"},{src:"./img20170502wa0009.jpg",title:"IMG-20170502-WA0009"},{src:"./img20170502wa0010.jpg",title:"IMG-20170502-WA0010",href:"http://wowslider.com/vi"},{src:"./img20170502wa0011.jpg",title:"IMG-20170502-WA0011"}]});