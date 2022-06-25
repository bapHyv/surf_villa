const d = document

let dropdowns = d.querySelectorAll('.dropdown')
let dropdownsContent = d.querySelectorAll('.dropdown-content')
let bgmenu = d.querySelector('#img-burger-menu')
let navbar = d.querySelector('#navbar')
let arrowUp = d.querySelector("#arrow-up")
let dd1 = d.querySelector("#dd1")
let dd2 = d.querySelector("#dd2")
let dd3 = d.querySelector("#languages-phone")

let ddc1 = d.querySelector("#ddc1")
let ddc2 = d.querySelector("#ddc2")
let ddc3 = d.querySelector("#ddc3")

dd1.addEventListener('click', function(event) {
  ddc1.classList.toggle("show")
})

dd2.addEventListener('click', function(event) {
  ddc2.classList.toggle("show")
})

dd3.addEventListener('click', function(event) {
  ddc3.classList.toggle("show")
})

window.onclick = function (event) {
  if (!event.target.matches('.dropdown') && !event.target.matches('.dropbtn')) {
    dropdownsContent.forEach((e) => {
      if (e.classList.contains('show')) {
        e.classList.remove('show')
      }
    })
  }
  if (
    event.clientX >= window.innerWidth / 2 &&
    navbar.classList.contains('show-header') &&
    event.target.id != "img-burger-menu"
  ) {
    navbar.classList.remove('show-header')
  }
}

bgmenu.addEventListener('click', function (event) {
  if (!navbar.classList.contains('show-header')) {
    navbar.classList.add('show-header')
  } else {
    navbar.classList.remove('show-header')
  }
})


arrowUp.addEventListener('click', function(event) {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth"
  });
})