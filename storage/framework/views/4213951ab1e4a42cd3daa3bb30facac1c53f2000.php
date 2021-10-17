<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cou.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">  
    <style>
      .modal {
        transition: opacity 0.25s ease;
      }
      body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
      }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body class="flex items-center justify-center" style="background: #090814;">
    <div class="min-h-screen w-screen flex">
  <div class="py-12 px-10 w-1/4">
    <div class="flex space-2 items-center border-b-2 pb-4">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <div class="ml-3">
        <h1 class="text-3xl font-bold text-indigo-600">Mitchell's</h1>
        <p class="text-center text-sm text-indigo-600 mt-1 font-serif">DASHBOARD</p>
      </div>
    </div>
    <a href="/admin/dashboard"><div class="flex items-center space-x-4 mt-6 p-2 bg-indigo-600 rounded-md">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path>
        </svg>
      </div>
     
     <div>
        <p class="text-lg text-white font-semibold">Dashboard</p>
      </div>
    </div></a>
    <div class="mt-8">
      <ul class="space-y-10">
        <li>
          <a href="/admin/applicant" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
            </svg>
            Applicant Activity</a>
        </li>
        <li>
          <a href="/admin/courses" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
            </svg>
            Courses</a>
        </li>
      
        <li>
          <a href="/admin/payments" class="flex items-centerx text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Payments</a>
        </li>
        <li>
          <a href="/gallery" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600="">
            <div class="mr-4 my-auto">
                <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 3H3C2 3 1 4 1 5v14c0 1.1.9 2 2 2h18c1 0 2-1 2-2V5c0-1-1-2-2-2zM5 17l3.5-4.5 2.5 3.01L14.5 11l4.5 6H5z"></path></svg>            </div>
              </a>
<div class="flex-auto my-1">
    <a href="/admin/gallery" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600="" style="position: relative;left: 39px;bottom: 24px;">
            Gallery</a>
        </div></li>
      </ul>
    </div>
    <div class="flex mt-20 space-x-4 items-center">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
        </svg>
      </div>
      <a href="/login" class="block font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">Logout</a>
    </div>
  </div>
  <div class="bg-indigo-50 flex-grow py-12 px-10">
    <div class="flex justify-between">
      <div>
        <h4 class="text-sm font-bold text-indigo-600">Hi User,</h4>
        <h1 class="text-4xl font-bold text-indigo-900 mt-">Welcome To Mitchell's Instute Of Learning Admin Pannel!</h1>
      </div>
      
      
    </div>
    <?php echo $__env->yieldContent('main'); ?>
    
  </div>
</div>


</body></html><?php /**PATH C:\xampp\htdocs\Heart_Project\resources\views/Layouts/dash_layout.blade.php ENDPATH**/ ?>