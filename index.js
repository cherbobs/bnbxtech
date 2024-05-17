const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');

            
            let valueDisplays = document.querySelectorAll(".num"); // Change to querySelectorAll to select all elements with class "num"
            let interval = 3500;

            valueDisplays.forEach((valueDisplay) => {
                let startValue = 0;
                let endValue = parseInt(valueDisplay.getAttribute("data-val"));
                let duration = Math.floor(interval / endValue);
                let counter = setInterval(function() {
                    startValue += 1;
                    valueDisplay.textContent = startValue;
                    if (startValue == endValue) {
                        clearInterval(counter);
                    }
                }, duration);
            });

        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));



var typed = new Typed(".text-wrapper-6",{
    strings: ["Grands groupes", "Start-up", "Secteurs publiques", "PME", "Ministères"],
    typeSpeed : 150,
    backSpeed : 150,
    loop: true,  
    showCursor: false, 
  
})