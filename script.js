
   	
    var json;
    var res;
    document.addEventListener('DOMContentLoaded', async function() {
        res = await fetch('http://localhost:8000/getComments');
         json = await res.json()
    }, false);
document.getElementById('search-input').addEventListener('keyup', async (e) => {
    // Search comments
    // Use this API: https://jsonplaceholder.typicode.com/comments?postId=3
    // Display the results in the UI

    // Things to look out for
    // ---
    // Use es6
    let results = [];
    input = document.getElementById("search-input").value;
    var list =  document.getElementById('results');  
    list.innerHTML = "";
    list.style.display = "block";
    for(const key in json)
      {
    if(input.length >0 && json[key].name.includes(input)){
        list.innerHTML += `<li class="listitems"> ${json[key].name}</li>`;
      }
     }
})