
console.log('custom script loaded!');
// jQuery(document).ready(function($) {

//   $(php_vars.carouselID).owlCarousel({
//     autoPlay: true,
//     items: php_vars.items,
//     navigation: php_vars.nav,
//     pagination: php_vars.dots,
//     paginationNumbers: php_vars.nums,
//     stopOnHover: php_vars.pause_hover
//   });

// });


// // hook the callback for element instantiating and refreshing
// if (xData && xData.api) {
//   //register callback for the element
//   xData.api.map('my-element', function () {

// //this refers to the element's root tag
//       var $this = $(this);

//       //if it's first run after page load, need to instantiate class 
//       var myEl = $this.data('myElement');
//       if (!myEl) {
//           myEl = new myElement($this);
//           $this.data('myElement', myEl);
//       }

// //fire method that renders/updates element
//       myEl.render();
//   });
// }

/*That's how I do it. Run this snippet on loading your element's script file. The registered callback is called by CS each time the element is refreshed (ie on attribute change).*/
