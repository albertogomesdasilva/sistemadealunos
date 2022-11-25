<template>
  <div>
    <Head title="Cadastrar Alunos" />
    <h1 class="mb-8 text-3xl font-bold">
      <Link class="text-indigo-400 hover:text-indigo-600" href="/alunos">Alunos</Link>
      <span class="text-indigo-400 font-medium">/</span> Cadastrar Aluno
    </h1>
    <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="store">
        <div class="flex flex-wrap -mb-8 -mr-6 p-8">
          <text-input v-model="form.nome" :error="form.errors.nome" class="pb-8 pr-6 w-full lg:w-1/2" label="Nome do Aluno" />
          <select-input v-model="form.id_turma" :error="form.errors.id_turma" class="pb-8 pr-6 w-full lg:w-1/2" label="Turma">
            <option :value="null" />
            <option v-for="turma in turmas" :key="turma.id" :value="turma.id">{{ turma.nome }}</option>
          </select-input>
        </div>
        <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
          <loading-button :loading="form.processing" class="btn-indigo" type="submit">Cadastrar Aluno</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import TextInput from '@/Shared/TextInput'
import LoadingButton from '@/Shared/LoadingButton'
import SelectInput from '@/Shared/SelectInput'

export default {
  components: {
    Head,
    Link,
    LoadingButton,
    TextInput,
    SelectInput
  },
  layout: Layout,
  props: {},

  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        nome: '',
        id_turma: ''
       
      }),
    }
  },
  methods: {
    store() {
      this.form.post('/alunos')
    },
  },

  props: {
    turmas: Object
  }
}
</script>
