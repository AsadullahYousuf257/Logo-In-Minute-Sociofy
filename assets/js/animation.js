// Counter Animation
const counters = document.querySelectorAll('.counter')
counters.forEach(counter => {
counter.innerText = '0'
const updateCounter = () => {
const target = +counter.getAttribute('data-target')
const c = +counter.innerText
const increment = target / 200
if(c < target) {
counter.innerText = `${Math.ceil(c + increment)}`
setTimeout(updateCounter, 1)
} else {
counter.innerText = target
}
}
updateCounter()
})

// Counter Animation red & black

const countersBlack = document.querySelectorAll('.counter-1')
countersBlack.forEach(counter => {
counter.innerText = '0'
const updateCounter = () => {
const target = +counter.getAttribute('data-target')
const c = +counter.innerText
const increment = target / 200
if(c < target) {
counter.innerText = `${Math.ceil(c + increment)}`
setTimeout(updateCounter, 1)
} else {
counter.innerText = target
}
}
updateCounter()
})

// const countersService = document.querySelectorAll('.counter-1')
// countersService.forEach(counter => {
// counter.innerText = '0'
// const updateCounter = () => {
// const target = +counter.getAttribute('data-target')
// const c = +counter.innerText
// const increment = target / 200
// if(c < target) {
// counter.innerText = `${Math.ceil(c + increment)}`
// setTimeout(updateCounter, 1)
// } else {
// counter.innerText = target
// }
// }
// updateCounter()
// })
// Vertical Tabs

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  
  // Portfolio page logos js
  $(document).ready(function(){
    $(".content").slice(0, 4).show();
    $("#loadMore").on("click", function(e){
      e.preventDefault();
      $(".content:hidden").slice(0, 4).slideDown();
      if($(".content:hidden").length == 0) {
        $("#loadMore").text("No Content").addClass("noContent");
      }
    });
    
  })