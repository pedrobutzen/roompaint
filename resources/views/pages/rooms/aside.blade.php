<aside class="col-3">
    <h3>Cômodos cadastrados</h3>
    <div class="list-items">
        @forelse($rooms ?? [] as $room)
            <a href="{{ route('rooms.edit', $room->id) }}">{{ $room->name }} ({{ $room->getArea() }}m²)</a>
        @empty
            <p>Nenhum cômodo cadastrado</p>
        @endforelse
    </div>

    <h3>Importante</h3>
    <p>
        Cada janela possui 2,00m x 1,20m<br />
        Cada porta possui 0,80m x 1,90m
    </p>
</aside>
