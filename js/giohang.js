const numberFormat = new Intl.NumberFormat('vi-VN', {
   style: 'currency',
   currency: 'VND',
});

// Ẩn hiện button thanh toán
const productRow = document.querySelectorAll('.row-product')
const openModalBtn = document.querySelector('.open-modal')
if(productRow.length <= 0){
   openModalBtn.style.cursor = "no-drop"
   openModalBtn.setAttribute('disabled', '')
}
else{
   openModalBtn.removeAttribute('disabled')
}

// Tính tổng tiền thanh toán
const payments = document.querySelectorAll('.pay')
const sumPayment = document.querySelector('.sum-number')
var paymentAmount = 0;

for(const payment of payments){
   paymentAmount += Number(payment.getAttribute("data"))
}
sumPayment.innerText = numberFormat.format(paymentAmount)
// hiển thị modal thanh toán
const modal = document.querySelector('.overlay')
const closeModals = document.querySelectorAll('.close-modal')
const castMethod = document.querySelector('.cast-method')
const cartMethod = document.querySelector('.card-method')

castMethod.addEventListener('click', function(){
   castMethod.classList.add('target')
   cartMethod.classList.remove('target')
})

cartMethod.addEventListener('click', function(){
   cartMethod.classList.add('target')
   castMethod.classList.remove('target')
})

openModalBtn.addEventListener('click', function() {
   modal.style.visibility = "visible"
   modal.style.opacity = "1"
})

// hiển thị modal thanh toán
for(const closeModal of closeModals){
   closeModal.addEventListener('click', function(){
      modal.style.visibility = "hidden"
      if(closeModal.classList.contains('btn-close-modal')){
         if(cartMethod.classList.contains('target'))
            alert("Bạn đã chọn phương thức thanh toán bằng thẻ tín dụng")
         else
            alert("Bạn đã chọn phương thức thanh toán bằng tiền mặc")
      }
   })
}

//Hafnh vi nổi bọt của modal
const popup = document.querySelector('.popup')
modal.addEventListener('click', function() {
   modal.style.visibility = "hidden"
})

popup.addEventListener('click', function(event){
   event.stopPropagation()
})