<!DOCTYPE html>
<html lang="en">

@include('master.head')
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="{{ route('adminIndex') }}"><span class="logo-default">ADMIN</span><span class="logo-dark">ADMIN</span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->

                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div id="mainMenu">
                            <div class="container">
                                <nav>
                                    <ul>
                                        {{-- <li><a href="index.html">Home</a></li> --}}
                                        {{-- <li class="dropdown"><a href="#">Kategori</a>
                                            <ul class="dropdown-menu">
                                                <li class=""><a href="#">POST</a>
                                                </li>
                                                <li class=""><a href="#">Teknologi</a>
                                                </li>
                                                <li class=""><a href="#">Tutorial</a>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        <li>|</li>
                                        <li><a href="{{ route('proses_logout') }}">Log Out</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- Page title -->

        <!-- end: Page title -->
        <!-- Page Menu -->
        <div class="page-menu">
            <div class="container">
                <nav>
                    <ul>
                        <li class="dropdown"><a href="#">Menu</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('adminIndex') }}">Home</a></li>
                                <li><a href="{{ route('form_banner') }}">Banner</a></li>
                                <li><a href="{{ route('form_tambah_user') }}">Management User</a></li>
                                <li><a href="{{ route('listPesan') }}">Pesan Masuk</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Advanced</a>
                        </li>
                        <li class="dropdown"><a href="#">Data sources</a>
                        </li>
                        <li class="dropdown"><a href="#">Search Options</a>
                        </li>
                        <li class="dropdown"><a href="#">Extensions</a>
                        </li>
                    </ul>
                </nav>
                <div id="pageMenu-trigger">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
        <!-- end: Page Menu -->
        <!-- Page Content -->
        <section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <span class="h4">Halaman Banner</span>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('proses_ganti_banner', $data->id) }}" class="form-validate" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Tampilan</label>
                                            <img width="400" height="auto" alt="" src="{{ asset('images/' . $data->banner) }}"></a>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Banner</label>
                                            <input type="file" class="form-control" name="banner" placeholder="Foto" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <button type="submit" class="btn m-t-50 mt-3">Ganti Banner</button>
                                            <a href="{{ route('adminIndex') }}" class="btn m-t-50 mt-3 btn-light">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end: Page Content -->
        <!-- Footer -->
        @include('master.footer')
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    {{-- <script src="{{ asset('assets/js/jquery.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/plugins.js') }}"></script> --}}

    <!--Template functions-->
    {{-- <script src="{{ asset('assets/js/functions.js')}}"></script> --}}

    <!--Datatables plugin files-->
    {{-- <script src='{{ asset('assets/plugins/datatables/datatables.min.js') }}'></script> --}}
    <script>
        $(document).ready(function() {
        $('#deskripsi').summernote();
        });
    </script>



</body>

</html>