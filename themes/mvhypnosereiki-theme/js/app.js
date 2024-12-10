window.addEventListener("load", () => {
  console.log("La page est complètement chargée");
});

const menuBtn = document.querySelector('#menu-btn');
const menuCloseBtn = document.querySelector('#menu-close-btn')
const menuElement = document.querySelector('#menu')

const menuLinks = document.querySelectorAll('#menu a')

if (!menuBtn || !menuCloseBtn) {
  throw new Error('Menu button not defined.')
}

menuBtn.addEventListener('click', handleMenuBtn)
menuCloseBtn.addEventListener('click', handleMenuBtn)

menuLinks.forEach(link => {
  link.addEventListener('click', (e) => {  
    menuElement.classList.remove('menu--open')
  })
})


function handleMenuBtn(e) {
  e.preventDefault()
  e.stopPropagation()

  if (menuElement.classList.contains('menu--open')) {
    menuElement.classList.remove('menu--open')
  } else {
    menuElement.classList.add('menu--open')
  }
}