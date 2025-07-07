<div class="card h-100">
    <div class="d-flex">
        <img src="{{ $imagem }}" alt="Capa do Livro" class="img-fluid" style="width: 150px; height: 220px; object-fit: cover;">

        <div class="card-body d-flex flex-column justify-content-between ms-3">
            <h5 class="card-title mb-1">{{ $titulo }}</h5>
            <p class="text-muted mb-1">Autor: {{ $autor }}</p>
            <p class="text-muted mb-1">Ano: {{ $ano }}</p>
            <p class="text-muted mb-1">Editora: {{ $editora }}</p>
            <p class="text-muted mb-3">Páginas: {{ $paginas }}</p>

            <div class="d-flex align-items-center gap-2">
                <select class="form-select form-select-sm" style="width: 130px;" aria-label="Status do livro">
                    <option selected>Status</option>
                    <option value="lido">Lido</option>
                    <option value="lendo">Lendo</option>
                    <option value="quero ler">Quero Ler</option>
                    <option value="dropei">Dropei</option>
                </select>

                <button class="btn btn-warning btn-sm">Favoritar</button>
                <button class="btn btn-primary btn-sm">Detalhes</button>
            </div>
        </div>
    </div>
</div>

