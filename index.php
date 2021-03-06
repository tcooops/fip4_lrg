<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG</title>
    <?php include 'templates/links.php'; ?>
</head>
<body>
<main>
    <div class="main-container">
        <h1 class="hidden">London Referees Group</h1>

        <?php include 'templates/header.php'; ?>

        <section id="app">
            <image-slider>
                <p>
                <a @click="prev">Previous</a> || <a @click="next">Next</a>
                </p>
                <transition-group name='fade' tag='div'>
                <div
                v-for="number in [currentNumber]"
                :key='number'
                >
                <img
                :src="currentImage"
                v-on:mouseover="stopRotation"
                v-on:mouseout="startRotation"
                />
                </div>
                </transition-group>
            </image-slider>
        </section>
<!-- floating login and social icons -->
            <div class="floatingIcons">
                <div class="floating-login">
                    <a href="/">Sign in</a>
                </div>
                <ul class="floating-socials">
                    <li><a href="www.facebook.com" target="new"><img src="/images/fb.svg" alt=""></a></li>
                    <li><a href="www.instagram.com" target="new"><img src="images/insta.svg" alt=""></a></li>
                    <li><a href="www.twitter.com" target="new"><img src="images/twitter.svg" alt=""></a></li>
                </ul>
            </div>
<!-- end floating login and socials-->
            <section id="main-index">
                <h2>We are the London Referees Group</h2>
                <p>“Lorem ipsum blurb or phrase here Lorem ipsum blurb or phrase here Lorem ipsum blurb“</p>
            </section>

            <section class="generic-section"> 
                <div class="covid-update">
                    <h2><span class="bold">COVID-19</span> <br><span class="thin">UPDATE</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ratione officia sit quo commodi nisi quae vero eveniet veniam expedita maiores vitae molestias minima, labore obcaecati beatae quam culpa praesentium?</p>
                </div>
            </section>
            <section class="generic-section">
                <div id="view-schedule">
                    <h2>View the schedule</h2>
                    <div class="generic-button">
                        <a href="#">view full schedule</a>
                    </div>
                </div>
            </section>
            <section id="what-we-do-section">
                <h2 class="hidden">What we do</h2>
                <div id="what-we-do-con">
                    <div class="what-we-do">
                    <img src="" alt="" class="index-icon">
                    <h3>Who We Are</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quas delectus mollitia eum similique eius iure maxime ullam, ipsam esse cum sequi voluptates impedit corporis debitis doloribus optio placeat molestiae.</p>
                    <div class="generic-button"><a href="">Read More</a></div>
                </div>
                <div class="what-we-do">
                    <img src="" alt="" class="index-icon">
                    <h3>Services We Provide</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quas delectus mollitia eum similique eius iure maxime ullam, ipsam esse cum sequi voluptates impedit corporis debitis doloribus optio placeat molestiae.</p>
                    <div class="generic-button"><a href="">Read More</a></div>
                </div>
                <div class="what-we-do">
                    <img src="" alt="" class="index-icon">
                    <h3>The Referee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quas delectus mollitia eum similique eius iure maxime ullam, ipsam esse cum sequi voluptates impedit corporis debitis doloribus optio placeat molestiae.</p>
                    <div class="generic-button"><a href="#">Read More</a></div>
                </div>
            </div>
          </section>
          <section id="the-referee-section" name="theReferee">   
            <div class="inner-hero">
                <h2 id="the-referee">The Referee</h2> 
                <img src="" alt="">
            </div>
            <div id="the-referee-con">
                <div class="the-referee">
                    <h3>The Role of the Referee</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae adipisci quos, ut cupiditate alias culpa laudantium voluptas quisquam magnam doloribus possimus. Voluptates excepturi praesentium fugit! Pariatur dolorum dolores provident enim?</p>
                    <div class="left-button">Read More</div>
                </div>
                <div class="the-referee">
                    <h3>The Training</h3>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem ipsa autem voluptates voluptatibus architecto? Repellat est commodi reiciendis ea ipsum illo, cum perferendis tenetur ab consequuntur facilis autem nihil voluptate!</p>
                    <div class="left-button">Read Me</div>
                </div>
                <div class="the-referee">
                    <h3>The Commitment</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptates impedit aliquam, dolor, nihil sit deserunt laborum nulla reprehenderit quos, officia quo inventore. Repudiandae impedit sequi fugiat quidem odit.</p>
                    <div class="left-button">Read Me</div>
                </div>
                <div class="the-referee">
                    <h3>Communication Skills</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum at doloremque repellendus fuga tenetur, temporibus nemo provident architecto repudiandae eaque quae ipsa, earum nesciunt iure necessitatibus soluta ad maxime labore.</p>
                    <div class="left-button">Read Me</div>
                </div>
            </div>
          </section>
    </div>
          <!-- 
            <div class="inner-hero">
            <img src="" alt="">
          -->
          <?php include 'templates/footer.php'; ?>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="js/burger.js"></script>
<script src="js/main.js"></script>
</body>
</html>