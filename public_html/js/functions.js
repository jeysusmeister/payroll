/*selectores*/
const formPatria = document.querySelector('#form-patria');
const txtDesnom  = document.querySelector('#txtDesnom');
const nbNumero   = document.querySelector('#nbNumero');

function imprimirPantalla(formPatriaData) {
    let dataNumero = formPatriaData.get('nbNumero');
    divNumero.innerHTML=dataNumero;
}

nbNumero.addEventListener("change", ()=>{
    if(nbNumero.value.length==4) {
        txtDesnom.value=nbNumero.value;
        let data = new FormData(formPatria);
        console.log("datadef ",data.get('nbNumero'));
        data.append('numero', data.get('nbNumero'))
        fetch('src/views/modules/procesar.php', {
            method:'POST',
            body:data
        })
        .then( res =>{
            if(res.ok){
                return res.text();
            }else{
                throw 'No funciona';
            }
        })
        .then( text => {
            txtDesnom.value=text
        })
    }
})

formPatria.addEventListener('submit', e =>{
    e.preventDefault()
    const formPatriaData = new FormData(e.currentTarget)
    imprimirPantalla(formPatriaData);
    let valor = formPatriaData.get('nbNumero');    
});