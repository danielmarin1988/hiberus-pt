
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    function scrollToSection(sectionNumber) {
        var section = document.getElementById('section' + sectionNumber);
        section.scrollIntoView({ behavior: 'smooth' });

        window.addEventListener('scroll', function() {
            var sectionRect = section.getBoundingClientRect();

            if (sectionRect.top < window.innerHeight && sectionRect.bottom >= 0) {
                document.getElementById('box').style.opacity = 0;
            } else {
                document.getElementById('box').style.opacity = 1;
            }
        });
    }

</script>