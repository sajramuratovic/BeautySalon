 
window.onclick = function(e) {
  if (!e.target.matches('.dropdownbutton')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
	
    for (var d = 0; d < dropdowns.length; d++) {
		
      var openDropdown = dropdowns[d];
	  
      if (openDropdown.classList.contains('show'))
      {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function DropdownFunction() {
    document.getElementById("myDropdownMenu").classList.toggle("show");
}