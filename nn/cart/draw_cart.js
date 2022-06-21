let total = 0 ;
function draw(data){
    let root = document.getElementById("root");
    let root_row = document.createElement("div");
    root_row.className +='row border-top border-bottom';
    
    let second_row = document.createElement("div");
    second_row.className +='row main align-items-center';
    let col_2 = document.createElement("div");
    col_2.className+="col-2";


    image_link = data.imageSrc.split(",")[0];
    image_link = 'http://localhost/nn/products/'+image_link;

    let prod_image = document.createElement("img");
    prod_image.src = image_link;
    col_2.appendChild(prod_image);

    let col = document.createElement("div");
    col.className += "col";

    let col_row = document.createElement("div");
    col_row.className += "row";
    col.appendChild(col_row);
    col.innerText = data.prodcut_name;
    second_row.appendChild(col_2);
    second_row.appendChild(col);

    let t = data.quantity * data.price;
    total += t;

    

    let col_plus = document.createElement("div");
    col_plus.className += 'col';
    col_plus.innerHTML = `
    <div class="row" style="margin-top:50px;"><a href="javascript:void(0)"onclick="sub(this)">-</a><input type="number" name="quantity[]" style="height:20px;width:50px" value= ${data.quantity}><a href="javascript:void(0)" onclick="add(this,${data.stock})">+</a></div>
    `;

    let col_hold_price = document.createElement("div");
    col_hold_price.className +='col';

    col_hold_price.innerHTML = `
    <div class="col" style="color: #A18A68;">&dollar;  ${data.quantity * data.price} <span class="close">&#10005;</span></div>
    `;
    second_row.appendChild(col_plus);
    second_row.appendChild(col_hold_price);
  
    // hidden

    let hidden_data = document.createElement("input");
    hidden_data.setAttribute("type","hidden");
    hidden_data.innerHTML = `<input type='hidden' value='${data.product_id}' name='prod_id[]'>`;
    second_row.appendChild(hidden_data);
  
    root_row.appendChild(second_row);
    root.appendChild(root_row);
}

function sub(elem){
  parent = elem.parentElement.children;
  let v = parent[1].value;
  if (v == 0 ){
    return ;
  }else {
    let i = parseInt(parent[1].value);
    let k = i -1;
    parent[1].value = k ;
  }
}

function add(elem,max){
  parent = elem.parentElement.children;
  let v = parent[1].value;
  if(v == max) {
    return;
  }else {
    let i = parseInt(v);
    let k = i +=1;
    parent[1].value = k;
  }

}

fetch('http://localhost/nn/inc/cart_ajax.php')
.then(response => response.json())
.then(data =>{
  for(let i =0 ; i < data.length ;i++){
    draw(data[i]);
    console.log(data[i].quantity);
  }

  document.getElementById("totalItems").innerText = 'ITEMS '+data.length;
  document.getElementById("totalPrice").innerText = '$ '+total;
  document.getElementById("totalPrice2").innerText = '$ '+total;
} );