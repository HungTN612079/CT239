// slider
const rightbtn = document.querySelector('.fa-chevron-right')
const leftbtn = document.querySelector('.fa-chevron-left')
const imgNumber = document.querySelectorAll('.slider-content-left-top img')
let index = 0
// console.log(rightbtn)
// console.log(imgNumber.length)

rightbtn.addEventListener("click", function () {
  index = index + 1
  if (index > imgNumber.length - 1) {
    index = 0
  }
  document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
})

leftbtn.addEventListener("click", function () {
  index = index - 1
  if (index <= 0) {
    index = imgNumber.length - 1
  }
  document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
})

//slider 1
const imgNumberLi = document.querySelectorAll('.slider-content-left-bottom li')
// console.log(imgNumberLi)
imgNumberLi.forEach(function (image, index) {
  image.addEventListener("click", function () {
    removeActive()
    document.querySelector(".slider-content-left-top").style.right = index * 100 + "%"
    image.classList.add("active")
  })
})
function removeActive() {
  let imgActive = document.querySelector('.active')
  imgActive.classList.remove("active")
}

// Slider 2
function imgAuto() {
  index = index + 1
  if (index > imgNumber.length - 1) {
    index = 0
  }
  // xóa class active của tiêu đề
  removeActive()
  document.querySelector('.slider-content-left-top').style.right = index * 100 + "%"
  // thêm class active cho tiêu đề
  imgNumberLi[index].classList.add("active")
  // console.log(index)
}
setInterval(imgAuto, 5000)

// bắt sự kiện click
