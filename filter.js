const button = document.querySelectorAll('.btn');
const boxes = document.querySelectorAll('.product-box');
const searchBox = document.querySelector('#search');

// search product
searchBox.addEventListener('keyup',(e)=>{
  searchText = e.target.value.toLowerCase().trim();
 
  boxes.forEach((box)=>{
    const data = box.dataset.item;
   // console.log(data);
    if(data.includes(searchText)){
        box.style.display="block";
    }
    else{ 
      box.style.display="none";
    }
  });

  button[0].classList.add('btn-clicked');
}) ;

 button.forEach((buttons)=> {
    buttons.addEventListener('click',(e)=>{
        e.preventDefault();
        setActiveBtn(e);
        const btnfilter = e.target.dataset.filter;

        boxes.forEach((box =>{
          if(btnfilter == 'all'){
            box.style.display="block";
          }
          else{
            const boxfilter = box.dataset.item;
            if(btnfilter == boxfilter){
              box.style.display = "block";
            }
            else{
              box.style.display = "none";
            }
          }
        }))

    })
 }) 

 function setActiveBtn(e){
    button.forEach((buttons)=> {
        buttons.classList.remove('btn-clicked');
        });
       e.target.classList.add('btn-clicked');  
     
 }


 let cartIcon = document.querySelector("#carticon");
let addToCart = document.querySelector(".cartbox");
let closeCart = document.querySelector("#cartboxclose");

//open cart
cartIcon.onclick = () =>{
    addToCart.classList.add("active");
};


//close cart
  closeCart.onclick = () =>{
     addToCart.classList.remove("active");
     
 };

//cart working js
if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded',ready)
}else{
    ready();
}

//making function
function ready(){
    //remove item from cart
    var removeCartButtons = document.getElementsByClassName('cartbox-remove')
    console.log(removeCartButtons)
    for (var i=0; i < removeCartButtons.length; i++){
        var button = removeCartButtons[i]
        button.addEventListener('click', removeCartItem)
    }
    // quantity changes
    var quantityInputs = document.getElementsByClassName("cartbox-quantity");
    for (var i=0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
}
//add to cart
var addCart = document.getElementsByClassName("add-cart");
for (var i=0; i<addCart.length; i++){
    var button = addCart[i];
    button.addEventListener('click', addCartClicked);
}
//buy button work
document.getElementsByClassName("btn-buys")[0].addEventListener("click",buyButtonClicked);
}

//buy button
function buyButtonClicked(){
    alert("Your order is placed")
    var cartContent = document.getElementsByClassName('cartbox-content')[0];
    while(cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updatetotal();
}


// remove items from cart
function removeCartItem(event){
   var buttonClicked = event.target;
   buttonClicked.parentElement.remove();
   updatetotal();
}




//quantity change
function quantityChanged(event){
    var input = event.target
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;

    }
    updatetotal();
}

//add to cart
function addCartClicked(event){
    var button = event.target;
    var shopProducts = button.parentElement
    var title = shopProducts.getElementsByClassName('product-title')[0].innerText;
    var price = shopProducts.getElementsByClassName('price')[0].innerText;
    var productImg = shopProducts.getElementsByClassName('product-img')[0].src;
    addProductToCart(title,price,productImg);
    updatetotal();
}
function addProductToCart(title,price,productImg){
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cartbox1");
    var cartItem = document.getElementsByClassName("cartbox-content")[0];
    var cartItemsNames = cartItem.getElementsByClassName("cartbox-product-title");
    for (var i=0; i < cartItemsNames.length; i++){
        if(cartItemsNames[i].innerText == title){
         alert("You Have already add this item to cart");
         return;
    }
   
}


var cartBoxContent = ` <img src="${productImg}" alt="" class="cartbox-img">
                       <div class="detail-box">
                             <div class="cartbox-product-title">${title}</div>
                             <div class="cartbox-price">${price}</div>
                             <input type="number" value="1" class="cartbox-quantity">
                       </div>
                    <i class="fa-solid fa-trash cartbox-remove"></i>`;

cartShopBox.innerHTML = cartBoxContent;
cartItem.append(cartShopBox);
cartShopBox.getElementsByClassName("cartbox-remove")[0].addEventListener("click",removeCartItem);
cartShopBox.getElementsByClassName("cartbox-quantity")[0].addEventListener("change",quantityChanged);
}
//update total
function updatetotal(){
    var cartContent = document.getElementsByClassName('cartbox-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cartbox1');
    var total = 0;
    for (var i=0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cartbox-price')[0];
        var quantityElement = cartBox.getElementsByClassName('cartbox-quantity')[0];
        var price = parseFloat(priceElement.innerText.replace("Rs",""));
        var quantity = quantityElement.value ;
        total = total + price * quantity;
    }
        //if cart price come cents value roundoff
        total = Math.round(total * 100) / 100;
        document.getElementsByClassName('total-price')[0].innerText = "Rs" + total;
    
}


