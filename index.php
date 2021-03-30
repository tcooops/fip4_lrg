<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/vue"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG</title>
    <?php include 'templates/links.php'; ?>
    <?php include 'templates/lightbox.php'; ?>
</head>
<body>
<main id="app">
    <div class="main-container">
        <h1 class="hidden">London Referees Group</h1>
        <?php include 'templates/header.php'; ?>
            <section class="hero-video">
                <h2 class="hidden">LRG Intro Video</h2>
                <video autoplay controls muted loop>
                    <source src="public/images/hero.mp4" type="video/mp4">
                    <source src="hero.ogg" type="video/ogg">
                    <source src="hero.webm" type="video/webm">
                    Your browser does not support the video tag
                </video>
            </section>
            <section id="main-index">
                <h2>We are the London Referees Group</h2>
                <p>“Lorem ipsum blurb or phrase here Lorem ipsum blurb or phrase here Lorem ipsum blurb“</p>
            </section>
            <section id="what-we-do-section">
                <h2 class="hidden">What we do</h2>
                <div id="what-we-do-con">
                    <div class="what-we-do">
                    
                    <img src="public/images/icon_us2.svg" alt=""  class="index-icon circle">

                    <h3>Who We Are</h3>
                    <p>We are London Referees Group. We provide referees for hockey matches in London and the surrounding areas. We offer training for all our referees as well as a Junior Mentorship program for younger folks interested in becoming referees.</p>
                    <div class="generic-button" id="show-modal" @click="showModalAbout = true"><a>Read More</a></div>
                    <modal v-if="showModalAbout" @close="showModalAbout = false">
                        <h3 slot="header">Who we are</h3>
                        <p class="modal-p" slot="body">We are London Referees Group. We provide referees for hockey matches in London and the surrounding areas. We offer training for all our referees as well as a Junior Mentorship program for younger folks interested in becoming referees.</p>
                    </modal>
                </div>
                <div class="what-we-do">
                    <img src="public/images/icon_services2.svg" alt=""  class="index-icon circle">
                    <h3>Services We Provide</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quas delectus mollitia eum similique eius iure maxime ullam, ipsam esse cum sequi voluptates impedit corporis debitis doloribus optio placeat molestiae.</p>
                    <div class="generic-button" id="show-modal" @click="showModalServices = true"><a>Read More</a></div>
                    <modal v-if="showModalServices" @close="showModalServices = false">
                        <h3 slot="header">Services We Provide</h3>
                        <p class="modal-p" slot="body">We provide all refereeing services for your hockey match.</p>
                    </modal>
                </div>
                <div class="what-we-do">
                    <img src="public/images/icon_whistle2.svg" alt=""  class="index-icon circle">
                    <h3>The Referee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quas delectus mollitia eum similique eius iure maxime ullam, ipsam esse cum sequi voluptates impedit corporis debitis doloribus optio placeat molestiae.</p>
                    <div class="generic-button"><a href="referee.php">Read More</a></div>
                </div>
            </div>
        </section>
      <!--  <hr class="hr-covid"> -->
        <section class="covid-section"> 
            <div class="covid-update">
                <h2><span class="bold">COVID-19</span> <br><span class="thin">UPDATE</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ratione officia sit quo commodi nisi quae vero eveniet veniam expedita maiores vitae molestias minima, labore obcaecati beatae quam culpa praesentium?</p>
            </div>
            <div id="covid-update">
                <a href="#"><img class="covid-img" src="public/images/index_covid.png" alt="" width="500" ></a>
                <a href="#"><img class="covid-img" src="public/images/index_mentorship.png" alt="" width="500"></a>
            </div>
        </section>
        <section id="certification">
            <div class="inner-hero">
                <img src="" alt="">
            </div>
            <div id="certification-con">
                <h2>Our Certifications</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quibusdam, totam autem repudiandae ratione laboriosam deleniti modi, expedita voluptatum nesciunt id exercitationem, doloremque iure temporibus commodi illum iste doloribus. Nisi! <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, neque corporis! Temporibus officia aperiam sapiente! Illum numquam eveniet eum dolore. Illo, numquam asperiores? Obcaecati tempore itaque vel voluptate sequi! Blanditiis? <br><br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate impedit placeat beatae nostrum excepturi ea nam, recusandae doloremque, delectus rem necessitatibus quibusdam! Mollitia blanditiis, molestiae exercitationem ducimus porro ullam rem.
                </p>
                <div id="contacts">
                    <h2 >Contacts</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quibusdam, totam autem repudiandae ratione laboriosam deleniti modi, expedita voluptatum nesciunt id exercitationem, doloremque iure temporibus commodi illum iste doloribus. Nisi!
                        <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, neque corporis! Temporibus officia aperiam sapiente! Illum numquam eveniet eum dolore. Illo, numquam asperiores? Obcaecati tempore itaque vel voluptate sequi! Blanditiis? 
                        <br><br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate impedit placeat beatae nostrum excepturi ea nam, recusandae doloremque, delectus rem necessitatibus quibusdam! Mollitia blanditiis, molestiae exercitationem ducimus porro ullam rem.</p>
                </div>
            </div>
        </section>
        <section class="schedule-section">
        <hr class="hr-schedule">
            <div class="schedule-area">
                <div id="view-schedule">
                    <h2>View the schedule</h2>
                    <div class="generic-button">
                        <a href="membership.php">View full schedule</a>
                    </div>
                </div>
            </div>
        <hr class="hr-schedule">
        </section>

    </div>
          <!-- 
            <div class="inner-hero">
            <img src="" alt="">
          -->
          <?php include 'templates/footer.php'; ?>
    </div>
</main>
<script>
      Vue.component("modal", {
        template: "#modal-template"
      });

      new Vue({
        el: "#app",
        data: {
          showModalAbout: false,
          showModalServices: false
        }
      });
    </script>
<?php include 'templates/bottomLinks.php'; ?>
</body>
</html>