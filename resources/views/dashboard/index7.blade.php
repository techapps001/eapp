@extends('layout.layout')
@php
    $title='Dashboard';
    $subTitle = 'NFT & Gaming';
    $script = '<script>
                // ===================== Average Enrollment Rate Start =============================== 
                function createChartTwo(chartId, color1, color2) {
                    var options = {
                        series: [{
                            name: "series2",
                            data: [20000, 45000, 30000, 50000, 32000, 40000, 30000, 42000, 28000, 34000, 38000, 26000]
                        }],
                        legend: {
                            show: false
                        },
                        chart: {
                            type: "area",
                            width: "100%",
                            height: 240,
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
                            curve: "straight",
                            width: 3,
                            colors: [color1], // Use two colors for the lines
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
                                bottom: 0,
                                left: 0
                            },
                        },
                        fill: {
                            type: "gradient",
                            colors: [color1], // Use two colors for the gradient
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
                                opacityTo: [0.1, 0.1], // Ending opacity for both colors
                                stops: [0, 100],
                            },
                        },
                        markers: {
                            colors: [color1], // Use two colors for the markers
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
                                    fontSize: "12px"
                                }
                            }
                        },
                        yaxis: {
                            labels: {
                                // formatter: function (value) {
                                //     return "$" + value + "k";
                                // },
                                style: {
                                    fontSize: "12px"
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

                createChartTwo("enrollmentChart", "#487FFF");
                // ===================== Average Enrollment Rate End =============================== 


                // ===================== Delete Table Item Start =============================== 
                $(".remove-btn").on("click", function() {
                    $(this).closest("tr").addClass("hidden");
                });
                // ===================== Delete Table Item End =============================== 


                // ================================ Area chart Start ================================ 
                function createChart(chartId, chartColor) {

                    let currentYear = new Date().getFullYear();

                    var options = {
                        series: [{
                            name: "series1",
                            data: [0, 10, 8, 25, 15, 26, 13, 35, 15, 39, 16, 46, 42],
                        }, ],
                        chart: {
                            type: "area",
                            width: 164,
                            height: 72,

                            sparkline: {
                                enabled: true // Remove whitespace
                            },

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
                            width: 2,
                            colors: [chartColor],
                            lineCap: "round"
                        },
                        grid: {
                            show: true,
                            borderColor: "transparent",
                            strokeDashArray: 0,
                            position: "back",
                            xaxis: {
                                lines: {
                                    show: false
                                }
                            },
                            yaxis: {
                                lines: {
                                    show: false
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
                                top: -3,
                                right: 0,
                                bottom: 0,
                                left: 0
                            },
                        },
                        fill: {
                            type: "gradient",
                            colors: [chartColor], // Set the starting color (top color) here
                            gradient: {
                                shade: "light", // Gradient shading type
                                type: "vertical", // Gradient direction (vertical)
                                shadeIntensity: 0.5, // Intensity of the gradient shading
                                gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                                inverseColors: false, // Do not invert colors
                                opacityFrom: .8, // Starting opacity
                                opacityTo: 0.3, // Ending opacity
                                stops: [0, 100],
                            },
                        },
                        // Customize the circle marker color on hover
                        markers: {
                            colors: [chartColor],
                            strokeWidth: 2,
                            size: 0,
                            hover: {
                                size: 8
                            }
                        },
                        xaxis: {
                            labels: {
                                show: false
                            },
                            categories: [`Jan ${currentYear}`, `Feb ${currentYear}`, `Mar ${currentYear}`, `Apr ${currentYear}`, `May ${currentYear}`, `Jun ${currentYear}`, `Jul ${currentYear}`, `Aug ${currentYear}`, `Sep ${currentYear}`, `Oct ${currentYear}`, `Nov ${currentYear}`, `Dec ${currentYear}`],
                            tooltip: {
                                enabled: false,
                            },
                        },
                        yaxis: {
                            labels: {
                                show: false
                            }
                        },
                        tooltip: {
                            x: {
                                format: "dd/MM/yy HH:mm"
                            },
                        },
                    };

                    var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
                    chart.render();
                }

                // Call the function for each chart with the desired ID and color
                createChart("areaChart", "#FF9F29");
                // ================================ Area chart End ================================ 


                // ================================ Bar chart Start ================================ 
                var options = {
                    series: [{
                        name: "Sales",
                        data: [{
                            x: "Mon",
                            y: 20,
                        }, {
                            x: "Tue",
                            y: 40,
                        }, {
                            x: "Wed",
                            y: 20,
                        }, {
                            x: "Thur",
                            y: 30,
                        }, {
                            x: "Fri",
                            y: 40,
                        }, {
                            x: "Sat",
                            y: 35,
                        }]
                    }],
                    chart: {
                        type: "bar",
                        width: 164,
                        height: 80,
                        sparkline: {
                            enabled: true // Remove whitespace
                        },
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 6,
                            horizontal: false,
                            columnWidth: 14,
                        }
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
                    fill: {
                        type: "gradient",
                        colors: ["#E3E6E9"], // Set the starting color (top color) here
                        gradient: {
                            shade: "light", // Gradient shading type
                            type: "vertical", // Gradient direction (vertical)
                            shadeIntensity: 0.5, // Intensity of the gradient shading
                            gradientToColors: ["#E3E6E9"], // Bottom gradient color (with transparency)
                            inverseColors: false, // Do not invert colors
                            opacityFrom: 1, // Starting opacity
                            opacityTo: 1, // Ending opacity
                            stops: [0, 100],
                        },
                    },
                    grid: {
                        show: false,
                        borderColor: "#D1D5DB",
                        strokeDashArray: 1, // Use a number for dashed style
                        position: "back",
                    },
                    xaxis: {
                        labels: {
                            show: false // Hide y-axis labels
                        },
                        type: "category",
                        categories: ["Mon", "Tue", "Wed", "Thur", "Fri", "Sat"]
                    },
                    yaxis: {
                        labels: {
                            show: false,
                            formatter: function(value) {
                                return (value / 1000).toFixed(0) + "k";
                            }
                        }
                    },
                    tooltip: {
                        y: {
                            formatter: function(value) {
                                return value / 1000 + "k";
                            }
                        }
                    }
                };

                var chart = new ApexCharts(document.querySelector("#dailyIconBarChart"), options);
                chart.render();
                // ================================ Bar chart End ================================ 


                // ================================ Follow Btn Start ================================ 
                $(".follow-btn").on("click", function() {
                    if ($(this).text() === "Follow") {
                        $(this).text("Unfollow");
                    } else {
                        $(this).text("Follow");
                    }
                    $(this).toggleClass("bg-neutral-200 border-neutral-200 text-neutral-900");
                });
                // ================================ Follow Btn End ================================ 
                </script>';
@endphp

@section('content')

        <div class="gap-6 grid grid-cols-1 2xl:grid-cols-12">
            <div class="col-span-12 2xl:col-span-8">
                <div class="gap-6 grid grid-cols-1 sm:grid-cols-12">
                    <div class="col-span-12">
                        <div class="nft-promo-card card border-0 rounded-xl overflow-hidden relative z-1 py-6 3xl:px-[76px] 2xl:px-[56px] xl:px-[40px] lg:px-[28px] px-4">
                            <img src="{{ asset('assets/images/nft/nft-gradient-bg.png') }}" class="absolute start-0 top-0 w-full h-full z-[1]" alt="">
                            <div class="nft-promo-card__inner flex 3xl:gap-[80px] 2xl:gap-[48px] xl:gap-[32px] lg:gap-6 gap-4 items-center relative z-[1]">
                                <div class="nft-promo-card__thumb w-full">
                                    <img src="{{ asset('assets/images/nft/nf-card-img.png') }}" alt="" class="w-full h-full object-fit-cover">
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-4 text-white">Discover The Largest  NFTs Marketplace</h4>
                                    <p class="text-white text-base">The largest NFT (Non-Fungible Token) marketplace is OpenSea. Established in 2017, OpenSea has grown to become the leading platform for buying, selling, and trading digital assets,</p>
                                    <div class="flex items-center flex-wrap mt-6 gap-4">
                                        <a href="javascript:void(0)" class="btn rounded-full border br-white text-white px-[32px] py-[11px] hover:bg-white hover:text-neutral-900">Explore</a>
                                        <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-[28px] py-[11px]">Create Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        <h6 class="mb-4">Trending Bids</h6>
                        <div class="gap-6 grid grid-cols-1 sm:grid-cols-12">
                            <!-- Dashboard Widget Start -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                                <div class="card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-3">
                                    <div class="card-body p-0">
                                        <div class="flex flex-wrap items-center justify-between gap-1">
                                            <div class="flex items-center flex-wrap gap-4">
                                                <span class="w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0">
                                                    <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                                </span>

                                                <div class="flex-grow-1">
                                                    <h6 class="font-semibold mb-0">24,000</h6>
                                                    <span class="font-medium text-secondary-light text-base">Artworks</span>
                                                    <p class="text-sm mb-0 flex items-center flex-wrap gap-3 mt-3">
                                                        <span class="bg-success-focus px-1.5 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-600 text-sm flex items-center gap-2">
                                                            +168.001%
                                                            <i class="ri-arrow-up-line"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                            <!-- Dashboard Widget Start -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                                <div class="card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-5">
                                    <div class="card-body p-0">
                                        <div class="flex flex-wrap items-center justify-between gap-1">
                                            <div class="flex items-center flex-wrap gap-4">
                                                <span class="w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0">
                                                    <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                                </span>

                                                <div class="flex-grow-1">
                                                    <h6 class="font-semibold mb-0">82,000</h6>
                                                    <span class="font-medium text-secondary-light text-base">Auction</span>
                                                    <p class="text-sm mb-0 flex items-center flex-wrap gap-3 mt-3">
                                                        <span class="bg-danger-focus px-1.5 py-0.5 rounded-sm font-medium text-danger-600 dark:text-danger-600 text-sm flex items-center gap-2">
                                                            +168.001%
                                                            <i class="ri-arrow-down-line"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                            <!-- Dashboard Widget Start -->
                            <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                                <div class="card border-0 px-6 py-4 shadow-none rounded-xl h-full bg-gradient-start-2">
                                    <div class="card-body p-0">
                                        <div class="flex flex-wrap items-center justify-between gap-1">
                                            <div class="flex items-center flex-wrap gap-4">
                                                <span class="w-10 h-10 bg-primary-600 flex-shrink-0 text-white flex justify-center items-center rounded-full h6 mb-0">
                                                    <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                                </span>

                                                <div class="flex-grow-1">
                                                    <h6 class="font-semibold mb-0">800</h6>
                                                    <span class="font-medium text-secondary-light text-base">Creators</span>
                                                    <p class="text-sm mb-0 flex items-center flex-wrap gap-3 mt-3">
                                                        <span class="bg-success-focus px-1.5 py-0.5 rounded-sm font-medium text-success-600 dark:text-success-600 text-sm flex items-center gap-2">
                                                            +168.001%
                                                            <i class="ri-arrow-up-line"></i>
                                                        </span> This week
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Widget End -->
                        </div>
                    </div>

                    <div class="col-span-12">
                        <div class="mb-4 mt-8 flex flex-wrap justify-between gap-4">
                            <h6 class="mb-0">Trending NFTs</h6>
                            <ul class="style-pill-button flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                                <li class=" border-0 me-2" role="presentation">
                                    <button class="font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white" id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All</button>
                                </li>
                                <li class=" border-0 me-2" role="presentation">
                                    <button class="font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="art-tab" data-tabs-target="#art" type="button" role="tab" aria-controls="art" aria-selected="false">Art</button>
                                </li>
                                <li class=" border-0 me-2" role="presentation">
                                    <button class="font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="music-tab" data-tabs-target="#music" type="button" role="tab" aria-controls="music" aria-selected="false">Music</button>
                                </li>
                                <li class=" border-0 me-2" role="presentation">
                                    <button class="font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="utility-tab" data-tabs-target="#utility" type="button" role="tab" aria-controls="utility" aria-selected="false">Utility</button>
                                </li>
                                <li class=" border-0 me-2" role="presentation">
                                    <button class="font-semibold rounded-full px-5 py-1.5 border border-neutral-300 text-neutral-900 dark:border-neutral-300 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="fashion-tab" data-tabs-target="#fashion" type="button" role="tab" aria-controls="fashion" aria-selected="false">Fashion</button>
                                </li>
                            </ul>
                        </div>

                        <div id="default-tab-content">
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6">
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">Fantastic Alien</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="art" role="tabpanel" aria-labelledby="art-tab">
                                <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6">
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">Fantastic Alien</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="music" role="tabpanel" aria-labelledby="music-tab">
                                <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6">
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">Fantastic Alien</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="utility" role="tabpanel" aria-labelledby="utility-tab">
                                <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6">
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">Fantastic Alien</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="fashion" role="tabpanel" aria-labelledby="fashion-tab">
                                <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-6">
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">Fantastic Alien</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden">
                                        <div class="rounded overflow-hidden">
                                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                                        </div>
                                        <div class="p-2.5">
                                            <h6 class="text-base font-bold text-primary-light">New Figures</h6>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                <span class="text-sm text-secondary-light font-medium">Watson Kristin</span>
                                            </div>
                                            <div class="mt-2.5 flex items-center justify-between gap-2 flex-wrap">
                                                <span class="text-sm text-secondary-light font-medium">
                                                    Price:
                                                    <span class="text-sm text-primary-light font-semibold">1.44 ETH</span>
                                                </span>
                                                <span class="text-sm font-semibold text-primary-600">$4,224.96</span>
                                            </div>
                                            <div class="flex items-center flex-wrap mt-3 gap-2">
                                                <a href="javascript:void(0)" class="btn rounded-full border text-neutral-500 border-neutral-500 px-3 py-1.5 hover:bg-neutral-500 hover:text-white flex-grow-1">History</a>
                                                <a href="javascript:void(0)" class="btn rounded-full btn-primary-600 px-3 py-1.5 flex-grow-1">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12">
                        <div class="card border-0 h-full">
                            <div class="card-body p-6">
                                <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                                    <h6 class="font-bold text-lg mb-0">Recent Bid</h6>
                                    <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light rounded-full">
                                        <option>All Items </option>
                                        <option>New Item</option>
                                        <option>Trending Item</option>
                                        <option>Old Item</option>
                                    </select>
                                </div>
                                <div class="table-responsive scroll-sm">
                                    <div class="table-responsive scroll-sm">
                                        <table class="table bordered-table sm-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Items </th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Your Offer  </th>
                                                    <th scope="col">Recent Offer</th>
                                                    <th scope="col">Time Left</th>
                                                    <th scope="col" class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold">Spanky & Friends</h6>
                                                                <span class="text-sm text-secondary-light font-normal">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-offer-img1.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold text-primary-light">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class="d-inline-flex items-center gap-3">
                                                            <button type="button" class="text-xl text-success-600"><i class="ri-edit-line"></i></button>
                                                            <button type="button" class="text-xl text-danger-600 remove-btn"><i class="ri-delete-bin-6-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-items-img2.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold">Nike Air Shoe</h6>
                                                                <span class="text-sm text-secondary-light font-normal">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-offer-img2.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold text-primary-light">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class="d-inline-flex items-center gap-3">
                                                            <button type="button" class="text-xl text-success-600"><i class="ri-edit-line"></i></button>
                                                            <button type="button" class="text-xl text-danger-600 remove-btn"><i class="ri-delete-bin-6-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-items-img3.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold">Woman Dresses</h6>
                                                                <span class="text-sm text-secondary-light font-normal">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-offer-img3.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold text-primary-light">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class="d-inline-flex items-center gap-3">
                                                            <button type="button" class="text-xl text-success-600"><i class="ri-edit-line"></i></button>
                                                            <button type="button" class="text-xl text-danger-600 remove-btn"><i class="ri-delete-bin-6-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-items-img4.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold">Smart Watch</h6>
                                                                <span class="text-sm text-secondary-light font-normal">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-offer-img4.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold text-primary-light">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class="d-inline-flex items-center gap-3">
                                                            <button type="button" class="text-xl text-success-600"><i class="ri-edit-line"></i></button>
                                                            <button type="button" class="text-xl text-danger-600 remove-btn"><i class="ri-delete-bin-6-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-items-img5.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold">Hoodie Rose</h6>
                                                                <span class="text-sm text-secondary-light font-normal">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-offer-img5.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold text-primary-light">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class="d-inline-flex items-center gap-3">
                                                            <button type="button" class="text-xl text-success-600"><i class="ri-edit-line"></i></button>
                                                            <button type="button" class="text-xl text-danger-600 remove-btn"><i class="ri-delete-bin-6-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-items-img6.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold">Hoodie Rose</h6>
                                                                <span class="text-sm text-secondary-light font-normal">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-offer-img6.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold text-primary-light">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class="d-inline-flex items-center gap-3">
                                                            <button type="button" class="text-xl text-success-600"><i class="ri-edit-line"></i></button>
                                                            <button type="button" class="text-xl text-danger-600 remove-btn"><i class="ri-delete-bin-6-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-items-img2.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold">Hoodie Rose</h6>
                                                                <span class="text-sm text-secondary-light font-normal">Owned by ABC</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1.44 ETH</td>
                                                    <td>3.053 ETH</td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{ asset('assets/images/nft/nft-offer-img7.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-base mb-0 font-semibold text-primary-light">1.44.00 ETH</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2h 5m 40s</td>
                                                    <td>
                                                        <div class="d-inline-flex items-center gap-3">
                                                            <button type="button" class="text-xl text-success-600"><i class="ri-edit-line"></i></button>
                                                            <button type="button" class="text-xl text-danger-600 remove-btn"><i class="ri-delete-bin-6-line"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 2xl:col-span-4">
                <div class="gap-6 grid grid-cols-1 sm:grid-cols-12">
                    <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                        <div class="card border-0 h-full">
                            <div class="card-header border-bottom flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="font-bold text-lg mb-0">ETH Price</h6>
                                <select class="form-select form-select-sm w-auto bg-white dark:bg-neutral-700 border text-secondary-light rounded-full">
                                    <option>November </option>
                                    <option>December</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <div id="enrollmentChart" class="apexcharts-tooltip-style-1 yaxies-more"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                        <div class="card border-0 h-full">
                            <div class="card-header border-bottom flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="font-bold text-lg mb-0">Statistics</h6>
                                <a href="javascript:void(0)" class="text-primary-600 hover:text-primary-700 flex items-center gap-1">
                                    View All
                                    <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center gap-1 justify-between mb-[44px]">
                                    <div>
                                        <h5 class="font-semibold mb-3">145</h5>
                                        <span class="text-secondary-light font-normal text-xl">Total Art Sold</span>
                                    </div>
                                    <div id="dailyIconBarChart"></div>
                                </div>
                                <div class="flex items-center gap-1 justify-between">
                                    <div>
                                        <h5 class="font-semibold mb-3">750 ETH</h5>
                                        <span class="text-secondary-light font-normal text-xl">Total Earnings</span>
                                    </div>
                                    <div id="areaChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                        <div class="card border-0 h-full">
                            <div class="card-header border-bottom flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="font-bold text-lg mb-0">Featured Creators</h6>
                                <a href="javascript:void(0)" class="text-primary-600 hover:text-primary-700 flex items-center gap-1">
                                    View All
                                    <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center justify-between gap-2 flex-wrap">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-semibold">Theresa Webb</h6>
                                            <span class="text-sm text-secondary-light font-normal">Owned by ABC</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary-600 px-6 rounded-full follow-btn">Follow</button>
                                </div>
                                <div class="mt-6">
                                    <div class="grid grid-cols-2 gap-6">
                                        <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden shadow-4">
                                            <div class="rounded overflow-hidden">
                                                <img src="{{ asset('assets/images/nft/featured-creator1.png') }}" alt="" class="w-full h-full object-fit-cover">
                                            </div>
                                            <div class="p-3">
                                                <h6 class="text-base font-bold text-primary-light mb-3">New Figures</h6>
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('assets/images/nft/bitcoin.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                    <span class="text-sm text-secondary-light font-medium">0.10 BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nft-card bg-white dark:bg-neutral-700 rounded overflow-hidden shadow-4">
                                            <div class="rounded overflow-hidden">
                                                <img src="{{ asset('assets/images/nft/featured-creator2.png') }}" alt="" class="w-full h-full object-fit-cover">
                                            </div>
                                            <div class="p-3">
                                                <h6 class="text-base font-bold text-primary-light mb-3">Abstrac Girl</h6>
                                                <div class="flex items-center gap-2">
                                                    <img src="{{ asset('assets/images/nft/bitcoin.png') }}" class="w-28-px h-28-px rounded-full object-fit-cover" alt="">
                                                    <span class="text-sm text-secondary-light font-medium">0.10 BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                        <div class="card border-0 h-full">
                            <div class="card-header border-bottom flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="font-bold text-lg mb-0">Featured Creators</h6>
                                <a href="javascript:void(0)" class="text-primary-600 hover:text-primary-700 flex items-center gap-1">
                                    View All
                                    <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                </a>
                            </div>
                            <div class="card-body pt-6">
                                <div class="flex items-center justify-between gap-2 flex-wrap mb-[32px]">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/nft/creator-img1.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-semibold">Theresa Webb</h6>
                                            <span class="text-sm text-secondary-light font-normal">@wishon</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2">Follow</button>
                                </div>
                                <div class="flex items-center justify-between gap-2 flex-wrap mb-[32px]">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/nft/creator-img2.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-semibold">Arlene McCoy</h6>
                                            <span class="text-sm text-secondary-light font-normal">@nemccoy</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2">Follow</button>
                                </div>
                                <div class="flex items-center justify-between gap-2 flex-wrap mb-[32px]">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/nft/creator-img3.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-semibold">Kathryn Murphy</h6>
                                            <span class="text-sm text-secondary-light font-normal">@kathrynmur</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2">Follow</button>
                                </div>
                                <div class="flex items-center justify-between gap-2 flex-wrap mb-[32px]">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/nft/creator-img4.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-semibold">Marvin McKinney</h6>
                                            <span class="text-sm text-secondary-light font-normal">@marvinckin</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2">Follow</button>
                                </div>
                                <div class="flex items-center justify-between gap-2 flex-wrap mb-[32px]">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/nft/creator-img1.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-semibold">Theresa Webb</h6>
                                            <span class="text-sm text-secondary-light font-normal">@wishon</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2">Follow</button>
                                </div>
                                <div class="flex items-center justify-between gap-2 flex-wrap mb-0">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/images/nft/creator-img5.png') }}" alt="" class="flex-shrink-0 w-10 h-10 rounded-full me-3">
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-semibold">Dianne Russell</h6>
                                            <span class="text-sm text-secondary-light font-normal">@dinne_r</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-6 rounded-full follow-btn transition-2">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection