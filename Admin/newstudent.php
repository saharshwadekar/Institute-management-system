<?php include("../actions/checkadmin.php")?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php")?>

<?php

if (isset($_POST['querysubmit'])) {

    // $id = $_POST['id'];
    $type = 'student';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $stu_dept = $_POST['stu_dept'];
    $stu_year = $_POST['stu_year'];
    $stu_sec = $_POST['stu_sec'];


    
    $sql = 'SELECT MAX(id) AS lastid, MAX(rollno) as lastrollno, yearid FROM student WHERE student.departmentid = '.$stu_dept.'';
    $selresult = mysqli_query($db_conn,$sql);
    
    $row = mysqli_fetch_object($selresult);
    if (($row->lastid) and ($row->lastrollno) and ($row->yearid == $stu_year )) {
        $last_id = $row->lastid;
        $last_roll_no = $row->lastrollno;
        // Calculate the next roll number
        $nextid = $last_id + 1;
        $next_roll_no = $last_roll_no + 1;
    
        // Display the next roll number
        $id = $nextid;
    }else{
        $id = ($stu_dept * 1000000) + ($stu_year * 10000) + ($stu_sec * 100) + 1;
        $next_roll_no = 1;
    }

    mysqli_query($db_conn, "INSERT INTO user (id, user_type, firstname, lastname, email, password, address, city, state, phone, genderid) VALUES ('$id', '$type', '$firstname', '$lastname', '$email', '$password', '$address', '$city', '$state', '$phone', '$gender');") or die("Admin Table error");

    mysqli_query($db_conn, "INSERT INTO student (id, departmentid, yearid, sectionid, rollno) VALUES ('$id', '$stu_dept', '$stu_year', '$stu_sec', '$next_roll_no'); ") or die("student Table error");

    header('location: student.php');
}
?>


<div class="flex overflow-hidden bg-white pt-16">
<!-- Aside | Sidebar -->
<?php include("sidebar.php")?>

  <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
  <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
    <main>
      <div class="pt-6 px-4">
        <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4 content-center">
          <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 2xl:col-span-3" >

            <div class="mb-4 flex items-center justify-between">

              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Add a new student</h3>
              </div>

              <div class="flex-shrink-0">
                <a href="student.php" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">All students</a>
              </div>
            </div>

            <div class="flex flex-col m-8">
                <div class="col-span-3">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <form action="" method="POST">
                            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                                    <div>
                                        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture</h3>
                                        <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                            JPG, GIF or PNG. Max size of 800K
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path><path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path></svg>
                                                Upload picture
                                            </button>
                                            <button type="button" class="py-2 px-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Bonnie" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Green" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="bonie@email.cs" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="text" name="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="qwerty" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                    <input type="text" name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. 43, Nagpur" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                    <input type="text" name="city" id="city" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. Nagpur" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
                                    <input type="text" name="state" id="state" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. Maharashtra" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone no.</label>
                                    <input type="number" name="phone" id="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. +(12)3456 789" required="">
                                </div>
                                <div class="col-span-3 sm:col-span-3 xl:col-span-1">
                                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                    <select name="gender" id="gender" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value='NULL' selected>Select Option</option>
                                            <?php
                                            $genquery = "SELECT * FROM gender";
                                            $genresult = mysqli_query($db_conn, $genquery);
                                            // $row = mysqli_fetch_object($result);
                                            while ($genrow = mysqli_fetch_object($genresult)) {
                                                ?>
                                                <option value="<?php echo ucfirst($genrow->genderid) ?>"><?php echo ucfirst($genrow->name) ?>
                                                </option>
                                            <?php } ?>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3 xl:col-span-2">
                                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                    <select name="stu_dept" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected>Select Department</option>
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
                                    <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                                    <select name="stu_year" id="year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected>Select Year</option>
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
                                <div class="col-span-6 sm:col-span-3 xl:col-span-1">
                                    <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section</label>
                                    <select name="stu_sec" id="section" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                                <div class="col-span-6 sm:col-full mx-auto">
                                    <button type="submit" class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" name="querysubmit">Save</button>
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