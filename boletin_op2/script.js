const pages = document.querySelectorAll('.page');
let currentPage = 0;

document.getElementById('next').addEventListener('click', () => {
    if (currentPage < pages.length - 1) {
        pages[currentPage].style.zIndex = pages.length - currentPage;
        pages[currentPage].classList.add('flipped');
        currentPage++;
        updateButtons();
    }
});

document.getElementById('prev').addEventListener('click', () => {
    if (currentPage > 0) {
        currentPage--;
        pages[currentPage].style.zIndex = pages.length - currentPage;
        pages[currentPage].classList.remove('flipped');
        updateButtons();
    }
});

function updateButtons() {
    document.getElementById('prev').disabled = currentPage === 0;
    document.getElementById('next').disabled = currentPage === pages.length - 1;
}

updateButtons();
