<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
	<title>@yield('title') - Dashboard</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ asset ('dashboard/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('dashboard/css/bootstrap.min.css') }}" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{ asset ('dashboard/css/icons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('dashboard/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('dashboard/css/responsive.css') }}" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ asset ('dashboard/css/color-schemes/color.css') }}" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="{{ asset ('dashboard/css/color-schemes/color1.css') }}" title="color1">
    <link rel="alternate stylesheet" href="{{ asset ('dashboard/css/color-schemes/color2.css') }}" title="color2">
    <link rel="alternate stylesheet" href="{{ asset ('dashboard/css/color-schemes/color4.css') }}" title="color4">
    <link rel="alternate stylesheet" href="{{ asset ('dashboard/css/color-schemes/color5.css') }}" title="color5">
</head>

<body class="panel-data expand-data">
    <div class="topbar">
        <div class="logo">
            <h1>
                <a href="#" title="">
                    <img src="{{ asset ('dashboard/images/logo-dentalcare.jpg') }}" alt="" />
                </a>
            </h1>
        </div>
        <div class="topbar-data">
            <div class="usr-act">
                {{-- <i>Bem vindo, {{ $paciente -> nomePaciente }}</i> --}}
                <span>
                    <img src="{{ asset ('dashboard/images/resource/topbar-usr1.jpg') }}" alt="" />
                    <i class="sts away"></i>
                </span>
                <div class="usr-inf">
                    <div class="usr-thmb brd-rd50">
                        <img class="brd-rd50" src="{{ asset ('dashboard/images/resource/usr.jpg') }}" alt="" />
                        <i class="sts away"></i>
                        <a class="green-bg brd-rd5" href="#" title="">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </div>
                    <h5>Administrador
                        {{-- <span {{ $paciente->nomePaciente }}</span> --}}
                    </h5>
                    <i>11 99999-9999</i>
                    {{-- <div class="act-pst-lk-stm">
                        <a class="brd-rd5 green-bg-hover" href="#" title="">
                            <i class="ion-heart"></i> Love</a>
                        <a class="brd-rd5 blue-bg-hover" href="#" title="">
                            <i class="ion-forward"></i> Reply</a>
                    </div> --}}
                    <div class="usr-ft">
                        <a class="btn-danger" href="{{ route('sair') }}" title="">
                            <i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="topbar-bottom-colors">
            <i style="background-color: #28CED9;"></i>
            <i style="background-color: #28CED9;"></i>
            <i style="background-color: #28CED9;"></i>
            <i style="background-color: #28CED9;"></i>
            <i style="background-color: #28CED9;"></i>
            <i style="background-color: #28CED9;"></i>
            <i style="background-color: #28CED9;"></i>
        </div>
    </div>
    <!-- Topbar -->

    <header class="side-header expand-header hdr-bg5 hdr-bgclr">
        <div class="nav-head">Menu de Navegação
            <span class="menu-trigger">
                <i class="ion-android-menu"></i>
            </span>
        </div>
        <nav class="custom-scrollbar">
            <ul class="drp-sec">
                <li>
                    <a href="#" title="">
                        <i class="ion-ios-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>

            @if ('tipo_usuario' == 'Paciente')
                <h4>Paciente</h4>
                <ul class="drop-sec">
                    <li><a href="#"><i class="ion-person"></i></a> Perfil</li>
                    <li><a href="#"><i class="ion-podium"></i></a> Consultas</li>
                    <li><a href="#"><i class="ion-calendar"></i></a> Exames</li>
                    <li><a href="#"><i class="ion-ios-body"></i></a> Tratamento</li>
                    <li><a href="#"><i class="ion-star"></i></a> Minhas Conquistas</li>
                </ul>

                @elseif(session('tipoFuncionario') == 'admin' && session('cargo') == 'gerente')
                <h4>Funcionário</h4>
                <ul class="drp-sec">
                    <li><a href="#"><i class="ion-podium"></i> Pacientes</a></li>
                    <li><a href="#"><i class="ion-calendar"></i> Consultas</a></li>
                    <li><a href="#"><i class="ion-calendar"></i> Exames</a></li>
                    <li><a href="#"><i class="ion-ios-body"></i> Tratamento</a></li>
                    <li><a href="#"><i class="ion-ios-body"></i> Serviços</a></li>
                    <li><a href="#"><i class="ion-ios-body"></i> E-mail Site</a></li>
                </ul>

                <h4>Desenvolvedor</h4>
                <ul class="drp-sec">
                    <li><a href="#"><i class="ion-podium"></i> Cadastro de Funcionários</a></li>
                </ul>

                @elseif(session('tipoFuncionario') == 'admin')
                <h4>Funcionário</h4>
                <ul class="drp-sec">
                    <li><a href=""><i class="ion-podium"></i> Pacientes</a></li>
                    <li><a href=""><i class="ion-calendar"></i> Consultas</a></li>
                    <li><a href=""><i class="ion-calendar"></i> Exames</a></li>
                    <li><a href=""><i class="ion-ios-body"></i> Tratamento</a></li>
                    <li><a href=""><i class="ion-ios-body"></i> Serviços</a></li>
                    <li><a href="{{ route('admin.func.index') }}"><i class="ion-ios-body"></i> Funcionários</a></li>
                </ul>

                @elseif(session('tipoFuncionario') == 'dentista')
                <h4>Funcionário</h4>
                <ul class="drp-sec">
                    <li><a href="#"><i class="ion-podium"></i> Paciente</a></li>
                    <li><a href="#"><i class="ion-calendar"></i> Consultas</a></li>
                    <li><a href="#"><i class="ion-calendar"></i> Exames</a></li>
                </ul>
            @endif
        </nav>
    </header>
    <!-- Side Header -->

    <main>
        @yield('conteudo')
    </main>

        <!-- Panel Content -->
        <footer>
            <p>Copyright
                <a href="{{ route ('home') }}" title="">Dental Care</a> &amp; 2024 - 2025</p>
            <div class="logo-rodape-dash">
                <img src="{{ asset ('dashboard/images/logo-dentalcare.jpg') }}" alt="">
            </div>
        </footer>
        <!-- Vendor: Javascripts -->
        <script src="{{ asset ('dashboard/js/jquery.min.js') }}" type="text/javascript"></script>
        <!-- Vendor: Followed by our custom Javascripts -->
        <script src="{{ asset ('dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/slick.min.js') }}" type="text/javascript"></script>

        <!-- Our Website Javascripts -->
        <script src="{{ asset ('dashboard/js/isotope.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/isotope-int.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/jquery.counterup.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/highcharts.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/exporting.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/highcharts-more.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/jquery.circliful.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/fullcalendar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/jquery.downCount.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/jquery.formtowizard.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/form-validator.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/form-validator-lang-en.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/cropbox-min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/ion.rangeSlider.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/jquery.poptrox.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/styleswitcher.js') }}" type="text/javascript"></script>
        <script src="{{ asset ('dashboard/js/main.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                'use strict';

                $.getJSON(
                    'https://cdn.rawgit.com/highcharts/highcharts/057b672172ccc6c08fe7dbb27fc17ebca3f5b770/samples/data/usdeur.json',
                    function (data) {
                        Highcharts.chart('chrt1', {
                            chart: {
                                zoomType: 'x'
                            },

                            legend: {
                                enabled: false
                            },
                            title: {
                                style: {
                                    display: 'none'
                                }
                            },
                            plotOptions: {
                                area: {
                                    fillColor: {
                                        linearGradient: {
                                            x1: 0,
                                            y1: 0,
                                            x2: 0,
                                            y2: 1
                                        },
                                        stops: [
                                            [0, Highcharts.getOptions().colors[0]],
                                            [1, Highcharts.Color(Highcharts.getOptions().colors[
                                                0]).setOpacity(0).get('rgba')]
                                        ]
                                    },
                                    marker: {
                                        radius: 2
                                    },
                                    lineWidth: 1,
                                    states: {
                                        hover: {
                                            lineWidth: 1
                                        }
                                    },
                                    threshold: null
                                }
                            },
                            series: [{
                                type: 'area',
                                name: 'USD to EUR',
                                data: data
                            }]
                        });
                    });

                Highcharts.chart('chrt2', {
                    chart: {
                        type: 'area',
                        backgroundColor: "#FFFFFF",
                        borderColor: "#335cad"
                    },
                    legend: {
                        enabled: false
                    },
                    title: {
                        style: {
                            display: 'none'
                        }
                    },
                    xAxis: {
                        categories: ['1', '2', '3', '4', '5', '6', '7']
                    },
                    credits: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                    },
                    plotOptions: {
                        area: {
                            categories: ['1', '2', '3', '4', '5', '6', '7'],
                            marker: {
                                enabled: false,
                                symbol: 'circle',
                                radius: 2,
                                states: {
                                    hover: {
                                        enabled: true
                                    }
                                }
                            }
                        }
                    },
                    series: [{
                        data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640, 1005,
                            1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434,
                            24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342,
                            26662, 26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826,
                            24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344,
                            23586, 22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009,
                            10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295,
                            10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804, 4761, 4717,
                            4368, 4018
                        ]
                    }, {
                        data: [null, null, null, null, null, null, null, null, null, null, 5, 25,
                            50, 120, 150, 200, 426, 660, 869, 1060, 1605,
                            2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092,
                            14478, 15915, 17385, 19055, 21205, 23044, 25393, 27935,
                            30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000, 41000,
                            39000, 37000, 35000, 33000, 31000, 29000, 27000, 25000, 24000,
                            23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000, 16000,
                            15537, 14162, 12787, 12600, 11400, 5500, 4512, 4502, 4502,
                            4500, 4500
                        ]
                    }]
                });

                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    $('#chrt3').highcharts({
                        chart: {
                            type: 'area',
                            backgroundColor: "#FFFFFF",
                            borderColor: "#335cad"
                        },
                        legend: {
                            enabled: false
                        },
                        title: {
                            style: {
                                display: 'none'
                            }
                        },
                        xAxis: {
                            categories: ['1', '2', '3', '4', '5', '6', '7']
                        },
                        credits: {
                            enabled: false
                        },
                        tooltip: {
                            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                        },
                        plotOptions: {
                            area: {
                                categories: ['1', '2', '3', '4', '5', '6', '7'],
                                marker: {
                                    enabled: false,
                                    symbol: 'circle',
                                    radius: 2,
                                    states: {
                                        hover: {
                                            enabled: true
                                        }
                                    }
                                }
                            }
                        },
                        series: [{
                            data: [null, null, null, null, null, null, null, null, null,
                                null, 5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                                1605,
                                2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                                11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044,
                                25393, 27935,
                                30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000,
                                41000, 39000, 37000, 35000, 33000, 31000, 29000, 27000,
                                25000, 24000,
                                23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000,
                                16000, 15537, 14162, 12787, 12600, 11400, 5500, 4512,
                                4502, 4502,
                                4500, 4500
                            ]
                        }, {
                            data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369,
                                640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
                                20434,
                                24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224,
                                27342, 26662, 26956, 27912, 28999, 28965, 27826, 25579,
                                25722, 24826,
                                24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401,
                                24344, 23586, 22380, 21004, 17287, 14747, 13076, 12555,
                                12144, 11009,
                                10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358,
                                10295, 10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804,
                                4761, 4717,
                                4368, 4018
                            ]
                        }]
                    });
                });

                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    $('#chrt4').highcharts({
                        chart: {
                            type: 'area',
                            backgroundColor: "#FFFFFF",
                            borderColor: "#335cad"
                        },
                        legend: {
                            enabled: false
                        },
                        title: {
                            style: {
                                display: 'none'
                            }
                        },
                        xAxis: {
                            categories: ['1', '2', '3', '4', '5', '6', '7']
                        },
                        credits: {
                            enabled: false
                        },
                        tooltip: {
                            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
                        },
                        plotOptions: {
                            area: {
                                categories: ['1', '2', '3', '4', '5', '6', '7'],
                                marker: {
                                    enabled: false,
                                    symbol: 'circle',
                                    radius: 2,
                                    states: {
                                        hover: {
                                            enabled: true
                                        }
                                    }
                                }
                            }
                        },
                        series: [{
                            data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369,
                                640, 1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468,
                                20434,
                                24126, 27387, 29459, 31056, 31982, 32040, 31233, 29224,
                                27342, 26662, 26956, 27912, 28999, 28965, 27826, 25579,
                                25722, 24826,
                                24605, 24304, 23464, 23708, 24099, 24357, 24237, 24401,
                                24344, 23586, 22380, 21004, 17287, 14747, 13076, 12555,
                                12144, 11009,
                                10950, 10871, 10824, 10577, 10527, 10475, 10421, 10358,
                                10295, 10104, 9914, 9620, 9326, 5113, 5113, 4954, 4804,
                                4761, 4717,
                                4368, 4018
                            ]
                        }, {
                            data: [null, null, null, null, null, null, null, null, null,
                                null, 5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                                1605,
                                2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                                11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044,
                                25393, 27935,
                                30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000,
                                41000, 39000, 37000, 35000, 33000, 31000, 29000, 27000,
                                25000, 24000,
                                23000, 22000, 21000, 20000, 19000, 18000, 18000, 17000,
                                16000, 15537, 14162, 12787, 12600, 11400, 5500, 4512,
                                4502, 4502,
                                4500, 4500
                            ]
                        }]
                    });
                });

                Highcharts.chart('chart5', {
                    title: {
                        style: {
                            display: 'none'
                        }
                    },
                    xAxis: {
                        categories: ['Apples', 'Oranges', 'Pears',
                            'Bananas', 'Plums'
                        ]
                    },
                    labels: {
                        items: [{
                            html: 'Total fruit consumption',
                            style: {
                                left: '50px',
                                top: '18px',
                                color: (Highcharts.theme &&
                                    Highcharts.theme.textColor) || 'black'
                            }
                        }]
                    },
                    series: [{
                        type: 'column',
                        name: 'Jane',
                        data: [3, 2, 1, 3, 4]
                    }, {
                        type: 'column',
                        name: 'John',
                        data: [2, 3, 5, 7, 6]
                    }, {
                        type: 'column',
                        name: 'Joe',
                        data: [4, 3, 3, 9, 0]
                    }, {
                        type: 'spline',
                        name: 'Average',
                        data: [3, 2.67, 3, 6.33, 3.33],
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[3],
                            fillColor: 'white'
                        }
                    }, {
                        type: 'pie',
                        name: 'Total consumption',
                        data: [{
                            name: 'Jane',
                            y: 13,
                            color: Highcharts.getOptions().colors[0]
                        }, {
                            name: 'John',
                            y: 23,
                            color: Highcharts.getOptions().colors[1]
                        }, {
                            name: 'Joe',
                            y: 19,
                            color: Highcharts.getOptions().colors[2]
                        }],
                        center: [100, 80],
                        size: 100,
                        showInLegend: false,
                        dataLabels: {
                            enabled: false
                        }
                    }]
                });

                //===== ToolTip =====//
                if ($.isFunction($.fn.tooltip)) {
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        </script>
    </body>

    </html>
