<!doctype html>
<html lang="en">
<head>
    <title>Contadores</title>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">  <!-- importa CSS de bootstrap -->
    <script src="{{ asset("js/app.js") }}"></script><!doctype html>
    @include('dashboard.partials.nav-header-main')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>



</head>
<body>



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center pt-8 sm:pt-0">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="row row-cols-md-5">


                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style=" width: 350px; height:410px;  zoom: 100%;">
                        <a href="http://10.166.158.123" class="underline text-gray-900 dark:text-black">Admin Color</a>
                        {!!$frame1!!}
                    </div>
                </div>

                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:410px;  zoom: 100%;" >
                        <a href="http://10.166.158.13" class="underline text-gray-900 dark:text-black">HR_Color</a>
                        {!!$frame2!!}
                    </div>
                </div>

                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:410px;  zoom: 100%;">
                        <a href="http://10.166.158.113" class="underline text-gray-900 dark:text-black">CSTI-ProcCtrl</a>
                        {!!$frame3!!}
                    </div>
                </div>

                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:410px;  zoom: 100%;">
                        <a href="http://10.166.158.115" class="underline text-gray-900 dark:text-black">CSTI-Eng</a>
                        {!!$frame4!!}
                    </div>
                </div>

                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:410px;  zoom: 100%;">
                        <a href="http://10.166.158.116" class="underline text-gray-900 dark:text-black ">OT-KavAdmin</a>
                        {!!$frame5!!}

                    </div>
                </div>
                {{-- ======================================================================================= --}}
                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:410px;  zoom: 90%;" class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.112" class="underline text-gray-900 dark:text-black">CSTI-Shipping</a>
                        {!!$frame6!!}
                    </div>
                </div>
                {{-- =======================================================================================--}}
                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:360px;  zoom: 90%;" class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.109" class="underline text-gray-900 dark:text-black">CSTI-Planning</a>
                        {!!$frame7!!}
                    </div>
                </div>

                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:360px;  zoom: 90%;" class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.124" class="underline text-gray-900 dark:text-black">CSTI-PAYROLL</a>
                        {!!$frame8!!}
                    </div>
                </div>
                {{--  =======================================================================================--}}
                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:360px;  zoom: 90%;" class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.108" class="underline text-gray-900 dark:text-black">CSTI-KIMProd</a>
                        {!!$frame9!!}
                    </div>
                </div>

                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:360px;  zoom: 90%;" class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.121" class="underline text-gray-900 dark:text-black">CSTI-KAVSouth</a>
                        {!!$frame10!!}
                    </div>
                </div>

                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:330px;  zoom: 90%;" class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.90" class="underline text-gray-900 dark:text-black">CSTI-KAVProd</a>
                        {!!$frame11!!}
                    </div>
                </div>

                <div class="overflow-hidden shadow sm:rounded-lg border border-primary">
                    <div style="width: 350px; height:330px;  zoom: 90%;" class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.103" class="underline text-gray-900 dark:text-black">CSTI-Warehouse</a>
                        {!!$frame12!!}
                    </div>
                </div>
                {{--                    =======================================================================================      --}}

                <div class="col-sm-3 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg border">
                    <div class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.104" class="underline text-gray-900 dark:text-white">CSTI-CustCerv - 5325</a></div>
                    <iframe id="inlineFrameExample1"
                            title="Inline Frame Example"
                            width="500"
                            zoom= "200"
                            height="250"
                            src="http://10.166.158.104/prbillinfo.htm">
                    </iframe>
                </div>
                <div class="col-sm-3 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg border">
                    <div class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.101" class="underline text-gray-900 dark:text-white">CSTI-Plant B</a></div>
                    <iframe id="inlineFrameExample1"
                            title="Inline Frame Example"
                            width="500"
                            height="250"
                            src="http://10.166.158.101/prbillinfo.htm">
                    </iframe>
                </div>


                <div class="col-sm-3 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg border">
                    <div class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.102" class="underline text-gray-900 dark:text-white">CSTI-Supervisor</a></div>
                    <iframe id="inlineFrameExample1"
                            title="Inline Frame Example"
                            width="500"
                            height="250"
                            src="http://10.166.158.102/prbillinfo.htm">
                    </iframe>
                </div>

                <div class="col-sm-3 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg border">
                    <div class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.107" class="underline text-gray-900 dark:text-white">CSTI-Receiving</a></div>
                    <iframe id="inlineFrameExample1"
                            title="Inline Frame Example"
                            width="500"
                            height="250"
                            src="http://10.166.158.107/prbillinfo.htm">
                    </iframe>
                </div>

                <div class="col-sm-4 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.122" class="underline text-gray-900 dark:text-white">Kiosko RH</a></div>
                    <iframe id="inlineFrameExample1"
                            title="Inline Frame Example"
                            width="600"
                            height="250"
                            src="http://10.166.158.122/home/index.html#hashHome">
                    </iframe>
                </div>

                <div class="col-sm-6 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="ml-2 text-lg leading-7 font-semibold">
                        <a href="http://10.166.158.16" class="underline text-gray-900 dark:text-white">ProCtrl Films - LaserJet 4200</a></div>
                    <iframe id="inlineFrameExample1"
                            title="Inline Frame Example"
                            width="820"
                            height="250"
                            src="http://10.166.158.16/hp/device/this.LCDispatcher?dispatch=html&cat=0&pos=0">
                    </iframe>
                </div>


            </div>
        </div>

    </div>
</div>
</body>
</html>
