addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("https://comfenalcocursos.000webhostapp.com/Operadores_07_10_2022/api.php");
    let datos = await peticion.text();
    document.querySelector("pre").innerHTML = datos;
})