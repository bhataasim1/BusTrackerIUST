// ============= buses TAB =============  //
const tabs = document.querySelectorAll('[data-target]'),
    tabContents = document.querySelectorAll('[data-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.target)

        tabContents.forEach(tabContent => {
            tabContent.classList.remove('buses__active')
        })
        target.classList.add('buses__active')

        tabs.forEach(tab => {
            tab.classList.remove('buses__active')
        })
        tab.classList.add('buses__active')
    })
})

// ============= Typing Text =============  //
var typed = new Typed(".home__subtitle", {
    strings: ["Connecting Campus Journeys: Discover the Future of Bus Tracking at IUST",
              "Navigating Excellence: Your Journey with IUST Bus Tracker",
              "On Board with Innovation: IUST Bus Tracker",
              "Arrive Informed: IUST Bus Tracker at Your Service",
              "Seamless Commutes, Thanks to IUST Bus Tracker",
              "IUST Bus Tracker: Your Journey Starts Here",
              "Empowering Your Journeys: IUST Bus Tracker",
              "Smart Moves, Smart Tracking: IUST Bus Tracker",
              "Efficiency on Wheels: IUST Bus Tracker",
              "Navigate with Ease: IUST Bus Tracker's Guide",],
    loop: true,
    typeSpeed: 50,
    backSpeed: 25,
    backDelay: 500,
});

