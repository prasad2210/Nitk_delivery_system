
    var modal = document.getElementById('id01');
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function myFunction() {
        document.getElementById('p1').reset();
    }

    