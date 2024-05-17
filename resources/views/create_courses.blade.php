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
    <body class="center bg-gray-200" >
        <header class="flex flex-col justify-center items-center my-5">
            <nav class="flex justify-between items-center w-3/4">
                <h1 class="text-xl font-extrabold text-secondary">
                    My 
                   <span class="bg-secondary text-primary font-bold py-1 rounded px-2">space</span>
                </h1>
                <div>
                    <button class="w-auto text-white font-medium bg-gray-900 p-2 rounded px-12 my-2" id="create_course">create course</button>
                    <button class="w-auto text-white font-medium bg-green-500 p-2 rounded px-12"
                    id="myBtn">Edit account Info</button>
                </div>
            </nav>

  

        </header>
        <h1 class="font-bold text-4xl text-secondary text-start p-4 px-5">All your courses</h1>
        <div class="cards flex justify-start items-center flex-wrap gap-3 p-5 bg-gray-200">

            <div class="card rounded w-96 h-96 p-3 drop-shadow-md bg-white flex flex-col justify-between items-center">
                <div class="h-48 w-full"><img src="{{asset("img/hero_8.webp")}}" alt="" srcset="" class="h-full w-full"></div>
                <div class="flex flex-col center items center w-full p-2">
                    <div class="numstud text-gray-500 font-md"><span id="num_stud" class="font-bold">53646 </span> Students</div>
                    <h1 class="font-bold text-xl">Proutivity for creative people and teams</h1>
                   <div class="flex justify-between items-start pt-1">
                    <h3 class="font-secondary mb-1">Course by <span id="course_owner" class="font-bold text-secondary"> Ali Abdal</span></h3>
                   </div>
                   <button class="bg-primary text-secondary font-bold rounded p-1 pt-3">get back to class</button>
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
                   <button class="bg-primary text-secondary font-bold rounded p-1 pt-3">get back to class</button>
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
                                   <button class="bg-primary text-secondary font-bold rounded p-1 pt-3">get back to class</button>
                                </div>  
                            </div>
                                            
            
                     

        </div>


        <div class=" absolute top-14 left-1/4 h-auto w-3/5 bg-white p-10 drop-shadow-md hidden rounded" id="createcourse">
            <span
                class="close2 rounded-full w-7 h-7 p-3 flex items-center justify-center bg-gray-900 text-white">&times;</span>
            <br>

            <form class="">
                <h1 class="font-bold text-2xl center text-gray-900 py-2">Create</h1>
                <p class="py-5">Create New course</p>
                <input name="courseName" type="text" class="w-full p-2 border rounded border-gray-200 my-4"
                    placeholder="course Title" id="course_title">
                    <br>
                    <input name="courseName" type="text" class="w-full p-2 border rounded border-gray-200 my-4"
                    placeholder="course description" id="course_description">
                    <input name="courselink" type="text" class="w-full p-2 border rounded border-gray-200 my-4"
                    placeholder="course video link" id="course_link">
                    <select name="categorie" id="" class="w-full p-2 border rounded border-gray-200 my-4">
                        <option value="default">chose a categorie</option>
                        <option value="Music">Music</option>
                        <option value="Drawing&Painting">Drawing & Painting</option>
                        <option value="FinanceandEntrepreneurship">Finance and Entrepreneurship</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Animation">Animation</option>
                        <option value="Socialmedia">Social media</option>
                        <option value="UI/UXdesign">UI/UX design</option>
                        <option value="Creativewriting">Creative writing</option>
                        <option value="Graphicdesign">Graphic design</option>
                        <option value="Programming">Programming</option>
                        



                    </select>
                    <textarea name="" id="" cols="30" rows="5" class="w-full p-2 border rounded border-gray-200 my-4" placeholder="course content"></textarea>
                    <label for="cover">send cover image</label>
                    <input type="file" name="cover" id="">




                



                <button type="submit"
                    class="w-auto text-white font-medium bg-gray-900 p-2 rounded px-12">finish</button>
            </form>
        </div>































































        <script>
               document.addEventListener('DOMContentLoaded', (event) => {
            // Get the modal
            var modal = document.getElementById("createcourse");

            // Get the button that opens the modal
            var btn = document.getElementById("create_course");

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
