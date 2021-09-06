<aside class="col-md-3">
    <h3>Cômodos cadastrados</h3>
    <div class="list-items">
        @forelse($rooms ?? [] as $room)
            <div class="item">
                <span>
                    {{ $room->name }} ({{ $room->getArea() }}m²)
                </span>
                {!! Form::open(['route' => ['rooms.destroy', $room->id], 'method' => 'DELETE', 'class' => 'd-inline-block']) !!}
                    <button type='submit' class='btn btn-danger'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                {!! Form::close() !!}
            </div>
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
