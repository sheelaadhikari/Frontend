let pathname = window.location.pathname;
console.log(pathname);
let newPathname = pathname.slice(1);
console.log(newPathname);
let y = document.querySelectorAll('[href="' + newPathname + '"]');
console.log(y);
y[0].style.color = "orangered";