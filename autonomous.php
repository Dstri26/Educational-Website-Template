<?php
    include "components/common/header.php";
?>
<style>
    
    body{
    margin: 50px;
    display: table-row;
    align-items: center;
    justify-content: center;
    margin: 50px;
    background-color:#BCDBF0;
    }
    .container-1{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 50px;

    }
    .card{
        border-radius: 10% 0 10% 0;
        justify-content: center;
        align-content: center;
        padding: 10px;
        overflow: auto;
        margin-top: -3.58px;
    }
    .card-horizontal {
    display: flex;
    flex: 1 1 auto;
    border-radius: 10% 0 10% 0;

    }
    .card-body{
    width: 700px;
    height:250px;
    overflow: auto;
    justify-content: center;
    border-radius: 10% 0 10% 0;
    }
    .border-1{
        border-width: 5px;
    border-style: solid;
    border-radius: 10% 0 10% 0;
    margin-top: 10px;
    width: 650px;
    height:275px;

    }
    .border-2{
        border-width: 5px;
    border-style: solid;
    border-radius:  10% 0 10% 0;
    margin-top: 10px;
    width: 650px;
    height:275px;
    margin: 10px;
    }
    .image-size{
        height: 250px;
        width: 300px;
        border-radius: 10% 0 10% 0;
    }
    .card-title{
        font: bold;
    }
    .bouton-image:before {
        content: "";
        width: 200px;
        height: 200px;
        display: grid;
    margin: 5px;
        vertical-align: text-top;
        background-color: transparent;
        background-position : center center;
        background-repeat:no-repeat;
    align-items: center;
    border-radius: 5px;

    }
    .six{
    align-content: center;
    padding: 2px;
        margin-left: 100px;
        background-color: #000000;
        border-radius: 10px;
        
    }

    .monBouton:before{
        background-image : url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR9jHzh6BIs9gghNzjP2sQWeKnAKo7-Z-HH8g&usqp=CAU);

    
    }
    .monBouton1:before{
        background-image : url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRNN1ovXDHd0dfxGeqFxJ37Dke0cv-H-f9AHg&usqp=CAU);
    
    }
</style>
<?php
    include "components/common/navbar.php";
?>

<div class="container-1">
	
	<div class="border-1">
    <div class="card">
    <div class="card-horizontal">
        <div class="img-square-wrapper">
            <img class="image-size" src="assets/img/pic.png" alt="Card image cap">
        </div>
        <div class="card-body">
            <h4 class="card-title">UG SYLLABUS</h4>

            <hr/>
            <p class="card-text">The UG Syllabus is listed below</p>
        </div>
    </div>
</div>
</div>
<div class="border-2">
    <div class="card">
    <div class="card-horizontal">
        <div class="card-body">
            <h4 class="card-title">PG SYLLABUS</h4>
            <hr/>
            <p class="card-text">The PG Syllabus is listed below</p>
        </div>
        <div class="img-square-wrapper">
            <img class="image-size" src="assets/img/pic.png" alt="Card image cap">
        </div>
        
    </div>
</div>
</div>
</div>
<div class="container-1">
	<div class="border-1">
    <div class="card">
    <div class="card-horizontal">
        <div class="img-square-wrapper">
            <img class="image-size" src="assets/img/pic.png" alt="Card image cap">
        </div>
        <div class="card-body">
            <h4 class="card-title">Academic Regulation for UG Program</h4>
            <hr/>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
</div>
<div class="border-2

\">
    <div class="card">
    <div class="card-horizontal">
        <div class="card-body">
            <h4 class="card-title">Academic Regulation for UG Program</h4>
            <hr/>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="img-square-wrapper">
            <img class="image-size" src="assets/img/pic.png" alt="Card image cap">
        </div>
        
    </div>
</div>
</div>
</div>
<div class="container-1">
	<div class="border-1">
    <div class="card">
    <div class="card-horizontal">
        <div class="img-square-wrapper">
            <img class="image-size" src="assets/img/pic.png" alt="Card image cap">
        </div>
        <div class="card-body">
            <h4 class="card-title">Academic calendars for UG and PG program</h4>
            <hr/>
           <button class="btn btn-primary bouton-image monBouton six"></button>
           <button class="btn btn-primary bouton-image monBouton1 six"></button>
        </div>
    </div>
</div>
</div>
<div class="border-2

\">
    <div class="card">
    <div class="card-horizontal">
        <div class="card-body">
            <h4 class="card-title">Results</h4>
            <hr/>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="img-square-wrapper">
            <img class="image-size" src="assets/img/pic.png" alt="Card image cap">
        </div>
        
    </div>
</div>
</div>
</div>
<div class="container-1">
	<div class="border-1">
    <div class="card">
    <div class="card-horizontal">
        <div class="img-square-wrapper">
            <img class="image-size" src="assets/img/pic.png" alt="Card image cap">
        </div>
        <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <hr/>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
</div>
<div class="border-2

\">
    <div class="card">
    <div class="card-horizontal">
        <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <hr/>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="img-square-wrapper">
            <img class="image-size" src="assets/img/pic.png" alt="Card image cap">
        </div>
        
    </div>
</div>

</div>
</div>
<?php
    include "components/common/footer.php";
?>

