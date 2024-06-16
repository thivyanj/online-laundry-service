let submenu = document.getElementById("submenu");

function toggleSubMenu() {
    submenu.classList.toggle("open-menu");
}







function showSub(subId) {
    

    // Get all elements with class "elementor5-right"
    
    
    // Loop through all elements and hide them
    

    // Get the element with the specified ID
    var selectedRight = document.getElementById(subId);
    

    // Show the selected element
    selectedRight.style.display = 'block';

    if (subId !== 'elementor5-right1') {
        document.getElementById('elementor5-right1').style.display = 'none';
    }
    if (subId !== 'elementor5-right2') {
        document.getElementById('elementor5-right2').style.display = 'none';
    }
    if (subId !== 'elementor5-right3') {
        document.getElementById('elementor5-right3').style.display = 'none';
    }
    if (subId !== 'elementor5-right4') {
        document.getElementById('elementor5-right4').style.display = 'none';
    }
}



























