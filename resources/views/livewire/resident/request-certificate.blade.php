<div>
    @if (\App\Models\Blotter::where('resident_id', auth()->user()->resident->id)->get()->count() > 0)
        <div x-data="{
            bannerVisible: false,
            bannerVisibleAfter: 300
        }" x-show="bannerVisible" x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-y-0"
            x-transition:leave-end="translate-y-full" x-init="setTimeout(() => { bannerVisible = true }, bannerVisibleAfter);"
            class="fixed bottom-0 right-0 w-full h-auto duration-300 ease-out sm:px-5 sm:pb-5 sm:w-[26rem] lg:w-full"
            x-cloak>
            <div
                class="flex flex-col items-center justify-between w-full h-full max-w-4xl p-6 mx-auto bg-white border-t shadow-lg lg:p-8 lg:flex-row sm:border-0 sm:rounded-xl">
                <div
                    class="flex flex-col items-start h-full pb-6 text-xs lg:items-center lg:flex-row lg:pb-0 lg:pr-6 lg:space-x-5 text-neutral-600">
                    {{-- <img src="https://cdn-icons-png.flaticon.com/512/9004/9004938.png"
                    class="w-8 h-8 sm:w-12 sm:h-12 lg:w-16 lg:h-16"> --}}
                    <svg class="w-8 h-8 sm:w-12 sm:h-12 lg:w-16 lg:h-16 text-red-500" viewBox="0 0 16 16" fill="#EC6F8B"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.493 0.015 C 7.442 0.021,7.268 0.039,7.107 0.055 C 5.234 0.242,3.347 1.208,2.071 2.634 C 0.660 4.211,-0.057 6.168,0.009 8.253 C 0.124 11.854,2.599 14.903,6.110 15.771 C 8.169 16.280,10.433 15.917,12.227 14.791 C 14.017 13.666,15.270 11.933,15.771 9.887 C 15.943 9.186,15.983 8.829,15.983 8.000 C 15.983 7.171,15.943 6.814,15.771 6.113 C 14.979 2.878,12.315 0.498,9.000 0.064 C 8.716 0.027,7.683 -0.006,7.493 0.015 M8.853 1.563 C 9.548 1.653,10.198 1.848,10.840 2.160 C 11.538 2.500,12.020 2.846,12.587 3.413 C 13.154 3.980,13.500 4.462,13.840 5.160 C 14.285 6.075,14.486 6.958,14.486 8.000 C 14.486 9.054,14.284 9.932,13.826 10.867 C 13.654 11.218,13.307 11.781,13.145 11.972 L 13.090 12.037 8.527 7.473 L 3.963 2.910 4.028 2.855 C 4.219 2.693,4.782 2.346,5.133 2.174 C 6.305 1.600,7.555 1.395,8.853 1.563 M7.480 8.534 L 12.040 13.095 11.973 13.148 C 11.734 13.338,11.207 13.662,10.867 13.828 C 10.239 14.135,9.591 14.336,8.880 14.444 C 8.456 14.509,7.544 14.509,7.120 14.444 C 5.172 14.148,3.528 13.085,2.493 11.451 C 2.279 11.114,1.999 10.526,1.859 10.119 C 1.468 8.989,1.403 7.738,1.670 6.535 C 1.849 5.734,2.268 4.820,2.766 4.147 C 2.836 4.052,2.899 3.974,2.907 3.974 C 2.914 3.974,4.972 6.026,7.480 8.534 "
                            stroke="none" fill-rule="evenodd" fill="#EC6F8B" />
                    </svg>
                    <div class="pt-6 lg:pt-0">
                        <h4 class="w-full mb-1 text-xl font-bold leading-none -translate-y-1 text-neutral-900">Blotter
                            Notice
                        </h4>
                        <p class="">Your Account will not be able to request any certificates.</p>
                    </div>
                </div>

            </div>
        </div>
    @endif

    <header class="py-2">
        <span class="font-semibold text-blue-700 text-xl">Request Certificates</span>
    </header>
    <div>
        {{ $this->table }}
    </div>
</div>
