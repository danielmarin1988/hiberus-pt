<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Prueba técnica Hiberus </title>

    <?php include('common/head.php') ?>

</head>
<body>

    <main>

        <!-- Section 1 -->
        <section id="section1" class="sections sections--v1">
            <button onclick="scrollToSection(3)" class="btn">
                Ir a la sección 3
            </button>
        </section>

        <!-- Section 2 -->
        <section id="section2" class="sections sections--v2"></section>

        <!-- Section 3 -->
        <section id="section3" class="sections sections--v3">
            <div id="box" class="sections__box">Bye, bye</div>
        </section>


        <?php include('common/footer.php') ?>

    </main>

</body>

</html>