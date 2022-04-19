<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="https://www.hennesseysalonspa.com/wp-content/uploads/2018/09/Hennessey-Logo-Drop-White-Square.png" type="image/x-icon">

    <!-- icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Portfolio</title>
</head>

<body>
    <!-- php code -->
    <?php require("assets/inc/functions.php");?>

    <!-- navbar -->
    <nav class="nav">
        <ul class="nav-list">
            <a href="#home" class="nav-link active-link">
                <i class="ri-home-5-line"></i>
                <span class="nav-name">
                    Home
                </span>
            </a>

            <a href="#profile" class="nav-link">
                <i class="ri-user-line"></i>
                <span class="nav-name">
                    Profile
                </span>
            </a>

            <a href="#message" class="nav-link">
                <i class="ri-chat-3-line"></i>
                <span class="nav-name">
                    Message
                </span>
            </a>

            <a href="#info" class="nav-link">
                <i class="ri-information-line"></i>
                <span class="nav-name">
                    Info
                </span>
            </a>

            <a href="#projects" class="nav-link">
                <i class="ri-folders-line"></i>
                <span class="nav-name">
                    Projects
                </span>
            </a>

            <svg class="indicator" width="94" height="56" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="47" cy="28" rx="24" ry="28" />
                <path d="M24 20C24 20 28 55.9999 48 56L0 55.9997C18 55.9998 24 20 24 20Z" />
                <path d="M70 20C70 20 66 55.9999 46 56L94 55.9997C76 55.9998 70 20 70 20Z" />
            </svg>
        </ul>
    </nav>

    <!-- content -->
    <main class="container">
        <section id="home">
            <h2>Home</h2>
            <div class="box">
                <div class="left">
                    <h3>Hi I'm Nassef</h3>
                    <ul>
                        <li>A software developer student</li>
                        <li>Video game fanatic</li>
                        <li>Enthuasiastic</li>
                        <li>Fun person to be around with</li>
                        <li>Kind</li>
                        <li>Fast learner</li>
                    </ul>
                </div>
                <div class="right">
                    <img src="assets/img/nassef.jpg" alt="">
                </div>
            </div>
        </section>

        <section id="profile">
            <h2>Profile</h2>
            <div class="box">
                <div class="left">
                    <h3>Why did i became a software developer?</h3>
                    <p>I became one when i was bored at home and nothing to do. I watched some videos about programming
                        and i tried using Microsoft Visual Studio and followed a course when i was 15 years old. I did
                        not understand a thing but little by little i kept doing it and enjoyed it more. when i did gain
                        some knowledge i started putting my ideas inside of programming meanwhile I'm 17 Years old and i
                        keep enjoying to program.</p>
                </div>
                <div class="right" style="text-align: left; display: flex; align-items: center;">
                    <h3>What do i specify in?</h3>
                    <p style="margin-top: 15%;">I really enjoy programming with data espically user data. I like every
                        aspect of programming but writing in python i enjoy the most.</p>
                    <img src="assets/img/python.png" width="200">
                </div>
            </div>
        </section>

        <form action="index.php" method="POST">
            <section id="message">
                <h2>Message</h2>
                <div class="box">
                    <div class="left" style="text-align: center;">
                        <h3>Contact me</h3>
                        <p>Leave a message behind if you want to get to know me more or if you are a company looking for
                            more developers. I will contact you back within a week</p>
                        <i class="ri-contacts-book-line" style="font-size: 10rem;"></i>
                    </div>
                    <div class="right">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Nassef">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="nassefkhachiche1@gmail.com">
                        <label for="">Subject</label>
                        <input type="text" name="subject" placeholder="This is about...">
                        <label for="">Message</label>
                        <input type="text" name="message" placeholder="..." style="resize: vertical; padding: 30px;">
                        <input type="submit" value="send" name="sub">
                        <input type="reset" value="reset">
                    </div>
                </div>
            </section>
            <?php storeUserData();?>
        </form>

        <section id="info">
            <h2>Info</h2>
            <div class="box">
                <div class="left">
                    <h3>My name is Nassef</h3>
                    <p>I'm a software developer student <br>
                        <br> I like to play videogames and hangout with my friends <br>
                        <br> I often find myself coding when a new idea pops up in my head
                    </p>
                </div>
                <div class="right" style="text-align: left;">
                    <h3>More info</h3>
                    <label for="">Email</label>
                    <p>nassefkhachiche1@gmail.com</p>

                    <label for="">Phone</label>
                    <p>06 27107393</p>

                    <label for="">Website</label>
                    <a href="">www.nassefkhachiche.com</a>
                </div>
            </div>
        </section>

        <section id="projects">
            <h2>Projects</h2>
            <div class="box" style="flex-direction: column; align-items: center;">
                <?php displayItems(); ?>
            </div>
        </section>
    </main>

    <!-- javascript script -->
    <script src="assets/js/main.js"></script>
</body>

</html>