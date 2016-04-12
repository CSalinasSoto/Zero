$(document).ready(function(){
    var pc1Inhoud = $('.pc1').detach();
    var pc2Inhoud = $('.pc2').detach();
    var pc3Inhoud = $('.pc3').detach();
    var pc4Inhoud = $('.pc4').detach();
    var pc5Inhoud = $('.pc5').detach();
    var pc6Inhoud = $('.pc6').detach();


    //modaal venster plaatsen
    $('.pc1Thumb').on('click', function(){
        modaalVenObj.openen({inhoud : pc1Inhoud, breedte: 520});
    });

    $('.pc2Thumb').on('click', function(){
        modaalVenObj.openen({inhoud : pc2Inhoud, breedte: 520});
    });

    $('.pc3Thumb').on('click', function(){
        modaalVenObj.openen({inhoud : pc3Inhoud, breedte: 520});
    });

    $('.pc4Thumb').on('click', function(){
        modaalVenObj.openen({inhoud : pc4Inhoud, breedte: 520});
    });

    $('.pc5Thumb').on('click', function(){
        modaalVenObj.openen({inhoud : pc5Inhoud, breedte: 520});
    });

    $('.pc6Thumb').on('click', function(){
        modaalVenObj.openen({inhoud : pc6Inhoud, breedte: 520});
    });
});