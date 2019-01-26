function showMobileMenu(){var e=document.getElementById("primaryMenuWrapper");document.getElementById("mobileMenuBurgerButton");e.classList.toggle("show"),mobileMenuBurgerButton.classList.toggle("is-active"),document.body.classList.toggle("unscrollable")}!function(context){"use strict";var win=context,doc=win.document,global_instance_name="cbinstance";function contentLoaded(e,t){var o=!1,i=!0,n=e.document,s=n.documentElement,a=n.addEventListener?"addEventListener":"attachEvent",r=n.addEventListener?"removeEventListener":"detachEvent",c=n.addEventListener?"":"on",l=function(i){"readystatechange"==i.type&&"complete"!=n.readyState||(("load"==i.type?e:n)[r](c+i.type,l,!1),!o&&(o=!0)&&t.call(e,i.type||i))},p=function(){try{s.doScroll("left")}catch(e){return void setTimeout(p,50)}l("poll")};if("complete"==n.readyState)t.call(e,"lazy");else{if(n.createEventObject&&s.doScroll){try{i=!e.frameElement}catch(e){}i&&p()}n[a](c+"DOMContentLoaded",l,!1),n[a](c+"readystatechange",l,!1),e[a](c+"load",l,!1)}}var Cookies={get:function(e){return decodeURIComponent(doc.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*"+encodeURIComponent(e).replace(/[-.+*]/g,"\\$&")+"\\s*\\=\\s*([^;]*).*$)|^.*$"),"$1"))||null},set:function(e,t,o,i,n,s){if(!e||/^(?:expires|max-age|path|domain|secure)$/i.test(e))return!1;var a="";if(o)switch(o.constructor){case Number:a=o===1/0?"; expires=Fri, 31 Dec 9999 23:59:59 GMT":"; max-age="+o;break;case String:a="; expires="+o;break;case Date:a="; expires="+o.toUTCString()}return doc.cookie=encodeURIComponent(e)+"="+encodeURIComponent(t)+a+(n?"; domain="+n:"")+(i?"; path="+i:"")+(s?"; secure":""),!0},has:function(e){return new RegExp("(?:^|;\\s*)"+encodeURIComponent(e).replace(/[-.+*]/g,"\\$&")+"\\s*\\=").test(doc.cookie)},remove:function(e,t,o){return!(!e||!this.has(e))&&(doc.cookie=encodeURIComponent(e)+"=; expires=Thu, 01 Jan 1970 00:00:00 GMT"+(o?"; domain="+o:"")+(t?"; path="+t:""),!0)}},Utils={merge:function(){var e,t={},o=0,i=arguments.length;if(0===i)return t;for(;o<i;o++)for(e in arguments[o])Object.prototype.hasOwnProperty.call(arguments[o],e)&&(t[e]=arguments[o][e]);return t},str2bool:function(e){switch((e=String(e)).toLowerCase()){case"false":case"no":case"0":case"":return!1;default:return!0}},fade_in:function(e){e.style.opacity<1&&(e.style.opacity=(parseFloat(e.style.opacity)+.05).toFixed(2),win.setTimeout(function(){Utils.fade_in(e)},50))},fade_out:function(e,t){if(void 0!==e){e.style.opacity=1;var o=t/1e3;e.style.transition="opacity "+o+"s ease",e.style.opacity=0,setTimeout(function(){e.parentNode.removeChild(e)},t)}},get_data_attribs:function(script){var data={};if(Object.prototype.hasOwnProperty.call(script,"dataset"))data=script.dataset;else{var attribs=script.attributes,key;for(key in attribs)if(Object.prototype.hasOwnProperty.call(attribs,key)){var attr=attribs[key];if(/^data-/.test(attr.name)){var camelized=Utils.camelize(attr.name.substr(5)),isFunction=0===camelized.lastIndexOf("on",0);data[camelized]=isFunction?eval(attr.value):attr.value}}}return data},normalize_keys:function(e){var t={};for(var o in e)if(Object.prototype.hasOwnProperty.call(e,o)){var i=Utils.camelize(o);t[i]=e[i]?e[i]:e[o]}return t},camelize:function(e){for(var t=e.indexOf("-");-1!==t;){var o=t===e.length-1,i=o?"":e[t+1],n=i.toUpperCase(),s=o?"-":"-"+i;t=(e=e.replace(s,n)).indexOf("-")}return e},find_script_by_id:function(e){for(var t=doc.getElementsByTagName("script"),o=0,i=t.length;o<i;o++)if(e===t[o].id)return t[o];return null},is_numeric:function(e){return parseFloat(e)==e}},script_el_invoker=Utils.find_script_by_id("cookiebanner"),Cookiebanner=context.Cookiebanner=function(e){this.init(e)};Cookiebanner.prototype={cookiejar:Cookies,init:function(e){this.inserted=!1,this.closed=!1;if(this.default_options={cookie:"cookiebanner-accepted",closeText:"&#10006;",closeStyle:"float:right;padding-left:5px;",closePrecedes:!0,cookiePath:"/",cookieDomain:null,cookieSecure:!1,debug:!1,expires:1/0,zindex:255,mask:!1,maskOpacity:.5,maskBackground:"#000",height:"auto",minHeight:"21px",link:"#aaa",position:"bottom",padding:"5px 16px",message:"We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies.",linkmsg:"Learn more",moreinfo:"http://aboutcookies.org",moreinfoTarget:"_blank",moreinfoRel:"noopener noreferrer",moreinfoDecoration:"none",moreinfoFontWeight:"normal",moreinfoFontSize:null,effect:null,instance:global_instance_name,textAlign:"center",acceptOnScroll:!1,acceptOnClick:!1,acceptOnTimeout:null,acceptOnFirstVisit:!1,onInserted:null,onClosed:null,delayBeforeClose:null,fadeOutDurationMs:2e3},this.options=this.default_options,this.script_el=script_el_invoker,this.script_el){var t=Utils.get_data_attribs(this.script_el);this.options=Utils.merge(this.options,t)}e&&(e=Utils.normalize_keys(e),this.options=Utils.merge(this.options,e)),global_instance_name=this.options.instance,this.options.zindex=parseInt(this.options.zindex,10),this.options.mask=Utils.str2bool(this.options.mask),this.options.closePrecedes=Utils.str2bool(this.options.closePrecedes),"string"==typeof this.options.expires&&("function"==typeof context[this.options.expires]?this.options.expires=context[this.options.expires]:Utils.is_numeric(this.options.expires)&&(this.options.expires=Number(parseFloat(this.options.expires)))),"function"==typeof this.options.expires&&(this.options.expires=this.options.expires()),this.script_el&&this.run()},log:function(){"undefined"!=typeof console&&console.log.apply(console,arguments)},run:function(){if(!this.agreed()){var e=this;contentLoaded(win,function(){e.insert()})}},build_viewport_mask:function(){var e=null;if(!0===this.options.mask){this.options.maskOpacity,this.options.maskBackground;var t='<div id="cookiebanner-mask" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:'+this.options.zindex+';"></div>',o=doc.createElement("div");o.innerHTML=t,e=o.firstChild}return e},agree:function(){return this.cookiejar.set(this.options.cookie,1,this.options.expires,this.options.cookiePath,""!==this.options.cookieDomain?this.options.cookieDomain:"",!!this.options.cookieSecure),!0},agreed:function(){return this.cookiejar.has(this.options.cookie)},close:function(){if("fade"===this.options.effect)Utils.fade_out(this.element,this.options.fadeOutDurationMs),this.closed=!0;else if(this.inserted){this.closed||(this.element&&this.element.parentNode.removeChild(this.element),this.element_mask&&this.element_mask.parentNode.removeChild(this.element_mask),this.closed=!0),this.closed=!0;var e=this.options.onClosed;e&&"function"==typeof e&&e(this)}return this.closed},agree_and_close:function(){if(this.options.debug||this.agree(),!this.options.delayBeforeClose||isNaN(parseFloat(this.options.delayBeforeClose))||!isFinite(this.options.delayBeforeClose))return this.close();var e=this;setTimeout(function(){e.close()},this.options.delayBeforeClose)},cleanup:function(){return this.close(),this.unload()},unload:function(){return this.script_el&&this.script_el.parentNode.removeChild(this.script_el),context[global_instance_name]=void 0,!0},insert:function(){this.element_mask=this.build_viewport_mask();var e=this.options.zindex;this.element_mask&&(e+=1);var t=doc.createElement("div");t.className="cookiebanner",t.style.position="fixed",t.style.left=0,t.style.right=0,t.style.height=this.options.height,t.style.minHeight=this.options.minHeight,t.style.zIndex=e,t.style.background=this.options.bg,t.style.color=this.options.fg,t.style.lineHeight=t.style.minHeight,t.style.padding=this.options.padding,t.style.fontFamily=this.options.fontFamily,t.style.fontSize=this.options.fontSize,t.style.textAlign=this.options.textAlign,"top"===this.options.position?t.style.top=0:t.style.bottom=0;var o='<div class="cookiebanner-close" style="'+this.options.closeStyle+'">'+this.options.closeText+"</div>",i="<span>"+this.options.message+(this.options.linkmsg?" <a>"+this.options.linkmsg+"</a>":"")+"</span>";this.options.closePrecedes?t.innerHTML=o+i:t.innerHTML=i+o,this.element=t;var n=t.getElementsByTagName("a")[0];n&&(n.href=this.options.moreinfo,n.target=this.options.moreinfoTarget,this.options.moreinfoRel&&""!==this.options.moreinfoRel&&(n.rel=this.options.moreinfoRel),n.style.textDecoration=this.options.moreinfoDecoration,n.style.color=this.options.link,n.style.fontWeight=this.options.moreinfoFontWeight,""!==this.options.moreinfoFontSize&&(n.style.fontSize=this.options.moreinfoFontSize));var s=t.getElementsByTagName("div")[0];function a(e,t,o){var i=e.addEventListener?"addEventListener":"attachEvent",n=e.addEventListener?"":"on";e[i](n+t,o,!1)}s.style.cursor="pointer";var r=this;a(s,"click",function(){r.agree_and_close()}),this.element_mask&&(a(this.element_mask,"click",function(){r.agree_and_close()}),doc.body.appendChild(this.element_mask)),this.options.acceptOnScroll&&a(window,"scroll",function(){r.agree_and_close()}),this.options.acceptOnClick&&a(window,"click",function(){r.agree_and_close()}),this.options.acceptOnTimeout&&!isNaN(parseFloat(this.options.acceptOnTimeout))&&isFinite(this.options.acceptOnTimeout)&&setTimeout(function(){r.agree_and_close()},this.options.acceptOnTimeout),this.options.acceptOnFirstVisit&&r.agree(),doc.body.appendChild(this.element),this.inserted=!0;var c=this.options.onInserted;c&&"function"==typeof c&&c(this),"fade"===this.options.effect?(this.element.style.opacity=0,Utils.fade_in(this.element)):this.element.style.opacity=1}},script_el_invoker&&(context[global_instance_name]||(context[global_instance_name]=new Cookiebanner))}(window),window.onload=function(){let e=(new Date).getFullYear();console.log(e),console.log("hello"),document.querySelector(".year").innerHTML=e},document.getElementById("copyright_date").innerHTML='<a href="https://www.johnyang.co">WordPress Design &amp; Development by JY</a>';