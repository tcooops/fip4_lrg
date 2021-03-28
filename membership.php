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
    <section class="top-hero">
            <div id="hero-img-membership">
                <div class="hero-info">
                    <h2>Membership</h2>
                    <div class="generic-button"><a href="admin/admin_login.php">Log in</a></div>
                </div>
            </div>
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
                    <ul>
                       <li><svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#ed2927;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,3A3,3,0,1,1,7,6,3,3,0,0,1,10,3Zm0,14.2A7.2,7.2,0,0,1,4,14c0-2,4-3.08,6-3.08S16,12,16,14A7.2,7.2,0,0,1,10,17.2Z"/></g></g></svg></li>
                       <li><svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#ed2927;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,3A3,3,0,1,1,7,6,3,3,0,0,1,10,3Zm0,14.2A7.2,7.2,0,0,1,4,14c0-2,4-3.08,6-3.08S16,12,16,14A7.2,7.2,0,0,1,10,17.2Z"/></g></g></svg></li>
                       <li><svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#ed2927;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,3A3,3,0,1,1,7,6,3,3,0,0,1,10,3Zm0,14.2A7.2,7.2,0,0,1,4,14c0-2,4-3.08,6-3.08S16,12,16,14A7.2,7.2,0,0,1,10,17.2Z"/></g></g></svg></li>
                       <li><svg  class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#ed2927;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,3A3,3,0,1,1,7,6,3,3,0,0,1,10,3Zm0,14.2A7.2,7.2,0,0,1,4,14c0-2,4-3.08,6-3.08S16,12,16,14A7.2,7.2,0,0,1,10,17.2Z"/></g></g></svg></li>
                       <li><svg  class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#ed2927;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,3A3,3,0,1,1,7,6,3,3,0,0,1,10,3Zm0,14.2A7.2,7.2,0,0,1,4,14c0-2,4-3.08,6-3.08S16,12,16,14A7.2,7.2,0,0,1,10,17.2Z"/></g></g></svg></li>
                       <li><svg  class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#ed2927;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,3A3,3,0,1,1,7,6,3,3,0,0,1,10,3Zm0,14.2A7.2,7.2,0,0,1,4,14c0-2,4-3.08,6-3.08S16,12,16,14A7.2,7.2,0,0,1,10,17.2Z"/></g></g></svg></li>
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
        <section id="skill-building-section">   
            <div class="inner-hero" id="inner-skill-building">
                <h2 id="the-referee">Skill Building with LRG</h2> 
                <img src="" alt="">
            </div>
                <div id="skill-building-con">
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae adipisci quos, ut cupiditate alias culpa laudantium voluptas quisquam magnam doloribus possimus. Voluptates excepturi praesentium fugit! Pariatur dolorum dolores provident enim?</p>
                        <div class="left-button"><a href="#">Read More</a></div>
                    </div>
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <hr>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem ipsa autem voluptates voluptatibus architecto? Repellat est commodi reiciendis ea ipsum illo, cum perferendis tenetur ab consequuntur facilis autem nihil voluptate!</p>
                        <div class="left-button"><a href="#">Read More</a></div>
                    </div>
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptates impedit aliquam, dolor, nihil sit deserunt laborum nulla reprehenderit quos, officia quo inventore. Repudiandae impedit sequi fugiat quidem odit.</p>
                        <div class="left-button"><a href="#">Read More</a></div>
                    </div>
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum at doloremque repellendus fuga tenetur, temporibus nemo provident architecto repudiandae eaque quae ipsa, earum nesciunt iure necessitatibus soluta ad maxime labore.</p>
                        <div class="left-button"><a href="#">Read More</a></div>
                    </div>
                </div>
          </section>
        </section>
        <section> <!-- gallery -->
            <!-- Hien can grab this stuff from the database-->
        </section>
        <?php include 'templates/footer.php'; ?>
  </div>
</main>
<?php include 'templates/bottomLinks.php'; ?>
</body>
</html>
