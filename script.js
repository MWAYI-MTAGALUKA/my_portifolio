
            var i=0;
            var images =[];
            var time = 3000;
            
            
            images[0]='first.png';
            images[1]='second.png';
            images[2]='third.png';
      
            function changeImg(){
              document.slide.src=images[i];
      
              if(i < images.length - 1){
                  i++;
              }else {
                  i=0;
              }
      
              setTimeout("changeImg()",time);
            }
      
            windows.onload=changeImg;
    
          