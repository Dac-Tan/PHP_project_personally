<div class="row mb footer ">
            Email:nguyendactantb@gmail.com <br>
            Phone: <br>
                -Tấn: 0327318454 <br>
                -T: 0984574417 <br>
                -L: 0345244279 <br>
        </div>
    </div>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            }
        slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
    </script>
</body>
</html>