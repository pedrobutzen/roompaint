<div {{ $attributes->merge(['class' => 'stepper']) }}>
    <x-step number="1" label="E-mail" :is-active="$request->routeIs('login')" :is-finished="!$request->routeIs('login')" />
    <div class="line"></div>

    <x-step number="2" label="Cores" :is-active="$request->routeIs('cores')" :is-finished="in_array($request->route()->getName(), [ 'comodos', 'estimativa'])" />
    <div class="line"></div>

    <x-step number="3" label="Cômodos" :is-active="$request->routeIs('comodos')" :is-finished="in_array($request->route()->getName(), ['estimativa'])" />
    <div class="line"></div>
    
    <x-step number="4" label="Estimativa" :is-active="$request->routeIs('estimativa')" :is-finished="$request->routeIs('estimativa')" />
</div>
