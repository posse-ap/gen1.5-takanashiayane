for (let i = 0; i < 20; i++) {
    btn1 = document.getElementById(`btn${i+1}`);
    target1 = document.getElementById(`target${i+1}`)

    function button () {
        target1.append('<input type="text">');
    };
};