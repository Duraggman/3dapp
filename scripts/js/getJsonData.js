$(document).ready(function () {
    //Ajax get data from data.json
    $.getJSON('model/data.json', function (data) {
        
        // get the home page data
        var homePage = data.pages.find(page => page.id == 'Home-Page');
        var cokePage = data.pages.find(page => page.id == 'Coke-Page');  
        var spritePage = data.pages.find(page => page.id == 'Sprite-Page');
        var oasisPage = data.pages.find(page => page.id == 'Oasis-Page');

        // check if the home page exists
        if (homePage) {
            // get the content of the home page
            var homeTop = homePage.content[0];

            // append the home page data to the home page
            $('#home_title').html("<h2>" + homeTop.header + "</h2>");
            $('#home_subtitle').html("<h3>" + homeTop.subheader + "</h3>");
            $('#home_des').html("<p>" + homeTop.paragraph + "</p>");

            // get the cards content
            var cards = homePage.content[1].cards;
            // loop through all cards and append them to the home-card-row
            cards.forEach(function (card) {
                if (card.title === 'Coca Cola') {
                    $('#title_left').html("<h3>" + card.title + "</h3>");
                    $('#txt_left').html("<p>" + card.text + "</p>");
                    $('#img_left').attr('src', card.image);
                    $('#link_left').html("<a href='" + card.link + "'>Find out More</a>");
                } else if (card.title === 'Sprite') {
                    $('#title_mid').html("<h3>" + card.title + "</h3>");
                    $('#txt_mid').html("<p>" + card.text + "</p>");
                    $('#img_mid').attr('src', card.image);
                    $('#link_mid').html("<a href='" + card.link + "'>Find out More</a>");
                } else if (card.title === 'Oasis') {
                    $('#title_right').html("<h3>" + card.title + "</h3>");
                    $('#txt_right').html("<p>" + card.text + "</p>");
                    $('#img_right').attr('src', card.image);
                    $('#link_right').html("<a href='" + card.link + "'>Find out More</a>");;
                }
            });
        } 
        if (cokePage) {
            // get the coke card content
            var cokeCard = cokePage.content[2];
            //set the coke card content
            $('#c_card_title').html("<h3>" + cokeCard.header + "</h3>");
            $('#c_card_txt').html("<p>" + cokeCard.paragraph + "</p>");
            $('#c_card_link').html("<a href='" + cokeCard.link + "'>Find out More</a>");
        } 

        if (spritePage) {
            var spriteX3D = spritePage.content[0];
            $('#inline_s').attr("url", spriteX3D.model)
            // get the sprite card content
            var spriteCard = spritePage.content[2];
            //set the sprite card content
            $('#s_card_title').html("<h3>" + spriteCard.header + "</h3>");
            $('#s_card_txt').html("<p>" + spriteCard.paragraph + "</p>");
            $('#s_card_link').html("<a href='" + spriteCard.link + "'>Find out More</a>");
        } 

        if (oasisPage) {
            // get the oasis x3d content
            x3dPage = oasisPage;
            var oasisX3d = oasisPage.content[0];
           $('#inline_o').attr("url", oasisX3d.model)

            // get the oasis gallery content
            var oasisGallery = oasisPage.content[1];
            //set the oasis gallery content
            $('#o_gallery_title').html("<h3>" + oasisGallery.header + "</h3>");
            $('#o_gallery_des').html("<p>" + oasisGallery.description + "</p>");


            // get the oasis card content
            var oasisCard = oasisPage.content[2];
            //set the oasis card content
            $('#o_card_title').html("<h3>" + oasisCard.header + "</h3>");
            $('#o_card_txt').html("<p>" + oasisCard.paragraph + "</p>");
            $('#o_card_link').html("<a href='" + oasisCard.link + "'>Find out More</a>");

            //get the oasis caption content
            var oasisCaption = oasisPage.content[3];
            //set the oasis caption content
            $('#o_model-cap').html("<p>" + oasisCaption.caption + "</p>");
            $('#o_model-look').html("<h4>" + oasisCaption.description + "</h4>");
        }
    });
});
