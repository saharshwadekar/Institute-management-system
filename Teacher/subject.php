<!--Common Header -->
<?php include("../public/header.php")?>

<div class="flex overflow-hidden bg-white pt-16">
  
<!-- Aside | Sidebar -->
<?php include("sidebar.php")?>

  <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
  <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main>
      <div class="pt-6 px-4">
        <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2 gap-4 content-center">

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 2xl:col-span-2">
            <div class="mb-4 flex items-center justify-between">
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Subjects</h3>
              </div>
            </div>

            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="min-w-full align-middle">
                        <div class="shadow">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">ID</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Subject name</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">1</td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">Database and Management System</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        




        

      </div>
    </main>
    

<?php include("../public/footer.php")?>