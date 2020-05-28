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
                            <img alt="Avatar" class="table-avatar" src="../assets/${service.caption}">
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="serviceDetails.php?id=${service.service_id}">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
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
}