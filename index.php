<!Doctype>
<html>
<head><title>VR</title>
    <meta charset="utf-8">
  	
    <script src="js/aframe.min.js"></script>
    </head>

    <body>
        
    <a-scene>
      
<a-sky color="skyblue" src="img/cumulus-cloud.jpg"></a-sky>
        <a-camera position="0 1 14"
                  cursor-visible="true"
                  cursor-scale="2"
                  cursor-color="#0095dd"
                  cursor-opacity="0.5"></a-camera>
        <a-light
         type="directional"
                 color="ghostwhite"
                 intensity="2.5"
                 position="1 1 3"
                 
                 ></a-light>
      
     
      <!---chair---->
       <a-box
             src="img/wood3.jpg"
               position="1 1 2.5"
               depth="0.29"
               rotation="90 180 90"
               width="5"
               height="6"
              >
           <a-box
                  
                  src="wood3.jpg"
               position="-1.9 -2.2 2.9"
               depth="6"
             
                  
                  >
           
           
           
           
           
           
           </a-box>
        
        <a-box
                  
                  src="img/wood3.jpg"
               position="-1.9 2.4  2.9"
               depth="6s"
             
                  
                  >
           
           
           
           
           
           
           </a-box>
        
        
        <a-box
             src="img/wood3.jpg"
               position="2.6 0.14 -2"
               depth="0.29"
               rotation="-360 -270 -90"
               width="6.2"
               height="16"
               ></a-box>
        
        </a-box>



        
        
        
        
        
        
        
        <!-----table------>
        
          <a-box
             src="img/wood2.jpg"
               position="1 1 2"
               depth="0.29"
               rotation="90 180 90"
               width="5"
               height="9"
               
               
               >
            <a-cylinder
                   src="img/wood3.jpg"
                   position="0 0 4"
                   rotation="90 90 90"
                   height="7.5"
                   width="5"
                   >
            
            
           <a-box
             src="img/wood2.jpg"
               position="-0.1 3.5 -0.1"
               depth="0.2"
               rotation="90 180 90"
               width="5"
               height="5"
               
               
                  ></a-box>
            
            
            </a-cylinder>
                
        
        
        
        
    
        
        </a-box>
      

</a-scene>

        
        
    
    
    </body>




</html>