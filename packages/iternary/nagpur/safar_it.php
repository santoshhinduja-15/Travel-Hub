<!DOCTYPE html>
<html>
<head>
  <title>TravelHub | Safar Tours and Travels | Iternary page</title>
  <link rel="stylesheet" href="../iternary.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>
  <body>
    <header>    
    <section class="header" >
      <a href="homepg.html" class="logo"><img src="/logoabout.png"></a>

      <nav class="navbar">
          <a href="/index.html">Home</a>
          <a href="/aboutUs.html">About</a>
          <a href="../../city_package/packages.html">Packages</a>
          <a href="/gallery.html">Gallery</a>
          <a href="/contactUs.html"> Contact</a>
      </nav>
  </section>
        
    </header>
    <div class="cmp" style="background-image: radial-gradient(circle at 10%,rgba(64, 166, 110, 0.568) ,white );
    box-shadow: 1px 1px 3px #237453f0;">
      <h1>Explore Nagpur along with Pachmarhi  </h1> 
        <p>Safar Tours and Travels</p>
    </div>
    <div class="booking">
    <h2>Booking Summary</h2>
    <p id="cap">Reserve your date now for an amazing travel experience!</p>
    <div class="book">
      <div class="date">
      <div class="val">
      <form action="safar_it.php" method="post">
      <label for="userDate">Select a Date:</label>
      <input type="date" id="userDate" name="userDate">
      <label for="userRoom">Number of rooms:</label>
      <input type="number" id="userRoom" name="userRoom">
      <label for="travellerno">Number of travellers:</label>
      <input type="number" id="travellerno" name="travellerno">
      <input type="submit" value="Book now">
    </form>
  </div>
    <div class="price">
      <div class="amt">
      <div class="amt1">
      <p>Price </p></div>
      <div class="amt2">
      <p>&#8377 23,900</p></div>
    </div>
      <p id="pe">per person</p>
    </div>
    </div>
  </div>
    </div>
    <div class="slider">
      <h2>Iternary</h2>
      <p id="cap">Curious about your plans? Click to reveal your itinerary details!</p>
    <div class="iternary">
         <div class="item1">
        <input id="day1" type="checkbox" name="menu" />
        <label for="day1">
          <div class="it_name">
          <div class="icon">
            <p>Day 1</p>
            <img src="../icon.png" alt="">
            <b>Nagpur City Exploration</b>
          </div>
          <div class="arrow">
            <img src="../down-arrow.png" alt="">
          </div>
        </div>
        </label>
      
    <div class="day">
      <div class="list">

      <div class="place">
        <div class="text">
          <p id="M">Deekshabhoomi</p>
              <p>Explore the sacred Buddhist stupa at Deekshabhoomi, a historically significant pilgrimage site where Dr. B.R. Ambedkar embraced Buddhism</p>
        </div> 
         <div class="pic">
          <img src="deekshabhoomi.webp" alt="pic">      
         </div>
        </div>
        <div class="place">
            <div class="text">
              <p id="M">Sitabuldi Fort</p>
                  <p>Immerse yourself in history at Sitabuldi Fort, a British-era stronghold offering not only a glimpse into the past but also stunning panoramic views of Nagpur</p>
            </div> 
             <div class="pic">
              <img src="sitabuldi.png" alt="pic">
             </div>
            </div>
            <div class="place">
                <div class="text">
                  <p id="M">Futala Lake</p>
                      <p>Immerse yourself in history at Sitabuldi Fort, a British-era stronghold offering not only a glimpse into the past but also stunning panoramic views of Nagpur</p>
                </div> 
                 <div class="pic">
                  <img src="futala.jpg" alt="pic">
                 </div>
                </div>
         
          
                <div class="place">
                  <div class="hotel">
                    <span><img src="../hotel.png" alt="hotel" id="hotel"></span>
                    <span >Hotel Centre Point</span>
                  </div> 
                  
                  </div>
      </div>
      </div>
    </div>
         <div class="item1">
      <input id="day2" type="checkbox" name="menu" />
      <label for="day2"> 
        <div class="it_name">
          <div class="icon">
          <p>Day 2</p>
          <img src="../icon.png" alt="">
          <b> Nature and Wildlife</b>
        </div>
        <div class="arrow">
          <img src="../down-arrow.png" alt="">
        </div>
      </div>
      </label>
      <div class="day">
        <div class="list">
            <div class="place">
                <div class="text">
                  <p id="M">Ambazari Lake and Garden</p>
                      <p>A peaceful lake for boating, paired with a beautiful garden.</p>
                </div> 
                 <div class="pic">
                  <img src="ambazari.jpeg" alt="pic">
                 </div>
                </div>
                <div class="place">
                  <div class="text">
                    <p id="M">Raman Science Centre</p>
                        <p>Engaging science exhibits that are both educational and entertaining, providing an interactive experience.</p>
                  </div> 
                   <div class="pic">
                    <img src="raman.jpg" alt="pic">
                   </div>
                  </div>
       
            <div class="place">
              <div class="text">
                <p id="M">Nagzira Wildlife Sanctuary</p>
                    <p>Embark on a wildlife adventure at Nagzira Wildlife Sanctuary, a biodiverse haven offering a captivating safari experience amidst diverse flora and fauna.</p>
              </div> 
               <div class="pic">
                <img src="nagzira.jpeg" alt="pic">
               </div>
              </div>
             
                  <div class="place">
                    <div class="hotel">
                      <span><img src="../hotel.png" alt="hotel" id="hotel"></span>
                      <span >Hotel Centre Point</span>
                    </div> 
                    
                    </div>
        </div>
      </div>
      </div>
         <div class="item1">
        <input id="day3" type="checkbox" name="menu" />
        <label for="day3">
        <div class="it_name">
          <div class="icon">
            <p>Day 3</p>
            <img src="../icon.png" alt="">
            <b>Historical & Religious Sites</b>
          </div>
          <div class="arrow">
            <img src="../down-arrow.png" alt="">
          </div>
        </div>
        </label>
      <div class="day">
        
       
        <div class="list">
        <div class="place">
          <div class="text">
            <p id="M">Ramtek Temple</p>
                <p> Climb to the ancient Ramtek Temple atop a hill, not just for its religious significance but also for the breathtaking views it provides of the surrounding landscape.</p>
          </div> 
           <div class="pic">
            <img src="ramtek.jpg" alt="pic">
           </div>
          </div>
          
          <div class="place">
            <div class="text">
              <p id="M">Dragon Palace Buddhist Temple</p>
                  <p>Immerse yourself in the serene ambiance of Dragon Palace, a beautiful Buddhist temple surrounded by lush greenery, offering a peaceful retreat.</p>
            </div> 
             <div class="pic">
              <img src="dragon.jpg" alt="pic">
             </div>
            </div>
            <div class="place">
              <div class="text">
                <p id="M">Sevagram</p>
                    <p>Step into history at Sevagram, Gandhi's ashram, which played a pivotal role in India's fight for independence, providing insight into the Mahatma's life and principles.</p>
              </div> 
               <div class="pic">
                <img src="sevagram.jpg" alt="pic">
               </div>
              </div>
             
                <div class="place">
                  <div class="hotel">
                    <span><img src="../hotel.png" alt="hotel" id="hotel"></span>
                    <span >Hotel Centre Point</span>
                  </div> 
                  
                  </div>
        </div>
        </div>
      </div>
         <div class="item1">
        <input id="day4" type="checkbox" name="menu" />
        <label for="day4">
        <div class="it_name">
          <div class="icon">
            <p>Day 4</p>
            <img src="../icon.png" alt="">
            <b>Pachmarhi Hill Station Excursion</b>
          </div>
          <div class="arrow">
            <img src="../down-arrow.png" alt="">
          </div>
        </div>
        </label>
        <div class="day">
          
          
          <div class="list">
          
              <div class="place">
                <div class="text">
                  <p id="M">Pachmarhi</p>
                      <p>Explore the enchanting hill station of Pachmarhi, characterized by scenic waterfalls, colonial architecture, and ancient caves, offering a perfect blend of nature and history.</p>
                </div> 
                 <div class="pic">
                  <img src="pachmarhi.jpg" alt="pic">
                 </div>
                </div>
                <div class="place">
                    <div class="text">
                      <p id="M">Bee Falls</p>
                          <p>Witness the breathtaking beauty of Bee Falls, a stunning cascade surrounded by lush greenery, providing a tranquil escape in the lap of nature.</p>
                    </div> 
                     <div class="pic">
                      <img src="bee-falls.jpg" alt="pic">
                     </div>
                    </div>
                    <div class="place">
                        <div class="text">
                          <p id="M">Jata Shankar Caves</p>
                              <p>Delve into history at Jata Shankar Caves, ancient limestone caves housing a sacred Shiva lingam, creating a mystical and spiritual atmosphere.</p>
                        </div> 
                         <div class="pic">
                          <img src="jatashankar.jpg" alt="pic">
                         </div>
                        </div>
                
                    <div class="place">
                      <div class="hotel">
                        <span><img src="../hotel.png" alt="hotel" id="hotel"></span>
                        <span >Hotel Himalaya Pachmarhi</span>
                      </div> 
                      
                      </div>
          </div>
          </div>
          </div>
         
      </div>
    </div>
  
    
    <footer>
      <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.html"><i class="fa fa-angle-right"></i>Home</a>
                <a href="aboutUs.html"><i class="fa fa-angle-right"></i>About</a>
                <a href="packages.html"><i class="fa fa-angle-right"></i>Packages</a>
                <a href="gallery.html"><i class="fa fa-angle-right"></i>Gallery</a>
                <a href="contactUs.html"><i class="fa fa-angle-right"></i>Contact</a>
            </div>
    
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fa fa-angle-right"></i>ask questions</a>
                <a href="faq.html"><i class="fa fa-angle-right"></i>faq</a>
                <a href="#"><i class="fa fa-angle-right"></i>privacy policy</a>
                <a href="t&c.html"><i class="fa fa-angle-right"></i>terms of use</a>
            </div>
    
            <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class="fa fa-phone"></i>428416212</a>
                <a href="#"><i class="fa fa-phone"></i>483481292</a>
                <a href="#"><i class="fa fa-envelope"></i>travelhub@ves.ac.in</a>
                <a href="#"><i class="fa fa-map"></i>mumbai,India - 400094</a>
            </div>
    
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fa fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fa fa-twitter"></i>twitter</a>
                <a href="#"><i class="fa fa-instagram"></i>instagram</a>
                <a href="#"><i class="fa fa-linkedin"></i>linkedin</a>
            </div>
        </div>
    
        <div class="credit">Created by <span> Team TravelHub</span> | all rights reserved</div>
    </section>
    
  </footer>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "safar_it";

    // Check Connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
    {
    die("Connection failed: " . mysqli_connect_error());
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $user_date = $_POST["userDate"];
    $user_room = $_POST["userRoom"];
    $traveller_number = $_POST["travellerno"];

    $sql = "INSERT INTO booking (date, rooms, traveller) VALUES ('$user_date', '$user_room', '$traveller_number')";
    $result = mysqli_query($conn, $sql);

    // Close the Connection
    mysqli_close($conn);
    }
  ?>
</body>
</html>
