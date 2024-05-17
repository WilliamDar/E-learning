<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body class="center " >
        <header class="h-screen overflow-hidden flex items-center justify-center">
           
                <img src="{{asset("img/hero_1.webp")}}" alt="" srcset="" class="">
                <div class="bg-white w-full h-full flex justify-center items-start">

                    <div class="text-gray-900 p-9">
                        <h1 class="font-extrabold text-6xl">thousands of courses for creative <span class="text-green-500">entrepreneurs</span></h1>
                        <p class="text-md mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                             Nobis voluptatum mollitia sunt officia reprehenderit sint.
                              Mollitia maxime, reprehenderit saepe minus aspernatur dolorum</p>
                    <div class="flex items-start justify-center gap-4 mt-10 scale-125">
                        <button class="w-auto text-white font-medium bg-green-500 p-2 rounded px-12" id="myBtn">login</button>
                        <button class="w-auto text-white font-medium bg-gray-900 p-2 rounded px-12" id="myBtn2">SignUp</button> 
                    </div>




                    </div>
                </div>
                <div class=" absolute top-14 h-auto w-1/3 bg-white p-10 drop-shadow-md hidden rounded" id="myModal">
                    <span class="close rounded-full w-7 h-7 p-3 flex items-center justify-center bg-gray-900 text-white">&times;</span>
                    <br>

                   <div class="">
                    <h1 class="font-bold text-2xl center text-gray-900 py-2">Login</h1>
                    <p class="py-5">welcome to e-learning</p>
                    <input type="text" class="w-full p-2 border rounded border-gray-200 my-4" placeholder="email">
                    <br>
                    <input type="text" class="w-full p-2 border rounded border-gray-200 my-4" placeholder="Password">
                    <button class="w-auto text-white font-medium bg-gray-900 p-2 rounded px-12">Login</button> 
                   </div>
                </div>


                <div class=" absolute top-10 h-auto w-1/3 bg-white p-10 drop-shadow-md hidden rounded" id="myModal2">
                    <span class="close2 rounded-full w-7 h-7 p-3 flex items-center justify-center bg-gray-900 text-white">&times;</span>
                    <br>

                   <div class="">
                    <h1 class="font-bold text-2xl center text-gray-900 py-2">SignUp</h1>
                    <p class="py-5">welcome to e-learning</p>
                    <input type="text" class="w-full p-2 border rounded border-gray-200 my-2 active:borer-green-500 focus:border-green-500" placeholder="nom">
                    <br>
                    <input type="text" class="w-full p-2 border rounded border-gray-200 my-2" placeholder="email">
                    <br>
                    <input type="text" class="w-full p-2 border rounded border-gray-200 my-2" placeholder="about you">
                    <br>
                    <input type="password" class="w-full p-2 border rounded border-gray-200 my-2" placeholder="Password">
                    <button class="w-auto text-white font-medium bg-gray-900 p-2 rounded px-12 my-2">SignUp</button> 
                    
                   </div>
                </div>


                
               
    
            

        

          
        </header>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Minus sequi, laboriosam ipsam ad tempore voluptas odio modi 
            nemo aperiam. Quas dolorem blanditiis, sunt officiis excepturi
             reprehenderit. Magni nihil quaerat corrupti?
        </p>

 <script>
document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modal
    var modal = document.getElementById("myModal2");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn2");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
</script>
    </body>
</html>
