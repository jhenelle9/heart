
<?php $__env->startSection('title','Add Courses'); ?>
<?php $__env->startSection('main'); ?>
          <section class="text-blueGray-700 ">
            <div class="container items-center px-5 py-8 mx-auto lg:px-24">
              <div class="flex flex-wrap justify-center mx-auto mb-12 divide-y-2 lg:divide-x-2 lg:divide-y-0">
                <div class="w-full p-4 lg:w-1/2">
                  <div class="p-4 lg:p-8 ">
                    <div class="flex flex-col w-full mx-auto my-6 md:mt-0">
<div class="relative mt-4">
                            <form action="courseadd" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                <label class="text-base leading-7 text-blueGray-500" for="course">Enter Course Name Here</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="text" id="course" name="course" required placeholder="Course Name Here...">
                <label class="text-base leading-7 text-blueGray-500" for="subject">Select Course Subject</label><br>
                <select required name="subject" id="subject">
                    <option value="">math</option>
                </select>
</div>
<div class="relative mt-4">
                <label class="text-base leading-7 text-blueGray-500" for="start">Start Date Here</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="date" id="start" name="start" required placeholder="">
                <label class="text-base leading-7 text-blueGray-500" for="end">End Date Here</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="date" name="end" required id="end">
</div>
<div class="relative mt-4">
                <label class="text-base leading-7 text-blueGray-500" for="parish">Enter Course Parish Location</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="text" name="parish" required id="parish">
                <label class="text-base leading-7 text-blueGray-500" for="address">Enter Course Address</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="text" name="address" required id="address">
                <label class="text-base leading-7 text-blueGray-500" for="certification">Course Certification</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="text" name="certification" required id="certification">
                <label class="text-base leading-7 text-blueGray-500" for="modality">Course Modality</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="text" name="modality" id="modality" required placeholder="PLEASE ENTER COURSE MODALITY HERE">
</div>
<div class="relative mt-4">
                <label class="text-base leading-7 text-blueGray-500" for="appenddate">Application End Date</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="date" required name="appenddate" id="appenddate">
                <label class="text-base leading-7 text-blueGray-500" for="image">Select Course Image</label>
                <input class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" type="file" required name="image" id="image">
                <label class="text-base leading-7 text-blueGray-500" for="description">Add Your Description To The Box Here</label>
                <textarea name="description" required id="description" cols="30" rows="10"></textarea>
                <button type="submit" class="w-full px-16 py-2 my-2 mr-2 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Button </button>
                </form>
</div>
                    </div>
                  </div>
                </div>
                <div class="w-full p-4 lg:w-1/2">
                  <div class="p-4 lg:p-8">
                    <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font"> New? Subject. </h1>
                    <form action="subjected" method="POST" style="display:inline-grid;">
                        <?php echo csrf_field(); ?>
                          <input type="text" id="subject" name="subject" required placeholder="Add Subject Here......"  class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                        </form>
                        <button type="submit" class="w-full px-16 py-2 my-2 mr-2 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Button </button>
                      </div>

                </div>
                </div>
              </div>
            </div>
          </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.dash_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Heart_Project\resources\views/Admin/add-course.blade.php ENDPATH**/ ?>