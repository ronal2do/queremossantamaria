<template>
	<form class="form-horizontal" role="form" action="#" @submit.prevent="AddNew" method="POST">
	      <div class="form-group">
	        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
	          <input type="text" class="form-control" v-model="newMessage.nome" name="nome" placeholder="Nome">
	        </div>
	      </div>
	      <div class="form-group">
	        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12"> 
	          <input type="text" class="form-control" v-model="newMessage.endereco" name="endereco" placeholder="Endereço">
	        </div>
	      </div>
	     <div class="form-group">
	        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
	          <input type="email" class="form-control" v-model="newMessage.email" name="email" placeholder="E-mail">
	        </div>
	      </div>
		    <div class="form-group">
		        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
		          	<input type="text" class="form-control" v-model="newMessage.telefone" name="telefone" placeholder="Telefone">
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
		          	<input type="text" class="form-control" v-model="newMessage.celular" name="celular" placeholder="Celular">
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12"> 
		        <br>
		            <label class="control-label" for="celular">WhatsApp </label>

		            <label class="radio-inline"><input type="radio" v-model="newMessage.whatsapp" name="whatsapp" value="sim" checked> Sim</label>
		            <label class="radio-inline"><input type="radio" v-model="newMessage.whatsapp" name="whatsapp" value="nao"> Não</label>
		        </div>
		     </div>
		    <p class="Strong">Sugestão para programa de governo.</p>
		    <div class="form-group">
		        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
		            <textarea class="form-control" rows="5" v-model="newMessage.sugestao" name="sugestao"></textarea>
		        </div>
		    </div>
	      	<div class="form-group"> 
		        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
		          <button type="submit" class="btn btn-block">Enviar</button>
		        </div>
	      	</div>
    </form>
</template>

<script>
	var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

var vm = new Vue({
	http: {
      root: '/root',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
      }
    },

	el: '#UserController',

	data: {
		newMessage: {
			nome:'',
			endereco:'',
			email:'',
			telefone:'',
			celular:'',
			whatsapp:'',
			sugestao:''
		},

		success: false,

		edit: false
	},

	methods: {

		fetchUser: function () {
			this.$http.get('/api/users', function (data) {
				this.$set('users', data)
			})
		},

		RemoveUser: function (id) {
			var ConfirmBox = confirm("Are you sure, you want to delete this User?")

			if(ConfirmBox) this.$http.delete('/api/users/' + id)

			this.fetchUser()
		},

		EditUser: function (id) {
			var user = this.newMessage

			this.newMessage = { id: '', name: '', email: '', address: ''}

			this.$http.patch('/api/users/' + id, user, function (data) {
				console.log(data)
			})

			this.fetchUser()

			this.edit = false

		},

		ShowUser: function (id) {
			this.edit = true

			this.$http.get('/api/users/' + id, function (data) {
				this.newMessage.id = data.id
				this.newMessage.name = data.name
				this.newMessage.email = data.email
				this.newMessage.address = data.address
			})
		},

		AddNew: function () {
			// User input
			var user = this.newMessage

			// Clear form input
			this.newMessage = { name:'', email:'', address:'' }

			// Send post request
			this.$http.post('/api/users/', user)

			// Show success message
			self = this
			this.success = true
			setTimeout(function () {
				self.success = false
			}, 5000)

			// Reload page
			this.fetchUser()

		}

	},

	computed: {
		validation: function () {
			return {
				name: !!this.newMessage.name.trim(),
				email: emailRE.test(this.newMessage.email),
				address: !!this.newMessage.address.trim()
			}
		},

		isValid: function () {
			var validation = this.validation
			return Object.keys(validation).every(function (key) {
				return validation[key]
			})
		}
	},

	ready: function () {
		this.fetchUser()
	}
});



</script>