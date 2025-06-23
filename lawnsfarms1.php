<html>
    <head>
    <!--?php include 'include/nav.php'; ?-->
        <style>
            h1{
                margin-top:5px;
                /*margin-left:400px;*/
                font-size:50px;
                color:black;

            }
            html{
                /*background-color: #25242b;*/
                background-repeat: no-repeat;
                background-size:cover;  
                /*background-image:url("img/S-2.jpg");*/
            }
            .halls-row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        align-items: center;
            }
            .halls-col {
        height: 22rem;
        /*color: rgb(236, 68, 90);*/
        background: url("");
        background-color:transparent;
        background-position: center;
        background-size: cover;
        border-radius: 15px;
        flex: 1 1 25rem;
        padding: 1.2rem;
        margin: 1.5rem;
            }

            .hover-effect {
             transition: transform 0.3s ease;
            }

            .hover-effect:hover {
            transform: scale(1.05);
            }

          .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  border-radius: 15px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  animation-name: slideIn;
  animation-duration: 0.4s;
}

@keyframes slideIn {
  from {
    top: -300px;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
            
        </style>
        
        <script>
            document.addEventListener('DOMContentLoaded', () => {
  const invitationCards = document.querySelectorAll('#invitationForm .hover-effect');

  invitationCards.forEach(card => {
    card.addEventListener('click', () => {
      //Your custom code for handling the click event
      console.log('Invitation card clicked:', card.querySelector('h2').innerText);
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const invitationCards = document.querySelectorAll('#invitationForm .hover-effect');
  const modal = document.getElementById('invitationModal');
  const titleElement = document.getElementById('invitationTitle');
  const descriptionElement = document.getElementById('invitationDescription');
  const priceElement = document.getElementById('invitationPrice');

  invitationCards.forEach(card => {
    card.addEventListener('click', () => {
      const title = card.querySelector('h2').innerText;
      const description = 'This is a stunning invitation design by ' + title;
      const price = card.querySelector('p').innerText;

      titleElement.innerText = title;
      descriptionElement.innerText = description;
      priceElement.innerText = price;

      modal.style.display = 'block';
    });
  });

  window.onclick = function (event) {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  };
});
        </script>
    </head>
        <body>
        
        <!---?php include("heading.php")?--->
        <section class="hall" id="hall">
            <h1><b><center>LAWNS AND FARM</center></b></h1>
            <form action="#" id="invitationForm">

            <!---div id="invitationModal" class="modal">
            <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="invitationTitle"></h2>
            <p id="invitationDescription"></p>
            <p id="invitationPrice"></p--->
  
                    <div class="halls-row">
                        <div class="halls-col custom-class hover-effect">
                    <a href="booking.php"><img src="images/f1.jpg" style="width:90%;height:300px;"></a>
                    <h2><center>The Villa at Mandeville</center></h2>
                    <P><center>STARTING PRICE</center></P>
                    <p><center>ON REQUEST</center></p>
                    </diV>
                    <div class="halls-col custom-class hover-effect">
                    <a href="booking2.php"><img src="images/f2.jpeg" style="width:90%;height:300px;"></a>
                        <h2><center>The Nik's FARM</center></h2>
                        <P><center>STARTING PRICE </center></P>
                        <p><center>2600 PER PLATE - 2700 PER PLATE</center></p>
                    </div>
                    <div class="halls-col custom-class hover-effect">
                    <a href="booking3.php"> <img src="images/f3.jpg" style="width:90%;height:300px;"></a>
                        <h2><center>Bougainvil'La</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>2000 PER PLATE</center></p>
                    </div>
                    <div class="halls-col custom-class hover-effect">
                    <a href="booking4.php"><img src="images/f4.jpg" style="width:90%;height:300px;"></a>
                        <h2><center>The Event Palace</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>ON REQUEST</center></p>
                    </div>
                    <div class="halls-col custom-class hover-effect">
                    <a href="booking5.php"><img src="images/f5.jpg" style="width:90%;height:300px;"></a>
                        <h2><center>Marigold Hotel</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>1000 PER PLATE - 1500 PER PLATE</center></p>
                    </div>
                    <div class="halls-col custom-class hover-effect">
                    <a href="booking6.php"><img src="images/f6.jpg" style="width:90%;height:300px;"></a>
                        <h2><center>Park Plaza</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>3000 PER PLATE</center></p>
                        </div>

                        <div class="halls-col custom-class hover-effect">
                        <a href="booking7.php"><img src="images/f7.jpg" style="width:90%;height:300px;"></a>
                        <h2><center>Blue Sea FARM</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>800 PER PLATE - 900 PER PLATE</center></p>
                        </div>

                        <div class="halls-col hover-effect">
                        <a href="booking8.php"><img src="images/f8.jpg" style="width:90%;height:300px;"></a>
                        <h2><center>MEGHAS'S Farms and LAND</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>ON REQUEST</center></p>
                        </div>

                        <div class="halls-col hover-effect">
                        <a href="booking9.php"><img src="images/f9.jpg" style="width:90%;height:300px;"></a>
                        <h2><center>Nikesha's FARMS</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>3000 PER PLATE</center></p>
                        </div>
           
        </form>              
            <!--?php include("footer.php")?-->
            </div>
             
            </div>
            </div>

          </body>
    
</html>