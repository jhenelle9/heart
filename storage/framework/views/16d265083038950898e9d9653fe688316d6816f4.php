
<?php $__env->startSection('title','Gallery'); ?>
<?php $__env->startSection('main'); ?>
<br><br>

<button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open Modal</button>
 <br><br> 
<div>
    <div class="flex">
        <div class="max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-3">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-56 p-4" style="background-image: url(https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
 
                </div>
                <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                    <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Realtor</div>
                    <div class="flex items-center pt-2">
                                   </div>
                        <div>
                            <p class="font-bold text-gray-900">Tiffany Heffner</p>
                            <p class="text-sm text-gray-700">(555) 555-4321</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



































<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
  
  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    
    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
      <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
      </svg>
      <span class="text-sm">(Esc)</span>
    </div>

    <!-- Add margin if you want to see some of the overlay behind the modal-->
    <div class="modal-content py-4 text-left px-6">

        <div class="container items-center px-5 py-12 lg:px-20">
            <form class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
            <div class="relative pt-4">
                <label for="name" class="text-base leading-7 text-blueGray-500">Title</label>
                <input type="email" id="email" name="email" placeholder="name" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
              </div>
              <div class="relative mt-4">
                <label for="name" class="text-base leading-7 text-blueGray-500">Tags</label>
                <input type="email" id="email" name="email" placeholder="name" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
              </div>
              <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                <div class="w-full px-3">
                  <label class="text-base leading-7 text-blueGray-500" for="description"> Description </label>
                  <textarea class="w-full h-32 px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform bg-white border rounded-lg focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 apearance-none autoexpand" id="description" type="text" name="description" placeholder="Message..." required=""></textarea>
                </div>
              </div>
              <div class="flex">
                <label class="flex items-center">
                  <input type="checkbox" class="form-checkbox ">
                  <span class="ml-2 text-blueGray-500">Hide from public </span>
                </label>
              </div>
              <div class="flex items-center w-full pt-4">
                <button class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Button </button>
              </div>
            </form>
          </div>
              <!--Footer-->
      <div class="flex justify-end pt-2">
        <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
        <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
      </div>
      
    </div>
  </div>
</div>

<script>
  var openmodal = document.querySelectorAll('.modal-open')
  for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event){
      event.preventDefault()
      toggleModal()
    })
  }
  
  const overlay = document.querySelector('.modal-overlay')
  overlay.addEventListener('click', toggleModal)
  
  var closemodal = document.querySelectorAll('.modal-close')
  for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
  }
  
  document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
      isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
      isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
      toggleModal()
    }
  };
  
  
  function toggleModal () {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
  }
  
   
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.dash_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Heart_Project\resources\views/Admin/gallery.blade.php ENDPATH**/ ?>