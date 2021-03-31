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
                <h2>Committee</h2>
            </div>
            <div id="committee-con">
                <div id="committee">                    
                    <ul>
                       <li><img class="user" src="public/images/icon_user.svg" alt="user"></li>
                       <li><img class="user" src="public/images/icon_user.svg" alt="user"></li>
                       <li><img class="user" src="public/images/icon_user.svg" alt="user"></li>
                       <li><img class="user" src="public/images/icon_user.svg" alt="user"></li>
                       <li><img class="user" src="public/images/icon_user.svg" alt="user"></li>
                       <li><img class="user" src="public/images/icon_user.svg" alt="user"></li>
                    </ul>
                </div>
                <p>
                    Our members are dedicated, trained professionals focused on making your game as fun as possible. 
                </p>
             </div>
        </section>
        <section id="skill-building-section">   
            <div class="inner-hero" id="inner-hero-skills">
                <h2>Skill Building with LRG</h2>
            </div>
            </div>
                <div id="skill-building-con">
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae adipisci quos, ut cupiditate alias culpa laudantium voluptas quisquam magnam doloribus possimus. Voluptates excepturi praesentium fugit! Pariatur dolorum dolores provident enim?</p>
                        <div class="left-button" id="show-modal" @click="showModalSkills1 = true">Read More</div>
                        <modal v-if="showModalSkills1" @close="showModalSkills1 = false">
                            <h3 slot="header">Skills 1</h3>
                            <p class="modal-p" slot="body">Skills</p>
                        </modal>  
                    </div>
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <hr>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem ipsa autem voluptates voluptatibus architecto? Repellat est commodi reiciendis ea ipsum illo, cum perferendis tenetur ab consequuntur facilis autem nihil voluptate!</p>
                        <div class="left-button" id="show-modal" @click="showModalSkills2 = true">Read More</div>
                        <modal v-if="showModalSkills2" @close="showModalSkills2 = false">
                            <h3 slot="header">Skills 2</h3>
                            <p class="modal-p" slot="body">Skills skills</p>
                        </modal>  
                    </div>
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptates impedit aliquam, dolor, nihil sit deserunt laborum nulla reprehenderit quos, officia quo inventore. Repudiandae impedit sequi fugiat quidem odit.</p>
                        <div class="left-button" id="show-modal" @click="showModalSkills3 = true">Read More</div>
                        <modal v-if="showModalSkills3" @close="showModalSkills3 = false">
                            <h3 slot="header">Skills 3</h3>
                            <p class="modal-p" slot="body">Skills skills skills</p>
                        </modal>                       
                    </div>
                    <div class="skill-building">
                        <h3>Skill Building</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum at doloremque repellendus fuga tenetur, temporibus nemo provident architecto repudiandae eaque quae ipsa, earum nesciunt iure necessitatibus soluta ad maxime labore.</p>
                        <div class="left-button" id="show-modal" @click="showModalSkills4 = true">Read More</div>
                        <modal v-if="showModalSkills4" @close="showModalSkills4 = false">
                            <h3 slot="header">Skills 4</h3>
                            <p class="modal-p" slot="body">Skills skills skills skills</p>
                        </modal>  
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
