const it1 = document.getElementById("item1")
const it2 = document.getElementById("item2")
const btnS = document.getElementById("btn-search")
const pesquisa=document.getElementById("search-input")
const div_search = document.getElementById("search")
const btnX=document.getElementById("btn-x")

it1.onclick=function(){
    it1.style.opacity = '1'
    it1.style.border = '2px solid #00fa00'
    it2.style.opacity='0.5'
    it2.style.boxShadow='5px 5px 10px rgba(0, 0, 0, 0.5)'
    it2.style.border='none'
}

it2.onclick=function(){
    it2.style.opacity = '1'
    it2.style.border = '2px solid #00fa00'
    it1.style.opacity = '0.5'
    it1.style.boxShadow = '5px 5px 10px rgba(0, 0, 0, 0.5)'
    it1.style.border='none'
    
}


btnS.onclick=function(){
  div_search.style.display='flex'  
 
}

btnX.onclick=function(){
    div_search.style.display='none'  
  }



