<?php 

$bandpage = get_field('bandpage');

?>
<section id="events">
	
  <div class="events-between">

    <?php if($bandpage === 'Yes'){ ?>    
    
    <div class="bp-widget"           
          data-bandpage-bandbid="12339930114297856"
          data-bandpage-widgettype="show"
          data-bandpage-height="100%" 
          data-bandpage-width="100%"
          data-bandpage-theme="light"       
          data-bandpage-font="Montserrat"
          data-bandpage-opacity="30">
    </div><!-- .bp-widget -->

    <?php }  else { ?>
  
  <div class="bp-fallback">

  <?php echo the_field('bandpage_fallback'); ?>

  </div>
  
  <?php } ?>
  </div><!-- .events-between -->
  


<script type='text/javascript'>;(function(){var e="sdk-js.bandpage.com",t="/embedscript";window._rm_lightningjs||function(e){function n(n,r){var i="1";return r&&(r+=(/\?/.test(r)?"&":"?")+"lv="+i),e[n]||function(){var i=window,s=document,o=n,u=s.location.protocol,a="load",f=0;(function(){function l(){n.P(a),n.w=1,e[o]("_load")}e[o]=function(){function a(){return a.id=s,e[o].apply(a,arguments)}var t=arguments,r=this,s=++f,u=r&&r!=i?r.id||0:0;return(n.s=n.s||[]).push([s,u,t]),a.then=function(e,t,r){var i=n.fh[s]=n.fh[s]||[],o=n.eh[s]=n.eh[s]||[],u=n.ph[s]=n.ph[s]||[];return e&&i.push(e),t&&o.push(t),r&&u.push(r),a},a};var n=e[o]._={};n.fh={},n.eh={},n.ph={},n.l=r?r.replace(/^\/\//,(u=="https:"?u:"http:")+"//"):r,n.p={0:+(new Date)},n.P=function(e){n.p[e]=new Date-n.p[0]},n.w&&l(),i.addEventListener?i.addEventListener(a,l,!1):i.attachEvent("on"+a,l),n.l&&function(){function e(){return["<",r,' onload="var d=',p,";d.getElementsByTagName('head')[0].",u,"(d.",a,"('script')).",f,"='",n.l,"'\">"].join("")}var r="body",i=s[r];if(!i)return setTimeout(arguments.callee,100);n.P(1);var u="appendChild",a="createElement",f="src",l=s[a]("div"),c=l[u](s[a]("div")),h=s[a]("iframe"),p="document",d="domain",v,m="contentWindow";l.style.display="none",i.insertBefore(l,i.firstChild).id=t+"-"+o,h.frameBorder="0",h.id=t+"-frame-"+o,/MSIE[ ]+6/.test(navigator.userAgent)&&(h[f]="javascript:false"),h.allowTransparency="true",c[u](h);try{h[m][p].open()}catch(g){n[d]=s[d],v="javascript:var d="+p+".open();d.domain='"+s.domain+"';",h[f]=v+"void(0);"}try{var y=h[m][p];y.write(e()),y.close()}catch(b){h[f]=v+'d.write("'+e().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}n.P(2)}()})()}(),e[n].lv=i,e[n]}var t="_rm_lightningjs",r=window[t]=n(t);r.require=n,r.modules=e}({}),function(n){if(n.bandpage)return;var r=_rm_lightningjs.require("$rm","//"+e+t),i=function(){},s=function(t){t.done||(t.done=i),t.fail||(t.fail=i);var n=r("load",t);n.then(t.done,t.fail);var s={done:function(e){return n.then(e,i),s},fail:function(e){return n.then(i,e),s}};return s},o=null;n.bandpage={load:s,ready:function(e){o.then(e,i)}},o=r("bootstrap",n.bandpage,window)}(window)})(this);</script>

<script>
	bandpage.load({
    "done" : function() {
        console.log("sdk ready");
    },
    "fail" : function() {
        console.log("Failed to initialize sdk");
    }
  });
});  
</script>

  <div class="scroller contact-scroller visual-fade">      
    <div class="link-scroll">
      <a href="#contact" id="3" ><i class="fa fa-chevron-down center"></i></a>
    </div>      
  </div><!-- .scroller -->

</section>