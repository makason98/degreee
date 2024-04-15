<?session_start();?>
<?php include '../includes/header.php'; ?>
<div class="main ">
<?php include '../includes/menu.php'; ?>
    <div class="main_content">
        <div class="left_right_sidebar_opener">
            <div class="hamburger">
                <i class='bx bx-menu'></i>
            </div>

        </div>
        <div class="main_navbar">
            <div class="search_box">
                <i class='bx bx-search-alt-2'></i>
                <input type="text " placeholder="Search">
            </div>
        </div>
        <div class="menu_item_name_and_filter ">
            <div class="menu_item_name">
                <h2>Database</h2>
            </div>
            <div class="filter_and_sort">
                <div class="sort sort_and_filter">
                    <p>Sort</p>
                    <i class='bx bx-sort-down'></i>
                </div>
                <div class="filter sort_and_filter">
                    <p>Filter</p>
                    <i class='bx bx-filter'></i>
                </div>
            </div>
        </div>
        <div class="tabs">
            <div class="tab_name">
                <p>Student</p>
                <p>Teacher</p>
                <p>Staff</p>
            </div>
            <div class="three_dots">
                <i class='bx bx-dots-vertical-rounded'></i>
            </div>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Class</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td class="profile_name">Gururaj
                    </td>
                    <td>001</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Male</td>
                    <td>gururaj@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name"><img src="https://i.postimg.cc/c1bW8qWT/1656339664529.jpg" alt="img">
                        Sanket
                    </td>
                    <td>012</td>
                    <td>TY BCS</td>
                    <td>20</td>
                    <td>Male</td>
                    <td>sanket@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name"><img src="https://i.postimg.cc/g2M32zcz/image.png" alt="img">
                        Hermione
                    </td>
                    <td>003</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Female</td>
                    <td>Hermione@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name"><img
                        src="https://i.postimg.cc/c1k4jFvZ/alexander-hipp-iEEBWgY_6lA-unsplash.jpg"
                        alt="img">
                        Json
                    </td>
                    <td>009</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Male</td>
                    <td>json@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name"><img src="https://i.postimg.cc/qBbpBPZB/img-2.jpg" alt="img">
                        Rose</td>
                    <td>021</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Female</td>
                    <td>Rose@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name"><img src="https://i.postimg.cc/SRkqKt5t/img2.jpg" alt="img">
                        Lily</td>
                    <td>971</td>
                    <td>SY BCA</td>
                    <td>21</td>
                    <td>Female</td>
                    <td>Lily@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name"><img src="https://i.postimg.cc/9M3C6fB2/img3.jpg" alt="img">
                        Tushar
                    </td>
                    <td>311</td>
                    <td>FY BCA</td>
                    <td>19</td>
                    <td>Male</td>
                    <td>Tushar@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name"><img
                        src="https://i.postimg.cc/xCR77pg2/dahiana-waszaj-XQWfro4LrVs-unsplash.jpg"
                        alt="img">Aliana</td>
                    <td>4011</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Female</td>
                    <td>Aliana@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name"><img src="https://i.postimg.cc/9MXPK7RT/news2.jpg" alt="img">Alex</td>
                    <td>0011</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Male</td>
                    <td>Alex@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name "><img src=" https://i.postimg.cc/qqwr6xHB/img4.jpg " alt="img ">Sieena</td>
                    <td>0041</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Male</td>
                    <td>Sieena@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name "><img src="https://i.postimg.cc/528xwmBq/women_trending_1(1).jpg " alt="img ">Devid</td>
                    <td>0311</td>
                    <td>TY BCA</td>
                    <td>20</td>
                    <td>Male</td>
                    <td>Devid@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name "><img src="https://i.postimg.cc/fy90qvkV/male-photo3.jpg " alt="img ">Josh</td>
                    <td>0041</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Male</td>
                    <td>Josh@gmail.com</td>
                </tr>
                <tr>
                    <td class="profile_name "><img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg " alt="img ">John</td>
                    <td>0013</td>
                    <td>SY BCA</td>
                    <td>19</td>
                    <td>Male</td>
                    <td>John@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</main>

<?php include '../includes/footer.php'; ?>

<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../../vendor/bootstrap/js/popper.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../../vendor/select2/select2.min.js"></script>
<script src="../../vendor/tilt/tilt.jquery.min.js"></script>

<script>
$(document).ready(function () {
    $('.hamburger').click(function () {
        $('.left_sidebar').css({'transform': 'translateX(0)'});
    });

    $('.close_hamburger_btn').click(function () {
        $('.left_sidebar').css({'transform': 'translateX(-150%)'})
    })

});
</script>

</body>
</html>