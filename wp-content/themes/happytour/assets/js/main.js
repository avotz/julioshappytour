;(function($){
	
	var menu = $('.menu'),
		body = $('body'),
		sidebar = $('.side-bar');

    $(window).load(function() {
        body.addClass('loaded');

       sidebar.removeClass('open');

        
    });
    menu.find(".menu-item-has-children").hoverIntent({
      over: function() {
            $(this).find(">.sub-menu").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.sub-menu").slideUp(200);
          },
      timeout: 200

       });
    $('.handle').on('click',function () {
    	if(sidebar.hasClass('open'))
    		sidebar.removeClass('open')
    	else
    		sidebar.addClass('open');
    });
        
        $modal = $('.tour-popup');
        $page = $('.page');
        $page.find('.entry-gallery .slides').cycle();
        function showModal(post_id) {
                $modal.find('.title').html('');
                $modal.find('.content').html('Loading...');
                $modal.find('.gallery .slides').cycle('destroy');
                $modal.find('.gallery .slides img').remove();
                $.ajax({
                      type: 'GET',
                      url: '/wp-json/wp/v2/tour/'+post_id,//'/api/get_post/?id='+ post_id +'&post_type=tour',
                      
                      success: function(data){
                          console.log(data)
                          $modal.find('.title').html(data.title.rendered);
                          $modal.find('.content').html(data.content.rendered);
                          $gallery = data.meta_box.rw_gallery_thumb;
                          $.each($gallery, function (i, item) {
                              $modal.find('.gallery .slides').append('<img src="'+ item.full_url +'" alt="'+ data.title.rendered +'" />');
                          });
                          
                          $modal.find('.gallery .slides').cycle();
                      },
                      error:function(){
                          $modal.find('.content').html('<p>Ohh Error</p>');
                      }
                  });
        }

     $('.btn-open-tour').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        closeOnContentClick: false,
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');

                var post_id = this.st.el.attr('data-tour');

                showModal(post_id);
                
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
      $('.menu-item-60 a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');

                var post_id = this.st.el.attr('data-tour');

               showModal(post_id);
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

      $('.menu-item-35 a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');

                var post_id = this.st.el.attr('data-tour');

               showModal(post_id);
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
      $('.menu-item-36 a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');

                var post_id = this.st.el.attr('data-tour');

                showModal(post_id);
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

    $('.menu-item-37 a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');

                var post_id = this.st.el.attr('data-tour');

                showModal(post_id);
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
    $('.menu-item-38 a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');

                var post_id = this.st.el.attr('data-tour');

               showModal(post_id);
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
    $('.menu-item-99 a').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');

                var post_id = this.st.el.attr('data-tour');

               showModal(post_id);
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });

    $form_request = $('.side-bar form');

      $('.btn-reserve').on('click', function(){
          
           $('.side-bar').addClass('open');
          //$form_transfer.find('select[name="destination"] option[value="'+ $(this).data('title') +'"]').attr("selected",'selected');
          $form_request.find('select[name="tour"]').val($('#tour-popup h3.title').text());

      });

   

    /* $('.btn-open-tour').on('click', function(){
              
            var tour = $(this).data('tour');
            
            var data
            $modal.find('.content').html(data);

    });*/



	
	resizes();
   
    $(window).resize(resizes); 
	 
 	function resizes()
    {
        
       /*if($(window).width() < 980){
            var width_section = 0;
        }else{
            var width_section = section_left.width();
            
        }*/
        height_dispo = getWindowHeight();
        width_dispo = getWindowWidth(); 
       
        
        $('.slide').height(height_dispo - 120);
       

      
    }

})(jQuery);

function getScrollerWidth() {
    var scr = null;
    var inn = null;
    var wNoScroll = 0;
    var wScroll = 0;

    // Outer scrolling div
    scr = document.createElement('div');
    scr.style.position = 'absolute';
    scr.style.top = '-1000px';
    scr.style.left = '-1000px';
    scr.style.width = '100px';
    scr.style.height = '50px';
    // Start with no scrollbar
    scr.style.overflow = 'hidden';

    // Inner content div
    inn = document.createElement('div');
    inn.style.width = '100%';
    inn.style.height = '200px';

    // Put the inner div in the scrolling div
    scr.appendChild(inn);
    // Append the scrolling div to the doc
    document.body.appendChild(scr);

    // Width of the inner div sans scrollbar
    wNoScroll = inn.offsetWidth;
    // Add the scrollbar
    scr.style.overflow = 'auto';
    // Width of the inner div width scrollbar
    wScroll = inn.offsetWidth;

    // Remove the scrolling div from the doc
    document.body.removeChild(
        document.body.lastChild);

    // Pixel width of the scroller
    return (wNoScroll - wScroll);
}

function getWindowHeight() {
    var windowHeight=0;
    if (typeof(window.innerHeight)=='number') {
        windowHeight=window.innerHeight;
    } else {
        if (document.documentElement && document.documentElement.clientHeight) {
            windowHeight = document.documentElement.clientHeight;
        } else {
            if (document.body && document.body.clientHeight) {
                windowHeight=document.body.clientHeight;
            }
        }
    }
    return windowHeight;
}

function getWindowWidth() {
    var windowWidth=0;
    if (typeof(window.innerWidth)=='number') {
        windowWidth=window.innerWidth;
    } else {
        if (document.documentElement && document.documentElement.clientWidth) {
            windowWidth = document.documentElement.clientWidth;
        } else {
            if (document.body && document.body.clientWidth) {
                windowWidth=document.body.clientWidth;
            }
        }
    }
    return windowWidth;
}




	
