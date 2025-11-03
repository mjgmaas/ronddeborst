@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="border-b-2 rounded-xl mt-4 bg-white shadow-lg">
    <div class="mt-8 mb-6 ml-10 pl-10">
        <h1 class="text-2xl font-bold">{{ $this->getTitle() }}</h1>
    </div>
    <div x-data="{ tab: 'patient' }">
        <div class="flex bg-gray-50 border-b border-gray-200">
            <button
                type="button"
                class="px-4 py-2 rounded-t-lg border-b-2 focus:outline-none transition"
                :class="tab === 'patient'
                    ? 'border-primary-600 text-primary-600 bg-white font-bold'
                    : 'border-transparent text-gray-500 bg-gray-50 hover:text-primary-600 hover:bg-white'"
                @click="tab = 'patient'"
            >
                Patiënt
            </button>
            <button
                type="button"
                class="px-4 py-2 rounded-t-lg border-b-2 focus:outline-none transition"
                :class="tab === 'pregnancy'
                    ? 'border-primary-600 text-primary-600 bg-white font-bold'
                    : 'border-transparent text-gray-500 bg-gray-50 hover:text-primary-600 hover:bg-white'"
                @click="tab = 'pregnancy'"
            >
                Zwangerschap
            </button>
            <button
                type="button"
                class="px-4 py-2 rounded-t-lg border-b-2 focus:outline-none transition"
                :class="tab === 'consults'
                    ? 'border-primary-600 text-primary-600 bg-white font-bold'
                    : 'border-transparent text-gray-500 bg-gray-50 hover:text-primary-600 hover:bg-white'"
                @click="tab = 'consults'"
            >
                Consults
            </button>
            <button
                type="button"
                class="px-4 py-2 rounded-t-lg border-b-2 focus:outline-none transition"
                :class="tab === 'invoicing'
                    ? 'border-primary-600 text-primary-600 bg-white font-bold'
                    : 'border-transparent text-gray-500 bg-gray-50 hover:text-primary-600 hover:bg-white'"
                @click="tab = 'invoicing'"
            >
                Facturatie
            </button>
        </div>
            <div class="p-8">
                <div x-show="tab === 'patient'">
                    <livewire:patient.patient-general-widget :patient="$patient" />
                </div>
                <div x-show="tab === 'pregnancy'">
                    <livewire:patient.patient-pregnancy-widget :pregnancy="$pregnancy" />
                </div>
                <div x-show="tab === 'consults'">
                    <livewire:patient.patient-consults-tab :patient="$patient" />
                </div>
                <div x-show="tab === 'invoicing'">
                    <livewire:patient.patient-invoicing-tab :patient="$patient" />
                </div>
            </div>
    </div>
</div>
