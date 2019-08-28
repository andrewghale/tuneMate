let shapes = [
    {
        d: "M37 60C38 60 40 60 43 60C46 60 48 60 49 60"
    },
    {
        d: "M37 60C38 61 40 62 43 62C46 62 48 61 49 60"
    }
]
anime({
    targets: '.mouthmorph',
    d: [
        {value: shapes[0].d},
        {value: shapes[1].d}
    ],
    direction: 'alternate',
    autoplay: true,
    delay: 1500,
    endDelay: 1000,
    easing: 'easeInOutQuad',
    duration: 2000,
    loop: true
});

anime({
    targets: '#logo',
    translateY: 20,
    opacity: 1,
    easing: 'spring(2, 95, 50, 0)'
});

//fox stuff
const eleleft = document.getElementById("left-eye");
const eleright = document.getElementById("right-eye");
if (eleleft) {
    let leftEye = [
        {
            d: "M75.2574 73.7121L64.663 69.186L85.1478 62.2795L75.2574 73.7121Z"
        },
        {
            d: "M75.2574 68.7121L64.663 69.186L85.1478 62.2795L75.2574 68.7121Z"
        }
    ]
    anime({
        targets: '.left-eye',
        d: [
            {value: leftEye[0].d},
            {value: leftEye[1].d}
        ],
        direction: 'alternate',
        autoplay: true,
        delay: 1000,
        endDelay: 80,
        easing: 'easeInOutQuad',
        duration: 70,
        loop: true
    });
}
if (eleright) {
    let rightEye = [
        {
            d: "M36.5422 73.6437L26.8884 62.1994L47.5026 69.2885L36.5422 73.6437Z"
        },
        {
            d: "M36.5422 68.6437L26.8884 62.1994L47.5026 69.2885L36.5422 68.6437Z"
        }
    ]
    anime({
        targets: '.right-eye',
        d: [
            {value: rightEye[0].d},
            {value: rightEye[1].d}
        ],
        direction: 'alternate',
        autoplay: true,
        delay: 1000,
        endDelay: 50,
        easing: 'easeInOutQuad',
        duration: 100,
        loop: true
    });
}

const battery = document.getElementById("battery-log");
if (battery) {
    var logEl = document.getElementById('battery-log');
    var batteryread = {
        charged: '0%',
        cycles: 120
    }
    anime({
        targets: batteryread,
        charged: '100%',
        cycles: 130,
        round: 1,
        easing: 'linear',
        update: function() {
            logEl.innerHTML = JSON.stringify(batteryread);
    }
    });
}

const foxFace = document.getElementById("fox-face");
if (foxFace) {
    anime({
        targets: '.fox-face',
        translateX: 2.5,
        scale: 1.05,
        rotate: '0.02turn',
        duration: 1000,
        delay: 2000,
        direction: 'alternate',
        loop: true
    });
}

//# sourceMappingURL=app.js.map
