document.getElementById("searchInput").addEventListener("input", function() {
    var searchTerm = this.value.toLowerCase();
    var items = document.querySelectorAll(".div1");
    
    items.forEach(function(div1) {
        var itemName = div1.textContent.toLowerCase();
        if (itemName.includes(searchTerm)) {
            div1.style.display = "#first";
            
        } else {
            div1.style.display = "none";
        }
    });
});

  