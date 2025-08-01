@extends('layout.layout')
@php
    $title='Dashboard';
    $subTitle = 'LMS / Learning System';
    $script = '<script>
                    // ===================== Average Enrollment Rate Start =============================== 
                    function createChartTwo(chartId, color1, color2) {
                        var options = {
                            series: [{
                                name: "series1",
                                data: [48, 35, 55, 32, 48, 30, 55, 50, 57]
                            }, {
                                name: "series2",
                                data: [12, 20, 15, 26, 22, 60, 40, 48, 25]
                            }],
                            legend: {
                                show: false
                            },
                            chart: {
                                type: "area",
                                width: "100%",
                                height: 270,
                                toolbar: {
                                    show: false
                                },
                                padding: {
                                    left: 0,
                                    right: 0,
                                    top: 0,
                                    bottom: 0
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: "smooth",
                                width: 3,
                                colors: [color1, color2], // Use two colors for the lines
                                lineCap: "round"
                            },
                            grid: {
                                show: true,
                                borderColor: "#D1D5DB",
                                strokeDashArray: 1,
                                position: "back",
                                xaxis: {
                                    lines: {
                                        show: false
                                    }
                                },
                                yaxis: {
                                    lines: {
                                        show: true
                                    }
                                },
                                row: {
                                    colors: undefined,
                                    opacity: 0.5
                                },
                                column: {
                                    colors: undefined,
                                    opacity: 0.5
                                },
                                padding: {
                                    top: -20,
                                    right: 0,
                                    bottom: -10,
                                    left: 0
                                },
                            },
                            fill: {
                                type: "gradient",
                                colors: [color1, color2], // Use two colors for the gradient
                                // gradient: {
                                //     shade: "light",
                                //     type: "vertical",
                                //     shadeIntensity: 0.5,
                                //     gradientToColors: [`${color1}`, `${color2}00`], // Bottom gradient colors with transparency
                                //     inverseColors: false,
                                //     opacityFrom: .6,
                                //     opacityTo: 0.3,
                                //     stops: [0, 100],
                                // },
                                gradient: {
                                    shade: "light",
                                    type: "vertical",
                                    shadeIntensity: 0.5,
                                    gradientToColors: [undefined, `${color2}00`], // Apply transparency to both colors
                                    inverseColors: false,
                                    opacityFrom: [0.4, 0.4], // Starting opacity for both colors
                                    opacityTo: [0.3, 0.3], // Ending opacity for both colors
                                    stops: [0, 100],
                                },
                            },
                            markers: {
                                colors: [color1, color2], // Use two colors for the markers
                                strokeWidth: 3,
                                size: 0,
                                hover: {
                                    size: 10
                                }
                            },
                            xaxis: {
                                labels: {
                                    show: false
                                },
                                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                tooltip: {
                                    enabled: false
                                },
                                labels: {
                                    formatter: function(value) {
                                        return value;
                                    },
                                    style: {
                                        fontSize: "14px"
                                    }
                                }
                            },
                            yaxis: {
                                labels: {
                                    formatter: function(value) {
                                        return "$" + value + "k";
                                    },
                                    style: {
                                        fontSize: "14px"
                                    }
                                },
                            },
                            tooltip: {
                                x: {
                                    format: "dd/MM/yy HH:mm"
                                }
                            }
                        };

                        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
                        chart.render();
                    }

                    createChartTwo("enrollmentChart", "#45B369", "#487fff");
                    // ===================== Average Enrollment Rate End =============================== 


                    // ================================ Users Overview Donut chart Start ================================ 
                    var options = {
                        series: [500, 500, 500],
                        colors: ["#FF9F29", "#487FFF", "#E4F1FF"],
                        labels: ["Active", "New", "Total"],
                        legend: {
                            show: false
                        },
                        chart: {
                            type: "donut",
                            height: 270,
                            sparkline: {
                                enabled: true // Remove whitespace
                            },
                            margin: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0
                            },
                            padding: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0
                            }
                        },
                        stroke: {
                            width: 0,
                        },
                        dataLabels: {
                            enabled: false
                        },
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                chart: {
                                    width: 200
                                },
                                legend: {
                                    position: "bottom"
                                }
                            }
                        }],
                    };

                    var chart = new ApexCharts(document.querySelector("#userOverviewDonutChart"), options);
                    chart.render();
                    // ================================ Users Overview Donut chart End ================================ 

                    // ================================ Client Payment Status chart End ================================ 
                    var options = {
                        series: [{
                            name: "Net Profit",
                            data: [44, 100, 40, 56, 30, 58, 50]
                        }, {
                            name: "Free Cash",
                            data: [60, 120, 60, 90, 50, 95, 90]
                        }],
                        colors: ["#45B369", "#FF9F29"],
                        labels: ["Active", "New", "Total"],

                        legend: {
                            show: false
                        },
                        chart: {
                            type: "bar",
                            height: 420,
                            toolbar: {
                                show: false
                            },
                        },
                        grid: {
                            show: true,
                            borderColor: "#D1D5DB",
                            strokeDashArray: 4, // Use a number for dashed style
                            position: "back",
                        },
                        plotOptions: {
                            bar: {
                                borderRadius: 4,
                                columnWidth: 8,
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        states: {
                            hover: {
                                filter: {
                                    type: "none"
                                }
                            }
                        },
                        stroke: {
                            show: true,
                            width: 0,
                            colors: ["transparent"]
                        },
                        xaxis: {
                            categories: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"],
                        },
                        fill: {
                            opacity: 1,
                            width: 18,
                        },
                    };

                    var chart = new ApexCharts(document.querySelector("#paymentStatusChart"), options);
                    chart.render();
                    // ================================ Client Payment Status chart End ================================ 

                    // ================================ Aminated Radial Progress Bar Start ================================ 
                    $("svg.radial-progress").each(function(index, value) {
                        $(this).find($("circle.complete")).removeAttr("style");
                    });

                    // Activate progress animation on scroll
                    $(window).scroll(function() {
                        $("svg.radial-progress").each(function(index, value) {
                            // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
                            if (
                                $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                                $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
                            ) {
                                // Get percentage of progress
                                percent = $(value).data("percentage");
                                // Get radius of the svg"s circle.complete
                                radius = $(this).find($("circle.complete")).attr("r");
                                // Get circumference (2πr)
                                circumference = 2 * Math.PI * radius;
                                // Get stroke-dashoffset value based on the percentage of the circumference
                                strokeDashOffset = circumference - ((percent * circumference) / 100);
                                // Transition progress for 1.25 seconds
                                $(this).find($("circle.complete")).animate({
                                    "stroke-dashoffset": strokeDashOffset
                                }, 1250);
                            }
                        });
                    }).trigger("scroll");
                    // ================================ Aminated Radial Progress Bar End ================================ 
                    </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 2xl:grid-cols-12 gap-6">
        <!-- ======================= First Row Cards Start =================== -->
        <div class="col-span-12 2xl:col-span-8">
            <div class="card border-0 rounded-lg p-5">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                    <div class="col-span-12 md:col-span-6 2xl:col-span-4">
                        <div class="card border-0 p-4 rounded-lg shadow-none bg-gradient-to-l from-[#ffeaf480] dark:from-[#ffeaf41c] to-[#ffe2f0] dark:to-[#ffe2f018] mb-3">
                            <div class="card-body p-0">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-0">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="mb-0 w-11 h-11 bg-white dark:bg-neutral-900 text-[#de3ace] dark:text-[#de3ace] text-2xl flex-shrink-0 flex justify-center items-center rounded-full
                                        h6">
                                            <i class="ri-group-fill"></i>
                                        </span>
                                        <div>
                                            <span class="mb-0 font-medium text-neutral-600 text-lg">Total Students</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between flex-wrap gap-8">
                                    <h5 class="font-semibold mb-0">15,000</h5>
                                    <p class="text-sm mb-0 flex items-center gap-2 text-neutral-500">
                                        <span class="text-white px-1 rounded font-medium bg-success-main text-sm">+2.5k</span>
                                        This Month
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 p-4 rounded-lg shadow-none bg-gradient-to-l from-[#ecddff4d] dark:from-[#ecddff17] to-[#ecddff] dark:to-[#ecddff26] mb-3">
                            <div class="card-body p-0">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-0">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="mb-0 w-11 h-11 bg-white dark:bg-neutral-900 text-lilac-600 dark:text-lilac-600 text-2xl flex-shrink-0 flex justify-center items-center rounded-full
                                        h6">
                                            <i class="ri-youtube-fill"></i>
                                        </span>
                                        <div>
                                            <span class="mb-0 font-medium text-neutral-600 text-lg">Total Courses</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between flex-wrap gap-8">
                                    <h5 class="font-semibold mb-0">420</h5>
                                    <p class="text-sm mb-0 flex items-center gap-2 text-neutral-500">
                                        <span class="text-white px-1 rounded font-medium bg-success-main text-sm">+30</span>
                                        This Month
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 p-4 rounded-lg shadow-none bg-gradient-to-l from-[#ebfaff] dark:from-[#ebfaff2c] to-[#c0f0ff] dark:to-[#c0f0ff23] mb-0">
                            <div class="card-body p-0">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-0">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="mb-0 w-11 h-11 bg-white dark:bg-neutral-900 text-cyan-600 dark:text-cyan-600 text-2xl flex-shrink-0 flex justify-center items-center rounded-full
                                            h6">
                                            <i class="ri-money-dollar-circle-fill"></i>
                                        </span>
                                        <div>
                                            <span class="mb-0 font-medium text-neutral-600 text-lg">Overall Revenue</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between flex-wrap gap-8">
                                    <h5 class="font-semibold mb-0">$50,000</h5>
                                    <p class="text-sm mb-0 flex items-center gap-2 text-neutral-500">
                                        <span class="text-white px-1 rounded font-medium bg-success-main text-sm">+1.5k</span>
                                        This Month
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 2xl:col-span-8">
                        <div class="card-body p-0">
                            <div class="flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="mb-2 font-bold text-lg">
                                    Average Enrollment Rate
                                </h6>
                                <div class="">
                                    <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-800 dark:text-white border text-neutral-600">
                                        <option>Yearly</option>
                                        <option>Monthly</option>
                                        <option>Weekly</option>
                                        <option>Today</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="flex flex-wrap items-center justify-center mt-3 gap-3">
                                <li class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full
                                    bg-primary-600"></span>
                                    <span class="text-neutral-600 text-sm font-semibold">
                                        Paid Course:
                                        <span class="text-primary-light font-bold">350</span>
                                    </span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full
                                    bg-success-main"></span>
                                    <span class="text-neutral-600 text-sm font-semibold">
                                        Free Course:
                                        <span class="text-primary-light font-bold">70</span>
                                    </span>
                                </li>
                            </ul>
                            <div class="mt-10">
                                <div id="enrollmentChart" class="apexcharts-tooltip-style-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
            <div class="card border-0 h-full rounded-lg">
                <div class="card-body p-6 flex flex-col justify-between gap-8">
                    <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                        <h6 class="font-bold text-lg mb-0">Traffic Sources</h6>
                        <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-800 dark:text-white border text-neutral-600">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                    <div id="userOverviewDonutChart" class="margin-16-minus y-value-left apexcharts-tooltip-z-none"></div>

                    <ul class="flex flex-wrap items-center justify-between mt-3 gap-3">
                        <li class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full
                                bg-warning-600"></span>
                                <span class="text-neutral-600 text-sm font-semibold">Organic Search</span>
                            </div>
                            <span class="text-primary-light font-bold">875</span>
                        </li>
                        <li class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full
                                bg-success-600"></span>
                                <span class="text-neutral-600 text-sm font-semibold">Referrals</span>
                            </div>
                            <span class="text-primary-light font-bold">450</span>
                        </li>
                        <li class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full
                                bg-primary-600"></span>
                                <span class="text-neutral-600 text-sm font-semibold">Social Media</span>
                            </div>
                            <span class="text-primary-light font-bold">4,305</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ======================= First Row Cards End =================== -->
        <!-- ================== Second Row Cards Start ======================= -->
        <!-- Top Categories Card border-0 Start -->
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
            <div class="card border-0 h-full">
                <div class="card-header">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="font-bold text-lg mb-0">Top Categories</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover:text-primary-600 flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="flex items-center justify-between gap-3 mb-[26px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg flex-shrink-0 bg-info-50 dark:bg-info-600/20 flex justify-center items-center">
                                <img src="{{ asset('assets/images/home-six/category-icon1.png') }}" alt="" class="">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="text-base mb-0 font-normal">Web Development</h6>
                                <span class="text-sm text-neutral-600 font-normal">40+ Courses</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="w-6 h-6 bg-primary-600/10 text-primary-600 dark:text-primary-600 flex justify-center items-center text-lg hover:bg-primary-600/20 rounded">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-[26px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg flex-shrink-0 bg-success-50 dark:bg-success-600/20 flex justify-center items-center">
                                <img src="{{ asset('assets/images/home-six/category-icon2.png') }}" alt="" class="">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="text-base mb-0 font-normal">Graphic Design</h6>
                                <span class="text-sm text-neutral-600 font-normal">40+ Courses</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="w-6 h-6 bg-primary-600/10 text-primary-600 dark:text-primary-600 flex justify-center items-center text-lg hover:bg-primary-600/20 rounded">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-[26px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg flex-shrink-0 bg-lilac-50 dark:bg-lilac-600/20 flex justify-center items-center">
                                <img src="{{ asset('assets/images/home-six/category-icon3.png') }}" alt="" class="">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="text-base mb-0 font-normal">UI/UX Design</h6>
                                <span class="text-sm text-neutral-600 font-normal">40+ Courses</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="w-6 h-6 bg-primary-600/10 text-primary-600 dark:text-primary-600 flex justify-center items-center text-lg hover:bg-primary-600/20 rounded">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-[26px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg flex-shrink-0 bg-warning-50 dark:bg-warning-600/20 flex justify-center items-center">
                                <img src="{{ asset('assets/images/home-six/category-icon4.png') }}" alt="" class="">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="text-base mb-0 font-normal">Digital Marketing</h6>
                                <span class="text-sm text-neutral-600 font-normal">40+ Courses</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="w-6 h-6 bg-primary-600/10 text-primary-600 dark:text-primary-600 flex justify-center items-center text-lg hover:bg-primary-600/20 rounded">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-[26px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg flex-shrink-0 bg-danger-50 dark:bg-danger-600/20 flex justify-center items-center">
                                <img src="{{ asset('assets/images/home-six/category-icon5.png') }}" alt="" class="">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="text-base mb-0 font-normal">3d Illustration & Art Design</h6>
                                <span class="text-sm text-neutral-600 font-normal">40+ Courses</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="w-6 h-6 bg-primary-600/10 text-primary-600 dark:text-primary-600 flex justify-center items-center text-lg hover:bg-primary-600/20 rounded">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-0">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg flex-shrink-0 bg-primary-600/10 flex justify-center items-center">
                                <img src="{{ asset('assets/images/home-six/category-icon6.png') }}" alt="" class="">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="text-base mb-0 font-normal">Logo Design</h6>
                                <span class="text-sm text-neutral-600 font-normal">40+ Courses</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="w-6 h-6 bg-primary-600/10 text-primary-600 dark:text-primary-600 flex justify-center items-center text-lg hover:bg-primary-600/20 rounded">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Categories Card border-0 End -->
        <!-- Instructor Card border-0 Start -->
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
            <div class="card border-0">
                <div class="card-header">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="font-bold text-lg mb-0">Top Instructors</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover:text-primary-600 flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/users/user1.png') }}" alt="" class="w-10 h-10 rounded-full
                            flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Dianne Russell</h6>
                                <span class="text-sm text-neutral-600 font-medium">Agent ID: 36254</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                            </div>
                            <span class="text-primary-light text-sm block text-right">25 Reviews</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/users/user2.png') }}" alt="" class="w-10 h-10 rounded-full
                            flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Wade Warren</h6>
                                <span class="text-sm text-neutral-600 font-medium">Agent ID: 36254</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                            </div>
                            <span class="text-primary-light text-sm block text-right">25 Reviews</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/users/user3.png') }}" alt="" class="w-10 h-10 rounded-full
                            flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Albert Flores</h6>
                                <span class="text-sm text-neutral-600 font-medium">Agent ID: 36254</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                            </div>
                            <span class="text-primary-light text-sm block text-right">25 Reviews</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/users/user4.png') }}" alt="" class="w-10 h-10 rounded-full
                            flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Bessie Cooper</h6>
                                <span class="text-sm text-neutral-600 font-medium">Agent ID: 36254</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                            </div>
                            <span class="text-primary-light text-sm block text-right">25 Reviews</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/users/user5.png') }}" alt="" class="w-10 h-10 rounded-full
                            flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Arlene McCoy</h6>
                                <span class="text-sm text-neutral-600 font-medium">Agent ID: 36254</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                            </div>
                            <span class="text-primary-light text-sm block text-right">25 Reviews</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-3">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/users/user1.png') }}" alt="" class="w-10 h-10 rounded-full
                            flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Arlene McCoy</h6>
                                <span class="text-sm text-neutral-600 font-medium">Agent ID: 36254</span>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                                <span class="text-lg text-warning-600 dark:text-warning-600 flex line-height-1"><i class="ri-star-fill"></i></span>
                            </div>
                            <span class="text-primary-light text-sm block text-right">25 Reviews</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instructor Card border-0 End -->
        <!-- Student Progress Card border-0 Start -->
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
            <div class="card border-0 h-full">
                <div class="card-header">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="font-bold text-lg mb-0">Student's Progress</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover:text-primary-600 flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/home-six/student-img1.png') }}" alt="" class="w-10 h-10 rounded-lg flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Theresa Webb</h6>
                                <span class="text-sm text-neutral-600 font-medium">UI/UX Design Course</span>
                            </div>
                        </div>
                        <div class="">
                            <span class="text-primary-light text-sm block text-right">
                                <svg class="radial-progress" data-percentage="33" viewBox="0 0 80 80">
                                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">33</text>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/home-six/student-img2.png') }}" alt="" class="w-10 h-10 rounded-lg flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Robert Fox</h6>
                                <span class="text-sm text-neutral-600 font-medium">Graphic Design Course</span>
                            </div>
                        </div>
                        <div class="">
                            <span class="text-primary-light text-sm block text-right">
                                <svg class="radial-progress" data-percentage="70" viewBox="0 0 80 80">
                                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">70</text>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/home-six/student-img3.png') }}" alt="" class="w-10 h-10 rounded-lg flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Guy Hawkins</h6>
                                <span class="text-sm text-neutral-600 font-medium">Web developer Course</span>
                            </div>
                        </div>
                        <div class="">
                            <span class="text-primary-light text-sm block text-right">
                                <svg class="radial-progress" data-percentage="80" viewBox="0 0 80 80">
                                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/home-six/student-img4.png') }}" alt="" class="w-10 h-10 rounded-lg flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Cody Fisher</h6>
                                <span class="text-sm text-neutral-600 font-medium">UI/UX Design Course</span>
                            </div>
                        </div>
                        <div class="">
                            <span class="text-primary-light text-sm block text-right">
                                <svg class="radial-progress" data-percentage="20" viewBox="0 0 80 80">
                                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">20</text>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-6">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/home-six/student-img5.png') }}" alt="" class="w-10 h-10 rounded-lg flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Jacob Jones</h6>
                                <span class="text-sm text-neutral-600 font-medium">UI/UX Design Course</span>
                            </div>
                        </div>
                        <div class="">
                            <span class="text-primary-light text-sm block text-right">
                                <svg class="radial-progress" data-percentage="40" viewBox="0 0 80 80">
                                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">40</text>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-0">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/home-six/student-img6.png') }}" alt="" class="w-10 h-10 rounded-lg flex-shrink-0 me-3 overflow-hidden">
                            <div class="flex-grow-1">
                                <h6 class="sm:text-base text-xs mb-0 font-medium">Darlene Robertson</h6>
                                <span class="text-sm text-neutral-600 font-medium">UI/UX Design Course</span>
                            </div>
                        </div>
                        <div class="">
                            <span class="text-primary-light text-sm block text-right">
                                <svg class="radial-progress" data-percentage="24" viewBox="0 0 80 80">
                                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">24</text>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Student Progress Card border-0 End -->
        <!-- ================== Second Row Cards End ======================= -->
        <!-- ================== Third Row Cards Start ======================= -->
        <div class="col-span-12 2xl:col-span-8">
            <div class="card border-0 h-full">
                <div class="card-header">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="font-bold text-lg mb-0">Courses</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover:text-primary-600 flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="card-body p-6">
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Registered On</th>
                                    <th scope="col">Instructors  </th>
                                    <th scope="col">Users</th>
                                    <th scope="col">Enrolled</th>
                                    <th scope="col">Price </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-neutral-600">24 Jun 2025</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">Ronald Richards</span>
                                    </td>
                                    <td>
                                        <div class="text-neutral-600">
                                            <h6 class="text-base mb-0 font-normal">3d Illustration &amp; Art Design</h6>
                                            <span class="text-sm font-normal">34 Lessons</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">257</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">$29.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-neutral-600">24 Jun 2025</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">Jerome Bell</span>
                                    </td>
                                    <td>
                                        <div class="text-neutral-600">
                                            <h6 class="text-base mb-0 font-normal">Advanced JavaScript Development</h6>
                                            <span class="text-sm font-normal">20 Lessons</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">375</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">$29.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-neutral-600">24 Jun 2025</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">Cody Fisher</span>
                                    </td>
                                    <td>
                                        <div class="text-neutral-600">
                                            <h6 class="text-base mb-0 font-normal">Portrait Drawing Fundamentals </h6>
                                            <span class="text-sm font-normal">16 Lessons</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">220</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">$29.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-neutral-600">24 Jun 2025</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">Floyd Miles</span>
                                    </td>
                                    <td>
                                        <div class="text-neutral-600">
                                            <h6 class="text-base mb-0 font-normal">Advanced App Development</h6>
                                            <span class="text-sm font-normal">25 Lessons</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">57</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">$29.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-neutral-600">24 Jun 2025</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">Ralph Edwards</span>
                                    </td>
                                    <td>
                                        <div class="text-neutral-600">
                                            <h6 class="text-base mb-0 font-normal">HTML Fundamental Course</h6>
                                            <span class="text-sm font-normal">17 Lessons </span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">27</span>
                                    </td>
                                    <td>
                                        <span class="text-neutral-600">$29.00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 2xl:col-span-4">
            <div class="card border-0 h-full">
                <div class="card-header">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="font-bold text-lg mb-0">Course Activity</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover:text-primary-600 flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                </div>
                <div class="card-body p-6">
                    <ul class="flex flex-wrap items-center justify-center my-3 gap-3">
                        <li class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full
                        bg-warning-600"></span>
                            <span class="text-neutral-600 text-sm font-semibold">
                                Paid Course:
                                <span class="text-primary-light font-bold">500</span>
                            </span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full
                        bg-success-main"></span>
                            <span class="text-neutral-600 text-sm font-semibold">
                                Free Course:
                                <span class="text-primary-light font-bold">300</span>
                            </span>
                        </li>
                    </ul>
                    <div id="paymentStatusChart" class="margin-16-minus y-value-left"></div>
                </div>
            </div>
        </div>
        <!-- ================== Third Row Cards End ======================= -->

    </div>

@endsection
