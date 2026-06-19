{{--
    No-op stub for <x-filament::modal> so devdojo/billing's packaged checkout/update
    views compile without Filament installed. This app renders its own billing UI, so
    this never appears in practice. See AppServiceProvider::registerFilamentStubs().
--}}
<div {{ $attributes }}>{{ $slot ?? '' }}</div>
