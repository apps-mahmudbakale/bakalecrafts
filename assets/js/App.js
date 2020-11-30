class App{
	// constructor(){
		
	// }

	todoList(){
		fetch('../../api/getTodo.php')
		.then((res) => res.json())
		.then((data) => {
			let output = '<div class="alert" id="alert" style="display: none;"></div><ul class="todo-list" data-widget="todo-list">';
			data.data.forEach(function(todo) {
				output += `
				<li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo${todo.id}" id="todoCheck${todo.id}">
                      <label for="todoCheck${todo.id}"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">${todo.name}</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger float-right"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash" data-id="${todo.id}" onclick="delTodo(this)"></i>
                    </div>
                  </li>`;
			});
			output += '</ul>'
			document.getElementById('todoList').innerHTML = output;
		})
	}

	addTodo(text, date, checked){
		this.text = text;
		this.checked = 'false';
		this.date = Date.now()
		fetch('../../api/addTodo.php',{
			method:'POST', 
			headers: {
				'Accept': 'application/json, text/plain, */*',
				'Content-type': 'application/json'
			},
			body:JSON.stringify({text:this.text, date:this.date, checked:this.checked})
		})
		.then((res) => res.json())
		.then((data) => this.todoAlert(data.message, data.type))
	}

	todoAlert(title, type){
		const alert  = document.getElementById('alert');

		if (type == 'success') {
			alert.classList.add('alert-success');
			alert.classList.add('alert-dismissible');
			alert.style.display = 'block';
			alert.innerHTML = `<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-check"></i> ${title}`;
		}else if (type == 'danger') {
			alert.classList.add('alert-danger');
			alert.classList.add('alert-dismissible');
			alert.style.display = 'block';
			alert.innerHTML = `<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-check"></i> ${title}`;
		}
		setTimeout((()=>{
			this.todoList();
		}), 5000)
		
	}

	todoDel(id){
		this.id = id;
	 fetch('../../api/delTodo.php',{
      method:'POST', 
      headers: {
        'Accept': 'application/json, text/plain, */*',
        'Content-type': 'application/json'
      },
      body:JSON.stringify({id:this.id})
    })
    .then((res) => res.json())
    .then((data) => this.todoAlert(data.message, data.type))
	}

	servicesList(){
		fetch('../../api/getServices.php')
		.then((res) => res.json())
		.then((data) => {
			var serviceOuput = '';
			var sn =0;
			data.services.forEach( function(service) {
				sn++;

				serviceOuput +=`<tr>
				<td>${sn}</td>
				 <td>
	                  <a>
	                     ${service.title}
	                  </a>
                </td>
                <td>
                            <img alt="Avatar" class="table-avatar" src="../assets/img/services/${service.caption}">
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="serviceDetails.php?id=${btoa(service.service_id)}">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="serviceEdit.php?id=${btoa(service.service_id)}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="?id=${btoa(service.service_id)}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td>
                </tr>`;
			});

			document.getElementById('serviceList').innerHTML = serviceOuput;
		})
	}

		teamList(){
			fetch('../../api/getTeams.php')
			.then((res) => res.json())
			.then((data) => {
				var teamOuput = '';
				var sn =0;
				data.teams.forEach( function(team) {
					sn++;

					teamOuput +=`<tr>
					<td>${sn}</td>
					 <td>
		                  <a>
		                     ${team.name}
		                  </a>
	                </td>
	                <td>
	                            <img alt="Avatar" class="img img-rounded" style="width:3.9rem" src="../assets/img/team/${team.picture}">
	                </td>
	                <td>
		                  <a>
		                     ${team.phone}
		                  </a>
	                </td>
	                <td>
		                  <a>
		                     ${team.rank}
		                  </a>
	                </td>
	                <td>
		                  <a>
		                     ${team.rank}
		                  </a>
	                </td>
	                <td>
		                  <a>
		                     ${team.rank}
		                  </a>
	                </td>
	                <td>
		                  <a>
		                     ${team.rank}
		                  </a>
	                </td>
	                <td>
		                  <a>
		                     ${team.rank}
		                  </a>
	                </td>
	                <td class="btn-group">
	                    <a class="btn btn-info btn-sm" href="teamEdit.php?id=${btoa(team.id)}">
	                        <i class="fas fa-pencil-alt"></i>
	                    </a>
	                    <a class="btn btn-danger btn-sm" href="?id=${btoa(team.id)}">
	                        <i class="fas fa-trash"></i>
	                    </a>
	                </td>
	                </tr>`;
				});

				document.getElementById('teamList').innerHTML = teamOuput;
			})
		}
			worksList(){
				fetch('../../api/getWorks.php')
				.then((res) => res.json())
				.then((data) => {
					var workOuput = '';
					var sn =0;
					data.works.forEach( function(work) {
						sn++;

						workOuput +=`<tr>
						<td>${sn}</td>
						 <td>
			                  <a>
			                     ${work.name}
			                  </a>
		                </td>
		                <td>
		                            <img alt="Avatar" class="img img-rounded" style="width:3.9rem" src="../assets/img/portfolio/${work.image}">
		                </td>
		                <td class="btn-group">
		                    <a class="btn btn-danger btn-sm" href="?id=${btoa(work.id)}">
		                        <i class="fas fa-trash"></i>
		                    </a>
		                </td>
		                </tr>`;
					});

					document.getElementById('worksList').innerHTML = workOuput;
				})
			}



			testimonyList(){
				fetch('../../api/getTestimonies.php')
				.then((res) => res.json())
				.then((data) => {
					var testimoniesOuput = '';
					var sn =0;
					data.testimonies.forEach( function(testimony) {
						sn++;

						testimoniesOuput +=`<tr>
						<td>${sn}</td>
						 <td>
			                  <a>
			                     ${testimony.name}
			                  </a>
		                </td>
		                <td>
			                  <a>
			                     ${testimony.comment}
			                  </a>
		                </td>
		                <td class="btn-group">
		                    <a class="btn btn-info btn-sm" href="testimoniesEdit.php?id=${btoa(testimony.id)}">
		                        <i class="fas fa-pencil-alt"></i>
		                    </a>
		                    <a class="btn btn-danger btn-sm" href="?id=${btoa(testimony.id)}">
		                        <i class="fas fa-trash"></i>
		                    </a>
		                </td>
		                </tr>`;
					});

					document.getElementById('testimonyList').innerHTML = testimoniesOuput;
				})
			}
}