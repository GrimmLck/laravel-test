@include('template.header')
<body class="animsition">
    <div class="page-wrapper">
        @include('template.header_mobile')

        @include('template.menu_sidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('template.header_desktop')

            @include('template.main_content')
            
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    @include('template.file_js')

</body>

</html>
<!-- end document-->