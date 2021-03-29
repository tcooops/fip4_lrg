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
                <video autoplay controls muted loop>
                    <source src="public/images/hero.mp4" type="video/mp4">
                <!-- <source src="hero.ogg" type="video/ogg"> -->
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
                    
                    <svg class="index-icon circle" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 75.6 76.5" xml:space="preserve">
                    <defs/>
                    <style>
                        .st3,.st4{fill:none;stroke:#fff;stroke-miterlimit:10}.st3{stroke-linecap:round;stroke-linejoin:round;stroke-width:3}.st4{stroke-width:2.5}
                    </style>
                    <circle cx="37.6" cy="38.9" r="36" fill="#eb2d2a"/>
                    <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4" d="M25.1 57.9c0-8.7 3.5-15.7 7.9-15.7h9.8c4.4 0 7.9 7 7.9 15.7"/>
                    <circle cx="37.9" cy="30" r="7.3" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="3"/>
                    <path d="M45 40.8c2.4-4.1 7.3-3.2 11.5-3.1 6.4.2 7.8 8 7.8 13.2" class="st3"/>
                    <circle cx="54" cy="27.2" r="6.2" class="st4"/>
                    <path d="M30.2 40.8c-2.4-4.1-7.3-3.2-11.5-3.1-6.4.2-7.8 8-7.8 13.2" class="st3"/>
                    <circle cx="21.8" cy="27.2" r="6.2" class="st4"/>
                    </svg>

                    <h3>Who We Are</h3>
                    <p>We are London Referees Group. We provide referees for hockey matches in London and the surrounding areas. We offer training for all our referees as well as a Junior Mentorship program for younger folks interested in becoming referees.</p>
                    <div class="generic-button" id="show-modal" @click="showModalAbout = true"><a>Read More</a></div>
                    <modal v-if="showModalAbout" @close="showModalAbout = false">
                        <h3 slot="header">Who we are</h3>
                        <p class="modal-p" slot="body">We are London Referees Group. We provide referees for hockey matches in London and the surrounding areas. We offer training for all our referees as well as a Junior Mentorship program for younger folks interested in becoming referees.</p>
                    </modal>
                </div>
                <div class="what-we-do">
                    <svg class="index-icon circle" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 76.7 75.1" xml:space="preserve">
                    <defs/>
                    <style>
                        .st1{fill:#fff}
                    </style>
                    <circle cx="38.4" cy="36.9" r="36" fill="#eb2d2a"/>
                    <path d="M47.6 49.5l-1.8-.6c.3-2.2.2-4.5-.4-6.6l1.7-.8c.3-.2.5-.6.3-.9l-1.9-3.9c-.2-.3-.6-.5-.9-.3l-1.7.8c-1.3-1.7-3-3.2-5-4.3l.6-1.8c.1-.3-.1-.7-.4-.8L34 29c-.3-.1-.7.1-.8.4l-.6 1.8c-2.2-.3-4.5-.2-6.6.4l-.8-1.6c-.2-.3-.6-.5-.9-.3l-3.9 1.9c-.3.2-.5.6-.3.9l.8 1.7c-1.7 1.3-3.2 3-4.3 5l-1.8-.6c-.3-.1-.7.1-.8.4l-1.4 4.1c-.1.3.1.7.4.8l1.8.6c-.3 2.2-.2 4.5.4 6.6l-1.7.8c-.3.2-.5.6-.3.9l1.9 3.9c.2.3.6.5.9.3l1.7-.8c1.3 1.7 3 3.2 5 4.3l-.6 1.8c-.1.3.1.7.4.8l4.1 1.4c.3.1.7-.1.8-.4l.6-1.8c2.2.3 4.5.2 6.6-.4l.8 1.7c.2.3.6.5.9.3l3.9-1.9c.3-.2.5-.6.3-.9l-.8-1.7c1.7-1.3 3.2-3 4.3-5l1.8.6c.3.1.7-.1.8-.4l1.4-4.1c.2-.5 0-.9-.4-1zM27 56.8c-5.6-1.9-8.6-7.9-6.7-13.5 1.9-5.6 7.9-8.6 13.5-6.7s8.6 7.9 6.7 13.5c-1.9 5.6-8 8.6-13.5 6.7z" class="st1"/>
                    <path d="M60.8 29.3l-1.1-.8c.7-1.5 1-3 1-4.6l1.3-.2c.3 0 .4-.3.4-.5l-.6-3.1c0-.3-.3-.4-.5-.4L60 20c-.5-1.5-1.4-2.8-2.5-3.9l.8-1.1c.1-.2.1-.5-.1-.7l-2.6-1.8c-.2-.1-.5-.1-.7.1l-.8 1.1c-1.5-.7-3-1-4.6-1l-.2-1.3c0-.3-.3-.4-.5-.4l-3.1.6c-.3 0-.4.3-.4.5l.2 1.3c-1.5.5-2.8 1.4-3.9 2.5l-1.1-.8c-.2-.1-.5-.1-.7.1L38 17.8c-.1.2-.1.5.1.7l1.1.8c-.7 1.5-1 3-1 4.6l-1.2.3c-.3 0-.4.3-.4.5l.6 3.1c0 .3.3.4.5.4L39 28c.5 1.5 1.4 2.8 2.5 3.9l-.8 1.1c-.1.2-.1.5.1.7l2.6 1.8c.2.1.5.1.7-.1l.8-1.1c1.5.7 3 1 4.6 1l.2 1.3c0 .3.3.4.5.4l3.1-.6c.3 0 .4-.3.4-.5l-.2-1.3c1.5-.5 2.8-1.4 3.9-2.5l1.1.8c.2.1.5.1.7-.1l1.8-2.6c.1-.5 0-.8-.2-.9zm-15.6.9c-3.5-2.4-4.3-7.1-1.9-10.6s7.1-4.3 10.6-1.9 4.3 7.1 1.9 10.6c-2.4 3.4-7.2 4.3-10.6 1.9z" class="st1"/>
                    </svg>
                    <h3>Services We Provide</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quas delectus mollitia eum similique eius iure maxime ullam, ipsam esse cum sequi voluptates impedit corporis debitis doloribus optio placeat molestiae.</p>
                    <div class="generic-button" id="show-modal" @click="showModalServices = true"><a>Read More</a></div>
                    <modal v-if="showModalServices" @close="showModalServices = false">
                        <h3 slot="header">Services We Provide</h3>
                        <p class="modal-p" slot="body">We provide all refereeing services for your hockey match.</p>
                    </modal>
                </div>
                <div class="what-we-do">
                    <svg class="index-icon circle" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 77 78" xml:space="preserve">
                    <defs/>
                    <style>
                        .st1{fill:#fff}
                    </style>
                    <circle cx="37.7" cy="39.9" r="36" fill="#eb2d2a"/>
                    <circle cx="31" cy="46.1" r="6.7" class="st1"/>
                    <path d="M35.7 23.5l-.3.3c-.1.1-.3.2-.5 0l-3.2-2.6c-.1-.1-.2-.3 0-.5l.3-.3c.1-.1.3-.2.5 0l3.2 2.6c.1.1.1.3 0 .5zM38 22.3l-.5.1c-.2.1-.4 0-.4-.2l-1.2-4c-.1-.2 0-.4.2-.4l.5-.1c.2-.1.4 0 .4.2l1.2 4c.1.1 0 .3-.2.4zM40.9 22.4l-.4-.1c-.2 0-.3-.2-.3-.4l.7-4.1c0-.2.2-.3.4-.3l.4.1c.2 0 .3.2.3.4l-.7 4.1c-.1.2-.2.4-.4.3z" class="st1"/>
                    <path fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M45.6 38.7l19.1-6.1-4.2-13.1-19.4 6.1 1 3.1c.2.5-.1 1.1-.6 1.2l-2.9 1c-.5.2-1.1-.1-1.2-.6l-1.1-3.2-10.5 3.3C18.1 33 13.5 40.7 14.5 48.5l-1.8.5c-1.5.5-2.3 2.1-1.8 3.6.5 1.5 2.1 2.3 3.6 1.8l1.8-.6c3.6 7 11.8 10.6 19.6 8.1 8.7-2.7 13.5-12 10.8-20.7-.1.1-.5-1.4-1.1-2.5zm-32 15.2c-1.2 0-2.2-1-2.2-2.2 0-1.2 1-2.2 2.2-2.2s2.2 1 2.2 2.2c0 1.2-1 2.2-2.2 2.2zM31 56.2c-5.5 0-10-4.5-10-10s4.5-10 10-10 10 4.5 10 10-4.5 10-10 10z"/>
                    </svg>
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