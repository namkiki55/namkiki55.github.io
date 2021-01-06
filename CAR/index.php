<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Payment calculator</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="" type="image/gif" />

   <!-- awesome fontfamily -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Tweaks for older IEs-->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<style>
   body {
      padding: 10px;
   }

   #loanCalc input {
      padding: 10px;
      display: block;
   }

   .clearfix {
      clear: both !important;
   }

   .paymentCalc {
      background-color: #f7f7f7;
      border: 1px solid #d3d3d3;
      padding: 35px 35px;
      overflow: auto;
   }

   .calcBtn {
      display: inline-block;
      background: #c62233;
      color: #fff;
      text-align: center;
      padding: 10px 20px;
      border-radius: 3px;
   }

   #paymentResults {
      display: none;
      background: #fff;
      padding: 30px 60px 36px 60px;
      border: 1px solid lightgrey;
      margin-top: 88px;
   }
</style>

<body class="main-layout">
   <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content" style="width: 720px;">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel"></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body" style="width: 720px;">
               <div class="col-md-12 paymentCalc">

                  <div class="col-md-12">

                        <div class="col-md-6">
                           <h2>Payment calculator</h2>
                           <div class="form-group">
                              <label for="vehiclePrice">ราคารถยนต์</label>
                              <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="vehiclePrice" placeholder="Vehicle Price">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="downPayment">เงินดาวห์</label>
                              <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="downPayment" placeholder="Down Payment" value="0">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="tradeValue">ส่วนลดแลกรถเก่า</label>
                              <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="tradeValue" placeholder="Trade In Value" value="0">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="intRate">ดอกเบี้ย</label>
                              <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="intRate" placeholder="Interest Rate" value="3.25">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="loanTerm">จำนวนเดือน</label>
                              <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="loanTerm" placeholder="Loan Term (ex: 36 Months)">
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                           <a href="#" class="calcBtn" onclick="calculatePayments()" id="calculate" value="Calulate">Calculate</a>
                        </div>
                     
                  </div>
                  <div class="col-md-6">
                     <div id="paymentResults">

                     </div>
                  </div>
               </div>
            </div>
        
         </div>
      </div>
   </div>


   <div class="wrapper">




      <div id="content">


         <!-- section -->
         <section id="home" class="top_section">
            <div class="row">
               <div class="col-lg-12">
                  <!-- header -->
                  <header>
                     <!-- header inner -->
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-3 logo_section">
                              <div class="full">
                                 <div class="center-desk">
                                    <div class="logo"> <a href="index.html"><img src="images/image-removebg-preview.png" style="width:200px" alt="#"></a> </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-9">
                              <div class="right_header_info">
                                 <ul>
                                    <li><img style="margin-right: 15px;" src="images/phone_icon.png" alt="#" /><a href="#">088-888-8888</a></li>
                                    <li><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#" /><a href="#">GoodCar@service.com</a></li>
                                    <li><img src="images/search_icon.png" alt="#" /></li>
                                    <li>
                                       <button type="button" id="sidebarCollapse">
                                          <img src="images/menu_icon.png" alt="#" />
                                       </button>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end header inner -->
                  </header>
                  <section>
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-5">
                              <div class="full slider_cont_section">
                                 <h4>ยินดีต้อนรับ</h4>
                                 <h3>GOOD CAR</h3>
                                 <p>เว็บไซต์สำหรับคำนวณอัตราดอกเบี้ยสำหรับรถยนต์ Payment calculator</p>

                              </div>
                           </div>
                           <div class="col-md-7">
                              <div id="slider_main" class="carousel slide" data-ride="carousel">
                                 <!-- The slideshow -->
                                 <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <img src="images/slider_1.png" alt="#" />
                                    </div>
                                    <div class="carousel-item">
                                       <img src="images/slider_2.png" alt="#" />
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <!-- end header -->
               </div>
            </div>
         </section>
         <!-- end section -->

         <!-- section -->
         <div id="about" class="section layout_padding">
            <div class="container">

               <div class="row">

                  <div class="col-lg-4 margin_top_30">
                     <div class="full margin_top_30">
                        <h3 class="main_heading _left_side margin_top_30">BMW X1</h3>
                        <h2 style="color:red">1,999,000 - 2,559,000 บาท</h2>
                        <p class="large">ผลิตปี 2009 - ปัจจุบัน
                           BMW X1รถคอมแพคท์หรูแบบครอสโอเวอร์ มีมาตั้งแต่ปี2009 กระจังหน้าโค้ง ราวหลังคา มีความสูงจากพื้นถีงท้องรถดีกว่ารถสปอร์ตเกือบทั้งหมด
                           มีหน้าต่างไฟฟ้า ระบบปรับอากาศอัตโนมัติ ไฟท้ายLED ซันรูฟแบบพาโนรามิค และระบบiDrive(ระบบสั่งการด้วยเสียง)
                           ให้ความเร็วสูงสุดที่ 209กม./ชม. สามารถเร่งจาก0-96กม./ชม.ใน5.3วินาที สามารถเร่งจาก0-96กม./ชม.ใน5.3วินาที</p>
                     </div>



                     <!-- Button trigger modal -->

                     <div class="full button_section margin_top_30" data-toggle="modal" data-target=".bd-example-modal-xl">
                        <a style="color:white">Calculator</a>
                     </div>
                     <!-- Modal -->
                    


                  </div>

                  <div class="col-lg-8">

                     <img class="img-responsive" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/car_models/BMW_X1_1/2/exterior/exterior_2L_1.jpg" alt="#" />
                     <table class="variantTbl card">
                        <thead>
                           <tr>
                              <th>รุ่นย่อย / ราคา</th>
                              <th>บอดี้</th>
                              <th>ระบบส่งกำลัง</th>
                              <th>น้ำมันเชื้อเพลิง</th>
                              <th>เงินดาวน์</th>
                              <th>ค่างวด</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th>
                                 <h3 style="margin-left: 3rem;">BMW X1<span class="variantTbl_nameTxt">X1 sDrive18i (Iconic)</span></h3>
                                 <span style="margin-left: 3rem;" id="data-variant_id_4469" data-variant_id="4469" data-variant_price="1999000.00">1,999,000 บาท</span>
                              </th>
                              <td>
                                 <img alt="SUV" width="45" height="25" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_bodytype_2.png">
                                 <span>SUV</span>
                              </td>
                              <td>
                                 <img alt="เกียร์ออโต้" width="45" height="26" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_transmissiontype_at.png">
                                 <span>เกียร์ออโต้</span>
                              </td>
                              <td>
                                 <img alt="เบนซิน" width="45" height="26" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_fueltype_gasoline.png">
                                 <span>เบนซิน</span>
                              </td>

                           </tr>
                           <tr>
                              <th>
                                 <h3 style="margin-left: 3rem;">BMW X1<span class="variantTbl_nameTxt">X1 sDrive18d xLine</span></h3>
                                 <span style="margin-left: 3rem;" id="data-variant_id_4471" data-variant_id="4471" data-variant_price="2359000.00">2,359,000 บาท</span>
                              </th>
                              <td>
                                 <img alt="SUV" width="45" height="25" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_bodytype_2.png">
                                 <span>SUV</span>
                              </td>
                              <td>
                                 <img alt="เกียร์ออโต้" width="45" height="26" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_transmissiontype_at.png">
                                 <span>เกียร์ออโต้</span>
                              </td>
                              <td>
                                 <img alt="ดีเซล" width="45" height="26" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_fueltype_diesel.png">
                                 <span>ดีเซล</span>
                              </td>

                           </tr>
                           <tr>
                              <th>
                                 <h3 style="margin-left: 3rem;">BMW X1<span class="variantTbl_nameTxt">X1 sDrive20d M Sport</span></h3>
                                 <span style="margin-left: 3rem;" id="data-variant_id_5409" data-variant_id="5409" data-variant_price="2559000.00">2,559,000 บาท</span>
                              </th>
                              <td>
                                 <img alt="SUV" width="45" height="25" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_bodytype_2.png">
                                 <span>SUV</span>
                              </td>
                              <td>
                                 <img alt="เกียร์ออโต้" width="45" height="26" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_transmissiontype_at.png">
                                 <span>เกียร์ออโต้</span>
                              </td>
                              <td>
                                 <img alt="ดีเซล" width="45" height="26" src="https://d2pa5gi5n2e1an.cloudfront.net/webp/th/images/cars_ui/ico_fueltype_diesel.png">
                                 <span>ดีเซล</span>
                              </td>

                           </tr>
                           <tr>
                              <td colspan="7" class="variantTbl_link variantTbl_linkNone">
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>

            </div>

         </div>
      </div>
      <!-- end section -->


      <!-- copyright -->

      <div class="cpy_right">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <p>© 2019 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- right copyright -->

   </div>
   </div>

   <div class="overlay"></div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script>
      function calculatePayments() {
         var vehiclePrice = document.getElementById('vehiclePrice').value,
            loanTerm = document.getElementById('loanTerm').value,
            intRate = document.getElementById('intRate').value,
            downPayment = document.getElementById('downPayment').value,
            tradeValue = document.getElementById('tradeValue').value,
            amount = parseInt(vehiclePrice),
            months = parseInt(loanTerm),
            down = parseInt(downPayment),
            trade = parseInt(tradeValue),
            totalDown = down + trade
         annInterest = parseFloat(intRate),
            monInt = annInterest / 1200;

         if (!amount) {
            alert('Please add a loan amount');
            return;
         }

         if (!months) {
            months = 60;
            loanTerm = document.getElementById('loanTerm').value = '60';
         }

         if (!downPayment) {
            down = 0;
            downPayment = document.getElementById('downPayment').value = '0';
         }

         if (!trade) {
            trade = 0;
            tradeValue = document.getElementById('tradeValue').value = '0';
         }

         if (!annInterest) {
            annInterest = 3.25;
            intRate = document.getElementById('intRate').value = '3.25';
         }


         var calc = ((monInt + (monInt / (Math.pow((1 + monInt), months) - 1))) * (amount - (totalDown || 0))).toFixed(2);

         var paymentResults = document.getElementById('paymentResults');
         paymentResults.style.display = 'block';
         paymentResults.innerHTML = '';
         var results = document.createElement('div');
         results.innerHTML = '<h1 style="text-align:center">ผลการคำนวณค่าใช้จ่าย:<br/></h1>' + '<h3 style="text-align:center">฿' + calc + '/เดือน</h3>';

         paymentResults.append(results);


      }
   </script>
</body>

</html>