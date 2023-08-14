<!--Common Header -->
<?php include("../actions/checkadmin.php")?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>

<?php
if (isset($_POST['querysubmit'])) {

    $sql = 'SELECT MAX(id) AS lastid FROM department;';
    $selresult = mysqli_query($db_conn,$sql);
    $id;
    if ($selresult->num_rows > 0) {
        $row = mysqli_fetch_object($selresult);
        $last_id = $row->lastid;
    
        // Calculate the next roll number
        $nextid = $last_id + 1;
    
        // Display the next roll number
        $id = $nextid;
    } else {
        // If there are no records in the table, start with roll number 1
        $id = 1;
    }
    $Dept = $_POST['Depatment'];

    mysqli_query($db_conn, "INSERT INTO department (id,name) VALUES ('$id', '$Dept');") or die("Department Table error");

}
?>


<div class="flex overflow-hidden bg-white">
  
<!-- Aside | Sidebar -->
<?php include("sidebar.php")?>

  <div
    class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10"
    id="sidebarBackdrop"
  ></div>
  <div
    id="main-content"
    class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64"
  >
    <main>
      <div class="pt-6 px-4">
      <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <span
                  class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">2,340</span>
                <h3 class="text-base font-normal text-gray-500">Total Students</h3>
              </div>
              <div
                class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                14.6%
                <svg
                  class="w-5 h-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
            </div>
          </div>

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <span
                  class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"
                  >5,355</span
                >
                <h3 class="text-base font-normal text-gray-500">
                  Total Teachers
                </h3>
              </div>
              <div
                class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold"
              >
                32.9%
                <svg
                  class="w-5 h-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
            </div>
          </div>

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <span
                  class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"
                  >5,355</span
                >
                <h3 class="text-base font-normal text-gray-500">
                  Total Admins
                </h3>
              </div>
              <div
                class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold"
              >
                32.9%
                <svg
                  class="w-5 h-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
            </div>
          </div>

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <span
                  class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"
                  >5,355</span
                >
                <h3 class="text-base font-normal text-gray-500">
                  Total Departments
                </h3>
              </div>
              <div
                class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold"
              >
                32.9%
                <svg
                  class="w-5 h-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
            <h3
              class="text-xl leading-none font-bold text-gray-900 mb-10"
            >
              Add a new Department
            </h3>
            <div class="block">
              <div class="flex align-content justify-center mt-auto">
                <div class="w-full max-w-xs">
                  <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 my-4">
                    <div class="mb-4">
                      <label
                        class="block text-grey-darker text-sm font-bold mb-2"
                        for="username"
                      >
                        Department Name:
                      </label>
                      <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline"
                        id="username"
                        type="text"
                        name="Depatment"
                        placeholder="Enter new Department"
                      />
                    </div>
                    <div class="flex items-center justify-center">
                      <button
                        class="bg-gradient-to-r from-sky-600 to-cyan-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" name="querysubmit"
                      >
                        Submit
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
            <h3
              class="text-xl leading-none font-bold text-gray-900 mb-10"
            >
              Departments Overview
            </h3>
            <div class="block w-full overflow-x-auto">
              <!-- component -->
              <canvas class="p-1 ml-40 mr-40" id="chartPie"></canvas>


              <!-- Required chart.js -->
              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <!-- Chart pie -->
              <script>
                const dataPie = {
                  labels: ["Computer Engineering", "Information Technology", "Data Science"],
                  datasets: [
                    {
                      label: "",
                      data: [300, 50, 100],
                      backgroundColor: [
                        "#164B60",
                        "#435B66",
                        "#1B6B93",
                      ],
                      hoverOffset: 4,
                    },
                  ],
                };

                const configPie = {
                  type: "pie",
                  data: dataPie,
                  options: {},
                };

                var chartBar = new Chart(
                  document.getElementById("chartPie"),
                  configPie
                );
              </script>


            </div>
          </div>

        </div>

      </div>
    </main>
    

<?php include("../public/footer.php")?>