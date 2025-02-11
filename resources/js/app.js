import './bootstrap';

const startTrigger = document.getElementById('startTrigger');
const firstStep = document.querySelector('.first');
const secondStep = document.querySelector('.second');

startTrigger.addEventListener('click', () => {
    firstStep.classList.add('d-none');
    secondStep.classList.remove('d-none');
});
