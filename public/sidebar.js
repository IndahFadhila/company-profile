// JavaScript for opening and closing the sidebar
const menuButton = document.getElementById('menuButton');
const sidebar = document.getElementById('sidebar');
const closeButton = document.getElementById('closeButton');

menuButton.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
});

closeButton.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
});