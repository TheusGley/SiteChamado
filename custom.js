const tbody = document.querySelector("tbody");

const listarchamados = async () => {
    const dados = await fetch("./listarchamados.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}

listarchamados();