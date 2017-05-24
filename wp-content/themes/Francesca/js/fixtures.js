$(function () {
    'use strict';

    var loremText, lorem1, lorem2, lorem3;

    loremText = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
    lorem1 =  '<h1>Title 1</h1>' + loremText + '<img src="images/spiaggia.jpg">' + loremText;
    lorem2 =  '<h1>Title 2</h1>' + loremText + '<img src="images/calcio.jpg">' + loremText + loremText;
    lorem3 =  '<h1>Title 3</h1>' + loremText + '<img src="images/cinema.jpg">' + loremText;

    $(".lorem-text-1").html(lorem1);
    $(".lorem-text-2").html(lorem2);
    $(".lorem-text-3").html(lorem3);

});

