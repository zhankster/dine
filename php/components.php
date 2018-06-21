<?php
$selectButton = <<< SEL_B
<script type="text/x-template" id="selBtn">
    <div class="flex-container"><div class="og" @click="tblClick(2, \$event)" ref="tbl">
        <h2><span ref="t_name">{{ title }}</span><br />
        <span ref="t_num">{{act}}PHP</span>
        </h2></div>
        </div>
</script>

<script type="text/x-template" id="selectBtn">
<div class="flex-container">
            <div class="og" @click="tblClick(1, \$event)" 
            ref="tbl"><h2><span ref="t_name">{{ title }}</span><br />
            <span ref="t_num">{{act}}</span></h2>
            </div>
        </div>
</script>
SEL_B;

$modal01 = <<< MOD_01
<!-- template for the modal component -->
<script type="x/template" id="modal-01">
   <transition name="modal">
       <div class="modal-mask" v-show="show">
           <div class="modal-container">
               <div class="modal-header">
                   <h3>New Post</h3>
               </div>
               <div class="modal-body">
                   <label class="form-label">
                       Title
                       <input class="form-control">
                   </label>
                   <label class="form-label">
                       Body
                       <textarea rows="5" class="form-control"></textarea>
                   </label>
               </div>
               <div class="modal-footer text-right">
                   <button class="modal-default-button" @click="savePost()">
                       Save
                   </button>
               </div>
           </div>
       </div>
   </transition>
</script>
MOD_01;

$modal02 = <<< MOD_02
<script type="text/x-template" id="mod01" >
<b-modal @shown="focusMyElement" v-model="modalShow">
    <b-button>I Don't Have Focus</b-button>
    <br>
    <b-form-input type="text"></b-form-input>
    <br>
    <!-- element to gain focus when modal is opened -->
    <b-form-input ref="focusThis" type="text"></b-form-input>
    <br>
    <b-form-input type="text"></b-form-input>
</b-modal>
</script>
MOD_02;

?>