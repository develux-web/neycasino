const acc = document.querySelectorAll(".accordion");
let i;

console.log(acc)
console.log('text')

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function(e) {
        if(!e.target.classList.contains('active')) {
            removeActive();
        }
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
        this.classList.toggle("active");

    });
}

function removeActive() {
    acc.forEach((item) => {
        item.classList.remove('active');
        let panel = item.nextElementSibling;
        panel.style.maxHeight = '';
    });
}
