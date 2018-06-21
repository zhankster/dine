var btn = `<div class="flex-container"><div class="og" @click="tblClick(2, $event)" ref="tbl"><h2><span ref="t_name">{{ title }}</span><br />`;
btn += `<span ref="t_num">{{act}}</span></h2></div></div>`;


Vue.component('select-button', {
    data: function () {
        return {
            count: 0
            //id : "B3"
        }
    },
    props: ['title', 'act', 'cnt', 'stat'],∏
    methods: {
        tblClick: function (t_num, $event) {
            //console.log(this.$refs)
            var cls = this.$refs.tbl.className;
            if (cls == "og") {
                this.$refs.tbl.className = "fb";
                this.act = t_num;
            } else {
                this.$refs.tbl.className = "og";
                this.act = this.cnt;
            }
            console.log(this.$refs);
        }
    },
    computed: {
        tbl_id: function () {

        }

    },
    //template: '<button v-on:click="count++">This has been clicked {{count}} times</button>'
    template: btn
})


var app = new Vue({
    el: "#app-main",
    data: {
        appName: "Dine",
        isFull: false

    },
    methods: {
        executeSearch: function (t, e) {
            var msg = this.query + " got a " + this.score + " on the test";
            alert(msg);
        },
        onBlockClick: function () {
            alert("Middle Click");
        },
        evaluateKey: function () {
            return false;
        },
        testClick: function (key, e) {

            //alert(e.target.innerText);
            //alert(this.$refs["t_name"].innerText);
            console.log(this.$refs["t_name_" + key].innerText);
            //alert(e.target.$refs["t_name"].innerText);

            var el = document.getElementById(key);
            var stat = el.title;
            if (stat === "Open"){
                el.title = "Full"
                el.className = "fb";
            }
            else{
                el.title = "Open"
                el.className = "og";
            }
            console.log(el.title);
            //el.title = "Full";
            //console.log(el.title);
            
            // console.log(e.target.title);
            // e.target.title = "closed";
            // console.log(e.target.title);

            var svg = this.$refs["t_name_" + key];
            this.svgDOMX = svg.getBoundingClientRect().left;
            console.log(this.svgDOMX);
            //bootbox.alert("BBox Test");
        }
    }
});