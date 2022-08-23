
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
        newWindow = window.open('https://meraeugene.github.io/login/', 'newWindow', 'width=600, height=700, left=300, top=200 ')
    })
