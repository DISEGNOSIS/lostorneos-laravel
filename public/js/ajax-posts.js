(function() {

	const pagination = document.querySelector('.pagination');
	const input = document.querySelector('#query');
	const tbody = document.querySelector('tbody');
	const resetButton = document.querySelector('#reset');
	const content = tbody.innerHTML;

	input.addEventListener('keyup', search);
	resetButton.addEventListener('click', reset);

    function search() {
		var result = '';
		var query = input.value;
		if(query.length > 0) {
			if(window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {  // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					var response = JSON.parse(this.responseText);
				}
				if(!response.error) {
					if(response.length > 0) {
						response.forEach(function(post) {
							result += '<tr>';
							result += '<td><a href="posts/' + post.id + '/active"><i class="fas {{ ' + (post.active ? 'fa-check' : 'fa-times') + ' }}"></i></a></td>';
							result += '<td>' + post.id + '</td>';
							result += '<td><a href="posts/' + post.id + '">' + (post.title ? post.title : '') + '</a></td>';
							result += '<td><a href="categories/' + post.category.id + '">' + post.category.name + '</a></td>';
							result += '<td>' + post.user.username + '</td>';
							result += '<td>' + post.published_at + '</td>';
							result += '<td>' + post.created_at + '</td>';
							result += '<td><a class="edit" href="posts/' + post.id + '/edit"><i class="fas fa-edit"></i></a></td>';
							result += '<td><form action="posts/' + post.id + '" method="POST">'
							result += '<input name="_token" value="p21xbEzrsvW60E4yji7AX8uRptXjL9Fif48yS7z9" type="hidden"><input name="_method" value="DELETE" type="hidden">';
							result += '<button type="submit" class="delete" href=""><i class="fas fa-trash-alt"></i></button></form>';
							result += '</tr>';
						});
						tbody.innerHTML = result;
						pagination.style.display = 'none';
					} else {
						tbody.innerHTML = '<tr><td colspan="11"><h2>No se han encontrado Noticias.</h2></td></tr>';
					}			
				}
			}
			xmlhttp.open("GET","/api/posts/search?query="+query,true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send();
		} else if(query == '') {
			tbody.innerHTML = content;
			pagination.style.display = 'flex';
		}
		
	}
	
	function reset() {
		input.value = '';
		search();
	}

})();