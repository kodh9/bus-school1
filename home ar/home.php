<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="home ar.css">
    <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    
    <div class="brr">
        <div class="ss">
            <img src="logo.jpeg">
        </div>
        <div class="dark">
            <div class="b">

            </div>
            <a href="http://localhost/bus%20school/home%20page/home.php"><img src="arabic.png"></a>
            <a href="http://localhost/bus%20school/home%20page1/homePage.php"><ion-icon name="moon-sharp"></ion-icon></a>
        </div>
        <a href="http://localhost/bus%20school/Evaluation/Evaluation%20ar.php">
            <button>
                <h3>التقيم</h3>
            </button>
    </a>
       <a href="http://localhost/bus%20school/profile/profile.php"><ion-icon name="person-circle-outline"></a>
    </div>
    
    <div class="s">
        <p>
            الصفحة الرئسية
        </p>
        <h1> <u>تتبع الحافلة:</u> </h1>
    </div>
    <div class="bus">
        <img src="pp.jpeg">
        <div class="text">
            <h2>سالم احمد:     يتحرك</h2>
        </div>
        
        <div class="bus1">
            <img src="pp.jpeg">
            <div class="dd">
                <h2>محمد احمد:     متوقف</h2>
            </div>
        </div>
    </div>
    <div class="loc">
        <img src="loc.png">
    <a href="https://www.google.com/maps/@24.6239483,46.7381793,15z?authuser=0&entry=ttu" target="_blank"><img src="loc.png"></a>
   </div>
   <div class="loc1">
    <img src="loc1.jpeg">
    <a href="https://www.google.com/maps/@24.6239483,46.7381793,15z?authuser=0&entry=ttu"target="_blank"><img src="loc1.jpeg"></a>
   </div>
    <div class="su">
        <button>
            <ion-icon name="cash-outline"></ion-icon>
            <h3>الاشتراك </h3>
            <a href="#"></a>
        </button>
    </div>
    <div class="sup">
        <button>
         <ion-icon name="chatbox-outline"></ion-icon>
         <h3>خدمة العملاء</h3>
        </button>
    </div>
    <div class="sm">
        <a href="http://localhost/bus%20school/add%20student%20ar/add%20stu%20ar.php">
            <button>
                <ion-icon name="file-tray-stacked-outline"></ion-icon>
                <h3>اداره الطلاب</h3>
            </button> 
        </a>
    </div>
    <div class="lo">
        <a href="http://localhost/bus%20school/login%20ar/login.php">
            <button>
                <ion-icon name="log-in-outline"></ion-icon>
                <h3>تسجيل خروج</h3>
            </button> 
         </a>
    </div>
    <div class="wha">
        <a href="https://wa.me/966506008954"target="_blank"> 
            <ion-icon name="logo-whatsapp"></ion-icon>
        </a>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h4>رقم الجوال: 0506008954</h4>
          <h5>ساعات العمل المدرجة ادناه:</h5>
          <h5>(الاحد,الاثنين,الثلاثاء,الاربعاء ,الخميس)</h5>
          <h5>من 8صباح الي 4مساء</h5>
        </div>
      </div>
      
      <script>
        var modal = document.getElementById("myModal");
        
        var btn = document.querySelector(".sup button");
        
        var span = document.getElementsByClassName("close")[0];
        
        btn.onclick = function() {
          modal.style.display = "block";
        }
        span.onclick = function() {
          modal.style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
</body>
</html>