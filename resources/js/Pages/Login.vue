<template> 
<div>
    <div>
        <form @submit.prevent="handleForm"> 
            <label for='email'> Seu email: </label>
            <input type='text' placeholder='Seu email' v-model='form.email' name='email' id='email'>
            <label for='password'> Sua senha: </label>
            <input type='password' placeholder='Sua senha' v-model='form.password' name='password' id='password'>
            <button type='submit'> Logar </button>
        </form>
    </div>
    <div> 
        <div v-for="(error,index) in errors" :key="index">
            {{error}}
        </div>    
    </div> 
</div>
</template> 


<script>

export default {
    props:{
        errors: Object
    },
    data: () => {
        return {
            form: {
                email: null,
                password: null,
            }
        }
    },
    methods: {
        handleForm() {
            this.$inertia.post('/login', this.form);
        }
    }
}
</script>
