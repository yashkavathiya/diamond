<!DOCTYPE html>
<html lang="en">
<!-- Copied from https://coderthemes.com/upvex/layouts/light/pages-starter.html by Cyotek WebCopy 1.7.0.600, Thursday, September 26, 2019, 6:01:05 AM -->
    @include('common.css')

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('common.navbar')

           @include('common.leftsidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Starter</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                    </div> <!-- container -->

                </div> <!-- content -->

               @include('common.footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        @include('common.rightsidebar')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('common.js')

    </body>
<!-- Copied from https://coderthemes.com/upvex/layouts/light/pages-starter.html by Cyotek WebCopy 1.7.0.600, Thursday, September 26, 2019, 6:01:05 AM -->
</html>
