var y=[];
var z=" ";

//personal_querybox js
function personal_func1(){
    if(document.getElementById("a").checked){
      document.getElementById("personal_querybox").style.display="none";
    }
  }
function personal_func2(){
    if(document.getElementById("na").checked) {
        document.getElementById("personal_querybox").style.display = "block";
      }
    }
  

//contact_querybox js
function contact_func1(){
    if(document.getElementById("contact_a").checked){
      document.getElementById("contact_querybox").style.display="none";
    }

  }
function contact_func2(){
      if(document.getElementById("contact_na").checked) {
        document.getElementById("contact_querybox").style.display = "block";
      }
    }
//clgBDS_querybox js
function clgBDS_func1(){
    if(document.getElementById("clgBDS_a").checked){
      document.getElementById("clgBDS_querybox").style.display="none";
    }

  }
function clgBDS_func2(){
      if(document.getElementById("clgBDS_na").checked) {
        document.getElementById("clgBDS_querybox").style.display = "block";
      }
    }
//cldMDS_querybox js
function clgMDS_func1(){
    if(document.getElementById("clgMDS_a").checked){
      document.getElementById("clgMDS_querybox").style.display="none";
    }

  }
function clgMDS_func2(){
      if(document.getElementById("clgMDS_na").checked) {
        document.getElementById("clgMDS_querybox").style.display = "block";
      }
    }
//clgPHD_querybox js
function clgPHD_func1(){
    if(document.getElementById("clgPHD_a").checked){
      document.getElementById("clgPHD_querybox").style.display="none";
    }

  }
function clgPHD_func2(){
      if(document.getElementById("clgPHD_na").checked) {
        document.getElementById("clgPHD_querybox").style.display = "block";
      }
    }

//clgFellowship_querybox js
function clgFellowship_func1(){
    if(document.getElementById("clgFellowship_a").checked){
      document.getElementById("clgFellowship_querybox").style.display="none";
    }

  }
function clgFellowship_func2(){
      if(document.getElementById("clgFellowship_na").checked) {
        document.getElementById("clgFellowship_querybox").style.display = "block";
      }
    }

//clgScholarship_querybox js
function clgScholarship_func1(){
    if(document.getElementById("clgScholarship_a").checked){
      document.getElementById("clgScholarship_querybox").style.display="none";
    }

  }
function clgScholarship_func2(){
      if(document.getElementById("clgScholarship_na").checked) {
        document.getElementById("clgScholarship_querybox").style.display = "block";
      }
    }

//clgDocBDS_querybox js
function clgDocBDS_func1(){
    if(document.getElementById("clgDocBDS_a").checked){
      document.getElementById("clgDocBDS_querybox").style.display="none";
    }

  }
function clgDocBDS_func2(){
      if(document.getElementById("clgDocBDS_na").checked) {
        document.getElementById("clgDocBDS_querybox").style.display = "block";
      }
    }

//clgDocMDS_querybox js
function clgDocMDS_func1(){
    if(document.getElementById("clgDocMDS_a").checked){
      document.getElementById("clgDocMDS_querybox").style.display="none";
    }

  }
function clgDocMDS_func2(){
      if(document.getElementById("clgDocMDS_na").checked) {
        document.getElementById("clgDocMDS_querybox").style.display = "block";
      }
    }

//clgProgressStudent_querybox js
function clgProgress_func1(){
    if(document.getElementById("clgProgress_a").checked){
      document.getElementById("clgProgress_querybox").style.display="none";
    }

  }
function clgProgress_func2(){
      if(document.getElementById("clgProgress_na").checked) {
        document.getElementById("clgProgress_querybox").style.display = "block";
      }
    }

//clgAcademic_querybox js
function clgAcademics_func1(){
    if(document.getElementById("clgAcademics_a").checked){
      document.getElementById("clgAcademics_querybox").style.display="none";
    }

  }
function clgAcademics_func2(){
      if(document.getElementById("clgAcademics_na").checked) {
        document.getElementById("clgAcademics_querybox").style.display = "block";
      }
    }

