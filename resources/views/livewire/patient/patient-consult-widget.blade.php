<div
	@if(isset($consult))
		x-data="{ consultId: {{ $consult->id }} }"
		x-init="
			$wire.on('focus-notes', id => {
				if (id === consultId) {
					$nextTick(() => {
						setTimeout(() => {
							$el.querySelector('textarea[name=notes]')?.focus();
						}, 50);
					});
				}
			})
		"
	@endif
>
	{{-- Alle labels worden in het Nederlands getoond via Filament form config --}}
	{{ $this->form }}
</div>
