<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tangselnews - Admin</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="back-end/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="back-end/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["back-end/assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="back-end/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="back-end/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="back-end/assets/css/kaiadmin.min.css" />
    <script src="https://cdn.tiny.cloud/1/jtwr40lcc1z7o2crj2njlc3i96olevxay7afx146w59jg5au/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
        <script
        type="text/javascript"
        src='https://cdn.tiny.cloud/1/jtwr40lcc1z7o2crj2njlc3i96olevxay7afx146w59jg5au/tinymce/7/tinymce.min.js'
        referrerpolicy="origin">
      </script>
      <script type="text/javascript">
      tinymce.init({
        selector: '#myTextarea',
        width: 900,
        height: 300,
        plugins: [
          'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
          'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
          'media', 'table', 'emoticons', 'help'
        ],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
          'forecolor backcolor emoticons | help',
        menu: {
          favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css'
      });
      </script>
    </head>
</head>

<body>
    <nav>
        <!-- Contoh Link untuk Profil Walikota -->

        <div class="wrapper">
            <!-- Include Sidebar -->
            @include('sidebar')

            @yield('content')

        </div>


        <!-- End Custom template -->
        <textarea id="myTextarea"></textarea>

        <!--   Core JS Files   -->
        <script src="back-end/assets/js/core/jquery-3.7.1.min.js"></script>
        <script src="back-end/assets/js/core/popper.min.js"></script>
        <script src="back-end/assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery Scrollbar -->
        <script src="back-end/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

        <!-- Chart JS -->
        <script src="back-end/assets/js/plugin/chart.js/chart.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="back-end/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Circle -->
        <script src="back-end/assets/js/plugin/chart-circle/circles.min.js"></script>

        <!-- Datatables -->
        <script src="back-end/assets/js/plugin/datatables/datatables.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="back-end/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- jQuery Vector Maps -->
        <script src="back-end/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
        <script src="back-end/assets/js/plugin/jsvectormap/world.js"></script>

        <!-- Sweet Alert -->
        <script src="back-end/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

        <!-- Kaiadmin JS -->
        <script src="back-end/assets/js/kaiadmin.min.js"></script>


        </script>
</body>

</html>
