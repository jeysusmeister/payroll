/*selectores*/
const formPatria = document.querySelector('#form-patria');
const txtDesnom  = document.querySelector('#txtDesnom');
const nbNumero   = document.querySelector('#nbNumero');

function imprimirPantalla(formPatriaData) {
    let dataNumero = formPatriaData.get('nbNumero');
    divNumero.innerHTML=dataNumero;
}

let _data = {
    title: "foo",
    body: "bar",
    userId: 1
}

nbNumero.addEventListener("change", ()=>{
    if(nbNumero.value.length==4) {
        txtDesnom.value=nbNumero.value;
        let data = new FormData(formPatria).get('nbNumero')
        fetch('./src/views/modules/patria.phtml',{
            method:'POST',
            body: data,
            //headers: { "Content-type": "application/json; charset=UTF-8" }
        })
            .then(function (response) {
                if (response.ok) {
                    console.log("vvvvv ",response);
                    document.getElementById('a').innerHTML=response;
                    return response.text()
                } else {
                    throw "Error en la llamada Ajax";
                }

            })
            .then(function (texto) {
                console.log(texto);
            })
            .catch(function (err) {
                console.log(err);
            });


        
           

    }
})

formPatria.addEventListener('submit', e =>{
    e.preventDefault()
    const formPatriaData = new FormData(e.currentTarget)
    imprimirPantalla(formPatriaData);
    let valor = formPatriaData.get('nbNumero');    
});

//alert(123)


