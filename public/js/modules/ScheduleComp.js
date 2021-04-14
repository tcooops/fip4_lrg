export default {
    name: "Schedule",
    props: ["match"],
    data: function(){
        return{
            names: this.match.names,
            location: this.match.location,
            refs: this.match.refs,
            date: this.match.date
        }
    },
    template: 
    //This is just testing 
        `<div class="calendar">
        <h2>Fetching Schedule here</h2>
            <div>
                <h3>{{ match.names }}</h3>
                <h4>{{ match.location }}</h4>
                <h4>{{ match.refs }}</h4>
                <h4>{{ match.date }}</h4>
            </div>
        </div>
        `,
    created: function(){
        console.log(`created ${this.match.name}'s card`);
    }   
}