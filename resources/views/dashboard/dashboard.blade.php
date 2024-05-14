<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- Sidebar -->
            @include('layout.sidebar')
            <!-- Sidebar -->

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="images/img.jpg" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                        <div class="count">2500</div>
                        <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                        <div class="count">123.50</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last
                            Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                        <div class="count green">2,500</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last
                            Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                        <div class="count">4,567</div>
                        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From
                            last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                        <div class="count">2,315</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last
                            Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                        <div class="count">7,325</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last
                            Week</span>
                    </div>
                </div>
                <!-- /top tiles -->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel fixed_height_500">
                            <div class="row x_title">

                                <h2>Performansi <small>Project Solution</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>

                            </div>
                            <div class="x_content">
                                <canvas id="myChart" width="600"></canvas>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    {{-- <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel fixed_height_320">
                            <div class="x_title">
                                <h2>Perbandingan Jumlah Nilai </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <canvas id="myChart" width="600"></canvas>
                            </div>
                        </div>
                    </div> --}}
                </div>





                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="x_panel fixed_height_320">
                            <div class="x_title">
                                <h2>Perbandingan Jumlah Nilai </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <canvas id="myChart1" style="width:100%; height:200px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="x_panel fixed_height_320">
                            <div class="x_title">
                                <h2>Perbandingan Jumlah Proyek </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <canvas id="myChart2" style="width:100%; height:200px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="x_panel fixed_height_320">
                            <div class="x_title">
                                <h2>Manar Balikpapan </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <canvas id="myChart3" style="width:100%; height:100px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="x_panel fixed_height_320">
                            <div class="x_title">
                                <h2>Manar Kalimantan Selatan dan Tengah</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <canvas id="myChart4" style="width:100%; height:100px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="x_panel fixed_height_320">
                            <div class="x_title">
                                <h2>Manar Kalimantan Barat </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <canvas id="myChart5" style="width:100%; height:100px;"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footser content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    {{-- <script>
        function init_morris_charts() {
            "undefined" != typeof Morris && (console.log("init_morris_charts"), $("#graph_bar_group").length && Morris.Bar({
                element: "graph_bar_group",
                data: [{
                    period: "Januari",
                    licensed: 807,
                    sorned: 660
                }, {
                    period: "Februari",
                    licensed: 1251,
                    sorned: 729
                }, {
                    period: "Maret",
                    licensed: 1769,
                    sorned: 1018
                }, {
                    period: "April",
                    licensed: 2246,
                    sorned: 1461
                }, {
                    period: "Mei",
                    licensed: 2657,
                    sorned: 1967
                }, {
                    period: "Juni",
                    licensed: 3148,
                    sorned: 2627
                }, {
                    period: "Juli",
                    licensed: 3471,
                    sorned: 3740
                }, {
                    period: "Agustus",
                    licensed: 2871,
                    sorned: 2216
                }, {
                    period: "September",
                    licensed: 2401,
                    sorned: 1656
                }, {
                    period: "Oktober",
                    licensed: 2401,
                    sorned: 1656
                }, {
                    period: "November",
                    licensed: 2115,
                    sorned: 1022
                }, {
                    period: "Desember",
                    licensed: 2115,
                    sorned: 1022
                }],
                xkey: "period",
                barColors: ["#26B99A", "#34495E", "#ACADAC", "#3498DB"],
                ykeys: ["licensed", "sorned"],
                labels: ["Licensed", "SORN"],
                hideHover: "auto",
                xLabelAngle: 60,
                resize: !0
            }), $MENU_TOGGLE.on("click", function() {
                $(window).resize()
            }))
        }
    </script> --}}

    <script>
        // Data
        var data_Performansi_Project_Solution = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                'November', 'Desember'
            ],
            datasets: [{
                label: 'Target',
                backgroundColor: 'rgba(38, 185, 154, 0.5)',
                borderColor: 'rgba(38, 185, 154, 1)',
                borderWidth: 1,
                data: [1000000000, 20000000000, 30000000000, 40000000000, 10000000000, 20000000000, 30000000000,
                    40000000000, 10000000000, 20000000000, 30000000000, 40000000000
                ]
            }, {
                label: 'Realisasi',
                backgroundColor: 'rgba(52, 73, 94, 0.5)',
                borderColor: 'rgba(52, 73, 94, 1)',
                borderWidth: 1,
                data: [20000000000, 30000000000, 40000000000, 50000000000, 20000000000, 30000000000,
                    40000000000, 50000000000, 20000000000, 30000000000, 40000000000, 50000000000
                ]
            }]
        };

        // Options
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            if (value >= 1000000000) {
                                return (value / 1000000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") + "M";
                            } else {
                                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                        }
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: function(value, context) {
                        return (value / 1000000).toFixed(1) + 'M';
                    }
                }
            }
        };

        // Create chart Performansi Project Solution
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data_Performansi_Project_Solution,
            options: options,
            plugins: [window.ChartDataLabels]
        });


        // Data
        var data_Perbandingan_Jumlah_Nilai = {
            labels: ['Telkom', 'Telkom Group', 'Enterprise', 'Governments'],
            datasets: [{
                    label: 'Nilai Project',
                    backgroundColor: 'rgba(38, 185, 154, 0.5)',
                    borderColor: 'rgba(38, 185, 154, 1)',
                    borderWidth: 1,
                    data: [1000, 2000, 3000, 4000]
                },
                {
                    label: 'Sudah Akru',
                    backgroundColor: 'rgba(52, 73, 94, 0.5)',
                    borderColor: 'rgba(52, 73, 94, 1)',
                    borderWidth: 1,
                    data: [2000, 3000, 4000, 5000]
                },
                {
                    label: 'Belum Akru',
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    data: [3000, 4000, 5000, 6000]
                },

            ]
        };

        // Options
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            if (value >= 1000000000) {
                                return (value / 1000000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") + "M";
                            } else {
                                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                        }
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: function(value, context) {
                        return (value / 1000000).toFixed(1) + 'M';
                    }
                }
            }
        };

        // Create chart Perbandingan Jumlah Nilai
        var ctx = document.getElementById('myChart1').getContext('2d');
        var myChart1 = new Chart(ctx, {
            type: 'bar',
            data: data_Perbandingan_Jumlah_Nilai,
            options: options,
            plugins: [window.ChartDataLabels]
        });

        // Data
        var data_Perbandingan_Jumlah_Projek = {
            labels: ['Done', 'Progress', 'Potensial'],
            datasets: [{
                    label: 'Telkoms',
                    backgroundColor: 'rgba(38, 185, 154, 0.5)',
                    borderColor: 'rgba(38, 185, 154, 1)',
                    borderWidth: 1,
                    data: [1000, 2000, 3000]
                },
                {
                    label: 'Telkom Group',
                    backgroundColor: 'rgba(52, 73, 94, 0.5)',
                    borderColor: 'rgba(52, 73, 94, 1)',
                    borderWidth: 1,
                    data: [2000, 3000, 4000]
                },
                {
                    label: 'Enterprise',
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    data: [3000, 4000, 5000]
                },
                {
                    label: 'Goverment',
                    backgroundColor: 'rgba(0, 0, 0, 0.5)', // Hitam
                    borderColor: 'rgba(0, 0, 0, 1)', // Hitam
                    borderWidth: 1,
                    data: [3000, 4000, 5000]
                }
            ]
        };



        // Options
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            if (value >= 1000000000) {
                                return (value / 1000000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") + "M";
                            } else {
                                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                        }
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: function(value, context) {
                        return (value / 1000000).toFixed(1) + 'M';
                    }
                }
            }
        };

        // Create chart Perbandingan Jumlah Nilai
        var ctx = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(ctx, {
            type: 'bar',
            data: data_Perbandingan_Jumlah_Projek,
            options: options,
            plugins: [window.ChartDataLabels]
        });

        // Data
        var data_Perbandingan_Jumlah_Projek = {
            labels: ['Done', 'Progress', 'Potensial'],
            datasets: [{
                    label: 'Telkoms',
                    backgroundColor: 'rgba(38, 185, 154, 0.5)',
                    borderColor: 'rgba(38, 185, 154, 1)',
                    borderWidth: 1,
                    data: [1000, 2000, 3000]
                },
                {
                    label: 'Telkom Group',
                    backgroundColor: 'rgba(52, 73, 94, 0.5)',
                    borderColor: 'rgba(52, 73, 94, 1)',
                    borderWidth: 1,
                    data: [2000, 3000, 4000]
                },
                {
                    label: 'Enterprise',
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    data: [3000, 4000, 5000]
                },
                {
                    label: 'Goverment',
                    backgroundColor: 'rgba(0, 0, 0, 0.5)', // Hitam
                    borderColor: 'rgba(0, 0, 0, 1)', // Hitam
                    borderWidth: 1,
                    data: [3000, 4000, 5000]
                }
            ]
        };



        // Options
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            if (value >= 1000000000) {
                                return (value / 1000000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") + "M";
                            } else {
                                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                        }
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: function(value, context) {
                        return (value / 1000000).toFixed(1) + 'M';
                    }
                }
            }
        };



        // Data
        var data_Manar_Balikpapan = {
            labels: ['Telkom', 'Subsidiaries', 'Enterprise', 'Government'],
            datasets: [{
                    label: 'Propek',
                    backgroundColor: 'rgba(38, 185, 154, 0.5)',
                    borderColor: 'rgba(38, 185, 154, 1)',
                    borderWidth: 1,
                    data: [1000, 2000, 3000, 5000]
                },
                {
                    label: 'Potensi',
                    backgroundColor: 'rgba(52, 73, 94, 0.5)',
                    borderColor: 'rgba(52, 73, 94, 1)',
                    borderWidth: 1,
                    data: [2000, 3000, 4000, 3000]
                },
                {
                    label: 'Enterprise',
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    data: [3000, 4000, 5000, 2000]
                },
                {
                    label: 'Goverment',
                    backgroundColor: 'rgba(0, 0, 0, 0.5)', // Hitam
                    borderColor: 'rgba(0, 0, 0, 1)', // Hitam
                    borderWidth: 1,
                    data: [3000, 4000, 5000, 4000]
                }
            ]
        };



        // Options
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            if (value >= 1000000000) {
                                return (value / 1000000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") + "M";
                            } else {
                                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                        }
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: function(value, context) {
                        return (value / 1000000).toFixed(1) + 'M';
                    }
                }
            }
        };

        // Create chart Perbandingan Jumlah Nilai
        var ctx = document.getElementById('myChart3').getContext('2d');
        var myChart3 = new Chart(ctx, {
            type: 'bar',
            data: data_Manar_Balikpapan,
            options: options,
            plugins: [window.ChartDataLabels]
        });

        // Data
        var data_Manar_Kalselteng = {
            labels: ['Telkom', 'Subsidiaries', 'Enterprise', 'Government'],
            datasets: [{
                    label: 'Propek',
                    backgroundColor: 'rgba(38, 185, 154, 0.5)',
                    borderColor: 'rgba(38, 185, 154, 1)',
                    borderWidth: 1,
                    data: [1000, 2000, 3000, 5000]
                },
                {
                    label: 'Potensi',
                    backgroundColor: 'rgba(52, 73, 94, 0.5)',
                    borderColor: 'rgba(52, 73, 94, 1)',
                    borderWidth: 1,
                    data: [2000, 3000, 4000, 3000]
                },
                {
                    label: 'Enterprise',
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    data: [3000, 4000, 5000, 2000]
                },
                {
                    label: 'Goverment',
                    backgroundColor: 'rgba(0, 0, 0, 0.5)', // Hitam
                    borderColor: 'rgba(0, 0, 0, 1)', // Hitam
                    borderWidth: 1,
                    data: [3000, 4000, 5000, 4000]
                }
            ]
        };



        // Options
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            if (value >= 1000000000) {
                                return (value / 1000000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") + "M";
                            } else {
                                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                        }
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: function(value, context) {
                        return (value / 1000000).toFixed(1) + 'M';
                    }
                }
            }
        };

        // Create chart Perbandingan Jumlah Nilai
        var ctx = document.getElementById('myChart4').getContext('2d');
        var myChart4 = new Chart(ctx, {
            type: 'bar',
            data: data_Manar_Kalselteng,
            options: options,
            plugins: [window.ChartDataLabels]
        });

        // Data
        var data_Manar_Kalbar = {
            labels: ['Telkom', 'Subsidiaries', 'Enterprise', 'Government'],
            datasets: [{
                    label: 'Propek',
                    backgroundColor: 'rgba(38, 185, 154, 0.5)',
                    borderColor: 'rgba(38, 185, 154, 1)',
                    borderWidth: 1,
                    data: [1000, 2000, 3000, 5000]
                },
                {
                    label: 'Potensi',
                    backgroundColor: 'rgba(52, 73, 94, 0.5)',
                    borderColor: 'rgba(52, 73, 94, 1)',
                    borderWidth: 1,
                    data: [2000, 3000, 4000, 3000]
                },
                {
                    label: 'Enterprise',
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1,
                    data: [3000, 4000, 5000, 2000]
                },
                {
                    label: 'Goverment',
                    backgroundColor: 'rgba(0, 0, 0, 0.5)', // Hitam
                    borderColor: 'rgba(0, 0, 0, 1)', // Hitam
                    borderWidth: 1,
                    data: [3000, 4000, 5000, 4000]
                }
            ]
        };



        // Options
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            if (value >= 1000000000) {
                                return (value / 1000000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") + "M";
                            } else {
                                return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }
                        }
                    }
                }]
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: function(value, context) {
                        return (value / 1000000).toFixed(1) + 'M';
                    }
                }
            }
        };

        // Create chart Perbandingan Jumlah Nilai
        var ctx = document.getElementById('myChart5').getContext('2d');
        var myChart5 = new Chart(ctx, {
            type: 'bar',
            data: data_Manar_Kalbar,
            options: options,
            plugins: [window.ChartDataLabels]
        });
    </script>


</body>

</html>
