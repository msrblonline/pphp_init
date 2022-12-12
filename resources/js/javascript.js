(function($){
    $('.i-accept').on('click', function() {   
      if(localStorage.noshow !== '1') {
        $('#cookie-notice').addClass('d-none');
         localStorage.noshow='1';
      }  
    });
    if(localStorage.noshow == '1') {
      $('#cookie-notice').addClass('d-none');
    };
  })(jQuery);

window.onload = function(){
  setTimeout(function(){
    document.getElementById("fadein").remove();
    console.log('hello world ${{project_name}}');
  },1000);
};