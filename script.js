const slider = document.querySelector('.slider ');

const leftarrow = document.querySelector(' .left');
const rightarrow = document.querySelector(' .right');

var sectionindex = 0;

leftarrow.addEventListener('click', function() {
    sectionindex = (sectionindex > 0) ? sectionindex - 1 : 0;
    slider.style.transform = 'translate(' + (sectionindex) * -25 + '%)';
});

rightarrow.addEventListener('click', function() {
    sectionindex = (sectionindex < 3) ? sectionindex + 1 : 3;
    slider.style.transform = 'translate(' + (sectionindex) * -25 + '%)';
});