<!-- Navigation Links -->
<div class="flex justify-start sm:justify-between mt-16 sm:space-x-12 space-y-5 flex-wrap">
    <x-foot-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Insight') }}
    </x-foot-link>
    <x-foot-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Story') }}
    </x-foot-link>
    <x-foot-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Service') }}
    </x-foot-link>
    <x-foot-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Work') }}
    </x-foot-link>
    <x-foot-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Career') }}
    </x-foot-link>
    <x-foot-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Contact') }}
    </x-foot-link>
</div>


