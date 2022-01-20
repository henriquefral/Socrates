<template> 

    <div> 
        <form @submit.prevent="handleForm"> 
            <label for = "name"> Seu nome: </label>
            <input type="text" placeholder="Seu nome" v-model="form.name" id="name" name="name">
            <label for = "cpf"> Seu CPF: </label>
            <input type="text" placeholder="Ex.: 000.000.000-00" v-model="form.cpf" id="cpf" name="cpf" v-mask="'###.###.###-##'">
            <label for = "birthday"> Data de nascimento: </label>
            <input type="date"  placeholder="Sua data de nascimento" v-model="form.birthday" id="birthday" name="birthday">
            <label for = "occupation"> Você é: </label>
            <select placeholder="Sua ocupação" v-model="form.occupation" id="occupation" name="occupation">
                <option value="student"> Estudante </option>
                <option value="teacher"> Professor </option>
            </select>
            <label for = "email"> Seu email: </label>
            <input type="text" placeholder="Seu email" v-model="form.email" id="email" name="email">
            <div>
                <label for = "password"> Sua senha: </label>
                <input type="password" placeholder="Sua senha" v-model="form.password" id="password" name="password">
                <label for = "password_confirmation"> Confirme sua senha: </label>
                <input type="password" placeholder="Confirme sua senha" v-model="form.password_confirmation" id="password_confirmation" name="password_confirmation">
                    <div v-if="form.password_confirmation != form.password">
                        As senhas não são iguais.
                    </div>
            </div>
            <button type="submit"> Cadastrar </button>
        </form>    
    <div v-for="(error,index) in errors" :key="index">
        {{error}}
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
                name: null,
                cpf: null,
                birthday: null,
                occupation: null,
                email: null,
                password: null,
                password_confirmation: null,
            }
        }
    },
    methods: {
        handleForm() {
            this.$inertia.post('/register', this.form);
        }
    }
}

</script>