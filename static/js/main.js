// this function looks wich element is next in the classList and it will add the 'active-link' class inside it
// it will remove the one before it so it know where to go


// gets all tml elements with the class name of nav-link
const navlink = document.querySelectorAll('.nav-link')

function activeLink() {
    navlink.forEach((item) => item.classList.remove('active-link'))
    this.classList.add('active-link')
}

// calling the function in a eventListener
// item is basically the current 'nav-link' that is selected
navlink.forEach((item) => item.addEventListener('click', activeLink))