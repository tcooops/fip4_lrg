new Vue({
    el: 'image-slider',
    data: {
    images: ['http://i.imgur.com/vYdoAKu.jpg', 'http://i.imgur.com/PUD9HQL.jpg', 'http://i.imgur.com/Lfv18Sb.jpg', 'http://i.imgur.com/tmVJtna.jpg', 'http://i.imgur.com/ZfFAkWZ.jpg'],
    currentNumber: 0,
    timer: null
    },
   
    mounted: function () {
    this.startRotation();
    },
   
    methods: {
    startRotation: function() {
    this.timer = setInterval(this.next, 3000);
    },
   
    stopRotation: function() {
    clearTimeout(this.timer);
    this.timer = null;
    },
   
    next: function() {
    this.currentNumber += 1
    }
    }
   });
