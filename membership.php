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
