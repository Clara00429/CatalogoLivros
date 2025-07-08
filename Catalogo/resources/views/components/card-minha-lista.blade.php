<div class="card h-100 shadow-sm">
    <div class="d-flex">
        <img src="{{ asset('imagens/' . ($imagem ?? 'placeholder.jpg')) }}"
             alt="Capa de {{ $titulo }}"
             class="img-fluid"
             style="width: 150px; height: 220px; object-fit: cover;">

        <div class="card-body d-flex flex-column justify-content-between ms-3">
            <div>
                <h5 class="card-title mb-1" style="color: #642764;">{{ $titulo }}</h5>
                @if($autor)
                    <p class="text-muted small mb-1">Autor: {{ $autor }}</p>
                @endif
                @if($ano)
                    <p class="text-muted small mb-1">Ano: {{ $ano }}</p>
                @endif
                @if($editora)
                    <p class="text-muted small mb-1">Editora: {{ $editora }}</p>
                @endif
                @if($paginas)
                    <p class="text-muted small mb-2">Páginas: {{ $paginas }}</p>
                @endif
            </div>

            <div class="d-flex align-items-center gap-2 mt-2">
                <form method="POST" action="{{ route('livros.update-status', $id) }}">
                    @csrf
                    @method('PATCH')
                    <select name="status" class="form-select form-select-sm" style="width: 130px;" onchange="this.form.submit()">
                        <option value="lido" @selected($status == 'lido')>Lido</option>
                        <option value="lendo" @selected($status == 'lendo')>Lendo</option>
                        <option value="quero ler" @selected($status == 'quero ler')>Quero Ler</option>
                        <option value="dropei" @selected($status == 'dropei')>Dropei</option>
                    </select>
                </form>

                <form method="POST" action="{{ route('livros.favoritar', $id) }}">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm">Favoritar</button>
                </form>

                <form method="POST" action="{{ route('livros.remover-da-lista', $id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                </form>
            </div>
        </div>
    </div>
</div>
