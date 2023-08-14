<?php include("../actions/checkstudent.php") ?>
<?php include("../public/header.php")?>
<?php include("../includes/config.php") ?>

<div class="flex overflow-hidden bg-white">
  
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
                    <h3 class="text-xl font-bold text-gray-900 mb-2">My Marks</h3>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="col-span-3">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="flex flex-col">
                            <div class="overflow-x-auto">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden shadow">
                                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                            <thead class="bg-gray-100 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">Subject Name</th>
                                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">CAT-1(Out of 15)</th>
                                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">CAT-2(Out of 15)</th>
                                                    <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">End Sem(Out of 70)</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                            <?php
                            $email = $_SESSION['useremail'];
                            $user = "SELECT user.id as id , student.departmentid as departmentid ,student.yearid as yearid FROM user,student WHERE email = '$email' AND user.id = student.id ";
                            $userresult = mysqli_query($db_conn, $user);
                            $userrow = mysqli_fetch_object($userresult);

                            $subquery = "SELECT * FROM subject WHERE subject.departmentid = '$userrow->departmentid'";
                            $subresult = mysqli_query($db_conn, $subquery);

                            $totalsubject = mysqli_num_rows($subresult);
                            while ($subrow = mysqli_fetch_object($subresult)) {
                                ?>
                                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                                    <td class="p-4 text-base font-semibold text-gray-900 dark:text-white"><?= $subrow->name ?></td>
                                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                                    <td class="p-4 text-base font-semibold text-gray-900 dark:text-white">
                                                    <?php
                                                    $examquery = "SELECT mark FROM marks WHERE marks.studentid = '$userrow->id' and marks.yearid = '$userrow->yearid' and marks.examid = '$i' and marks.subjectid = '$subrow->id';";
                                                    $resquery = mysqli_query($db_conn, $examquery);
                                                    $exrow = mysqli_fetch_object($resquery);
                                                    echo $exrow->mark;
                                                    ?>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php
                            }
                            ?>
                                                
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
          </div>


        </div>
        




        

      </div>
    </main>
    

<?php include("../public/footer.php")?>