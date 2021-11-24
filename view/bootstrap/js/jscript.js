let sidebar = document.querySelector(".menu_sidebar");
let closeBtn = document.querySelector("#btn");


closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("closed");
    menuBtnChange(); //chamando a função
});


function menuBtnChange() {
    if (sidebar.classList.contains("closed")) {
        closeBtn.classList.replace("bx-menu", "bx-store-alt"); //substituindo o icone na class
    } else {
        closeBtn.classList.replace("bx-store-alt", "bx-menu"); //substituindo o icone na class
    }
}