let categorie ='' ; 

function setCategori($cat){
  categorie = '?categorie='+$cat;
  console.log($cat);
}

function removedup(str){
    if (str.split(".").length == 3){
      return str.slice(0,-4);
    } else{return str};

  }
  let container_row ;
  let card_deck;
  function hovered(elem,img,oldimg){
    elem.src=img;
    elem.setAttribute("onmouseover",`hovered(this,'${oldimg}','${img}')`);
  }

  function open_details(product_id){
    let url = "http://localhost/nn/products/description.php?id="+product_id;
    window.location.replace(url);
  }

  function draw(data){
    let root_elem = document.getElementById("root_div");
    for (let i = 0 ; i < data.length;i++){
      if (i % 3  == 0 ){
      container_row = document.createElement("div");
      container_row.className+="container mt-5 text-center";
      card_deck = document.createElement("div");
      card_deck.className="card-deck";
      container_row.appendChild(card_deck);
      root_elem.appendChild(container_row);
      }
      let card = document.createElement("div");
      card.style.border="none";
      card.className += "card";
      card_deck.appendChild(card);

      // base64 
      let productDescription = btoa(encodeURIComponent(data[i].productDescription));
      card.setAttribute("onclick",`open_details(${data[i].product_id}

        )`);

      let img = document.createElement("img");
      img.className +="card-img-top1 img-hover";
      img.setAttribute("onclick","")

      source = data[i].imageSrc ;
      source1 = source.split(",");
      source = removedup(source1[0]);
      
      img.setAttribute("onmouseover",`hovered(this,'${source1[1]}','${source}')`);
      img.src = source;
      card.appendChild(img);
      
      img.style.cursor = "pointer";

      let card_body = document.createElement("div");
      card_body.className +="card-body";

      let h5 = document.createElement("h5");
      h5.className +='card-title';
      h5.innerText = data[i].prodcut_name;
      card_body.appendChild(h5);
      let p = document.createElement("p");
      p.className +="card-text";
      p.innerHTML = `<p class="card-text" style="color: #A18A68;">&dollar;${data[i].price} </p>`;
      card_body.appendChild(p);
      card.appendChild(card_body);
    }
  }
  function set_prod(cat){
    cat = document.getElementById("selected_product").value ;
    set(cat);
    deleteChild();
    console.log("changed by "+cat);
}
function deleteChild() {
  var e = document.querySelector("#root_div");
  var child = e.lastElementChild; 
  while (child) {
      e.removeChild(child);
      child = e.lastElementChild;
  }
  console.log("root cleared !");
}

function set(url){
  if (url ===""){
    url = "http://localhost/nn/products/products_ajax.php";
  }else {
    url = "http://localhost/nn/products/products_ajax.php?categorie="+url;
  }
  console.log(url);
  fetch(url)
  .then(response => response.json())
  .then(data =>{
    draw(data);
    console.log(data);
  } );
}
set("");
deleteChild();


