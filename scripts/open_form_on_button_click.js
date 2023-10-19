        function OpenForm(num) {
            if(num==1){
                document.getElementById('form2').style.display = 'none';
                document.getElementById('form3').style.display = 'none';
                document.getElementById('form').style.display = 'block';
            }
                
            if(num==2){
                document.getElementById('form3').style.display = 'none';
                document.getElementById('form').style.display = 'none';
                document.getElementById('form2').style.display = 'block';
            }
                
            if(num==3){
                document.getElementById('form2').style.display = 'none';
                document.getElementById('form').style.display = 'none';
                document.getElementById('form3').style.display = 'block';
            }
                
        }
        
  