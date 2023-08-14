<?php include("../actions/checkadmin.php") ?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>

<?php
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    mysqli_query($db_conn, "DELETE FROM department WHERE department.id = $id;") or die("Deletion depatment not possible");
}
?>

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

  <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
  <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main>
      <div class="pt-6 px-4">
        <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4 content-center">

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 2xl:col-span-2">
            <div class="mb-4 flex items-center justify-between">
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Department</h3>
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
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Department name</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400 inline-block">Actions</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <?php
                                    $extract_user_query = 'SELECT * FROM department';
                                    $result = mysqli_query($db_conn, $extract_user_query);
                                    // $row = mysqli_fetch_object($result);
                                    while ($row = mysqli_fetch_object($result)) {
                                    ?>
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white"><?php echo ucfirst($row->id) ?></td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white"><?php echo ucfirst($row->name); ?></td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white inline-block">
                                            <form action="" method="POST">
                                                <button name=delete value=<?php echo ($row->id) ?> type="submit" data-modal-toggle="delete-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 2xl:col-span-1">
                <div class="mb-4 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Add Department</h3>
                    </div>
                </div>

                <div class="flex flex-col">
                <div class="col-span-3">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <form action="" method="POST">

                            <div class="grid grid-cols-6 gap-6">
                                
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="deptname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department name</label>
                                    <input type="text" name="Depatment" id="deptname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. Computer Engineering" required="">
                                </div>

                                <div class="col-span-6 sm:col-full mx-auto">
                                    <button class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit" name="querysubmit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

          </div>

        </div>
        




        

      </div>
    </main>
    

<?php include("../public/footer.php")?>