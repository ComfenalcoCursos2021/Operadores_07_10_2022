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
    })
})