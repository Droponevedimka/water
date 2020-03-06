<template lang="html">
    <form id="fform" class="formK" @submit="validate" methods="GET">
        <div class="svgContainer">
            <div>
                <svg class="mySVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 200">
                    <defs>
                        <circle id="armMaskPath" cx="100" cy="100" r="100"/>
                    </defs>
                    <clipPath id="armMask">
                        <use xlink:href="#armMaskPath" overflow="visible"/>
                    </clipPath>
                    
                    <g class="body">
                        <path fill="rgba(40, 110, 252, 0.4)" class="st0" d="M103.5,1.5c24.2,16.4,38.8,34.3,47,46c14.4,20.6,37.2,53.2,26,86c-6,17.7-19.2,27.5-24,31
                            c-24.7,17.9-64.8,22.2-90,0c-20.4-17.9-21-43.8-21-47c-0.3-30.3,21.1-48.6,24-51c8-6.3,21.1-18.5,30-38
                            C100.1,18.3,102.4,8.9,103.5,1.5z"/>
                        <g>
                            <path class="st1" d="M151,101.9c-1.9,4.2-5.1,13.1-3.9,23.5c0.5,4.3,1.6,7.5,1.9,8.3c2.1,6.1,5.3,10.1,7.3,12.3"/>
                            <path class="st2" d="M151,101.9c-1.9,4.2-5.1,13.1-3.9,23.5c0.5,4.3,1.6,7.5,1.9,8.3c2.1,6.1,5.3,10.1,7.3,12.3"/>
                        </g>
                        <path fill="#ffffff" class="st0" d="M60.3,84.5c-2.3,3.2-10.9,15.9-10.8,35c0,20.8,10.3,34.2,12.5,37L60.3,84.5z"/>
                        <path fill="rgba(40, 110, 252, 0.8)" class="st0" d="M118.5,169.5c0.7-0.9,1.9-1.3,3-1c1.5,0.4,2,1.9,2,2c-1.4,2.8-2.8,6.2-4,10c-2.3,7.3-2.9,13.9-3,19
                            c-3.1,0-6.2,0-9.2,0c-3.6,0-7.2,0-10.8,0c0.3-0.4,4.4-6.3,10.8-5.9c2.4,0.2,4.2,1.1,5.2,1.9c0.2-5,0.9-11.2,3-18
                            C116.4,174.6,117.4,171.9,118.5,169.5z"/>
                        <path fill="rgba(40, 110, 252, 0.4)" class="st0" d="M81.5,175.5c0.9,0.2,1.9,0.5,3,1c0.7,0.3,1.4,0.7,2,1c-0.3,1-0.7,2-1,3c-2.1,6.8-2.9,13.3-3,19
                            c-3.1,0-6.2,0-9.2,0c-3.6,0-7.2,0-10.8,0c0.3-0.4,4.4-6.3,10.8-5.9c2.4,0.2,4.2,1.1,5.2,1.9c0.1-3.3,0.3-7,1-11
                            C80,181.2,80.7,178.2,81.5,175.5z"/>
                    </g>                   

                    
                    <g class="eyeL">
                        
                        <path class="st0" d="M89.9,77.8c3.1,0,6.3,0,9.4,0c0.1-3.2-2.7-5.6-5.3-5.3C91.7,72.7,89.8,75,89.9,77.8z"/>
                        <circle cx="93" cy="74" r="1" fill="#fff"/>
                    </g>
                    <g class="eyeR">
                        <path class="st0" d="M120.9,77.8c3.1,0,6.3,0,9.4,0c0.1-3.2-2.7-5.6-5.3-5.3C122.7,72.7,120.8,75,120.9,77.8z"/>
                        <circle cx="124" cy="74" r="1" fill="#fff"/>
                    </g>
                    <g class="mouth">
                        <path class="st3" d="M103.5,92.5c0.3,0,0.7,0,1,0c4.3,0,8.7,0,13,0"/>
                        <path class="tongue" fill="#ffa6c8" d="M106,93.5c0,1.5,0,3.1,0,4.6c0.3,2.2,2.3,3.9,4.5,3.9s4.2-1.7,4.5-3.9c0-1.5,0-3.1,0-4.6
                            C112,93.5,109,93.5,106,93.5z"/>
                    </g>
                    
                    
                </svg>
            </div>
        </div>
        
        <div class="inputGroup inputGroup1">
            <label >Телефон:</label>
            <TheMask id="phone" ref="phone" class="phone" :mask="'+7 (###) ###-##-##'" required />
            <p class="helper helper1">ваш номер</p>
            <span class="indicator"></span>
        </div>               
        <div class="inputGroup inputGroup3">
            <button  id="login">Заказать</button>
        </div>	
    </form>
</template>

<script>
// <div class="inputGroup inputGroup2">
        //     <label for="password">Код</label>
        //     <input type="password" id="password" class="password" />
        // </div>
