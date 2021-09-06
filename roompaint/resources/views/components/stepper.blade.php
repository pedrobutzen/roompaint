<div {{ $attributes->merge(['class' => 'stepper']) }}>
    <x-step number="1" label="E-mail" :is-active="$request->routeIs('login')" :is-finished="!$request->routeIs('login')" />
    <div class="line"></div>

    <x-step number="2" label="Cores" :is-active="$request->routeIs('colors.*')" :is-finished="$request->routeIs('rooms.*') || $request->routeIs('result')" />
    <div class="line"></div>

    <x-step number="3" label="Cômodos" :is-active="$request->routeIs('rooms.*')" :is-finished="$request->routeIs('result')" />
    <div class="line"></div>
    
    <x-step number="4" label="Resultado" :is-active="$request->routeIs('result')" :is-finished="$request->routeIs('result')" />
</div>
