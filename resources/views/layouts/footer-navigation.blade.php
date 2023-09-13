<!-- Navigation Links -->
<div class="flex justify-start sm:justify-between mt-16  flex-wrap">
    <x-foot-link :href="route('home')">
        {{ __('Home') }}
    </x-foot-link>
    <x-foot-link :href="route('story')">
        {{ __('Story') }}
    </x-foot-link>
    <x-foot-link :href="route('services')">
        {{ __('Service') }}
    </x-foot-link>
    <x-foot-link :href="route('career')">
        {{ __('Career') }}
    </x-foot-link>
    <x-foot-link :href="route('contact')">
        {{ __('Contact') }}
    </x-foot-link>
</div>


