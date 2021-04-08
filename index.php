<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Woof Woof</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon-16x16.png">
  </head>
  <?php include_once('header.php'); ?>
  <body>
    <section class="text-gray-600 body-font">
      <div class="container mx-auto">
          <img src="img/bg.jpg" alt="" height="750px" width="auto">
      </div>
    </section>

    <section class="text-gray-600 body-font middle">
      <div class="container px-5 py-24 mx-aut middle-1 ">
        <div class="flex flex-wrap -mx-4 -mb-10 text-center">
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="img/pug.jpg">
            </div>
            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">About Pug</h2>
            <p class="leading-relaxed text-base">The Pug is often described as a lot of dog in a small space. These sturdy, compact dogs are a part of the American . . .</p>
          </div>
          <div class="sm:w-1/2 mb-10 px-4">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="img/corgi.png">
            </div>
            <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">About Corgi</h2>
            <p class="leading-relaxed text-base">Originally bred to herd cattle, sheep, and horses, the Pembroke Welsh Corgi is an active and intelligent dog breed. Easy to train and eager to learn . . .</p>
          </div>
        </div>
        <a href="breeds.php"><button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">More Breeds</button></a>
      </div>
    </section>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Wide Range of Products</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">No ones to let their dog be alone when someones not around so buy some todys for them, create better place live for them with our products.</p>
    </div>
    <div class="flex flex-wrap">
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Leash</h2>
        <p class="leading-relaxed text-base mb-4">Leash with a flashlight, you don't know when lights go out so we brought a flashlight attached with it.</p>
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Colors</h2>
        <p class="leading-relaxed text-base mb-4">Wide range for colors, different kind and colours of it. Choose whichever you like!</p>
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Cushion Sofa</h2>
        <p class="leading-relaxed text-base mb-4">Don't want your dog to be always in your bed? Get a cushion sofa for him/her.</p>
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Chew Toy</h2>
        <p class="leading-relaxed text-base mb-4">Varity of chewing toys get one for your dog too.</p>
      </div>
    </div>
    <a href="product.php"><button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">More Products</button></a> 
  </div>
</section>

  </body>
  <?php include_once('footer.php'); ?>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</html>
