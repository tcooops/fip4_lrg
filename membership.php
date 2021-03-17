<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG - Membership</title>
    <?php include 'templates/links.php'; ?>
</head>
<body>
<main id="app">
    <h1 class="hidden">London Referees Group</h1>
    <div class="main-container">
    <?php include 'templates/header.php'; ?>
        <section class="hero-con">
            <h2 class="hidden">Membership Hero</h2>
            <div id="membership-hero"></div>
            <div class="sign-in"><a href="index.php">Sign in</a></div>
        </section>
        <section id="announcements">
            <h2>Announcements</h2>
            <div id="announcement-con">
                <div id="today-ann">Today's announcements</div>
                <div id="tmo-ann">Tomorrow's announcements</div>
                <div id="upcoming-ann">Upcoming announcements</div>
                <div id="weeks-ann">This week's announcements</div>
            </div>
            <div id="sched-button">
                <button>View full schedule</button>
            </div>
        </section>
        <section>
            <div class="inner-hero">
                <h2>Committee</h2>
                <img src="" alt="">
            </div>
            <div id="committee-con">
                <div id="committee">
                    <!-- Hien can grab this info via database & we can implement this to show details in a Lightbox. remove following, this is just here for visual interest -->
                    
                    <ul>
                        <li class="member"><img src="/images/user.png" alt="user"></li>
                        <li class="member"><img src="/images/user.png" alt="user"></li>
                        <li class="member"><img src="/images/user.png" alt="user"></li>
                        <li class="member"><img src="/images/user.png" alt="user"></li>
                        <li class="member"><img src="/images/user.png" alt="user"></li>
                    </ul>
                    <div class="gallery-controls-member">
                        <div class="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs/><path d="M256 0C114.837 0 0 114.837 0 256s114.837 256 256 256 256-114.837 256-256S397.163 0 256 0zm57.749 347.584c8.341 8.341 8.341 21.824 0 30.165A21.275 21.275 0 01298.666 384a21.277 21.277 0 01-15.083-6.251L176.917 271.083c-8.341-8.341-8.341-21.824 0-30.165l106.667-106.667c8.341-8.341 21.824-8.341 30.165 0s8.341 21.824 0 30.165L222.165 256l91.584 91.584z"/></svg>
                        </div>
                        <div class="next">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs/><path d="M256 0C114.837 0 0 114.837 0 256s114.837 256 256 256 256-114.837 256-256S397.163 0 256 0zm79.083 271.083L228.416 377.749A21.275 21.275 0 01213.333 384a21.277 21.277 0 01-15.083-6.251c-8.341-8.341-8.341-21.824 0-30.165L289.835 256l-91.584-91.584c-8.341-8.341-8.341-21.824 0-30.165s21.824-8.341 30.165 0l106.667 106.667c8.341 8.341 8.341 21.823 0 30.165z"/></svg>
                        </div>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptas enim placeat odio dolorem unde, sint error molestias! Unde delectus a inventore debitis molestias fugit placeat aliquid, ea veniam eaque.
                </p>
             </div>
        </section>
        <section> <!-- skill building section-->
            <div class="inner-hero">
                <h2>Skill Building</h2>
                <img src="" alt="">
                </div id="skill-building-con">
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis sunt, ut id sit aperiam cupiditate odio eveniet necessitatibus facere adipisci, porro saepe. Expedita numquam facilis blanditiis. Saepe, deleniti aut! Odio?</p>
                        <div class="generic-button"><a href="">Find out more</a></div> 
                    </div>
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad vitae inventore sunt, tenetur voluptatibus dolores adipisci corporis numquam quae nam porro consectetur aliquid explicabo atque, aut illum. Esse, deleniti voluptatibus.</p>
                        <div class="generic-button"><a href="">Find out more</a></div>
                    </div>
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur earum rem porro perferendis odit esse sit praesentium molestiae iusto, ex quae consequatur hic facere iste aspernatur nulla repudiandae repellendus vel!</p>
                        <div class="generic-button"><a href="">Find out more</a></div>
                    </div>
                </div>
        </section>
        <section> <!-- gallery -->
            <!-- Hien can grab this stuff from the database-->
        </section>
        <?php include 'templates/footer.php'; ?>
  </div>
</main>
<script src="js/burger.js"></script>
<script src="js/scroll.js"></script>
</body>
</html>
