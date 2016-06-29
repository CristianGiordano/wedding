@section('styles.after')
    @parent
<link href="http://addtocalendar.com/atc/1.5/atc-style-blue.css" rel="stylesheet" type="text/css">
@endsection

@section('scripts.after')
    @parent
<script type="text/javascript">(function () {
        if (window.addtocalendar)if(typeof window.addtocalendar.start == "function")return;
        if (window.ifaddtocalendar == undefined) { window.ifaddtocalendar = 1;
            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
            s.type = 'text/javascript';s.charset = 'UTF-8';s.async = true;
            s.src = ('https:' == window.location.protocol ? 'https' : 'http')+'://addtocalendar.com/atc/1.5/atc.min.js';
            var h = d[g]('body')[0];h.appendChild(s); }})();
</script>
@endsection

<div class="row">
    <div class="col-md-offset-3 col-md-6 text-center">

        <div class="page-title">
            <h1>ON THE DAY</h1>

            <div class="banner-text dark medium" style="letter-spacing:3px">
                <h4>*** 26-Aug-2016 ***</h4>
            </div>

            <p class="text-center">

                <span class="addtocalendar atc-style-blue">
                    <var class="atc_event">
                        <var class="atc_date_start">2016-08-26 13:30:00</var>
                        <var class="atc_date_end">2016-08-26 23:30:00</var>
                        <var class="atc_timezone">Europe/London</var>
                        <var class="atc_title">Lucy & Cristian - Wedding!</var>
                        <var class="atc_description">YAY! Wedding</var>
                        <var class="atc_location">Haslemere Museum / The Duke of Cumberland</var>
                        <var class="atc_organizer">Lucy & Cristian Giordano</var>
                        <var class="atc_organizer_email">lucy@lucy-hutchinson.co.uk</var>
                    </var>
                </span>

            </p>

            <div class="heart-divider">
                <span class="grey-line"></span>
                <i class="de-icon-heart pink-heart"></i>
                <i class="de-icon-heart grey-heart"></i>
                <span class="grey-line"></span>
            </div>
            <p>Here's the plan for our special day.</p>
        </div>

    </div>
</div>