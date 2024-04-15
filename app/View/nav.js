const slider = document.getElementById('prix');
const sliderValue = document.getElementById('slider-value');


slider.addEventListener('input', function() {
    sliderValue.textContent = this.value+"DT";
});

function openDialog1() {
    document.getElementById('dialog1').style.display = 'flex';
  }

  function closeDialog1() {
    document.getElementById('dialog1').style.display = 'none';
  }
  function openDialog2() {
    document.getElementById('dialog2').style.display = 'flex';
  }

  function closeDialog2() {
    document.getElementById('dialog2').style.display = 'none';
  }
  function openDialog3() {
    document.getElementById('dialog3').style.display = 'flex';
  }

  function closeDialog3() {
    document.getElementById('dialog3').style.display = 'none';
  }
  

//////offre/////
  document.getElementById("form-offer").addEventListener("submit", function(event) {
    
    event.preventDefault();

    
    var formData = new FormData(event.target);
    document.getElementById("form-offer").reset();

    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "formsub.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            var outputDiv = document.getElementById("output");
            outputDiv.innerHTML = "<h2>Response from formsub.php:</h2>";
            outputDiv.innerHTML += xhr.responseText;
        }
    };
    xhr.send(formData);
});
//////reservation///
document.getElementById("form-reservation").addEventListener("submit", function(event) {
    
    event.preventDefault();

    
    var formData = new FormData(event.target);
    document.getElementById("form-reservation").reset();
   
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/formsub2.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            var outputDiv = document.getElementById("output");
            
            outputDiv.innerHTML = "<h2>"+xhr.responseText+"<h2>";
            
        }
    };
    xhr.send(formData);
    setTimeout(clear,2000);
});
function clear()
{
    var outputDiv = document.getElementById("output");
    outputDiv.innerHTML = "";
}
////delete////
document.getElementById("form3").addEventListener("submit", function(event) {
    
    event.preventDefault();

    
    var formData = new FormData(event.target);

    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "delete.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
           
            var outputDiv = document.getElementById("output");
            outputDiv.innerHTML = xhr.responseText;
        }
    };
    xhr.send(formData);
});

///////update/////
document.getElementById("update1").addEventListener("submit", function(event) {
    
    event.preventDefault();

    
    var formData = new FormData(event.target);

    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "updateoffre.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            var outputDiv = document.getElementById("output");
            outputDiv.innerHTML = "<h2>Response from updateoffre.php:</h2>";
            outputDiv.innerHTML += xhr.responseText;
        }
    };
    xhr.send(formData);
});
document.getElementById("update2").addEventListener("submit", function(event) {
    
    event.preventDefault();

    
    var formData = new FormData(event.target);

    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", 'updateres.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            var outputDiv = document.getElementById("outpu");
            outputDiv.innerHTML = xhr.responseText;
        }
    };
    xhr.send(formData);
});
function setButtonValue(value) {
    
    document.getElementById("val").value = value;
}
/////////////////


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = (content.scrollHeight) + "px";
    } 
  });
}
////////////////////////////////////////////
function generateCard(hotel) {
    return `
        <div class="card">
            <div class="face face1">
                <div class="contents">
                    <img src="${hotel.imgSrc}" alt="${hotel.titre}">
                    <h3>${hotel.titre}</h3>
                    <p>Location: ${hotel.location}</p>
                    <span>Description: ${hotel.description}</span>
                    <div class="rating">
                        ${generateStars(hotel.rating)}
                    </div>
                    <div class="price-circle">${hotel.prix}</div>
                </div>
            </div>
            <div class="face face2">
                <div class="contents">
                    <button class="btn-2" onclick="openDialog()">Book Now</button>
                </div>
            </div>
        </div>
    `;
}


function generateStars(rating) {
    var stars = '';
    for (var i = 0; i < 5; i++) {
        if (i < rating) {
            stars += '<span class="star"></span>';
        } else {
            stars += '<span class="star empty"></span>';
        }
    }
    return stars;
}


function addCardsToContainer() {
    var cardContainer = document.getElementById("main-content");
    hotels.forEach(function(hotel) {
        var cardHtml = generateCard(hotel);
        cardContainer.innerHTML += cardHtml;
    });
}


window.onload = function() {
    addCardsToContainer();
};
function addHotel() {
    var form = document.getElementById("form-offer");
    var hotel = {
        
        titre: form.titre.value,
        location: form.location.value,
        description: form.description.value,
        rating: parseInt(form.rating.value),
        prix: form.prix.value
    };
    console.log(hotel);
    var cardContainer = document.getElementById("main-content");
    var cardHtml = generateCard(hotel);
    cardContainer.innerHTML += cardHtml;
}
//////ido/////

    