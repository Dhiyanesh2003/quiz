function quiz_1(){
    document.getElementById('quiz_1').style.display="none";
    document.getElementById('quiz_2').style.display="block";
}
function quiz_2(){
    document.getElementById('quiz_2').style.display="none";
    document.getElementById('quiz_3').style.display="block";
}
function quiz_3(){
    document.getElementById('quiz_3').style.display="none";
    document.getElementById('quiz_4').style.display="block";
}
function quiz_4(){
    document.getElementById('quiz_4').style.display="none";
    document.getElementById('quiz_5').style.display="block";
}
function quiz_5(){
    document.getElementById('quiz_5').style.display="none";
    document.getElementById('quiz_6').style.display="block";
}
function quiz_6(){
    document.getElementById('quiz_6').style.display="none";
    document.getElementById('quiz_7').style.display="block";
}
function quiz_7(){
    document.getElementById('quiz_7').style.display="none";
    document.getElementById('quiz_8').style.display="block";
}
function quiz_8(){
    document.getElementById('quiz_8').style.display="none";
    document.getElementById('quiz_9').style.display="block";
}
function quiz_9(){
    document.getElementById('quiz_9').style.display="none";
    document.getElementById('quiz_10').style.display="block";
}
function quiz_10(){
    document.getElementById('quiz_10').style.display="none";
    document.getElementById('quiz_11').style.display="block";
}
function quiz_11(){
    document.getElementById('quiz_11').style.display="none";
    document.getElementById('quiz_12').style.display="block";
}
function quiz_12(){
    document.getElementById('quiz_12').style.display="none";
    document.getElementById('quiz_13').style.display="block";
}
function quiz_13(){
    document.getElementById('quiz_13').style.display="none";
    document.getElementById('quiz_14').style.display="block";
}
function quiz_14(){
    document.getElementById('quiz_14').style.display="none";
    document.getElementById('quiz_15').style.display="block";
}
function quiz_15(){
    document.getElementById('quiz_15').style.display="none";
    document.getElementById('quiz_16').style.display="block";
}
function quiz_16(){
    document.getElementById('quiz_16').style.display="none";
    document.getElementById('quiz_17').style.display="block";
}
function quiz_17(){
    document.getElementById('quiz_17').style.display="none";
    document.getElementById('quiz_18').style.display="block";
}
function quiz_18(){
    document.getElementById('quiz_18').style.display="none";
    document.getElementById('quiz_19').style.display="block";
}
function quiz_19(){
    document.getElementById('quiz_19').style.display="none";
    document.getElementById('quiz_20').style.display="block";
}
function quiz_20(){
    document.getElementById('quiz_14').style.display="none";
    document.getElementById('quiz_15').style.display="block";
}

document.getElementById('done').style.display="block";
setTimeout(function() {
    document.getElementById('formid').submit();
}, 900000);
window.onload = function() {
    timer();
};
function timer(){
    const printNumbersForEvery2Sec = ()=>{
        i=900;
        for(i = 0; i < 900; i++) {
            setTimeout( () =>{
              console.log(i);
              mins=parseInt(i/60);
              secs=i%60;
              document.getElementById("timer").innerHTML = "Test Duration : "+mins+" mins and "+secs+" secs";
              i--;
            }, i * 1000)
          }
      }
      printNumbersForEvery2Sec(1);
}