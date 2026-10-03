<?php
include 'inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include './parts/header.php'; ?>




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5" >
      <img src="images/images.png" class="d-block mx-auto img-fluid" alt="Logo">
      <h1 class="display-4 fw-normal">اربح مع علي</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل للسحب </p>
      <h3 id="countdown" class="countdown-box"></h3>
      <p class="lead fw-normal"> على ربح نسخة مجانية من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>

   <div class="container">
    <h3>للدخول في السحب اتبع ما يلي:</h3>
  <ul class="list-group list-group-flush">
    
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك</li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>
   </div>

    </div>
 




<div class="container">
<div class="position-relative text-right">
    <div class="col-md-5 p-lg-5 mx-auto my-5"></div>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
  <h3>الرجاء أدخل معلوماتك</h3>


  <div class="mb-3">
    <label for="firstName" class="form-label">اسم الأول</label>
    <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

    <div class="mb-3">
    <label for="lastName" class="form-label">اسم الأخيره</label>
    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

    <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">ارسال معلوماتك</button>
</form>
   </div>
    </div>


 
<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>



<!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach ($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']).' '. htmlspecialchars($user['lastName']); ?></h1>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>


<?php include './parts/footer.php'; ?>