//validation 
const btn_id = document.getElementById("buttons");
const form = document.getElementById("form");
const userName = document.getElementById("names");
const emailId = document.getElementById("emailIds");
const  mobile = document.getElementById("mobileNumbers");
const cityName = document.getElementById("cityNames");

const area = document.getElementById("areas");
const budget = document.getElementById("budgets");
const openTime = document.getElementById("plans");
const contactTime = document.getElementById("timeToContacts");

const address = document.getElementById("addresss");
const message = document.getElementById("messages");

function checkOption(area){
if ( area.value == "select"){
  alert("Please Select Preferred option");
  errorInput(area,`Please Select Preferred option`);
}
}

function checkOptionb(budget){
  if ( budget.value == "select"){
    alert("Please Select Preferred option");
    errorInput(budget,`Please Select Preferred option`);
  }
  }

function checkOptiono(openTime){
    if ( openTime.value == "select"){
      alert("Please Select Preferred option");
      errorInput(openTime,`Please Select Preferred option`);
    }
    }

  function checkOptionc(contactTime){
      if ( contactTime.value == "select"){
        alert("Please Select Preferred option");
        errorInput(contactTime,`Please Select Preferred option`);
      }
      }

String.prototype.isEmail = function() {
  return !!this.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
}

String.prototype.isAlpha = function(){
  return !!this.match(/^[a-zA-Z]+$/);
}

String.prototype.isNumber = function(){
  return !!this.match(/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/);
}


function checkRequired(inputs){
    inputs.forEach(input => {
        if(input.value.trim() === ""){                         //trim will remove white space
             errorInput(input,`${getName(input)} is Required`); //template string
        }else{
            successInput(input);
        } 
    });
}

function getName(input){
    return input.getAttribute("data-name");
}
function errorInput(input,message){
   const formGroup = input.parentElement;
   formGroup.className = "form-group error";
   const p  = formGroup.querySelector("p");
   p.innerHTML = message;
}
function successInput(input){
  const formGroup = input.parentElement;
  formGroup.className="form-group success ";
  const p  = formGroup.querySelector("p");
  p.innerHTML = "";

}
function checkEmail(input){
  if(!input.value.trim().isEmail()){
    errorInput(input, `This  is not a valid email address`);
  }
}
 
function checkName(input){
   if(!input.value.trim().isAlpha()){
    errorInput(input, `Enter a valid username`)
   }
}

function checkMobileno(input){
  if(!input.value.trim().isNumber()){
    errorInput(input,`This is not a Valid Mobile Number`)
  }
  
}




form.addEventListener("click",function(e){
  alert("form ok");
  e.preventDefault();// by default it take priyority to js

  //check required filed  to fill
  checkRequired([userName,emailId,mobile,cityName,area,budget,openTime,contactTime,address,message])
  
  //regular expression  stackoverflow prototype = inbuilt function

  checkEmail(emailId);
  checkName(userName);
  checkMobileno(mobile);
  

  checkOption(area);
  checkOptionb(budget);
  checkOptiono(openTime);
  checkOptionc(contactTime);
});



// //filter
// const button = document.querySelectorAll('.btn');
// const boxes = document.querySelectorAll('.product-box');
// const searchBox = document.querySelector('#search');

// // search product
// searchBox.addEventListener('keyup',(e)=>{
//   searchText = e.target.value.toLowerCase().trim();
 
//   boxes.forEach((box)=>{
//     const data = box.dataset.item;
//    // console.log(data);
//     if(data.includes(searchText)){
//         box.style.display="block";
//     }
//     else{ 
//       box.style.display="none";
//     }
//   });

//   button[0].classList.add('btn-clicked');
// }) ;

//  button.forEach((buttons)=> {
//     buttons.addEventListener('click',(e)=>{
//         e.preventDefault();
//         setActiveBtn(e);
//         const btnfilter = e.target.dataset.filter;

//         boxes.forEach((box =>{
//           if(btnfilter == 'all'){
//             box.style.display="block";
//           }
//           else{
//             const boxfilter = box.dataset.item;
//             if(btnfilter == boxfilter){
//               box.style.display = "block";
//             }
//             else{
//               box.style.display = "none";
//             }
//           }
//         }))

//     })
//  }) 

//  function setActiveBtn(e){
//     button.forEach((buttons)=> {
//         buttons.classList.remove('btn-clicked');
//         });
//        e.target.classList.add('btn-clicked');  
     
//  }