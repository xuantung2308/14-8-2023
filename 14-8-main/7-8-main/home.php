<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>    
      
     <script>
          function increaseValue($number) {
               var value = parseInt(document.getElementById($number).value, 10);
               value = isNaN(value) ? 0 : value;
               value++;
               document.getElementById($number).value = value;
          }

          function decreaseValue($number) {
               var value = parseInt(document.getElementById($number).value, 10);
               value = isNaN(value) ? 0 : value;
               value < 1 ? value = 1 : '';
               value--;
               document.getElementById($number).value = value;
          }

          function cal($wnumber, $hnumber){
               $bmi = $wnumber/($hnumber*$hnumber);    
          }
     </script>

     <style>
          .cal-btn{
               padding: 5px 10px;
               color: white;
               background-color: #00bfff;
               border: 1px solid #00bfff;
               border-radius: 15px;
               font-size: 22px;
          }
     </style>

     <body>
          <?php
               require('header.html');
          ?>
               <div class="row justify-content-center" style="width: 70%;">
                    <h1 style="font-size: 50px; margin-top: 50px;color: #00bfff">Công cụ tính BMI</h1>
                    <div class="sub-heading" style="text-align: center; font-size: 16px; margin-bottom: 30px;color: #00bfff">Tính chỉ số BMI để biết tình trạng sức khỏe của bạn</div><br>
                    <div class="row" style="text-align: center;">
                         <div class="col-lg-6 col-md-6 col--sm-12 col-12" >
                              <div style="margin: 10px;">
                                        <p class="title">Chiều cao</p>
                                        <div class="div_inum">
                                             <div class="value-button" id="decrease" onclick="decreaseValue('hnumber')" value="Decrease Value">-</div>
                                             <input class="innum" type="number" id="hnumber" value="0" />
                                             <div class="value-button" id="increase" onclick="increaseValue('hnumber')" value="Increase Value">+</div> 
                                        </div>
                              </div>
                              
                              <div style="margin: 10px;">
                                   <p class="title">Cân nặng</p>
                                   <div class="div_inum">
                                        <div class="value-button" id="decrease" onclick="decreaseValue('wnumber')" value="Decrease Value">-</div>
                                        <input class="innum" type="number" id="wnumber" value="0" />
                                        <div class="value-button" id="increase" onclick="increaseValue('wnumber')" value="Increase Value">+</div>
                                   </div> 
                              </div>
                              <div style="width: 100%;">
                                   <div>
                                        <button type="submit" class="cal-btn">Tính toán</button>
                                   </div>
                              </div>
                         </div>
                         <div class="col-6 col-md-6"></div>
                    </div>
               </div>
     </body>
</html>

