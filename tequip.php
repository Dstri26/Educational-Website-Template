<style>
    h3{

        border-bottom: 1px solid black !important;
        font-family: 'Alegreya SC', serif !important;

    }
    #more {display: none;}
    #more1 {display: none;}
</style>
<!-- Header -->
<?php
    include "components/common/header.php";
?>
<!-- Navbar -->
<?php
    include "components/common/navbar.php";
?>

<section style="background:#BCDBF0">
    <!-- Main section of the page -->
    <div class="container">
        <h3>TEQUIP</h3><br/>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class = "card-title">TEQUIP - II</div><br/>
                        The College is proud to receive grants from World Bank through MHRD, Govt. of India under Technical Education Quality Improvement Programme – II (TEQIP-II) (Sub Component 1.1) towards improvement in teaching, learning, training and employability process. Under this TEQIP scheme the College has received financial grant of Rs. 2.0 Crores in 1st Phase out of Rs. 10.0 crores for various Departments. Also <span id = "dots">...</span><span id="more">proportionate fund are utilized towards training of faculty members in top-level foreign universities for enhancement of advanced knowledge in Engineering / Basic Sciences fields and technical staff, organizing Seminar/Conferences, establishing Finishing Schools, academic support for weaker students etc and other related workshops for developmental work to strengthen the Institute in teaching, learning and employment in academics, research, consultancy and other services. Under this scheme financial assistanceship to some Non-GATE M.Tech. students amounting to Rs. 8000/- per month per student are provided. Similarly, through TEQIP the College is admitting full time regular Ph.D. students in various Departments with financial assistanceship of Rs. 18,000/- per month per student to the selected candidates At present 20 Ph.D. students in various Departments are working on full-time regular basis. This TEQIP-II programme is supervised by the Board of Governors (BOG) of TEQIP and Principal through a regulated TEQIP Cell having TEQIP Coordinator, various Nodal Officers and faculty members.<br/>http://cet.edu.in/view_notice_details.php?recid=143<br/>

                        http://cet.edu.in/view_notice_details.php?recid=73<br/>

                        http://cet.edu.in/view_notice_details.php?recid=109<br/>

                        http://cet.edu.in/view_notice_details.php?recid=110<br/>

                        http://cet.edu.in/view_notice_details.php?recid=149</span><br/><br/>
                        <div class = "text-center">
                            <button onclick="more()" id="myBtn" class = "btn btn-primary" style = "display: inline-block;">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                <div class="card-body">
                        <div class="card-title">
                            TEQUIP- III
                        </div>
                        Minutes of 1st BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=237<br/>

                        

                        Minutes of 2nd BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=241<br/>

                        

                        Minutes of 3rd BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=322<br/>

                        

                        Minutes of 4th BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=337

                        

                        <span id = "dots1">...</span><span id = "more1">

                        Minutes of 5th BOG <br/>

                        http://cet.edu.in/view_notice_details.php?recid=338<br/>  

                        Minutes of 6th  BOG<br/>

                        http://www.cet.edu.in/view_notice_details.php?recid=339<br/>

                        

                        Minutes of 7th BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=371<br/>

                        

                        Minutes of 8th BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=373<br/>

                        

                        Minutes of 9th BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=383<br/>

                        

                        Minutes of 10th BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=385 <br/>

                        

                        Minutes of 11th BOG<br/>

                        http://cet.edu.in/view_notice_details.php?recid=397</span><br/><br/>
                        <div class = "text-center">
                            <button onclick="more1()" id="myBtn1" class = "btn btn-primary" style = "display: inline-block;">Read more</button>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div><br/>
</section>

<script src="assets/js/more.js"></script>
<script>
    function more1() {
        var dots = document.getElementById("dots1");
        var moreText = document.getElementById("more1");
        var btnText = document.getElementById("myBtn1");
    
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>
<!-- Footer -->
<?php
    include "components/common/footer.php";
?>