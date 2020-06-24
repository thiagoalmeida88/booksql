<template>
  <div id="app" class="font-sans antialiased text-black">
    <div id="nav" class="bg-purple-700">
      <div class="container flex items-center justify-between py-6">
        <div>
          <a href="/"><img src="./assets/img/logo.svg" alt="logo"></a>
        </div>  
        <div>
          <router-link to="/" class="text-white hover:text-gray-200 font-bold">Home</router-link>
          <router-link to="/about" class="text-white hover:text-grey-200 pl-6 font-bold">About</router-link>
        </div>
      </div>
    </div>
    
    <router-view />
  </div>
</template>