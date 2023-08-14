<?php include("../actions/checkadmin.php") ?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>
<?php
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    mysqli_query($db_conn, "DELETE FROM user WHERE user.id = $id;") or die("Deletion user not possible");
    mysqli_query($db_conn, "DELETE FROM teacher WHERE teacher.id = $id;") or die("Deletion teacher not possible");
    //mysqli_query($db_conn, "DELETE FROM student WHERE student.id = $id;") or die("Deletion student not possible");
}
?>

<?php

if (isset($_POST['allotteacher'])) {
    $tea = $_POST['tea'];
    $dept = $_POST['dept'];
     $year = $_POST['year'];
    $sec = $_POST['sec'];
    $sub = $_POST['sub'];

    $sql = "SELECT * FROM allotment WHERE teacherid = '$tea' AND yearid = '$year' AND departmentid = '$dept' AND sectionid = '$sec' ";
    $res = mysqli_query($db_conn, $sql) or die(mysqli_error($db_conn));
    $row = mysqli_fetch_object($res);
    if (!mysqli_num_rows($res)) {
        mysqli_query($db_conn, "INSERT INTO allotment (teacherid, yearid, departmentid, sectionid, subjectid) VALUES ('".$tea . "', '" . $year . "', '" . $dept . "', '" . $sec . "', '" . $sub . "')") or die(mysqli_error($db_conn));
    } else {
        echo "Already Existed";
        header('Location: teacher.php');
    }
    header('Location: teacher.php');
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
                <h3 class="text-xl font-bold text-gray-900 mb-2">Teacher</h3>
              </div>
              <div class="flex-shrink-0">
                <a href="newteacher.php" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2" >Add new Teacher</a>
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
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Name</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Email</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Phone no.</th>
                                        <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400 inline-block">Actions</th>
                                    </tr>
                                </thead>


                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <?php
                                    $extract_user_query = 'SELECT * FROM user WHERE user_type="teacher"';
                                    $result = mysqli_query($db_conn, $extract_user_query);
                                    // $row = mysqli_fetch_object($result);
                                    while ($row = mysqli_fetch_object($result)) {
                                    ?>
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                            <?php echo ucfirst($row->id) ?>
                                        </td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                            <?php echo ucfirst($row->firstname); ?>
                                            <?php echo ucfirst($row->lastname) ?>
                                        </td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                            <?php echo ucfirst($row->email) ?>
                                        </td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                            <?php echo ucfirst($row->phone) ?>
                                        </td>
                                        <td class="p-4 text-base font-semibold text-gray-900 dark:text-white inline-block">
                                            <form action="" method="POST">
                                                <button type="submit" name=delete value=<?php echo ($row->id) ?> data-modal-toggle="delete-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                    Delete user
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
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Teacher's Allotment</h3>
                    </div>
                </div>

                <div class="flex flex-col">
                <div class="col-span-3">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <form action="" method="POST">

                            <div class="grid grid-cols-6 gap-6">
                                
                                <div class="col-span-6 sm:col-span-6 xl:col-span-6">
                                    <label for="teacher" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teacher</label>
                                    <select name="tea" id="teacher" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="NULL" selected="">Select Teacher</option>
                                            <?php
                                            $teaquery = "SELECT * FROM user WHERE user_type = 'teacher'";
                                            $tearesult = mysqli_query($db_conn, $teaquery);
                                            // $row = mysqli_fetch_object($result);
                                            while ($tearow = mysqli_fetch_object($tearesult)) {
                                                ?>
                                                <option value="<?php echo ($tearow->id) ?>"><?php echo ucfirst($tearow->firstname) . " " . ucfirst($tearow->lastname) ?>
                                                </option>
                                            <?php } ?>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3 xl:col-span-3">
                                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                    <select name="dept" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="NULL" selected="">Select Department</option>
                                                <?php
                                                $depquery = "SELECT * FROM department";
                                                $depresult = mysqli_query($db_conn, $depquery);
                                                // $row = mysqli_fetch_object($result);
                                                while ($deprow = mysqli_fetch_object($depresult)) {
                                                    ?>
                                                    <option value="<?php echo ($deprow->id) ?>"><?php echo ucfirst($deprow->name) ?>
                                                    </option>
                                                <?php } ?>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3 xl:col-span-3">
                                    <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                                    <select name="year" id="year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="NULL" selected="">Select Year</option>
                                                <?php
                                                $yequery = "SELECT * FROM years";
                                                $yeresult = mysqli_query($db_conn, $yequery);
                                                // $row = mysqli_fetch_object($result);
                                                while ($yerow = mysqli_fetch_object($yeresult)) {
                                                    ?>
                                                    <option value="<?php echo $yerow->id ?>"><?php echo $yerow->year ?>
                                                    </option>
                                                <?php } ?>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3 xl:col-span-3">
                                    <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section</label>
                                    <select name="sec" id="section" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="NULL" selected="">Select Section</option>
                                                <?php
                                                $secquery = "SELECT * FROM section";
                                                $secresult = mysqli_query($db_conn, $secquery);
                                                // $row = mysqli_fetch_object($result);
                                                while ($secrow = mysqli_fetch_object($secresult)) {
                                                    ?>
                                                    <option value="<?php echo ($secrow->id) ?>"><?php echo ucfirst($secrow->name) ?>
                                                    </option>
                                                <?php } ?>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3 xl:col-span-3">
                                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                                    <select name="subject" id="sub" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="NULL" selected="">Select Subject</option>
                                                <?php
                                                $subquery = "SELECT * FROM subject";
                                                $subresult = mysqli_query($db_conn, $subquery);
                                                // $row = mysqli_fetch_object($result);
                                                while ($subrow = mysqli_fetch_object($subresult)) {
                                                    ?>
                                                    <option value="<?php echo ucfirst($subrow->id) ?>"><?php echo ucfirst($subrow->name) ?>
                                                    </option>
                                                <?php } ?>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-full mx-auto">
                                    <button type="submit" name="allotteacher" class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>
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