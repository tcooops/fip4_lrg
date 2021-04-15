export default {
    name: "Schedule",
    props: ["match"],
    data: function(){
        return{
            names: this.match.names,
            matchlocation: this.match.matchlocation,
            refs: this.match.refs,
            matchdate: this.match.matchdate
        }
    },
    template: 
    //This is just testing 
        `<div class="calendar-con">
            <div class="day-box">
                <span class="date">{{ match.matchdate }}</span>
            </div>
            <div class="cal-details">
                <div>
                    <h3 for="teams">Match:</h3>    
                    <p name="teams">{{ match.names }}</p>
                </div>
                <div>
                    <h3 for="location">Location:</h3>
                    <p name="location">{{ match.matchlocation }}</p>
                </div>
                <div >
                    <h3 for="refs">Refs Assigned:</h3>
                    <ul name="refs" class="refs">
                        <li>{{ match.refs }}</li>
                    </ul>
                </div>
            </div>
        </div>
        `,
    created: function(){
        console.log(`created ${this.match.name}'s card`);
    }   
}