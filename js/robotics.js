/**
 * These functions are called on each page, on each new load.
 */


/**
 * This function defines the parallax image for each page by looking at the page's class then assigning the image
 * source to the .parallax class defined in a css file for that page.
 */
$(function(){


    /**
     *  Activte Nav Fn()


    var longPath = window.location.pathname;
    var longPath2 = window.location.pathname;

    //window.alert(longPath.lastIndexOf('/') + " " + longPath.length) //DEBUG


    if(longPath.lastIndexOf('/') == longPath.length-1) {
        longPath2 = longPath.substring(0, longPath.length-1);
        //window.alert(longPath2); //DEBUG
    }


    var path = longPath2.substring(longPath2.lastIndexOf("/")+1, longPath2.size);

    //window.alert(window.location.pathname + "\n"  + longPath2 + "\n" + path); //DEBUG


    try {
        document.getElementById(path).classList.add('active');
    } catch (e) { //if we find a page that does not have that directory we will catch that exception and move on in life.
        //window.alert(e); //DEBUG
    }


    */
    /**
     * Parallax
     *
     * Applys the image to the parallax CSS for the page.
     */

    /** index */
    $('.parallax-index').parallax({
        imageSrc: '/img/4908-14-Robot.JPG'
    });

    /** about */
    $('.parallax-about').parallax({
        imageSrc: '/img/RedAlliance.JPG'
    });

    /** volunteer */
    $('.parallax-volunteer').parallax({
        imageSrc: '/img/ironbars.JPG'
    });

    /** donate */
    $('.parallax-donate').parallax({
        imageSrc: '/img/teamPhoto.jpeg'
    });

    /** sponsor  */
    $('.parallax-sponsor').parallax({
        imageSrc: '/img/teamPhoto.jpeg'
    });


/** FIRST PAGES */

    /** frc */
    $('.parallax-FIRST-FRC').parallax({
        imageSrc: '/img/ironbars.JPG'
    });

    /** frc second Parallax (robots)*/
    $('.parallax-FIRST-FRC-robots').parallax({
        imageSrc: '/img/4908-14-Robot.JPG'
    });

    /** ftc */
    $('.parallax-FIRST-FTC').parallax({
        imageSrc: '/img/ftc_internet.jpg'
    });

    /** FLL */
    $('.parallax-FIRST-FLL').parallax({
        imageSrc: '/img/fll_robot.jpg'
        //imageSrc: '/img/fll_team_working.jpg'
    });

});

