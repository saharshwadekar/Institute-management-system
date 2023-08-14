<?php include("../actions/checkteacher.php") ?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>

<div class="flex overflow-hidden bg-white">
  
<!-- Aside | Sidebar -->
<?php include("sidebar.php")?>

  <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
  <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
  <main>
      <div class="pt-6 px-4">
          
      <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-4 gap-4 content-center">
          <div class="bg-white shadow rounded-lg p-4 sm:p-6 2xl:col-span-2" >

            <div class="mb-4 flex items-center justify-between">
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Take Attendance (Today's Date :
                        <?php echo $todaysDate = date("m-d-Y"); ?>)</h3>
              </div>
            </div>
            <div class="flex flex-col m-8">
                <div class="col-span-3">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <form action="" method="POST">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3 xl:col-span-2">
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
                                <div class="col-span-6 sm:col-span-3 xl:col-span-4">
                                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                    <select name="dept" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="NULL" selected="">Select Department</option>
                                                <?php
                                                $depquery = "SELECT * FROM department";
                                                $depresult = mysqli_query($db_conn, $depquery);
                                                // $row = mysqli_fetch_object($result);
                                                while ($deprow = mysqli_fetch_object($depresult)) {
                                                    ?>
                                                    <option value="<?php echo ucfirst($deprow->id) ?>"><?php echo ucfirst($deprow->name) ?>
                                                    </option>
                                                <?php } ?>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3 xl:col-span-2">
                                    <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section</label>
                                    <select name="sec" id="section" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="NULL" selected="">Select Section</option>
                                                <?php
                                                $secquery = "SELECT * FROM section";
                                                $secresult = mysqli_query($db_conn, $secquery);
                                                // $row = mysqli_fetch_object($result);
                                                while ($secrow = mysqli_fetch_object($secresult)) {
                                                    ?>
                                                    <option value="<?php echo ucfirst($secrow->id) ?>"><?php echo ucfirst($secrow->name) ?>
                                                    </option>
                                                <?php } ?>

                                              </select>
                                </div>
                                <div class="col-span-3 sm:col-span-3 xl:col-span-2">
                                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                    <input type=date placeholder="By Default (<?=date('Y-m-d')?>)" name="selected_date" id="date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>

                                <div class="col-span-6 sm:col-full mx-auto">
                                    <button type="submit" name="takeattendance" class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Take Attendance</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
          </div>

          <?php

          if (isset($_POST['takeattendance'])) {

              $year = $_POST['year'];
              $dept = $_POST['dept'];
              $sec = $_POST['sec'];


              $date = $_POST['selected_date'];
              ?>
          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 2xl:col-span-2">

            <div class="mb-4 flex items-center justify-between">

            </div>

            <div class="flex flex-col m-8">
                <div class="col-span-3">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="flex flex-col">
                            <div class="overflow-x-auto">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden shadow">
                                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                            <thead class="bg-gray-100 dark:bg-gray-700">
                                            <form action="" method="POST">
                                                <tr>
                                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Student ID</th>
                                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Roll no.</th>
                                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Student Name</th>
                                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Present/Absent</th>
                                                </tr>
                                            </thead>


                                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                            <?php
                                            $extract_user_query = 'SELECT * FROM user,student  WHERE user.user_type="student" AND user.id = student.id AND student.yearid = ' . $year . ' AND student.departmentid = ' . $dept . ' AND student.sectionid = ' . $sec . '';
                                            $result = mysqli_query($db_conn, $extract_user_query);
                                            // $row = mysqli_fetch_object($result);
                                            while ($row = mysqli_fetch_object($result)) {
                                                ?>
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                                    <td class="p-4 text-base font-semibold text-gray-900 dark:text-white"><?php echo ucfirst($row->id) ?></td>
                                                    <td class="p-4 text-base font-semibold text-gray-900 dark:text-white"><?php echo ucfirst($row->rollno) ?></td>
                                                    <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                                      <?php echo ucfirst($row->firstname); ?>
                                                      <?php echo ucfirst($row->lastname) ?></td>
                                                    <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                                        
                                                        <span class="flex items-center">
                                                            <input checked id="present" value=<?= ($row->id) ?> type="radio" value="" name="presentattendance[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="present" class="mr-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Present</label>
                                            
                                                            <input id="absent" type="radio" value=<?= ($row->id) ?> name="absentattendance[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="absent" class="mr-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Absent</label>
                                                        </span>

                                                    </td>

                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <div class="card-footer text-end text-muted">
                                                    <div class="col-12 mt-3">
                                                        <button type="submit" name="submitattendance"
                                                            class="btn btn-outline-success ">Submit</button>
                                                    </div>
                                                </div>

                                            </tr>
                                        </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
          </div>
          <?php
          } ?>


        </div>

      </div>
    </main>


    <?php

if (isset($_POST['submitattendance'])) {

    date_default_timezone_set("Asia/Calcutta");

    $year = $_POST['year'];
    $dept = $_POST['dept'];
    $sec = $_POST['sec'];

    $currentdate = date('Y-m-d');
    $email = $_SESSION['useremail'];

    $query = "SELECT user.id FROM user WHERE user.email = '$email'"; 
    $resultid = mysqli_query($db_conn,$query);
    $resrow = mysqli_fetch_object($resultid);
    
    $teacherid = $resrow->id;
    $sql = "SELECT allotment.subjectid FROM allotment WHERE allotment.teacherid = '$teacherid' AND allotment.yearid = '$year' AND allotment.departmentid = '$dept' AND allotment.sectionid = '$sec'";

    $resultsub = mysqli_query($db_conn,$sql);

    if(!mysqli_num_rows($resultsub))
    {
        die("you cannot take attendance of student due to no allotment of subject");
    }

    $subrow = mysqli_fetch_object($resultsub);

    $sub = $subrow->subjectid;


    if ($_POST['selected_date'] == NULL) {
        $currentdate = date("Y-m-d");
    } else {
        $currentdate = $_POST['selected_date'];
    }

    $attendance_month = date("M", strtotime($currentdate));
    $attendance_year = date("Y", strtotime($currentdate));


     if (isset($_POST['presentattendance'])) {
        $presentstudents = $_POST['presentattendance'];
        $status = "P";

        foreach ($presentstudents as $id => $value) {

            $sql = "SELECT * FROM attendance WHERE attendance.studentid = '$value' AND attendance.date = '$currentdate' AND attendance.subjectid = '$sub' ";
            $isAttendance = mysqli_query($db_conn, $sql) or die(mysqli_error($db_conn));

            if (mysqli_num_rows($isAttendance)) {

                $sql = "UPDATE attendance SET attendance.status = 'P' WHERE attendance.studentid = '$value' AND  attendance.date = '$currentdate ' AND attendance.subjectid = '$sub'";
                mysqli_query($db_conn, $sql) or die(mysqli_error($db_conn));
            } else {

                $sql = "INSERT INTO attendance (No, studentid, yearid, departmentid, sectionid, subjectid, Status, Date, month, year) VALUES (NULL, '" . $value . "', '" . $year . "', '" . $dept . "', '" . $sec . "', '" . $sub . "', '" . $status . "', '" . $currentdate . "', '" . $attendance_month . "', '" . $attendance_year . "');";
                mysqli_query($db_conn, $sql);
            }

        }
    }

    if (isset($_POST['absentattendance'])) {
        $absentstudents = $_POST['absentattendance'];
        $status = "A";

        foreach ($absentstudents as $index => $value) {

            $sql = "SELECT * FROM attendance WHERE attendance.studentid = '$value' AND attendance.date = '$currentdate' AND attendance.subjectid = '$sub' ";
            $isAttendance = mysqli_query($db_conn, $sql) or die(mysqli_error($db_conn));

            if (mysqli_num_rows($isAttendance)) {

                $sql = "UPDATE attendance SET attendance.status = 'A' WHERE attendance.studentid = '$value' AND  attendance.date = '$currentdate ' AND attendance.subjectid = '$sub'";
                mysqli_query($db_conn, $sql) or die(mysqli_error($db_conn));
            } else {

                $sql = "INSERT INTO attendance (No, studentid, yearid, departmentid, sectionid, subjectid, Status, Date, month, year) VALUES (NULL, '" . $value . "', '" . $year . "', '" . $dept . "', '" . $sec . "', '" . $sub . "', '" . $status . "', '" . $currentdate . "', '" . $attendance_month . "', '" . $attendance_year . "');";

                mysqli_query($db_conn, $sql);
            }
        }
    }
}
?>

    

<?php include("../public/footer.php")?>