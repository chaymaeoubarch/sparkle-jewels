let n = parseInt(document.getElementById("id_number").value);

function add(s ,max){
   if(document.getElementById("id_number").value == max){
    document.getElementById("id_number").value =max;
    return 1 ;
    }else {
  k = n +=1;
  document.getElementById("id_number").value = k ;
  }
 
  
  }

function sub(s){
  if(n == 0){
      return;
      }
      k = n -=1;
      document.getElementById("id_number").value = k ;
}

function return_products(){
   window.location.replace("http://localhost/nn/products");
}