<?php
include 'layout/header.php';
?>
    <!-- background img-->
   <nav class="navbar navbar-expand-lg navbar-dark about-nav"  style="background-image: url('assets/img/aca_4.webp')";>
        <div class="container">
            <div class="gallery-text">
                <h1>Gallery</h1>

            </div>
        </div>
    </nav>
    <!-- gallery section  -->
    <div class="container-fluid" style="background-color: #F6F5FF;">
        <h2 class="text-center p-2 "> <i class="fa-regular fa-lightbulb fa-l" style="color: #FFD43B;"></i> Gallery
        </h2>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-pills p-5 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-class-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-class" type="button" role="tab" aria-controls="pills-class"
                        aria-selected="true">
                        <h3>All</h3>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-event-tab" data-bs-toggle="pill" data-bs-target="#pills-event"
                        type="button" role="tab" aria-controls="pills-event" aria-selected="false">
                        <h3>Event</h3>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-dance-tab" data-bs-toggle="pill" data-bs-target="#pills-dance"
                        type="button" role="tab" aria-controls="pills-dance" aria-selected="false">
                        <h3>Dance</h3>
                    </button>
                </li>

            </ul>
            <div class="tab-content  " id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-class" role="tabpanel"
                    aria-labelledby="pills-class-tab" tabindex="0">
                    <img src="assets\img\kgic_gallery2.webp" class="p-1">
                    <img src="assets\img\new_one.webp" class="p-1">
                    <img src="assets\img\kgic_e3.webp" class="p-1">
                    <img src="assets\img\dance_1.webp" class="p-1">
                    <img src="assets\img\kgic_d5.webp" class="p-1">
                    <img src="assets\img\kgic_gallery8.webp" class="p-1">
                    <img src="assets\img\new_three.webp" class="p-1">
                    <img src="assets\img\new_two.webp" class="p-1">
                    <img src="assets\img\new_four.webp" class="p-1">
                </div>
                <div class="tab-pane fade" id="pills-event" role="tabpanel" aria-labelledby="pills-event-tab"
                    tabindex="0">
                    <img src="assets\img\kgic_e1.webp" class="p-1">
                    <img src="assets\img\kgic_e2.webp" class="p-1">
                    <img src="assets\img\kgic_e3.webp" class="p-1">
                    <img src="assets\img\kgic_e4.webp" class="p-1">
                    <img src="assets\img\kgic_e5.webp" class="p-1">
                    <img src="assets\img\kgic_e6.webp" class="p-1">

                </div>
                <div class="tab-pane fade" id="pills-dance" role="tabpanel" aria-labelledby="pills-dance-tab"
                    tabindex="0">
                    <img src="assets\img\kgic_d1.webp" class="p-1">
                    <img src="assets\img\kgic_d2.webp" class="p-1">
                    <img src="assets\img\kgic_d3.webp" class="p-1">
                    <img src="assets\img\dance_1.webp" class="p-1">
                    <img src="assets\img\kgic_d5.webp" class="p-1">
                </div>

            </div>

        </div>
    </div>

  <?php
include 'layout/footer.php';
?>