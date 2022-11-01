addEventListener("DOMContentLoaded", (e)=>{
    let form = document.querySelector("#MyData");
    form.addEventListener("submit", async(e)=>{
        e.preventDefault();
        let json = JSON.stringify(Object.fromEntries(new FormData(e.target)));
        let config = {
            method: form.method,
            body: json
        };
        let peticion = await fetch(form.action, config);
        let data = await peticion.text();
        document.querySelector("pre").innerHTML = data;
        data = JSON.parse(data);
        document.querySelector("tbody tr:last-child").remove();
        document.querySelector("tbody tr:last-child").insertAdjacentHTML("afterend", `
            <tr class="resultadoPHP">
                <td>${data.A}</td>
                <td>${data.B}</td>
                <td>${data.respuesta}</td>
            </tr>
        `);
        
    })
})