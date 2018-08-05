(function() {

	const form = document.forms[0];
	const pagination = document.querySelector('.pagination');
	const input = document.querySelector('#query');
	const tbody = document.querySelector('tbody');

    input.addEventListener('keyup', search);

	form.onsubmit = function(ev) {
		ev.preventDefault();
	}

    function search() {
		var result = '';
		var query = input.value;
		if(query != '') {
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
					data = response.data;
					data.forEach(function(user) {
						console.log(user.country_id, user);
						result += '<tr>';
						result += '<td><a href="users/' + user.id + '/active"><i class="fas {{ ' + (user.active ? 'fa-check' : 'fa-times') + ' }}"></i></a></td>';
						result += '<td>' + user.id + '</td>';
						result += '<td><a href="users/' + user.id + '">' + (user.name ? user.name : '') + '</a></td>';
						result += '<td><a href="users/' + user.id + '">' + user.username + '</a></td>';
						result += '<td>' + user.email + '</td>';
						result += '<td>' + user.country_id + '</td>';
						result += '<td>' + user.created_at + '</td>';
						result += '<td>' + user.last_sign_in + '</td>';
						result += '<td><a class="edit" href="users/' + user.id + '/edit"><i class="fas fa-edit"></i></a></td>';
						result += '<td><form action="users/' + user.id + '" method="POST">'
						/* result += "@csrf @method('DELETE')"; */
						result += '<button type="submit" class="delete" href=""><i class="fas fa-trash-alt"></i></button></form>';
						result += '</tr>';
					});
					tbody.innerHTML = result;
					pagination.style.display = 'none';



						/* result += '<td><a href="users/' + user.id + '/active"><i class="fas {{ ' + (user.active ? 'fa-check' : 'fa-times') + ' }}"></i></a></td>';
						result += '<td>' + user.id + '</td>';
						result += '<td><a href="users/' + user.id + '">' + user.name ? user.name : '' + '</a></td>';
						result += '<td><a href="users/' + user.id + '">' + user.username + '</a></td>';
						result += '<td>' + user.email + '</td>';
						result += '<td><img src="/img/flags/{{ ' + user.country_id ? user.country_id.flag.toLowerCase() : '' + ' }}" alt="{{ ' + user.country_id ? user.country_id.name : '' + ' }}" class="flag"/>' + '</td>';
						result += '<td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>'; */


					
				}

			}
			/* xmlhttp.open("GET","/admin/users/search",true); */
			xmlhttp.open("GET","/admin/users/search?query="+query,true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send();
		} else {
			pagination.style.display = 'flex';
		}
    }

})();




/* $(document).ready(function(){
	$('#query').on('keyup',function(){
		var value = $(this).val();
		console.log('entre');
		console.log(value);
		$.ajax({
			type: 'GET',
			url: '/admin/users/search',
			data:{ 'query':value },
			success:function(data) {
				console.log(data);
				$('tbody').html(data);
			}	
		});	 
	});
}); */