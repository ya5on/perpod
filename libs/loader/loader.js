// LOADER///////////////////////////////////////////////////////////
// var
//     images              = document.images,
//     images_total_count  = images.length,
//     images_loaded_count = 0,
//     preloader           = document.getElementById('page-preloader'),
//     perc_display        = document.getElementById('load-perc');

// for ( var i = 0; i < images_total_count; i++ )
// {
//     image_clone         = new Image();
//     image_clone.onload  = image_loaded;
//     image_clone.onerror = image_loaded;
//     image_clone.src     = images[i].src;

// }
// console.log(images_loaded_count);
// console.log(images_total_count);


//  function image_loaded() {
//     images_loaded_count++;
//     perc_display.innerHTML = (( (100 / images_total_count) * images_loaded_count ) << 0) + '%';

//     if (images_loaded_count >= images_total_count)  {
//         setTimeout(function () {
//             if ( !preloader.classList.contains('done'))
//             {
//                 preloader.classList.add('done');
//             }
//         }, 1000);
//     }
// }