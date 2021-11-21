$('.show-progress-lieutrinh').click(function (e) {
    e.preventDefault();
    let idModal = $(this).attr('data-id');
    let progressBar =  $("[circular-progress-id='"+idModal+"']");
    let valueContainer = $("[value-container-id='"+idModal+"']");

    let progressValue = 0;
    let progressEndValue = 78;
    let speed = 10;

    let progress = setInterval(() => {
        progressValue++;
        valueContainer.html(`${progressValue}%`);

        progressBar.css('background', `conic-gradient(
            #4d5bf9 ${progressValue * 3.6}deg,
            #cadcff ${progressValue * 3.6}deg
        )`);
        if (progressValue == progressEndValue) {
            clearInterval(progress);
        }
    }, speed);
});
