
        // toggle menu 

        var navLinks = document.getElementById("navLinks");

        function openMenu(){
            navLinks.style.right = "0";
        }

        function closeMenu(){
            navLinks.style.right = "-330px";
        }

       
// open new browser 

const openBtn = document.getElementById('open');

let newWindow;

openBtn.addEventListener('click', function() {
    newWindow = window.open('https://meraeugene.github.io/login/', 'newWindow', 'width=1100, height=700, left=100, top=200 ')
})

    const openBtntwo = document.getElementById('openTwo');

    let newWindowtwo;

    openBtntwo.addEventListener('click', function() {
        newWindowtwo = window.open('https://meraeugene.github.io/signup/', 'newWindow', 'width=1100, height=700, left=100, top=200 ')
    })
