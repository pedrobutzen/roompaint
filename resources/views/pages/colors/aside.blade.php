<aside class="col-3">
    <h3>Cores cadastradas</h3>
    <div class="list-items">
        @forelse($colors ?? [] as $color)
            <a href="{{ route('colors.edit', $color->id) }}">{{ $color->name }}</a>
        @empty
            <p>Nenhuma cor cadastrada</p>
        @endforelse
    </div>
</aside>