$(document).ready(function () {
    // Define an array of colors
    const colors = ["red", "blue", "green", "orange", "purple"];
    let currentIndex = 0;

    // Function to change the color
    function changeColor() {
        $("#initial").css("color", colors[currentIndex]);
        currentIndex = (currentIndex + 1) % colors.length;
    }

    // Call the function initially
    changeColor();

    // Set an interval to change the color every 2 seconds
    setInterval(changeColor, 1000);

    // Select the element containing the text
    var textElement = $("#animated-text");

    // Split the text into individual characters
    var characters = textElement.text().split("");

    // Empty the text container
    textElement.empty();

    // Loop through each character and wrap it in a span with fly-in-down class
    $.each(characters, function (index, character) {
        // Wrap each character in a span and apply fly-in-down class
        var span = $("<span>").text(character).addClass("fly-in-down");
        // Append the span to the text container
        textElement.append(span);

        // Adjust the delay for each character
        span.css("animation-delay", index * 0.1 + "s");
    });
    var texts = ["Web Developer", "AWC Developer"];
    var index = 0;

    // Function to change text at regular intervals
    function changeText() {
        $('#developer-text').fadeOut(function () {
            $(this).text(texts[index]).fadeIn();
        });
        index = (index + 1) % texts.length;
    }

    // Call the function initially
    changeText();

    // Set interval to change text every 3 seconds
    setInterval(changeText, 3000);


    $(".card-body").hover(
        function () {
            var headerId = $(this).attr('id').replace('body', 'header');
            $('#' + headerId).addClass('animated');
        },
        function () {
            var headerId = $(this).attr('id').replace('body', 'header');
            $('#' + headerId).removeClass('animated');
        }
    );


});
