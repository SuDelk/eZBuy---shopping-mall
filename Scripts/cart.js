if (document.readyState == 'loading') {                       //https://www.youtube.com/watch?v=YeFzkC2awTM&ab_channel=WebDevSimplified  
    document.addEventListener('DOMContentLoaded', ready)       
} 
else {
    ready();
}

function ready(){
var removeCartItemButtons = document.getElementsByClassName('btn-danger');
console.log(removeCartItemButtons);
for (var i = 0; i < removeCartItemButtons.length; i++) {
   var button= removeCartItemButtons[i];
   button.addEventListener('click', removeCartItem);
           }
}

function removeCartItem(event){
      var buttonClicked= event.target;
      buttonClicked.parentElement.parentElement.remove();
     
}
function alertNoItem(){
    alert('Add items to the cart first!');
}

