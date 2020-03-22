require('./style.scss');

console.log('%cCreated by Max0n', 'color: #fff; font-weight: bold; background: #47c; padding:3px 5px;');

const introElement: HTMLElement = document.getElementById("fading");
let iterations: number = 0;

introElement.addEventListener('animationend', () => {
  iterations++;

  if (iterations >= 24)
    introElement.remove();
});
