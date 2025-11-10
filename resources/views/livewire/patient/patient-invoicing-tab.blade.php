<div>
    @include('livewire.patient.patient-invoicing-consults')
    <section>
        <h2 class="text-xl font-bold mb-4">Facturen</h2>
        @if(isset($invoices) && count($invoices))
            @foreach($invoices as $invoice)
                <livewire:patient.patient-invoice-widget :invoice="$invoice" :key="$invoice->id" />
            @endforeach
        @else
            <div class="mt-8 text-gray-500 text-center">Er zijn nog geen facturen aangemaakt.</div>
        @endif
    </section>
</div>
