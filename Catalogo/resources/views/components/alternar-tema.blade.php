<button 
    x-data="{ temaEscuro: localStorage.getItem('tema') === 'escuro' }"
    x-init="
        if (temaEscuro) {
            document.documentElement.classList.add('dark');
            $refs.icone.classList.remove('bi-moon-fill');
            $refs.icone.classList.add('bi-sun-fill');
        }"
    @click="
        temaEscuro = !temaEscuro;
        if (temaEscuro) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('tema', 'escuro');
            $refs.icone.classList.remove('bi-moon-fill');
            $refs.icone.classList.add('bi-sun-fill');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('tema', 'claro');
            $refs.icone.classList.remove('bi-sun-fill');
            $refs.icone.classList.add('bi-moon-fill');
        }"

    class="btn btn-sm"
    style="background-color: #642764; border-color: #642764; color: white;">
    
    <i x-ref="icone" class="bi bi-moon-fill"></i>
</button>
