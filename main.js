const d = document

let dropdowns = d.querySelectorAll('.dropdown')
let dropdownsContent = d.querySelectorAll('.dropdown-content')
let bgmenu = d.querySelector('#img-burger-menu')
let navbar = d.querySelector('#navbar')
let arrowUp = d.querySelector("#arrow-up")

console.dir(bgmenu)

dropdowns.forEach((item) => {
  item.addEventListener('click', (event) => {
    event.path.forEach((e) => {
      if (e.className === 'dropdown') {
        e.childNodes.forEach((c) => {
          if (c.className === 'dropdown-content') {
            c.classList.toggle('show')
          }
        })
      }
    })
  })
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