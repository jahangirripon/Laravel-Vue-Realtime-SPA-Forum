<template>

	<v-container>
		<v-form @submit.prevent="signup">

		<v-text-field
	      v-model="form.name"
	      label="Name"
	      type="text"
	      required
	    ></v-text-field>

	    <v-text-field
	      v-model="form.email"
	      label="E-mail"
	      type="email"
	      required
	    ></v-text-field>

		<v-text-field
	      v-model="form.password"
	      label="Password"
	      type="password"
	      required
	    ></v-text-field>

	    <v-text-field
	      v-model="form.password_confirmations"
	      label="Password confirmation"
	      type="password"
	      required
	    ></v-text-field>

	    <v-btn
			color="green"
			type="submit"
	    >Signup</v-btn>	

	    <router-link to="/login">
			<v-btn color="blue">Login</v-btn>
	    </router-link>

	  </v-form>
	</v-container>	

</template>

<script>
    export default {
    	data(){
    		return {
    			form : {
    				name:null,
    				email:null,
    				password:null,
    				password_confirmation:null
    			}
    		}
    	},
    	methods : {
    		signup() {
    			
    			// User.signup(this.form)

    			axios.post('/api/auth/signup', this.form)
    			.then(res => User.responseAfterLogin(res))
    		}
    	}
    }
</script>

<style>
    

</style>
