
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
        newWindow = window.open('', 'newWindow', 'width=800, height=800, left=300, top=200 ')
    })
