<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../public/js/saved_resource.js"></script>
    <link href="../public/css/c.css" rel="stylesheet" />
    <link rel="stylesheet" href="../public/css/tw-elements.min.css" />
    <script src="../public/js/3.3.0.js"></script>
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="../public/js/script.js"></script>
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          fontFamily: {
            sans: ["Roboto", "sans-serif"],
            body: ["Roboto", "sans-serif"],
            mono: ["ui-monospace", "monospace"],
          },
        },
        corePlugins: {
          preflight: false,
        },
      };
    </script>

  </head>
  <body>
  <div>
<nav class="bg-white border-b border-gray-200 fixed z-30 w-full ">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button
          id="toggleSidebarMobile"
          aria-expanded="true"
          aria-controls="sidebar"
          class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded"
        >
          <svg
            id="toggleSidebarMobileHamburger"
            class="w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <svg
            id="toggleSidebarMobileClose"
            class="w-6 h-6 hidden"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
        <a
          href=""
          class="text-xl font-bold flex items-center lg:ml-2.5"
        >
          <img
            src="../public/imgs/logo.svg"
            class="h-6 mr-2"
            alt="Windster Logo"
          />
          <span class="self-center whitespace-nowrap"
            >Institute Management System</span
          >
        </a>
      </div>
      <div class="flex items-center">
        <button
          id="toggleSidebarMobileSearch"
          type="button"
          class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg"
        >
          <span class="sr-only">Search</span>
        </button>
        <div class="hidden lg:flex items-center">
          <div class="-mb-1">
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>