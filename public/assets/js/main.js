window.addEventListener("scroll", () => {
  const navbar = document.querySelector(".navbar");
  navbar.classList.toggle("scrolled", window.scrollY > 50);
});


/* =========================================
    UNIVERSAL COUNTER FUNCTION
========================================= */

window.addEventListener("load", () => {
    const counters = document.querySelectorAll(".counter");
    
    if (counters.length === 0) return;

    const animateCounter = (counter) => {
        const target = parseInt(counter.dataset.target, 10);
        if (isNaN(target)) return;

        const duration = 2000; 
        const startTime = performance.now();

        const update = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Ease out function
            const easeOut = 1 - Math.pow(1 - progress, 3);
            const value = Math.floor(easeOut * target);

            counter.textContent = value.toLocaleString();

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                // Add "+" only if it's a large round number or based on your preference
                counter.textContent = target.toLocaleString() + (target > 10 ? "+" : "");
            }
        };

        requestAnimationFrame(update);
    };

    const observerOptions = {
        threshold: 0.2, // Trigger when 20% of the element is visible
        rootMargin: "0px 0px -50px 0px" 
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const container = entry.target;
                const containerCounters = container.querySelectorAll(".counter");
                
                containerCounters.forEach(counter => {
                    // Prevent re-animating if already done
                    if (!counter.classList.contains('animated')) {
                        counter.classList.add('animated');
                        animateCounter(counter);
                    }
                });

                // Optional: Stop observing this section once animated
                // observer.unobserve(container);
            }
        });
    }, observerOptions);

    // Tell the observer to watch BOTH sections
    const section1 = document.querySelector(".experience-home");
    const section2 = document.querySelector(".our-work-v2");

    if (section1) observer.observe(section1);
    if (section2) observer.observe(section2);
});
/* =========================================
   SERVICES INTERACTION
========================================= */

document.addEventListener("DOMContentLoaded", () => {
    const serviceItems = document.querySelectorAll(".service-item");

    if (serviceItems.length === 0) return;

    serviceItems.forEach((item) => {
        item.addEventListener("click", () => {
            const link = item.querySelector(".service-learn-more").getAttribute("href");
            window.location.href = link;
        });
    });
});
function sendToWhatsApp() {

    const phoneNumber = "917879067585"; // your WhatsApp number

    const firstName = document.getElementById('firstName').value.trim();
    const lastName  = document.getElementById('lastName').value.trim();
    const email     = document.getElementById('email').value.trim();
    const phone     = document.getElementById('phone').value.trim();
    const country   = document.getElementById('country').value.trim();
    const message   = document.getElementById('message').value.trim();

    if (!firstName || !lastName || !email || !phone || !country || !message) {
        alert("Please fill in all required fields.");
        return;
    }

    const whatsappMessage =
        `*New Contact Form Submission*%0A%0A` +
        `*Name:* ${firstName} ${lastName}%0A` +
        `*Email:* ${email}%0A` +
        `*Phone:* ${phone}%0A` +
        `*Country:* ${country}%0A` +
        `*Message:* ${message}`;

    const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
    window.open(url, '_blank').focus();
}
