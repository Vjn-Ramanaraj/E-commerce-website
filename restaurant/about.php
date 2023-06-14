<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/contact.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Is it that each of us has over 20 years of experience in the restaurant/hospitality industry?
Is it the passion each of us has for finding innovative solutions for customers?

It’s all that and much more. The bottom line is that we’ve been in your shoes, whether you’re an owner, manager, chef or donut maker. We’ve all worked in different facets of the restaurant industry, and additionally we have our own special areas of expertise.

So whether you need help from the ground up, or just need a new menu, server training programs, marketing and advertising strategies, or assistance with your bookkeeping and accounting, you’ve come to the right place.

Let us help you make your venture a success. Although we have done projects in California, and as far away as Idaho, our focus is here in the Northwest, namely Oregon and Washington. If you’re still not sure whether you’re ready to hire a consultant, learn more about the benefits here or contact us today for a free consultation.</p>
         
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

  

   

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->



<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>