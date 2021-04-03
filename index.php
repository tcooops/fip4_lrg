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
                <p>“The London Referees Group is committed to providing a high standard and quality hockey officiating in the City of London and surrounding area.“</p>
            </section>
            <section id="what-we-do-section">
                <h2 class="hidden">What we do</h2>
                <div id="what-we-do-con">
                    <div class="what-we-do">
                    <img src="public/images/icon_us2.svg" alt=""  class="index-icon circle">
                    <h3>Who We Are</h3>
                    <p>Our vision is to promote the game of hockey through fair and safe play, and a respect for all individuals involved in the game </p>
                    <div class="generic-button" id="show-modal" @click="showModalAbout = true"><a>Read More</a></div>
                    <modal v-if="showModalAbout" @close="showModalAbout = false">
                        <h3 slot="header">Who we are</h3>
                        <p class="modal-p" slot="body">In 2007, the London Referee Group, also known as the LRG, was established. This was the merger of the Forest City Referees Association (FCRA) and the London Hockey Referees Association (LHRA).
                        London Referees Group is a non-profit membership-based organization that acts as a resource for hockey officials in the City of London and surrounding area.
                        <br><br>
                        As an organization, we are focused on developing and maintaining a membership consisting of experienced and capable on ice officials. They are advocates for the ideals of good sportsmanship and fair play through qualified officiating in hockey and respect for the authority of hockey officials at all levels of competition. <br><br>
                        The executive leadership of the LRG supports ongoing development of its members by promotion of education and training programs that advance the skills of hockey officials. As well, as providing information programs to coaches, parents, and community members that advocate for a stronger understanding for the role of the on-ice officials and the competence of these individuals.<br><br>
                        <button class="modal-button"><a target="new" href="public/images/lrg_infographic.pdf">Find out more!</a></button>    
                    </p>
                        
                    </modal>
                </div>
                <div class="what-we-do">
                    <img src="public/images/icon_services2.svg" alt=""  class="index-icon circle">
                    <h3>Services We Provide</h3>
                    <p>London Referees Group will provide all refereeing services for leagues in the London and the surrounding areas. We offer training, certifications, and more!</p>
                    <div class="generic-button" id="show-modal" @click="showModalServices = true"><a>Read More</a></div>
                    <modal v-if="showModalServices" @close="showModalServices = false">
                        <h3 slot="header">Services We Provide</h3>
                        <p class="modal-p" slot="body">London Referees Group will provide all refereeing services for leagues in the London and the surrounding areas. As for our staff, LRG provides full training for those who make the team. <a href="contact.php" id="link">Contact us today</a> if you're interested in becoming a referee or know someone who is interested in joining our Junior Mentorship Program</p>
                    </modal>
                </div>
                <div class="what-we-do">
                    <img src="public/images/icon_whistle2.svg" alt=""  class="index-icon circle">
                    <h3>The Referee</h3>
                    <p>What is the importance of the referee? What does a referee do? The answers to all your burning referee questions...</p>
                    <div class="generic-button"><a href="referee.php">Read More</a></div>
                </div>
            </div>
        </section>
      <!--  <hr class="hr-covid"> -->
        <section class="covid-section"> 
            <div class="covid-update">
                <h2><span class="bold">COVID-19</span> <br><span class="thin">UPDATE</span></h2>
                <p>Currently, we are entering a province wide lockdown meaning no games are currently being played in any leagues in London or the surrounding areas. Stay tuned for more information soon!</p>
            </div>
            <div id="covid-update">
                <img  @click="showModalCovid = true" class="covid-img" src="public/images/index_covid.png" alt="" width="500" >
                <img @click="showModalJMP = true" class="covid-img" src="public/images/index_mentorship.png" alt="" width="500">
            </div>
            <modal v-if="showModalCovid" @close="showModalCovid = false">
                <h3 slot="header">Important COVID-19 Information</h3>
                <p class="modal-p" slot="body">Currently, we are entering a province wide lockdown meaning no games are currently being played in any leagues in London or the surrounding areas. Stay tuned for more information soon!</p>
            </modal>
            <modal v-if="showModalJMP" @close="showModalJMP = false">
                <h3 slot="header">Junior Mentorship Program</h3>
                <p class="modal-p" slot="body">The LRG training and development program is designed to assist young officials learn their role in the game and develop the skills necessary to ensure a safe and fair hockey game. This program consistently proves to be instrumental with guiding young officials for improvement of<br>
                Decision making skills<br>
                On ice awareness as an official<br>
                Communication skills<br>
                Applying the rules of the game to promote safe and fair play<br>
                As part of this program we assign experienced officials as mentors to assist with the training and develop our younger officials. The on-ice mentorship and off-ice guidance brings practical and classroom style learning together with positive enforcement in order to build their self-confidence.
                </p>
            </modal>
        </section>
        <section id="certification">
            <div class="inner-hero" id="inner-hero-certification">
            </div>
            <div id="certification-con">
                <h2>Training</h2>
                <p>
                Officials play a vital role in the game, they are often described as the third team on the ice. The basic role of the on-ice officials can be broken down into two simple words – safe and fair. For a referee to view and officiate the game with these two words in mind, they should be able to call a game that is acceptable to all of the participants.
                The LRG training and development program is designed to assist young officials learn their role in the game and develop the skills necessary to ensure a safe and fair hockey game. This program consistently proves to be instrumental with guiding young officials for improvement of decision making skills, on ice awareness as an official, communication skills, etc.
                Applying the rules of the game to promote safe and fair play
                As part of this program we assign experienced officials as mentors to assist with the training and develop our younger officials. The on-ice mentorship and off-ice guidance brings practical and classroom style learning together with positive enforcement in order to build their self-confidence.</p>
                </p>
            <div id="contacts">
                <h2 >Our Priorities</h2>
                <p>Responsibility – being physically and mentally prepared for each game.<br>
                    Education & Training – providing resources to continue the development of officials and provide training and mentorship for young officials to develop their skills.<br>
                    Partnership – building positive relationships with hockey associations, other officiating associations, and members of the community.
                </p>
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
          showModalServices: false,
          showModalCovid: false,
          showModalJMP: false
        }
      });
    </script>
<?php include 'templates/bottomLinks.php'; ?>
</body>
</html>