let carts = document.querySelectorAll('.add_Cart');

let products = [
    {
        <?php ?>
    }
]

for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('click', () => {
        cartNumbers();
    })
       }

function cartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);
    localStorage.setItem('cartNumbers', 1);
}       
