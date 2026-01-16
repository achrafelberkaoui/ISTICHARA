const avocat = document.getElementById("avocatFields");
const huissier = document.getElementById("huissierFields");
const type = document.getElementById("type");

type.addEventListener("change", ()=>{
    const type = document.getElementById("type").value;
    if(type == 'avocat'){
        avocat.style.display = "block";
        huissier.style.display = "none";
        
    }
    if(type == 'huissier'){
        avocat.style.display = "none";
        huissier.style.display = "block";
        
    }
    
})