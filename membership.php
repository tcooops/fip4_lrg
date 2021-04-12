<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/vue"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRG - Membership</title>
    <?php include 'templates/links.php'; ?>
    <?php include 'templates/lightbox.php'; ?>
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
        </section>
        <section id="schedule-section">
            <h2>Upcoming Games Schedule</h2>
            <div class="calendar-con">
                <div class="day-box">
                    <span class="date">March 31st 2021</span>
                </div>
                <div class="cal-details">
                    <div>
                        <h3 for="teams">Match:</h3>    
                        <p name="teams">Senators at Leafs</p>
                    </div>
                    <div>
                        <h3 for="location">Location:</h3>
                        <p name="location">Soctiabank Arena</p>
                    </div>
                    <div >
                        <h3 for="refs">Refs Assigned:</h3>
                        <ul name="refs" class="refs">
                            <li>Thomas Chabot</li>
                            <li>Erik Gudbranson</li>
                            <li>Brady Tkackuk</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="calendar-con">
                <div class="day-box">
                    <span class="date">April 2nd 2021</span>
                </div>
                <div class="cal-details">
                    <div>
                        <h3 for="teams">Match:</h3>    
                        <p name="teams">Senators at Canadiens</p>
                    </div>
                    <div>
                        <h3 for="location">Location:</h3>
                        <p name="location">Centre Bell</p>
                    </div>
                    <div >
                        <h3 for="refs">Refs Assigned:</h3>
                        <ul name="refs" class="refs">
                            <li>Thomas Chabot</li>
                            <li>Erik Gudbranson</li>
                            <li>Brady Tkackuk</li>
                        </ul>
                        
                    </div>
                </div>
            </div>



            <div class="calendar-con">
                <div class="day-box">
                    <span class="date">April 4th 2021</span>
                </div>
                <div class="cal-details">
                    <div>
                        <h3 for="teams">Match:</h3>    
                        <p name="teams">Senators at Canucks</p>
                    </div>
                    <div>
                        <h3 for="location">Location:</h3>
                        <p name="location">Rogers Arena</p>
                    </div>
                    <div >
                        <h3 for="refs">Refs Assigned:</h3>
                        <ul name="refs" class="refs">
                            <li>Thomas Chabot</li>
                            <li>Erik Gudbranson</li>
                            <li>Brady Tkackuk</li>
                        </ul>
                        
                    </div>
                </div>
            </div>


        </section>
        <section>
            <div class="inner-hero" id="inner-hero-committee">
                <h2 id="committeetitle">Committee</h2>
            </div>
            <div id="committee-con">
                <div id="committee"> 
                    <div>              
                       <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>President –Josh Ackworth</p>
                    </div>     
                    <div>  
                        <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>VP–Joe Masse</p>
                    </div> 
                    <div>
                       <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>Referee In Chief- Bobby Wright</p>
                    </div>
                    <div>
                       <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>Secretary-Mark Lemieux</p>
                    </div>
                    <div>
                       <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>Treasurer-Rob Neable</p>
                    </div>
                    <div>
                       <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>Membership Rep1- Paul Raes</p>
                    </div>
                    <div>
                       <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>Membership Rep2-Melanie Alexander</p>
                    </div>
                    <div>
                       <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>Assignor 1-Marc Giroux</p> 
                    </div>
                    <div>
                       <img class="user" src="public/images/icon_user.svg" alt="user">
                            <p>Assignor 2-Jamie Dewar</p>
                    </div>
                    <div>
                       <img class="user" src="public/images/icon_user.svg" alt="user"> 
                            <p>Scheduler-Paul Schofield</p>
                    </div>
                </div>
             </div>
        </section>
        <?php include 'templates/footer.php'; ?>
  </div>
</main>
        <template>
            <div class="calendar-con">
                <div class="day-box">
                    <span class="date"></span>
                </div>
                <div class="cal-details">
                    <div>
                        <h3 for="teams">Match:</h3>    
                        <p name="teams"></p>
                    </div>
                    <div>
                        <h3 for="location">Location:</h3>
                        <p name="location"></p>
                    </div>
                    <div >
                        <h3 for="refs">Refs Assigned:</h3>
                        <ul name="refs" class="refs">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </template>

<script>
      Vue.component("modal", {
        template: "#modal-template"
      });

      new Vue({
        el: "#app",
        data: {
          showModalSkills1: false,
          showModalSkills2: false,
          showModalSkills3: false,
          showModalSkills4: false
        }
      });
    </script>
<?php include 'templates/bottomLinks.php'; ?>
</body>
</html>
