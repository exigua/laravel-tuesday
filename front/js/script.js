// fetch('http://192.168.33.10/api/interns')
// .then((response) => {
//     response.json()
//     .then((data) => {
//         debugger;
//     })
// })


//Créer un input tyoe number et un button qui permet, au clic, de faire une requéte sur notre API, permettant d'afficher le prénom de l'apprenant recherché dans une balise <p> qui elle, sera crée en JS.

document.querySelector("button").addEventListener("click", () => {
    let internID = document.querySelector('#intern-id').value;

    fetch(`http://192.168.33.10/api/interns/${internID}`)

    .then( (response) => {

        response.json()

        .then( (data) => {

            internFName = data.description[0].firstname;
            let h2 = document.createElement('h2');
            h2.innerHTML = internFName;

            document.querySelector('#intern-infos').innerHTML = '';
            document.querySelector('#intern-infos').appendChild(h2);           
            
        });
    });
})
