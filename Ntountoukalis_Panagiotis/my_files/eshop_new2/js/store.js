var removeCartItemButtons = document.getElementsByClassName('btn-danger')
console.log(removeCartItemButtons)


for(var i=0; i<removeCartItemButtons.length; i++){
    var button = removeCartItemButtons[i]
    button.addEventListener('click', removeCartItem)
    
}




function removeCartItem(event){
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()  /*remove div named cart-row */
    updateCartTotal()
    
}

function updateCartTotal(){
    var cartItem = document.getElementsByClassName('cart-items')[0] /*get only first item instead of whole array*/
    var cartRows = cartItem.getElementsByClassName('cart-row')
    var total=0
    for(var i=0; i<cartRows.length; i++){
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0] /*get price and quantity spans from products.html */

        var price = parseFloat(priceElement.innerText.replace('$', '')) /*get value from price and remove dollar sign */
        var quantity = quantityElement.value
        total = total + ( price*quantity )
        

        
    }
    total = Math.round(total*100) / 100 /*make total have only two decimal numbers */
    /*get element of total price from products.html and update it */
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}




/*change price of cart element when changing quantity */
var quantityInputs = document.getElementsByClassName('cart-quantity-input')
for(var i=0; i<quantityInputs.length; i++){
    var input = quantityInputs[i]
    input.addEventListener('change', quantityChanged)
}

function quantityChanged(event){
    var input = event.target
    /*check if quantity input is valid */
    if( isNaN(input.value) || input.value<=0 ){
        input.value=1
    }
    updateCartTotal()
}




/*add to cart button */
var addToCartButtons = document.getElementsByClassName('shop-item-button')
for(var i=0; i<addToCartButtons.length; i++){
    var button = addToCartButtons[i]
    button.addEventListener('click', addToCartClicked)
}

function addToCartClicked(event){
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('item-name')[0].innerText
    var price = shopItem.getElementsByClassName('item-price')[0].innerText
    var image = shopItem.getElementsByClassName('item-image')[0].src
    console.log(title, price, image)

    addItemToCart(title, price, image)
    updateCartTotal()
}


/*add item on cart function */

function addItemToCart(title, price, image){
    var cartRow = document.createElement('div')
    var cartItems = document.getElementsByClassName('cart-items')[0]

    /*check if cart-item is already in cart */
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for(var i=0; i<cartItemNames.length; i++){
        if (cartItemNames[i].innerText == title) {
            alert("Item already in cart")
            return
        }
    }

    var cartRowContents = `<div class="cart-item cart-column">
                                <img class="cart-item-image" src="${image}" width="100" height="100">
                                <span class="cart-item-title">${title}</span>
                            </div>
                            <span class="cart-price cart-column">${price}</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="1">
                                <button class="btn btn-danger" type="button">REMOVE</button>
                            </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow) /*puts it at the end of cartItems */
    
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem) /*for new items that weren't there when the page loaded */
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}