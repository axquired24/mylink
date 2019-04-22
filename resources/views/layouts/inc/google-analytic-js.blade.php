@if(config("app.env") == "production")
<!-- Histats.com  (div with counter) -->
{{--<div id="histats_counter"></div>--}}

<!-- Histats.com  START  (aync)-->
<script type="text/javascript">
    var _Hasync= _Hasync|| [];
    _Hasync.push(['Histats.start', '1,4210507,4,501,95,18,00010000']);
    _Hasync.push(['Histats.fasi', '1']);
    _Hasync.push(['Histats.track_hits', '']);
    (function() {
        var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
        hs.src = ('//s10.histats.com/js15_as.js');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
    })();
</script>

{{--<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4210507&101" alt="free html hit counter"border="0"></a></noscript>--}}
<!-- Histats.com  END  -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132826956-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-132826956-1');
</script>

@else
    <!-- Histat & Google Analytic isn't activated on non production mode -->
@endif