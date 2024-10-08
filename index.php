<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="navbar/navbar.css">
    <title>UIFry</title>
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <main>
        <div class="container hero">
            <div class="hero_left">
                <div class="ratings">
                    <ul>
                        <li><img src="assets/icons/IconStar.png" /></li>
                        <li><img src="assets/icons/IconStar.png" /></li>
                        <li><img src="assets/icons/IconStar.png" /></li>
                        <li><img src="assets/icons/IconStar.png" /></li>
                        <li><img src="assets/icons/IconStar.png" /></li>
                    </ul>
                    <p class="ratings_text">Based on <span>10,000+</span> reviews</p>
                </div>
                <div class="hero_blog">
                    <span>Seamless solution<br>with our magic!</span>
                    <p>UIFry is the project management platform that aims for teams to<br>achieve an efficient dream
                        management</p>
                    <div class="hero_blog_demo">
                        <p>Start work efficiently with<br>UIFry SaaS product</p>
                        <button class="button button_green">Get a Free Demo</button>
                    </div>
                </div>
                <ul class="hero_logos">
                    <li><img src="assets/logos/logoipsum1.png" /></li>
                    <li><img src="assets/logos/logoipsum2.png" /></li>
                    <li><img src="assets/logos/logoipsum3.png" /></li>
                </ul>
            </div>
            <div class="hero-left"></div>
        </div>
    </main>

    <section>
        <?php require './carroussel/index.html'; ?>
    </section>

    <section>
    </section>

</body>

</html>
