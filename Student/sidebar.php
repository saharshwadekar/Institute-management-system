<aside
    id="sidebar"
    class="ml-[-100%] fixed z-10 top-0 pb-3 px-3 w-full flex flex-col justify-between h-screen border-r bg-white transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[13.5%]"
    aria-label="Sidebar">
    <div>
      <div class="-mx-6 px-6 py-4">
        <a title="home" target="">
          <img
            
            class="w-32"
            alt="IMS logo"
          />
        </a>
      </div>

      <div class="mt-8 text-center">
        <img
          src="https://img.freepik.com/free-icon/user_318-563642.jpg?w=360"
          alt=""
          class="w-10 h-10 m-auto rounded-full object-cover lg:w-28 lg:h-28"
        />
        <h5
          class="hidden mt-4 text-xl font-semibold text-gray-600 lg:block"
        >
          Student's Panel
        </h5>
        <span class="hidden text-gray-400 lg:block"></span>
      </div>

      <ul class="space-y-2 tracking-wide mt-8">
      <!-- Dashboard -->
        <li id="studash">
          <a href="index.php"
            aria-label="dashboard"
            class="relative px-4 py-3 flex items-center space-x-4 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400"
            target=""
          >
            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
              <path
                d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                class="fill-current text-cyan-400 dark:fill-slate-600"
              ></path>
              <path
                d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                class="fill-current text-cyan-200 group-hover:text-cyan-300"
              ></path>
              <path
                d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                class="fill-current group-hover:text-sky-300"
              ></path>
            </svg>
            <span class="-mr-1 font-medium">Dashboard</span>
          </a>
        </li>

      <!-- Attendance -->
      <li id="stuatt">
        <a href="attendance.php"
          class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group"
          target=""
        >
        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"fill="none" viewBox="0 0 17 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 12v5m5-9v9m5-5v5m5-9v9M1 7l5-6 5 6 5-6"/>
        </svg>
          <span class="group-hover:text-gray-700">My Attendance</span>
        </a>
      </li>

      <!-- Grading -->
        <li id="stugrade">
          <a href="grading.php"
            class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group"
            target=""
          >
          <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
          </svg>
            <span class="group-hover:text-gray-700">My Marks</span>
          </a>
        </li>

      </ul>
    </div>

    <div
      class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
      <button
        class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
        </svg>
        <span class="group-hover:text-gray-700">Logout</span>
      </button>
    </div>
  </aside>