
document.getElementById("update2").addEventListener("submit", function(event) {
    
    event.preventDefault();
    
    
    var formData = new FormData(event.target);
    document.getElementById("update2").reset();
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/updateres.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            var outputDiv = document.getElementById("output");
            outputDiv.innerHTML = "<h2>Response from updateres.php:</h2>";
            outputDiv.innerHTML += xhr.responseText;
        }
    };
    xhr.send(formData);
});
function setButtonValue(value) {
    
    document.getElementById("val").value = value;
}
$(document).ready(function(){
    
    function fetchRows() {
        $.ajax({
            url: '../Controller/selectreso.php',
            type: 'GET',
            success: function(data) {
                $('#tablehoss').html(data);
            }
        });
    }

    
    fetchRows();

    
    setInterval(fetchRows, 2000);
});

document.getElementById("form3").addEventListener("submit", function(event) {
    
    event.preventDefault();

    
    var formData = new FormData(event.target);
    document.getElementById("form3").reset();
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/delete.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            var outputDiv = document.getElementById("output");
            outputDiv.innerHTML = "<h2>Response from delete.php:</h2>";
            outputDiv.innerHTML += xhr.responseText;
        }
    };
    xhr.send(formData);
});
////////////////////////////////////////////////////
