<template>
  <nav class="flex justify-between bg-black text-white w-full">
    <div class="flex w-full items-center">
      <a class="text-3xl font-bold font-heading" href="#">
        <!-- <img class="h-9" src="logo.png" alt="logo"> -->
        Logo Here.
      </a>
      <!-- Nav Links -->
      <ul
        class="hidden md:flex px-4 mx-auto font-semibold text-white font-heading space-x-12"
      >
        <li><a class="text-white" href="#">Home</a></li>
        <li><a class="text-white" href="#">Blog</a></li>
    
        <li><a class="text-white" href="#">Contact</a></li>
      </ul>
      <!-- Header Icons -->
      <div class="hidden xl:flex items-center space-x-5 items-center">
      <i class="fa-regular fa-bell"></i>
         <i class="fas fa-user"></i>
                     
      <a href="" class="items-center px-4 py-2 bg-yellow-400 text-white text-md font-normal leading-7 ">Booking</a>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "navBar",
};
</script>
