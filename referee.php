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
                    <h2>The Referee</h2>
                </div>
            </div>
        </section>
        <section id="the-referee-section" name="theReferee">   
            <div id="the-referee-con">
                <div class="the-referee">
                    <h3 class="skewRight">The Role of the Referee</h3>
                    <hr>
                    <p>Officials play a vital role in the game, they are often described as the third team on the ice. The basic role of the on-ice officials can be broken down into two simple words – safe and fair. For a referee to view and officiate the game with these two words in mind, they should be able to call a game that is acceptable to all of the participants.
                    </p>
                </div>
                <div class="the-referee">
                    <h3>The Training</h3>
                    <hr>
                    <p>The LRG training and development program is designed to assist young officials learn their role in the game and develop the skills necessary to ensure a safe and fair hockey game. This program consistently proves to be instrumental with guiding young officials for improvement of</p>
                </div>
                <div class="the-referee">
                    <h3>The Commitment</h3>
                    <hr>
                    <p>LRG members commit to representing the vision and mission of the London Referees Group. They encourage a high standard of ethics, closer cooperation, and understanding of the role of the referee among officials, coaches, players, parents, the community and the media. Membership requires a one-time application and statement of interest. Membership is open to all genders, ages 14 and up.</p>                   
                </div>
                <div class="the-referee">
                    <h3>Mentorship</h3>
                    <hr>
                    <p>As part of this program we assign experienced officials as mentors to assist with the training and develop our younger officials. The on-ice mentorship and off-ice guidance brings practical and classroom style learning together with positive enforcement in order to build their self-confidence</p>
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