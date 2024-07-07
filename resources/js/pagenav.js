// window.alert ("carregou");


//Permitir o retorno do navegador ao formulário após erro
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}