<style>
  .contianer{
    width:600;
    display: flex;
    flex-wrap: wrap;
  }
  .item{
    width:33%;
    height:150px;
    /*background-image: url('http://globe-views.com/dcim/dreams/people/people-03.jpg');*/
    border: 1px grey solid;
    box-sizing: border-box;
  }
</style>
<button onclick="randomizer()">Click me</button>
<div class="contianer">
  <?php
$i = 0;
  do{
    ?>
    <div class="item" id="<?php echo $i ?>">

    </div>
    <?php
    $i = $i + 1;
  } while ($i < 12);
   ?>
</div>
<div id="total" style="font-size:3em">

</div>
<div id="num" style="font-size:3em">

</div>
<script>


  function rand_num(startValue, endValue) {
    var iChoices = endValue - startValue + 1;
    return Math.floor(Math.random() * iChoices + startValue);
  }
  var a = 0;
  var x = 0.6;
  var t = 1.06;
  var i = 0

  var div = ''
  function randomizer(){
    if(div !== ''){
      document.getElementById(div).style.backgroundColor = 'initial'
    } else {
      i = rand_num(74, 82);
      document.getElementById('total').innerHTML = i;
    }
    div = rand_num(0, 11);
    document.getElementById(div).style.backgroundColor = 'blue'
    document.getElementById('num').innerHTML = a;

    if(x<300){
      t = t * 1.0008;
    } else {
      t = t * 1.0002;
    }
    x = x * t;
    if(a<i){
      a = a + 1;
    setTimeout(randomizer, x)
    } else {
      document.getElementById('num').innerHTML = a+':'+x;
      x = 0.6;
      t = 1.06
      a = 0;
      div = '';

    }

  }






</script>
