<?php
    include "components/common/header.php";
?>
<?php
    include "components/common/navbar.php";
?>

<style>
    /**********************************/
/***** Timeline by HTML Codex *****/
/**********************************/

*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #ffffff;
}


.timeline {
    position: relative;
    width: 100%;
    max-width: 1140px;
    margin: 0 auto;
    padding: 15px 0;
}

.timeline::after {
    content: '';
    position: absolute;
    width: 2px;
    background: #172A3A;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -1px;
}

.tl-container {
    padding: 15px 30px;
    position: relative;
    background: inherit;
    width: 50%;
}

.tl-container.left {
    left: 0;
}

.tl-container.right {
    left: 50%;
}

.tl-container::after {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    top: calc(50% - 8px);
    right: -8px;
    background: #ffffff;
    border: 2px solid #172A3A;
    border-radius: 16px;
    z-index: 1;
}

.tl-container.right::after {
    left: -8px;
}

.tl-container::before {
  content: '';
  position: absolute;
  width: 50px;
  height: 2px;
  top: calc(50% - 1px);
  right: 8px;
  background: #172A3A;
  z-index: 1;
}

.tl-container.right::before {
  left: 8px;
}

.tl-container .date {
    position: absolute;
    display: inline-block;
    top: calc(50% - 8px);
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    color: #172A3A;
    text-transform: uppercase;
    letter-spacing: 1px;
    z-index: 1;
}

.tl-container.left .date {
    right: -75px;
}

.tl-container.right .date {
    left: -75px;
}

.tl-container .icon {
    position: absolute;
    display: inline-block;
    width: 40px;
    height: 40px;
    padding: 9px 0;
    top: calc(50% - 20px);
    background: #FFFFFF;
    border: 2px solid #172A3A;
    border-radius: 40px;
    text-align: center;
    font-size: 18px;
    color: #172A3A;
    z-index: 1;
}

.tl-container.left .icon {
    right: 56px;
}

.tl-container.right .icon {
    left: 56px;
}

.tl-container .content {
    padding: 30px 90px 30px 30px;
    background: #FFFFFF;
    position: relative;
    border-radius: 0 500px 500px 0;
    
}

.tl-container.right .content {
    padding: 30px 30px 30px 90px;
    border-radius: 500px 0 0 500px;
    border-left:5px solid #3F88C5; 
}
.tl-container.left .content {
    border-right:5px solid #3F88C5; 
}
.tl-container .content h2 {
    margin: 0 0 10px 0;
    font-size: 18px;
    font-weight: normal;
    color: #172A3A;
}

.tl-container .content p {
    margin: 0;
    font-size: 16px;
    line-height: 22px;
    color: #000000;
}
.new-notice{
        border-right:5px solid #D00000 !important;
    }

@media (max-width: 767.98px) {
    .timeline::after {
        left: 90px;
    }

    .tl-container {
        width: 100%;
        padding-left: 120px;
        padding-right: 30px;
    }
    
    .tl-container.right {
        left: 0%;
    }

    .tl-container.left::after, 
    .tl-container.right::after {
        left: 82px;
    }
    
    .tl-container.left::before,
    .tl-container.right::before {
        left: 100px;
        border-color: transparent #172A3A transparent transparent;
    }
    
    .tl-container.left .date,
    .tl-container.right .date {
        right: auto;
        left: 15px;
    }
    
    .tl-container.left .icon,
    .tl-container.right .icon {
        right: auto;
        left: 146px;
    }
    
    .tl-container.left .content,
    .tl-container.right .content {
        padding: 30px 30px 30px 90px;
        border-radius: 500px 0 0 500px;
        
    }
    .new-notice{
        border-right:5px solid #D00000 !important;
    }
}
</style>
<section class="noticeboard" style="background-color:#BCDBF0;height:auto;padding:0;margin:0;">
<br>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
    
<div class="timeline">
    <div class="tl-container left">
        <div class="date">15 Dec</div>
        <i class="icon fa fa-certificate"></i>
        <div class="content new-notice">
            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
            <p>
                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
            </p>
        </div>
    </div>
    <div class="tl-container right">
        <div class="date">22 Oct</div>
        <i class="icon fa fa-certificate"></i>
        <div class="content">
            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
            <p>
                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
            </p>
        </div>
    </div>
    <div class="tl-container left">
        <div class="date">10 Jul</div>
        <i class="icon fa fa-certificate"></i>
        <div class="content">
            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
            <p>
                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
            </p>
        </div>
    </div>
    <div class="tl-container right">
        <div class="date">18 May</div>
        <i class="icon fa fa-certificate"></i>
        <div class="content">
            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
            <p>
                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
            </p>
        </div>
    </div>
    <div class="tl-container left">
        <div class="date">10 Feb</div>
        <i class="icon fa fa-certificate"></i>
        <div class="content">
            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
            <p>
                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
            </p>
        </div>
    </div>
    <div class="tl-container right">
        <div class="date">01 Jan</div>
        <i class="icon fa fa-certificate"></i>
        <div class="content">
            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
            <p>
                Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
            </p>
        </div>
    </div>
</div>
</section>
<?php
    include "components/common/footer.php";
?>
