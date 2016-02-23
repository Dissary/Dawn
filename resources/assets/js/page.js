/**
 * Created by Tim on 23.02.2016.
 */

$(document).ready(function()
{
    "use strict";
    console.log("Ren-chon is life!");
    jQuery('.team-item-link').mouseenter(mouseEnter);
    jQuery('.team-item-link').mouseleave(mouseLeave);
});

function mouseEnter(e){
    "use strict";
    $(this).children(".img-responsive").addClass("team-item-hover");
    $(this).children(".team-item-text").addClass("team-item-text-hover");
    $(this).children(".team-item-subtext").addClass("team-item-subtext-hover");
}

function mouseLeave(e){
    "use strict";
    $(this).children(".img-responsive").removeClass("team-item-hover");
    $(this).children(".team-item-text").removeClass("team-item-text-hover");
    $(this).children(".team-item-subtext").removeClass("team-item-subtext-hover");
}