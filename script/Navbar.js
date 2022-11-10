function myFunction(x) {
    x.classList.toggle("change");
  }

  const openNav=()=>{
    let sidebar = document.getElementById("sidebar");
    if(sidebar.style.maxHeight == "100%"){
      sidebar.style.maxHeight = "0%";
    }
    else{
      sidebar.style.maxHeight = "100%";
    }
  }