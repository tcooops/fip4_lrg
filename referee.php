<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/vue"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG - The Referee</title>
    <?php include 'templates/links.php'; ?>
    <?php include 'templates/lightbox.php'; ?>
</head>
<body>
<main id="app">
    <div class="main-container">
        <h1 class="hidden">London Referees Group</h1>
        <?php include 'templates/header.php'; ?>
        <section class="top-hero">
            <div id="hero-img-referee">
            
                <div class="hero-info">
                    <h2 class="hidden">The Referee</h2>
                </div>
            </div>
        </section>
        <section id="the-referee-section" name="theReferee">   
            <div id="the-referee-con">
                <div class="the-referee">
                    <h3 class="skewRight">The Role of the Referee</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae adipisci quos, ut cupiditate alias culpa laudantium voluptas quisquam magnam doloribus possimus. Voluptates excepturi praesentium fugit! Pariatur dolorum dolores provident enim?</p>
                    <div class="left-button" id="show-modal" @click="showModalRole = true">Read More</div>
                    

                    <modal v-if="showModalRole" @close="showModalRole = false">
                        <h3 slot="header">The Role of the Referee</h3>
                        <p class="modal-p" slot="body">The role of the referee is to....</p>
                    </modal>
                </div>
                <div class="the-referee">
                    <h3>The Training</h3>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem ipsa autem voluptates voluptatibus architecto? Repellat est commodi reiciendis ea ipsum illo, cum perferendis tenetur ab consequuntur facilis autem nihil voluptate!</p>
                    <div class="left-button" id="show-modal" @click="showModalTraining = true">Read More</div>
                    <modal v-if="showModalTraining" @close="showModalTraining = false">
                        <h3 slot="header">The Training</h3>
                        <p class="modal-p" slot="body">Training is provided by LRG...</p>
                    </modal>                    

                </div>
                <div class="the-referee">
                    <h3>The Commitment</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptates impedit aliquam, dolor, nihil sit deserunt laborum nulla reprehenderit quos, officia quo inventore. Repudiandae impedit sequi fugiat quidem odit.</p>
                    <div class="left-button" id="show-modal" @click="showModalCommitment = true">Read More</div>
                    <modal v-if="showModalCommitment" @close="showModalCommitment = false">
                        <h3 slot="header">The Commitment</h3>
                        <p class="modal-p" slot="body">Referees are committed to the game...</p>
                    </modal>                    
                </div>
                <div class="the-referee">
                    <h3>Communication Skills</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum at doloremque repellendus fuga tenetur, temporibus nemo provident architecto repudiandae eaque quae ipsa, earum nesciunt iure necessitatibus soluta ad maxime labore.</p>
                    <div class="left-button" id="show-modal" @click="showModalCommunication = true">Read More</div>
                    <modal v-if="showModalCommunication" @close="showModalCommunication = false">
                        <h3 slot="header">Communication Skills</h3>
                        <p class="modal-p" slot="body">Communication is the most imperative skill of a referee...</p>
                    </modal>
                </div>
            </div>
          </section>
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
          showModalRole: false,
          showModalTraining: false,
          showModalCommitment: false,
          showModalCommunication: false
        }
      });
    </script>
<?php include 'templates/bottomLinks.php'; ?>
</body>
</html>