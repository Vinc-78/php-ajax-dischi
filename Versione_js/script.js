const discoContainer = document.getElementById("discoContainer");

axios.get("http://localhost/php-ajax-dischi/Versione_js/api.php").then((resp) => {
  const dati = resp.data.cdList;

  console.log(resp.data.cdList);

  dati.forEach((disco) => {

    const card = `<div class="col" >
                        <div class="card " >
        

                            <img src="${disco.poster}" class="card-img-top" alt="...">
    

                            <div class="card-body">
                            <h5 class="card-title"> ${disco.title} </h5>
            
                        </div>
                        <div class="card-text text-center fs-5">
                                <ul>
                                    <li> ${disco.author} </li>
                                    <li> ${disco.genre}  </li>
                                    <li> ${disco.year} </li>
                                </ul>
                            </div>
                        
                        </div>
                    </div>`;





        discoContainer.innerHTML += card;

  });



});