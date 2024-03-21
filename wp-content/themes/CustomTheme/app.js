const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        } else{
            entry.target.classList.remove('show');
        }
    });
});


const hiddeElements = document.querySelectorAll('.hidden');
hiddeElements.forEach((el) => observer.observe(el));