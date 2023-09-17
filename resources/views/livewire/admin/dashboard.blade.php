<div x-data="{ modal: @entangle('cardModal'), indigency: @entangle('indigency_modal') }">
    <div class="grid grid-cols-4 gap-5">
        <div class="bg-white rounded-2xl shadow-sm shadow-blue-400 p-8">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-blue-700">RESIDENTS</h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-9 h-9 md hydrated fill-blue-700">
                    <path
                        d="M18 13c-.94 0-1.81.33-2.5.88A3.97 3.97 0 0014 17c0 .75.21 1.46.58 2.06A3.97 3.97 0 0018 21c1.01 0 1.93-.37 2.63-1 .31-.26.58-.58.79-.94.37-.6.58-1.31.58-2.06 0-2.21-1.79-4-4-4zm2.07 3.57l-2.13 1.97c-.14.13-.33.2-.51.2-.19 0-.38-.07-.53-.22l-.99-.99a.754.754 0 010-1.06c.29-.29.77-.29 1.06 0l.48.48 1.6-1.48c.3-.28.78-.26 1.06.04s.26.77-.04 1.06z">
                    </path>
                    <path
                        d="M21.09 21.5c0 .28-.22.5-.5.5H3.41c-.28 0-.5-.22-.5-.5 0-4.14 4.08-7.5 9.09-7.5 1.03 0 2.03.14 2.95.41-.59.7-.95 1.61-.95 2.59 0 .75.21 1.46.58 2.06.2.34.46.65.76.91.7.64 1.63 1.03 2.66 1.03 1.12 0 2.13-.46 2.85-1.2.16.54.24 1.11.24 1.7z"
                        opacity=".4"></path>
                    <path d="M12 12a5 5 0 100-10 5 5 0 000 10z"></path>
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-600">{{ \App\Models\Resident::count() }}</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm shadow-blue-400 p-8">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-blue-700">BGRY. OFFICIALS</h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-9 h-9 md hydrated fill-blue-700">
                    <path
                        d="M18 13c-.94 0-1.81.33-2.5.88A3.97 3.97 0 0014 17c0 .75.21 1.46.58 2.06A3.97 3.97 0 0018 21c1.01 0 1.93-.37 2.63-1 .31-.26.58-.58.79-.94.37-.6.58-1.31.58-2.06 0-2.21-1.79-4-4-4zm2.07 3.57l-2.13 1.97c-.14.13-.33.2-.51.2-.19 0-.38-.07-.53-.22l-.99-.99a.754.754 0 010-1.06c.29-.29.77-.29 1.06 0l.48.48 1.6-1.48c.3-.28.78-.26 1.06.04s.26.77-.04 1.06z">
                    </path>
                    <path
                        d="M21.09 21.5c0 .28-.22.5-.5.5H3.41c-.28 0-.5-.22-.5-.5 0-4.14 4.08-7.5 9.09-7.5 1.03 0 2.03.14 2.95.41-.59.7-.95 1.61-.95 2.59 0 .75.21 1.46.58 2.06.2.34.46.65.76.91.7.64 1.63 1.03 2.66 1.03 1.12 0 2.13-.46 2.85-1.2.16.54.24 1.11.24 1.7z"
                        opacity=".4"></path>
                    <path d="M12 12a5 5 0 100-10 5 5 0 000 10z"></path>
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-600">{{ \App\Models\Official::count() }}</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm shadow-red-400 p-8">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-red-400">BLOTTER RECORDS</h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-9 h-9 md hydrated fill-red-500">
                    <path
                        d="M21.66 10.44l-.98 4.18c-.84 3.61-2.5 5.07-5.62 4.77-.5-.04-1.04-.13-1.62-.27l-1.68-.4c-4.17-.99-5.46-3.05-4.48-7.23l.98-4.19c.2-.85.44-1.59.74-2.2 1.17-2.42 3.16-3.07 6.5-2.28l1.67.39c4.19.98 5.47 3.05 4.49 7.23z"
                        opacity=".4"></path>
                    <path
                        d="M15.06 19.39c-.62.42-1.4.77-2.35 1.08l-1.58.52c-3.97 1.28-6.06.21-7.35-3.76L2.5 13.28c-1.28-3.97-.22-6.07 3.75-7.35l1.58-.52c.41-.13.8-.24 1.17-.31-.3.61-.54 1.35-.74 2.2l-.98 4.19c-.98 4.18.31 6.24 4.48 7.23l1.68.4c.58.14 1.12.23 1.62.27zM17.49 10.51c-.06 0-.12-.01-.19-.02l-4.85-1.23a.75.75 0 01.37-1.45l4.85 1.23a.748.748 0 01-.18 1.47z">
                    </path>
                    <path
                        d="M14.56 13.89c-.06 0-.12-.01-.19-.02l-2.91-.74a.75.75 0 01.37-1.45l2.91.74c.4.1.64.51.54.91-.08.34-.38.56-.72.56z">
                    </path>
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-600">{{ \App\Models\Blotter::count() }}</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm shadow-yellow-400 p-8">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-yellow-400">PENDING REQUESTS</h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-9 h-9 md hydrated fill-yellow-500">
                    <path
                        d="M21.66 10.44l-.98 4.18c-.84 3.61-2.5 5.07-5.62 4.77-.5-.04-1.04-.13-1.62-.27l-1.68-.4c-4.17-.99-5.46-3.05-4.48-7.23l.98-4.19c.2-.85.44-1.59.74-2.2 1.17-2.42 3.16-3.07 6.5-2.28l1.67.39c4.19.98 5.47 3.05 4.49 7.23z"
                        opacity=".4"></path>
                    <path
                        d="M15.06 19.39c-.62.42-1.4.77-2.35 1.08l-1.58.52c-3.97 1.28-6.06.21-7.35-3.76L2.5 13.28c-1.28-3.97-.22-6.07 3.75-7.35l1.58-.52c.41-.13.8-.24 1.17-.31-.3.61-.54 1.35-.74 2.2l-.98 4.19c-.98 4.18.31 6.24 4.48 7.23l1.68.4c.58.14 1.12.23 1.62.27zM17.49 10.51c-.06 0-.12-.01-.19-.02l-4.85-1.23a.75.75 0 01.37-1.45l4.85 1.23a.748.748 0 01-.18 1.47z">
                    </path>
                    <path
                        d="M14.56 13.89c-.06 0-.12-.01-.19-.02l-2.91-.74a.75.75 0 01.37-1.45l2.91.74c.4.1.64.51.54.91-.08.34-.38.56-.72.56z">
                    </path>
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-600">
                {{ \App\Models\RequestCertificate::where('status', 'pending')->count() }}</p>
        </div>
    </div>

    <div class="mt-10 bg-white rounded-xl px-10 py-5">
        <header class="text-xl font-bold uppercase text-gray-700">
            Certificate Requests
        </header>
        <div class="mt-5">
            {{ $this->table }}
        </div>
    </div>

    <div x-show="modal" x-cloak class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!--
          Background backdrop, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div x-show="modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:enter-start="opacity-100" x-transition:enter-end="opacity-0" x-cloak
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
                <div x-show="modal" x-transition:enter="ease-out duration-300" x-cloak
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:enter-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:enter-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-7xl">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div x-ref="printContainer" class="relative">
                            <div class="fixed top-0 left-0 w-full h-full">
                                <div class="grid place-content-center h-full">
                                    <img src="{{ asset('image/barangayLogo.png') }}"
                                        class="object-cover h-[40rem] w-[40rem] opacity-10" alt="">
                                </div>
                            </div>
                            <div class="flex space-x-20 justify-center items-start">
                                <div>
                                    <img src="{{ asset('image/bulanlogo.jpg') }}" class="h-28" alt="">
                                </div>
                                <div class="text-center">
                                    <h1 class="leading-5">Republic of the Philippines</h1>
                                    <h1 class=" leading-5">Province of Sorsogon</h1>
                                    <h1 class="font-bold leading-5">Municipality of Bulan</h1>
                                    <h1 class="font-bold leading-5">Barangay Gate</h1>
                                </div>
                                <div>
                                    <img src="{{ asset('image/barangayLogo.png') }}" class="h-[7.5rem]" alt="">
                                </div>
                            </div>
                            <div class="mt-2 text-center">
                                <h1 class="text-lg font-semibold">OFFICE OF SANGGUNIANG BARANGAY</h1>
                            </div>
                            <div class="mt-5 text-center">
                                <h1 class="text-4xl font-bold">BARANGAY CLEARANCE</h1>
                            </div>
                            <div class="mt-5">
                                <p>To whom it may concern,</p>
                                <p class="text-justify indent-16">This is to certify that <span
                                        class="font-bold uppercase text-lg">{{ $requestor_data->user->name ?? '' }}</span>,
                                    <span class="font-bold">{{ $requestor_data->user->resident->age ?? '' }}</span>
                                    years of age,
                                    single/married,
                                    Filipino, a bonafied resident of Purok
                                    <span
                                        class="font-bold uppercase">{{ $requestor_data->user->resident->purok ?? '' }}</span>,
                                    Barangay Gate
                                    Bulan,
                                    Sorsogon. S/he has a good moral character and law abiding citizen in the community.
                                </p>
                                <p class="mt-5 text-justify indent-16">
                                    This certification is being issued upon the request of the aforementioned person
                                    for, <span
                                        class="font-bold uppercase text-lg">{{ $requestor_data->purpose ?? '' }}</span>
                                    purposes as a requirement. In
                                    accordance to the implementation of the provision of the LOCAL GOVERNMENT CODE of
                                    1991 and for whatever legal purposes it may serve.
                                </p>
                                <p class="mt-5 text-justify indent-16">
                                    Signed this, {{ \Carbon\Carbon::now()->format('d') }} day of
                                    {{ \Carbon\Carbon::now()->format('F Y') }}, in Office of the Sangguniang Barangay,
                                    Barangay Gate, Bulan, Sorsogon, Philippines.
                                </p>

                                <div class="mt-10 flex justify-between">
                                    <div>
                                        <h1>Prepared by:</h1>
                                        <div class="mt-5">
                                            <h1 class="font-bold">ANABEL B. MURILLA</h1>
                                            <span>Barangay Secretary</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h1>Verified by:</h1>
                                        <div class="mt-5">

                                            <div class="flex flex-col items-start justify-start">
                                                <div class="flex space-x-2 items-center">
                                                    <span class="font-bold">HON:</span>
                                                    <span class="w-56 border-b-2 border-black"></span>
                                                </div>
                                                <span>Barangay Kagawad</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10">
                                    <div class="text-center">
                                        <h1>Approved by:</h1>
                                        <div class="mt-5">
                                            <h1 class="font-bold">HON. ANTONIO B. BONCAN</h1>
                                            <span>Punong Barangay</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 grid grid-cols-2 gap-14">
                                    <div>
                                        <div class="flex space-x-1">
                                            <span>Paid under O.R. Number:</span>
                                            <span class="flex-1 w-full  border-b-2 border-black"></span>
                                        </div>
                                        <div class="flex space-x-1">
                                            <span>Date:</span>
                                            <span class="flex-1 w-full  border-b-2 border-black"></span>
                                        </div>
                                        <div class="flex space-x-1">
                                            <span>NOTE: NOT VALID WITHOUT OFFICIAL SEAL</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex space-x-1">
                                            <span>CTC Number:</span>
                                            <span class="flex-1 w-full  border-b-2 border-black"></span>
                                        </div>
                                        <div class="flex space-x-1">
                                            <span>Issued On:</span>
                                            <span class="flex-1 w-full  border-b-2 border-black"></span>
                                        </div>
                                        <div class="flex space-x-1">
                                            <span>Place of issuance:</span>
                                            <span class="flex-1 w-full  border-b-2 border-black"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50  relative px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" @click="printOut($refs.printContainer.outerHTML);"
                            class="inline-flex w-full justify-center rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Print
                            Certificate</button>
                        <button type="button" wire:click="$set('cardModal', false)"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-show="indigency" x-cloak class="relative z-10" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <!--
          Background backdrop, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div x-show="indigency" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:enter-start="opacity-100" x-transition:enter-end="opacity-0" x-cloak
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
                <div x-show="indigency" x-transition:enter="ease-out duration-300" x-cloak
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:enter-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:enter-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-7xl">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div x-ref="printContainer" class="relative">
                            <div class="fixed top-0 left-0 w-full h-full">
                                <div class="grid place-content-center h-full">
                                    <img src="{{ asset('image/barangayLogo.png') }}"
                                        class="object-cover h-[40rem] w-[40rem] opacity-10" alt="">
                                </div>
                            </div>
                            <div class="flex space-x-20 justify-center items-start">
                                <div>
                                    <img src="{{ asset('image/bulanlogo.jpg') }}" class="h-28" alt="">
                                </div>
                                <div class="text-center">
                                    <h1 class="leading-5">Republic of the Philippines</h1>
                                    <h1 class=" leading-5">Province of Sorsogon</h1>
                                    <h1 class="font-bold leading-5">Municipality of Bulan</h1>
                                    <h1 class="font-bold leading-5">Barangay Gate</h1>
                                </div>
                                <div>
                                    <img src="{{ asset('image/barangayLogo.png') }}" class="h-[7.5rem]"
                                        alt="">
                                </div>
                            </div>
                            <div class="mt-2 text-center">
                                <h1 class="text-lg font-semibold">OFFICE OF SANGGUNIANG BARANGAY</h1>
                            </div>
                            <div class="mt-5 text-center">
                                <h1 class="text-4xl font-bold">CERTIFICATE OF INDIGENCY</h1>
                            </div>
                            <div class="mt-5">
                                <p>To whom it may concern,</p>
                                <p class="text-justify indent-16">This is to certify that <span
                                        class="font-bold uppercase text-lg">{{ $requestor_data->user->name ?? '' }}</span>,
                                    <span class="font-bold">{{ $requestor_data->user->resident->age ?? '' }}</span>
                                    years of age, bonafied resident of Purok
                                    <span
                                        class="font-bold uppercase">{{ $requestor_data->user->resident->purok ?? '' }}</span>,
                                    Barangay Gate
                                    Bulan,
                                    Sorsogon.
                                </p>
                                <p class="mt-5 text-justify indent-16">
                                    This further certifies that the above mentioned person was belong to the indigent
                                    family as per record on the Registry of Barangay inhabitants. The issued upon
                                    request of the interested party for seeking <span
                                        class="font-bold uppercase text-lg">{{ $requestor_data->purpose ?? '' }}</span>
                                    Assistance.
                                </p>
                                <p class="mt-5 text-justify indent-16">
                                    Issued this, {{ \Carbon\Carbon::now()->format('d') }} day of
                                    {{ \Carbon\Carbon::now()->format('F Y') }}, in Office of the Sangguniang Barangay,
                                    Barangay Gate, Bulan, Sorsogon, Philippines.
                                </p>

                                <div class="mt-10 flex justify-between">
                                    <div>
                                        <h1>Attested by:</h1>
                                        <div class="mt-5">
                                            <h1 class="font-bold">ANABEL B. MURILLA</h1>
                                            <span>Barangay Secretary</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10 flex justify-end">
                                    <div class="text-center">
                                        <h1>Certified by:</h1>
                                        <div class="mt-5">
                                            <h1 class="font-bold">HON. ANTONIO B. BONCAN</h1>
                                            <span>Punong Barangay</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50  relative px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" @click="printOut($refs.printContainer.outerHTML);"
                            class="inline-flex w-full justify-center rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Print
                            Certificate</button>
                        <button type="button" wire:click="$set('indigency_modal', false)"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
