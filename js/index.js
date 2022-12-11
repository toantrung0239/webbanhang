const ListItem = document.querySelector('.headline-list')
// const listproduct = document.querySelector('.products')
const products = document.querySelectorAll('.content-item')

ListItem.addEventListener('change', function() {
    
    for(const product of products){
        if(product.getAttribute('data') == ListItem.value)
            product.style.display ="block"
        else
        product.style.display ="none"
    }
    if(ListItem.value == "0"){
        for(const product of products){
            product.style.display ="block"
        }
    }
})

