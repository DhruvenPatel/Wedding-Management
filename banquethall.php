<html>
    <head>
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
            .ban-row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        align-items: center;
            }
            .ban-col {
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

h2{
  margin-top:5px;
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
        <!--?php include 'include/nav.php'; ?-->
        <!---?php include("heading.php")?--->
        <section class="banq" id="banq">
            <h1><b><center>BANQUET HALLS</center></b></h1>
            <form action="#" id="invitationForm">

            <!---div id="invitationModal" class="modal">
            <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="invitationTitle"></h2>
            <p id="invitationDescription"></p>
            <p id="invitationPrice"></p--->
  
                    <div class="ban-row">
                        <div class="ban-col custom-class hover-effect">
                    <img src="images/classic.jpeg" style="width:90%;height:300px;">
                    <h2><center>The Lavany Banquet</center></h2>
                    <P><center>STARTING PRICE PER CARD</center></P>
                    <p><center>RS.300000</center></p>
                    </div>
                    <div class="ban-col custom-class hover-effect">
                        <img src="images/banquet hall.jpg" style="width:90%;height:300px;">
                        <h2><center>Varmala Banquet</center></h2>
                        <P><center>STARTING PRICE PER CARD</center></P>
                        <p><center>RS.400000</center></p>
                    </div>
                    <div class="ban-col custom-class hover-effect">
                        <img src="images/dis-2.jpg" style="width:90%;height:300px">
                        <h2><center>The Bluesea Banquet</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>RS.3400000</center></p>
                    </div>
                    <div class="ban-col custom-class hover-effect">
                        <img src="images/11.jpg" style="width:90%;height:300px;">
                        <h2><center>Crossroad Banquet</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>RS.2500000</center></p>
                    </div>
                    <div class="ban-col custom-class hover-effect">
                        <img src="images/9.jpg" style="width:90%;height:300px;">
                        <h2><center>Saffron Banquet</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>RS.2900000</center></p>
                    </div>
                    <div class="ban-col custom-class hover-effect">
                        <img src="images/8.jpg" style="width:90%;height:300px;">
                        <h2><center>Rock Banquet</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>RS.6500000</center></p>
                        </div>

                        <div class="ban-col custom-class hover-effect">
                        <img src="images/1.jpg" style="width:90%;height:300px;">
                        <h2><center>The White Palace Banquet</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>RS.5500000</center></p>
                        </div>

                        <div class="ban-col hover-effect">
                        <img src="images/2.jpg" style="width:90%;height:300px;">
                        <h2><center>Moon Cloud Banquet</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>RS.1100000</center></p>
                        </div>

                        <div class="ban-col hover-effect">
                        <img src="images/5.jpg" style="width:90%;height:300px;">
                        <h2><center>Chandan Banquet</center></h2>
                        <P><center>STARTING PRICE</center></P>
                        <p><center>RS.7500000</center></p>
                        </div>
           
        </form>              
            <!--?php include("footer.php")?-->
            </div>
             
            </div>
            </div>

          </body>
    
</html>