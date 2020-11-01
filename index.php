<!-- 60050231 นาย ภานุัฒน์  ไคร้อุดม -->
<!-- Assignment 2 -->
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Price Discount</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row mt-5 justify-content-center">
        <h3>กิจกรรมที่ 1</h3>
        <br>
      </div>
        <p class="text-center">
          เขียนโปรแกรมสร้างฟอร์มรับราคารวมของสินค้า เพื่อคิดส่วนลดให้ลูกค้า
          โดยมีเงื่อนไข <br> ถ้าซื้อสินค้ารวมครบ 500 บาทขึ้นไป จะได้ส่วนลด 5 %
          และแสดงราคารวม ส่วนลด และรวมสุทธิ
        </p>
       
        
      
      <form method="post">
        <div class="row mt-5">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">฿</span>
            </div>
            <input
              id="price"
              name="price"
              type="text"
              class="form-control"
              placeholder="ป้อนราคาสินค้า"
              aria-label="price"
              aria-describedby="basic-addon1"
            />
          </div>
        </div>
        <div class="row justify-content-center">
          <button
            type="submit"
            name="submit"
            id="cal"
            class="btn btn-success mx-4"
          >
            คำนวณ
          </button>
          <button type="reset" class="btn btn-secondary" >ยกเลิก</button>
        </div>
      </form>
      
    </div>
  <?php 
   if (isset($_POST['submit'])) { 
     $price = $_POST['price'];
    $discount = 0;
    $total = 0 ;
     if($price >= 500){
      $total = $price - ($price * (5 / 100));
      $discount =  ($price * (5 / 100));
     }
     else $total = $price
  ?> <div class="text-center">
    <div class="row my-5 justify-content-center">
        <div class="card w-75">
          <div class="card-body">
            <h5 class="card-title">สรุปผลราคา</h5>
            <p class="card-text">
              สินค้าราคา = <?php echo $price?>  บาท
            </p>
            <p class="card-text" style="color: red;">
              ส่วนลด  5 % = <?php echo  $discount?>  บาท
            </p>
            <h5 class="card-text" style="color: green;">
              ราคารวมสุทธิ = <?php echo $total?> บาท
            </h5>
          </div>
        </div>
      </div>
      </div>
      
    <?php	} ?>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
</script>
  </body>
</html>
