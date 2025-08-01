@extends('layout.layout')
@php
    $title='Pie Chart';
    $subTitle = 'Components / Pie Chart';
    $script = ' <script src="' . asset('assets/js/pieChartPageChart.js') . '"></script>';

@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Basic Pie Chart</h6>
            </div>
            <div class="card-body p-6 text-center">
                <div id="pieChart" class="flex justify-center apexcharts-tooltip-z-none"></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Donut Chart</h6>
            </div>
            <div class="card-body p-6 text-center flex flex-wrap items-start gap-5 justify-center">
                <div class="relative">
                    <div id="basicDonutChart" class="w-auto inline-block apexcharts-tooltip-z-none"></div>
                    <div class="absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                        <span class="text-lg text-secondary-light font-medium">Total Value</span>
                        <h4 class="mb-0">72</h4>
                    </div>
                </div>

                <div class="max-w-[290px] w-full">
                    <div class="flex items-center justify-between gap-3 border-b border-neutral-200 dark:border-neutral-600 pb-3 mb-3">
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">Label</span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">Value</span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">%</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-3">
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3">
                            <span class="w-3 h-3 bg-success-600 rounded-full"></span> Label 1
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">12</span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm"> 30.6% </span>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-3">
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3">
                            <span class="w-3 h-3 bg-primary-600 rounded-full"></span> Label 2
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">22</span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">  42.9%</span>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-3">
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3">
                            <span class="w-3 h-3 bg-info-600 rounded-full"></span> Label 3
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">12</span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm"> 24.6% </span>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-3">
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3">
                            <span class="w-3 h-3 bg-danger-600 rounded-full"></span> Label 4
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">12</span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm"> 26.6% </span>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-3">
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3">
                            <span class="w-3 h-3 bg-orange-500 rounded-full"></span> Label 5
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">7</span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm"> 13.3% </span>
                    </div>
                    <div class="flex items-center justify-between gap-3 mb-3">
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm flex items-center gap-3">
                            <span class="w-3 h-3 bg-warning-600 rounded-full"></span> Label 6
                        </span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm">7</span>
                        <span class="text-neutral-600 dark:text-neutral-200 font-medium text-sm"> 15.3% </span>
                    </div>
                </div>

            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Radar Chart</h6>
            </div>
            <div class="card-body p-6 text-center">
                <div id="radarChart" class="square-marker check-marker series-gap-6 flex justify-center"></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Multiple series</h6>
            </div>
            <div class="card-body p-6 text-center">
                <div id="multipleSeriesChart" class="apexcharts-tooltip-z-none square-marker check-marker series-gap-6 flex justify-center"></div>
            </div>
        </div>
    </div>

@endsection