//clgExtracurricular_querybox js
function clgExtracurricular_func1(){
    if(document.getElementById("clgExtracurricular_a").checked){
      document.getElementById("clgExtracurricular_querybox").style.display="none";
    }

  }
function clgExtracurricular_func2(){
      if(document.getElementById("clgExtracurricular_na").checked) {
        document.getElementById("clgExtracurricular_querybox").style.display = "block";
      }
    }


//enter value to querybox1
function jquery1()  {
            
            var x = document.getElementById("f_name").innerHTML;
            console.log(x);
            if(!document.getElementById("cb1").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }

function jquery2()  {
            
            var x = document.getElementById("m_name").innerHTML;
            console.log(x);
            if(!document.getElementById("cb2").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }
function jquery3()  {
            
            var x = document.getElementById("l_name").innerHTML;
            console.log(x);
            if(!document.getElementById("cb3").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }
function jquery4()  {
            
            var x = document.getElementById("father_name").innerHTML;
            if(!document.getElementById("cb4").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }        
function jquery5()  {
            
            var x = document.getElementById("mother_name").innerHTML;
            if(!document.getElementById("cb5").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        } 
function jquery6()  {
            
            var x = document.getElementById("reg").innerHTML;
            if(!document.getElementById("cb6").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }  
function jquery7()  {
            
            var x = document.getElementById("gender").innerHTML;
            if(!document.getElementById("cb7").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }                
function jquery8()  {
            
            var x = document.getElementById("bdate").innerHTML;
            if(!document.getElementById("cb8").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }         
function jquery9()  {
            
            var x = document.getElementById("bplace").innerHTML;
            if(!document.getElementById("cb9").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }         
function jquery10()  {
            
            var x = document.getElementById("blood_grp").innerHTML;
            if(!document.getElementById("cb10").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }         
function jquery11()  {
            
            var x = document.getElementById("pan_no").innerHTML;
            if(!document.getElementById("cb11").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }        
function jquery12()  {
            
            var x = document.getElementById("aadhar").innerHTML;
            if(!document.getElementById("cb12").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }            
function jquery13()  {
            
            var x = document.getElementById("pass_no").innerHTML;
            if(!document.getElementById("cb13").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }          
function jquery14()  {
            
            var x = document.getElementById("par_pan_no").innerHTML;
            if(!document.getElementById("cb14").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }          
function jquery15()  {
            
            var x = document.getElementById("religion").innerHTML;
            if(!document.getElementById("cb15").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }  
function jquery16()  {
            
            var x = document.getElementById("caste_res").innerHTML;
            if(!document.getElementById("cb16").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }                  
function jquery17()  {
            
            var x = document.getElementById("caste").innerHTML;
            if(!document.getElementById("cb17").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }          
function jquery18()  {
            
            var x = document.getElementById("category").innerHTML;
            if(!document.getElementById("cb18").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }          
function jquery19()  {
            
            var x = document.getElementById("photo").innerHTML;
            if(!document.getElementById("cb19").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box1").innerHTML = y;
        }          
//personal checkbox ends
//contact checkbox js
function jquery20()  {
            
            var x = document.getElementById("perm_addr").innerHTML;
            if(!document.getElementById("cb20").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }           
function jquery21()  {
            
            var x = document.getElementById("pres_addr").innerHTML;
            if(!document.getElementById("cb21").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }     
function jquery22()  {
            
            var x = document.getElementById("domicile").innerHTML;
            if(!document.getElementById("cb22").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }                 
function jquery23()  {
            
            var x = document.getElementById("std_contact").innerHTML;
            if(!document.getElementById("cb23").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }           
function jquery24()  {
            
            var x = document.getElementById("std_email").innerHTML;
            if(!document.getElementById("cb24").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }     
function jquery25()  {
            
            var x = document.getElementById("father_cont").innerHTML;
            if(!document.getElementById("cb25").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }                 
function jquery26()  {
            
            var x = document.getElementById("father_email").innerHTML;
            if(!document.getElementById("cb26").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }         
function jquery27()  {
            
            var x = document.getElementById("mother_cont").innerHTML;
            if(!document.getElementById("cb27").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }                           
function jquery28()  {
            
            var x = document.getElementById("mother_email").innerHTML;
            if(!document.getElementById("cb28").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box2").innerHTML = y;
        }             
//contct js ends        

//clgBDS js 
function jquery29()  {
            
            var x = document.getElementById("tenthnameBDS").innerHTML;
            if(!document.getElementById("cb29").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box3").innerHTML = y;
        }             
function jquery30()  {
            
            var x = document.getElementById("tenthboardBDS").innerHTML;
            if(!document.getElementById("cb30").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box3").innerHTML = y;
        }         
function jquery31()  {
            
            var x = document.getElementById("tenthyearBDS").innerHTML;
            if(!document.getElementById("cb31").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box3").innerHTML = y;
        }          
function jquery32()  {
            
            var x = document.getElementById("twelthnameBDS").innerHTML;
            if(!document.getElementById("cb32").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box3").innerHTML = y;
        }          
function jquery33()  {
            
            var x = document.getElementById("twelthboardBDS").innerHTML;
            if(!document.getElementById("cb33").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box3").innerHTML = y;
        }          
function jquery34()  {
            
            var x = document.getElementById("twelthyearBDS").innerHTML;
            if(!document.getElementById("cb34").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box3").innerHTML = y;
        }          
//clgBDS js ends

//clgMDS js
function jquery35()  {
            
            var x = document.getElementById("tenthnameMDS").innerHTML;
            if(!document.getElementById("cb35").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }             
function jquery36()  {
            
            var x = document.getElementById("tenthboardMDS").innerHTML;
            if(!document.getElementById("cb36").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }         
function jquery37()  {
            
            var x = document.getElementById("tenthyearMDS").innerHTML;
            if(!document.getElementById("cb37").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }          
function jquery38()  {
            
            var x = document.getElementById("twelthnameMDS").innerHTML;
            if(!document.getElementById("cb38").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }          
function jquery39()  {
            
            var x = document.getElementById("twelthboardMDS").innerHTML;
            if(!document.getElementById("cb39").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }          
function jquery40()  {
            
            var x = document.getElementById("twelthyearMDS").innerHTML;
            if(!document.getElementById("cb40").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }        
function jquery41()  {
            
            var x = document.getElementById("bdsnameMDS").innerHTML;
            if(!document.getElementById("cb41").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }                 
function jquery42()  {
            
            var x = document.getElementById("bdsboardMDS").innerHTML;
            if(!document.getElementById("cb42").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }                
function jquery43()  {
            
            var x = document.getElementById("bdsyearMDS").innerHTML;
            if(!document.getElementById("cb43").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box4").innerHTML = y;
        }                
//clgMDS js ends
//clgPHD js
function jquery44()  {
            
            var x = document.getElementById("tenthnamePHD").innerHTML;
            if(!document.getElementById("cb44").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }           
function jquery45()  {
            
            var x = document.getElementById("tenthboardPHD").innerHTML;
            if(!document.getElementById("cb45").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }         
function jquery46()  {
            
            var x = document.getElementById("tenthyearPHD").innerHTML;
            if(!document.getElementById("cb46").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }         
function jquery47()  {
            
            var x = document.getElementById("twelthnamePHD").innerHTML;
            if(!document.getElementById("cb47").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }         
function jquery48()  {
            
            var x = document.getElementById("twelthboardPHD").innerHTML;
            if(!document.getElementById("cb48").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }         
function jquery49()  {
            
            var x = document.getElementById("twelthyearPHD").innerHTML;
            if(!document.getElementById("cb49").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }         
function jquery50()  {
            
            var x = document.getElementById("bdsnamePHD").innerHTML;
            if(!document.getElementById("cb50").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }         
function jquery51()  {
            
            var x = document.getElementById("bdsboardPHD").innerHTML;
            if(!document.getElementById("cb51").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }                 
function jquery52()  {
            
            var x = document.getElementById("bdsyearPHD").innerHTML;
            if(!document.getElementById("cb52").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }                 
function jquery53()  {
            
            var x = document.getElementById("mdsnamePHD").innerHTML;
            if(!document.getElementById("cb53").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }         
function jquery54()  {
            
            var x = document.getElementById("mdsboardPHD").innerHTML;
            if(!document.getElementById("cb54").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }                 
function jquery55()  {
            
            var x = document.getElementById("mdsyearPHD").innerHTML;
            if(!document.getElementById("cb55").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }                         
function jquery56()  {
            
            var x = document.getElementById("othernamePHD").innerHTML;
            if(!document.getElementById("cb56").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }                 
function jquery57()  {
            
            var x = document.getElementById("otherboardPHD").innerHTML;
            if(!document.getElementById("cb57").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }                 
function jquery58()  {
            
            var x = document.getElementById("otheryearPHD").innerHTML;
            if(!document.getElementById("cb58").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box5").innerHTML = y;
        }                 
//clgPHD js ends  

//clgFellowship JS
function jquery59()  {
            
            var x = document.getElementById("tenthnameFELL").innerHTML;
            if(!document.getElementById("cb59").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }        

function jquery60()  {
            
            var x = document.getElementById("tenthboardFELL").innerHTML;
            if(!document.getElementById("cb60").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }        

function jquery61()  {
            
            var x = document.getElementById("tenthyearFELL").innerHTML;
            if(!document.getElementById("cb61").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }

function jquery62()  {
            
            var x = document.getElementById("twelthnameFELL").innerHTML;
            if(!document.getElementById("cb62").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }     
function jquery63()  {
            
            var x = document.getElementById("twelthboardFELL").innerHTML;
            if(!document.getElementById("cb63").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }       
function jquery64()  {
            
            var x = document.getElementById("twelthyearFELL").innerHTML;
            if(!document.getElementById("cb64").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }            
function jquery65()  {
            
            var x = document.getElementById("bdsnameFELL").innerHTML;
            if(!document.getElementById("cb65").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }   
function jquery66()  {
            
            var x = document.getElementById("bdsboardFELL").innerHTML;
            if(!document.getElementById("cb66").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }               
function jquery67()  {
            
            var x = document.getElementById("bdsyearFELL").innerHTML;
            if(!document.getElementById("cb67").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }         
function jquery68()  {
            
            var x = document.getElementById("mdsnameFELL").innerHTML;
            if(!document.getElementById("cb68").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }         
function jquery69()  {
            
            var x = document.getElementById("mdsboardFELL").innerHTML;
            if(!document.getElementById("cb69").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }         
function jquery70()  {
            
            var x = document.getElementById("mdsyearFELL").innerHTML;
            if(!document.getElementById("cb70").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        } 
function jquery71()  {
            
            var x = document.getElementById("othernameFELL").innerHTML;
            if(!document.getElementById("cb71").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }                 
function jquery72()  {
            
            var x = document.getElementById("otherboardFELL").innerHTML;
            if(!document.getElementById("cb72").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }         
function jquery73()  {
            
            var x = document.getElementById("otheryearFELL").innerHTML;
            if(!document.getElementById("cb73").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box6").innerHTML = y;
        }    
        
//clgFellowship js ends  

//clgScholarship JS/

function jquery74()  {
            
    var x = document.getElementById("Scholardetails").innerHTML;
    if(!document.getElementById("cb74").checked) {
        y.push(x);
    }
    else{
        var index = y.indexOf(x);
        if(index > -1){
            y.splice(index,1);
        }
    }            
    document.getElementById("query_box7").innerHTML = y;
}

function jquery75()  {
            
    var x = document.getElementById("Scholaragencyname").innerHTML;
    if(!document.getElementById("cb75").checked) {
        y.push(x);
    }
    else{
        var index = y.indexOf(x);
        if(index > -1){
            y.splice(index,1);
        }
    }            
    document.getElementById("query_box7").innerHTML = y;
}

function jquery76()  {
            
    var x = document.getElementById("Scholaramt").innerHTML;
    if(!document.getElementById("cb76").checked) {
        y.push(x);
    }
    else{
        var index = y.indexOf(x);
        if(index > -1){
            y.splice(index,1);
        }
    }            
    document.getElementById("query_box7").innerHTML = y;
}

//clgScholarship js ends  

//clgBDS JS

function jquery77()  {
            
    var x = document.getElementById("DocBDSadmitcard").innerHTML;
    if(!document.getElementById("cb77").checked) {
        y.push(x);
    }
    else{
        var index = y.indexOf(x);
        if(index > -1){
            y.splice(index,1);
        }
    }            
    document.getElementById("query_box8").innerHTML = y;
}

    function jquery78()  {
            
        var x = document.getElementById("DocBDSrankletter").innerHTML;
        if(!document.getElementById("cb78").checked) {
            y.push(x);
        }
        else{
            var index = y.indexOf(x);
            if(index > -1){
                y.splice(index,1);
            }
        }            
        document.getElementById("query_box8").innerHTML = y;
    }

    function jquery79()  {
            
        var x = document.getElementById("DocBDSallotmentletter").innerHTML;
        if(!document.getElementById("cb79").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box8").innerHTML = y;
        }

    function jquery80()  {
            
        var x = document.getElementById("DocBDSadmissionletter").innerHTML;
        if(!document.getElementById("cb80").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box8").innerHTML = y;
           
        }

            function jquery81()  {
            
                var x = document.getElementById("DocBDS10thmarksheet").innerHTML;
                if(!document.getElementById("cb81").checked) {
                        y.push(x);
                    }
                    else{
                        var index = y.indexOf(x);
                        if(index > -1){
                            y.splice(index,1);
                        }
                    }            
                    document.getElementById("query_box8").innerHTML = y;
                }
    
    
            function jquery82()  {
                
            var x = document.getElementById("DocBDS10thpassingcerti").innerHTML;
            if(!document.getElementById("cb82").checked) {
                    y.push(x);
                }
                else{
                    var index = y.indexOf(x);
                    if(index > -1){
                        y.splice(index,1);
                    }
                }            
                document.getElementById("query_box8").innerHTML = y;
            }
            function jquery83()  {
                        
                    var x = document.getElementById("DocBDS12thmarksheet").innerHTML;
                    if(!document.getElementById("cb83").checked) {
                            y.push(x);
                        }
                        else{
                            var index = y.indexOf(x);
                            if(index > -1){
                                y.splice(index,1);
                            }
                        }            
                        document.getElementById("query_box8").innerHTML = y;
                    }

function jquery84()  {
            
        var x = document.getElementById("DocBDS12thpassingcertificate").innerHTML;
        if(!document.getElementById("cb84").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box8").innerHTML = y;
        }
function jquery85()  {
            
        var x = document.getElementById("DocBDSclgleavingcerti").innerHTML;
        if(!document.getElementById("cb85").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box8").innerHTML = y;
}
function jquery86()  {
            
        var x = document.getElementById("DocBDSmigrationcerti").innerHTML;
        if(!document.getElementById("cb86").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box8").innerHTML = y;
}
function jquery87()  {
            
        var x = document.getElementById("DocBDSdisablitycerti").innerHTML;
        if(!document.getElementById("cb87").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box8").innerHTML = y;
        }
//jquery for MDS start
function jquery88()  {
            
        var x = document.getElementById("DocMDSadmitcard").innerHTML;
        if(!document.getElementById("cb88").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery89()  {
            
        var x = document.getElementById("DocMDSrankletter").innerHTML;
        if(!document.getElementById("cb89").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }
    
function jquery90()  {
            
        var x = document.getElementById("DocMDSallotmentletter").innerHTML;
        if(!document.getElementById("cb90").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery91()  {
            
        var x = document.getElementById("DocMDSadmissionletter").innerHTML;
        if(!document.getElementById("cb91").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery92()  {
            
        var x = document.getElementById("DocMDS10thmarksheet").innerHTML;
        if(!document.getElementById("cb92").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery93()  {
            
        var x = document.getElementById("DocMDS10thpassingcerti").innerHTML;
        if(!document.getElementById("cb93").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery94()  {
            
        var x = document.getElementById("DocMDS12thmarskheet").innerHTML;
        if(!document.getElementById("cb94").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery95()  {
            
        var x = document.getElementById("DocMDS12thpassingcerti").innerHTML;
        if(!document.getElementById("cb95").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery96()  {
            
        var x = document.getElementById("DocMDS1bdsmarksheet").innerHTML;
        if(!document.getElementById("cb96").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery97()  {
            
        var x = document.getElementById("DocMDS2bdsmarksheet").innerHTML;
        if(!document.getElementById("cb97").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery98()  {
            
        var x = document.getElementById("DocMDS3bdsmarksheet").innerHTML;
        if(!document.getElementById("cb98").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery99()  {
            
        var x = document.getElementById("DocMDS4bdsmarksheet").innerHTML;
        if(!document.getElementById("cb99").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery100()  {
            
        var x = document.getElementById("DocMDSprovisionalpassingcerti").innerHTML;
        if(!document.getElementById("cb100").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery101()  {
            
        var x = document.getElementById("DocMDSattemptcerti").innerHTML;
        if(!document.getElementById("cb101").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery102()  {
            
        var x = document.getElementById("DocMDSbdsdegreecerti").innerHTML;
        if(!document.getElementById("cb102").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery103()  {
            
        var x = document.getElementById("DocMDSclginternshipcerti").innerHTML;
        if(!document.getElementById("cb103").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery104()  {
            
        var x = document.getElementById("DocMDSdcirecognitioncerti").innerHTML;
        if(!document.getElementById("cb104").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }


function jquery105()  {
            
        var x = document.getElementById("DocMDSdciregcerti").innerHTML;
        if(!document.getElementById("cb105").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery106()  {
            
        var x = document.getElementById("DocMDSclgleavingcerti").innerHTML;
        if(!document.getElementById("cb106").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery107()  {
            
        var x = document.getElementById("DocMDSmigrationcerti").innerHTML;
        if(!document.getElementById("cb107").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

function jquery108()  {
            
        var x = document.getElementById("DocMDSdisablitycerti").innerHTML;
        if(!document.getElementById("cb108").checked) {
                y.push(x);
            }
            else{
                var index = y.indexOf(x);
                if(index > -1){
                    y.splice(index,1);
                }
            }            
            document.getElementById("query_box9").innerHTML = y;
        }

//DocMDS ends

//Progress student js start


function jquery109()  {
            
    var x = document.getElementById("clgPSyear").innerHTML;
    if(!document.getElementById("cb109").checked) {
            y.push(x);
        }
        else{
            var index = y.indexOf(x);
            if(index > -1){
                y.splice(index,1);
            }
        }            
        document.getElementById("query_box10").innerHTML = y;
    }

function jquery110()  {
            
    var x = document.getElementById("clgPSmarksobtained").innerHTML;
    if(!document.getElementById("cb110").checked) {
            y.push(x);
        }
        else{
            var index = y.indexOf(x);
            if(index > -1){
                y.splice(index,1);
            }
        }            
        document.getElementById("query_box10").innerHTML = y;
    }

function jquery111()  {
            
    var x = document.getElementById("clgPSstatus").innerHTML;
    if(!document.getElementById("cb111").checked) {
            y.push(x);
        }
        else{
            var index = y.indexOf(x);
            if(index > -1){
                y.splice(index,1);
            }
        }            
        document.getElementById("query_box10").innerHTML = y;
    }

function jquery112()  {
            
    var x = document.getElementById("clgPSrevaluation").innerHTML;
    if(!document.getElementById("cb112").checked) {
            y.push(x);
        }
        else{
            var index = y.indexOf(x);
            if(index > -1){
                y.splice(index,1);
            }
        }            
        document.getElementById("query_box10").innerHTML = y;
    }

function jquery113()  {
            
    var x = document.getElementById("clgPSnoofattempts").innerHTML;
    if(!document.getElementById("cb113").checked) {
            y.push(x);
        }
        else{
            var index = y.indexOf(x);
            if(index > -1){
                y.splice(index,1);
            }
        }            
        document.getElementById("query_box10").innerHTML = y;
}

    


        
