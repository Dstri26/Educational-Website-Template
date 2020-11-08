<style>
    .desk{

        background-color: rgba(0, 155, 255, 0.5);
    }

    .rounded > img{

        border-radius: 150px;

    }
</style>
<?php
    include "components/common/header.php";
?>
<?php
    include "components/common/videosection.php";
?>
<?php
    include "components/common/navbar.php";
?>
<br/>
<?php
    include "components/vision.php";
?>
<br>

<!-- Principal's desk! -->
<div class="desk text-center">
    <div class="rounded mt-4" style="display: inline-block">
        <img src="assets/img/PKPatra1.jpg" style="border:2px solid white;" alt="Principals desk" width="100" height="100"/>
    </div><br/>
    <div class="container">
        <h3 class="text-center">Prof.&nbsp; Prashant Kumar Patra<br>Principal, CET-B</h3>
        <blockquote>
            College of Engineering and Technology has been a pool of meritorious students consistently for many years. And hence it has always tried to facilitate quality engineering education to equip and enrich young men and women to meet global
            challenges in development, innovation and application of technology in the service of humanity.Ever since its&nbsp;inception, a strong commitment to excellence in&nbsp;teaching and research has made CET, Bhubaneswar one of the top
            most colleges in Odisha. Its rich <span>... <a href="">more</a></span>
        </blockquote>
    </div><br/>
</div>

<!-- Events -->
<div class="events">
    <div class="row" style="padding:5vw;">
        <div class="col-md-4">
                    <div class="timeline"  style="background-color:rgb(0, 155, 255,0.3);">
                        <div class="container py-5">
                            <div class="row" >
                                    <div class="col-md-10 mx-auto" >
                                        <h3>Upcoming Events</h3>
                                        <!-- Timeline -->
                                        <ul class="timeline">
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Title of section 1</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>21 March, 2019</span>
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Title of section 2</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>5 April, 2019</span>
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Title of section 3</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>18 August, 2019</span>
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Title of section 4</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>10 October, 2019</span>
                                            </li>
                                        </ul><!-- End -->
                                        <br>
                                        <button class="btn btn-primary">More Notice</button>
                                    </div>
                            </div>
                        </div>
                </div>
        </div>
        <div class="col-md-8" >
                <h3>Our Events</h3>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRtnqx7pn2jxceIEbriVQd3yUV-quJU-1QYFw&usqp=CAU" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://scontent.fbbi1-1.fna.fbcdn.net/v/t1.0-9/87693356_1381958505325523_5471747167842467840_o.jpg?_nc_cat=106&ccb=2&_nc_sid=e3f864&_nc_ohc=eCbpeEAMTdoAX8Va_Ma&_nc_ht=scontent.fbbi1-1.fna&oh=3298da4437ba263fa6abd3a31bcb347e&oe=5FCF0076" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.shiksha.com/mediadata/images/1519216655phpHDt6VH.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
        </div>
    </div>

</div>

<?php
    include "components/common/footer.php";
?>
