// Define a new component called button-counter
Vue.component('button-counter', {
  data: function () {
    return {
      count: 0
    }
  },
  template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
  //template: reqiure ('./js/template/count.html')
})

var app = new Vue({
  el: "#jb",
  data: {
    title: "VUE JS BS Test",
    items: [
        "Bootstrap",
        "Vue",
        "JQuery"
    ],
    maxAbv:0,
    cnt: 0
  }
});
 var test = "";
