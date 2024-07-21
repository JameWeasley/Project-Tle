<?php
include('./shared/header.php')
?>

<div class="container">

    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="https://s3-ap-southeast-1.amazonaws.com/photo.wongnai.com/photos/2017/04/12/8c67d40dcf3f477bb64403bf7a40f34b.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="https://bluemochateas.com/wp-content/uploads/2022/07/%E0%B9%80%E0%B8%A1%E0%B8%99%E0%B8%B9%E0%B8%8A%E0%B8%B2%E0%B9%80%E0%B8%82%E0%B8%B5%E0%B8%A2%E0%B8%A7%E0%B9%82%E0%B8%AD%E0%B8%A3%E0%B8%B4%E0%B9%82%E0%B8%AD%E0%B9%89-1024x1024.jpg.webp" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="https://cheechongruay.smartsme.co.th/media/Epr0MUR9gUP193WFidpliB93lMWF68PC6C3M3EjHO9.jpg" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>


</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

    function autoSlideShow() {
        plusSlides(1);
    }

    setInterval(autoSlideShow, 2000);
</script>