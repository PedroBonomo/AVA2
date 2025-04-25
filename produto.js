document.getElementById('menuToggle').addEventListener('click', function () {
    const menuOptions = document.getElementById('menuOptions');
    const isHidden = menuOptions.classList.contains('hidden');

    // Alternar visibilidade do menu
    menuOptions.classList.toggle('hidden');

    // Atualizar atributos de acessibilidade
    this.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
    menuOptions.setAttribute('aria-hidden', isHidden ? 'false' : 'true');
});