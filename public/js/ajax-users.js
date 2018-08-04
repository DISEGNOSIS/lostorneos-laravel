(function() {

    var input = document.getElementById("query");
    var query = document.getElementById("query").value;
    
    input.addEventListener('keyup', search);

    function search() {
        console.log(query);
        if(query.length == 0) {
          document.getElementById("search").innerHTML="";
        }
        if(window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        console.log(xmlhttp.readyState);
        xmlhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200) {
            document.getElementById("search").innerHTML = this.responseText;
            console.log(this.responseText);
          }
        }
        xmlhttp.open("GET","{{ route('admin.users') }}?q="+query,true);
        xmlhttp.send();
    }

})();