$(document).ready(function() {
    // Rebooter le monde
    const bladeRunnerQuotes = [
        "I've seen things you people wouldn't believe.",
        "All those moments will be lost in time, like tears in rain.",
        "The light that burns twice as bright burns half as long.",
        "Quite an experience to live in fear, isn't it?"
    ];

    $("#reboot-world").click(function() {
        const randomQuote = bladeRunnerQuotes[Math.floor(Math.random() * bladeRunnerQuotes.length)];
        $("#jumbotron-content").text(randomQuote);
    });

    // Progression de la barre de progression
    $("#progress-left").click(function() {
        let progressBar = $(".progress-bar");
        let width = parseInt(progressBar.attr("aria-valuenow"));
        if (width > 0) {
            width -= 10;
            progressBar.css("width", width + "%").attr("aria-valuenow", width);
        }
    });

    $("#progress-right").click(function() {
        let progressBar = $(".progress-bar");
        let width = parseInt(progressBar.attr("aria-valuenow"));
        if (width < 100) {
            width += 10;
            progressBar.css("width", width + "%").attr("aria-valuenow", width);
        }
    });

    // Soumettre et modifier la couleur du spinner
    $("#submit-form").click(function(e) {
        e.preventDefault();
        let spinnerColors = ['text-primary', 'text-success', 'text-warning', 'text-danger'];
        let randomColor = spinnerColors[Math.floor(Math.random() * spinnerColors.length)];
        $(".spinner-border").removeClass().addClass('spinner-border ' + randomColor);
    });
});