import {TheMask} from 'vue-the-mask'
import axios from 'axios'
export default {
  name: 'MainForm',  
  components: {TheMask},
  beforeMount(){ 
          
  },
  computed: {    
      
  },
  methods:{    
      validate(e) {     
          e.preventDefault();       
            var Phone = this.$refs.phone;
            var Name = this.$refs.name || 'Неизвестный';                    

            if (this.validatePhone(Phone.lastValue)) {
                dataLayer.push({'event': 'click-form'});

                axios.get('msg/index.php?name='+Name+'&phone='+Phone)
                    .then( res => {
                        console.log('удача ' + resul);
                        dataLayer.push({'event': 'click-form-correct'});
                    })
                    .catch( err => {
                        console.log('не удача. причина: ' + err);
                        dataLayer.push({'event': 'click-form-in-correct'});
                    })
                
                document.getElementById('modal').style.display = 'flex';
               
            } else {
                var x = 0;
                var timerId = setInterval(() =>{
                    x++;
                    if(x%2 == 0){
                        document.getElementById('phone').style.border = '2px solid rgba(75,213,249,.6)';
                        document.getElementById('phone').style.color = '#353538';
                    } else {
                        document.getElementById('phone').style.border = '2px solid #bd0000';
                        document.getElementById('phone').style.color = '#bd0000';
                    }
                    if(x == 8) {
                        clearInterval(timerId);
                        document.getElementById('phone').style.border = '2px solid rgba(75,213,249,.6)';
                        document.getElementById('phone').style.color = '#353538';
                    }
                }, 100);
               
            }           
        },        
        validatePhone(phone) {
            var res = true;
            if(phone.length !== 10) res = false;
            return res;
        }
    
  },
  mounted(){
        var email = document.querySelector('#phone'),
            password = document.querySelector('#password'), 
            mySVG = document.querySelector('.svgContainer'),             
            eyeL = document.querySelector('.eyeL'), 
            eyeR = document.querySelector('.eyeR'), 
            mouth = document.querySelector('.mouth');
        var caretPos, curEmailIndex, screenCenter, svgCoords, eyeMaxHorizD = 20, eyeMaxVertD = 10, noseMaxHorizD = 23, noseMaxVertD = 10, dFromC, eyeDistH, eyeLDistV, eyeRDistV, eyeDistR, mouthStatus = "small";

        function getCoord(e) {
            var 	carPos = email.selectionEnd,
                div = document.createElement('div'),
                span = document.createElement('span'),
                copyStyle = getComputedStyle(email),
                emailCoords = {}, caretCoords = {}, centerCoords = {}
            ;
            [].forEach.call(copyStyle, function(prop){
                div.style[prop] = copyStyle[prop];
            });
            div.style.position = 'absolute';
            document.body.appendChild(div);
            div.textContent = email.value.substr(0, carPos);
            span.textContent = email.value.substr(carPos) || '.';
            div.appendChild(span);
            
            emailCoords = getPosition(email);							//console.log("emailCoords.x: " + emailCoords.x + ", emailCoords.y: " + emailCoords.y);
            caretCoords = getPosition(span);							//console.log("caretCoords.x " + caretCoords.x + ", caretCoords.y: " + caretCoords.y);
            centerCoords = getPosition(mySVG);							//console.log("centerCoords.x: " + centerCoords.x);
            svgCoords = getPosition(mySVG);
            screenCenter = centerCoords.x + (mySVG.offsetWidth / 2);		//console.log("screenCenter: " + screenCenter);
            caretPos = caretCoords.x + emailCoords.x;					//console.log("caretPos: " + caretPos);
            
            dFromC = screenCenter - caretPos; 							//console.log("dFromC: " + dFromC);
            var pFromC = Math.round((caretPos / screenCenter) * 100) / 100;
            if(pFromC < 1) {
                
            } else if(pFromC > 1) {
                pFromC -= 2;
                pFromC = Math.abs(pFromC);
            }

            eyeDistH = -dFromC * .05;
            if(eyeDistH > eyeMaxHorizD) {
                eyeDistH = eyeMaxHorizD;
            } else if(eyeDistH < -eyeMaxHorizD) {
                eyeDistH = -eyeMaxHorizD;
            }
            
            var eyeLCoords = {x: svgCoords.x + 84, y: svgCoords.y + 76};
            var eyeRCoords = {x: svgCoords.x + 113, y: svgCoords.y + 76};
            var noseCoords = {x: svgCoords.x + 97, y: svgCoords.y + 81};
            var mouthCoords = {x: svgCoords.x + 100, y: svgCoords.y + 100};
            var eyeLAngle = getAngle(eyeLCoords.x, eyeLCoords.y, emailCoords.x + caretCoords.x, emailCoords.y + 25);
            var eyeLX = Math.cos(eyeLAngle) * eyeMaxHorizD;
            var eyeLY = Math.sin(eyeLAngle) * eyeMaxVertD;
            var eyeRAngle = getAngle(eyeRCoords.x, eyeRCoords.y, emailCoords.x + caretCoords.x, emailCoords.y + 25);
            var eyeRX = Math.cos(eyeRAngle) * eyeMaxHorizD;
            var eyeRY = Math.sin(eyeRAngle) * eyeMaxVertD;
            var noseAngle = getAngle(noseCoords.x, noseCoords.y, emailCoords.x + caretCoords.x, emailCoords.y + 25);
            var noseX = Math.cos(noseAngle) * noseMaxHorizD;
            var noseY = Math.sin(noseAngle) * noseMaxVertD;
            var mouthAngle = getAngle(mouthCoords.x, mouthCoords.y, emailCoords.x + caretCoords.x, emailCoords.y + 25);
            var mouthX = Math.cos(mouthAngle) * eyeMaxHorizD ;
            var mouthY = Math.sin(mouthAngle) * eyeMaxVertD ;
            var mouthR = Math.cos(mouthAngle);
            var chinX = mouthX * .8;
            var chinY = mouthY * .5;
            var chinS = 1 - ((dFromC * .15) / 100);
            if(chinS > 1) {chinS = 1 - (chinS - 1);}
            var faceX = mouthX * .3;
            var faceY = mouthY * .4;
            var faceSkew = Math.cos(mouthAngle) * 5;
            var eyebrowSkew = Math.cos(mouthAngle) * 25;
            var outerEarX = Math.cos(mouthAngle) * 4;
            var outerEarY = Math.cos(mouthAngle) * 5;
            var hairX = Math.cos(mouthAngle) * 6;
            var hairS = 1.2;
            
            TweenMax.to(eyeL, 1, {x: -eyeLX , y: -eyeLY, ease: Expo.easeOut});
            TweenMax.to(eyeR, 1, {x: -eyeRX , y: -eyeRY, ease: Expo.easeOut});
            TweenMax.to(mouth, 1, {x: -mouthX , y: -mouthY, rotation: mouthR, transformOrigin: "center center", ease: Expo.easeOut});
            
            
            document.body.removeChild(div);
        };

        function onEmailInput(e) {
            getCoord(e);
            var value = e.target.value;
            curEmailIndex = value.length;
            
            // very crude email validation for now to trigger effects
            if(curEmailIndex > 0) {
                if(mouthStatus == "small") {
                    mouthStatus = "medium";                  
                    TweenMax.to([eyeL, eyeR], 1, {scaleX: .85, scaleY: .85, ease: Expo.easeOut});
                }
                if(value.includes("@")) {
                    mouthStatus = "large";                    
                    TweenMax.to([eyeL, eyeR], 1, {scaleX: .65, scaleY: .65, ease: Expo.easeOut, transformOrigin: "center center"});
                } else {
                    mouthStatus = "medium";                    
                    TweenMax.to([eyeL, eyeR], 1, {scaleX: .85, scaleY: .85, ease: Expo.easeOut});
                }
            } else {
                mouthStatus = "small";               
                TweenMax.to([eyeL, eyeR], 1, {scaleX: 1, scaleY: 1, ease: Expo.easeOut});
            }
        }

        function onEmailFocus(e) {
            e.target.parentElement.classList.add("focusWithText");
            document.querySelector('.tongue').style.opacity = '1';
            getCoord();
        }

        function onEmailBlur(e) {
            if(e.target.value == "") {
                e.target.parentElement.classList.remove("focusWithText");
            }
            document.querySelector('.tongue').style.opacity = '0';
            resetFace();
        }

        function onPasswordFocus(e) {
            e.target.parentElement.classList.add("focusWithText");
            coverEyes();
        }

        function onPasswordBlur(e) {
            if(e.target.value == "") {
                e.target.parentElement.classList.remove("focusWithText");
            }
            uncoverEyes();
        }
       

        function resetFace() {
            TweenMax.to([eyeL, eyeR], 1, {x: 0, y: 0, ease: Expo.easeOut});
            TweenMax.to(mouth, 1, {x: 0, y: 0, rotation: 0, ease: Expo.easeOut});
            
        }

        function getAngle(x1, y1, x2, y2) {
            var angle = Math.atan2(y1 - y2, x1 - x2);
            return angle;
        }

        function getPosition(el) {
            var xPos = 0;
            var yPos = 0;

            while (el) {
                if (el.tagName == "BODY") {
                    // deal with browser quirks with body/window/document and page scroll
                    var xScroll = el.scrollLeft || document.documentElement.scrollLeft;
                    var yScroll = el.scrollTop || document.documentElement.scrollTop;

                    xPos += (el.offsetLeft - xScroll + el.clientLeft);
                    yPos += (el.offsetTop - yScroll + el.clientTop);
                } else {
                    // for all other non-BODY elements
                    xPos += (el.offsetLeft - el.scrollLeft + el.clientLeft);
                    yPos += (el.offsetTop - el.scrollTop + el.clientTop);
                }

                el = el.offsetParent;
            }
            return {
                x: xPos,
                y: yPos
            };
        }

        email.addEventListener('focus', onEmailFocus);
        email.addEventListener('blur', onEmailBlur);
        email.addEventListener('input', onEmailInput);
  }
}

</script>
