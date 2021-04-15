import {fetchData} from "./modules/TheDataMiner.js";
import Schedule from "./modules/ScheduleComp.js";

(() => {
    console.log('fetch Vue Data');
    let vue_vm = new Vue({
        data: {
            allMatches: []
        },
    
        mounted: function() {
            console.log("Vue is mounted!");
            fetchData("./includes/index.php")
                .then(data => {
                    data.forEach(match => this.allMatches.push(match));
                })
                .catch(err => console.error(err)); 
        },

        updated: function() {
            console.log('Vue just updated the DOM');
        },

        components: {
            "match-card": Schedule
        }
    }).$mount("#app");
})();