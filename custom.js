
const tbody = document.querySelector("tbody");

const listarChamados  = async ( ) => {
    const dados = await fetch("./listar_usuarios.php");
    const resposta = await dados.text();
    tbody.innerHTML = resposta;

}
listarChamados();