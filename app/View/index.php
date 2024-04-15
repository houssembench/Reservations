<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">

    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
<details>
  <summary>
    Azultunes
    <span><div class="menu-icon">&#9776;</div></span>
  </summary>
  <button class="button-header">
    <a href="viewres.php">View reservations</a>
  </button>
</details>
</header>


   
<div class="description">
    <p>Book now!!!</p>
    <img src="banner-04.jpg" alt="Description Photo" class="photobg">

</div>
<div class="line"></div>


<!-- The dialog -->
<div id="dialog1" class="dialog-overlay">
  <div class="dialog-content">
    <!-- Form inside the dialog -->
    <form   id="form-offer">
      <label >Date debut:</label><br>
      <input type="date" name="dated" ><br>
      <label >Date fin:</label><br>
      <input type="date" name="datef" ><br>
      <label >titre:</label><br>
      <input type="text" name="titre" ><br><br>
      <label >Description:</label><br>
      <textarea id="description"rows="3" maxlength="500"  name="description" ></textarea><br>
      <label >categorie:</label><br>
      <select class="custom-select mr-sm-2"  name="categorie">
        <option value="Hotel" selected>Hotel</option>
        <option value="restaurant">restaurant</option>
        <option value="skydiving">sky diving</option>
      </select><br>
      <label >Prix:</label><br>
      <div class="range-slider">                            
        <input class="range-slider__range" type="range"  value="0" min="0" max="999" id="prix" name="prix">
        <span id="slider-value" class="range-slider__value">0DT</span>
      </div><br>
      <button type="submit"  class="button1" >Add offre</button>
      
    </form>
    <button class="button1 cancel" onclick="closeDialog1()">Cancel</button>
  </div>
</div>
<div id="dialog2" class="dialog-overlay">
  <div class="dialog-content">
    
    <form   id="form-reservation" class="textg1">
      <label >Date debut reservation:</label><br>
      <input type="date" name="dated" ><br>
      <label >Date fin reservation:</label><br>
      <input type="date" name="datef" ><br>
      <label >Ido:</label><br>
      <input type="text" name="ido" class="input1"><br>
      <label >Cid:</label><br>
      <input type="text" name="cid" class="input1"><br><br><br>

      
      <button type="submit"  class="button1 add" >Add reservation</button>
      <div id="output"></div>
      
    </form>
    <button class="button1 cancel" onclick="closeDialog2()">Cancel</button>
  </div>
</div>
<div id="dialog3" class="dialog-overlay">
  <div class="dialog-content">
    <!-- Form inside the dialog -->
    <form   id="form3">
      
      <label >ido:</label><br>
      <input type="text" name="ido" ><br>
      <button type="submit"  class="button1" >delete offre</button><br>
      <label >idres:</label><br>
      <input type="text" name="idres" ><br>
      <button type="submit"  class="button1" >delete reservation</button>
      <br><br>
      
      
      <button class="button1 cancel" onclick="closeDialog3()">Cancel</button>
    </form>
  </div>
</div>

    <div class="container2">
    
        
        <div class="main-content">
            <!-- Search results will be displayed here -->
            <div class="card">
                <div class="face face1">
                    <div class="contents">
                        
                            
                    <div class="photo">
                      <img src="h1.jpg" >
                       </div>
                            
                        
                            
                                <h3>El Mouradi</h3>
                                <div class="rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                </div>
                                <p>Location: Hammamet</p>
                                <span >Description : </span>
                                <p>Nice Hotel Near the beach...</p>
                                
                                <div class="price-circle">199DT</div>
                           
                    </div>
             </div>  
                
                    
                    
                   <div class="face face2">
                       <div class="contents">
                        
                                
                                <button class="btn-2" onclick="openDialog2()">Book Now</button>
                        </div>
                        
                    </div>
                    
            
                
        
        
    </div>
    <div class="card">
    <div class="face face1">
                    <div class="contents">
                        
                            
                    <div class="photo">
                      <img src="h2.jpg" >
                       </div>
                            
                        
                            
                            <h3>Beach Resort</h3>
                            <div class="rating">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star half"></span>
                            <span class="star empty"></span>
                            </div>
                            <p>Location: Monastir</p>
                            <span >Description : </span>
                            <p>
                            The Beach Resort is a... </p>
                            

                                <div class="price-circle">345DT</div>
                           
                    </div>
             </div>  
                
                    
                    
                   <div class="face face2">
                       <div class="contents">
                        
                                
                       <button class="btn-2" onclick="openDialog2()">Book Now</button>
                        </div>
                        
                    </div>
    
                
        
    </div>
    <div class="card">
    <div class="face face1">
                    <div class="contents">
                        
                            
                    <div class="photo">
                      <img src="h3.jpg" >
                       </div>
                            
                        
                            
                            <h3>Resort Thalasso</h3>
                            <div class="rating">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star "></span>
                                <span class="star half"></span>
                            </div>
                            <p>Location: Sousse</p>
                            <span >Description :</span>
                            <p>Resort Thalasso have best ...</p>
                            
                                <div class="price-circle">458DT</div>
                           
                    </div>
             </div>  
                
                    
                    
                   <div class="face face2">
                       <div class="contents">
                       
                        
                       <button class="btn-2" onclick="openDialog2()">Book Now</button>
                             
                        </div>
                        
                    </div>
    
                
        
    </div>
    <div class="card">
                <div class="face face1">
                    <div class="contents">
                    <div class="photo">
                      <img src="resto2.jpg" >
                       </div>
                                <h3>Restaurant Pizza</h3>
                                <p>Location: Gammarth</p>
                                <span >Description : </span>
                                <p>Menu special...</p>
                                <div class="price-circle">50DT</div>
                           
                    </div>
                 </div>  
                
                  <div class="face face2">
                       <div class="contents">
                                <button class="btn-2" onclick="openDialog2()">Book Now</button>
                      </div>
                        
                  </div>
     </div>            
    <div class="card">
                <div class="face face1">
                    <div class="contents">
                      <div class="photo">
                      <img src="sky2.jpg" >
                       </div>
                        
                            
                                
                            
                        
                            
                                <h3>SkyDiving</h3>
                                
                                <p>Location: Zaghouane</p>
                                <span >Description : </span>
                                <p>Great Exprience...</p>
                                
                                <div class="price-circle">120DT</div>
                           
                    </div>
               </div>  
                
                    
                    
                   <div class="face face2">
                       <div class="contents">
                        
                                
                                <button class="btn-2" onclick="openDialog2()">Book Now</button>
                        </div>
                        
                    </div>
    
    </div>
</div>
        <script src="nav.js"></script>
    </div>
    
</body>
</html>
