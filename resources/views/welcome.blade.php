<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            .active{
                background: #00FF84;
                border: none;
                color: #002333;
            }
        </style>

        @vite('resources/css/app.css')
        <style>
            .active{
                background: #00FF84;
                border: none;
                color: #002333;
            }
        </style>
    </head>
    <body class="center " >
        <header class="h-screen overflow-hidden flex items-center justify-center">
           
                <img src="{{asset("img/hero_1.webp")}}" alt="" srcset="" class="">
                <div class="bg-white w-full h-full flex justify-center items-start">

                    <div class="text-secondary p-9">
                        <h1 class="font-extrabold text-6xl">thousands of courses for creative <span class="text-primary">entrepreneurs</span></h1>
                        <p class="text-md mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                             Nobis voluptatum mollitia sunt officia reprehenderit sint.
                              Mollitia maxime, reprehenderit saepe minus aspernatur dolorum</p>
                    <div class="flex items-start justify-center gap-4 mt-10 scale-125">
                        <button class="w-auto text-white font-medium bg-primary p-2 rounded px-12" id="myBtn">login</button>
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
        <main class="h-screen bg-secondary">
            <div class="section1 grid grid-cols-4 gap-7 p-10">
                <div class="card bg-white flex flex-col items-center justify-center px-2 py-7 rounded">
                    <h1 class="font-extrabold text-primary text-4xl">25k</h1>
                    <h3 class="text-gray-900 font-bold text-xl">CLASSES</h3>
                </div>
                <div class="card bg-white flex flex-col items-center justify-center px-2 py-7 rounded">
                    <h1 class="font-extrabold text-primary text-4xl">600k</h1>
                    <h3 class="text-gray-900 font-bold text-xl">MEMBERS</h3>
                </div>
                <div class="card bg-white flex flex-col items-center justify-center px-2 py-7 rounded">
                    <h1 class="font-extrabold text-primary text-4xl">8k</h1>
                    <h3 class="text-gray-900 font-bold text-xl">TEACHERS</h3>
                </div>
                <div class="card bg-white flex flex-col items-center justify-center px-2 py-7 rounded">
                    <h1 class="font-extrabold text-primary text-4xl">4.8</h1>
                    <h3 class="text-gray-900 font-bold text-xl">APP STORE RATING</h3>
                </div>
               
            </div>

            <h1 class="font-bold text-6xl text-white text-center">Explore Inspiring Online Courses</h1>
            <div class="flex items-center justify-center py-7">
                <input type="text" class="w-4/5 p-3 rounded-full border-2 border-white bg-transparent items-center text-white font-bold focus:border-primary active:borer-primary" placeholder="search..">
            </div>




            <div class=" flex items-center justify-center gap-3 px-3 flex-wrap">
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold active text-white rounded-full px-3 py-1 my-2 active" id="featured">Featured</div>
                </div>
                
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="Music">Music</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="Drawing_Painting">Drawing & Painting</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="finance_entrepreneurship">Finance and Entrepreneurship</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="Marketing">Marketing</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="Animation">Animation</div>
                </div><div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="social_media">Social media</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="ui_ux">UI/UX design</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="featured">Featured</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="writing">Creative writing</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="graphic_design">Graphic design</div>
                </div>
                <div class="part1  flex  items-center justify-center">
                    <div class="w-auto border-2 borer-white bg-transparent font-bold  text-white rounded-full px-3 py-1 my-2" id="Programming">Programming</div>
                </div>
               
       
            </div>
            <div class="cards flex justify-start items-center flex-wrap gap-3 p-5 bg-secondary">

                <div class="card rounded w-96 h-96 p-3 drop-shadow-md bg-white flex flex-col justify-between items-center">
                    <div class="h-48 w-full"><img src="{{asset("img/hero_8.webp")}}" alt="" srcset="" class="h-full w-full"></div>
                    <div class="flex flex-col center items center w-full p-2">
                        <div class="numstud text-gray-500 font-md"><span id="num_stud" class="font-bold">53646 </span> Students</div>
                        <h1 class="font-bold text-xl">Proutivity for creative people and teams</h1>
                       <div class="flex justify-between items-start pt-1">
                        <h3 class="font-secondary mb-1">Course by <span id="course_owner" class="font-bold text-secondary"> Ali Abdal</span></h3>
                       </div>
                       <button class="bg-primary text-secondary font-bold rounded p-1 pt-3">start course</button>
                    </div>  
                </div>
                <!--test break-->
                <div class="card rounded w-96 h-96 p-3 drop-shadow-md bg-white flex flex-col justify-between items-center">
                    <div class="h-48 w-full"><img src="{{asset("img/hero_8.webp")}}" alt="" srcset="" class="h-full w-full"></div>
                    <div class="flex flex-col center items center w-full p-2">
                        <div class="numstud text-gray-500 font-md"><span id="num_stud" class="font-bold">53646 </span> Students</div>
                        <h1 class="font-bold text-xl">Proutivity for creative people and teams</h1>
                       <div class="flex justify-between items-start pt-1">
                        <h3 class="font-secondary mb-1">Course by <span id="course_owner" class="font-bold text-secondary"> Ali Abdal</span></h3>
                       </div>
                       <button class="bg-primary text-secondary font-bold rounded p-1 pt-3">start course</button>
                    </div>  
                </div>
                                <!--test break-->
                                <div class="card rounded w-96 h-96 p-3 drop-shadow-md bg-white flex flex-col justify-between items-center">
                                    <div class="h-48 w-full"><img src="{{asset("img/hero_8.webp")}}" alt="" srcset="" class="h-full w-full"></div>
                                    <div class="flex flex-col center items center w-full p-2">
                                        <div class="numstud text-gray-500 font-md"><span id="num_stud" class="font-bold">53646 </span> Students</div>
                                        <h1 class="font-bold text-xl">Proutivity for creative people and teams</h1>
                                       <div class="flex justify-between items-start pt-1">
                                        <h3 class="font-secondary mb-1">Course by <span id="course_owner" class="font-bold text-secondary"> Ali Abdal</span></h3>
                                       </div>
                                       <button class="bg-primary text-secondary font-bold rounded p-1 pt-3">start course</button>
                                    </div>  
                                </div>
                                                <!--test break-->
                <div class="card rounded w-96 h-96 p-3 drop-shadow-md bg-white flex flex-col justify-between items-center">
                    <div class="h-48 w-full"><img src="{{asset("img/hero_8.webp")}}" alt="" srcset="" class="h-full w-full"></div>
                    <div class="flex flex-col center items center w-full p-2">
                        <div class="numstud text-gray-500 font-md"><span id="num_stud" class="font-bold">53646 </span> Students</div>
                        <h1 class="font-bold text-xl">Proutivity for creative people and teams</h1>
                       <div class="flex justify-between items-start pt-1">
                        <h3 class="font-secondary mb-1">Course by <span id="course_owner" class="font-bold text-secondary"> Ali Abdal</span></h3>
                       </div>
                       <button class="bg-primary text-secondary font-bold rounded p-1 pt-3">start course</button>
                    </div>  
                </div>
                
                         

            </div>


           



        </main>












































































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
