function addCart(id) {
  // alert(id);
  $.post("shoppingcart.php", { id: id }, function (data, status) {
    // alert("Data: " + data + "\nStatus: " + status);
    // alert(data);

    // tách chuỗi
    item = data.split("-");
    $("#qty").text(item[0]);
    $("#total").text(item[1]);
    $(".cart-mini").load("index.php?quanly=giohang .cart-mini");
  });
}

function updateCart(id) {
  num = $("#num_" + id).val();
  // alert(num);
  $.post("updatecart.php", { id: id, num: num }, function (data) {
    // load lại
    $("#listCart").load("index.php?quanly=giohang #listCart");
  });
}

function deleteCart(id) {
  // alert(id);
  $.post("updatecart.php", { id: id, num: 0 }, function (data) {
    // load lại
    $("#listCart").load("index.php?quanly=giohang #listCart");
    $(".cart-mini").load("index.php?quanly=giohang .cart-mini");
  });
}
function deleteCartMini(id) {
  // alert(id);
  deleteCart();
  $.post("updatecart.php", { id: id, num: 0 }, function (data) {
    // load lại
    $("#listCart").load("index.php?quanly=giohang #listCart");
    $(".cart-mini").load("index.php?quanly=giohang .cart-mini");
  });
}

// icon cart show hide
document.getElementById("shopping-cart").style.display = "none";
function showHideCart() {
  var cartIcon = document.getElementById("shopping-cart");
  if (cartIcon.style.display == "") 
    cartIcon.style.display = "none";
  else 
    cartIcon.style.display = "";
}

// icon cart 
const counter = document.getElementById('counter');
document.getElementById('addCart').addEventListener('click', event =>{
  const cl = counter.classList;
  const c = 'animated-counter';

  counter.innerText = count;
  cl.remove(c, cl.contains(c));
  setTimeout(() =>
  counter.classList.add('animated-counter'), 1)
})
