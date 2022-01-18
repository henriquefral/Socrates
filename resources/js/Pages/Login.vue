<template> 
<div>
    <form> 
        <label for='email'> Seu email: </label>
        <input type='text' placeholder='Seu email' v-model='form.email' name='email' id='email'>
        <label for='password'> Sua senha: </label>
        <input type='password' placeholder='Sua senha' v-model='form.password' name='password' id='password'>
        <button type='submit'> Logar </button>
    </form>
</div>
</template> 


<script>

export default {
    data: () => {
        return {
            form: {
                email: null,
                password: null,
            }
        }
    },
}
</script>
