<?php
/**
 * Template Name: Cover
 *
 * @package First-Portfolio
 *
 */ 
?>
<style> 
@import url('https://fonts.googleapis.com/css?family=Oswald:700');
@import url('https://fonts.googleapis.com/css?family=Rubik');

body {
  /* background-image: url('#'); */
  z-index: 1;
  background: url("http://firstportfolio.local/wp-content/uploads/2022/07/giphy-5.gif");
  /* background: linear-gradient(120deg, rgba(241,39,17,1) 0%, rgba(245,175,25,1) 100%); */
  background-size: 100% 100%;
  /* background-attachment:fixed; */
  background-repeat: no-repeat;

  color:#000;
  text-align:center;
  animation: animate 13s ease infinite;
}

/* Background Animation */


/* @keyframes animate{
    0% { background-position: 0 50%;
    }
    50% { background-position: 100% 50%;
    }
    100% { background-position: 0 50%;
    }

} */


#rotate-words {
  max-width:400px;
  margin:auto;
  padding:20% 0;
  font-size:2.2em;
  text-transform:uppercase;
  font-family: 'Oswald', sans-serif;
}

#rotate-words span {
  display:block;
  height:50px;
  font-size:.7em;
  text-transform: capitalize ;
  opacity:.8;
  font-family: 'Rubik', sans-serif;
  text-shadow: 1px 2px white;
}

#rotate-words div {
 position:absolute;
 opacity:0;
 text-shadow: 1px 2px white;
 overflow:hidden;
 left:10vw;
 width:80vw;
 line-height:1.2em;
 animation: rotate-word 32s linear infinite 0s;
}

@keyframes rotate-word {
    0% { opacity: 0;  transform: translateX(0);filter:blur(10px);transform:scale(1.2)}
    3% { opacity: 1;  transform: translateX(0);filter:blur(0px);transform:scale(.9)}
    12% { opacity: 1; transform: translateX(0);filter:blur(0px);transform:scale(1)}
    16% { opacity: 0; transform: translateX(0);filter:blur(10px);transform:scale(1.2)}
    80% { opacity: 0}
    100% { opacity: 0}
}

#rotate-words div:nth-child(2) { animation-delay: 4s}
#rotate-words div:nth-child(3) { animation-delay: 8s}
#rotate-words div:nth-child(4) { animation-delay: 12s}
#rotate-words div:nth-child(5) { animation-delay: 16s}
#rotate-words div:nth-child(6) { animation-delay: 20s}
#rotate-words div:nth-child(7) { animation-delay: 24s}
#rotate-words div:nth-child(8) { animation-delay: 28s}

@keyframes author {
    0% { opacity: 0;  transform: translateY(100px);filter:blur(10px);transform: scaleY(2)}
    20% { opacity:0; transform: translateY(200px);filter:blur(10px); transform: scaleY(2)}
    30% { opacity:1; transform: translateY(0);filter:blur(0px);transform: scaleY(1)}
    90% { opacity:1; transform: translateY(0);filter:blur(0px);transform: scaleY(.9)}
    100% { opacity:0; transform: translateY(0);filter:blur(10px);transform: scale(2)}
}

/* Button */
.btn3 {
    background-color: #3131cb;
    border: none;
    color: white;
    font-weight: bold;
    padding: 16px 32px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    opacity: 0.7;
    transition: 0.3s;
  }
  
  .btn3:hover {opacity: 3}

</style>

<div id="rotate-words">  
<div>Hello There<br />  <span>Welcome</span></div>
<div>My Name is Myeisha L Trimble<br />  <span>nice to Meet You!</span></div>
<div>I Am A Website Designer / Publisher<br />  <span>Welcome To My Portfolio</span></div>
<div>Thank you for checking out my portfolio<br />  <span></span></div>
<div>Select Button Below To see the magic <br />  <span></span></div>
<!-- <div><br />  <span>Someone</span></div>
<div>Loops for Eternity<br />  <span>No one</span></div>
<div>Simple CSS Tricks<br />  <span>Someone</span></div> -->
</div>

<a href="http://firstportfolio.local/homepage/">
   <button class="btn3">Continue to Portfolio ></button></a>

