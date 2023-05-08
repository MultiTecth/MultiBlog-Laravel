const searchDropdown = document.querySelector('.search-dropdown');
let clas = document.querySelector('.active');

const targetDiv = document.querySelector('#targetDiv')
document.addEventListener('click', (e) => {
    const isClickedInsideDiv = e.composedPath().includes(targetDiv)
    if (isClickedInsideDiv) {
        searchDropdown.style.display = 'block';
    } else {
        searchDropdown.style.display = 'none';
    }
})

// var $ = jQuery
