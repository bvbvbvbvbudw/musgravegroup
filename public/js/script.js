/**handles:simple-share-buttons-adder-ssba**/
var Main=function(s,r){"use strict";return{data:{},boot:function(t){this.data=t,s(document).ready(function(){this.init()}.bind(this))},init:function(){this.listen(),this.removeP()},listen:function(){var e=this;s("body").on("click",".ssbp-wrap a",function(t){t.preventDefault(),e.engageShareButton(this)})},engageShareButton:function(t){if("mobile"===s(t).data("facebook"))r.ui({method:"share",mobile_iframe:!0,href:s(t).data("href")},function(t){});else if("copy"===s(t).data("site")||"email"===s(t).data("site")||"print"===s(t).data("site")||"pinterest"===s(t).data("site"))if("copy"===s(t).data("site")){const o=document.querySelector('[data-site="copy"]');if(navigator.clipboard.writeText(o.getAttribute("href")),o){const a=document.createElement("span");a.innerText="URL Copied!",a.className="copy-notify",a.style.opacity="1",a.style.width="100px",a.style.fontSize="12px",a.style.transition="all .6s",a.style.position="absolute",a.style.top="-24px",a.style.left="-24px",o.append(a),setTimeout(()=>{a.style.opacity="0",a.style.minWidth="0",a.style.width="0",a.style.padding="0",a.style.overflow="hidden",setTimeout(()=>{a.remove()},1e3)},1500)}}else window.location.href=s(t).attr("href");else{var e=575,i=520,e=(s(window).width()-e)/2,n,e="status=1,width=575,height=520,top="+(s(window).height()-i)/2+",left="+e;window.open(s(t).attr("href"),"share",e)}},removeP:function(){}}}(window.jQuery,window.FB);
