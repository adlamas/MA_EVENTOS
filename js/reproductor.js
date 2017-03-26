            
            var contador = 0;           
            parseInt(contador);
           

function iniciar(){           
            
            var boton = document.getElementById("iniciar");
            boton.addEventListener("click", tocar, false );
            var boton2 = document.getElementById("detener");
            boton2.addEventListener("click", parar, false );
            var boton3 = document.getElementById("siguiente");
            boton3.addEventListener("click", siguiente, false);
            var boton4 = document.getElementById("anterior");
            boton4.addEventListener("click", anterior, false);
            
            
        }

        function tocar(){
             var arreglo = 
                    [document.getElementById("audio1"),
                     document.getElementById("audio2"),
                     document.getElementById("audio3")];
                 
            arreglo[contador].play();
        }
        
        function parar(){
             var arreglo = 
                    [document.getElementById("audio1"),
                     document.getElementById("audio2"),
                     document.getElementById("audio3")];
                 
            arreglo[contador].pause();
            arreglo[contador].currentTime = 0;
        }
        
        function siguiente(){
            
            contador++;
            
        }
        
        function anterior(){
            
        }

        window.addEventListener("load", iniciar, false);